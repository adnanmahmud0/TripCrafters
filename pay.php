<?php

include "db_conn.php";
session_start();
$tmpname= $_SESSION['user_name'];
$x =0;
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    
?>

<?php include_once('head.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>


        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .checkout-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button1 {
            background-color: #199033;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Checkout</h1>
    </header>

    <div class="checkout-container">
        <form action="process_pay.php" method="post">


        <?php
    if ($tmpname !== false) {
        // Use a prepared statement to avoid SQL injection
        $sql = "SELECT * FROM pay WHERE username = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $tmpname);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo '<label for="name">Username: ' . $tmpname . '</label>';
                    echo '<label for="name">Total Amount: ' . $row["amount"] . 'tk</label>';

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found.</td></tr>";
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Invalid input data";
    }

            
            ?>



            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="card_number">Credit Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiry_date">Expiry Date:</label>
            <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <button class="button1" type="submit">Place Order</button>
        </form>
    </div>

</body>
</html>

<?php include_once('fotter.php');?>
<?php
}else{
        header("Location: login.php");
        exit();
    }
?>