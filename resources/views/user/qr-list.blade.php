@extends('user.frame')
@section('content')
<style>
.view_button{
    width: 80px;
    height: 25px;
    border: none;
    background-color: rgb(0, 100, 0);
    border-radius: 10px;
    color: white;
}
table{
    margin-top: 30px;
}

.table tr:hover{
    background-color: rgb(160, 241, 160);
    transition: .3s ease-in-out;
}
tr, th{
    text-align: center;
}
</style>

<table class="table table-hover">
    <thead>
        <th>S/L</th>
        <th>Link</th>
        <th>Random Code</th>
        <th>Dynamic Link</th>
        <th>Created On</th>
        <th>Hit Count</th>
        <th>View Detail</th>
    </thead>
    <tbody>
        @foreach ($qrs as $key => $qr)
        <tr>
            <td>{{$key}}</td>
            <td>{{$qr->input_text}}</td>
            <td>{{$qr->random_code}}</td>
            <td>{{$qr->dynamic_link}}</td>
            <td>{{$qr->created_at}}</td>
            <td>000</td>
            <td><a href="{{url('/qr-preview/'.$qr->id)}}"><button class="view_button">View</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection