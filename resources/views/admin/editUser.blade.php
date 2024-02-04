@extends('layouts.master')

@section('title')
    Edit roles
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit role</h1>    
                </div> 
                <div class="card-body">
                    <form action="/user_update/{{$user->id}}" method="POST">
                        {{ csrf_field() }} 
                        {{-- to protect the field --}}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" value="{{ $user->name}}" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label>Give role</label>
                            <select name="usertype" class="form-control">
                                <option value="admin">admin</option>
                                <option value="warden">warden</option>      
                                <option value="hostelite">hostelite</option>    
                                <option value="">NONE!</option> 
                            </select>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/dashboard" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
@endsection