<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Room Booking </title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/public/timepicker/jquery.timepicker.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="/public/timepicker/jquery.timepicker.min.js"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });

        $('#basicExample').timepicker();


    </script>

</head>
<body>

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

</body>
</html>