@extends('layouts.app')

@section('title','Trains')

@section('content')
    <main>
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-12 col-md-3">
                <div class="card">

                    <p>stazione di partenza:</p>{{$train->start_station}}<br>
                    <p>stazione di arrivo:</p>{{$train->arrival_station}}<br>
                    <p>orario partenza:</p>{{$train->departure_time}}<br>
                    <p>orario arrivo:</p>{{$train->arrival_time}}<br>
                </div>
            </div>
            @endforeach
        </div>

    </main>
@endsection
