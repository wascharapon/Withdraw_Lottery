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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
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

            $('td').click(function() {

                Swal.fire({
                    title: 'คิวที่ 1',
                    html: '<label>วันที่ทำรายการ<br>05-ก.ค-64<br>สถานะ : รอการอนุมัติ</label>',

                    imageUrl: 'https://unsplash.it/400/200',
                    imageWidth: 650,
                    imageHeight: 230,
                    imageAlt: 'Custom image',
                    footer: '',
                    showCloseButton: true,
                    showConfirmButton: false,

                })
            })
            $('#menu_contect_line').click(function() {
                Swal.fire({
                    title: '',
                    html: '<label>หากท่านต้องการติดต่อผู้ให้บริการคลิกที่ลิ้งด้านล่าง หรือ สแกน QR-Code</label>',
                    imageUrl: 'https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.15752-9/145617723_179386857297316_6683483733813544784_n.jpg?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=eadSCAPtDegAX9iaB1j&_nc_ht=scontent.fkkc3-1.fna&oh=c6bbed43d8bff805f621f9ee3918ad3b&oe=60443143',
                    imageWidth: 650,
                    imageHeight: 250,
                    imageAlt: 'Custom image',
                    footer: '<a class="text-danger" href=http://line.me/ti/g/lpZRkjtHLI>แจ้งปัญหา</a>',
                    showCloseButton: true,
                    showConfirmButton: false,
                })
                $('#navbarNavDropdown').removeClass('show');
            })
            $('#menu_profile').click(function() {
                Swal.fire({
                    title: '',
                    html: '<label>หากท่านต้องการติดต่อผู้ให้บริการคลิกที่ลิ้งด้านล่าง หรือ สแกน QR-Code</label>',
                    imageUrl: 'https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.15752-9/145617723_179386857297316_6683483733813544784_n.jpg?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=eadSCAPtDegAX9iaB1j&_nc_ht=scontent.fkkc3-1.fna&oh=c6bbed43d8bff805f621f9ee3918ad3b&oe=60443143',
                    imageWidth: 650,
                    imageHeight: 230,
                    imageAlt: 'Custom image',
                    footer: '<a class="text-danger" href=http://line.me/ti/g/lpZRkjtHLI>แจ้งปัญหา</a>',
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
                        html: '<label>วันที่ทำรายการ<br>05-ก.ค-64</label><br><label>สถานะ : รอการอนุมัติ</label>',
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

    input {
        margin-top: 4%;
    }

    table {}

</style>

<body>

    @yield('content')




</body>

</html>
