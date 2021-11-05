<?php
$conn = mysqli_connect("localhost", "root", "", "school");
if($conn) {
echo "connected";
}
if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$folder = 'uploadedimages/';
move_uploaded_file($filetmpname, $folder.$filename);
$sql = "insert into uploadedimage(imagename) values('$filename')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "image uploaded";
}
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
<body style="background-image: url();
            background-image: transparent;
            background-size: cover;
            background-repeat: no-repeat;
           font-family: sans-serif;">
           

          <h2 style="margin-left:570px;padding-top: 50px;font-family: serif;font-size:50px;"><em>Upload a Picture</em></h2>
<form action="upload.php" method="post" enctype="multipart/form-data" style="text-align: center;padding-top:30px;" > 
        <input type="file" name="uploadfile" />
        <input type="submit" name="uploadfilesub" value="upload" />
</form>
<div class="row">
<div class="col-5">
   <div>
  <?php
    include_once('connect.php');  
    $sql = " select imagename from uploadedimage";  

       $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <?php 
                                  echo "<img src='uploadedimages/".$row['imagename']."' >";
                                  
                             ?>
               
                         
                      
                          <?php   
                          }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
                ?>

   <div>
</div>
</div>

</body>
<html>
</body>

<style>
  @import url(bootstrap.min.css);
@import url(all.min.css);

.imagename{
  width:80px;
  height:30px;
  margin: 5px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
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
    opacity:0.8;
}

</style>
</html>