@extends('master')
@section('title', 'hello')
@section('content')
    <div class="row">
        <h6>[ </h6>
        @foreach( $account as $key => $item)
            <h6>{
                "Username":"{{$item->Username}}","Password":"{{$item->Password}}", "Salt":{{$item->Salt}},"created_at":{{$item->created_at}},"updated_at":{{$item->updated_at}},"Status":{{$item->Status}} } , </h6>
        @endforeach
        <h6>]</h6>
    </div>

@endsection
