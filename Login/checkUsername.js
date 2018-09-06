$(document).ready(function() {
   $json = json_decode(this.responseText, true);

    alert($json['b'];);
    alert("Stop");

    var x_timer;    
    $("#username").keyup(function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax(user_name);
        }, 1000);
    }); 

function check_username_ajax(username){
    $("#user-result").html('<img src="ajax-loader.gif" />');
    $.post('username-checker.php', {'username':username}, function(data) {
      $("#user-result").html(data);
    });
    display_submit();
}
function display_submit(){    
    var oReq = new XMLHttpRequest(); //New request object

    oReq.open("get", "username-checker.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();

    oReq.onload = function() {
        alert($json[0].b);

    }    
}
});





