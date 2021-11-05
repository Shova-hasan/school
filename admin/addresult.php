<?php?>
<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];
    $term = $_POST['term'];
    
    $sql = "INSERT INTO tbresult(name,class,roll,subject,marks,term) 
VALUES('$name','$class','$roll','$subject','$marks','$term')";
    if (mysqli_query($conn, $sql)) {
        echo "all informations are save successfully";
        header('location:addresult.php');
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
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="addresult.php">Add Results</a>
         <!-- /*<a class="dropdown-item" href="addroutine.php">Add Routine</a>*/ -->
         <!-- /* <a class="dropdown-item" href="#">Search Details</a>
          <a class="dropdown-item" href="#">Something else here</a>*/ -->
          <a class="dropdown-item" href="addnotice.php">Add Notice</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;font-size: 20px;">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="studentdetails.php">Student Details</a>
         <!-- /* <a class="dropdown-item" href="viewstudentinfo.php">View StudentInfo</a>*/ -->
         <!--  /*<a class="dropdown-item" href="searchstudent.php">Search Details</a>*/ -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: black;font-size: 20px;">
          Teacher
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="teacherdetails.php">Teacher Details</a>
          <!-- /*<a class="dropdown-item" href="viewteacherinfo.php">View TeacherInfo</a>* -->
          <!-- /*<a class="dropdown-item" href="searchstudent.php">Search Details</a>*/ -->
        </div>
      </li>
   <!--   /* <li class="nav-item">
        <a class="nav-link" href="viewresult.php"style="color: black;font-size: 20px;">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="routine.php"style="color: black;font-size: 20px;">Routine</a>
      </li>*/ -->
      <li class="nav-item">
        <a class="nav-link" href="contactmessage.php"style="color: black;font-size: 20px;">Contact Message</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color:black;font-size: 20px;">LogOut</a>
      </li>

    </ul>
  </div>
</nav>
</header>
<body style="background-image: url(images/);
            background-image: transparent;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #E6E6FA;
           font-family: sans-serif;">
           
           <div class="row">
    <div align="left" class="col-5"    style="margin-left: 400px;margin-top: 70px">

        <div>
            <div class="box-register">
                <form name="registration" id="registration"  method="post">
                    <h1 style="color: #4777ff;text-align: center;">
                        Add Result Details
                    </h1>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Full Name"   required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="class" placeholder="Class"   required>
                    </div>
                    <div class="form-group" style="margin-top: 20px">
                        <input type="number" class="form-control" name="roll" placeholder="Roll Number"  required>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <select type="select" name="subject" class="form-control" required="required">
                                <option value="Subject">Subject</option>
                                <option></option>
                                <option value="English">English</option>
                                <option value="English 1st paper">English 1st paper </option>
                                <option value="English 2nd paper">English 2nd paper </option>
                                <option value="Math">Math </option>
                                <option value="General-Math">Math </option>
                                <option value="Bengali">Bangla</option>
                                <option value="Bengali 1st paper">Bengli 1st paper </option>
                                <option value="Bengali 2nd paper">Bengli 2nd paper </option>
                                <option value="Science">Science</option>
                                <option value="Social Science">Social Science</option>
                                <option value="Drawing">Drawing</option>
                                <option value="Islamic Study">Islamic Study</option>
                                <option value="Hindu Study">Hindu Study</option>                               
                                <option value="Physics">Physics</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Higher-Math">Higher-Math</option>
                                <option value="Biology">Biology </option>
                                <option value="Accounting">Accounting </option>
                                <option value="History">History </option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="marks" placeholder="Marks" required> 
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <select type="select" name="term" class="form-control" required="required">
                                <option value="Term">Term</option>
                                <option></option>
                                <option value="1st Term">1st Term</option>
                                <option value="2nd Term">2nd Term </option>
                    
                            </select>
                        </div>
                    </div>
                    <div style="color: #CD5C5C;text-align: center;" class="form-actions">

                        <button style="left: 50px;width: 100px;height: 40px;" type="submit" class="btn btn-primary pull-right" id="submit" name="submit">Submit</button>
                    </div>
                </form>

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
}
.form-actions button{
    background: #3CB371;
    
}
.form-actions button:hover{
    background: #CD5C5C;
    border: none;
    border-radius: 20px;
}

</style>
</html>