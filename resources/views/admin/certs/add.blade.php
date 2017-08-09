@extends ('layouts.app')

@section ('content')

<form action="" method="post">
    <div class="col-md-8 col-md-offset-2">
        <strong>Ad new gift voucher</strong>
        <hr/>
        
        <table>
            <tr>
                <td>Voucher number:</td>
                <td><input name="vouchernumber" size=8 autofocus></td>
                <td>Amount:</td>
                <td><input name="fromname" size=7></td>
                <td>Expiry:</td>
                <td>
                    <select name="voucherexpirymonth">
                        @for($i = 1; $i <= 12; $i++)
                        <option {{ date('n') == $i ? 'selected'}} value= {{ $i }}>{{ date('M') }}</option>
                        @endfor                        
                    </select>
                    <select name="voucherexpiryyear">
                        <option {{ date('Y') + 1 == 2016 ? 'selected' :''}} value=2016> 2016</option>
                        <option {{ date('Y') + 1 == 2017 ? 'selected' :''}} value=2016> 2017</option>
                        <option {{ date('Y') + 1 == 2017 ? 'selected' :''}} value=2016> 2018</option>
                    </select>
                </td>
                <td> <input type="submit" value="add voucher to database"></td>
            </tr>
        </table>
    </div> <!-- /.col-md-8 -->
</form>
<br/>


@endsection