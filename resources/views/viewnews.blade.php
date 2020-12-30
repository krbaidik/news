<!DOCTYPE html>
<html>
<head>
    <title>view News</title>
</head>
<body>

    <table border="1" width="100%" >
        <tr>
            <th>title</th>
            <th>category</th>
            <th>slug</th>
            <th>short_description</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            @foreach($news as $n)
            <td>{{$n->title}}</td>
            <td>{{$n->category_id}}</td>
            <td>{{$n->slug}}</td>
            <td>{{$n->short_description}}</td>
            <td><img src="/uploads/{{$n->image}}" height="100" width="100"></td>
            <td><a href="/editnews/{{$n->id}}">Edit</a></td>
            <td><a href="/deletenews/{{$n->id}}" onclick=" return confirm('Are you sure to delete ?');">Delete</a></td>
        </tr>
        @endforeach
    </table>

</body>
</html>