<?php

 include 'libraryinclude.php';
// if (isset($_SESSION['email'])){
//     header('location:libhome.php');

// }

   if($_SESSION['logged_in']==true)
   {
    header("location:libhome.php");
   }

?>
<!DOCTYPE HTML>
<html>

<head>
<title>ADMIN-LOGIN</title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        function validateLog() {
            var mail = document.getElementById('email');
            var passw = document.getElementById('pwd');


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


            return true;
        }

        function validateEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    </script>
</head>
<style>
    .headerLink {
      color: rgb(9, 52, 102);
      font-weight: bold;
      font-size: 1.125rem;
      text-align:center;
      text-decoration:underline;
    }
    .headerLink:hover {
      text-decoration: none;
      /* border-bottom: solid #0084CB 2px; */
      color: #0084CB;
    }


    </style>

<body>

    <div class="container-fluid">
        <form name="myForm" action="newlogsuccess.php" onsubmit="return validateLog()" method="post">
            <div class="row" style="margin-top: 3%">
                <div class="col-md-4 offset-md-4" style="text-align:center">
                    <p class="hero_header">ADMIN LOG IN</p>
                </div>
            </div>
            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="inputdefault" class="lbl_log mailId">ENTER YOUR E-MAIL ID</label>
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
                <?php if(isset($_SESSION["login_failed"]))
                {
                    echo $_SESSION["login_failed"];
                    unset($_SESSION["login_failed"]);
                    }  
                    ?>
            </div>
                </div>
            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" onclick="validateLog()" class="btn btn_log regisButton"
                        style="width: 100%">SUBMIT</button>
                        <br>
                    <br>
                </div>
                </div>
                    <div class="row" style="margin-top: 2%">
            <div class="col-12 text-center">
                    New User? <a class="headerLink" style="text-align:center" href="newreg.php">Register here</a>
                </div>
            </div>
        </form>


    </div>
</body>

</html>