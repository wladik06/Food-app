@extends('master')
@section("content")
    <div class="custom-product">
        <div class="unfinished">
            <h1>! Page under construction !</h1>
        </div>
        <img class="img-constr" src="https://thsti.res.in/writereaddata/under-construction_3.png">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>{{$total}} dkk</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>10 dkk</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+10}} dkk</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
