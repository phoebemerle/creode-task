<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Followers</title>


    </head>
    <body class="antialiased">
        <table>
            <tr>
                <th> Profile Picture </th>
                <th> Name </th>
                <th> Description </th>
                <th> Follower Count </th>
                <th> Email </th>
            </tr>
        @foreach($followerdata as $key => $data)
        <tr>
        <td><img src={{$data->photo}}></td>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->follower_count}}</td>
        <td>{{$data->email}}</td>
        </tr>

@endforeach
        </table>
    </body>
</html>
