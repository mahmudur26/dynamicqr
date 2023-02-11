@extends('admin.frame')
@section('content')

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
    <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</button>
</div>


<!-- Modal -->
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
                <input class="form-control" id="edit_name" type="text" value="{{$user->name}}">

                <label for="edit_email" class="form-label">Email address</label>
                <input class="form-control" id="edit_email" type="email" value="{{$user->email}}">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



@endsection