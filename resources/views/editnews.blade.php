<!DOCTYPE html>
<html>
<head>
	<title>category</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


	<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h3><u>Update News</u></h3>
                @foreach($news as $n)
                <form method="post" action="/updatenews/{{$n->id}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="category">Category</label>
                  <select name="category" class="form-control">
                    <option value="{{$n->category_id}}">{{$n->name}}</option>

                    @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="title">Title</label>
                  <input type="text" id="title" name="title" class="form-control" value="{{$n->title}}" required >
                  </div>
                  <div class="form-group">
                    <label for="slug">slug</label>
                  <input type="text" id="slug" name="slug" class="form-control" value="{{$n->news_slug}}" required >
                  </div>

                  <div class="form-group">
                    <label for="des">Short description</label>
                    <textarea class="form-control" required placeholder="Write Description.." name="short_description">{{$n->short_description}}</textarea>
                  </div><br>

                  <div class="input-group">
                    <label>Image</label>
                  <input type="file" name="image" class="form-control" value="{{$n->image}} "required >
                  </div>

                  <div class="form-group">
                    <label for="des">Description</label>
                    <textarea class="form-control" required placeholder="Write Description.." name="description">{{$n->description}}</textarea>
                  </div><br>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Add" class="btn btn-success">
                  </div>
                  @endforeach
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

</body>
</html>