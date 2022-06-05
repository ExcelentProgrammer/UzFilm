function like() {
    var like = $("#like").html();
    $("#like").html(like * 1 + 1);
}

function dislike() {
    var like = $("#dislike").html();
    $("#dislike").html(like * 1 + 1);
}


function comment() {
    var today = new Date();
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date + ' ' + time;

    
    var commentcontent = $("#text").val();

    $("#text").val("");

    $("#commentlist").html('<li class="comments__item"><div class="comments__autor"><img class="comments__avatar" src="Assets/img/avatar.svg" alt=""><span class="comments__name">' + name + '</span><span class="comments__time">' + dateTime + '</span></div><p class="comments__text">' + commentcontent + '</p></li>' + $("#commentlist").html());
    $.ajax({
        "url": "config/NotRefresh.php?type=comment&user_id=" + user_id + "&video_id=" + video_id + "&content=" + commentcontent + "&video_type=" + type + "&vid=" + vid
    });
}