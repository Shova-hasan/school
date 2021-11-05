
<?php
include_once('connect.php');
session_start();

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $birthdate=$_POST['date'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    $usertype=$_POST['usertype'];
$sql ="UPDATE tbstudentsignup set name='$name',bithdate='$birthdate',email='$email',password='$password',phonenumber='$phonenumber',usertype='$usertype' WHERE email='".$_SESSION['email']."'";
if (mysqli_query($conn, $sql)) {
    echo "all information update successfully";
    header('location:updateinfo.php');
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
    <?php
include_once('connect.php');

if (isset($_SESSION['email'])|| !empty($_SESSION['email']) ) {




$sql = mysqli_query($conn, "SELECT * FROM tbstudentsignup where email='".$_SESSION['email']."'") or die("Could not search!" . mysqli_error());


 $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result))  {


    }
}
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);

                ?>


}
?> 
     <form action="#" method="post" >
     <h2>SignUp Here</h2>
   <div class="form-group">
     <input type="text" class="form-control" name="name"  value="<?php echo $name;?>"placeholder="Name" required="required">
     </div>
   <div class="form-group">
    <input type="date" class="form-control" name="date" value="<?php echo $bithdate;?>" required="required"><br>
   </div>
   <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"></span>
            <select type="select"  name="gender" class="form-control" value="<?php echo $gender;?>"placeholder="Gender"required="required">
                               <option >Gender</option>
                               <option value="male">Male</option>
                               <option value="Female">Female</option>
                               <option value="others">Others</option>

            </select>
          </div>
   </div>
   <div class="form-group">
     <input type="email"  class="form-control" name="email" value="<?php echo 
     $email;?>" placeholder="Email" required="required">
  </div>
   <div class="form-group">
     <input type="password" class="form-control" name="password" placeholder="*******" value="<?php echo $password;?>"required="required">
  </div>
  <div class="form-group">
     <input type="number" class="form-control" name="phonenumber" value="<?php echo $phonenumber;?>" placeholder="PhoneNumber" required="required">
  </div>
   <div class="form-group">
        <div class="input-group">
           <span class="input-group-addon"></span>
             <select type="select"  name="usertype" class="form-control" value="<?php echo $usertype;?>"required="required">
              <option value="UserType">UserType</option>
                               <option></option>
                               <option value="Admin">Admin</option>
                               <option value="Teacher">Teacher</option>
                               <option value="Student">Student</option>
                               <option value="General">General</option>
                               


              </select>
         </div>
    </div>
     <button type="submit" class ="btn btn-primary form-control " name="submit">Update</button>
     </form>
 </div>
 </div>
</body>
</html>