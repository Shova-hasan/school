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
<body style="background-image: url(images/result.jpg);
            background-position: cover;
            background-repeat: no-repeat;
           font-family: sans-serif;">

           <div class="col-5" style="margin-top: 130px;margin-left: 30%;">
           <?php
             include_once('connect.php');

            if(isset($_POST['search'])) {
            $search = $_POST['searchtext'];
            $sql = "SELECT name,class,roll,subject,marks,term FROM tbresult where name ='$search'";
            }elseif(empty($_POST['searchtext'] )) {
            $sql = "SELECT name,class,roll,subject,marks,term FROM tbresult";

            $search ="";
            }

            $result = mysqli_query($conn, $sql);
            ?>

        <form class="form-inline" style="margin-top: 60px;margin-left: 80px" method="post" action="#">
            <input class="form-control mr-sm-2" style="width: 80%" value="<?php echo $search; ?>" name="searchtext" type="search" placeholder="Enter Name" aria-label="Search">
            <button class="btn btn-outline-secondary" name="search" type="submit" style="color:black">View</button>

        </form>
            <div >
          
            <table class="table table-bordered" style="margin-top: 60px;left:30px">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Marks</th>
                     <th scope="col">Grade</th>
                    <th scope="col">Term</th>
                </tr>
                </thead>
                <tbody>
                <?php
             

                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                         $grade= $row['marks'];
                        if ($grade >= 80 && $grade <= 100){
                             $grade= "A+";
                        }
   
                        elseif ($grade >= 70 && $grade <= 79)
                            {
                           $grade= "A";
                        }
                         elseif ($grade >= 60 && $grade <= 69)
                            {
                           $grade= "A-";
                        }
                        elseif ($grade >= 50 && $grade <= 59)
                            {
                           $grade= "B";
                        }
                        elseif ($grade >= 40 && $grade <= 49)
                            {
                           $grade= "C";
                        }
                        elseif ($grade >= 33 && $grade <= 39)
                            {
                           $grade= "D";
                        }
                        elseif ($grade >= 00 && $grade <= 32)
                            {
                           $grade= "F";
                        }

                          ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td><?php echo $row['roll']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                             <td><?php echo $row['marks']; ?></td>
                            <td><?php echo $grade; ?></td>
                            <td><?php echo $row['term']; ?></td>
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
<?php
function familyName($grade) {
  if ($grade > 90.9)
     echo "A";
elseif ($grade > 85.9)
  echo "B";
}
?>
