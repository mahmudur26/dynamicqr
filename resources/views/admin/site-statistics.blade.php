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
    <div class="col-md-6">
        <div><canvas id="weekChart"></canvas></div>
    </div>
    <div class="col-md-6">
        <div><canvas id="qrChart"></canvas></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <table>
            <thead><tr><th colspan="3">User Statistics</th></tr></thead>
            <tbody>
                <tr>
                    <td colspan="2">Total Active User</td>
                    <td>{{$active_user}}</td>
                </tr>
                <tr>
                    <td colspan="2">Total Pending User</td>
                    <td>{{$pending_user}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <table>
            <thead><tr><th colspan="3">Site Hit Statistics</th></tr></thead>
            <tbody>
                <tr>
                    <td colspan="2">Today</td>
                    <td>{{$siteHit_today}}</td>
                </tr>
                <tr>
                    <td colspan="2">Last One Week</td>
                    <td>{{$siteHit_lastOneWeek}}</td>
                </tr>
                <tr>
                    <td colspan="2">Last One Month</td>
                    <td>{{$siteHit_lastOneMonth}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <table>
            <thead><tr><th colspan="3">QR Statistics</th></tr></thead>
            <tbody>
                <tr>
                    <td colspan="2">Total QR Generated</td>
                    <td>{{$totalGeneratedQR}}</td>
                </tr>
                <tr>
                    <td colspan="2">Total QR Hit</td>
                    <td>{{$totalQRHit}}</td>
                </tr>
                <tr>
                    <td colspan="2">Total One Month QR Hit</td>
                    <td>{{$totalQRHitOneMonth}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    const ctx = document.getElementById('weekChart');
    const cty = document.getElementById('qrChart');
    
    new Chart(ctx, {
        type: 'line',
        data: {
        labels: [1,2,3,4,5,6,7],
        datasets: [{
            label: 'Last Seven Days Site Hits',
            data: <?php echo $hit; ?>,
            borderWidth: 1.5,
            backgroundColor: [
                'rgba(255, 99, 132, .5)',
                ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                ],
        }]
        },
        options: {
        tension : .3,
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

    new Chart(cty, {
        type: 'line',
        data: {
        labels: [1,2,3,4,5,6,7],
        datasets: [{
            label: 'Last Seven Days QR Hits',
            data: <?php echo $qrhit; ?>,
            borderWidth: 1.5,
            backgroundColor: [
                'rgba(138, 43, 226, .5)',
                ],
            borderColor: [
                'rgba(138, 43, 226, 1)',
                ],
        }]
        },
        options: {
        tension : .3,
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
    </script>


@endsection