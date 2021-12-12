@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-detail" src="{{$products['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2>{{$products['name']}}</h2>
                <h3>Price: {{$products['price']}}</h3>
                <h4>Category: {{$products['category']}}</h4>
                <h4>Description: {{$products['description']}}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$products['id']}}>
                    <button class="btn btn-success">Add to Cart</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
@endsection
