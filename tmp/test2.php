<button type="button" id="show_3">hello</button>
<script>
window.onload=function(){
        
        if(iframe.addEventListener)
            iframe.addEventListener('load', func, true);
        else if(iframe.attachEvent)
            iframe.attachEvent('onload',func);
        document.body.appendChild(iframe);
    }
</script>