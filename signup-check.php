<?php
session_start();
include "db_conn.php";

if (isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_pass'])
    && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['area']) && isset($_POST['thana'])
    && isset($_POST['street']) && isset($_POST['zip']) && isset($_POST['districts']) && isset($_POST['division'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user_name = validate($_POST['user_name']);
    $password = validate($_POST['password']);
    $re_pass = validate($_POST['re_pass']);
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $area = validate($_POST['area']);
    $thana = validate($_POST['thana']);
    $street = validate($_POST['street']);
    $zip = validate($_POST['zip']);
    $districts = validate($_POST['districts']);
    $division = validate($_POST['division']);

    $user_data = 'user_name=' . $user_name . '&name=' . $name;

    if (empty($user_name) || empty($password) || empty($re_pass) || empty($name) || empty($email) || empty($phone) || empty($area) || empty($thana) || empty($street) || empty($zip) || empty($districts) || empty($division)) {
        header("Location: signup.php?error=All fields are required&$user_data");
        exit();
    } elseif ($password !== $re_pass) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    } else {
        // hashing the password
        $password = md5($password);

        $sql = "SELECT * FROM g_users WHERE user_name='$user_name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken, try another&$user_data");
            exit();
        } else {
            // Assuming you want to insert the additional form data into the database
            $sql2 = "INSERT INTO g_users(user_name, password, name, email, phone, area, thana, street, zip, districts, division) VALUES('$user_name', '$password', '$name', '$email', '$phone', '$area', '$thana', '$street', '$zip', '$districts', '$division')";
            $result2 = mysqli_query($conn, $sql2);

            $sql3 = "INSERT INTO pay (username, amount)
                 VALUES ('$user_name', 0)";
            $result3 = mysqli_query($conn, $sql3);



            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: signup.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
?>
