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
        <th scope="col">View</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>dat{{$user->email}}a</td>
            <td>{{$user->phone}}</td>
            <td><a href="" type="button" class="btn btn-primary btn-sm">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection