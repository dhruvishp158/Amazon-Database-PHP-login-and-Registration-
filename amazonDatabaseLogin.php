<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dtabase</title>
</head>
<body>
    
    <?php
       


        $server_name="localhost";
        $username="root";
        $password="";   

        $connection=mysqli_connect($server_name,$username,$password);
           

        $connection=mysqli_connect($server_name,$username,$password,"amazon");

        $email=$_POST["email"];
        $password=$_POST["password"];
        $message="You logged in Succeessfully";
        // echo $email."     ".$password;


//User Check

        $sql_query="select * from users where emailId='$email' and password='$password';";
        $result=mysqli_query($connection,$sql_query);
        if(mysqli_num_rows($result)>0)
        {
            echo "<script type='text/javascript'>alert('$message');</script>";
           
        }
        else
        {
            die("This email Id has not registered yet Please Register first");
        }
       
//  header("location:miniProjectAmazon.php");

       
       
       
    ?>
</body>
</html>