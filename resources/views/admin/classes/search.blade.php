@extends ('layouts.app')

@section('content')

<h3 class="text-center"> Search </h3>

<form action="{{ route('classes.search') }}" method="POST"  name="search" class="col-md-4 col-md-offset-4">
    {{ csrf_field() }}
    @if(isset($data))
    <h2> Result Exists</h2>
    @endif
    <div class="row text-center">
        Search for: <input type="text" name="find"> in 
        <select name="field">
            <option value="firstname">First Name</option>
            <option value="lastname">Lirst Name</option>
            <option value="notes">Notes</option>
            <option value="credits">Credits</option>
        </select>
    </div>
    <br>
    <hr/>
    <div class="text-center">
        <input type="submit" value="Search">
    </div>
</form>
@endsection