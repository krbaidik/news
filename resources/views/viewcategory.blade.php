<!DOCTYPE html>
<html>
<head>
    <title>view categories</title>
</head>
<body>

    <table border="1" width="100%">
        <tr>
            <th>name</th>
            <th>rank</th>
            <th>slug</th>
            <th>status</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            @foreach($categories as $cat)
            <td>{{$cat->name}}</td>
            <td>{{$cat->rank}}</td>
            <td>{{$cat->slug}}</td>
            <td>{{$cat->status}}</td>
            <td><a href="/editcategory/{{$cat->id}}">Edit</a></td>
            <td><a href="/deletecategory/{{$cat->id}}" onclick=" return confirm('Are you sure to delete ?');">Delete</a></td>
        </tr>
        @endforeach
    </table>

</body>
</html>