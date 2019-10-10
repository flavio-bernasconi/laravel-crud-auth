@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>cats</h1>
    <ul class="list-group ">
      @foreach ($cats as $cat)
        <li class="list-group-item d-flex justify-content-between">
          <a href="{{ route('showCat', $cat -> id)}}">
            <p>{{$cat-> name}}</p>
          </a>
          <a href="{{ route('deleteCat',$cat -> id)}}">Delete</a>
          <a href="{{ route('editCat',$cat -> id)}}">Edit</a>
        </li>
      @endforeach
        <a href="{{ route('createCat')}}" class="mt-5">Add new Cat</a>

    </ul>
  </div>
@endsection
