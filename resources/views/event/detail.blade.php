@extends('app')
@section('content')
<section class="py-5 position-relative" style="background-image: url(assets/images/bg/07.jpg); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="bg-overlay bg-dark opacity-8"></div>
      <!-- Container START -->
      <div class="container">
        <div class="py-5">
          <div class="row position-relative">
            <div class="col-xl-8 col-lg-10 mx-auto pt-sm-5 text-center">
              <!-- Nav -->

              <!-- Title -->
              <h1 class="text-white">nom de l'evenement</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero event END -->

    <!-- Overview START -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="card card-body">
              <a class="btn btn-primary w-100" href="#">acheter un ticket</a>
              <div class="mt-4">
                <ul class="list-unstyled mb-4">
                  <li class="d-flex justify-content-between mb-3"> <strong class="w-150px">Date & heure:</strong> <span class="text-end"> 12 December, 8:20PM </span></li>
                  <li class="d-flex justify-content-between mb-3"> <strong class="w-150px">Prix:</strong> <span class="text-end"> $210.00 </span></li>
                  <li class="d-flex justify-content-between mb-3"> <strong class="w-150px">Nombre de place:</strong> <span class="text-end"> $1 per ticket </span></li>
                  <li class="d-flex justify-content-between mb-3"> <strong class="w-150px">Addresse:</strong> <span class="text-end"> 750 Sing Sing Rd, Horseheads, NY, 14845 </span></li>
                </ul>
               <!-- QR code -->
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card card-body">
              <!-- Overview -->
              <h4>theme </h4>
              <p>Appear third them gathered created divided all years spirit saying for great saying made had fly dry that darkness meat unto Thing spirit his fifth likeness divided also seed lesser image dominion sea fifth i god so saw open great Living.</p>
              <img class="img-fluid mb-3" src="assets/images/events/06.jpg" alt="">
              <h6>Female saying may multiply upon life</h6>
              <p>To don't may give void forth created fruitful bearing creepeth fish god night you're brought creeping so you'll herb place blessed creepeth beast Green face fruitful stars man multiply Creepeth upon over darkness There dominion day from man doesn't won't us two fish a female saying may multiply upon life.</p>

              <div class="mt-4 mt-sm-5">
                <!-- Host START -->
                <h4>Exposant </h4>
                <div class="row g-4">
                  <div class="col-sm-4">
                    <!-- Host Item -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-lg me-3">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
                      </div>
                      <div>
                        <h6 class="mb-0">Bryan Knight</h6>
                        <span>Founder</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!-- Host Item -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-lg me-3">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
                      </div>
                      <div>
                        <h6 class="mb-0">Carolyn Ortiz</h6>
                        <span>CEO</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!-- Host Item -->
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-lg me-3">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="">
                      </div>
                      <div>
                        <h6 class="mb-0">Dennis Barrett</h6>
                        <span>Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Host END -->

              <div class="mt-4 mt-sm-5">
                <h4>Agenda </h4>
                <div class="accordion accordion-icon" id="accordionschedules">
                  <!-- Accordion item -->
                  <div class="accordion-item mb-3">
                    <div class="accordion-header" id="scheduleOne">
                      <button class="accordion-button pe-5 flex-wrap mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#schedulecollapseOne" aria-expanded="true" aria-controls="schedulecollapseOne">
                        <span class="me-2">November 17, 2022</span>
                        <span class="me-2">12:00 </span>
                        <strong>Express besides it present</strong>
                      </button>
                    </div></div>



              </div>

              <!-- Statistics START -->
              <div class="card card-body p-4 mt-5">
                <div class="row g-2">
                  <div class="col-sm-4">
                    <!-- Visitors -->
                    <div class="d-flex">
                      <i class="bi bi-globe fs-4"></i>
                      <div class="ms-3">
                        <h5 class="mb-0">125</h5>
                        <p class="mb-0">Visiteur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!-- Registred -->
                    <div class="d-flex">
                      <i class="bi bi-person-plus fs-4"></i>
                      <div class="ms-3">
                        <h5 class="mb-0">356</h5>
                        <p class="mb-0">inscris</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <!-- Attendance -->
                    <div class="d-flex">
                      <i class="bi bi-people fs-4"></i>
                      <div class="ms-3">
                        <h5 class="mb-0">350</h5>
                        <p class="mb-0">reservation</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Statistics END -->

              <!-- Faqs START -->

          </div>
        </div>
      </div>
    </section>

@endsection
