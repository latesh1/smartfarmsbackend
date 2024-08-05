<?php

function register()
{
    //jQuery Plugin
    if (!empty($_GET['radio'])) {
        $selected = $_GET['radio'];
    } else {
        $selected = 'male';
    }
    require_once "config.php";
    $username = stripslashes($_REQUEST['t1']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['psw']);
    $password = mysqli_real_escape_string($conn, $password);
    $date = stripslashes($_REQUEST['bday']);
    $date = mysqli_real_escape_string($conn, $date);
    $gender = $selected;
    $gender = stripslashes($gender);
    $gender = mysqli_real_escape_string($conn, $gender);
    $addre = stripslashes($_REQUEST['t2']);
    $addre = mysqli_real_escape_string($conn, $addre);
    $tel = stripslashes($_REQUEST['tel']);
    $tel = mysqli_real_escape_string($conn, $tel);
    // Check if username is empty

    $query    = "INSERT into `logintable` (username, password1,addre,tel,gender,date1,enail)
            VALUES ('$username', '" . md5($password) . "','$addre','$tel','$gender','$date','$email')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        // 86400 = 1 day
        echo "$gender";

        //                header("location: index.php");
    } else {
        echo "Something went wrong... cannot redirect!";
        echo "$password";
        echo "$username";
        echo "$email";
        echo "$date";
        echo "$gender";
        echo "$addre";
        echo "$tel";
    }
    mysqli_close($conn);
}
if (array_key_exists('rege', $_POST)) {
    register();
}

?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: Bahnschrift;
            color: black;
            background-image: url("s6.jpg");
            width: 100%;

        }

        #forms {
            background-color: grey;
            opacity: 0.8;
            width: 400px;
            font-weight: bold;
            margin: auto;
            text-align: justify;
            padding: 20px
        }

        input[type="submit"] {
            background: black;
            border: none;
            width: 100px;
            height: 300;
            align: justify;
            float: center;
            padding: 5px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }


        input[type="text"] {
            width: 200px;
            height: 10px;
            padding: 5px;
        }

        input[type="email"] {
            width: 235px;
            height: 10px;
            padding: 5px;
        }

        input[type="date"] {
            width: 197px;
            height: 10px;
            padding: 5px;
        }

        input[type="tel"] {
            width: 230px;
            height: 10px;
            padding: 5px;
        }
    </style>
    <script language="javascript" value="text/javascript">
        // <!--
        function validateForm() {
            var x = document.forms["regForm"]["t1"].value;
            if (x == "") {
                alert("Please enter your name");
                return false;
            }
            var y = document.forms["regForm"]["t2"].value;
            if (y == "") {
                alert("Please enter a valid address");
                return false;
            }
        }
        //-->
    </script>

</head>

<body>

    <div id="forms">
        <form action="" id="regForm" method="post">
            <fieldset>


                <legend><a href="smartfarm.html"><img src="logo.png" width="250" height="60"></a></legend>
                <br>

                <label>User Name: *</label><input type="text" name="t1" placeholder="eg:Riya." size="50" value=""><br><br>

                <label for="email">Email: *</label>
                <input type="email" id="email" name="email" placeholder="e.g. swapnil@example.com" title="Please enter a valid email" required />
                <BR><BR>

                <br>Date of birth:
                <input type="date" name="bday" max="2018-12-31"><br><br>

                <label for="tel">Mobile: *</label>
                <input type="tel" id="tel" name="tel" placeholder="Enter a ten digit phone No." required maxlength=10 />

                <label>Address: </label><input type="text" name="t2" size="50" value=""><br><br>

                <label for="username">Gender:</label>
                <input id="radio" name="radio" type="radio" valaue="male" checked />Male <input id="radio" name="radio" valaue="female" type="radio" />Female<input id="radio" name="radio" type="radio" valaue="other" />Other

                <input type="checkbox" name="vehicle1" value="check">Select for recent updates<br><br>
                <label for="psw">Password:</label>
                <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <br><br>

                <center>
                    <input type="submit" name="rege" value="Sign up" />
                    <input type="submit" value="Reset" />
                </center>

            </fieldset>
        </form>
    </div>
</body>
<script>
    $('input[type=radio]').click(function(e) {//jQuery works on clicking radio box
        var value = $(this).val(); //Get the clicked checkbox value
        $('.r-text').html(value);
    });
</script>
</html>