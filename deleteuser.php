<!DOCTYPE html>
<html>

<body>


      <?php
      session_start();
      require_once "config.php";
      $username = $_POST['username'];
      $password = $_POST['password'];
      $username = stripslashes($username);
      //escapes special characters in a string
      $username = mysqli_real_escape_string($conn, $username);
      $email    = stripslashes($password);
      $email    = mysqli_real_escape_string($conn, $email);

      if ($username && $password) {
            $query = "DELETE FROM `logintable` WHERE  username = '$username' and password1 = '" . md5($email) . "'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                  echo "<script> alert('Delete succuessful');
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