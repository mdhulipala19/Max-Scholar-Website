$("#Create").submit( function() {
   $.post( $("#Create").attr("action"), 
         $("#Create :input").serializeArray(), 
         function(info){ $("#result").html(info); 
   });

   return false;
   alert("Account Created!");
});