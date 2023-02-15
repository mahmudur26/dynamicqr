@extends('user.layout')
@section('content')
@include('user.header')

<style>
table{
    width: 70% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-top: 50px;
    border: 2px solid black;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
input{
    margin-bottom: 10px;
}
label{
    background-color: white !important;
    color: black !important;
}
</style>

<div class="container">
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
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
                <td><button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#updatePasswordModal">Change Passsword</button></td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</button>
</div>


<!-- Profile Update Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile Detail</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin_update_profile_information')}}" method="post">
                @csrf
                <label for="edit_name" class="form-label">Your Name</label>
                <input class="form-control" name="name" id="edit_name" type="text" value="{{$user->name}}">

                <label for="edit_email" class="form-label">Email address</label>
                <input class="form-control" name="email" id="edit_email" type="email" value="{{$user->email}}">
                
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        </div>
    </div>
    </div>


    <!-- Password Update Modal -->
<div class="modal fade" id="updatePasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Your Password</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin_update_password')}}" method="post">
                @csrf
                <label for="old_password" class="form-label">Old Password</label>
                <input class="form-control" name="old_password" id="old_password" type="password">

                <label for="new_password" class="form-label">New Password</label>
                <input class="form-control" name="new_password" id="new_password" type="password">

                <label for="confirm_password" class="form-label">Confirm New Password</label>
                <input class="form-control" name="confirm_password" id="confirm_password" type="password">

                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Password</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- @include('user.footer') -->
@endsection