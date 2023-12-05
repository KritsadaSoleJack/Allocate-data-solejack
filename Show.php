<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--[endif]-->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #54e8d7;

            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            color: black;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        @media screen and (max-width: 600px) {
            body {
                font-size: 14px;
            }
        }

        
        .table-container {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #4CAF50;
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #94eb65;
        }

        .btn {
            margin: 5px;
        }

        .banner {
            width: 100%;
            max-width: 70%;
            height: auto;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Allocate data</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="Show.php">แสดงข้อมูล</a></li>
      </li>
      <li><a href="Add_page.php">เพิ่มข้อมูล</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<center>
        <img src="banner.png" alt="BANNER" class="center img-responsive">
    </center>            <div class="container table-container">
        <div class="row">
            <div class="col-12 col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <h1><center>แสดงข้อมูล<br></center></h1>
                    <thead>
                        <th>ID</th>
                        <th>รหัสอุปกรณ์</th>
                        <th>ชนิดของอุปกรณ์</th>
                        <th>ห้อง</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        include 'condb.php';
                        $query = "SELECT * FROM tbl_list";
                        $result = mysqli_query($condb, $query) or die("Error in sql : $query" . mysqli_error($query));
                        foreach ($result as $row) { ?>
                            <tr>
                                <td><?php echo $row['ID']; ?> </td>
                                <td><?php echo $row['Code_Device']; ?> </td>
                                <td><?php echo $row['Type_Device']; ?> </td>
                                <td><?php echo $row['Room']; ?> </td>
                                <td>
                                    <a href="edit_page_bt01.php?ID=<?php echo $row['ID']; ?>" class="btn btn-success"
                                        role="button">Edit</a>
                                </td>
                                <td>
                                    <a href="delete_page_db.php?ID=<?php echo $row['ID']; ?>"
                                        class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php mysqli_close($condb) ?>
</body>
</html>