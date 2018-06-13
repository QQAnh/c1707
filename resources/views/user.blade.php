@extends('master')
@section('title', 'hello')
@section('content')
    <div class="row">
        <h6>[ </h6>
        @foreach( $user as $key => $item)
            <h6>{
                "Fullname":"{{$item->Fullname}}","Date_of_Birth":"{{$item->Date_of_Birth}}", "Email":{{$item->Email}},"Phone":{{$item->Phone}},"Address":{{$item->Address}}} , </h6>
        @endforeach
        <h6>]</h6>
    </div>

@endsection