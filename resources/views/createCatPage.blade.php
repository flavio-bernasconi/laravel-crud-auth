@extends('layouts.app')

@section('content')
  <div class="container">
    <form  action="{{ route('storeCat')}}"  method="post" >
      @csrf
      @method('POST')
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Name</label>
          <input type="text" class="form-control" name="name"  placeholder="name">
        </div>
        <div class="form-group col-md-6">
          <label>race</label>
          <input type="text" class="form-control" name="race"  placeholder="race">
        </div>
        <div class="form-group col-md-6">
          <label>cat_rfid</label>
          <input type="text" class="form-control" name="cat_rfid"  placeholder="cat_rfid">
        </div>

      </div>
      <button type="submit" class="btn btn-dark mt-2">Add Post</button>
    </form>

  </div>
@endsection
