@extends('admin.frame')
@section('content')

<div class="page_title_text">Pending Users</div>

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="table-responsive">
    <table class="table table-striped table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Approve</th>
        <th scope="col">Reject</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>dat{{$user->email}}a</td>
            <td>{{$user->phone}}</td>
            <td><a href="{{url('/user-approve/'.$user->id)}}" type="button" class="btn btn-primary btn-sm">Approve</a></td>
            <td><a href="{{url('/user-reject/'.$user->id)}}" type="button" class="btn btn-danger btn-sm">Reject</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection