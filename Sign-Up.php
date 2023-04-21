<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="Style.css">
    <?php
    $cntr=0;
    if (isset($_REQUEST['submit']))
    {
        $user=$_POST["username"];
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $pass1=$_POST["password1"];
        $pass2=$_POST["password2"];
        $secret_question=$_POST["Question"];
        $secret_answer=$_POST["sq-ans"];
        $con=mysqli_connect("localhost","root","jiit","project");
        if($pass1==$pass2)
        {
            mysqli_query($con,"insert into login values('$user','$pass1','$name','$mobile','$secret_question','$secret_answer');");
            $cntr+=1;
        }
    }
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
        box-sizing: border-box;
        }

        body{
        margin: 0;
        font-family: poppins, Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #666666;
        background: #eaeff4;
        }

        .wrapper{
        margin: 0 auto;
        width: 100%;
        max-width: 1140px;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        }
        .container{
        position: relative;
        width: 100%;
        max-width: 600px;
        height: auto;
        display: flex;
        background: #ffffff;
        box-shadow: 0 0 5px #999999;
        }
        .login .col-left,
        .login .col-right{
        padding: 30px;
        display: flex;
        }
        .login .col-left{
            width: 60%;
            clip-path: polygon(0 0, 0% 100%, 100% 0 );
            background: #2aa15f;
            }
            .login .col-right{
            padding: 60px 30px;
            width: 50%;
            margin-left: -10%;
            } 
            @media(max-width: 575px){
                .login .container{
                flex-direction: column;
                box-shadow: none;
                }
                .login .col-left,
                .login .col-right{
                width: 100%;
                margin: 0;
                clip-path: none;
                }
                .login .col-right{
                padding: 30px;
                }
                }
                .login .login-text{
                position: relative;
                width: 100%;
                color: #ffffff;
                }

                .login .login-text h2{
                margin: 0 0 15px 0;
                font-size: 30px;
                font-weight: 700;
                }

                .login .login-text p{
                margin: 0 0 20px 0;
                font-size: 16px;
                font-weight: 500;
                line-height: 22px;
                }
                
                .login .login-text .btn{
                display: inline-block;
                font-family: poppins;
                padding: 7px 20px;
                font-size: 16px;
                letter-spacing: 1px;
                text-decoration: none;
                border-radius: 30px;
                color: #ffffff;
                outline: none;
                border: 1px solid #ffffff;
                box-shadow: inset 0 0 0 0 #ffffff;
                transition: .3s;
                }
                
                .login .login-text .btn:hover{
                color: #2aa15f;
                box-shadow: inset 150px 0 0 0 #ffffff;
                }
                
                .login .login-form{
                position: relative;
                width: 100%;
                }
                .login .login-form h2{
                margin: 0 0 15px 0;
                font-size: 22px;
                font-weight: 700;
                }
                .login .login-form p{
                margin: 0 0 10px 0;
                text-align: left;
                color: #666666;
                font-size: 15px;
                }
                .login .login-form p:last-child{
                margin: 0;
                padding-top: 3px;
                }
                .login .login-form p a{
                color: #2aa15f;
                font-size: 14px;
                text-decoration: none;
                }
                .login .login-form label {
                display: block;
                width: 100%;
                margin-bottom: 2px;
                letter-spacing: .5px;
                }
                .login .login-form p:last-child label{
                width: 60%;
                float: left;
                }
                .login .login-form label span{
                color: #ff574e;
                padding-left: 2px;
                }
                .login .login-form input{
                display: block;
                width: 100%;
                height: 35px;
                padding: 0 10px;
                outline: none;
                border: 1px solid #cccccc;
                border-radius: 30px;
                }
                .login .login-form input:focus{
                border-color: #ff574e;
                }
                .login .login-form button,
                .login .login-form input[type=submit] {
                display: inline-block;
                width: 100%;
                margin-top: 5px;
                color: #2aa15f;
                font-size: 16px;
                letter-spacing: 1px;
                cursor: pointer;
                background: transparent;
                border: 1px solid #2aa15f;
                border-radius: 30px;
                box-shadow: inset 0 0 0 0 #2aa15f;
                transition: .3s;
                }
                .login .login-form button:hover,
                .login .login-form input[type=submit]:hover{
                color: #ffffff;
                box-shadow: inset 250px 0 0 0 #2aa15f;
                }
                #message {
                    display: none;
                    text-align: center;
                    color: #000;
                    font-size: 10px;
                    }

                    #message p {
                    padding: 10px 35px;
                    font-size: 12px;
                    color:red;
                    }

                    .valid {
                    color: green;
                    }

                    .valid:before {
                    content: "✔";
                    margin-right: 10px;
                    color:green;
                    }

                    .invalid {
                    color: red;
                    }

                    .invalid:before {
                    content: "✖";
                    margin-right: 10px;
                    color:red;
                    }
                    #mobile_length
                    {
                        display:none;
                        color:red;
                        font-size:10px;
                    }
    </style>
