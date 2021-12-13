@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="collection">
                <h2>Your order history:</h2>
                @foreach ($orders as $item)
                    <div class="row searched-item cart-devide">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="img-collection" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>Delivery status: {{$item->status}}</h5>
                                <h5>Payment status: {{$item->payment_status}}</h5>
                                <h5>Payment method: {{$item->payment_method}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
