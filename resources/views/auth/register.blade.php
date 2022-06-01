@extends('appauth')
@section('content')



  <!-- Container START -->
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100 py-5">
      <!-- Main content START -->
      <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
        <!-- Sign up START -->
        <div class="card card-body rounded-3 p-4 p-sm-5">
          <div class="text-center">
            <!-- Title -->
            <h1 class="mb-2">S'incrire</h1>
            <span class="d-block">Vous avez deja un compte? <a href="sign-in.html">Connectez vous</a></span>
          </div>
          <!-- Form START -->
          <form class="mt-4">
            <!-- Email -->
            <div class="mb-3 input-group-lg">
              <input type="email" class="form-control" placeholder="Entrez votre email">

            </div>
               <div class="mb-3 input-group-lg">
              <input type="email" class="form-control" placeholder="Entrez votre numero de telephone">

            </div>
            <!-- New password -->
            <div class="mb-3 position-relative">
              <!-- Input group -->
              <div class="input-group input-group-lg">
                <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Entrez votre mot de passe  ">
                <span class="input-group-text p-0">
                  <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                </span>
              </div>

              <!-- Pswmeter -->

            </div>

            <!-- Confirm password -->
            <div class="mb-3 input-group-lg">
              <input class="form-control" type="password" placeholder="Confirmez le mot de passe">
            </div>
            <!-- Keep me signed in -->
            <div class="mb-3 text-start">
              <input type="checkbox" class="form-check-input" id="keepsingnedCheck">
              <label class="form-check-label" for="keepsingnedCheck"> Se rappeler de moi</label>
            </div>
            <!-- Button -->
            <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary"> Valider</button></div>
            <!-- Copyright -->

          </form>
          <!-- Form END -->
        </div>
        <!-- Sign up END -->
      </div>
    </div> <!-- Row END -->
  </div>
@endsection
