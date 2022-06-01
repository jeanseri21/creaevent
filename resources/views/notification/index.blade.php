@extends('app')
@section('content')

  <!-- Container START -->
  <div class="container">
    <div class="row g-4">
      <!-- Main content START -->
      <div class="col-lg-8 mx-auto">
        <!-- Card START -->
        <div class="card">
          <div class="card-header py-3 border-0 d-flex align-items-center justify-content-between">
            <h1 class="h5 mb-0">Notifications</h1>
            <!-- Notification action START -->
            <div class="dropdown">
              <a href="#" class="text-secondary btn btn-secondary-soft-hover py-1 px-2" id="cardNotiAction" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots"></i>
              </a>
              <!-- Card share action dropdown menu -->
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardNotiAction">
                <li><a class="dropdown-item" href="#"> <i class="bi bi-check-lg fa-fw pe-2"></i>Marquez tous comme lu</a></li>

              </ul>
            </div>
            <!-- Notification action END -->
          </div>
          <div class="card-body p-2">
            <ul class="list-unstyled">
              <!-- Notif item -->
              <li>
                <div class="rounded badge-unread d-sm-flex border-0 mb-1 p-3 position-relative">
                  <!-- Avatar -->
                  <div class="avatar text-center">
                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
                  </div>
                  <!-- Info -->
                  <div class="mx-sm-3 my-2 my-sm-0">
                    <p class="small mb-2"><b>Judy Nguyen</b> demande de connexion</p>
                  <!-- Button -->
                  <div class="d-flex">
                    <button class="btn btn-sm py-1 btn-primary me-2">Acceptez </button>
                    <button class="btn btn-sm py-1 btn-danger-soft">Supprimer </button>
                  </div>
                </div>
                <!-- Action -->
                <div class="d-flex ms-auto">
                  <p class="small me-5 text-nowrap">Juste maintenant</p>
                  <!-- Notification action START -->
                  <div class="dropdown position-absolute end-0 top-0 mt-3 me-3">
                    <a href="#" class="z-index-1 text-secondary btn position-relative py-0 px-2" id="cardNotiAction1" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-three-dots"></i>
                    </a>
                    <!-- Card share action dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardNotiAction1">
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-trash fa-fw pe-2"></i>Supprimer</a></li>
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-bell-slash fa-fw pe-2"></i>desactivez </a></li>
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-volume-mute fa-fw fs-5 pe-2"></i> mode silencieux</a></li>
                    </ul>
                  </div>
                  <!-- Notification action END -->
                  </div>
                </div>
              </li>
              <!-- Notif item -->
              <li>
                <div class="rounded badge-unread d-sm-flex border-0 mb-1 p-3 position-relative">
                   <!-- Avatar -->
                  <div class="avatar text-center">
                    <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
                  </div>
                  <!-- Info -->
                  <div class="mx-sm-3 my-2 my-sm-0">
                    <p class="small mb-2">Wish <b>Amanda Reed</b> a happy birthday (Nov 12)</p>
                    <button class="btn btn-sm btn-outline-light py-1 me-2">Say happy birthday 🎂</button>
                  </div>
                  <!-- Action -->
                  <div class="d-flex ms-auto">
                    <p class="small me-5 text-nowrap">Juste maintenant</p>
                    <!-- Notification action START -->
                    <div class="dropdown position-absolute end-0 top-0 mt-3 me-3">
                      <a href="#" class="z-index-1 text-secondary btn position-relative py-0 px-2" id="cardNotiAction2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots"></i>
                      </a>
                      <!-- Card share action dropdown menu -->
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardNotiAction2">
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-trash fa-fw pe-2"></i>Delete</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bell-slash fa-fw pe-2"></i>Turn off </a></li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-volume-mute fa-fw fs-5 pe-2"></i>Mute Judy Nguyen </a></li>
                      </ul>
                    </div>
                    <!-- Notification action END -->
                  </div>
                </div>
              </li>

              <!-- Notif item -->

              <!-- Notif item -->

            </ul>
          </div>

        </div>
        <!-- Card END -->
      </div>
    </div> <!-- Row END -->
  </div>
  <!-- Container END -->
@endsection
