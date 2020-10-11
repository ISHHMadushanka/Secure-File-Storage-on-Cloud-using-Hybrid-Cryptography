@extends('welcome')

@section('content')
<div class="wrapper">


 <div class="container">

  @include('/slider')

</div>

<h1>File Split Project</h1>

<p>Latest news has revealed that the security of cryptographic keys have broken when retrieving information from back doors of cryptographic softwares once encryption key is exposed.Therefore, the most securely way to store data is limiting of the access of attackers to the ciphertext.</p>

</div> <!-- wrapper-->
@stop
