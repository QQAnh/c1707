<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($product as $key => $item)
    <div class="card col-md-3">
    <div class="card-deck">
    <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg"
    alt="Card image cap">
    <a href="#!">
    <div class="mask rgba-white-slight"></div>
    </a>
    </div>
    <div class="card-body">
    <h4 class="card-title"> {{$item->title}}</h4>
    <p class="card-text">{{$item->description}}</p>
    <p class="card-text">{{$item->price}}</p>
    <button type="button" class="btn btn-primary btn-md">Read more</button>
    </div>
    </div>
    </div>
@endforeach

</body>
</html>