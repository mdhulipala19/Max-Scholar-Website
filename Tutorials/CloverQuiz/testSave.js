function saveUserTimes() {
    $.post("savesettings.php",
    {
        name: $("#userName").val(),
        amount: aGlobalVariable,
        times: '1,2,3,4,5,6,7',
    },
    function(data,status){
        document.getElementById("saveWarningText").innerHTML = data;
        $( "#saveWarningText" ).fadeIn(100);
        setTimeout(function(){ $( "#saveWarningText" ).fadeOut(100); }, 3000);
    });
}