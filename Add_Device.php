<?php
include 'condb.php';

// ประกาศตัวแปรรับค่าจากฟอร์ม
$Code_Device = $_POST['Code_Device'];
$Type_Device = $_POST['Type_Device'];
$Room = $_POST['Room'];

// ดึง ID ของข้อมูลล่าสุด
$sqlGetMaxID = "SELECT MAX(ID) AS max_id FROM tbl_list";
$resultGetMaxID = mysqli_query($condb, $sqlGetMaxID);
$rowMaxID = mysqli_fetch_assoc($resultGetMaxID);
$maxID = $rowMaxID['max_id'];

// ถ้าไม่มีข้อมูลในตาราง ให้เริ่ม ID ที่ 1
if ($maxID === null) {
    $maxID = 0;
}

// เพิ่ม 1 เพื่อนำมาใช้เป็น ID ใหม่
$newID = $maxID + 1;

// insert into table
$sql = "INSERT INTO tbl_list (ID, Code_Device, Type_Device, Room)
        VALUES ($newID, '$Code_Device', '$Type_Device', '$Room')";
$result = mysqli_query($condb, $sql) or die("Error in sql : $sql" . mysqli_error($sql));

mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Insert Successfully!');";
    echo "window.location = 'Show.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error!');";
    echo "window.location = 'Show.php';";
    echo "</script>";
}
?>
