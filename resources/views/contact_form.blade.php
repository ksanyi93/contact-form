<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      

    <div class="container">

      @if (Session::get('message'))
        <div class="alert alert-success text-center fs-5" role="alert">
          {{Session::get('message')}}
        </div>
        @endif
        
        <h2 class="mt-5 mb-4 col-3 mx-auto">Kapcsolat felvétel</h2>

        <form action="" method="POST">
        <div class="row col-8 mx-auto">
              <div class="col-6 mx-auto mt-5 mb-5">
                <label for="name_input" class="form-label">Név</label>
                <input type="text" class="form-control @error('name_input') is-invalid @enderror" id="name_input" name="name_input"  placeholder="Add meg a neved" value="{{ old('name_input') }}">
                @error('name_input')
                  <span class="invalid-feedback"> {{$message}} </span>
                @enderror
              </div>
              <div class="col-6 mx-auto mt-5 mb-5">
                <label for="email_input" class="form-label">E-mail cím</label>
                <input type="email" class="form-control @error('email_input') is-invalid @enderror" id="email_input" name="email_input" placeholder="Add meg az e-mail címed" value="{{ old('email_input') }}">
              </div>
              @error('email_input')
                  <span class="invalid-feedback"> {{$message}} </span>
                @enderror
              <div class="mb-3">
                <label for="message" class="form-label">Üzenet szövege</label>
                <textarea class="form-control mb-3 @error('message') is-invalid @enderror" id="message" name="message" rows="3" value="{{ old('message') }}"></textarea>
                @error('message')
                  <span class="invalid-feedback"> {{$message}} </span>
                @enderror
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Küldés</button>
              </div>
        </div>
        @csrf
      </form>



    </div>




    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>