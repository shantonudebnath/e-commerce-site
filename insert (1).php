<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['zila']) && isset($_POST['email']) &&
        isset($_POST['thana']) && isset($_POST['address']) && isset($_POST['payment']) && isset($_POST['quantity'])) {
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $zila = $_POST['zila'];
        $thana = $_POST['thana'];
        $address = $_POST['address'];
        $payment = $_POST['payment'];
        $txrid = $_POST['txrid'];
        $quantity=$_POST['quantity'];
        
        $host = "localhost";
        $dbUsername = "id18359592_echobook";
        $dbPassword = "Echo1@@@@@@@";
        $dbName = "id18359592_bookorder";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM book WHERE email ='$email'";
            $Insert = "INSERT INTO book(name,phone,email,zila,thana,address,payment,txrid,quantity) values('$name', '$phone', '$email', '$zila', '$thana','$address','$payment','$txrid','$quantity')";
error_reporting(0);
          $stmt = $conn->prepare($Select);
           $stmt->bind_param("s", $email);
            $stmt->execute();
           $stmt->bind_result($email);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            error_reporting(0);
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sissssssi",$name, $phone, $email, $zila, $thana,$address,$payment,$txrid,$quantity);
                if ($stmt->execute()) {
                    header('Location: http://scholarshipbd.online/congo');
                    //echo "New record inserted sucessfully.";
                }
                
            }
            else {
                header('Location: http://scholarshipbd.online/fail');
               // echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>