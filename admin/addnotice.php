<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])) {
    $noticeid = $_POST['noticeid'];
    $subject = $_POST['subject'];
    $noticedate = $_POST['noticedate'];
    

    $sql = "INSERT INTO tbnotice(noticeid,subject,noticedate) VALUES('$noticeid','$subject','$noticedate')";
    if (mysqli_query($conn, $sql)) {
        echo "all informations are save successfully";
        header('location:addnotice.php');
    }
    else{
        echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>School Management</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
  <a class="navbar-brand" href="#"style="color: black;font-size: 40px;">School Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php"style="color: black;font-size: 20px;margin-left: 500px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;font-size: 20px;">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
         <a class="dropdown-item" href="upload.php">Add Files</a>
          <a class="dropdown-item" href="addnotice.php">Add Notice</a>
        </div>
      </li>
     <!--  /*<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;font-size: 20px;">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="studentdetails.php">Student Details</a>
         <a class="dropdown-item" href="viewstudentinfo.php">View StudentInfo</a>
         <a class="dropdown-item" href="searchstudent.php">Search Details</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black;font-size: 20px;">
          Teacher
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="teacherdetails.php">Teacher Details</a>
          <a class="dropdown-item" href="viewteacherinfo.php">View TeacherInfo</a>
          <a class="dropdown-item" href="searchstudent.php">Search Details</a>*/ 
        </div>
      </li>*/ -->
   <!--   /* <li class="nav-item"> oi page niye ja
        <a class="nav-link" href="viewresult.php"style="color: black;font-size: 20px;">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="routine.php"style="color: black;font-size: 20px;">Routine</a>
      </li>*/ -->
      <li class="nav-item">
        <a class="nav-link" href="contactmessage.php"style="color: black;font-size: 20px;">Contact Message</a>
      </li>
      <form class="form-inline my-2 my-lg-0" action="logout.php" method="post" style="margin-left:20px;">
                <button class="btn btn-outline-dark my-2 my-sm-0"  type="submit">
                <i class="fas fa-sign-out-alt"></i></button>
      </form>

    </ul>
  </div>
</nav>
</header>
<body style="background-image: url(images/);
             background-size:cover;
             background-repeat:no-repeat;
             background-color:#F0F8FF;
            top: 0px;
            left: 0px;

  ">
 
 <h2 style="color: #4777ff;text-align: center;margin-top: 70px">
                        Notice Information Submission</h2>
<div class="row" style="margin-top: 0px">
    <div align="left" class="col-5"    style="margin-left: 400px;margin-top: 70px">
        <div>
            <div class="box-register" style="margin-top: 0px">
 <div class="container">
  <form name="registration" id="registration"  method="post">
    
  <div class="row">
    <div class="col-25">
      <label for="fname">NoticeId</label>
    </div>
    <div class="col-75">
      <input type="number" id="fname" name="noticeid" placeholder="NoticeId" required="required">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">NoticeInfo</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Enter Notice Information" style="height:200px"required="required"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Date</label>
    </div>
    <div class="col-75">
      <input type="date" id="lname" name="noticedate" placeholder="Date"required="required">
    </div>
  </div>
  <div style="text-align: center;" class="form-actions">

   <button style="left: 50px;width: 100px;height: 40px;" type="submit" class="btn btn-primary pull-right" id="submit" name="submit">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>


<style>
@import url(bootstrap.min.css);
@import url(all.min.css);
*{
  margin: 0;
  padding: 0;
}

* {
  box-sizing: border-box;
}
.dropdown:hover>.dropdown-menu{
    display: block;
}
.dropdown-menu:hover{
    background-color:#20B2AA;
}

.navbar{
    background-color: lightblue;
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
    font-family: Rubik,"Helvetica Neue",Helvetica,Arial,sans-serif;
    left: 0;
    padding: 0 12px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 3;
}
.form-actions button{
    background: #3CB371;
    
}
.form-actions button:hover{
    background: #CD5C5C;
    border: none;
    border-radius: 20px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: lightblue;
  padding: 20px;
  width:700px;
  margin-right: 450px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
</style>
</body>
</html>