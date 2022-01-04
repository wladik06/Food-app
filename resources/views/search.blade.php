@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-4">
            <div class="collection">
                <h3>Search results: </h3>
                @foreach($products as $item)
                    <div>
                        <a href="detail/{{$item['id']}}">
                            <img class="img-detail" src="{{$item['gallery']}}">
                            <div>
                                <h3>{{$item['name']}}</h3>
                            </div>
                        </a>
                        <h5>{{$item['description']}}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
