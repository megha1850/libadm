
<?php
include 'libraryinclude.php';

$sql = "SELECT * FROM book ORDER BY bookid DESC";
$result = pg_query($con,$sql);
$row = pg_fetch_all_columns($result);

function upProfile()
    { }

?>


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

  <div class="container-fluid" style="background-color:rgba(250, 243, 243, 0.753; height: 100%">

  <div class="row">
      <div class="col-md-2 offset-md-10" style="padding-top: 0.5%; color: #ffff"><a  class="headerLink" href="libhome.php">GO TO
          DASHBOARD</a></div>
    </div>

    <div class="row">
      <div class="col-md-4 offset-md-4 " style=" align-items: center; margin-top: 4%">
        <h1 class="hero_header">List of Books</h1>
        <br>
      </div>
    </div>


    <table class="table table-striped" style="background-color:rgba(246, 212, 204, 0.753)">
      <thead>
        <tr>
          <th>Book id</th>
          <th>Book Name</th>
          <th>book Author</th>
          <th>Edit book</th>
          <th>Delete book</th>
        </tr>
      </thead>
      <tbody>

        <?php
   while($row = pg_fetch_assoc($result))
    {
    echo "<tr>
<td> ".$row['bookid']." </td>
  <td> ".$row['bnames']." </td>
  <td>  ". $row['bauthor']." </td>
";
echo '<td><form name="myForm" action="bookupdate.php?id='.$row['bookid'].'" onsubmit="" method="post">
<button type="submit" onclick="upProfile()" class="btn btn_log"><strong>update</strong></button></form></td>

<td><form name="myForm" action="deletebook.php?id='.$row['bookid'].'" onsubmit="" method="post">
<button type="submit" onclick="upProfile()" class="btn btn_log"><strong>delete</strong></button></form></td>


  </tr>';
    }
    ?>
      </tbody>
    </table>
  </div>
</body>
</html>





<?php
// include 'libraryinclude.php';
// echo "<br>";
// echo "<br>";

// $sql = "SELECT * FROM book";
// $result = pg_query($con,$sql);
// $row = pg_fetch_all_columns ($result);

// echo "<strong>List of Books</strong>";
// echo "<br>";echo "<br>";

// echo "<table border='1'>
// <tr>
// <th>Book Name</th>
// <th>Book Author</th>
// <th>Book id</th>
// <th>Edit</th>
// </tr>";

// function upProfile()
//     { }

// while($row = pg_fetch_assoc($result))
// {
//   echo "<tr>";
//   echo "<td>" . $row['bnames'] . "</td>";
//   echo "<td>" . $row['bauthor'] . "</td>";  
//   echo "<td>" . $row['bookid'] . "</td>";

//   echo '<form name="myForm" action="bookupdate.php?id=' . $row['bookid'] . '" onsubmit="" method="post">';
// echo '<td><button type="submit" onclick="upProfile()" class="btn btn_log"><strong>update</strong></form></td>';
//   echo "</tr>";
//   }
// echo "</table>";

?>


















