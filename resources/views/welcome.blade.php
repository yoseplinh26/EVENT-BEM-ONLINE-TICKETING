@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/dashboard.css')}} " />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <style>
      
      </style>
</head>
<body>
    <div class="container-2">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="jumbotron" style="background-image: url({{asset('img/desain.jpeg')}})";>
                            <div class="container" >
                                <h4 class="display-4">Online BEM Ticketing</h4>
                            
                            </div>
                        </div>
                        <div class="desc"><br><br>
                          <h1>Apa yah tujuan diadakannya Event BEM di IT DEL?</h1>
                          <p>Tujuan diadakannya event yang ada di IT DEL adalah untuk menjalin mepererat hubungan sesama
                           mahasiswa dikampus <br> kita Institut Teknologi Del. Melalui landasan yang selalu kita terapkan yaitu 
                           3M MarTuhan, MarRoha, MarBisuk <br>sehingga pentingnya  bagi mahasiwa dikampus dan diasrama tetap 
                           menjalin hubungan yang erat dan tali persahabatan yang kuat  dengan pertemanan yang kuat akan 
                           relasi yang baik pula ke depan. Baik hubungan yang erat antara senior maupun junior dikampus.
                           Selain mempererat keakraban sesama mahasiswa event ini juga membantu meningkatkan bakat <br>
                           yang dimiliki oleh mahasiswa dan melatih kepercayaan diri. 
                         </p>
<<<<<<< HEAD
                    </div>
                    <div class="container-2">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                    
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" weight="500px" width="350px">
                          <div class="item active">
                            <img src="{{asset('img/fesbud.jpeg')}}" alt="Festival Budaya" style="width:100%;">
                          </div>
                    
                          <div class="item">
                            <img src="{{asset('img/pentas.jpeg')}}" alt="Pentas Budaya" style="width:100%;">
                          </div>
                        
                          <div class="item">
                            <img src="{{asset('img/podcast.png')}}" alt="Festival Budaya" style="width:100%;">
                          </div>
                          <div class="item">
                            <img src="{{asset('img/MUSIC CORNER.png')}}" alt="Music Corner" style="width:100%;">
                          </div>
                          <div class="item">
                            <img src="{{asset('img/KOPI SORE.png')}}" alt="Kopi Sore" style="width:100%;">
                          </div>
                        </div>
                    </div>
=======
>>>>>>> b47a319c57621ea530f1be3a9ae92d6719a22feb
                    </div>
                    <div id="slider">

</div>

<section id="features">
                <div class="container">
                    <header>
                        <h2>Let's Check <strong>What's in Event BEM</strong>!</h2>
                    </header>
                    <div class="row aln-center">
                        <div class="col-4 col-6-medium col-12-small">

                            <!-- Feature -->
                                <section>
                                    <a href="#" class="image featured"><img src="{{asset('img/KOPI SORE.png')}}"></a>
                                    <header>
                                        <h3>KOPI SORE</h3>
                                    </header>
                                    <p>This is  Sesuai dengan namanya pada festival ini mahasiswa akan menikmati 
                                      minuman hangat sambil berkumpul bersama sesama mahasiswa.
                                </section>

                        </div>
                        <div class="col-4 col-6-medium col-12-small">

                            <!-- Feature -->
                                <section>
                                    <a href="#" class="image featured"><img src="{{asset('img/Festival Musik EDM.png')}}"></a>
                                    <header>
                                        <h3>Festival Budaya</h3>
                                    </header>
                                    <p> Festival budaya ini juga sangat seru dan menarik juga dimana banyak kegiatan yang diadakan seperti bazaar, 
                                      penampilan tor-tor batak, penampilan tari tari dari beberapa budaya</p>
                                </section>

                        </div>
                        <div class="col-4 col-6-medium col-12-small">

                            <!-- Feature -->
                                <section>
                                    <a href="#" class="image featured"><img src="{{asset('img/Pentas budaya.png')}}"></a>
                                    <header>
                                        <h3>Pentas Budaya</h3>
                                    </header>
                                    <p>Pentas budaya ini juga 
                                      tak kalah menarik juga, pada festival yang diselenggarakan ini terdapat acara Bazaar, fashion show, pameran, 
                                      dan pertunjukan music diselenggarakan oleh mahasiwa It Del</p>
                                
                                   
                                      <a href="#" class="image featured"><img src="{{asset('img/Music festival.png')}}"></a>
                                   <section>
                                      <header>
                                        <h3>Music Corner</h3>
                                    </header>
                                    <p>Music corner dilaksanakan sesuai dengan namanya yaitu “Corner” yang dilaksanakan di corner yang ada di kampus It Del.
                                       Pada kegiatan ini setiap mahasiswa dapat menampilkan setiap bakat yang dimiliki. </p>
                                       </section>
                                    <div class="fitur"><img src="{{asset('img/Podcast.png')}}"></a>
                                    
                                        <h3>Podcast</h3>
                                    
                                    <p>Podcast ini dilakukan oleh anggota panitia depsendub yang biasanya
                                       event ini akan membahas mengenai depertemen seni dan budaya BEM yang ada di Institut Teknologi DEL.</p>
</div>
</div>
</div>
</body>
<hr>
<footer class="main-footer"><center>
              <div class="copyright">
                &copy; Copyright <strong><span>Berkisa Team-09</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                   Designed by <a href="">Berkisa Team</a>
              </div>
            </div>
          
@endsection
