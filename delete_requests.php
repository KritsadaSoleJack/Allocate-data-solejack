<?php
include 'db_connect.php';

// ตรวจสอบว่ามี ID ที่ส่งมาหรือไม่
if (isset($_GET['id'])){
    // ดึงค่า ID ที่จะลบ
    $id = mysqli_real_escape_string($db_connect, $_GET['id']);
    $sqlCheckId = "SELECT id FROM repair_requests WHERE id = ?";
    $stmtCheckId = mysqli_prepare($db_connect, $sqlCheckId);
    mysqli_stmt_bind_param($stmtCheckId, "i", $id);
    mysqli_stmt_execute($stmtCheckId);
    // ลบบรรทัดนี้
    // mysqli_stmt_store_result($stmtCheckId);
    

    if (mysqli_stmt_num_rows($stmtCheckId) > 0) {
        // ลบข้อมูล
        $sqlDelete = "DELETE FROM repair_requests WHERE id = ?";
        $stmtDelete = mysqli_prepare($db_connect, $sqlDelete);
        mysqli_stmt_bind_param($stmtDelete, "i", $id);
        mysqli_stmt_execute($stmtDelete);

        if ($stmtDelete) {
            echo "<script type='text/javascript'>";
            echo "alert('Delete Successfully!');";
            echo "window.location = 'repair_list.php';";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('Error deleting data!');";
            echo "window.location = 'repair_list.php';";
            echo "</script>";
        }
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Error: ID not found!');";
        echo "window.location = 'repair_list.php';";
        echo "</script>";
    }

    mysqli_stmt_close($stmtCheckId);
    mysqli_stmt_close($stmtDelete);
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error: ID not provided!');";
    echo "window.location = 'repair_list.php';";
    echo "</script>";
}
?>
