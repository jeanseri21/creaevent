@extends('app')
@section('content')

<section class="pt-5 pb-0 position-relative" style="background-image: url(assets/images/bg/07.jpg); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="bg-overlay bg-dark opacity-8"></div>
      <!-- Container START -->
      <div class="container">
        <div class="pt-5">
          <div class="row position-relative">
            <div class="col-xl-8 col-lg-10 mx-auto pt-sm-5 text-center">
              <!-- Title -->
              <h1 class="text-white">Trouvez un evenement</h1>
              <p class="text-white">Faite un recherche tape ...</p>
              <div class="mx-auto bg-mode shadow rounded p-4 mt-5">
                <h5 class="mb-3 text-start">Recherche</h5>
                <!-- Form START -->
                <form class="row g-3 justify-content-center">
                  <div class="col-md-5">
                    <!-- What -->
                    <div class="input-group">
                      <input class="form-control form-control-lg me-1 pe-5" type="text" placeholder="evenement">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <!-- Where -->
                    <div class="input-group">
                      <input class="form-control form-control-lg me-1 pe-5" type="text" placeholder="lieu">
                      <a class="position-absolute top-50 end-0 translate-middle-y text-secondary px-3 z-index-9" href="#"> <i class="fa-solid fa-crosshairs"></i> </a>
                    </div>
                  </div>
                  <div class="col-md-2 d-grid">
                    <!-- Search -->
                    <a class="btn btn-lg btn-primary" href="#">chercher</a>
                  </div>
                </form>
                <!-- Form END -->
              </div>
            </div>
            <div class="mb-n5 mt-3 mt-lg-5">
              <div class="col-xl-9 col-lg-11 mx-auto">
                <!-- Category START -->
                <div class="d-md-flex gap-3 mt-5">
                  <!-- Category item -->
                  <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                    <img class="h-40px mb-3" src="assets/images/icon/badge-outline-filled.svg" alt="">
                    <h6>Ecoles & Formations</h6>
                  </a>
                  <!-- Category item -->
                  <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                    <img class="h-40px mb-3" src="assets/images/icon/clipboard-outline-filled.svg" alt="">
                    <h6> Business & Conferences</h6>
                  </a>
                  <!-- Category item -->
                  <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                    <img class="h-40px mb-3" src="assets/images/icon/home-outline-filled.svg" alt="">
                    <h6> E-gaming & Informatique</h6>
                  </a>
                  <!-- Category item -->
                  <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                    <img class="h-40px mb-3" src="assets/images/icon/clock-outline-filled.svg" alt="">
                    <h6>Fete & Concert</h6>
                  </a>
                  <!-- Category item -->
                  <a href="events.html" class="card card-body mb-3 mb-lg-0 p-3 text-center">
                    <img class="h-40px mb-3" src="assets/images/icon/imac-outline-filled.svg" alt="">
                    <h6>Sports & divers</h6>
                  </a>
                </div>
                <!-- Category END -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero event END -->

    <!-- Discover Events START -->
    <section class="bg-mode py-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-12 mb-3">
            <div class="d-sm-flex justify-content-between">
              <!-- Title -->
              <h4>Decouvrez les evenements </h4>
              <a class="btn btn-link" href="/eventsearch">Voir plus</a>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3">
            <!-- Event item START -->
            <div class="card h-100">
              <div class="position-relative">
                <img class="img-fluid rounded-top" src="assets/images/events/01.jpg" alt="">
                <div class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                  En ligne
                </div>
              </div>
              <!-- Card body START -->
              <div class="card-body position-relative pt-0">
                <!-- Tag -->
                <a class="btn btn-xs btn-primary mt-n3" href="event-details-2.html">type d'evenement </a>
                <h5 class="mt-3"> <a href="event-details-2.html"> titre de l'evenement</a> </h5>
                <!-- Date time -->
                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>date et heure </p>
                <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Lieu </p>
                <!-- Avatar group START -->
                <ul class="avatar-group list-unstyled align-items-center mb-0">
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                  </li>
                  <li class="avatar avatar-xs">
                    <div class="avatar-img rounded-circle bg-primary"><span class="smaller text-white position-absolute top-50 start-50 translate-middle">+78</span></div>
                  </li>
                  <li class="ms-3">
                    <small> personne interessées</small>
                  </li>
                </ul>
                <!-- Avatar group END -->
                <!-- Button -->
                <div class="d-flex mt-3 justify-content-between">
                  <!-- Interested button -->
                  <div class="w-100">
                    <input type="checkbox" class="btn-check d-block" id="Interested1">
                    <label class="btn btn-sm btn-outline-success d-block" for="Interested1"><i class="fa-solid fa-thumbs-up me-1" href="/detailevent"></i> Interessé</label>
                  </div>
                  <div class="dropdown ms-3">
                    <a href="#" class="btn btn-sm btn-primary-soft" id="eventActionShare" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-share-fill"></i>
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="eventActionShare">
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-envelope fa-fw pe-1"></i> Partagez hors du site</a></li>

                      <li><a class="dropdown-item" href="#"> <i class="bi bi-people fa-fw pe-1"></i> Partagez dans un groupe</a></li>


                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card body END -->
          </div>


        </div>
      </div>
    </section>
    <!-- Discover Events END -->

    <!-- Book conference START -->
    <section class="bg-mode pt-0 pt-lg-5">
      <div class="container">
        <div class="row g-4 justify-content-between">
          <div class="col-lg-5">
            <!-- Global conference START -->
            <!-- Image -->
            <a href="event-details-2.html"><img class="rounded" src="assets/images/events/06.jpg" alt=""></a>
            <!-- Info -->
            <h5 class="mt-4"> <a href="event-details-2.html"> Titre de evnement </a></h5>
            <p>detail</p>
            <!-- Avatar group -->
            <ul class="avatar-group list-unstyled align-items-center mb-0">
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <div class="avatar-img rounded-circle bg-primary"><span class="smaller text-white position-absolute top-50 start-50 translate-middle">+34</span></div>
              </li>
              <li class="ms-3">
                <small> personne interesse</small>
              </li>
            </ul>
            <!-- Global conference END -->
          </div>
          <div class="col-lg-6">
            <!-- Book a conference START -->
            <h4 class="mb-4">Type evenement</h4>
            <div class="bg-light dashed p-4 rounded">
              <div class="row g-4 justify-content-between">
                <div class="col-sm-7">
                  <div class="row g-3">
                    <!-- Date -->
                    <div class="col-6">
                      <small>Date</small>
                      <h6>12 june, 2022</h6>
                    </div>
                    <!-- Time -->
                    <div class="col-6">
                      <small>Time</small>
                      <h6>🌞Morning 10AM</h6>
                    </div>
                    <!-- Address -->
                    <div class="col-12">
                      <small>Address</small>
                      <h6>2492 Centennial NW, Acworth, GA, 30102</h6>
                    </div>
                    <div class="col-12">
                      <a class="btn btn-white" href="#"><i class="bi bi-share-fill pe-2"></i> Partargez </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 text-center">
                  <div class="ticket-border">
                    <!-- QR code -->
                  <img class="w-200px mx-auto" src="assets/images/qr-code.png" alt="">
                  <a class="btn btn-primary mt-3" href="#"><i class="bi bi-ticket-fill pe-2"></i> s'incrire</a>
                </div>
                </div>
              </div>
            </div>
            <!-- Book a conference END -->
          </div>
        </div>
      </div>
    </section>
    <!-- Book conference END -->

    <!-- Top Destinations START -->

    <!-- Top Destinations END -->

    <!-- Explore Groups START -->
    <section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-3">
            <!-- Title -->
            <h4>Explorez les groupes</h4>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-4">
            <!-- Card START -->
            <div class="card">
              <div class="h-80px rounded-top" style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                <!-- Card body START -->
                <div class="card-body text-center pt-0">
                  <!-- Avatar -->
                  <div class="avatar avatar-lg mt-n5 mb-3">
                    <a href="group-details.html"><img class="avatar-img rounded-circle border border-white border-3 bg-mode" src="assets/images/logo/08.svg" alt=""></a>
                  </div>
                  <!-- Info -->
                  <h5 class="mb-0"> <a href="group-details.html">Nom du groupe</a> </h5>
                  <small> <i class="bi bi-lock pe-1"></i> type prive ou publique</small>
                  <!-- Group stat START -->
                  <div class="hstack gap-2 gap-xl-3 justify-content-center mt-3">
                    <!-- Group stat item -->
                    <div>
                      <h6 class="mb-0">32k</h6>
                      <small>Membres</small>
                    </div>
                    <!-- Divider -->
                    <div class="vr"></div>
                    <!-- Group stat item -->
                    <div>
                      <h6 class="mb-0">20</h6>
                      <small>Nombre de poste</small>
                    </div>
                  </div>
                  <!-- Group stat END -->
                  <!-- Avatar group START -->
                  <ul class="avatar-group list-unstyled align-items-center justify-content-center mb-0 mt-3">
                    <li class="avatar avatar-xs">
                      <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-xs">
                      <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-xs">
                      <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-xs">
                      <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                    </li>
                    <li class="avatar avatar-xs">
                      <div class="avatar-img rounded-circle bg-primary"><span class="smaller text-white position-absolute top-50 start-50 translate-middle">+22</span></div>
                    </li>
                  </ul>
                  <!-- Avatar group END -->
              </div>
              <!-- Card body END -->
            </div>
            <!-- Card END -->
          </div>
         </div>
      </div>
    </section>



@endsection
