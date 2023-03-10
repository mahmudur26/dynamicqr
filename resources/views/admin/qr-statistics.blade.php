@extends('admin.frame')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin-top: 15px;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: rgba(3, 192, 60, .2);
  /* background-color: #f8f8f8; */
  border: 1px solid rgba(3, 192, 60, .6);
  padding: .35em;
  transition: .3s;
}

tbody tr:hover {
  background-color: rgba(3, 192, 60, 1);
  cursor: pointer;
}

tbody tr td:nth-child(1)
{
    text-align: left !important;
}

table th,
table td {
  padding: .325em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
canvas{
    margin-top: 20px;
    margin-bottom: 30px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
</style>
<div class="row">
    <div class="col-md-8">
        <div><canvas id="qrChart"></canvas></div>
    </div>
    
    <div class="col-md-4">
        <table>
            <thead><tr><th colspan="3">QR Scan Statistics</th></tr></thead>
            <tbody>
                <tr>
                    <td colspan="2">Today</td>
                    <td>{{$today_qrhit}}</td>
                </tr>
                <tr>
                    <td colspan="2">In Last 7 Days</td>
                    <td>{{$lastSeven_qrhit}}</td>
                </tr>
                <tr>
                    <td colspan="2">In Last 30 Days</td>
                    <td>{{$lastMonth_qrhit}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    const cty = document.getElementById('qrChart');
    
    new Chart(cty, {
        type: 'bar',
        data: {
        labels: <?php echo $day; ?>,
        datasets: [{
            label: 'Last Seven Days QR Hits',
            data: <?php echo $hit; ?>,
            borderWidth: 1.5,
            backgroundColor: [
                'rgba(50, 205, 50, .7)',
                ],
            borderColor: [
                'rgba(50, 205, 50, 1)',
                ],
        }]
        },
        options: {
        // tension : .3,
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
    </script>


@endsection