<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $subject=$_POST['subject'];

    $sql="select email from tbstudentsignup where email='$email'";
    $result=mysqli_query($conn,$sql);
   
    $row = mysqli_fetch_array($result);
        if ($row['email'] == $email)
        {
          $sql = "insert into tbcontact(email,phonenumber,subject) values ('$email','$phonenumber','$subject' ";
        }
        else{
          echo "Email does not match";
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
<body style="background-image: url();
             background-color:#ddff99;
             background-size:cover;
             background-repeat:no-repeat;
            top: 0px;
            left: 0px;

  ">
  <div style="padding-left:0px">
  <h2 style="margin-right:350px;padding-top:90px;color:black;text-align: center;font-size:45px;top:50%; left:80%;font-family: serif; font-weight: 900;" >You can share your message with us!</h2>
   <h2 style="margin-left:800px; padding-top:110px;color:black;text-align: center;font-size:30px;top:50%; left:80%;font-family: serif; font-weight: 900;" >For more details,you can contact with us through this phonenumber :
    <br><i class="material-icons">settings_phone</i> 0167267723</h2>
</div>
 <div class="row" >
  <div class="col-5" style="margin-bottom:350px;margin-left: 10px;">
    <div class="contact-page">
       <div class="form">
         <form action="#" method="post" >
           <input type="email" class="form-control" name="email" placeholder="Enter Email" required="required" style="font-size: 16px;
            ">
           <input type="number" class="form-control" name="phonenumber" placeholder="Phone Number" required="required"style="font-size: 16px;height:60%;" >
           <input type="text" class="form-control" name="subject" placeholder="Your Message" required="required"style="font-size: 16px;height:80%;">
           <button type="submit" class ="btn btn-primary form-control " name="submit">Submit</button>
   
         </form>
       </div>
     </div>
  </div>
</div>
<div class="footer">
                <p clearfix>&copy;Copy Right 2019 for SchoolManagement.com</p>
           </div>

<style>
@import url(bootstrap.min.css);
@import url(all.min.css);
*{
  margin: 0;
  padding: 0;
}
.contact-page{
  width: 600px;
 height: 900px;
 color: #fff;
 top: 10%;
 left: 70%;
 position: absolute;
 transform: translate(-50%,-50%);
 padding: 280px 50px;
 background-position: center;

}
.form{
  position: relative;
  z-index: 1;
  background: rgba(0, 0, 0, 0.5);
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}
.form input{
  outline: none;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 20px;
  box-sizing: border-box;
  border-radius: 30px;
  font-size: 10px;
}
.form button{
  text-transform: uppercase;
  outline: 0;
  background: #B0C4DE;
  width: 60%;
  height: 12%;
  border: none;
  padding: 15px;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  transition: .5s;
  border-radius: 20px;
}
.form button:hover{
  background: #20B2AA;
  border: none;
  border-radius: 20px;
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
</body>
</html>




