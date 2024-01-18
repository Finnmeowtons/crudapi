<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Teacher</title>
</head>

<body>
    <h1>Add a Teacher</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{ route('teacher.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="Name" placeholder="Name" />
        </div>
        <div>
            <label>Age</label>
            <input type="text" name="Age" placeholder="Age" />
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="Address" placeholder="Address" />
        </div>
        <div>
            <label>Department</label>
            <input type="text" name="Department" placeholder="Department" />
        </div>

        <div>
            <input type="submit" value="Add Teacher"/>
        </div>
    </form>
</body>

</html>