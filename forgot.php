<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<style>
    .changePass{
        font-family: 'Times New Roman', Times, serif;
    font-size:2em;
    font-weight: bold;
    color: #00314B;
    }
    .newPass{
        font-family: 'Times New Roman', Times, serif;
    font-size: 1.2em;
    font-weight: bold;
    color: #0084CB;
    }
    .subMitbutton{
        font-family: 'Times New Roman', Times, serif;
    font-size: 1.2em;
    background-color: #02DAB0;
    font-weight: bold;
    color:#f2f2f2;
    }

    </style>
 <script>
        function validateLog() {
            var passw = document.getElementById('newpwd');
            var repassw = document.getElementById('repwd');

            if (passw.value == "") {
                window.alert("Please enter your new password");
                passw.focus();
                return false;
            }
            if (repassw.value == "") {
                window.alert("Please re-enter your new password");
                repassw.focus();
                return false;
            }
            if (passw.value != repassw.value) {
                window.alert("Passwords do not match");
                passw.focus();
                return false;
            }
            return true;
        }

    </script>
<body>

    <div class="container-fluid">
        <div class ="row" style="margin-top: 3%">
            <div class ="col-md-4 offset-md-4" style="text-align:center">
                <h1 class="hero_header changePass">Change Your Password</h1>
            </div>
        </div>


        <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="newpwd" class="newPass">ENTER YOUR NEW PASSWORD</label>
                    <input type="password" class="form-control" id="newpwd" name="newpwd">

                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <label for="pwd" class="newPass">CONFIRM PASSWORD</label>
                    <input type="password" class="form-control" id="repwd" name="repwd">
                </div>
            </div>

            <div class="row" style="margin-top: 1.5%">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" onclick="validateLog()" class="btn btn_log subMitbutton"
                        style="width: 100%">SUBMIT</button>
                        <br>
                    <br>
                </div>
                </div>

</body>

</html>