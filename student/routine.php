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
             background-color: #ccffcc;
             background-repeat:no-repeat;
            top: 0px;
            left: 0px;

  ">
  <h1 style="color:black;text-align: center;margin-top: 20px;">Routine for 2020</h1>
 <div>
<h1 style="color:black;text-align: center;">
                        Routine for 2020
            </h1>
   <div class="col-5" style="margin-top: 20px;margin-left: 0px;">
           
            <div >
           
            <table class="table table-bordered" style="margin-top: 60px;">
                <thead bgcolor="#cc99ff">
                <tr>
                    <th scope="col">Days</th>
                    <th scope="col">Class</th>
                    <th scope="col" colspan="8" style="text-align: center;">Hours</th>
                </tr>
                </thead>
                <tbody>  
                      <tr>
                        <th bgcolor="#e0876a" scope="col"rowspan="8" style="text-align: center;">Saturday</th>
                        
                      </tr>
             
                        <tr>
                            <td bgcolor="#9999ff"></td>
                            <td bgcolor="#9999ff">(10.45-11.15)a.m.</td>
                            <td bgcolor="#9999ff">(11.15-11.45)a.m.</td>
                            <td bgcolor="#9999ff">(11.45-12.15)p.m.</td>
                            <td bgcolor="#9999ff">(12.15-12.45)p.m.</td>
                            <td bgcolor="#9999ff">(12.45-1.15)p.m.</td>
                            <td bgcolor="#9999ff">(02.00-02.30)p.m.</td>
                            <td bgcolor="#9999ff">(02.30-3.00)p.m.</td>
                            <td bgcolor="#9999ff">(03.00-3.30)p.m.</td>
                        </tr>

                        <tr>
                            <td class="table-info">10</td>
                            <td class="table-info">Bangla1st</td>
                            <td class="table-info">English1st</td>
                            <td class="table-info">Physics/Accounting/History</td>
                            <td class="table-info">GeneralMath</td>
                            <td class="table-info">HigherMath/Science</td>
                            <td class="table-info">SocialScience</td>
                            <td class="table-info">Islamic Study/Hindu Study</td>
                            <td class="table-info">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td class="table-info">9</td>
                            <td class="table-info">Bangla1st</td>
                            <td class="table-info">English1st</td>
                            <td class="table-info">Physics/Accounting/History</td>
                            <td class="table-info">GeneralMath</td>
                            <td class="table-info">HigherMath/Science</td>
                            <td class="table-info">SocialScience</td>
                            <td class="table-info">Islamic Study/Hindu Study</td>
                            <td class="table-info">Chemistry/Business Study</td>
                        </tr>
                        <tr>
                            <td class="table-info">8</td>
                            <td class="table-info">Bangla1st</td>
                            <td class="table-info">English1st</td>
                            <td class="table-info">Science</td>
                            <td class="table-info">Math</td>
                            <td class="table-info">Bangla2nd</td>
                            <td class="table-info">SocialScience</td>
                            <td class="table-info">Islamic Study/Hindu Study</td>
                            <td class="table-info">English2nd</td>
                        </tr>
                        <tr>
                            <td class="table-info">7</td>
                            <td class="table-info">Science</td>
                            <td class="table-info">Math</td>
                            <td class="table-info">Bangla2nd</td>
                            <td class="table-info">SocialScience</td>
                            <td class="table-info">Bangla1st</td>
                            <td class="table-info">English1st</td>
                            <td class="table-info">Islamic Study/Hindu Study</td>
                            <td class="table-info">English2nd</td>
                        </tr>
                             <tr>
                            <td class="table-info">6</td>
                            <td class="table-info">Bangla2nd</td>
                            <td class="table-info">SocialScience</td>
                            <td class="table-info">Islamic Study/Hindu Study</td>
                            <td class="table-info">English2nd</td>
                            <td class="table-info">Bangla1st</td>
                            <td class="table-info">English1st</td>
                            <td class="table-info">Science</td>
                            <td class="table-info">Math</td>
                            
                        </tr>
                        </tr>
                             <tr>
                            <td class="table-info">5</td>
                            <td class="table-info">English</td>
                            <td class="table-info">Math</td>
                            <td class="table-info">Bangla</td>
                            <td class="table-info">SocialScience</td>
                            <td class="table-info">Islamic Study/Hindu Study</td>
                            <td class="table-info">Science</td>
                            <td class="table-info">---</td>
                            <td class="table-info">---</td> 
                        </tr>
                    </tbody>
                     <tbody>  
                      <tr>
                        <th  bgcolor="#f4a688" scope="col"rowspan="8" style="text-align: center;">Sunday</th>
                        
                      </tr>
             
                        <tr>
                            <td bgcolor="#9999ff"></td>
                            <td bgcolor="#9999ff">(10.45-11.15)a.m.</td>
                            <td bgcolor="#9999ff">(11.15-11.45)a.m.</td>
                            <td bgcolor="#9999ff">(11.45-12.15)p.m.</td>
                            <td bgcolor="#9999ff">(12.15-12.45)p.m.</td>
                            <td bgcolor="#9999ff">(12.45-1.15)p.m.</td>
                            <td bgcolor="#9999ff">(02.00-02.30)p.m.</td>
                            <td bgcolor="#9999ff">(02.30-3.00)p.m.</td>
                            <td bgcolor="#9999ff">(03.00-3.30)p.m.</td>
                        </tr>

                        <tr>
                            <td bgcolor="#bdcebe">10</td>
                            <td bgcolor="#bdcebe">GeneralMath</td>
                            <td bgcolor="#bdcebe">HigherMath/Science</td>
                            <td bgcolor="#bdcebe">SocialScience</td>
                            <td bgcolor="#bdcebe">Islamic Study/Hindu Study</td>
                            <td bgcolor="#bdcebe">Chemistry/Business Study</td>
                            <td bgcolor="#bdcebe">Bangla1st</td>
                            <td bgcolor="#bdcebe">English1st</td>
                            <td bgcolor="#bdcebe">Physics/Accounting/History</td>
                        </tr>
                          <tr>
                            <td bgcolor="#bdcebe">9</td>
                            <td bgcolor="#bdcebe">Islamic Study/Hindu Study</td>
                            <td bgcolor="#bdcebe">Chemistry/Business Study</td>
                            <td bgcolor="#bdcebe">Bangla1st</td>
                            <td bgcolor="#bdcebe">English1st</td>
                            <td bgcolor="#bdcebe">Physics/Accounting/History</td>
                            <td bgcolor="#bdcebe">GeneralMath</td>
                            <td bgcolor="#bdcebe">HigherMath/Science</td>
                            <td bgcolor="#bdcebe">SocialScience</td>
                        </tr>
                          <tr>
                            <td bgcolor="#bdcebe">8</td>
                            <td bgcolor="#bdcebe">English2nd</td>
                            <td bgcolor="#bdcebe">Bangla1st</td>
                            <td bgcolor="#bdcebe">English1st</td>
                            <td bgcolor="#bdcebe">Science</td>
                            <td bgcolor="#bdcebe">Math</td>
                            <td bgcolor="#bdcebe">Bangla2nd</td>
                            <td bgcolor="#bdcebe">SocialScience</td>
                            <td bgcolor="#bdcebe">Islamic Study/Hindu Study</td>
                        </tr>
                             <tr>
                            <td bgcolor="#bdcebe">7</td>
                            <td bgcolor="#bdcebe">Math</td>
                            <td bgcolor="#bdcebe">Bangla2nd</td>
                            <td bgcolor="#bdcebe">SocialScience</td>
                            <td bgcolor="#bdcebe">Bangla1st</td>
                            <td bgcolor="#bdcebe">Science</td>
                            <td bgcolor="#bdcebe">English1st</td>
                            <td bgcolor="#bdcebe">Islamic Study/Hindu Study</td>
                            <td bgcolor="#bdcebe">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#bdcebe">6</td>
                            <td bgcolor="#bdcebe">Science</td>
                            <td bgcolor="#bdcebe">Math</td>
                            <td bgcolor="#bdcebe">Bangla2nd</td>
                            <td bgcolor="#bdcebe">SocialScience</td>
                            <td bgcolor="#bdcebe">Islamic Study/Hindu Study</td>
                            <td bgcolor="#bdcebe">English2nd</td>
                            <td bgcolor="#bdcebe">Bangla1st</td>
                            <td bgcolor="#bdcebe">English1st</td> 
                        </tr>
                        </tr>
                             <tr>
                            <td bgcolor="#bdcebe">5</td>
                            <td bgcolor="#bdcebe">Science</td>
                            <td bgcolor="#bdcebe">Math</td>
                            <td bgcolor="#bdcebe">Bangla</td>
                            <td bgcolor="#bdcebe">SocialScience</td>
                            <td bgcolor="#bdcebe">Islamic Study/Hindu Study</td>
                            <td bgcolor="#bdcebe">English</td>
                            <td bgcolor="#bdcebe">---</td>
                            <td bgcolor="#bdcebe">---</td> 
                        </tr>

                    </tbody>
                     <tbody>  
                      <tr>
                        <th  bgcolor="#f9ccac" scope="col"rowspan="7" style="text-align: center;">Monday</th>
                        
                      </tr>
             
                        <tr>
                            <td bgcolor="#9999ff"></td>
                            <td bgcolor="#9999ff">(10.45-11.15)a.m.</td>
                            <td bgcolor="#9999ff">(11.15-11.45)a.m.</td>
                            <td bgcolor="#9999ff">(11.45-12.15)p.m.</td>
                            <td bgcolor="#9999ff">(12.15-12.45)p.m.</td>
                            <td bgcolor="#9999ff">(12.45-1.15)p.m.</td>
                            <td bgcolor="#9999ff">(02.00-02.30)p.m.</td>
                            <td bgcolor="#9999ff">(02.30-3.00)p.m.</td>
                            <td bgcolor="#9999ff">(03.00-3.30)p.m.</td>
                        </tr>

                        <tr>
                            <td bgcolor="#eca1a6">10</td>
                            <td bgcolor="#eca1a6">Bangla1st</td>
                            <td bgcolor="#eca1a6">English1st</td>
                            <td bgcolor="#eca1a6">Physics/Accounting/History</td>
                            <td bgcolor="#eca1a6">GeneralMath</td>
                            <td bgcolor="#eca1a6">HigherMath/Science</td>
                            <td bgcolor="#eca1a6">SocialScience</td>
                            <td bgcolor="#eca1a6">Islamic Study/Hindu Study</td>
                            <td bgcolor="#eca1a6">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#eca1a6">9</td>
                            <td bgcolor="#eca1a6">Bangla1st</td>
                            <td bgcolor="#eca1a6">English1st</td>
                            <td bgcolor="#eca1a6">Physics/Accounting/History</td>
                            <td bgcolor="#eca1a6">GeneralMath</td>
                            <td bgcolor="#eca1a6">HigherMath/Science</td>
                            <td bgcolor="#eca1a6">SocialScience</td>
                            <td bgcolor="#eca1a6">Islamic Study/Hindu Study</td>
                            <td bgcolor="#eca1a6">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#eca1a6">8</td>
                            <td bgcolor="#eca1a6">Bangla1st</td>
                            <td bgcolor="#eca1a6">English1st</td>
                            <td bgcolor="#eca1a6">Science</td>
                            <td bgcolor="#eca1a6">Math</td>
                            <td bgcolor="#eca1a6">Bangla2nd</td>
                            <td bgcolor="#eca1a6">SocialScience</td>
                            <td bgcolor="#eca1a6">Islamic Study/Hindu Study</td>
                            <td bgcolor="#eca1a6">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#eca1a6">7</td>
                            <td bgcolor="#eca1a6">Science</td>
                            <td bgcolor="#eca1a6">Math</td>
                            <td bgcolor="#eca1a6">Bangla2nd</td>
                            <td bgcolor="#eca1a6">SocialScience</td>
                            <td bgcolor="#eca1a6">Bangla1st</td>
                            <td bgcolor="#eca1a6">English1st</td>
                            <td bgcolor="#eca1a6">Islamic Study/Hindu Study</td>
                            <td bgcolor="#eca1a6">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#eca1a6">6</td>
                            <td bgcolor="#eca1a6">Bangla2nd</td>
                            <td bgcolor="#eca1a6">SocialScience</td>
                            <td bgcolor="#eca1a6">Islamic Study/Hindu Study</td>
                            <td bgcolor="#eca1a6">English2nd</td>
                            <td bgcolor="#eca1a6">Bangla1st</td>
                            <td bgcolor="#eca1a6">English1st</td>
                            <td bgcolor="#eca1a6">Science</td>
                            <td bgcolor="#eca1a6">Math</td>
                            
                        </tr>
                    </tbody>
                     <tbody>  
                      <tr>
                        <th  bgcolor="#87bdd8"scope="col"rowspan="7" style="text-align: center;">Tuesday</th>
                        
                      </tr>
             
                        <tr>
                            <td bgcolor="#9999ff"></td>
                            <td bgcolor="#9999ff">(10.45-11.15)a.m.</td>
                            <td bgcolor="#9999ff">(11.15-11.45)a.m.</td>
                            <td bgcolor="#9999ff">(11.45-12.15)p.m.</td>
                            <td bgcolor="#9999ff">(12.15-12.45)p.m.</td>
                            <td bgcolor="#9999ff">(12.45-1.15)p.m.</td>
                            <td bgcolor="#9999ff">(02.00-02.30)p.m.</td>
                            <td bgcolor="#9999ff">(02.30-3.00)p.m.</td>
                            <td bgcolor="#9999ff">(03.00-3.30)p.m.</td>
                        </tr>

                        <tr>
                            <td bgcolor="#d6cbd3">10</td>
                            <td bgcolor="#d6cbd3">Bangla1st</td>
                            <td bgcolor="#d6cbd3">English1st</td>
                            <td bgcolor="#d6cbd3">Physics/Accounting/History</td>
                            <td bgcolor="#d6cbd3">GeneralMath</td>
                            <td bgcolor="#d6cbd3">HigherMath/Science</td>
                            <td bgcolor="#d6cbd3">SocialScience</td>
                            <td bgcolor="#d6cbd3">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d6cbd3">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#d6cbd3">9</td>
                            <td bgcolor="#d6cbd3">Bangla1st</td>
                            <td bgcolor="#d6cbd3">English1st</td>
                            <td bgcolor="#d6cbd3">Physics/Accounting/History</td>
                            <td bgcolor="#d6cbd3">GeneralMath</td>
                            <td bgcolor="#d6cbd3">HigherMath/Science</td>
                            <td bgcolor="#d6cbd3">SocialScience</td>
                            <td bgcolor="#d6cbd3">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d6cbd3">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#d6cbd3">8</td>
                            <td bgcolor="#d6cbd3">Bangla1st</td>
                            <td bgcolor="#d6cbd3">English1st</td>
                            <td bgcolor="#d6cbd3">Science</td>
                            <td bgcolor="#d6cbd3">Math</td>
                            <td bgcolor="#d6cbd3">Bangla2nd</td>
                            <td bgcolor="#d6cbd3">SocialScience</td>
                            <td bgcolor="#d6cbd3">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d6cbd3">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#d6cbd3">7</td>
                            <td bgcolor="#d6cbd3">Science</td>
                            <td bgcolor="#d6cbd3">Math</td>
                            <td bgcolor="#d6cbd3">Bangla2nd</td>
                            <td bgcolor="#d6cbd3">SocialScience</td>
                            <td bgcolor="#d6cbd3">Bangla1st</td>
                            <td bgcolor="#d6cbd3">English1st</td>
                            <td bgcolor="#d6cbd3">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d6cbd3">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#d6cbd3">6</td>
                            <td bgcolor="#d6cbd3">Bangla2nd</td>
                            <td bgcolor="#d6cbd3">SocialScience</td>
                            <td bgcolor="#d6cbd3">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d6cbd3">English2nd</td>
                            <td bgcolor="#d6cbd3">Bangla1st</td>
                            <td bgcolor="#d6cbd3">English1st</td>
                            <td bgcolor="#d6cbd3">Science</td>
                            <td bgcolor="#d6cbd3">Math</td>
                            
                        </tr>
                    </tbody>
                     <tbody>  
                      <tr>
                        <th  bgcolor="#80ced6"scope="col"rowspan="7" style="text-align: center;">Wednesday</th>
                        
                      </tr>
             
                        <tr>
                            <td bgcolor="#9999ff"></td>
                            <td bgcolor="#9999ff">(10.45-11.15)a.m.</td>
                            <td bgcolor="#9999ff">(11.15-11.45)a.m.</td>
                            <td bgcolor="#9999ff">(11.45-12.15)p.m.</td>
                            <td bgcolor="#9999ff">(12.15-12.45)p.m.</td>
                            <td bgcolor="#9999ff">(12.45-1.15)p.m.</td>
                            <td bgcolor="#9999ff">(02.00-02.30)p.m.</td>
                            <td bgcolor="#9999ff">(02.30-3.00)p.m.</td>
                            <td bgcolor="#9999ff">(03.00-3.30)p.m.</td>
                        </tr>

                        <tr>
                            <td bgcolor="#d5e1df">10</td>
                            <td bgcolor="#d5e1df">Bangla1st</td>
                            <td bgcolor="#d5e1df">English1st</td>
                            <td bgcolor="#d5e1df">Physics/Accounting/History</td>
                            <td bgcolor="#d5e1df">GeneralMath</td>
                            <td bgcolor="#d5e1df">HigherMath/Science</td>
                            <td bgcolor="#d5e1df">SocialScience</td>
                            <td bgcolor="#d5e1df">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d5e1df">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#d5e1df">9</td>
                            <td bgcolor="#d5e1df">Bangla1st</td>
                            <td bgcolor="#d5e1df">English1st</td>
                            <td bgcolor="#d5e1df">Physics/Accounting/History</td>
                            <td bgcolor="#d5e1df">GeneralMath</td>
                            <td bgcolor="#d5e1df">HigherMath/Science</td>
                            <td bgcolor="#d5e1df">SocialScience</td>
                            <td bgcolor="#d5e1df">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d5e1df">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#d5e1df">8</td>
                            <td bgcolor="#d5e1df">Bangla1st</td>
                            <td bgcolor="#d5e1df">English1st</td>
                            <td bgcolor="#d5e1df">Science</td>
                            <td bgcolor="#d5e1df">Math</td>
                            <td bgcolor="#d5e1df">Bangla2nd</td>
                            <td bgcolor="#d5e1df">SocialScience</td>
                            <td bgcolor="#d5e1df">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d5e1df">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#d5e1df">7</td>
                            <td bgcolor="#d5e1df">Science</td>
                            <td bgcolor="#d5e1df">Math</td>
                            <td bgcolor="#d5e1df">Bangla2nd</td>
                            <td bgcolor="#d5e1df">SocialScience</td>
                            <td bgcolor="#d5e1df">Bangla1st</td>
                            <td bgcolor="#d5e1df">English1st</td>
                            <td bgcolor="#d5e1df">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d5e1df">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#d5e1df">6</td>
                            <td bgcolor="#d5e1df">Bangla2nd</td>
                            <td bgcolor="#d5e1df">SocialScience</td>
                            <td bgcolor="#d5e1df">Islamic Study/Hindu Study</td>
                            <td bgcolor="#d5e1df">English2nd</td>
                            <td bgcolor="#d5e1df">Bangla1st</td>
                            <td bgcolor="#d5e1df">English1st</td>
                            <td bgcolor="#d5e1df">Science</td>
                            <td bgcolor="#d5e1df">Math</td>
                            
                        </tr>
                    </tbody>
                    <tbody>  
                      <tr>
                        <th  bgcolor="#b1cbbb"scope="col"rowspan="7" style="text-align: center;">Thursday</th>
                        
                      </tr>
             
                        <tr>
                            <td bgcolor="#9999ff"></td>
                            <td bgcolor="#9999ff">(10.45-11.15)a.m.</td>
                            <td bgcolor="#9999ff">(11.15-11.45)a.m.</td>
                            <td bgcolor="#9999ff">(11.45-12.15)p.m.</td>
                            <td bgcolor="#9999ff">(12.15-12.45)p.m.</td>
                            <td bgcolor="#9999ff">(12.45-1.15)p.m.</td>
                            <td bgcolor="#9999ff">(02.00-02.30)p.m.</td>
                            <td bgcolor="#9999ff">(02.30-3.00)p.m.</td>
                            <td bgcolor="#9999ff">(03.00-3.30)p.m.</td>
                        </tr>

                        <tr>
                            <td bgcolor="#b5e7a0">10</td>
                            <td bgcolor="#b5e7a0">Bangla1st</td>
                            <td bgcolor="#b5e7a0">English1st</td>
                            <td bgcolor="#b5e7a0">Physics/Accounting/History</td>
                            <td bgcolor="#b5e7a0">GeneralMath</td>
                            <td bgcolor="#b5e7a0">HigherMath/Science</td>
                            <td bgcolor="#b5e7a0">SocialScience</td>
                            <td bgcolor="#b5e7a0">Islamic Study/Hindu Study</td>
                            <td bgcolor="#b5e7a0">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#b5e7a0">9</td>
                            <td bgcolor="#b5e7a0">Bangla1st</td>
                            <td bgcolor="#b5e7a0">English1st</td>
                            <td bgcolor="#b5e7a0">Physics/Accounting/History</td>
                            <td bgcolor="#b5e7a0">GeneralMath</td>
                            <td bgcolor="#b5e7a0">HigherMath/Science</td>
                            <td bgcolor="#b5e7a0">SocialScience</td>
                            <td bgcolor="#b5e7a0">Islamic Study/Hindu Study</td>
                            <td bgcolor="#b5e7a0">Chemistry/Business Study</td>
                        </tr>
                          <tr>
                            <td bgcolor="#b5e7a0">8</td>
                            <td bgcolor="#b5e7a0">Bangla1st</td>
                            <td bgcolor="#b5e7a0">English1st</td>
                            <td bgcolor="#b5e7a0">Science</td>
                            <td bgcolor="#b5e7a0">Math</td>
                            <td bgcolor="#b5e7a0">Bangla2nd</td>
                            <td bgcolor="#b5e7a0">SocialScience</td>
                            <td bgcolor="#b5e7a0">Islamic Study/Hindu Study</td>
                            <td bgcolor="#b5e7a0">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#b5e7a0">7</td>
                            <td bgcolor="#b5e7a0">Science</td>
                            <td bgcolor="#b5e7a0">Math</td>
                            <td bgcolor="#b5e7a0">Bangla2nd</td>
                            <td bgcolor="#b5e7a0">SocialScience</td>
                            <td bgcolor="#b5e7a0">Bangla1st</td>
                            <td bgcolor="#b5e7a0">English1st</td>
                            <td bgcolor="#b5e7a0">Islamic Study/Hindu Study</td>
                            <td bgcolor="#b5e7a0">English2nd</td>
                        </tr>
                             <tr>
                            <td bgcolor="#b5e7a0">6</td>
                            <td bgcolor="#b5e7a0">Bangla2nd</td>
                            <td bgcolor="#b5e7a0">SocialScience</td>
                            <td bgcolor="#b5e7a0">Islamic Study/Hindu Study</td>
                            <td bgcolor="#b5e7a0">English2nd</td>
                            <td bgcolor="#b5e7a0">Bangla1st</td>
                            <td bgcolor="#b5e7a0">English1st</td>
                            <td bgcolor="#b5e7a0">Science</td>
                            <td bgcolor="#b5e7a0">Math</td>
                            
                        </tr>
                    </tbody>

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