@extends('layouts.master')

@section('title')
    Users
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Users </h4>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <TH>NAME</TH>
                <TH>PHONE</TH>
                <TH>USER TYPE</TH>
                <TH>EMAIL</TH>
                <th>EDIT</th>
                <th>DELETE</th>
              </thead>  
              <tbody>
                @foreach($user as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->usertype}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                      <a href="/role-edit/{{$data->id}}" class="btn btn-success">EDIT</a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    
@endsection