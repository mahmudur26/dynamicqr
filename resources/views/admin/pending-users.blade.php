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
        <th scope="col">User Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td><a href="{{url('/user-approve/'.$user->id)}}" type="button" class="btn btn-primary btn-sm">Approve</a></td>
            <td><a href="{{url('/user-reject/'.$user->id)}}" type="button" class="btn btn-danger btn-sm">Reject</a></td>
            <td><a href="{{url('/user-detail/'.$user->id)}}" type="button" class="btn btn-warning btn-sm">See Detail</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <div class="center">
        <div class="pagination">
            @for($currentPage = 1 ; $currentPage <= $totalPageCount ; $currentPage++)
                <a href="{{url('/pending-users?page='.$currentPage)}}" class="<?php echo $page==$currentPage ? 'active' : '' ?>">{{$currentPage}}</a>
            @endfor
        </div>
    </div>
</div>

@endsection