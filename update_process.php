<?php $conn = mysqli_connect('localhost', 'root', '', 'phpstudy3')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $userid = mysqli_real_escape_string($conn, $_POST['userid']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $sql = "UPDATE club SET department='$department', grade='$grade', name='$name', note='$note' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "
        <script>
            alert('수정 성공');
            location.href = 'main.php?id=$userid';
        </script>";
    }
?>