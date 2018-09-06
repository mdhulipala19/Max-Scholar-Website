



$("#Outline").submit( function() {
   $.post( $("#Outline").attr("action"), 
         $("#Outline :textarea").serializeArray(), 
         function(info){ $("#result").html(info); 
   });
   return false;
});
function status() {
  document.getElementById("submitted").innerHTML = "Submitted";
  //alert("Submitted");
  showSummary();
}

 $(window).scroll(function(){
      if  ($(window).scrollTop() == $(document).height() - $(window).height()){
           AddMoreContent();
      }
 });    

//  function AddMoreContent(){
//       $.post('getMoreContent.php', function(data) {
//            //Assuming the returned data is pure HTML
//            $(data).insertBefore($('#placeHolder'));
//       });
//  }


// function AddMoreContent(){
//       $.post('getMoreContent.php', function(data) {
//            //Assuming the returned data is pure HTML
//            $(data).insertBefore($('#placeHolder'));
//       });
//  }


// function showSummary() {
//   document.getElementById("Outline").style.display = "block";
// }

// document.getElementById('mainIdea').style.height="200px";

