@extends('layouts.app')

<div class="contents">
    <span class="navbar-text">
        <h1>Secure File Storage on Cloud Using Hybrid Cryptography</h1>
      </span>
    </div>

@section('content')

<div class="card text-white bg-dark mb-3" style="max-width: 1240px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="/img/nnn.png" height="300px"  class="card-img" alt="..." style="margin-top: 90px; margin-left: 10px;">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">About This</h5>
          <p class="card-text">In this secure file storage system which contains stored files securely and when there
            is an internet connection at any time and in any place, another user can access to the
            data and files with the permission of the owner. AES, DES, RC2 like algorithms are utilized
            in this system providing block wise security to the data.
            <br> <br>  If some wants to upload or download a file using hybrid cryptography, there is a specific,
            security mechanism. Hybrid Cryptography uses Encryption and Decryption by utilizing 3 algorithms
            which are AES, DES and RC2. Using this method any companies, organizations can store data files
             more securely.  And also, files which the user required to upload on the cloud will be encrypted
             using above mentioned algorithms with user’s specific key and store safely on the cloud. As well,
              those data files can be retrieved when the user requests for it. An e mail with a decrypted key
               is received by the user from the owner when the user requests for it. Using received decrypted key,
                required file can be retrieved by the user more securely.
                <br> <br>The stored file is totally secured, as the file is being encrypted not just using one but three encryption
            algorithms (AES, DES, RC6). As well, the system is also secure and robust in nature. Data kept secured
            on cloud server avoiding unauthorized access. However, it requires an active internet connection to
            connect with Azure cloud server.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

@endsection
