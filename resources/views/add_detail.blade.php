@extends('master.user')
@section('title', 'เพิ่มข้อมูลผู้ใช้งาน')
@section('content')
    <style>
        input {
            margin-top: 0%;
        }
    </style>
  <script>
    $(function() {
      $( "#submit_form_data" ).click(function() {
  $( "#form_data" ).submit();
});
});
  </script>
    <nav class="navbar fixed-top navbar-dark bg-primary text-center">
        <a class="navbar-brand" href="#"><i class="fa fa-user"
                style="vertical-align:text-bottom;font-size:160%; "></i><label>&nbsp;ข้อมูลผู้ใช้</label></a>
        <a class="navbar-toggler order-first text-white" aria-label="Toggle navigation">
        </a>
        <a class="navbar-toggler"> </a>
        </div>
    </nav>
    <br><br>
  
    <div class="d-flex flex-column bd-highlight  mt-3 text-center">
        <div class="p-2 bd-highlight">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <form id="form_data" action="add_detail_active" method="get">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" aria-label="First name" class="form-control" placeholder="ชื่อ">
                            <input type="text" aria-label="Last name" class="form-control" placeholder="นามสกุล">
                        </div>
                        <div class="input-group mt-3">
                          <span class="input-group-text bg-primary text-white"><i class="fa fa-phone" aria-hidden="true"></i></span>
                          <input type="text" aria-label="First name" class="form-control" placeholder="เบอร์โทรศัพท์">
                      </div>
                        <div class="input-group mt-3">
                          <label class="input-group-text  bg-primary text-white" for="inputGroupSelect01">ธนาคาร</label>
                          <select class="form-select" id="inputGroupSelect01">
                            <option selected>กรุงไทย</option>
                            <option value="1">ทหารไทย</option>
                            <option value="2">SCB</option>
                            <option value="3">ออมสิน</option>
                          </select>
                        </div>
                        <div class="input-group mt-3">
                          <span class="input-group-text bg-primary text-white"><i class="fa fa-key" aria-hidden="true"></i></span>
                          <input type="text" aria-label="First name" class="form-control" placeholder="บัญชีเลขที่">
                      </div>
                      <label class="text-danger mt-1" style="font-size: 80%">ไม่ต้องใส่เครื่องหมาย - <br> ตัวอย่าง 315-x-xxxx-1 เป็น 315xxxxx1</label>
                    </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar fixed-bottom navbar-dark bg-primary">
        <div class="container-fluid">
            <a type="button" class="btn btn-block text-white" id="submit_form_data"
                class="btn btn-light "><i class="fa fa-user-plus"
                    style="vertical-align:text-bottom;font-size:160%; "></i><label
                    style="vertical-align:top;">&nbsp;เพิ่มข้อมูล </label></a>
        </div>
    </nav>
@endsection
