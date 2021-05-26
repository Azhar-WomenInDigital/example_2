<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
    <style>
      *{
        margin: 0px;
        padding: 0px;
      }
      .row{
        margin: 0px;
        padding: 0px;
      }
    
    </style>
  </head>
  <body>
   
    <section>
      <div class="pt-sm-3 pt-md-4 pt-lg-5">
        @if (auth()->user())
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="pb-3">{{ $course_cat->category_name }}</h3>
            <h5 class="pb-sm-3 pb-md-4">Please select one of the following courses</h5>
            <form action="{{ route('user.course.update') }}" method="POST">
              @csrf
              @method('PUT')
              @foreach ($course as $data)
              <div class="form-check pb-sm-3">
                <label class="form-check-label" for="radio1">
                  <input type="radio" class="form-check-input" id="radio1" name="subject_id" value="{{ $data->id }}" >{{ $data->subject_name }}
                </label>
              </div>
              @endforeach
              <button type="submit" class="btn btn-info">Ok</button>
            </form>
          </div>
        </div>
        @else
        <p>Registration First</p>
        @endif
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>