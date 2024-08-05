<!DOCTYPE html>
<html>

<body>


      <?php
      session_start();
      require_once "config.php";
      $username = $_POST['username'];
      $oldpass = $_POST['oldpass'];
      $password = $_POST['password'];
      $username = stripslashes($username);
      //escapes special characters in a string
      $username = mysqli_real_escape_string($conn, $username);
      $oldpass = stripslashes($oldpass);
      //escapes special characters in a string
      $oldpass = mysqli_real_escape_string($conn, $oldpass);
      $password = stripslashes($password);
      //escapes special characters in a string
      $password = mysqli_real_escape_string($conn, $password);

      if ($username && $password && $oldpass) {
            $query = "UPDATE `logintable` SET `password1`='" . md5($password) . "' WHERE  username = '$username' and password1 = '" . md5($oldpass) . "'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                  echo "<script> alert('update succuessful');
window.location.href='smartfarm.html';
</script>";
            }
      } else {
            echo "<script> alert('USER NOT FOUND');
window.location.href='registration.html';
</script>";
      }
      ?>
</body>

</html>