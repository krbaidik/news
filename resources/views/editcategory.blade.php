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
                <h3><u>Update Category</u></h3>
                @foreach($category as $cat)
                <form method="post" action="/updatecategory/{{$cat->id}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control"   value="{{$cat->name}}" required >
                  </div>
                  <div class="form-group">
                    <label for="rank">rank</label>
                  <input type="text" id="rank" name="rank" class="form-control"  value="{{$cat->rank}}" required >
                  </div>
                  <div class="form-group">
                    <label for="slug">slug</label>
                  <input type="text" id="slug" name="slug" class="form-control" value="{{$cat->slug}}"  required >
                  </div>

                  <div class="form-group">
                    <label for="status">status</label>
                  <input type="text" id="status" name="status" class="form-control" value="{{$cat->status}}"  required >
                  </div>

                  <div class="form-group">
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
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