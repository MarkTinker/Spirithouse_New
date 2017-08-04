@extends('layouts.main')

@section('title', ': Restaurant & Cooking School - Online Shop')

@section('pagetitle')
<h1>Spirit House Shop</h1>
@endsection

@section('pagedescription')
<p>Buy recipes books and kitchen products online, delivered to your door.</p>
@endsection

@section('content')

<div class="row">
    <p class="info"></p>
</div>
<div class="row">
    <div class="col-md-4">
        <h2>Shopping Cart</h4>        
    </div>
    <div class="col-md-8">
    @foreach($data['shop_item'] as $key => $item)

        @if($key % 3 == 0)
        <div class="row">
        @endif
            <div class="col-md-4">
                <form name="theForm{{ $key }}" method="post" class="jcart jcartitem">
                    <fieldset>
                        <input type="hidden" name="itemID" value="{{ $item->itemId }}">
                        <input type="hidden" name="itemPrice" value="{{ $item->itemPrice }}">
                        <input type="hidden" name="itemName" value="{{ $item->itemName }}">
                        <input type="hidden" name="itemWeight" value="{{ $item->itemWeight }}">
                        <ul>
                            <li class="pic"> <img src="{{ url('images/products/'.$item->itemPic) }}"></li>
                            <li><h2>{{ $item->itemName }}</h2></li>
                            <li class="desc">{!! $item->itemDesc !!}</li>
                            <li class="price">{{ number_format($item->itemPrice, 2) }}</li>
                            <li class="addtocart">
                                <label>
                                    Qty:
                                    <input type="text" name="itemQty" value="1" size="3">
                                </label>
                                <input type="submit" name="my-add-button" value="Add to Cart" class="button">
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div><!-- /.col-md-4 -->
        @if(($key % 3 == 2) || ($key == count($data['shop_item'])))
        </div>
        @endif
    @endforeach
    </div> <!-- /.col-md-8 -->
</div> <!-- /.row -->

@endsection