@extends ('layouts.app')

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
        <label class="control-label" for="classdate"> Class date </label>
        {{ $data['rendered_classdate'] }}
    </div>
</form>
@endsection