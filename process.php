
<?php
include 'databaseCon.php';

if (!empty($_POST['email'])) {
    $_SESSION['Customer_Name'] = $_Post['customer_Name'];
    $_SESSION['Password'] = $_Post['passoward'];
    $_SESSION['Email'] = $_Post['email'];

    $Email = $_POST['Email'];
    $Passoward = $_POST['passoward'];

    $sql = "INSERT INTO customer (Customer_Name, Email, passward) VALUES ('" . $_SESSION['Customer_Name'] . "','" . $_SESSION['Email'] . "','" . $_SESSION['Password'] . "')";
    $conn->query($sql);
    header("Location: Login.php?");
}
$conn->close();

?> 