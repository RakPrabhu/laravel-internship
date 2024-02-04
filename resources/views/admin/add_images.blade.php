<!-- resources/views/admin/add_images.blade.php -->

{{-- @extends('layouts.admin') --}}
@extends('layouts.master')

@section('title')
    Edit roles
@endsection

{{-- @section('content') --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add Images for Event: {{ $event->title }}</h2>
                </div>

        <form action="/update-images/{{$event->id}}" method="post" enctype="multipart/form-data" class="mt-3">
            @csrf

            <div class="mb-3">
                <label for="main_picture" class="form-label">Main Picture:</label>
                <input type="file" name="main_picture" class="form-control" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="additional_pictures" class="form-label">Additional Pictures:</label>
                <input type="file" name="additional_pictures[]" class="form-control" accept="image/*" multiple>
            </div>

            <button type="submit" class="btn btn-primary">Upload Images</button>
        </form>
    </div>
        </div>
    </div>
</div>

@endsection
