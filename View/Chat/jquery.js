$(document).ready(function () {
    $('#action_menu_btn').click(function () {
        $('.action_menu').toggle();
    });
    setInterval(add, 1000);
    function add() {
        var msg_card = $("#msg_c");
        msg_card.html(msg_card.html() + '<div class="d-flex justify-content-start mb-4"><div class="img_cont_msg"><img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"class="rounded-circle user_img_msg"></div><div class="msg_cotainer"><small class="d-block text-info">samandar</small>Hi, how are you samim?<span class="msg_time">8:40 AM, Today</span></div></div>');

        
    }
    $("#msg_c").scrollTop($("#msg_c").height());

});



// window.history.pushState('Chat', 'Chat', '?id=1');