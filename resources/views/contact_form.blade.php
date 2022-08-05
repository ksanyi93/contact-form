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
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact_form') }}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      

    <div class="container">

      @if (Session::get('success_message'))
        <div class="alert alert-success text-center fs-5" role="alert">
          {{Session::get('success_message')}}
        </div>
        @endif

        @if (Session::has('errors'))
        <div class="alert alert-danger text-center fs-5" role="alert">
          Hiba! Kérjük töltsd ki az összes mezőt!
        </div>
        @endif

        
        <h2 class="mt-5 mb-4 text-center ">Kapcsolat felvétel</h2>

        <form action="{{ route('contact_form.submitted') }}" method="POST">
        <div class="row">
          <div class=" col-md-8 col-lg-6 mx-auto">
          <div class="row">
              <div class="col-md-6 mt-5 mb-2 mb-md-5">
                <label for="name" class="form-label">Név</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Add meg a neved" value="{{ old('name') }}">
                @error('name')
                  <span class="invalid-feedback"> {{$message}} </span>
                @enderror
              </div>
              <div class="col-md-6 mt-2 mt-md-5 mb-2 mb-md-5">
                <label for="email" class="form-label">E-mail cím</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Add meg az e-mail címed" value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback"> {{$message}} </span>
              @enderror
              </div>

              <div class="col-12 mb-3">
                <label for="description" class="form-label">Üzenet szövege</label>
                <textarea class="form-control mb-3 @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                  <span class="invalid-feedback"> {{$message}} </span>
                @enderror
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary mb-3">Küldés</button>
              </div>
            </div>
            </div>
        </div>
        @csrf
      </form>



    </div>




    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>