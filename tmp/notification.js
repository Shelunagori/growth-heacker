$(document).on('click', "#close_notification", function () {
    $('#click').css({
        "background-color": "#f00",
        "color": "#fff",
        "cursor": "inherit"
    }).text("Open this window again and this message will still be here.");
    return false;
});