@extends('layouts.app')

<div class="contents">
    <span class="navbar-text">
        <h1>Secure File Storage on Cloud Using Hybrid Cryptography</h1>
      </span>
    </div>

@section('content')


    <div class="contain">

        @include('pages/slider')

    </div>


    <div class="wrapper">



        <div class="homeContent clearfix">

            <h1 class="topic">File Split Project</h1>

        <p style="font-size: 1.3vw;">Latest news has revealed that the security of cryptographic keys have broken when retrieving
             information from back doors of cryptographic
             softwares once encryption key is exposed.Therefore, the most securely way to store data is
              limiting of the access of attackers to the ciphertext.</p>


            <div class="home-col">
               <h2>About This</h2>

               <p style="font-size: 1.3vw;">In this secure file storage system which contains stored files securely and when there
                  is an internet connection at any time and in any place, another user can access to the
                  data and files with the permission of the owner. AES, DES, RC2 like algorithms are utilized
                  in this system providing block wise security to the data.
                </p>

                <p style="font-size: 1.3vw;">If some wants to upload or download a file using hybrid cryptography, there is a specific,
                   security mechanism. Hybrid Cryptography uses Encryption and Decryption by utilizing 3 algorithms
                   which are AES, DES and RC2. Using this method any companies, organizations can store data files
                    more securely.  And also, files which the user required to upload on the cloud will be encrypted
                    using above mentioned algorithms with user’s specific key and store safely on the cloud. As well,
                     those data files can be retrieved when the user requests for it. An e mail with a decrypted key
                      is received by the user from the owner when the user requests for it. Using received decrypted key,
                       required file can be retrieved by the user more securely.
                </p>

                <p style="font-size: 1.3vw;">The stored file is totally secured, as the file is being encrypted not just using one but three encryption
                   algorithms (AES, DES, RC6). As well, the system is also secure and robust in nature. Data kept secured
                   on cloud server avoiding unauthorized access. However, it requires an active internet connection to
                   connect with Azure cloud server.
                 </p>


            </div> <!--home-col-->

            <div class="home-col">
               <h2>Know More...!</h2>

               <img src="img/abb.jpg" alt="Know More" height="150px" width="250px" class="images"> <br><br>

               <div class="pros-text">
                <p style="font-size: 1.3vw;">This encryption file trasfer system is the only way to send  someone's secure files to another party with a 100% more securely .</p>


                <a href="https://nevonprojects.com/secure-file-storage-on-cloud-using-hybrid-cryptography/">Read More >>></a>

                </div> <!--pros-text-->

            </div> <!--home-col-->
          </div> <!--homeContent-->

        </div> <!-- wrapper-->


@endsection


