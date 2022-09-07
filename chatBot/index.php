
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>

    <link rel="icon" type="image/x-icon" href="fav.png">

    <link rel="stylesheet" href="style.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    
</head>
<body>
    
    <div class="topnav">
        <a class="active" href="../index.html">airBot</a>
        <a href="#">chatBot</a>
        <a href="../mailBot/index.html">mailBot</a>
    </div>
    
    <div class="chat-frame">
        
        <div class="header">
            <div class="heading">airBot</div>
        </div>

        <div class="container" id="chat-area">

        </div>

        <div class="input-box">
            <div class="">
                    <input type="text" name="msg-box" id="msg-box" class="msg-box" placeholder="Talk with Aco...">
                    <input type="submit" value="SEND" class="send-btn" id="send-btn" name="send">
            </div>
        </div>
        
    </div>

    <div class="banner">
        <h1>Hello there from airBot. . .</h1>
        <div class="des">I am chatbot, build for solving queries for COVID guidelines for all North-East India's Airport  </div>
        <div class="example">Type(eg): "COVID rules at Silchar Airport"</div>
    </div>

</body>

<!-- <script src="responses.js"></script> -->
</html>
