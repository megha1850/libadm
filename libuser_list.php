<?php
include 'libraryinclude.php';

$sql = "SELECT * FROM userdetails ORDER BY userid DESC";
$result = pg_query($con,$sql);
$row = pg_fetch_all_columns($result);

function upProfile()
    { }

?>

<!-- // echo "<strong>List of Users</strong>";
// echo "<br>";echo "<br>";

// echo "<table border='1'>
// <tr>
// <th>Name</th>
// <th>Age</th>
// <th>Contact Number</th>
// <th>User id</th>
// <th>Edit</th>
// </tr>";

// function upProfile()
//     { }

// while($row = pg_fetch_assoc($result))
// {
//   echo "<tr>";
//   echo "<td>" . $row['names'] . "</td>";
//   echo "<td>" . $row['age'] . "</td>";
//   echo "<td>" . $row['contact_num'] . "</td>";
//   echo "<td>" . $row['userid'] . "</td>";

// echo '<form name="myForm" action="libuserupdate.php?id=' . $row['userid'] . '" onsubmit="" method="post">';
// echo '<td><button type="submit" onclick="upProfile()" class="btn btn_log"><strong>update</strong></form></td>';

//   echo "</tr>";
//   }
// echo "</table>"; -->





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<style>
  * {
    font-family: "Roboto";

  }

  h1 {
    font-family: 'Times New Roman', Times, serif;
    font-size: 3em;
    font-weight: bold;
    text-align: center;
    color: black;

  }

  .headerLink {
    color: rgba(19, 18, 18, 0.753);
    font-weight: bold;
    font-size: 1.125rem;
  }

  html,
  body {
    height: 100%;
  }

  .button:hover {
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    background: #3A96A9;
    color: #f2f2f2;
  }
</style>

<body>

  <div class="container-fluid" style="background-color:rgba(250, 243, 243, 0.753); height: 100%">
    <div class="row">
      <div class="col-md-2 offset-md-10" style="padding-top: 0.5%"><a class="headerLink"
          href="libhome.php"> GO TO DASHBOARD</a></div>
    </div>

    <div class="row">
      <div class="col-md-4 offset-md-4 " style=" align-items: center; margin-top: 4%">
        <h1 class="hero_header">List of Users</h1>
        <br>
      </div>
    </div>


    <table class="table table-striped" style="background-color:rgba(246, 212, 204, 0.753)">
      <thead>
        <tr>
          <th>User id</th>
          <th>Name</th>
          <th>Age</th>
          <th>Contact Number</th>
          <th>Edit user</th>
          <th>Delete user</th>
        </tr>
      </thead>
      <tbody>

        <?php
   while($row = pg_fetch_assoc($result))
    {
    echo "<tr>
<td> ".$row['userid']." </td>
  <td> ".$row['names']." </td>
  <td>  ". $row['age']." </td>
 <td> ".$row['contact_num']." </td>
";
echo '<td><form name="myForm" action="libuserupdate.php?id='.$row['userid'].'" onsubmit="" method="post">
<button type="submit" onclick="upProfile()" class="btn btn_log"><strong>update</strong></button></form></td>

<td><form name="myForm" action="deleteuser.php?id='.$row['userid'].'" onsubmit="" method="post">
<button type="submit" onclick="upProfile()" class="btn btn_log"><strong>delete</strong></button></form></td>


  </tr>';
    }
    ?>
      </tbody>
    </table>
  </div>
</body>

</html>











<!-- <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: "Roboto";
    }

    html,
    body {
      height: 100%;
    }

    .title {
      font-size: 2rem;
      font-weight: 500;
      text-align: center;
      color: #ffff;
    }

    .subheading {
      font-size: 1.75rem;
      font-weight: 700;
      color: #00000;
    }

    .headerLink {
      color: #51C2DA;
      /* padding-top: 0.5%; */
      padding-left: 15%;
      font-size: 1.75rem;
      font-weight: bold;
    }

    .headerLink:hover {
      text-decoration: none;
      border-bottom: solid #f2f2f2 2px;
      color: #3A96A9;
    }
    
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

    h2 {
      font-size: 2.5rem;
      font-weight: 500;
      text-align: center;
      color: #ffff;
    }

    .headerLink1 {
      font-size: 0.875rem;
      font-weight: 500;
      color: black;
    }

  </style>

