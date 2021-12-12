<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UCN Laravel Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>

<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>

<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    .img-slider {
        height: 400px !important;
    }
    .custom-product {
        height: 600px;
    }
    .text-slider {
        background-color: #4a5568 !important;
    }
    .img-collection {
        height: 100px;
    }
    .item-collection {
        float: left;
        width: 20%;
    }
    .collection {
        margin: 30px;
    }
    .img-detail {
        height: 200px;
    }
    .cart-devide {
        margin: 20px;
        padding: 20px;
    }
    .unfinished {
        text-align: center;
        margin-bottom: 10px;
        padding: 30px;
    }
    .img-constr {
        height: 200px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 100px;
    }
    .footer {
        text-align: center;
    }
    .coll-name {
        margin-bottom: 80px;
    }
</style>
</html>
