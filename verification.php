<?php

//connect to db 
include "connectDB.php";

if(isset($_POST['submit']))
{

$user=$_POST["username"];
$password=$_POST["password"];

//initialize Session
$_SESSION['login_user']= $user;


//query from table
$sql = "SELECT password FROM users WHERE name = '$user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


//later change the index page to whatever is the latest        
if(md5($_POST["password"])==$row["password"]) {
    echo "<script type = text/javascript>
    alert('Login Successfull!');
    window.location.href='index.html';
    </script>";
}

else{
    echo "<script>
    alert('Failed to Login. Try Again!');
    window.location.href='login.php';
    </script>";
}
}

  }//end of sql query

}


?>
