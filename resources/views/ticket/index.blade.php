@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Seat Number</th>
                        <th scope="col">Event</th>
                        <th scope="col">Time</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($ticket as $t)
                        <tr>
                            <td>{{$t->serial_key}}</td>
                            <td>{{$t->seat_number}}</td>
                            <td><b>{{$t->event->name}}</b></td>
                            <td>{{ date('d-M-y', strtotime($t->event->end_date)) }}</td>
                            <td><a href="{{route('events.show', ['event'=>$t->event])}}" @class('btn btn-sm btn-primary') style="margin-bottom: 10px;">View Event</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="main-footer"><center>
            <div class="copyright">
              &copy; Copyright <strong><span>Berkisa Team-09</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
              Designed by <a href="">Berkisa Team</a>
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </footer>
    </div>
@endsection

