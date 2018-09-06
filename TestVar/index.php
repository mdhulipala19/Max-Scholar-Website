<script>


    function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); //New request object

    oReq.open("get", "get-data.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();

    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
           $json = json_decode(this.responseText, true);

    alert($json['b'];);
    };

</script>
          
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
      <button id="create-button" type="submit">Create Account</button>
</body>
</html>