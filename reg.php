<?php 
    session_start();
    $name=$_POST['inpname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $guestno=$_POST['guestno'];
    $con=mysqli_connect("localhost","root","");
    if(!$con)
        die('Could not connect!'.mysql_connect_error());
    mysqli_select_db($con,"resto");
    if($name!=NULL||$phone!=NULL||$email!=NULL||$guestno!=NULL)
    {
        $_SESSION["name"]=$name;
        $_SESSION["phone"]=$phone;
        $_SESSION["email"]=$email;
        $_SESSION["guestno"]=$guestno;
        if (mysqli_query($con,"INSERT INTO reg (name, phone, email, guestno) VALUES ('$name','$phone','$email','$guestno')"))
        {
            header('location: http://localhost/Resto/queue/queue.php');
        }
        else
            header('location: http://localhost/Resto/signup/signup.html');
    }
    $temp=mysqli_query($con,"SELECT reg_id FROM reg WHERE `name`='$name'");
    while($row=$temp->fetch_assoc())
    {
        $q_reg_id=$row["reg_id"];
    }
    $_SESSION["reg_id"]=$q_reg_id;
    mysqli_query($con,"INSERT INTO queue(id) VALUES ('$q_reg_id')");
	mysqli_close($con);
?>