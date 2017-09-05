@extends ('layouts.app')

@section ('stylesheets')

@endsection

@section ('content')

<form action="{{ route('classes.store') }}" class="col-md-offset-3 col-md-6">
    <div class="form-group">
        <label class="control-label" for="classname"> Class to add</label>
        <select class="form-control" name="classid" id="classname">
            @foreach($data['classes'] as $class)
                <option value="{{ $class->classid }}"> {{ $class->classname }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="control-label" for="classdate"> Class date</label>                                    
        <div class="input-group">
            <input id ="classdate" class="form-control form-control-inline date-picker" size="16" type="text" name="classdate" value=""/>
            <span class="input-group-addon ">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>    
</form>
@endsection

@section ('scripts')

<script type="text/javascript" src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

<script>
    jQuery(document).ready(function () {
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: false,
                orientation: "left",
                autoclose: true
            });
        }
    });

</script>

@endsection