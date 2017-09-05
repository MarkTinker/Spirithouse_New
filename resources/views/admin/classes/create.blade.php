@extends ('layouts.app')

@section ('stylesheets')
<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-datepicker/css/datepicker3.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"/>
@endsection

@section ('content')

<form action="{{ route('classes.store') }}" class="col-md-offset-2 col-md-8">
    <div class="form-group col-md-5">
        <label class="control-label" for="classname"> Class to add</label>
        <select class="form-control" name="classid" id="classname">
            @foreach($data['classes'] as $class)
                <option value="{{ $class->classid }}"> {{ $class->classname }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-4">
        <label class="control-label" for="classdate"> Class date</label>                                    
        <div class="input-group">
            <input id ="classdate" class="form-control form-control-inline date-picker" size="16" type="text" name="classdate" value=""/>
            <span class="input-group-addon ">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>
    
    <div class="form-group col-md-3">
        <label class="control-label" for="daynight"> Day or night class</label>
        <select class="form-control" name="daynight" id="daynight">
            <option value=0>Day</option>
            <option value=1>Night</option>
            <option value=2>Wine</option>
            <option value=3>Training</option>
        </select>
    </div>
    
    <div class="form-group col-md-6">
        <label class="control-label" for="starttime"> Start time for class</label>
        <div class="input-group">
            <input type="text" class="form-control timepicker timepicker-no-seconds" name="starttime" id="starttime">
            <span class="input-group-btn">
            <button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
            </span>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label class="control-label" for="maxseats"> Override max seats for this class </label>
        <input type="text" class="form-control" name="maxseats">
    </div>
    <div class="text-center">
        <input class="btn btn-primary" type="submit" name="submit" value="submit">
    </div>
</form>
@endsection

@section ('scripts')

<script type="text/javascript" src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>

<script>
    jQuery(document).ready(function () {
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: false,
                orientation: "left",
                autoclose: true
            });
        }

        if (jQuery().timepicker) {
            $('.timepicker-no-seconds').timepicker({
                autoclose: true,
                minuteStep: 5
            });

            // handle input group button click
            $('.timepicker').parent('.input-group').on('click', '.input-group-btn', function(e){
                e.preventDefault();
                $(this).parent('.input-group').find('.timepicker').timepicker('showWidget');
            });
        }
    });

</script>

@endsection