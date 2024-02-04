@extends('layouts.master')

@section('title')
    New Event
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Create a new event</h4>
        </div>
        <div class="card-body">
            <form action="/save-event" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">TITLE</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">ORGANISER</label>
                  <div class="col-sm-10">
                    <input type="text" name="organiser" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">VENUE</label>
                    <div class="col-sm-10">
                      <input type="text" name="venue" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DESCRIPTION</label>
                    <div class="col-sm-10">
                      <input type="text" name="description" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DATE</label>
                    <div class="col-sm-10">
                      <input type="date" name="date" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">SAVE</button>
              </form>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('scripts')
    
@endsection