<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>

<?php
    $userid = mysqli_real_escape_string($conn, $_POST['joinid']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $userpw = mysqli_real_escape_string($conn, $_POST['joinpw']);

    $sql = "INSERT INTO user (userid, name, userpw) VALUES ('$userid', '$name', '$userpw')";
    mysqli_query($conn, $sql);
?>