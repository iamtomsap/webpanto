@extends('layout/main') 
    
@section('title','Panto Kabuka Langgeng')

@section('container')
  <div class="container">
      <div class="col-10">
          <!-- <div >
              <h1 class="mt-3" >We are Panto Kabuka Langgeng</h1>
          </div> -->
      </div>
      <div id="carouselExampleCaptions" class="carousel slide mt-1" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/cc_kobelco_crawler_crane_7250_2.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Crawler Crane</h5>
                    <p>Kobelco 7250</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/rtc_kato_kr_50h.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Rough Terrain Crane</h5>
                    <p>KATO KR-50H.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/crawler_cranes_ka3000.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Crawler Crane</h5>
                    <p>KATO KA3000</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
  </div>
  
@endsection