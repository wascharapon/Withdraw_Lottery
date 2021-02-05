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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;400&display=swap" rel="stylesheet">
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
            $('#i_refresh').click(function() {
                $('#i_refresh').addClass('fa-spin');
                setTimeout(function() {
                    $('#i_refresh').removeClass('fa-spin');
                }, 2000);
            });
            $('#example').click(function() {
                $('#close-auto-tab').attr("aria-expanded", "false");
                $('#navbarNavDropdown').removeClass('show');
            })
            $('tr').click(function() {
                
                Swal.fire({
                    title: 'คิวที่ 1',
                    html: '<label>วันที่ทำรายการ<br>05-ก.ค-64</label>' +
                        '<label>สถานะ : รอการอนุมัติ</label>',
                    imageUrl: 'https://unsplash.it/400/200',
                    imageWidth: 650,
                    imageHeight: 230,
                    imageAlt: 'Custom image',
                    footer: '',
                    showCloseButton: true,
                    showConfirmButton: false,
                })

            })
        });
        async function withdraw_confirm() {
              const {
                        value: file
                    } = await Swal.fire({
                title: 'กรุณาเลือกสลิปของท่าน',
                input: 'file',
                inputAttributes: {
                    'accept': 'image/*',
                    'aria-label': 'Upload your profile picture'
                },
                confirmButtonColor: '#28a745',
                confirmButtonText: 'ตกลง',
                showCancelButton: true,
                cancelButtonText: 'ยกเลิก',
                /*
                preConfirm: (value) => {
                    return fetch(`//api.github.com/users/${value}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                     
                }   */
            })
            if (file) {
                        const reader = await new FileReader()
                        reader.onload = (e) => {
                            Swal.fire({
                                html: '<label>วันที่ทำรายการ<br>05-ก.ค-64</label>' +
                                '<label>สถานะ : รอการอนุมัติ</label>',
                                imageUrl: e.target.result,
                                imageAlt: 'The uploaded picture',
                                confirmButtonColor: 'green',
                        confirmButtonText: 'ตกลง',
                            })
                        }
                        reader.readAsDataURL(file)
                    }
        }

    </script>
</head>
<style>
    body {
        overflow-x: hidden;
        font-family: 'Mitr', sans-serif;
    }

    .td_date {
        font-size: 100%;
    }

    td {
        vertical-align: middle;
    }
    input{
        margin-top:4%;
    }
    table{
    }
</style>

<body>

    <!-- Optional JavaScript; choose one of the two! -->
    <nav class="navbar fixed-top navbar-dark bg-primary text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="material-icons" style="vertical-align:middle;"
                    style="font-size:20px">content_paste</i><label>&nbsp;รายการแจ้งถอน</label></a>
            <a id="close-auto-tab" href="#" class="navbar-toggler order-first bt-primary"  data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars mt-1 mb-1 text-white"></i>
            </a>
              <a class="navbar-toggler" data-bs-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i id="i_refresh" class="fa fa-refresh text-white mt-1 mb-1" aria-hidden="true"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">โปรไฟล์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="d-flex flex-column bd-highlight mt-3 mb-3 text-center">
        <div class="p-2 bd-highlight">
            <table id="example" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>คิว</th>
                        <th style="width:30%">สลิป</th>
                        <th>วันที่</th>
                        <th>สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>q50</td>
                        <td><img class="w-100" src="https://unsplash.it/400/200">
                        </td>
                        <td class="td_date">05-ก.ค-64</td>
                        <td class="text-success">สำเร็จ</td>
                    </tr>
                    <tr>
                        <td>q100</td>
                        <td><img class="w-100" src="https://unsplash.it/400/200">
                        </td>
                        <td class="td_date">05-ก.ค-64</td>
                        <td class="text-danger">ไม่สำเร็จ</td>
                    </tr>
                    @for ($i = 1; $i < 2; $i++)
                        <tr>
                            <td>q{{ $i }}</td>
                            <td><img class="w-100" src="https://unsplash.it/400/200">
                            </td>
                            <td class="td_date">05-ก.ค-64</td>
                            <td class="text-warning">รออนุมัติ</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <br><br>
        <nav class="navbar fixed-bottom navbar-dark bg-primary">
            <div class="container-fluid">
                <button style="front-size:120%" type="button" class="btn btn-block text-white"
                    onclick="withdraw_confirm()" class="btn btn-light "><i class="material-icons"
                        style="vertical-align:middle;">publish</i>แจ้งถอน</button>
            </div>
        </nav>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>


</body>

</html>
