@extends('app')
@section('content')
    <div class="container">

        <!-- Form START -->
        <form class="row align-items-end g-4">
            <!-- Duration -->
            <div class="col-sm-6 col-lg-3">
                <label class="form-label">Select la categorie</label>
                <select class="form-select js-choice choice-select-text-none" data-position="bottom"
                    data-search-enabled="false">
                    <option value="category">Categorie </option>

                </select>
            </div>
            <!-- Date -->
            <div class="col-sm-6 col-lg-3">
                <label class="form-label">Date debut</label>
                <input type="text" class="form-control flatpickr" value="12/10/2022">
            </div>
            <!-- Time -->
            <div class="col-sm-6 col-lg-3">
                <label class="form-label">Date fin</label>
                <input type="text" class="form-control flatpickr" value="14/10/2022">
            </div>
            <!-- Time -->
            <div class="col-sm-6 col-lg-3">
                <a class="btn btn-primary w-100" href="#">Filtrer</a>
            </div>
        </form>

        <!-- Hero event END -->

        <section class="pt-5">
            <!-- Container START -->
            <div class="container">


                <div class="row g-4">

                    <!-- Main content START -->
                    <div class="col-12 vstack gap-4">

                        <!-- Card START -->
                        <div class="card">
                            <!-- Card header START -->
                            <div
                                class="card-header d-sm-flex align-items-center text-center justify-content-sm-between border-0 pb-0">
                                <h2 class="h4 card-title">Evenement</h2>

                            </div>
                            <!-- Card header START -->
                            <!-- Card body START -->
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-sm-6 col-xl-4">
                                        <!-- Event item START -->
                                        <div class="card h-100">
                                            <div class="position-relative">
                                                <img class="img-fluid rounded-top" src="assets/images/events/01.jpg" alt="">
                                                <div
                                                    class="badge bg-danger text-white mt-2 me-2 position-absolute top-0 end-0">
                                                    En ligne
                                                </div>
                                            </div>
                                            <!-- Card body START -->
                                            <div class="card-body position-relative pt-0">
                                                <!-- Tag -->
                                                <a class="btn btn-xs btn-primary mt-n3" href="event-details-2.html">type
                                                    d'evenement </a>
                                                <h5 class="mt-3"> <a href="event-details-2.html"> titre de
                                                        l'evenement</a> </h5>
                                                <!-- Date time -->
                                                <p class="mb-0 small"> <i class="bi bi-calendar-check pe-1"></i>date et
                                                    heure </p>
                                                <p class="small"> <i class="bi bi-geo-alt pe-1"></i> Lieu </p>
                                                <!-- Avatar group START -->
                                                <ul class="avatar-group list-unstyled align-items-center mb-0">
                                                    <li class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/01.jpg" alt="avatar">
                                                    </li>
                                                    <li class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/03.jpg" alt="avatar">
                                                    </li>
                                                    <li class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle"
                                                            src="assets/images/avatar/04.jpg" alt="avatar">
                                                    </li>
                                                    <li class="avatar avatar-xs">
                                                        <div class="avatar-img rounded-circle bg-primary"><span
                                                                class="smaller text-white position-absolute top-50 start-50 translate-middle">+78</span>
                                                        </div>
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
                                                        <label class="btn btn-sm btn-outline-success d-block"
                                                            for="Interested1"><i class="fa-solid fa-thumbs-up me-1"></i>
                                                            Interessé</label>
                                                    </div>
                                                    <div class="dropdown ms-3">
                                                        <a href="#" class="btn btn-sm btn-primary-soft"
                                                            id="eventActionShare" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="bi bi-share-fill"></i>
                                                        </a>
                                                        <!-- Dropdown menu -->
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="eventActionShare">
                                                            <li><a class="dropdown-item" href="#"> <i
                                                                        class="bi bi-envelope fa-fw pe-1"></i> Partagez hors
                                                                    du site</a></li>

                                                            <li><a class="dropdown-item" href="#"> <i
                                                                        class="bi bi-people fa-fw pe-1"></i> Partagez dans
                                                                    un groupe</a></li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!-- Card body END -->
                                        </div>
                                        <!-- Event item END -->
                                    </div>

                                </div>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Card END -->
                    </div>

                </div> <!-- Row END -->
            </div>
            <!-- Container END -->
        </section>
    @endsection
