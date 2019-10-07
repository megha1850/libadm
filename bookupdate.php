<?php
include 'libraryinclude.php';

$bid=$_GET["id"];

$query="SELECT * FROM book WHERE bookid= $bid";

// $query="SELECT bnames,bauthor FROM book WHERE bookid ='$bookid'";

$result= pg_query($con,$query);
$row = pg_fetch_array($result);

$bnames= $row['bnames'];
$bauthor= $row['bauthor'];
$bookid= $row['bookid'];

function upProfile()
    { } 
?>

<!DOCTYPE html>
<html>

<head>
<title>UPDATE BOOK</title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: "Roboto";
    }
    html,
    body {
        height: 100%;
        background: rgba(245, 181, 167, 0.753);
    }
    .title {
      font-size: 2.625rem;
      font-weight: 500;
      text-align: center;
      color: #ffff;
    }
    label {
      font-size: 1.3125rem;
      font-weight: 500;
      color: #3A96A9;
    }
    .headerLink {
      color:  rgba(19, 18, 18, 0.753);
      font-weight: bold;
      font-size: 1.125rem;
    }
    /* .headerLink:hover {
      text-decoration: none;
      border-bottom: solid #f2f2f2 2px;
      color: #f2f2f2;
    } */    
    .button {
      font-weight: bold;
      color: #f2f2f2;
      background-color: #51C2DA;
      border-radius: 5px;
      padding: 4% 3% 4% 3%;
      font-size: 1rem;
    }
    .button:hover {
      background: #3A96A9;
      color: #f2f2f2;
    }
    /* @media (max-width: 360px) {
  
} */

      @media only screen and (max-width:414px) {
  div.row{
    font-size: 25px;
    padding: 15px;
  }
}

  </style>
</head>

<body>
  <div class="container-fluid" style="background-color: rgba(250, 243, 243, 0.753); height: 100%">
    <div class="row">
      <div class="col-md-2 offset-md-10" style="padding-top: 0.5%; color: #ffff"><a href="libhome.php" class="headerLink">GO TO
          DASHBOARD</a></div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3"
        style=" align-items: center; background-color: #51C2DA; margin-top: 10%; border-radius: 15px 15px 0px 0px">
        <div class="title">UPDATE BOOK</div>
      </div>

      <div class="col-md-6 offset-md-3"
        style=" align-items: center; background-color: #ffff; border-radius: 0px 0px 15px 15px; padding-top: 1.5%">

        <form name="myForm" action="bookupdatesuccess.php?id=<?php echo $bookid; ?>" onsubmit="return upProfile()" method="post">

        <!-- <div class="row" style="padding: 1%"> </div> -->
        <!-- <label>Name of the Book</label> <br> -->
        <!-- <label>Name of the Author</label> <br> -->
        <!-- <label>Upload Image</label> -->
        <div class="form-group">
          <label for="usr">Update Name of the Book:</label>
          <input type="text" name="bnames" class="form-control" id="usr" required value="<?php echo $bnames;?>">
        </div>

        <div class="form-group" style="padding-top: 1.5%">
          <label for="auth">Update Name of Author:</label>
          <input type="text" name="bauthor" class="form-control" id="auth" required value="<?php echo $bauthor;?>">
        </div>

        <!-- <label>Upload Image:</label>
        <svg width="400" height="110">
          <rect width="300" height="100" style="fill: rgb(0; stroke-width: 1; stroke:rgb(0,0,0)" />
        </svg> -->
        <div class="row" style="padding-left: 88%; padding-bottom: 1.5%">
          <button class="button btn" type="submit">UPDATE BOOK</button>
        </div>
</form>
      </div>
      
    </div>
  </div>
</body>

</html>
