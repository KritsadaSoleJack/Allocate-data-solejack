<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $device_code = $_POST['device_code'];
    $device_type = $_POST['device_type'];
    $room = $_POST['room'];

    // ดึง ID ของข้อมูลล่าสุด
    $sqlGetMaxid = "SELECT MAX(id) AS max_id FROM repair_requests";
    $resultGetMaxid = mysqli_query($db_connect, $sqlGetMaxid);
    $rowMaxid = mysqli_fetch_assoc($resultGetMaxid);
    $maxid = $rowMaxid['max_id'];

    // ถ้าไม่มีข้อมูลในตาราง ให้เริ่ม ID ที่ 1
    if ($maxid === null) {
        $maxid = 0;
    }

    // เพิ่ม 1 เพื่อนำมาใช้เป็น ID ใหม่
    $newid = $maxid + 1;
    // ตั้งค่าเริ่มต้นสำหรับ Status
    $status = 'รอดำเนินการ';

    $query = "INSERT INTO repair_requests (id, name, email, issue, device_code, device_type, room, status)
              VALUES ('$newid', '$name', '$email', '$issue','$device_code','$device_type','$room', '$status')";
    $result = mysqli_query($db_connect, $query);

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('Insert Successfully!');";
        echo "window.location = 'repair_list.php';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Error submitting repair request!');";
        echo "window.location = 'repair_list.php';";
        echo "</script>";
    }
}
?>
