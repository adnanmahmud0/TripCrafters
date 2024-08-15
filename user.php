<?php
session_start();
include "db_conn.php";

// Check if the user is logged in
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    

$user_name = $_SESSION['user_name'];

// Fetch user data from the database
$sql = "SELECT * FROM users WHERE user_name = '$user_name'";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    // Redirect to an error page or handle the case where the user is not found
    header("Location: error.php");
    exit();
}

$user_data = mysqli_fetch_assoc($result);

// Process form submission for updating user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and update the user's data in the database
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $area = validate($_POST['area']);
    $thana = validate($_POST['thana']);
    $street = validate($_POST['street']);
    $zip = validate($_POST['zip']);
    $districts = validate($_POST['districts']);
    $division = validate($_POST['division']);

    // Update the user data in the database
    $update_sql = "UPDATE users SET name='$name', email='$email', phone='$phone', area='$area', thana='$thana', street='$street', zip='$zip', districts='$districts', division='$division' WHERE user_name='$user_name'";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Update successful
        header("Location: profile.php?success=Profile updated successfully");
        exit();
    } else {
        // Update failed
        header("Location: profile.php?error=Failed to update profile");
        exit();
    }
}

// Validation function
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php include_once('head.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Add any necessary stylesheets or scripts here -->
</head>

<body>

    <h2>Welcome, <?php echo $user_data['name']; ?>!</h2>

    <h3>Edit Profile</h3>

    <?php
    // Display success or error messages if present
    if (isset($_GET['success'])) {
        echo "<p style='color:green;'>" . $_GET['success'] . "</p>";
    } elseif (isset($_GET['error'])) {
        echo "<p style='color:red;'>" . $_GET['error'] . "</p>";
    }
    ?>

    <!-- Display the current user data in a form for editing -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $user_data['name']; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user_data['email']; ?>"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $user_data['phone']; ?>"><br>

        <!-- Add form fields for other user attributes -->

        <input type="submit" value="Update Profile">
    </form>

    <!-- Add a link to navigate back to the home page or any other relevant page -->
    <p><a href="index.php">Back to Home</a></p>

</body>

</html>

<?php include_once('fotter.php');?>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>