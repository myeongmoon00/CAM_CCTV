<?php
$conn = mysqli_connect("127.0.0.1", "root", "001202","cctv_login");

if($conn -> connect_errno){
    echo '[연결 실패..] : '.$connect -> connect_error.'';
}
else{
    echo '[연결성공 !]'.'<br>';
}
?>