</head>

<body>

  <div class="container-fluid" style="background-color: #3A96A9; height: 100%">
    <div class="row">
      <div class="col-md-2 offset-md-5" style="padding-top: 0.5%">
      <h2 class="heading2">DASHBOARD</h2>
      </div>
    </div>


    <div class="row">
      <div class="col-md-8 offset-md-2"
        style=" align-items: center; background-color: #51C2DA; margin-top: 4%; border-radius: 15px 15px 0px 0px">
        <div class="title">LIST OF USERS</div>
      </div> -->



<!-- <div class="row">
      <div class="col-md-8 offset-md-2"
        style=" align-items: center; margin-top: 4%; border-radius: 15px 15px 0px 0px">
   <table border ="1">
<tr>
<th>Name</th>
 <th>Age</th>
<th>Contact Number</th>
 <th>User id</th>
<th>Edit</th>
</tr> -->

<!-- <tr>
<td>"<?php echo $row['names'];?>" </td>
<td> "<?php echo $row['age'];?>" </td>
 <td> "<?php echo $row['contact_num'];?>" </td>
 <td>  "<?php echo $row['userid'] ;?>"</td>

 <form name="myForm" action="libuserupdate.php?id=<?php echo $row['userid'];?>" onsubmit="" method="post">
<td><button type="submit" onclick="upProfile()" class="btn btn_log"><strong>update</strong></form></td>
 </tr>
 
 </table> -->



<!-- <td><button type="submit" onclick="upProfile()" class="btn btn_log"><strong>update</strong></form></td>' -->



<!-- <div class="col-md-8 offset-md-2"
        style=" align-items: center; background-color: #ffff; border-radius: 0px 0px 0px 0px; border-bottom: solid #3A96A9 4px" >

        <form name="myForm" action="libuserupdate.php?id=<?php echo $row['userid'];?>" onsubmit="" method="post">

     

        <div class="row" style="padding-top: 0.5%">
          
        <div class="col-md-3" style="text-align: center">
        <label class= "subheading" for="usr">Name </label>
        </div>
        <div class="col-md-3" style="text-align: center">
          <label class= "subheading" for="usr">Contact Number  </label>
        </div>
        <div class="col-md-3" style="text-align: center">
          <label class= "subheading" for="usr">Age </label>
        </div>
        <div class="col-md-3" style="text-align: center">
          <a href="" class="headerLink">+ADD NEW USER  </a></div>
        </div>

        </div>

        <div class="col-md-8 offset-md-2"
        style=" align-items: center; background-color: #ffff; border-radius: 0px 0px 15px 15px; border-bottom: solid #51C2DA 2px" >
        <div class="row" style="padding-top: 0.5%">

        <?php while($row = pg_fetch_assoc($result))?>

          <div class="col-md-3" style="text-align: center">
          <label class="list" value="<?php echo $row['names'];?>"></label>
          </div>
          <div class="col-md-3" style="text-align: center">
          <label class="list" value="<?php echo $row['age'];?>"></label>
          </div>
          <div class="col-md-3" style="text-align: center">
          <label class="list" value="<?php echo $row['contact_num'];?>"></label>
          </div>
          <div class="col-md-3" style="text-align: center">
            <a href="http://localhost/libuserupdate.php" class="headerLink1">UPDATE</a>
            <label></label> -->
<!-- <a href="" class="headerLink1">DELETE</a></div> -->
<!-- </div>
        </div> 

  </div>
</body>
  </head>
</html> -->