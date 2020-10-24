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
        <a href="/"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="/fileupload" class="active"><i class="fas fa-upload"></i><span>File Upload</span></a>
        <a href="/viewfile"><i class="fas fa-file"></i><span>View Files</span></a>
        <a href="/viewsplitdata"><i class="fas fa-database"></i><span>View Split Data</span></a>
        <a href="/viewrequest"><i class="fas fa-eye"></i><span>View Request</span></a>
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
      <a href="/fileupload" class="active"><i class="fas fa-upload"></i><span>File Upload</span></a>
      <a href="/viewfile"><i class="fas fa-file"></i><span>View Files</span></a>
      <a href="viewsplitdata"><i class="fas fa-database"></i><span>View Split Data</span></a>
      <a href="viewrequest"><i class="fas fa-eye"></i><span>View Request</span></a>
      <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="card text-white bg-dark mb-3" style="max-width: 1200px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="/img/hnb.png"  height="325px" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">File Upload</h5>
                  <form action="/store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Owner name</label>
                        <input type="text" class="form-control" name="owner" id="validationDefault01" value="" required>
                      </div>

                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">File Name</label>
                        <input type="text" class="form-control" name="filename" id="validationDefault03" required>
                      </div>
                      <div class="col-md-3 mb-3">

                            <div class="form-group">
                              <label for="exampleFormControlFile1">Example file input</label>
                              <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                            </div>

                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault03">Date</label>
                        <input type="date" class="form-control" name="date" id="validationDefault05" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="checkbox" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                          Agree to terms and conditions
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Upload the file</button>
                  </form>

                </div>
              </div>
            </div>
          </div>


          <br>

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




          <!--  </div>  -->
        </div>
 <!--   </div>  -->
@endsection
