@extends ('layouts.app')

@section ('content')

<h3 class="text-center" > View Classes </h3>
<h4 class="text-center"> {{ date("Y-m-d", strtotime("-1 days")) }}</h4>
<div class="row text-center">
    <a href="{{ route('schedule.create') }}">Add Class to Schedule</a> |
    <a href="{{ route('classes.create') }}">Add a New Class</a> |
    <a href="{{ route('classes.showeditlist') }}">Edit Classes</a> |
    <a href="{{ route('classes.searchview') }}">Search Classes</a> |
    <a href="http://www.eway.com.au">eWay Admin</a> |
    <a href="{{ route('booking.save') }}">Save Bookings</a>
</div>
<hr/>

<form action="" method="post" class=" col-md-offset-2 col-md-8">
    {{ csrf_field() }}
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Class Name</th>
            <th>Day/Night</th>
            <th>Seats left</th>
            <th>Bookings</th>
            <th>Add Booking</th>
            <th>Waitlist</th>
            <th>Discount Rate</th>
            <th>Delete</th>
        </tr>
        <?php
            $totalseatsbooked = 0;
            $totalseatsscheduled = 0;
        ?>
        @foreach($data as $class)
        <?php
            if($class->discountclassprice > 0 && $class->discountclassprice > $class->discount_price) $disc_classprice = $class->discountclassprice;
            if($class->discount_price > 0 && $class->discount_price > $class->discountclassprice) $disc_classprice = $class->discount_price;
            if($class->scheduleseats > 0)
            {
          		$maxseats = $class->scheduleseats;
            }
            else
            {
                $maxseats = $class->classseats;
            }

            if($class->discount > 0)
            {
                $standby="<a href='#' onclick='standby_rate(".$class->scheduleid.")'><font color='red'>CXL Standby?</font></a> <small>{$disc_classprice}</small>";
            }
            else
            {
                $standby="<a href='#' onclick='standby_rate(".$class->scheduleid.")'>Standby Rate?</a>";
            }
            $seat_status = $maxseats - $class->bookings." seat(s) left";
            $totalseatsbooked = $totalseatsbooked + $class->bookings;
            $totalseatsscheduled = $totalseatsscheduled + $maxseats;
            if($class->bookings < $maxseats)
            {
                if($class->bookings==0) 
                {
                    $seat_status="Empty";
                }
            } 
            else 
            {
                $seat_status="FULL!";
            }

            if($class->daynight==0) { $daynight="Day"; } else { $daynight="Night"; }

            $makebooking="<a href='https://www.spirithouse.com.au/booking.php?scheduleid=$class->scheduleid' target='_blank'>add booking</a>";
            $waitlist="<a href='http://www.spirithouse.com.au/school-waitlist.php?scheduleid=$class->scheduleid'>w/l</a>";
        ?>
        <tr class="{{ $class->dayname == 'Sunday' || $class->dayname == 'Saturday' ? 'we' : 'bg' }}">
            <input type="hidden" name="action" value="updateseats">
            <input type="hidden" name="scheduleid" value="{{ $class->scheduleid }}">
            <td>{{ $class->date2 }}</td>
            <td {{ $class->scheduleseats > 0 ? 'override' : ''}}> {{ $class->classname }}</td>
            <td class="text-center"> {{ $daynight }}</td>
            <td class="text-center">{{ $seat_status }}</td>
            <td class="text-center"> <a href="viewbooking {{ $class->scheduleid }}"></a>view</td>
            <td>{!! $makebooking !!}</td>
            <td>{!! $waitlist !!}</td>
            <td><span id="standby_{{ $class->scheduleid }}">{!! $standby !!}</span></td>
            <td>
                <a>delete</a>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="9"><a href="addschedule.php"><b>Add class to the schedule</b> </a> - <a href="addclass.php"><b>Add a NEW class</b></a></td>
        </tr>
        <tr>
            <td colspan="9">total places booked:{{ $totalseatsbooked }} out of {{ $totalseatsscheduled }} scheduled places
            {{ round($totalseatsbooked / $totalseatsscheduled * 100, 2) }}
            </td>
        </tr>
    </table>
</form>

@endsection