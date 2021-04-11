<!-- <?php
$Email = filter_input(INPUT_POST, 'Email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($Emaile)){
if (!empty($password)){
$host = "localhost";
$dbEmail = "root";
$dbpassword = "";
$dbname = "internship";
// Create connection
$conn = new mysqli ($host, $dbEmail, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO logindetails (Email, password)
values ('$Email','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Email should not be empty";
die();
}
?>
 -->


enter this into inside the body

<!-- <form method="post" action="connect.php">
Email_id : <input type="text" name="Email"><br><br>
Password : <input type="password" name="password"><br><br>
<input type="SignIn" value="SignIn">
</form> -->
