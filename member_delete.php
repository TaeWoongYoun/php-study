<?php $conn = mysqli_connect('localhost', 'root', '1234', 'phpstudy3')?>

<?php
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM user WHERE id = $id";
    mysqli_query($conn, $sql);
?>

<script>
    alert("회원삭제 성공");
    location.href = 'main.php?id=admin'
</script>