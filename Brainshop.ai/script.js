

$(document).ready(function(){
    $("#chat-area").html("<div class='item'><div class='bot'>Hello, My name is Aco?</div></div>");

    const input = document.getElementById('msg-box');
        input.focus();
    
    // enter();
    $("#msg-box").keyup(function(event){
        if (event.keyCode === 13){
            $("#send-btn").click();
        }
    });


    // For empty input box 
    $("#send-btn").click(function() {
        var msg = $("#msg-box").val()

        if (msg == "") {
            msg = "I Love Momo";
        }


        $("#chat-area").append("<div class='item'><div class='right'><div class='user'>"+msg+"</div></div></div>");
        document.getElementById("msg-box").value = "";

        
        $.ajax({
            url: "brain.php?bot="+msg,
            msg: msg,
            type: "post",
            success: function(data){
                bot = msg;
                  $('#chat-area').append("<div class='item'><div class='bot'>"+data+"</div></div>"); 
                  
                  //   document.getElementById("chat-area").scrollIntoView(true);
                    $('#chat-area').stop().animate({
                        scrollTop: $('#chat-area')[0].scrollHeight
                    }, 800);
            }
          });

        //   document.getElementById("chat-area").scrollIntoView(true);
          $('#chat-area').stop().animate({
            scrollTop: $('#chat-area')[0].scrollHeight
          }, 800);

        // Select input box after clicking SEND
        input.focus();

    });
});



function enter(event){

    if(event.keyCode==13){
        $("#send-btn").click();
    } 
}