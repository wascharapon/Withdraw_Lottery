<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- นำเข้า  CSS จาก Bootstrap -->


    <!-- นำเข้า  CSS จาก dataTables -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <!-- นำเข้า  Javascript จาก  Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- นำเข้า  Javascript  จาก   dataTables -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        //คำสั่ง Jquery เริ่มทำงาน เมื่อ โหลดหน้า Page เสร็จ 
        $(function() {
            //กำหนดให้  Plug-in dataTable ทำงาน ใน ตาราง Html ที่มี id เท่ากับ example
            $('#example').dataTable();
        });

    </script>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->
    <nav class="navbar fixed-top navbar-dark bg-primary text-center">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="material-icons" style="font-size:20px">content_paste</i><label>&nbsp;รายการแจ้งถอน</label></a>
        <a class="navbar-toggler order-first text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </a>
        <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-refresh text-white" aria-hidden="true"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <br><br>
    <div class="d-flex flex-column bd-highlight mb-3 mt-2 text-center">
        <div class="p-2 bd-highlight">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>คิว</th>
                        <th style="width:30%">ใบแจ้ง</th>
                        <th>วันที่</th>
                        <th>สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>w1</td>
                        <td><img class="w-100"
                                src="https://www.matichon.co.th/wp-content/uploads/2020/12/15%E0%B9%80%E0%B8%B1%E0%B8%B2%E0%B9%80.jpg">
                        </td>
                        <td>05/02/2564</td>
                        <td>รอการอนุมัติ</td>
                    </tr>
                    <tr>
                        <td>w1</td>
                        <td><img class="w-100"
                                src="https://www.matichon.co.th/wp-content/uploads/2020/12/15%E0%B9%80%E0%B8%B1%E0%B8%B2%E0%B9%80.jpg">
                        </td>
                        <td>05/02/2564</td>
                        <td>รอการอนุมัติ</td>
                    </tr>
                    <tr>
                        <td>w1</td>
                        <td><img class="w-100"
                                src="https://www.matichon.co.th/wp-content/uploads/2020/12/15%E0%B9%80%E0%B8%B1%E0%B8%B2%E0%B9%80.jpg">
                        </td>
                        <td>05/02/2564</td>
                        <td>รอการอนุมัติ</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <nav class="navbar fixed-bottom navbar-dark bg-primary">
            <div class="container-fluid">
                <button style="width: 100%" button type="button" class="btn btn-secondary btn-lg btn-block "
                    class="btn btn-light "><i class="material-icons" style="vertical-align:middle;font-size: 36px">publish</i>แจ้งถอน</button>
            </div>
        </nav>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>


</body>

</html>
