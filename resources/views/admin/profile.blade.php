@extends('admin.frame')
@section('content')

<style>
table{
    width: 70% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-top: 50px;
    border: 5px solid black;
}
</style>

<div class="container">
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td><button type="button" class="btn btn-sm btn-secondary">Change Passsword</button></td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-success pull-right">Edit Profile</button>
</div>

@endsection