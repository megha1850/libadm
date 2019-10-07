
<?php
include 'libraryinclude.php';
if($_SESSION['logged_in']==false)
{
       header("location:newlogin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
<title>ADD NEW USER</title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="adduser.css"/>

</head>

<body>
  <div class="container-fluid" style="background-color: rgba(250, 243, 243, 0.753); height: 100%">
    <div class="row">
      <div class="col-md-2 offset-md-10" style="padding-top: 0.5%; color: #ffff">
        <a class="headerLink" href="libhome.php">GO TO DASHBOARD</a></div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3"
        style=" align-items: center; background-color: #51C2DA; margin-top: 10%; border-radius: 15px 15px 0px 0px">
        <div class="title">ADD NEW USER</div>
      </div>

      <div class="col-md-6 offset-md-3 responsive"
        style=" align-items: center; background-color: #ffff; border-radius: 0px 0px 15px 15px; padding-top: 1.5%">

        <form name="myForm" action="libuserreg_success.php" onsubmit="return validateForm() " method="post">
        <!-- <div class="row" style="padding: 1%"> </div> -->
        <!-- <label>Name of the Book</label> <br> -->
        <!-- <label>Name of the Author</label> <br> -->
        <!-- <label>Upload Image</label> -->
        <div class="form-group">
          <label for="usr">Name of the User:</label>
          <input type="text" name="names" class="form-control" id="usr" required>
        </div>

        <div class="form-group" style="padding-top: 1.5%">
          <label for="contact_num">Contact Number:</label>
          <input type="number" pattern="^\d{10}$" name="contact_num" class="form-control" id="contact_num" placeholder="e.g : 7845125896" required>
        </div>

        <div class="form-group" style="padding-top: 1.5%">
          <label for="age">Age:</label>
          <input type="number" name="age" class="form-control" id="age" required>
        </div>

        <!-- <label>Upload Image:</label>
        <svg width="400" height="110">
          <rect width="300" height="100" style="fill: rgb(0; stroke-width: 1; stroke:rgb(0,0,0)" />
        </svg> -->
        <div class="row-responsive" style="padding-left: 88%; padding-bottom: 1.5%">
          <button onclick="add_user()" id="add_user" class="button btn">ADD USER</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script>
    function add_user() {
      var name = $('#usr').val();
      var age = $('#age').val();
      var contact_num = $('#contact_num').val();
      $.ajax({
        url: "libuserreg_success.php",
        method: "POST",
        dataType: 'json',

        data: {
          names: name,
          age: age,
          contact_num: contact_num
        },
        success: function (data) {
          switch (data.flag) {
            case 0:
            console.log(data.message);
              break;
            case 1:
            window.location.href = data.message;
            
              break;
          }
        }
      });
    }
  </script> -->
</body>

</html>