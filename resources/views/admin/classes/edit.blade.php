@extends ('layouts.app')

@section ('content')



<div class="col-md-4 col-md-offset-4">
    <h3 class="text-center"> Choose a class</h3>

    <div class="row text-center">
        <select id="classid" name="classid" class="text-center">
            @foreach($data['classes'] as $objClass)
            <option value="{{ $objClass->classid }}" {{ $objClass->classid == $data['editclassinfo']['classid'] ? 'selected="selected"' : ''}}> {{ $objClass->classname }} </option>
            @endforeach
        </select>
        <a class="btn" data-url="{{ url('/') }}" id="btn_editclass">Go >></a>
    </div> 

    <br/>
    
    <form action="{{ route('classes.update', $data['editclassinfo']['classid']) }}" method="POST">    
    {{ method_field('PUT') }}
    {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label">Class name</label>
            <input type="text" name="classname" class="form-control" value="{{ $data['editclassinfo']['classname'] }}">
        </div>
        <div class="form-group">
            <label class="control-label">Class description</label>            
            <textarea type="text" name="classdescription" rows=5 cols=40 class="form-control">{{ $data['editclassinfo']['classdescription'] }}</textarea>            
        </div>
        <div class="form-group">
            <label class="control-label">Class price</label>
            <input type="text" name="classprice" class="form-control" value="{{ $data['editclassinfo']['classprice'] }}">
        </div>
        <div class="form-group">
            <label class="control-label">Class seats</label>
            <input type="text" name="classseats" class="form-control" value="{{ $data['editclassinfo']['classseats'] }}">
        </div>
        <input type="hidden" name="classid66" value="{{ $data['editclassinfo']['classid'] }}">
        <div class="text-center">
            <input type="submit" value="update">
        </div>        
    </form>
    <h3 class="text-center">
        Classes In Schedule from: JULY
    </h3>

    <div class="text-center">
        <table style="margin:auto">
            @foreach($data['classinfo'] as $classinfo)        
            <tr>
                <td> {{ $classinfo['classname'] }}</td>
                <td> {{ $classinfo['classcount'] }}</td>
                <td> {{ $classinfo['classid'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>    
</div>

@endsection

@section ('scripts')

<script>
    $(document).ready(function() {
        $('#btn_editclass').on('click', function(e) {
            var url = $('#btn_editclass').data('url')
                        + '/admin/classes/'
                        + $('#classid').val()
                        + '/edit';
            
            window.location.href = url;
        });
    });
</script>

@endsection