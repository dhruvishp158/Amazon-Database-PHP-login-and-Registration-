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
        if(!$connection)
        {
            die("Connecion MySql failed: ".mysqli_connect_error());
        }
        echo "Connection Successful<br/>"; 

        $connection=mysqli_connect($server_name,$username,$password,"amazon");

        $email=$_POST["email"];
        $password=$_POST["password"];
        // echo $email."     ".$password;


//User Check

        $sql_query="select * from users where emailId='$email';";
        $result=mysqli_query($connection,$sql_query);
        if(mysqli_num_rows($result)>0)
        {
            die("Error: Email id $email already exist <br/>");
        }

//INSERT DATA 
 $sql_query="insert into users(emailId, password) values('$email','$password');";

if(mysqli_query($connection,$sql_query))
{
    echo "inserted Successfully";
}
else
{
    echo "</br>error insertind data: ".mysqli_error($connection)."<br/>"; 
}
   

        header("location:miniProjectAmazon.php");
        die();
       
    ?>
</body>
</html>