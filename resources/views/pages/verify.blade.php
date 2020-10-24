@extends('layouts.auth')

@section('content')
<!-- <div class="container"> -->
 <div class="row justify-content-center">
       <!-- <div class="col-md-8">  -->
           <br>

  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>USER <span>Dashboard</span></h3>
      </div>
      <div class="right_area">
        <a href="{{ url('/logout') }}" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="/img/1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="/"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="/viewfiles"><i class="fas fa-file"></i><span>View Files</span></a>
        <a href="/verify" class="active"><i class="fas fa-database"></i><span>Verify</span></a>
        <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="/img/1.png" class="profile_image" alt="">
        <h4><b>Jessica</b></h4>
      </div>
      <a href="/"><i class="fas fa-home"></i><span>HOME</span></a>
      <a href="viewfiles"><i class="fas fa-file"></i><span>View Files</span></a>
      <a href="/verify" class="active"><i class="fas fa-database"></i><span>Verify</span></a>
      <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
     <br>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">File Name</th>
                <th scope="col">Owner</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
                @isset($fileuploads)

              <tr>
                <th></th>
                <td></td>
                <td></td>
              </tr>

              @endisset
            </tbody>
          </table>


        </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>



          <!--  </div>  -->
        </div>
 <!--   </div>  -->
@endsection
