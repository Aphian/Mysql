<?php
$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}
echo "연결 성공!";
echo "Hello PHP!";
?>
