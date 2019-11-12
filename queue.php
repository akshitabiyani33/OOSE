<!-- <?php
    session_start();
    $con=mysqli_connect("localhost","root","");
    if(!$con)
        die('Could not connect to server'.mysql_connect_error());
    mysqli_select_db($con,"resto");
    $id=$_SESSION["reg_id"];
    $temp=mysqli_query($con,"SELECT id FROM queue WHERE `id`='$id'");
    while($row=$temp->fetch_assoc())
    {
        $hrs=$row["2"];//
        $mins=$row["3"];//
    }
    echo "$hrs";
?> -->
<html>
    <head>
    <title>Digital Restaurants | Queue</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        
    </body>
</html>