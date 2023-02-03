@extends('layouts.main')

@section('container')

<div class="row">
  <div class="mt-5 card text-bg-light col-md-8 justify-content-center">
    <div class="card-body">
      <h1 class="card-title font-bebas">I'm Ade Irmayanti</h1>
      <hr>
      <p class="card-text">
        <h5 class="font-josefin">
          <p>PHP Web Developer who interested in backend programming.</p>
          <p>Has four years of experience in web programming using PHP, Javascript, CSS, Bootstrap and MySQL.</p>
          <p>Able to work under pressure, have analytical thinking, able to work with a team, have good communication skills, master the Microsoft Excel formula and have good adaptability.</p>
          <p>Located in Bandung, West Java, Indonesia</p>
        </h5>
      </p>
      <hr>
      <p class="font-bebas">See More About Me <i class="bi bi-arrow-down"></i></p>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-3">
            <h2><a href="https://www.instagram.com/adeirmayantiefendi/?next=%2F" target="_blank"><i class="bi bi-2x bi-instagram"></i></a></h2>
          </div>
          <div class="col-md-3">
            <h2><a href="https://www.linkedin.com/in/ade-irmayanti-5969a7164/" target="_blank"><i class="bi bi-linkedin"></i></a></h2>
          </div>
          <div class="col-md-3">
            <h2><a href="https://github.com/IrmayantiEfendi" target="_blank"><i class="bi bi-github"></i></a></h2>
          </div>
          <div class="col-md-3">
            <h2><a href="adeirmayantiefendy@gmail.com" target="_blank"><i class="bi bi-envelope-fill"></i></a></h2>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="mt-5 card col-md-4 text-bg-primary justify-content-center" style="max-width: 540px;">
    <center><img src="{{ ('img/Ade Irmayanti.jpg') }}" style="max-width: 200px;"></center>
  </div>
</div>

@endsection