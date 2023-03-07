@extends('user.frame')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.return_button{
    padding: 5px 10px 5px 10px;
    border: none;
    background-color: #1b4900;
    border-radius: 10px;
    color: white;
    margin-right: 10%;
    margin-top: 5%;
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
canvas{
    width: 700px !important;
    height: 400px !important;
    margin-left: auto;
    margin-right: auto;
}
</style>

<div><canvas id="myChart"></canvas></div>
<table class="table table-hover">
    <thead>
        <th>S/L</th>
        <th>Scanned By(IP)</th>
        <th>Scan Time</th>
    </thead>
    <tbody>
        <?php $counter=0; ?>
        @foreach ($qr_stat as $key => $stat)
        <?php $counter++; ?>
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$stat->user_ip}}</td>
            <td>{{date('d-m-Y H:m:s A', strtotime($stat->created_at))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<?php
if($counter==0)
    $display = '';
else
    $display = 'none';
?>

<p class="no_record_text" style="display: {{$display}};">No Record Available</p>

<a href="{{route('qr-list')}}"><button class="return_button pull-right">Return to QR List</button></a>




<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
    labels: <?php echo $day; ?>,
    datasets: [{
        label: 'Number of Hits',
        data: <?php echo $hit; ?>,
        borderWidth: 1.5,
        backgroundColor: [
            'rgba(255, 99, 132, .5)',
            'rgba(255, 159, 64, .5)',
            'rgba(255, 205, 86, .5)',
            'rgba(75, 192, 192, .5)',
            'rgba(54, 162, 235, .5)',
            'rgba(153, 102, 255, .5)',
            'rgba(3, 252, 73, .5)',
            ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 205, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(3, 252, 73, 1)',
            ],
    }]
    },
    options: {
    title: {
        display: true,
        text: "Last Seven Day Scan Statistics",
        fontSize: 16
    },
    scales: {
        y: {
        beginAtZero: true
        }
    }
    }
});
</script>
@endsection