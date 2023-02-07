@extends('admin.frame')
@section('content')
<style>
.alert{
    text-align: center;
    width: 60%;
    margin: 0 auto;
}
</style>

<h2>Pending Users</h2>
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
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>dat{{$user->email}}a</td>
            <td>{{$user->phone}}</td>
            <td><a href="{{url('/user-approve/'.$user->id)}}" type="button" class="btn btn-primary btn-sm">Approve</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection