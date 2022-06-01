@extends('app')
@section('content')




  <!-- Container START -->
  <div class="container">
    <div class="row g-4">

      <!-- Main content START -->
      <div class="col-lg-8 vstack gap-4">
        <!-- Card START -->
        <div class="card">
          <div class="h-200px rounded-top" style="background-image:url(assets/images/bg/05.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
            <!-- Card body START -->
            <div class="card-body py-0">
              <div class="d-sm-flex align-items-start text-center text-sm-start">
                <div>
                  <!-- Avatar -->
                  <div class="avatar avatar-xxl mt-n5 mb-3">
                    <img class="avatar-img rounded-circle border border-white border-3" src="assets/images/avatar/07.jpg" alt="">
                  </div>
                </div>
                <div class="ms-sm-4 mt-sm-3">
                  <!-- Info -->
                  <h1 class="mb-0 h5">Sam Lanson <i class="bi bi-patch-check-fill text-success small"></i></h1>
                  <p>250 connexions</p>
                </div>
                <!-- Button -->
                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                  <button class="btn btn-danger-soft me-2" type="button"> <i class="bi bi-pencil-fill pe-1"></i> Editer mon  profile </button>
                  <div class="dropdown">
                    <!-- Card share action menu -->
                    <button class="icon-md btn btn-light" type="button" id="profileAction2" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <!-- Card share action dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>partagez mon profile</a></li>

                      <li><a class="dropdown-item" href="#"> <i class="bi bi-gear fa-fw pe-2"></i>parametre</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- List profile -->
              <ul class="list-inline mb-0 text-center text-sm-start mt-3 mt-sm-0">
                <li class="list-inline-item"><i class="bi bi-briefcase me-1"></i> Organisateur</li>
                <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i>Lieu</li>
                <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> date de creation de compte</li>
              </ul>
            </div>
            <!-- Card body END -->
            <div class="card-footer mt-3 pt-2 pb-0">
              <!-- Nav profile pages -->
              <ul class="nav nav-bottom-line align-items-center justify-content-center justify-content-md-start mb-0 border-0">

                <li class="nav-item"> <a class="nav-link" href="connexion_user_profile.html"> Connexions </a> </li>

                <li class="nav-item"> <a class="nav-link active" href="event_user_profil.html"> Evenenement</a> </li>

              </ul>
            </div>
        </div>
        <!-- Card END -->

        <!-- Events START -->
        <div class="card">
          <!-- Card header START -->
          <div class="card-header d-sm-flex align-items-center justify-content-between border-0 pb-0">
            <h5 class="card-title mb-sm-0">Mes evenements</h5>
            <!-- Button modal -->
            <a class="btn btn-primary-soft btn-sm" href="#"> <i class="fa-solid fa-plus pe-1"></i> Creer un evenenemt</a>
          </div>
          <!-- Card header END -->
          <!-- Card body START -->
          <div class="card-body">

            <!-- Events list START -->
            <div class="row">
              <div class="d-sm-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl">
                  <a href="#!"><img class="avatar-img rounded border border-white border-3" src="assets/images/events/01.jpg" alt=""></a>
                </div>
                <div class="ms-sm-4 mt-2 mt-sm-0">
                  <!-- Info -->
                  <h5 class="mb-1"><a href="event-details.html"> Theme </a></h5>
                  <ul class="nav nav-stack small">
                    <li class="nav-item">
                       <i class="bi bi-calendar-check pe-1"></i> date et heure
                    </li>
                    <li class="nav-item">
                      <i class="bi bi-geo-alt pe-1"></i> Lieu
                    </li>
                    <li class="nav-item">
                      <i class="bi bi-people pe-1"></i> nbre de personne interessé
                    </li>
                  </ul>
                </div>
                <!-- Button -->
                <div class="d-flex mt-3 ms-auto">
                  <div class="dropdown">
                    <!-- Card share action menu -->
                    <button class="icon-md btn btn-secondary-soft" type="button" id="profileAction" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <!-- Card share action dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction">
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>modifier </a></li>
                        <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>supprimer </a></li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Events list END -->
          </div>
          <!-- Card body END -->
        </div>
        <!-- Events START -->

      </div>
      <!-- Main content END -->

      <!-- Right sidebar START -->
      <div class="col-lg-4">

        <div class="row g-4">

          <!-- Card END -->




          <!-- Card START -->
          <div class="col-md-6 col-lg-12">
            <div class="card">
              <!-- Card header START -->
              <div class="card-header d-sm-flex justify-content-between align-items-center border-0">
                <h5 class="card-title">Suggestion d'amis <span class="badge bg-danger bg-opacity-10 text-danger">230</span></h5>
                <a class="btn btn-primary-soft btn-sm" href="#!"> Voir plus</a>
              </div>
              <!-- Card header END -->
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <div class="row g-3">

                  <div class="col-6">
                    <!-- Friends item START -->
                    <div class="card shadow-none text-center h-100">
                      <!-- Card body -->
                      <div class="card-body p-2 pb-0">
                        <div class="avatar avatar-story avatar-xl">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt=""></a>
                        </div>
                        <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                        <p class="mb-0 small lh-sm">16 mutual connections</p>
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer p-2 border-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                      </div>
                    </div>
                    <!-- Friends item END -->
                  </div>

                  <div class="col-6">
                    <!-- Friends item START -->
                    <div class="card shadow-none text-center h-100">
                      <!-- Card body -->
                      <div class="card-body p-2 pb-0">
                        <div class="avatar avatar-xl">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt=""></a>
                        </div>
                        <h6 class="card-title mb-1 mt-3"> <a href="#!"> Samuel Bishop </a></h6>
                        <p class="mb-0 small lh-sm">22 mutual connections</p>
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer p-2 border-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                      </div>
                    </div>
                    <!-- Friends item END -->
                  </div>

                  <div class="col-6">
                    <!-- Friends item START -->
                    <div class="card shadow-none text-center h-100">
                      <!-- Card body -->
                      <div class="card-body p-2 pb-0">
                        <div class="avatar avatar-xl">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt=""></a>
                        </div>
                        <h6 class="card-title mb-1 mt-3"> <a href="#"> Bryan Knight </a></h6>
                        <p class="mb-0 small lh-sm">1 mutual connection</p>
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer p-2 border-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                      </div>
                    </div>
                    <!-- Friends item END -->
                  </div>

                  <div class="col-6">
                    <!-- Friends item START -->
                    <div class="card shadow-none text-center h-100">
                      <!-- Card body -->
                      <div class="card-body p-2 pb-0">
                        <div class="avatar avatar-xl">
                          <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
                        </div>
                        <h6 class="card-title mb-1 mt-3"> <a href="#!"> Amanda Reed </a></h6>
                        <p class="mb-0 small lh-sm">15 mutual connections</p>
                      </div>
                      <!-- Card footer -->
                      <div class="card-footer p-2 border-0">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Send message"> <i class="bi bi-chat-left-text"></i> </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove friend"> <i class="bi bi-person-x"></i> </button>
                      </div>
                    </div>
                    <!-- Friends item END -->
                  </div>

                </div>
              </div>
              <!-- Card body END -->
            </div>
          </div>
          <!-- Card END -->

        </div>

      </div>
      <!-- Right sidebar END -->

    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

@endsection
