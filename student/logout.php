    <?php  
    include_once('connect.php');
    session_start();
    if(session_destroy()){
	    header("Location: index.php");
    }
   /* session_unset()($_SESSION["email"]);
    session_unset()($_SESSION["password"]);

    session_destroy(); */
   # echo"<script>window.open('/..index.php','_self');</script>"; 
   # header("Location: index.php");
    ?>  
