@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>cats</h1>
    <ul>
        <li>
            <p>{{$cat-> name}}</p>
            <p>{{$cat-> race}}</p>

        </li>
    </ul>
  </div>
@endsection
