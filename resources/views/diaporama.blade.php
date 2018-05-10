@extends('layouts.app')

@section('title', 'Diaporama')

@section('sidebar')
@parent


@endsection

@section('content')
<div class="titrediapo">Diaporama</div>
<div class="carroussel">
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://cdn.rawgit.com/Cphil31/sitepanda/89ee0359/resources/Pictures/adorable-animal-close-up-148182.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.rawgit.com/Cphil31/sitepanda/89ee0359/resources/Pictures/animal-branch-cute-145910.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.rawgit.com/Cphil31/sitepanda/89ee0359/resources/Pictures/animal-cute-doll-815491.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.rawgit.com/Cphil31/sitepanda/89ee0359/resources/Pictures/animals-bear-chicken-59720.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.rawgit.com/Cphil31/sitepanda/89ee0359/resources/Pictures/breakfast-cafe-caffeine-832827.jpg" alt="Third slide">
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection