<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $birthdate=$_POST['date'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    $usertype=$_POST['usertype'];

    $sql = "insert into tbadminsignup(name,birthdate,gender,email,password,phonenumber,usertype) values ('$name','$birthdate','$gender','$email','$password','$phonenumber,$usertype')";
    if ($conn->query($sql)){
     echo "all informations are save successfully";
      header('location:../admin/signup.php');
  }
  else{
      echo "Error: ". $sql ."
  ". $conn->error;
  }
  $conn->close();
}
?>

 <html>
 <head>
<title>SignUp</title>
<link rel="stylesheet" href="design.css">
<link href="CSS/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <div class="registration-page">
 <div class="form">
     <form action="#" method="post" >
	 <h2>SignUp Here</h2>
   <div class="form-group">
	 <input type="text" class="form-control" name="name" placeholder="Name" required="required">
	 </div>
   <div class="form-group">
    <input type="date" class="form-control" name="date"><br>
   </div>
   <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"></span>
            <select type="select"  name="gender" class="form-control" placeholder="Gender"required="required">
                               <option >Gender</option>
                               <option value="male">Male</option>
                               <option value="Female">Female</option>
                               <option value="others">Others</option>

            </select>
          </div>
   </div>
   <div class="form-group">
	 <input type="email"  class="form-control" name="email" placeholder="Email" required="required">
  </div>
   <div class="form-group">
	 <input type="password" class="form-control" name="password" placeholder="*******" required="required">
  </div>
  <div class="form-group">
	 <input type="number" class="form-control" name="phonenumber" placeholder="PhoneNumber" required="required">
  </div>
   <div class="form-group">
        <div class="input-group">
           <span class="input-group-addon"></span>
             <select type="select"  name="usertype" class="form-control" required="required">
              <option value="UserType">UserType</option>
                               <option></option>
                               <option value="Admin">Admin</option>
                               <option value="Teacher">Teacher</option>
                               <option value="Student">Student</option>
                               <option value="General">General</option>
                               


              </select>
         </div>
    </div>
	 <button type="submit" class ="btn btn-primary form-control " name="submit">Submit</button>
	 <p class="message">Already have an account?<a href="../admin/signin.php"> Signin</a>
	 </p>
	 </form>
 </div>
 </div>
</body>
</html>