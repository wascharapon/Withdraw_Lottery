@extends('master.user')
@section('title','Withdraw')
@section('content')
 <!-- Optional JavaScript; choose one of the two! -->
 <nav class="navbar fixed-top navbar-dark bg-primary text-center">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="material-icons"
                style="font-size:20px">content_paste</i><label>&nbsp;รายการแจ้งถอน</label></a>
        <a id="close-auto-tab" class="navbar-toggler order-first text-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </a>
        <a class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <i id="i_refresh" class="fa fa-refresh text-white" aria-hidden="true"></i>
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
                    <a class="nav-link" href="{{ route('logout') }}">ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br><br>
<div class="d-flex flex-column bd-highlight mb-3 mt-2 text-center">
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
@endsection