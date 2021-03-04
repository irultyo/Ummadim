@extends('layouts.app-nonav')

@section('content')

<nav class="navbar navbar-expand-sm bg-light navbar-light">
<img class="mx-auto d-block" src="{{asset('/img/Ummadim-Original.png')}}" width="200px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/about" >About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">Help</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="col" style="background-image:url(img/Kita.png); background-size:cover; height: 967px;">
        <br><br><br><br><br><img class="ml-auto d-block"src="{{asset('/img/Logo UMM.png')}}" width="200px">
    <h1 class="text-light"style="font-family:Mont; font-size:450%">
       <strong><br>Bagikan<br>ceritamu<br>disini <br></strong><br><a href="http://127.0.0.1:8000/login" style="color:white"><button class="btn btn-danger">Login</button></a>
    </h1>

    </div>

    <h2 style="font-family:Gotham; color:#972225" class="text-center">
      <br>Apa itu <strong>UMMADIM?</strong> 
      </h2>
      <h4 style="font-family:Gotham" class="text-center"><strong>UMMADIM</strong> adalah Forum Mahasiswa Universitas Muhammadiyah Malang <br>yang dimanfaatkan untuk dapat berdikusi dengan bebas. Informasi tentang kehidupan <br>Kampus, relasi pertemanan maupun pekerjaan pun disediakan di forum ini. <br><br>Yuk, join sekarang!
      <br><br><br><br><br>
      </h4>
      
  <div class="container-fluid">


        <div class="row" style="background-image:url(img/field.jpg); width: 1224px; height: 400px;">
          <div class="col-4">
          <h2 style="font-family:Gotham Black; color:#FFFFFF"><br><strong>Bagikan Ceritamu Disini</strong><br></h2>
          <h4 style="font-family:Gotham; color:#FFFFFF">Dengan forum ini seluruh keluarga UMM bisa memiliki tempat untuk saling bertukar pikiran dan informasi</h4><br>
          <button class="btn btn-dark">More</button>
          <br/>
          </div>
          <div class="col-4">
          <h2 style="font-family:Gotham Black; color:#FFFFFF"><br><strong>Info Terupdate UMM</strong><br></h2>
          <h4 style="font-family:Gotham; color:#FFFFFF">Yuk Jelajahi info-info ter-update dan valid seputar kampus UMM. Jangan lupa update keseruan kalian juga ya!</h4><br>
          <button class="btn btn-dark">More</button>
          <br/>
          </div>
          <div>
          <h2 style="font-family:Gotham Black; color:#FFFFFF"><br><strong>Temukan Relasi</strong><br></h2>
          <h4 style="font-family:Gotham; color:#FFFFFF">Temukan lebih banyak teman atau relasi <br>untuk saling bertukar informasi disini</h4><br><br>
          <button class="btn btn-dark">More</button>
          <br/>
        </div>
    </div>
  </div>
    <br><img class="mx-auto d-block" src="{{asset('/img/Db.png')}}"width="700px">

    <h2 style="font-family:Gotham; color:#000000;" class="text-center">
      <br><br><br><strong>OUR TEAM</strong><br>
    </h2>
    <h4 style="font-family:Gotham; color:#000000;" class="text-center">
      Tiga Mahasiswa Teknik Informatika Universitas Muhammadiyah Malang membuat website ini dengan tujuan <br>
      untuk mempermudah komunikasi antar mahasiswa universitas muhammadiyah malang sehingga bisa bertukar <br>
      informasi dengan lebih baik <br><br>
    </h4>  

    <div class="container-fluid">

      <div class="row">
        <div class="col-4">
        <img class="mx-auto d-block" src="{{asset('/img/Niko.jpg')}}" width="250px">
          <h5 style="font-family:Gotham; color:#000000;"class="ml-5 pl-3">
            <br><br><strong>Niko</strong> Silabest <br><br>@niko_silabest
          </h5>
          <br/>
        </div> 
        <div class="col-4">
        <img class="mx-auto d-block" src="{{asset('/img/Choirul.jpg')}}" width="250px">
          <h5 style="font-family:Gotham; color:#000000;"class="ml-5 pl-3">
            <br><br><strong>Choirul</strong> Septyono <br><br>@lurioyt.77
          </h5>
          <br/>
        </div>
        <div class="col-4">
        <img class="mx-auto d-block" src="{{asset('/img/Evina.jpg')}}" width="250px">
          <h5 style="font-family:Gotham; color:#000000;"class="ml-5 pl-3">
            <br><br>Nur<strong> Evina</strong> Maknun <br><br>@nurevina_
          </h5>
          <br/>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background: rgb(0,0,0); background: linear-gradient(0deg, rgba(40,0,0,1) 0%, rgba(151,34,37,1) 20%, rgba(151,34,37,1) 100%);">
      <div class="row">
        <div class="col-2">
           <h6 style="font-family:Gotham; color:#FFFFFF" ><br><br><br><br><br><br><br><br><br><br><br><br><br> @ummadim.umm</h6>
           </br/>
        </div>
        <div class="col-2">
          <h6 style="font-family:Gotham; color:#FFFFFF"><br><br><br><br><br><br><br><br><br><br><br><br><br> infotech.umm.ac.id</h6>
          <br/>
        </div>
        <div class="col-2">
          <h6 style="font-family:Gotham; color:#FFFFFF"><br><br><br><br><br><br><br><br><br><br><br><br><br> @labit.umm</h6>
          <br/>
        </div>
        <div class="col-3">
          <h5 style="font-family:Gotham Blackl; color:#FFFFFF"><strong>HELP</strong><br><br><br>Help Center <br>Using Ummadim <br>Account <br>Rules and Policies <br>Contact Us</h5>
          <br/>
        </div>
        <div class="col-3">
          <h5 style="font-family:Gotham Blackl; color:#FFFFFF"><strong>SUPPORT US</strong><br><br><br>Dukungan kalian merupakan motivasi bagi kami untuk terus berkarya serta memberikan pelayanan berupa pembaharuan web yang jauh lebih baik lagi kedepannya.
          <br/>
        </div>
      </div>
    </div>

@endsectiongit 