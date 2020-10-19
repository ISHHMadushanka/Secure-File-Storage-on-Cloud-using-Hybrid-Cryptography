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
        <div class="card mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/img/xxx.jpg"  height="250px" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">File Split Project</h5>
                  <p class="card-text">Latest news has revealed that the security of cryptographic keys have broken when retrieving
                    information from back doors of cryptographic
                    softwares once encryption key is exposed.Therefore, the most securely way to store data is
                     limiting of the access of attackers to the ciphertext. </p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>


          <br> <br>

          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">About This</h5>
                  <p class="card-text">
                    In this secure file storage system which contains stored files securely and when there
                    is an internet connection at any time and in any place, another user can access to the
                    data and files with the permission of the owner. AES, DES, RC2 like algorithms are utilized
                    in this system providing block wise security to the data.

                    <br>



                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Know More...!</h5>
                  <p class="card-text">This encryption file trasfer system is the only way to send  someone's secure files to another party with a 100% more securely .</p>
                  <a href="https://nevonprojects.com/secure-file-storage-on-cloud-using-hybrid-cryptography/" class="btn btn-primary">Read More >>></a>
                </div>
              </div>
            </div>
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
