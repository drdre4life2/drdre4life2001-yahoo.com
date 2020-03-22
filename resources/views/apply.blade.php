<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Applicants</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Applicants</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

        <div class="container">

        @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @elseif (Session::has('error'))
                <div class="alert alert-warning">{{ Session::get('error') }}</div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <p>Apply Here</p>
        <div class="container">
        <form method="post" action="apply" enctype="multipart/form-data">
                            {{ csrf_field() }}
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="fristName" id="" placeholder="">
    </div>
  </div>
    <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Surame</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="surname" id="" placeholder="">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-6">
    <input type="number" class="form-control" name="phone" id="" placeholder="">
    </div>
  </div>

  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
    <input type="email" name="email" class="form-control"  id="" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Cover Letter</label>
    <div class="col-sm-6">
    <textarea class="form-control" name="coverLetter" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Passport Photograph</label> 
    <input type="file" name="photograph" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload CV</label>
    <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="form-group row">

    <div class="col-sm-6">
    <button class="btn btn-primary" type="submit">Apply</button>
    </div>
  </div>
</form>
        </div>
</div>
          

            
        </div>
    </body>
</html>
