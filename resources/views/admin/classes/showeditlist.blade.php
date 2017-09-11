@extends ('layouts.app')

@section ('content')



<form class="col-md-4 col-md-offset-4">
    <h3 class="text-center"> Choose a class</h3>

    <div class="row text-center">
        <select name="classid" class="text-center">
            @foreach($data['classes'] as $objClass)
            <option value="{{ $objClass->classid }}"> {{ $objClass->classname }} </option>
            @endforeach
        </select>
        <input type="submit" value="Go >>">
    </div> 

    <br/>

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
</form>

@endsection