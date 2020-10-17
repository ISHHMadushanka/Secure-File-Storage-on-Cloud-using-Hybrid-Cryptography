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
        <h3>ADMIN <span>Dashboard</span></h3>
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
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="/img/1.png" class="profile_image" alt="">
        <h4><b>Jessica</b></h4>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem saepe consequuntur placeat,
          quasi quo possimus praesentium
           qui suscipit quis reiciendis esse. Nemo, placeat distinctio? Ipsum alias corporis aut sit culpa.</p>
      </div>
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
