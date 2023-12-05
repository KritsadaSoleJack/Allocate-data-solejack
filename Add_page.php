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
    </center>
    <table>
      <center>
        <div class="container">
          <div class="row ustify-content-center">
            <div class="row">
            </div>
            <center>
              <h1>ฟอร์มเพิ่มข้อมูล<h1>
            </center>

            <form action="Add_Device.php" method="post" class="form-horizontal">
              <div class="form-group">
                <label for="inputCode_Device" class="<col-md-15> control-label">
                  <h3>
                    <center>รหัสอุปกรณ์</center>
                  </h3>
                </label>
                <div class="<col-md-12>">
                  <input required type="text" name="Code_Device" class="form-control" id="inputCode_Device"
                    placeholder="รหัสอุปกรณ์">
                </div>
              </div>



              <div class="form-group">
                <h3> <label for="inputType_Device">ชนิดอุปกรณ์</label></h3>

                <select required name="Type_Device" id="Type_Device" class="form-control">
                  <option value="" selected disabled>ชนิดอุปกรณ์</option>
                  <option value="เมาส์(Mouse)">เมาส์(Mouse)</option>
                  <option value="จอแสดงผล(Monitor)">จอแสดงผล(Monitor)</option>
                  <option value="คีย์บอร์ด(Keyboard)">คีย์บอร์ด(Keyboard)</option>
                  <option value="คอมพิวเตอร์(Computer)">คอมพิวเตอร์(Computer)</option>
                </select>




                <div class="form-group">
                  <h3> <label for="inputRoom">ห้อง</label></h3>

                  <select required name="Room" id="Room" class="form-control">
                    <option value="" selected disabled>ห้อง</option>
                    <option value="Com1">Com1</option>
                    <option value="Com2">Com2</option>
                    <option value="Com3">Com3</option>
                    <option value="Com4">Com4</option>
                  </select>


                </div>
              </div>

              <br>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                  <button class="btn btn-success" type="submit" class="btn btn-default">SAVE</button>
                </div>
              </div>
              <br>
            </form>
          </div>
        </div>
        </div>

    </table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
      </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
      integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
      </script>
  </body>

</html>