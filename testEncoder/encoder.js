$(document).ready(function() {
    console.log("This");
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
    $.post('encoder.php', {'username':username}, function(data) {
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
        console.log(this.responseText);

        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
        if(!this.responseText){
            document.getElementById("create-button").style.display = "none";
        } 
        else{
            console.log("reached");
           // alert("reached");
            document.getElementById("create-button").style.display = "block";
        }
        if(this.responseText){
            alert("reached");
            document.getElementById("create-button").style.display = "block";
        }
    }    
}
});





