<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid-19 Report</title>
</head>
<body>
    <style type="text/css">
        body {
            text-align: center;
        }

        p {
            text-align: left;
        }

        table {
            width: 100%;
            border: 1px solid black;
        }

		table tr td,
		table tr th{
			font-size: 1rem;
            text-align: left;
            border: 1px solid black;
		}

        .table-bottom {
            font-weight: bold;
            text-align: center !important;
        }
	</style>
    
    <h3>Covid Cases</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Province</th>
                <th>Confirmed</th>
                <th>In Care</th>
                <th>Recovered</th>
                <th>Dead</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cases as $case)
            <tr>
                <td>{{ $case->province }}</td>
                <td>{{ $case->confirmed }}</td>
                <td>{{ $case->in_care }}</td>
                <td>{{ $case->recovered }}</td>
                <td>{{ $case->dead }}</td>
            </tr>
            @endforeach
            <tr class="table-bottom">
                <td>Total</td>
                <td>{{ $confirmed_sum }}</td>
                <td>{{ $in_care_sum }}</td>
                <td>{{ $recovered_sum }}</td>
                <td>{{ $dead_sum }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
