<?php
class GhController extends AppController {
var $helpers = array('Html', 'Form','Js');
public $components = array(
'Paginator',
'Session','Cookie','RequestHandler'
);


var $name = 'Gh';

function webroot_path() {
	$this->loadmodel('info_helper');
	$conditions=array("id" => 1);
	$resultwebroot_path=$this->info_helper->find('all',array('conditions'=>$conditions));
	return $resultwebroot_path[0]['info_helper']['path'];
}

function ath(){
	$user_id=$this->Session->read('user_id');
	if(empty($user_id)){
		$this->Session->destroy();
		$this->redirect(array('action' => 'index'));
	}
}


function demo(){
$this->layout="fullpage";

}


function logout(){
$this->layout=null;
$this->Session->destroy();
$this->redirect(array('action' => 'index'));
}

function index(){
	$this->layout='without_session';
	if(isset($this->request->data['login'])){
		$username=htmlentities($this->request->data["username"]);
		$password=htmlentities($this->request->data["password"]);
		
		$this->loadmodel('user');
		$conditions1=array('email'=>$username,'password'=>$password);
		$result_user=$this->user->find('all',array('conditions'=>$conditions1));
		$n=sizeof($result_user);
		if($n>0){
			$user_id=$result_user[0]["user"]["id"];
			$this->loadmodel('domain');
			$conditions1=array('user_id'=>$user_id);
			$result_domain=$this->domain->find('all',array('conditions'=>$conditions1));
			$domain_id=$result_domain[0]["domain"]["id"];
		
			$this->Session->write('user_id', $user_id);
			$this->Session->write('domain_id', $domain_id);
			$this->redirect(array('action' => 'dashboard'));
		}
			 
		
	}
}

function sign_up(){
	$this->layout='without_session';
}

function get_domain_names_list(){
	$this->layout=null;
	$user_id=$this->Session->read('user_id');
	$domain_id=$this->Session->read('domain_id');
	
	$this->loadmodel('domain');
	$conditions1=array('user_id'=>$user_id);
	return $result_domain=$this->domain->find('all',array('conditions'=>$conditions1));
}

function get_domain_names($id=null){
	$this->layout=null;
	
	
	$this->loadmodel('domain');
	$conditions1=array('id'=>$id);
	$result_domain=$this->domain->find('all',array('conditions'=>$conditions1));
	return $result_domain[0]["domain"]["domain_name"];
}

function get_user_info($id=null){
	$this->layout=null;
	
	
	$this->loadmodel('user');
	$conditions1=array('id'=>$id);
	return $result_user=$this->user->find('all',array('conditions'=>$conditions1));
}

function submit_signup(){
	$this->layout=null;
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$domain=$_POST["domain"];
	
	$report=array();
	if(empty($name)){
		$report[]=array('label'=>'name', 'text' => 'Please fill name');
	}
	if(empty($email)){
		$report[]=array('label'=>'email', 'text' => 'Please fill email');
	}
	if(empty($password)){
		$report[]=array('label'=>'password', 'text' => 'Please fill password');
	}
	if(empty($domain)){
		$report[]=array('label'=>'domain', 'text' => 'Please fill domain');
	}
	
	
	if(sizeof($report)>0){
		$output=json_encode(array('report_type'=>'error','report'=>$report));
		die($output);
	}
	
	$this->loadmodel('user');
	$this->user->save(array('name' => $name, 'email' => $email, 'password' => $password));
	
	$LastInsertID=(int)$this->user->getLastInsertID();
	
	$this->loadmodel('domain');
	$this->domain->save(array('domain_name' => $domain, 'user_id' => $LastInsertID));
	
	$LastInsertID_domain=(int)$this->domain->getLastInsertID();
	
	$this->Session->write('user_id', $LastInsertID);
	$this->Session->write('domain_id', $LastInsertID_domain);
					
	$output=json_encode(array('report_type'=>'success','report'=>'congratulations! You have been successfully registered.'));
	die($output);
	
	
}


function dashboard(){
	$this->ath();
	if($this->RequestHandler->isAjax()){
		$this->layout='blank';
		}else{
		$this->layout='session';
		}
}

function create_notification(){
	$this->ath();
	if($this->RequestHandler->isAjax()){
		$this->layout='blank';
		}else{
		$this->layout='session';
		}
}

function edit($id=null){
	$this->ath();
	if($this->RequestHandler->isAjax()){
		$this->layout='blank';
		}else{
		$this->layout='session';
		}
	$this->set('id',$id);
	$this->loadmodel('notification');
	$conditions=array("id" => $id);
	$this->set('result_notification',$this->notification->find('all',array('conditions'=>$conditions)));
}

function notification_targeting_rule($id=null){
	$this->ath();
	if($this->RequestHandler->isAjax()){
		$this->layout='blank';
		}else{
		$this->layout='session';
		}
	$this->set('id',$id);
	$this->loadmodel('notification_rule');
	$conditions=array("notification_id" => $id);
	$this->set('result_notification_rule',$this->notification_rule->find('all',array('conditions'=>$conditions)));
}

function notification_view($id=null){
	$this->ath();
	$this->layout=null;
	$id=(int)$id;
	$this->loadmodel('notification');
	$conditions=array("id" => $id);
	$this->set('result_notification',$this->notification->find('all',array('conditions'=>$conditions)));
	//$this->Cookie->write('name', 'Larry');
	$growth_hacker=@$this->Cookie->read('growth-hacker-n-'.$id);
	if(empty($growth_hacker)){
		$this->loadmodel('notification');
		$this->notification->updateAll(array("unique_view" =>"unique_view+1","total_view" =>"total_view+1"),array("id" => $id));
		$this->Cookie->write('growth-hacker-n-'.$id, 'viewed');
	}else{
		$this->loadmodel('notification');
		$this->notification->updateAll(array("total_view" =>"total_view+1"),array("id" => $id));
		$this->Cookie->write('growth-hacker-n-'.$id, 'viewed');
	}
}

function draft(){
	$this->ath();
	if($this->RequestHandler->isAjax()){
	$this->layout='blank';
	}else{
	$this->layout='session';
	}
	$this->loadmodel('notification');
	$conditions=array("active" => 1);
	$this->set('result_notification',$this->notification->find('all',array('conditions'=>$conditions)));
}

function notification_preview(){
	$this->layout="blank";
	$this->set('title',$this->request->query['title']);
	$this->set('description',$this->request->query['description']);
	$this->set('button_text',$this->request->query['button_text']);
	$this->set('alignment',$this->request->query['alignment']);
	$this->set('width',$this->request->query['width']);
	
}

function submit_notification(){
	$this->layout=null;
	$title=$_POST["title"];
	$description=$_POST["description"];
	$button_text=$_POST["button_text"];
	$button_url=$_POST["button_url"];
	$target=$_POST["target"];
	$alignment=$_POST["alignment"];
	$width=$_POST["width"];
	$theme=$_POST["theme"];
	$domain_id=$this->Session->read('domain_id');
	
	$report=array();
	if(empty($title)){
		$report[]=array('label'=>'title', 'text' => 'Please fill title');
	}
	if(empty($description)){
		$report[]=array('label'=>'description', 'text' => 'Please fill description');
	}
	if(empty($button_text)){
		$report[]=array('label'=>'button_text', 'text' => 'Please fill button_text');
	}
	if(empty($button_url)){
		$report[]=array('label'=>'button_url', 'text' => 'Please fill button_url');
	}
	if(empty($target)){
		$report[]=array('label'=>'target', 'text' => 'Please select target');
	}
	if(empty($width)){
		$report[]=array('label'=>'width', 'text' => 'Please fill width');
	}
	if(empty($theme)){
		$report[]=array('label'=>'theme', 'text' => 'Please select theme');
	}
	
	
	if(sizeof($report)>0){
		$output=json_encode(array('report_type'=>'error','report'=>$report));
		die($output);
	}
	
	$this->loadmodel('notification');
	$this->notification->save(array('title' => $title, 'description' => $description, 'button_text' => $button_text, 'button_url' => $button_url ,'target' => $target,'domain_id' => $domain_id,'alignment' => $alignment,'width' => $width,'theme' => $theme,'active' => 1 ,'group_url' => 1 ));
	$LastInsertID=(int)$this->notification->getLastInsertID();
	$output=json_encode(array('report_type'=>'success','report'=>$LastInsertID));
	die($output);
}

function submit_notification_edit(){
	$this->layout=null;
	$id=$_POST["id"];
	$title=$_POST["title"];
	$description=$_POST["description"];
	$button_text=$_POST["button_text"];
	$button_url=$_POST["button_url"];
	$target=$_POST["target"];
	$alignment=$_POST["alignment"];
	$width=$_POST["width"];
	$theme=$_POST["theme"];
	$domain_id=$this->Session->read('domain_id');
	
	$report=array();
	if(empty($title)){
		$report[]=array('label'=>'title', 'text' => 'Please fill title');
	}
	if(empty($description)){
		$report[]=array('label'=>'description', 'text' => 'Please fill description');
	}
	if(empty($button_text)){
		$report[]=array('label'=>'button_text', 'text' => 'Please fill button_text');
	}
	if(empty($button_url)){
		$report[]=array('label'=>'button_url', 'text' => 'Please fill button_url');
	}
	if(empty($target)){
		$report[]=array('label'=>'target', 'text' => 'Please select target');
	}
	if(empty($width)){
		$report[]=array('label'=>'width', 'text' => 'Please fill width');
	}
	if(empty($theme)){
		$report[]=array('label'=>'theme', 'text' => 'Please select theme');
	}
	
	
	if(sizeof($report)>0){
		$output=json_encode(array('report_type'=>'error','report'=>$report));
		die($output);
	}
	
	$this->loadmodel('notification');
	$this->notification->id = $id;
	$this->notification->save(array('title' => $title, 'description' => $description, 'button_text' => $button_text, 'button_url' => $button_url ,'target' => $target,'domain_id' => $domain_id,'alignment' => $alignment,'width' => $width,'theme' => $theme,'active' => 1 ,'group_url' => 1));
	$output=json_encode(array('report_type'=>'success','report'=>$id));
	die($output);
}

function update_rules($id=null){
	$this->layout=null;
	$url=$_POST["url"];
	$group_url=$_POST["group_url"];
	$leave_intent=(int)$_POST["leave_intent"];
	
	$this->loadmodel('notification');
	$this->notification->updateAll(array("group_url"=>$group_url,"leave_intent"=>$leave_intent),array("id"=>$id));
	
	$this->loadmodel('notification_rule');
	$conditions=array('notification_id'=>$id);
	$this->notification_rule->deleteAll($conditions);

	$q = json_decode($url);
	foreach($q as $data){
		$this->loadmodel('notification_rule');
		$this->notification_rule->saveAll(array("type"=>$data[0],"string"=>$data[1],"notification_id"=>$id));
	}
	
	
}

}?>