</head>

<body>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Already have an account?</p>
                    <a href="Login1.php" class="btn">Sign In</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Sign Up</h2>
                    <form action="" method="POST">
                        <p>
                            <label>Email address<span>*</span></label>
                            <input id="username" name="username" type="email" placeholder="Email" required>
                        </p>
                        <p>
                            <label>Name<span>*</span></label>
                            <input required type="text" id="name" name="name" placeholder="Full Name">
                        </p>
                        <p>
                            <label>Mobile<span>*</span></label>
                            <input required minlength="10" type="number" id="mobile" name="mobile" placeholder="Mobile Number">
                            <div id="mobile_length">
                                <h3>Mobile Number should contain only between 10 and 15 digits!</h3>
                            </div>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input required minlength="8" required type="password" id="password1" name="password1" placeholder="Password" aria-describedby="password-validation">
                        </p>
                        <p>
                            <label>Repeat Password<span>*</span></label>
                            <input required minlength="8" required type="password" id="password2" name="password2" placeholder="Password" aria-describedby="password-validation">
                        </p>
                        <p>
                            <label>Secret Question<span>*</span></label>
                            <select name="Question" id="Ques">
                                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                <option value="What is the name of your first school?">What is the name of your first school?</option>
                                <option value="What is your nickname?">What is your nickname?</option>
                                <option value="What is your first pet's name?">What is your first pet's name?</option>
                                <option value="What is your favorite food?">What is your favorite food?</option>
                            </select>
                        </p>
                        <p>
                            <label>Answer to the question<span>*</span></label>
                            <input type="text" id="sq-ans" name="sq-ans" placeholder="Answer">
                        </p>
                        <p>
                            <input type="submit" name="submit" value="Sign Up"> 
                        </p>
                    </form>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="special_chars" class="invalid">A <b>special character</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        let passInput = document.getElementById("password1");
        let letter = document.getElementById("letter");
        let capital = document.getElementById("capital");
        let number = document.getElementById("number");
        let special = document.getElementById("special_chars");
        let length = document.getElementById("length");
        let mobile_num=document.getElementById("mobile");
        mobile_num.onfocus=function()
        {
            document.getElementById("mobile_length").style.display="block";
        }
        mobile_num.onblur=function()
        {
            document.getElementById("mobile_length").style.display="none";
        }
        mobile_num.onkeyup=function()
        {
            if(mobile_num.value.length<10 || mobile_num.value.length>15)
            {
                document.getElementById("mobile_length").style.display="block";
            }
            else
            {
                document.getElementById("mobile_length").style.display="none";
            }
        }
        passInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
        }

        passInput.onblur = function() {
        document.getElementById("message").style.display = "none";
        }


        passInput.onkeyup = function() {
        let lowerCaseLetters = /[a-z]/g;
        if(passInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
            letter.style.color="green";
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
            letter.style.color="red";
        }

        let upperCaseLetters = /[A-Z]/g;
        if(passInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
            capital.style.color="green";
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
            capital.style.color="red";
        }
        let numbers = /[0-9]/g;
        if(passInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
            number.style.color="green";
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
            number.style.color="red";
        }
        let special_char = /[^a-zA-Z\d]/g;
        if(passInput.value.match(special_char)) {
            special.classList.remove("invalid");
            special.classList.add("valid");
            special.style.color="green";
        } else {
            special.classList.remove("valid");
            special.classList.add("invalid");
            special.style.color="red";
        }
        if(passInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
            length.style.color="green";
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
            length.style.color="red";
        }
        }
        var succ=<?php echo $cntr; ?>;
        if (succ==1)
        {
            window.location="Login1.php";
        }
    </script>
</body>
</html>