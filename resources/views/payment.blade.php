@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>{{$total}} dkk</td>
                </tr>
                <tr>
                    <td>Delivery </td>
                    <td>50 dkk</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+50}} dkk</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/pay_now" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="pwd">Payment Method</label> <br> <br>
                        <input type="radio" value="standard" name="payment"> <span>Standard online payment</span> <br> <br>
                        <input type="radio" value="crypto" name="payment"> <span>Crypto wallet payment</span> <br><br>
                        <input type="radio" value="cash" name="payment"> <span>Pay on delivery</span> <br> <br>

                    </div>
                    <button type="submit" class="btn btn-success">Pay</button>
                </form>
            </div>
        </div>
    </div>
@endsection
