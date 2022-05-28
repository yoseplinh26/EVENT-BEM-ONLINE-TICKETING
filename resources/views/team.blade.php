@extends('layouts.app')

@section('content')
    <style>
     
    .our-team {
        padding: 50px 0px;
        background-color: #f9f9f9;
    }
    .our-team h2{
      margin-bottom: 40px;
    }
    .our-team a:hover{
      color: #333;
    }
    .client-img {
        width: 90px;
        height: 100px;
        overflow: hidden;
        margin: 0 auto;
        border-radius: 70%;
        border: 1px solid #607D8B;
        padding: 5px;
    }
    .box-bg {
        background-color: #fff;
        padding: 20px 20px;
        border: 2px solid #e2e2e2;
        border-top-left-radius: 40px;
        border-bottom-right-radius: 40px;
        position: relative;
        margin: 15px 0px;
        overflow: hidden;
    }
    .details {
        padding: 10px 0px;
    }
    .details h4 {
        color: #607D8B;
    }
    .details h6 {
        color: #9E9E9E;
    }
    .details p {
        color: #777777;
        line-height: 20px;
        padding-top: 7px;
    }
    .details a {
        margin: 0 auto;
        font-size: 16px;
        color: #607D8B;
        text-decoration: none;
        font-weight: 500;
        display: table;
        margin-top: 20px;
    }
    .social-links {
        width: 100%;
        position: absolute;
        top: -200px;
        left: 0px;
        background-color: rgba(0, 0, 0, 0.6);
        height: 50%;
        padding: 30px 0px;
        transition: 1s;
    }
    .box-bg:hover .social-links{
      top: 0px;
    }
    .social-links ul {
        padding: 0px;
        margin: 0px;
    }
    .social-links ul li {
        list-style: none;
        float: left;
        width: 20%;
    }
    .social-links ul li a {
        text-align: center;
        display: block;
        background-color: #e6e6e6;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        line-height: 40px;
        color: #607D8B;
        margin: 0 auto;
    }
    .social-links ul li a:hover {
        font-size: 20px;
    }
    .social-links h4{
      color: #fff;
      padding-bottom: 15px;
    }
    #header {
  background: #fff;
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
  top: 40px;
  box-shadow: 0px 2px 15px rgba(25, 119, 204, 0.1);
}
#header.header-scrolled {
  top: 0;
}
#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 0.5px;
  font-family: "Poppins", sans-serif;
}
#header .logo a {
  color: #2c4964;
}
#header .logo img {
  max-height: 40px;
}

/**
* Appointment Button *
*/
.appointment-btn {
  margin-left: 25px;
  background: #1977cc;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
}
.appointment-btn:hover {
  background: #166ab5;
  color: #fff;
}
@media (max-width: 768px) {
  .appointment-btn {
    margin: 0 15px 0 0;
    padding: 6px 18px;
  }
}

  </style>
           <div class="team">
        
   <center> <img src="{{asset('img/teamm.png')}}" width="350px" height="250px"></center>
    <h2>Let's get closer to Berkisa's Team</h2>
     <div>
                <div class="container">
                <section id="hero" class="d-flex align-items-center">
               
</div>
  </section><!-- End Hero -->
  <main id="main">
<body>
<div class="our-team">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Amanda-removebg-preview.png')}}"class="img-fluid">
        
          </div>
          <div class="details">
            <h4 class="text-center">Amanda Simbolon</h4>
            <h6 class="text-center">11321055 </h6>
            <p class="text-center">D3 Teknologi Informasi</p>
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            
              <li><a href="whatsapp://send?text=Hello&phone=+6282167148170"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/amandaa.zip/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/amanda5bln"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Ester-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Ester Sinaga</h4>
            <h6 class="text-center">11321054</h6>
            <p class="text-center">D3 Teknologi Informasi</p>
           
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6285260617206"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/ester_sinaga_/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.instagram.com/ester_sinaga_/"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Albert-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Albert Aritonang </h4>
            <h6 class="text-center">11321031</h6>
            <p class="text-center">D3 Teknologi Informasi</p>
            
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="https://www.facebook.com/alberth.rafael.71"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6287899570216"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/albeerthhh/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://telegram.org/dl"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Yosevyn-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Yosevyn Sipahutar</h4>
            <h6 class="text-center">11321022 </h6>
            <p class="text-center"> D3 Teknologi Informasi</p>
           
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="https://www.facebook.com/yosevyn.sipahutar.3"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6282219676608"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/yosevyn_sipahutar/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/Yosevyn_sipahutar"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Fransiska-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Fransiska Simanungkalit</h4>
            <h6 class="text-center">11321005 </h6>
            <p class="text-center">D3 Teknologi Informasi</p>
            
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="https://www.facebook.com/fransiska.simanungkalit.9"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6285314770301"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/sizskaa/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/FransiskaSimanungkalit"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box-bg">
          <div class="client-img">
          <img src="{{asset('img/Yoseplin-removebg-preview.png')}}"class="img-fluid">
          </div>
          <div class="details">
            <h4 class="text-center">Yoseplin Hutauruk </h4>
            <h6 class="text-center">11321017</h6>
            <p class="text-center">D3 Teknologi Informasi</p>
            
          </div>
          <div class="social-links">
            <h4 class="text-center">Follow Me</h4>
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              
              <li><a href="whatsapp://send?text=Hello&phone=+6283189693525"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/yoseplin_/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://t.me/hahahahhahahaaaa22"><i class="fab fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection