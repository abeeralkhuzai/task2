<!DOCTYPE html>
<html>
<head>
 <title>Control panel</title>
<br>
</br>
</head>
<body style= "background-color:#B0C4DE";>
<body>
    <a href="control.html">Go back</a>
    <?php 
$conn = mysqli_connect('localhost', 'root', '', 'dbcontrol');

//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}

if (isset($_POST['backward'])){
    echo "<p align=center>B</p> ";
    mysqli_query($conn,"INSERT INTO`control` SET `Backward` = 'B'");
}

if (isset($_POST['farward'])){
    echo "<p align=center>F</p> ";
    mysqli_query($conn,"INSERT `control` SET `Farward` = 'F'");
}

if (isset($_POST['right'])){
    echo "<p align=center>R</p> ";
    mysqli_query($conn,"INSERT `control` SET `Right` = 'R'");
}

if (isset($_POST['left'])){
    echo "<p align=center>L</p> ";
    mysqli_query($conn,"INSERT `control` SET `Left` = 'L'");
}
if (isset($_POST['stop'])){
    echo "<p align=center>S</p> ";
    mysqli_query($conn,"INSERT `control` SET `Stop` = 'S'");
} 




?>
</body>
</html>


