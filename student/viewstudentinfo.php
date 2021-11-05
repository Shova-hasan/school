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
        <a class="nav-link" href="homepage.php"style="color: black;font-size: 20px;margin-left: 50px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;font-size: 20px;">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="viewstudentinfo.php">View StudentInfo</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black;font-size: 20px;">
          Teacher
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="viewteacherinfo.php">View TeacherInfo</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewresult.php"style="color: black;font-size: 20px;">Result</a>
      </li>     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black;font-size: 20px;">
          Routine
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="routine.php">Class Routine</a>
          <a class="dropdown-item" href="stuexamroutine.php">Exam Routine</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"style="color: black;font-size: 20px;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"style="color: black;font-size: 20px;">Contact</a>
      </li>
      <form class="form-inline my-2 my-lg-0" action="notice.php" method="post" style="margin-left:110px;">
                <button class="btn btn-outline-light my-2 my-sm-0"  type="submit"><i class="far fa-bell" style="font-size:36px;color:blue;"></i></button>
      </form>
      
      <form class="form-inline my-2 my-lg-0" action="logout.php" method="post" style="margin-left:20px;">
                <button class="btn btn-outline-dark my-2 my-sm-0"  type="submit">
                <i class="fas fa-sign-out-alt"></i></button>
      </form>

    </ul>
  </div>
</nav>
</header>
<body style="background-image: url(images/studentinfo.jpg);
            background-size: cover;
            background-repeat: no-repeat;
           font-family: sans-serif;
           ">

           <div class="col-5" style="margin-top: 70px; left: 50px;margin-left:520px;">
           
            <div >
            <h1 style="color:black;text-align: center;">
                        Student's Information
            </h1>
            <table class="table table-bordered" style="margin-top: 60px;left:30px">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <!-- /*<th scope="col">Password</th>*/ -->
                    <th scope="col">PhoneNumber</th>
                    <th scope="col">Usertype</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once('connect.php');  
                $sql = " select name,birthdate,gender,email,password,phonenumber,usertype from tbstudentsignup";  

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['birthdate']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phonenumber']; ?></td>
                            <td><?php echo $row['usertype']; ?></td>
                          
                        </tr>
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