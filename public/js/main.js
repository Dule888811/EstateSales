$(document).ready(function(){
    $("#submitBtn").click(function(){


           email_validate();



      });
    function email_validate()
    {
        var patern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/ ;

        var DataForm =   $(".DataForm");
        var email =$("input[name='email']").val();
        console.log(email);
        if(email !== '')
        {
          //  console.log($.trim($("input[name='mail']").val()));
            if(patern.test(email))
            {
                $("#lbl").css("color","green");
                $("#email").css("border","2% color green");
                $("#success").css("display", "block");
                $("#error").css("display", "none");
                $("#warning").css("display", "none");
                $("#spam1").css("display", "none");
                $("#spam2").css("display", "none");
            }else{
                $("#lbl").css("color","red");
                $("#email").css("order","2% color red");
                $("#success").css("display" ,"none");
                $("#error").css("display" ,"block");
                $("#warning").css("display" ,"none");
                $("#spam1").css("display" ,"block");
                $("#spam2").css("display" ,"none");
            }
        }else {
            $("#lbl").css("color","red");
            $("#email").css("order","2% color red");
            $("#success").css("display" ,"none");
            $("#error").css("display" ,"none");
            $("#warning").css("display" ,"block");
            $("#spam1").css("display" ,"none");
            $("#spam2").css("display" ,"block");
        }
    }
    });






























