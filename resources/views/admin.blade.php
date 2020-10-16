@extends('layouts.auth')

@section('content')
<div class="container">
 <!-- <div class="row justify-content-center">  -->
       <!-- <div class="col-md-8"> -->
           <br>

                <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">SecureFileTransfer</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <ul class="navbar-nav px-3">
                  <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ url('/logout') }}">Log out</a>
                  </li>
                </ul>
              </nav>


              <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">ADMIN Dashboard</h1>

                </div>

               <div class="container">
                ddd
               </div>

            </main>


              <div class="container-fluid">
                <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active" href="/">
                                <span data-feather="home"></span>
                                Home <span class="sr-only">(current)</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                File Upload
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="view"></span>
                                View Files
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <span data-feather="split"></span>
                               View Split Data
                              </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                  <span data-feather="request"></span>
                                 View Request
                                </a>
                              </li>

                          </ul>
                      </div>

                  </nav>
                  </div>
                  </div>






           <!-- </div>  -->
       <!-- </div>   -->
    </div>
@endsection
