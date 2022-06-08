@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="collection">
                <h2>Items in your cart:</h2>
                <br> <br>
                @foreach($products as $item)
                    <div class=" row searched-item cart">
                        <div class="col-sm-2">
                            <a href="detail/{{$item->id}}">
                                <img class="img-collection" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h3>{{$item->name}}</h3>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/remove_from_cart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-offset-6">
                <a class="btn btn-success" href="proceed_to_payment">Proceed to payment</a> <br> <br>
            </div>
            <br> <br>
        </div>
    </div>
@endsection
