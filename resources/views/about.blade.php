@extends('layouts.app-nonav')

@section('content')
<style type="text/css">
  a:hover{color:#972225}
  </style>

<div class="container-fluid">
  <div class="row">
  <div class="col-1">
  <span class="bg-light border border-left-0 border-bottom-0 border-top-0 border-dark"><img class="pt-4" src="{{asset('/img/logo-login.png')}}" alt="">
  <br/>
  </div>
  <div class="col-1">
  <h2 style="font-family:Gotham; color:black; font-size:270%">
    <br><strong>About</strong>
  </h2>
  </div>
  </div>
</div>
    <h4 class="text-justify">
    <a href="http://127.0.0.1:8000" style="color:#972225"><br><br><strong>UMMADIM</strong></a>
        Dirancang bertujuan untuk mempermudah komunikasi antar mahasiswa Universitas 
        Muhammadiyah Malang.<br>Sehingga bisa bertukar informasi dengan lebih baik  dikarenakan 
        beberapa  mahasiswa masih "malu-malu" <br>atau kesulitan dalam berkomunikasi satu sama lain 
        dengan bebas. Juga kami membuat website ini agar mahasiswa bisa mengenal satu sama lain 
        walaupun berbeda fakultas dan jurusan sehingga berteman menjadi lebih mudah.
    </h4>

    <h1 class="text-justify" style="font-family:Mont; color:#000000;
        ;font-size:500%">
       <br><strong>Forum diskusi <br>UMM</strong>
        <hr width="811px" size="10px" color="#972225" align="left">
    </h1>

<div class="container-fluid">
    <div class="row w-50 mx-auto">
        <h4 style="font-family:Gotham; color:#000000" >
            Dengan forum ini seluruh keluarga UMM <br>bisa memiliki tempat untuk <br>saling bertukan pikiran dan informasi 
        </h4>
    </div>
        <h1 class="text-right" style="font-family:Mont; color:#000000;
        ;font-size:500%">
            <br><br><strong>Bagikan<br>ceritamu disini</strong>
        <hr width="811px" size="10px" color="#972225" align="right">
        </h1>

    <div class="row w-50 mx-auto">
        <h4 style="font-family:Gotham; color:#000000" >
        Kalian juga bisa berbagi keseharian kalian <br> dan berinteraksi dengan teman
        </h4>
    </div>

        <h1 class="text-justify" style="font-family:Mont; color:#000000;
        ;font-size:500%">
            <br><br><strong>Informasi ter-update <br>seputar UMM</strong>
        <hr width="811px" size="10px" color="#972225" align="left">
        </h1>

    <div class="row w-50 mx-auto">
        <h4 style="font-family:Gotham; color:#000000" >
        Dengan forum ini seluruh keluarga UMM <br> bisa memiliki tempat untuk saling <br> bertukar pikiran dan informasi
        </h4>
    </div>

        <h1 class="text-right" style="font-family:Mont; color:#000000;
        ;font-size:500%">
            <br><br><strong>Temukan lebih<br>banyak relasi <br> dan teman</strong>
        <hr width="811px" size="10px" color="#972225" align="right">
        </h1>

        <div class="row w-50 mx-auto">
        <h4 style="font-family:Gotham; color:#000000" >
            Temukan relasi untuk mendapatkan pekerjaan <br>dan teman baru dari fakultas berbeda<br> 
        </h4>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid" style="background: rgb(0,0,0); background: linear-gradient(0deg, rgba(40,0,0,1) 0%, rgba(151,34,37,1) 20%, rgba(151,34,37,1) 100%);">
    <div class="row">
        <div class="col-3">
          <h5 style="font-family:Gotham Blackl; color:#FFFFFF"><strong>HELP</strong><br><br><br>Help Center <br>Using Ummadim <br>Account <br>Rules and Policies <br>Contact Us</h5>
          <br/>
        </div>
        <div class="col-3">
          <h5 style="font-family:Gotham Blackl; color:#FFFFFF"><strong>SUPPORT US</strong><br><br><br>infotech.umm.ac.id <br>informatika-2021 <br>@ummadim.umm <br>@labit.umm</h5>
          <br/>
        </div>
        <div class="col-3">
          <h5 style="font-family:Gotham Blackl; color:#FFFFFF"><strong>HOME</strong><br><br><br><a href="http://127.0.0.1:8000/login"style="color:#FFFFFF">LOGIN</a></h5>
        </div>
    </div>
    </div>
@endsection