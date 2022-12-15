@extends('layouts.app')

@section('content')
    <section>
        <h2>COMICS</h2>
        <div class="container">
            <div class="row row-cols-6">

                @foreach ($data as $item)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                            <p>{{ $item['title'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
