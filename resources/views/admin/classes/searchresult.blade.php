@extends('layouts.app')

@section('content')

@if($data['field'] =='credits')
<h3 class="text-center"> Searching <i>{{ $data['field'] }}</i> for: {{ $data['find'] }}</h3>

<table>
    <tr>
        <th>ID</th>
        <th>Class date</th>
        <th>Class name</th>
        <th>Attendee</th>
        <th>Credits</th>
    </tr>
    {!! $totalseats = 0 !!}
    @foreach($data['result'] as $row)
    {!! $totalseats += $row->seats !!}
    <tr align="left">
        <td> {{ $row->scheduledate < date('Y-m-d') ? 'old' : 'click>>'}}</td>
        <td> <a href="{{}}">{{ $row->classdate}}</a></td>
        <td> {{ $row->classname }} </td>
        <td> <a href="{{ $row->firstname.' '.$row->lastname }}"></a></td>
        <td>{{ $row->credits }}&nbsp;</td>
    </tr>
    @endforeach
    <tr>
        <td></td>
    </tr>
</table>
@else
<h3 class="text-center"> Searching <i>{{ $data['field'] }} </i> for: {{ $data['find'] }}</h3>
<form method="POST" name="theForm">
{{ csrf_field() }}

<table>
    <tr>
        <th>ID</th>
        <th>Classd date</th>
        <th>Class name</th>
        <th>Attendee</th>
        <th>Email</th>
        <th>Seats taken</th>
        <th>Nametags</th>
        <th>Notes</th>
        <th>Delete</th>
    </tr>
    {!! $totalseats = 0; !!}
    @foreach($data['result'] as $row)
    <tr align="left">
        <td> {{ $row->scheduledate < date('Y-m-d') ? 'old' : 'click>>'}}</td>
        <td> <a href=""> {{ $row->classdate }}</a></td>
        <td> {{ $row->classname }}</td>
        <td> <a href="">{{ $row->firstname.' '.$row->lastname }}</a></td>
        <td> {{ $row->phone.'/'.$row->email }}</td>
        <td> {{ $row->seats }}</td>
        <td> {{ $row->nametags }}</td>
        <td> {{ $row->notes }}</td>
        <td align="center"> <input type="checkbox" value="{{ $row->bookingid }}" name="bookingid[]"></td>
    </tr>
    @endforeach
    <tr>
        <td colspan="5"></td><td>{{ $totalseats }}</td>
        <td></td>
        <td>@nbsp;</td>
        <td><input type="submit" name="submit" value="Delete"</td>
    </tr>
</table>

</form>
@endif
@endsection