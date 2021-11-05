<?php
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
            background-color: #FFE4B5;
            background-size: cover;
            background-repeat: no-repeat;
           font-family: sans-serif;">
          <div class="col-5" style="margin-top: 70px; left: 50px;margin-left: 300px;">
           
            <div >
            <h1 style="color:black;text-align: center;">
                        Contact Message Information
            </h1>
            <table class="table table-bordered" style="margin-top: 60px;left:30px">
                <thead bgcolor="#d279a6">
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">PhoneNumber</th>
                    <th scope="col">Subject</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
                include_once('connect.php');  
                $sql = " select * from tbcontact ";  

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td bgcolor="#f2d9e6"><?php echo $row['email']; ?></td>
                            <td bgcolor="#f2d9e6"><?php echo $row['phonenumber']; ?></td>
                            <td bgcolor="#f2d9e6"><?php echo $row['subject']; ?></td>
                    <?php }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);

                ?>
                </tbody>

            </table>
        </div>


    </div>
</div>
  
</body>

<style>
  @import url(bootstrap.min.css);
@import url(all.min.css);


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