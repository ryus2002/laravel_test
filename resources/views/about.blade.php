@extends('main')

@section('title', ' | 關於我')

@section('content')
        <div class="container">
            <div class="content">
                <div class="title">About {{$fullname}}</div>
                <p>Email me at {{$email}}</p>
                <p>abc = {{$data['abc']}}, def = {{$data['def']}}</p>
            </div>
        </div>
@endsection

@section('sidebar')

@endsection