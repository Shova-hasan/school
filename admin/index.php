<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.index{
     background-image: url(images/index.jpg);
     background-size: cover; 
     background-repeat:no-repeat;
     background-position: center;
     position: relative;
     font-family: sans-serif;
     top:0;
     bottom:0;
    
}
.index-a{
position: absolute;
   background-color:grey;
   top:0;
    bottom:0;
    height:100%;
    width:100%;
    z-index: -5;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: lightblue;
  color: white;
}
</style>
</head>
<body style="background-image: url(images/index.jpg);
     background-size: cover; 
     background-repeat:no-repeat;
     position: relative;
     font-family: sans-serif;
     top:0;
     bottom:0;
     opacity: 0.8;
     background-image: opacity(0.8);">

<div class="topnav">
   <a class="active"href="admin/signin.php" style="margin-left:900px;">Admin</a>
	<a  href="teacher/signin.php" >Teacher</a>
  <a href="student/signin.php">Student</a>

</div>

<div >
  <h2 style="margin-left:800px; padding-top:20px;color:black;font-size: 53px;" >Welcome to School</h2>
</div>

</body>
</html>
