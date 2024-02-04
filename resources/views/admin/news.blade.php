@extends('layouts.master')

@section('title')
    New Newz
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add a new news</h4>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
        </div>
        <div class="card-body">
            <form action="/save-news" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">TITLE</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">CONTENT</label>
                  <div class="col-sm-10">
                    <input type="text" name="content" class="form-control" id="inputPassword3">
                  </div>
                </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DATE</label>
                    <div class="col-sm-10">
                      <input type="date" name="occurance" class="form-control" id="inputPassword3">
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