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
            <td>Account Status</td>
            <td>
                <?php
                if($user->is_deactive == 1)
                    echo "Deactive. (Deactivated On: $user->deactivated_at)";
                else
                    echo "Active";
                ?>
            </td>
        </tr>
        
    </tbody>
    </table>
    <?php 
    if($user->is_deactive == 1)
    {
        $activeButton = '';
        $deactiveButton = 'none';
    }
    else if($user->is_deactive == NULL)
    {
        $activeButton = 'none';
        $deactiveButton = '';
    }else{}
    ?>
    <div class="center" style="display: {{$deactiveButton}};">
        <a href="{{url('/deactivate-user/'.$user->id)}}"><button type="button" class="btn btn-danger">Deactivate This User</button></a>
    </div>

    <div class="center" style="display: {{$activeButton}};">
        <a href="{{url('/reactivate-user/'.$user->id)}}"><button type="button" class="btn btn-success">Reactivate This User</button></a>
    </div>
    </div>

@endsection