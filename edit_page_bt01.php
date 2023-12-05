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

        .table th,
        .table td {
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
    <?php
    include 'condb.php';
    //ไอดีที่ส่งมา
    $ID = $_GET['ID'];
    //echo $ID;
    $query = "SELECT * FROM tbl_list WHERE ID=$ID";
    $result = mysqli_query($condb, $query) or die
        ("Error in sql : $query" . mysqli_error($query));
    $row = mysqli_fetch_array($result);

    //print_r($row);
    ?>

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
    </center>
    <table>
        <center>
            <div class="container">
                <div class="row ustify-content-center">
                    <div class="row">
                    </div>
                    <center>
                        <h1>Edit Page</h1>
                        <form action="edit_page_db.php" method="post">
                            <div class="form-group">
                                <label for="inputID" class="<col-md-8> control-label">
                                    <center>ID</center>
                                </label>
                                <div class="<col-md-12>">
                                    <input type="number" name="ID" class="form-control"
                                        value="<?php echo $row['ID']; ?>" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputCode_Device" class="<col-md-8> control-label">
                                    <center>Code Device</center>
                                </label>
                                <div class="<col-md-12>">
                                    <input type="text" name="Code_Device" class="form-control" require
                                        value="<?php echo $row['Code_Device']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputType_Device" class="<col-md-8> control-label">
                                    <center>Type Device</center>
                                </label>
                                <div class="<col-md-12>">
                                    <select required name="Type_Device" id="Room" class="form-control">
                                        <option value="" selected disabled>ชนิดอุปกรณ์</option>
                                        <option value="เมาส์(Mouse)">เมาส์(Mouse)</option>
                                        <option value="จอแสดงผล(Monitor)">จอแสดงผล(Monitor)</option>
                                        <option value="คีย์บอร์ด(Keyboard)">คีย์บอร์ด(Keyboard)</option>
                                        <option value="คอมพิวเตอร์(Computer)">คอมพิวเตอร์(Computer)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputRoom" class="<col-md-8> control-label">
                                    <center>Room</center>
                                </label>
                                <div class="<col-md-12>">
                                    <select required name="Room" id="Room" class="form-control">
                                        <option value="" selected disabled>ห้อง</option>
                                        <option value="Com1">Com1</option>
                                        <option value="Com2">Com2</option>
                                        <option value="Com3">Com3</option>
                                        <option value="Com4">Com4</option>
                                    </select>
                                </div>
                            </div>
                            <center>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-12">
                                    </div>
                                    <button class="btn btn-success" type="submit" class="btn btn-default">SAVE</button>
                                </div>
                        </form>
                    </CENTER>
    </table>
</body>

</html>