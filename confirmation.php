<?php
$connection = mysqli_connect('localhost','root');
if($connection){
    echo "Connection is Established!";

}
else{
    echo "Connection is Not Established!";
}
mysqli_select_db($connection,'hello');
$first_name = $_POST['first_name'];
$data = "INSERT INTO hello cr(name) VALUES ('$first_name')";
mysqli_query($connection,$data);
header('Successful.php');

?>
