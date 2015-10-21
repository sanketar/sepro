@extends('app')

@section('content')

        <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-6 text-left">
                <h1>Welcome {{$hname->username}}</h1>
                <p class="lead">This is a Room Booking Portal. :)</p>
                <h3>Your Previous bookings are: </h3>
                <table border="2" style= "background-color: #B0B0B0 ; color: #282828 ; margin: 1 auto;" >
            <tr>
                <td >Room number</td>
                <td >Purpose</td>
                <td >Scheduled on</td>
                <td >Duration</td>
            </tr>
            @foreach($user_earlier_booked as $result)
            <tr>
                 <td> {{$result->room_no}} </td>
                 <td> {{$result->purpose}} </td> 
                <td>{{$result->starttime}}</td>
                <td> {{$result->duration}} </td>
                
            </tr>
            @endforeach
        </table>
            </div>
            <div class="col-lg-6 text-left">
                <h1><a href="/roombook">Make a new Booking</a> </h1>
                
                {!! Form::open(array('url' => 'roombook_action')) !!}
                <div class="container">
                    <div class="row">
                        <div class='col-sm-6'>
                            <div class="form-group">
                                <select name="room_no">
                                    <option value="sic-201">sic-201</option>
                                    <option value="sic-205">sic-205</option>
                                    <option value="sic-205">sic-204</option>
                                </select>
                                <p>Date: <input type="text" id="datepicker"></p>
                                <p>Start Time :</p><p><input name="starttime" id="basicExample" type="text" class="time" /></p>
                                <p>End Time :</p><div class='input-group date' id='datetimepicker3'>
                                    <input name="endtime" type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker3').datetimepicker({
                                    format: 'LT'
                                });
                            });
                        </script>
                    </div>
                </div>
                <p>Event name :</p>

                <p>{!! Form::text('purpose') !!}</p>

                <p>{!! Form::submit('Submit') !!}</p>
                {!! Form::close() !!}
                <p class="lead"></p>
            </div>
            <h3>Rooms already booked for your reference</h3>
      <table border="2" style= "background-color: #B0B0B0 ; color: #282828 ; margin: 1 auto;" >
            <tr>
                <td >Room number</td>
                <td >Purpose</td>
                <td >Scheduled on</td>
                <td >Duration</td>
            </tr>
            @foreach($all_booked_rooms as $result)
            <tr>
                 <td> {{$result->room_no}} </td>
                 <td> {{$result->purpose}} </td> 
                <td>{{$result->starttime}}</td>
                <td> {{$result->duration}} </td>
                
            </tr>
            @endforeach
        </table>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container --></h1>


@endsection