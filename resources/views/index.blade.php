@extends('welcome')

@section('content')
    <div class="main_info">{{$info}}</div>
    <div class="data-table">
        <div class="data-row">
            <div class="data-head">Имя</div>
            <div class="data-head">Телефон</div>
        </div>
        <div class="data-row">
            @foreach ($clients as $client)
                <div class="data-head">{{$client->name}}</div>
                <div class="data-head">{{$client->phone}}</div>
            @endforeach
        </div>
    </div>
@endsection