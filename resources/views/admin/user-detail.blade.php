@extends('admin.frame')
@section('content')
<style>
table{
    width: 70% !important;
    margin-left: auto;
    margin-right: auto;
}
td{
    min-width: 90px;
    padding-left: 40px !important;
}
.email_status{
    background-color: rgba(75, 0, 130, .2);
    color: rgba(75, 0, 130, 1);
    padding: 5px;
    border-radius: 10px;
}
</style>
<div class="page_title_text">User Detail</div>

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="table-responsive">
    <table class="table table-striped table-sm">
    <tbody>
        <tr>
            <td>Name</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>{{$user->phone}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user->email}}
                <span class="email_status">
                    <?php
                    echo $user->is_active == 1 ? 'Email Activated' : 'Email Not Activated';
                    ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Registered On</td>
            <td>{{$user->registered_on}}</td>
        </tr>
        <tr>
            <td>Account Active by Admin</td>
            <td>
                <?php
                echo $user->is_verified == 1 ? 'Verified' : 'User Not Verified';
                ?>
            </td>
        </tr>
    </tbody>
    </table>
    <div class="center">
        <a href="{{url('/suspend-user/'.$user->id)}}"><button type="button" class="btn btn-danger">Suspend This User</button></a>
    </div>
    </div>

@endsection