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
<body style="background-image: url(images/);
             background-size:cover;
             background-repeat:no-repeat;
             background-color:#fbefcc;
            top: 0px;
            left: 0px;

  ">
  <h1 style="color:black;text-align: center;margin-top: 20px;">Exam Routine for FinalTerm</h1>
 <div>
<h1 style="color:black;text-align: center;">
                        Routine for 2020
            </h1>
   <div class="col-5" style="margin-top: 20px;margin-left: 0px;">
           
      <div >
          <table class="table table-bordered" style="margin-top: 60px;margin-left: 270px">
           <thead bgcolor="#c83349">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Class 10</th>
                    <th scope="col">Class 9</th>
                    <th scope="col">Class 8</th>
                    <th scope="col">Class 7</th>
                    <th scope="col">Class 6</th>
                    <th scope="col">Class 5</th>
                    <th scope="col">Class 4</th>
                    <th scope="col">Class 3</th>
                  </tr>
           </thead>
          <tbody>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">27.11.19(WED)</th>
      <td bgcolor="#f2ae72">Bangla 1st</td>
       <td bgcolor="#f2ae72">Bangla 1st</td>
       <td bgcolor="#f2ae72">Bangla 1st</td>
       <td bgcolor="#f2ae72">td>Bangla 1st</td>
       <td bgcolor="#f2ae72">Bangla 1st</td>
       <td bgcolor="#f2ae72">Bangla</td>
       <td bgcolor="#f2ae72">Bangla</td>
       <td bgcolor="#f2ae72">Bangla</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">28.11.19(THU)</th>
       <td bgcolor="#f2ae72">Bangla 2nd</td>
       <td bgcolor="#f2ae72">Bangla 2nd</td>
       <td bgcolor="#f2ae72">Bangla 2nd</td>
       <td bgcolor="#f2ae72">Bangla 2nd</td>
       <td bgcolor="#f2ae72">Bangla 2nd</td>
       <td bgcolor="#f2ae72">---</td>
       <td bgcolor="#f2ae72">---</td>
       <td bgcolor="#f2ae72">---</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">30.11.19(SAT)</th>
       <td bgcolor="#f2ae72">General Math</td>
       <td bgcolor="#f2ae72">General Math</td>
       <td bgcolor="#f2ae72">Math</td>
       <td bgcolor="#f2ae72">Math</td>
       <td bgcolor="#f2ae72">Math</td>
       <td bgcolor="#f2ae72">Math</td>
       <td bgcolor="#f2ae72">Math</td>
       <td bgcolor="#f2ae72">Math</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">01.12.19(SUN)</th>
       <td bgcolor="#f2ae72">English 1st</td>
       <td bgcolor="#f2ae72">English 1st</td>
       <td bgcolor="#f2ae72">English 1st</td>
       <td bgcolor="#f2ae72">English 1st</td>
       <td bgcolor="#f2ae72">English 1st</td>
       <td bgcolor="#f2ae72">English</td>
       <td bgcolor="#f2ae72">English</td>
       <td bgcolor="#f2ae72">English</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">02.12.19(MON)</th>
       <td bgcolor="#f2ae72">English 2nd</td>
       <td bgcolor="#f2ae72">English 2nd</td>
       <td bgcolor="#f2ae72">English 2nd</td>
       <td bgcolor="#f2ae72">English 2nd</td>
       <td bgcolor="#f2ae72">English 2nd</td>
       <td bgcolor="#f2ae72">---</td>
       <td bgcolor="#f2ae72">---</td>
       <td bgcolor="#f2ae72">---</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">03.12.19(TUE)</th>
       <td bgcolor="#f2ae72">Social Science</td>
       <td bgcolor="#f2ae72">Social Science</td>
       <td bgcolor="#f2ae72">Social Science</td>
       <td bgcolor="#f2ae72">Social Science</td>
       <td bgcolor="#f2ae72">Social Science</td>
       <td bgcolor="#f2ae72">Social Science</td>
      <td bgcolor="#f2ae72">Social Science</td>
       <td bgcolor="#f2ae72">Social Science</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">04.12.19(WED)</th>
      <td bgcolor="#f2ae72">Science</td>
       <td bgcolor="#f2ae72">Science</td>
       <td bgcolor="#f2ae72">Science</td>
      <td bgcolor="#f2ae72">Science</td>
       <td bgcolor="#f2ae72">Science</td>
       <td bgcolor="#f2ae72">Science</td>
       <td bgcolor="#f2ae72">Science</td>
       <td bgcolor="#f2ae72">Science</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">05.12.19(THU)</th>
       <td bgcolor="#f2ae72">Religious Study</td>
       <td bgcolor="#f2ae72">Religious Study</td>
      <td bgcolor="#f2ae72">Religious Study</td>
       <td bgcolor="#f2ae72">Religious Study</td>
       <td bgcolor="#f2ae72">Religious Study</td>
       <td bgcolor="#f2ae72">Religious Study</td>
       <td bgcolor="#f2ae72">Religious Study</td>
       <td bgcolor="#f2ae72">Religious Study</td>
    </tr>
      <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">07.12.19(SAT)</th>
       <td bgcolor="#f2ae72">Physics</td>
       <td bgcolor="#f2ae72">Chemistry</td>
       <td bgcolor="#f2ae72">ICT</td>
       <td bgcolor="#f2ae72">ICT</td>
       <td bgcolor="#f2ae72">ICT</td>
       <td bgcolor="#f2ae72">---</td>
       <td bgcolor="#f2ae72">---</td>
      <td bgcolor="#f2ae72">---</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">08.12.19(SUN)</th>
      <td bgcolor="#f2ae72">Chemistry</td>
      <td bgcolor="#f2ae72">Physics</td>
      <td bgcolor="#f2ae72">Agricultural Study</td>
      <td bgcolor="#f2ae72">Agricultural Study</td>
      <td bgcolor="#f2ae72">Agricultural Study</td>
      <td bgcolor="#f2ae72">---</td>
      <td bgcolor="#f2ae72">---</td>
      <td bgcolor="#f2ae72">---</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">09.12.19(MON)</th>
      <td bgcolor="#f2ae72">Higher Math</td>
      <td bgcolor="#f2ae72">Biology</td>
      <td bgcolor="#f2ae72">----</td>
     <td bgcolor="#f2ae72">----</td>
     <td bgcolor="#f2ae72">----</td>
     <td bgcolor="#f2ae72">----</td>
     <td bgcolor="#f2ae72">----</td>
     <td bgcolor="#f2ae72">----</td>
    </tr>
    <tr>
      <th bgcolor="#e0876a" scope="row" style="text-align: center;">10.12.19(TUE)</th>
      <td bgcolor="#f2ae72">Biology</td>
      <td bgcolor="#f2ae72">Higher Math</td>
      <td bgcolor="#f2ae72">----</td>
      <td bgcolor="#f2ae72">----</td>
      <td bgcolor="#f2ae72">----</td>
      <td bgcolor="#f2ae72">----</td>
      <td bgcolor="#f2ae72">----</td>
      <td bgcolor="#f2ae72">----</td>
    </tr>
  </tbody>
</table>

</table>
</div>

</div>
 </div>
</div>
</body>
<style>
@import url(bootstrap.min.css);
@import url(all.min.css);
*{
  margin: 0;
  padding: 0;
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
.gallery img{
  width: 20%;
  height:auto;
  border-radius: 5px;
  cursor: pointer;
  transition:.3s;
}
}

</style>
</body>
</html>