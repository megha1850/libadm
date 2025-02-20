<?php
include 'libraryinclude.php';
if($_SESSION['logged_in']==false)
{
       header("location:newlogin.php");
}
function upProfile()
    { }

?>

<!DOCTYPE html>
<html>

<head>
    <title>DASHBOARD-Library</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<script type="text/javascript">
    $(document).ready(function () {
        $('a[data-toggle="tab"]').on('click', function(e) {
        window.localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = window.localStorage.getItem('activeTab');
    if (activeTab) {
        $('#myTab a[href="' + activeTab + '"]').tab('show');
        window.localStorage.removeItem("activeTab");

    }

//     $('#tabHistory  a').click(function(e) {
//   e.preventDefault();
//   $(this).tab('show');
// });
// $("ul.nav-tabs#tabHistory > li > a").on("shown.bs.tab", function(e) {
//   var id = $(e.target).attr("href");
//   localStorage.setItem('selectedTab', id)
// });
// var selectedTab = localStorage.getItem('selectedTab');
// $('#tabHistory a[href="' + selectedTab + '"]').tab('show');
        
        $.ajax({
            type: "get",
            url: "jsonuserlist.php",
            dataType: "json",
            success: function (response) {
                var html =
                    '<table id="test" class="table table-striped" style="background-color:rgba(246, 212, 204, 0.753)";><thead><tr class="taBble"><th>USERID</th><th>NAME</th><th>AGE</th><th>CONTACT NO:</th><th>EDIT USER</th><th>DELETE</th></tr></thead>'
                for (var i = 0; i < response.length; i++) {
                    html += '<tr><td>' + response[i].userid +
                        '</td><td>' + response[i].names + '</td><td>' + response[i].age +
                        '</td><td>' + response[i].contact_num + '</td><td><a href="libuserupdate.php?id='+response[i].userid+'" id="upbutton" class="btn btn_log bbuTton"><strong>update</strong></a></td><td><a href="deleteuser.php?id='+response[i].userid+'" id="delbutton" class="btn btn_log bbuTton"><strong>delete</strong></a></td></tr>'
                }
                html += '</table>';
                $("#test1").html(html);
            
            }

        });

        $.ajax({
            type: "get",
            url: "jsonBookList.php",
            dataType: "json",
            success: function (response) {
               var html =
                    '<table id="test" class="table table-striped" style="background-color:rgba(246, 212, 204, 0.753)";><thead><tr class="taBble"><th>ID</th><th>NAME</th><th>AUTHOR</th><th>EDIT BOOK</th><th>DELETE</th></tr></thead>'
                for (var i = 0; i < response.length; i++) {
                    html += '<tr><td>' + response[i].bookid + '</td><td>' + response[i].bnames +
                        '</td><td>' + response[i].bauthor + 
                        '</td><td><a href="bookupdate.php?id='+response[i].bookid+'" id="upbutton" class="btn btn_log bbuTton"><strong>update</strong></a></td><td><a href="deletebook.php?id='+response[i].bookid+'" id="delbutton" class="btn btn_log bbuTton"><strong>delete</strong></a></td></tr>'
                }
                html += '</table>';
                $("#test2").html(html);
            
            }

        });

    
    });



</script>

<body>
    <div class="container-fluid" style="background-color:rgba(250, 243, 243, 0.753); height: 100%">
        <div class="col-xs-12">
            <h1 class="hero_header"><img src="pce.jpg" class="img-rounded float-center" alt="Cinque Terre" width="75"
                    height="60"> PCE LIBRARY <form name="myForm" action="logout.php" onsubmit="" method="post">
                    <button type="submit" onclick="upProfile()"
                        class="btn btn_log pull-right bbuTton"><strong>logout</strong></button></form>
            </h1>
        </div>

        <div class="col-xs-5 offset-xs-6">
            <div class="dashBod">DASHBOARD</div>
        </div>

        <div class="container" style="background-color: rgba(250, 243, 243, 0.753);height: 100%">
            <div class="row" style="margin-top:0.25%">
                <div class="col-xs-12">
                    <div class="tab" role="tabpanel">
               
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab"
                                    data-toggle="tab">HOME</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="usr" role="tab"
                                    data-toggle="tab">USER</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab"
                                    data-toggle="tab">BOOK</a></li>
                        </ul>

                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane active" id="Section1">
                                <h3>WELCOME to PCE Library</h3>
                                <p1>PCE Library is Fully Automated library with 2500 Plus Collections. The collection
                                    can be searched from dedicated OPAC terminals and Rack Index. Check OUT and Check IN
                                    Book can be monitored through the Book Verification System.
                                    The patron can see the number of books issued and their due date by the help of
                                    Library Web Application. Patron visiting into the library can be analyzed or
                                    summarised by the Student In Out Counter.</p1>

                                <h3>Library Collection</h3>

                                <p2>The PCE Library has a huge and varied collection which includes:</p2>

                                <br></br>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Collections</th>
                                            <th>Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Text Books</td>
                                            <td>6,004 titles (25,568 volumes)</td>
                                        </tr>
                                        <tr>
                                            <td>Journals & Periodicals </td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>Project Thesis </td>
                                            <td>607</td>
                                        </tr>
                                        <tr>
                                            <td>Daily Issues</td>
                                            <td>270 Plus</td>
                                        </tr>
                                        <tr>
                                            <td>Rare Documents</td>
                                            <td>855</td>
                                        </tr>
                                        <tr>
                                            <td>Subscribed E-Journals</td>
                                            <td>611</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="Section2">

                                <form name="myForm" action="addnewuser.php" onsubmit="" method="post">
                                    <button type="submit" onclick=""
                                        class="btn btn_log center-block buTton" style=" align-items: center; margin-top: 4%"><strong>+ADD NEW USER</strong></button>
                                </form>
                                </td>

                                <div class="row">
                                    <div class="col-xs-12" style=" align-items: center; margin-top: 2%">
                                        <div class="hero_header">List of Users</div>
                                        <br>
                                    </div>
                                </div>

                                <div class="row table-responsive">
                                    <div class="col-xs-12 " style=" align-items: center" id="test1">
                            
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="Section3">

                                <form name="myForm" action="addbook.php" onsubmit="" method="post">
                                    <button type="submit" onclick=""
                                        class="btn btn_log center-block buTton" style=" align-items: center; margin-top: 4%"><strong>+ADD
                                            NEW BOOK</strong></button></form>
                                </td>

                                <div class="row">
                                    <div class="col-xs-12" style=" align-items: center; margin-top: 2%">
                                        <div class="hero_header">List of Books</div>
                                        <br>
                                    </div>
                                </div>

                                <div class="row table-responsive">
                                    <div class="col-xs-12 " style=" align-items: center" id="test2">
  
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>