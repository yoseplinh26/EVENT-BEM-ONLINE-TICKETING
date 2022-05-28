@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(Auth::user()->roles === "admin")
                <a href="{{route('events.create')}}" @class('btn btn-md btn-success')>Add Event</a>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Seat Quota</th>
                        <th scope="col">Remaining Quota</th>
                        <th scope="col"> End Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <th scope="row">{{$event->event_id}}</th>
                        <td>{{$event->name}}</td>
                        <td>{{$event->quota}} Seats</td>
                        <td>{{$event->tickets->count()}} Seats</td>
                        <td>{{ date('d-M-y', strtotime($event->end_date)) }}</td>
                        <td width="10px">
                            @if($event->tickets->count() === 0 or $event->end_date < Carbon\Carbon::now())
                                <p @class('bg-danger text-white rounded') style="padding: 2px;">
                                    Closed
                                </p>
                            @else
                                    <p @class('bg-success text-white')>
                                        Open
                                    </p>
                            @endif
                        </td>
                        @if(Auth::user()->roles === "admin")
                        <td>
    
                            <form onsubmit="return confirm('Are you sure ?');"
                                  action="{{ route('events.destroy', $event->event_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <a href="{{route('events.ticket', ['event_id'=>$event->event_id])}}" @class('btn btn-sm btn-primary') style="margin-bottom: 10px;">Booking Ticket</a>
                        </td>
                        @endif
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

