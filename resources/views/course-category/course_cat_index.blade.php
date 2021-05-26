<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Create Course Category</h2>
      <form action="{{ route('course.category.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="category_name">Course Category</label>
          <input type="text" class="form-control" id="category_name" placeholder="Enter Category Name" name="category_name">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
