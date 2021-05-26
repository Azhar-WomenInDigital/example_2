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
      <h2>Create Course</h2>
      <form action="{{ route('course.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <div class="form-group">
            <label for="category_id">Select Category</label>
            <select class="form-control" id="category_id" name="category_id">
              @foreach ($course_cat as $data)
              <option value="{{ $data->id }}">{{ $data->category_name }}</option>
              @endforeach
            </select>
          </div>
          <label for="subject_name">Category</label>
          <input type="text" class="form-control" id="subject_name" placeholder="Enter Subject Name" name="subject_name">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
