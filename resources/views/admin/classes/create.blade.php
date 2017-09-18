@extends ('layouts.app')

@section ('content')

<h3 class="text-center"> Add class</h3>

<form method="POST" action="{{ route('classes.store') }}" class="col-md-4 col-md-offset-4">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label" for="classname">Class name</label>
        <input id="classname" class="form-control" name="classname">
    </div>
    <div class="form-group">
        <label class="class-label" for="classdecription">Class decription</label>
        <input id="classdescription" class="form-control" name="classdescription">
    </div>
    <div class="form-group">
        <label class="class-label" for="classprce">Class price</label>
        <input id="classprice" class="form-control" name="classprice">
    </div>
    <div class="form-group">
        <label class="class-label" for="classseats">Class seats</label>
        <input id="classseats" class="form-control" name="classseats">
    </div>

    <div class="text-center">
        <input type="submit" name="submit" value="submit">
    </div>    
</form>
@endsection