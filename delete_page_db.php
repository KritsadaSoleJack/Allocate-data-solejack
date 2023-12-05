<?php
include 'condb.php';

$ID = mysqli_real_escape_string($condb, $_GET['ID']);

// ดึงค่า ID ที่จะลบ
$sqlGetOrder = "SELECT ID FROM tbl_list WHERE ID = $ID";
$resultGetOrder = mysqli_query($condb, $sqlGetOrder);
$rowGetOrder = mysqli_fetch_assoc($resultGetOrder);
$orderToDelete = $rowGetOrder['ID'];

// ลบข้อมูล
$sqlDelete = "DELETE FROM tbl_list WHERE ID = $ID";
$resultDelete = mysqli_query($condb, $sqlDelete);

if ($resultDelete) {
    // ถ้าการลบสำเร็จ
    // หากมีข้อมูลที่มีลำดับ ID มากกว่าลำดับที่จะลบ
    $sqlUpdateOrder = "UPDATE tbl_list SET ID = ID - 1 WHERE ID > $orderToDelete";
    $resultUpdateOrder = mysqli_query($condb, $sqlUpdateOrder);

    if ($resultUpdateOrder) {
        // ถ้าการอัปเดตลำดับสำเร็จ
        echo "<script type='text/javascript'>";
        echo "alert('Delete and Reorder Successfully!');";
        echo "window.location = 'Show.php';";
        echo "</script>";
    } else {
        // ถ้ามีปัญหาในการอัปเดตลำดับ
        echo "<script type='text/javascript'>";
        echo "alert('Error updating order!');";
        echo "window.location = 'Show.php';";
        echo "</script>";
    }
} else {
    // ถ้ามีปัญหาในการลบข้อมูล
    echo "<script type='text/javascript'>";
    echo "alert('Error deleting data!');";
    echo "window.location = 'Show.php';";
    echo "</script>";
}

mysqli_close($condb);
?>
