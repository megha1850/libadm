<?php
include 'libraryinclude.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>ADMIN-REGISTRATION</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        function validateForm() {
            var mail = document.getElementById('email');
            var passw = document.getElementById('pwd');
            var confirm = document.getElementById('cpwd');
            var firstn = document.getElementById('fname');

            var contact_num = document.getElementById('contactnum');

            if (mail.value == "") {
                window.alert("Please enter e-mail address");
                mail.focus();
                return false;
            }
            if (!validateEmail(mail.value)) {
                window.alert("Please enter a valid e-mail address.");
                mail.focus();
                return false;
            }
            if (passw.value == "") {
                window.alert("Please enter your password");
                passw.focus();
                return false;
            }
            if (confirm.value == "") {
                window.alert("Please confirm your password");
                confirm.focus();
                return false;
            }
            if (passw.value != confirm.value) {
                window.alert("Passwords did not match");
                confirm.focus();
                return false;
            }
            if (firstn.value == "") {
                window.alert("Please enter your firstname");
                firstn.focus();
                return false;
            }
            if (contact_num.value == "") {
                window.alert("Please enter your contact number");
                contact_num.focus();
                return false;
            }
            if (!validateContact(contact_num.value)) {
                window.alert("Please enter valid contact number");
                contact_num.focus();
                return false;
            }
            // alert("You have registered successfully");
            return true;
        }

        function validateEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function validateContact(phno) {
            var re = /^\d{10}$/;
            return re.test(String(phno));
        }
    </script>
</head>
<style>
    .headerLink {
        color: rgb(9, 52, 102);
        font-weight: bold;
        font-size: 1.125rem;
        text-align: center;
        text-decoration: underline;
    }

    .headerLink:hover {
        text-decoration: none;
        /* border-bottom: solid #0084CB 2px; */
        color: #0084CB;
    }
</style>

<body>
    <div class="container-fluid">
        <form name="myForm" action="newregwelcome.php" onsubmit="return validateForm() " method="post">
            <div class="row" style="margin-top: 3%">
                <div class="col-md-4 offset-md-4" style="text-align:center">
                    <p class="hero_header">WELCOME ADMIN Register here</p>

                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="inputdefault" class="lbl_log mailId">E-MAIL ADDRESS</label>
                    <input class="form-control inp_log login" id="email" name="email" type="email">
                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="pwd" class="passWrd">PASSWORD</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="pwd" class="passWrd">CONFIRM PASSWORD</label>
                    <input type="password" class="form-control" id="cpwd" name="cpwd">
                </div>
            </div>
            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="inputdefault" class="fName">NAME</label>
                    <input name="first_name" class="form-control" id="fname" type="text">
                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="inputdefault" class="contactNum">CONTACT NO </label>
                    <input name="contact_num" class="form-control" id="contactnum" placeholder="e.g : 7845125896" type="text">
                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <?php if(isset($_SESSION["reg_failed"]))
                {
                    echo $_SESSION["reg_failed"];
                    unset($_SESSION["reg_failed"]); 
                }
                else
                {
                    echo $_SESSION["reg_success"];
                    unset($_SESSION["reg_success"]);
                }
 
                    ?>
                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" onclick="validateForm()" class="btn btn-info regisButton" role="button"
                        style="width: 100%">REGISTER</button>
                </div>
            </div>
            <div class="row" style="margin-top: 2%">
                <div class="col-12 text-center">
                    <a class="headerLink" href="newlogin.php" style="text-align:center">Login here</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>