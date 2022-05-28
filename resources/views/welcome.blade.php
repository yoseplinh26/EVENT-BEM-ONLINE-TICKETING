@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="jumbotron" style="background-image: url({{asset('img/desain.jpeg')}})";>
                            <div class="container" >
                                <h1 class="display-4">Event BEM</h1>
                                <p class="lead">Welcome To Website Online BEM Ticketing</p>
                                <p>Let's Check It!</p>   
                            </div>
                        </div>
                        <div class="desc"><br><br>
                          <h1>Apa yah tujuan diadakannya Event BEM di IT DEL?</h1>
                          <p>Tujuan diadakannya event yang ada di IT DEL adalah untuk menjalin mepererat hubungan sesama <p>
                           mahasiswa dikampus kita Institut Teknologi Del. Melalui landasan yang selalu kita terapkan yaitu <p>
                           3M MarTuhan, MarRoha, MarBisuk sehingga pentingnya  bagi mahasiwa dikampus dan diasrama tetap <p>
                           menjalin hubungan yang erat dan tali persahabatan yang kuat dengan pertemanan yang kuat akan <p>
                           relasi yang baik pula ke depan. Baik hubungan yang erat antara senior maupun junior dikampus.<p>
                           Selain mempererat keakraban sesama mahasiswa event ini juga membantu meningkatkan bakat <p>
                           yang dimiliki oleh mahasiswa dan melatih kepercayaan diri. 
                         </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
