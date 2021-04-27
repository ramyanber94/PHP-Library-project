<?php
session_start();
include 'databaseCon.php';
if (!empty($_GET['password'])) {
    $_SESSION['Password'] = $_GET['passoward'];
    $_SESSION['Email'] = $_GET['email'];
    $sql = "SELECT passward, Email  FROM customer where passward= '" . $_SESSION['Password'] . "' And Email = '" . $_SESSION['Email'] . "'";

    $result = $conn->query($sql);
    if ($row = mysqli_fetch_array($result)) {
        if (($row['passward'] == $_SESSION['Password']) && ($row['Email'] == $_SESSION['email'])) {
            header("Location: welcomePageLogin.php?Email='" . $_SESSION['email'] . "' ");
        }
        $conn->close();
    } else {
        header("Location: Home.php");
    }
}
