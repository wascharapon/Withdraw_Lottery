@extends('master.user')
@section('title', 'ระบบสมาชิก')
@section('content')
    <nav class="navbar fixed-top navbar-dark bg-primary text-center">
        <a class="navbar-brand" href="#"><label>&nbsp;</label></a>
        </div>
    </nav>
    <br><br>
    <div class="d-flex flex-column bd-highlight  mt-2 text-center">
        <div class="p-2 bd-highlight">
          <div class="container">
            <div class="row">
              <div class="col-sm ">
                <img style="height:87%" src="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.15752-9/146880363_170870791204215_8525313891368435197_n.jpg?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_ohc=v3dNtyI1F_oAX9A5yKF&_nc_ht=scontent.fkkc3-1.fna&oh=d8559dc1576e21af543e69d0c7bec953&oe=6046CB89" class="d-block w-100 rounded border border-4" >
              </div>
              <div class="col-sm">

              
              </div>
            </div>
          </div>
     
        </div>
      </div>
   
        <nav class="navbar fixed-bottom navbar-dark bg-primary">
            <div class="container-fluid">
                <a  type="button" class="btn btn-block text-white"
                    href="{{ route('login_facebook') }}" class="btn btn-light "><i class="fa fa-facebook-square"
                        style="vertical-align:text-bottom;font-size:160%; "></i><label
                        style="vertical-align:top;">&nbsp;เข้าสู่ระบบ </label></a>
            </div>
        </nav>
    @endsection
