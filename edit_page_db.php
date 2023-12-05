<?php
include 'condb.php';

$original_ID = $_POST['ID']; // เก็บ ID ต้นฉบับ
$Code_Device = $_POST['Code_Device'];
$Type_Device = $_POST['Type_Device'];
$Room = $_POST['Room'];

// อัปเดตข้อมูลทั้งหมด
$sql = "UPDATE tbl_list SET 
        Code_Device='$Code_Device',
        Type_Device='$Type_Device',
        Room='$Room'
        WHERE ID = $original_ID";

$result = mysqli_query($condb, $sql) or die("Error in sql : $sql" . mysqli_error($sql));

// เพิ่มคำสั่ง SQL UPDATE เพื่ออัปเดตข้อมูลที่ไม่ถูกลบ
$sqlUpdateRemaining = "UPDATE tbl_list SET Room='อัปเดตค่าที่ต้องการ' WHERE ID != $original_ID";
$resultUpdateRemaining = mysqli_query($condb, $sqlUpdateRemaining) or die("Error in sql : $sqlUpdateRemaining" . mysqli_error($sqlUpdateRemaining));

mysqli_close($condb);

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Successfully!');";
    echo "window.location = 'Show.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error!');";
    echo "window.location = 'Show.php';";
    echo "</script>";
}
?>
