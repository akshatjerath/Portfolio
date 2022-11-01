<?php

$servername="localhost";

$uname="root";

$dbname="quotepad";

$email = $_POST['email'];

$username = $_POST['uname'];

$gender = $_POST['Gender'];

$password = $_POST['pwd'];

$db = mysqli_connect($servername, $uname, "",$dbname);

$check_query = "select * from `user registration` where Username = '$username' or Email = '$email'";

$result = mysqli_query($db, $check_query);

$r = mysqli_fetch_assoc($result);

if($r)

{

if($username == $r['username'])

{

                echo "<script>

                window.alert('Username already exists');

                window.location = 'qsignup.html';

                </script>";

}

elseif($email == $r['Email'])

{

                echo "<script>

                window.alert('Email ID already exists');

                window.location = 'qsignup.html';

                </script>";

}

}

else

{

$sql = "insert into `user registration` values ('$email', '$username','$password', '$gender'               );";

mysqli_query($db, $sql);

echo "<script>

window.alert('Registered successfully');

window.location = 'qlogin1.php';

</script>";

}

?>