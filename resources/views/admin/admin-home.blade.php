<h2>Pending Users</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">View</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>dat{{$user->email}}a</td>
            <td>{{$user->phone}}</td>
            <td>View</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>