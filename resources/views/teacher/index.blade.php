<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
</head>
<body>
    <h1>Teachers</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Department</th>
            </tr>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->Name}}</td>
                <td>{{$teacher->Age}}</td>
                <td>{{$teacher->Address}}</td>
                <td>{{$teacher->Department}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>