<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoLocation API</title>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <!-- <script>
	    function submit_soap(){
            var ip=$("#ip_address").val();
            $.get("ipapi.php",{ip:ip},
            function(data){
            $("#json_response").html(data);
            });
	    }
	</script> -->



</head>
<body>
    <center>
        <h3>Send HTTP Get Request using PHP</h3>
        <form method="get" action="ipapi.php">
            IP Address : <input type="text" id="ip_address" name="ip"><br>
            <input type="submit" value="Submit" onclick="submit_soap()">
        </form>
        
        <div id="json_response">

        </div>
    </center>
    
</body>
</html>