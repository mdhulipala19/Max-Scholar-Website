$("#sub").click( function() {
 $.post( $("#myForm").attr("action"), 
         $("#myForm :input").serializeArray(), 
         function(info){ $("#result").html(info); 
   });
 clearInput();
});
 
var numCorrect=23;

function setValue(){
    document.myForm.total.value = 933;
    console.log(numCorrect);
    // document.forms["myForm"].submit();
}

$("#myForm").submit( function() {
  return false;	
});
 
// function clearInput() {
// 	$("#myForm :input").each( function() {
// 	   $(this).val('');
// 	});
// }