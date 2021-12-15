<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>View3d</title>
</head>
<body>
<div class="container">
    <h2>View3d Data</h2>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>date</th>
            <th>playerid</th>
            <th>agentid</th>
            <th>currency</th>
            <th>bet</th>
            <th>win</th>
            <th>rake</th>
            <th>tournament</th>
            <th>net</th>
            <th>fin</th>
            <th>aams_ticket</th>
            <th>aams_table</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->playerid}}</td>
                <td>{{$value->agentid}}</td>
                <td>{{$value->currency}}</td>
                <td>{{$value->bet}}</td>
                <td>{{$value->win}}</td>
                <td>{{$value->rake}}</td>
                <td>{{$value->tournament}}</td>
                <td>{{$value->net}}</td>
                <td>{{$value->fin}}</td>
                <td>{{$value->aams_ticket}}</td>
                <td>{{$value->aams_table}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
