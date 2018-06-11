@extends('master')
@section('title', 'hello')
@section('content')
    <div class="row">
        <h6>[ </h6>
        @foreach( $product as $key => $item)
            <h6>{
                "Title":"{{$item->Title}}","Image_Product":"{{$item->Image_Product}}", "Price":{{$item->Price}},"Description":{{$item->Description}},"Category":{{$item->Category}} } , </h6>
        @endforeach
        <h6>]</h6>
    </div>

@endsection