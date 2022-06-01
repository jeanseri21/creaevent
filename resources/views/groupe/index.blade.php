@extends('app')
@section('content')

  <!-- Container START -->
  <div class="container">
    <div class="row g-4">

      <!-- Sidenav START -->
      <div class="col-lg-3">

        <!-- Advanced filter responsive toggler START -->
        <div class="d-flex align-items-center d-lg-none">
          <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
            <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
            <span class="h6 mb-0 fw-bold d-lg-none ms-2">Mon profile</span>
          </button>
        </div>
        <!-- Advanced filter responsive toggler END -->

        <!-- Navbar START-->
        <nav class="navbar navbar-expand-lg mx-0">
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
            <!-- Offcanvas header -->
            <div class="offcanvas-header">
              <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!-- Offcanvas body -->
            <div class="offcanvas-body d-block px-2 px-lg-0">
              <!-- Card START -->
              <div class="card overflow-hidden">
                <!-- Cover image -->
                <div class="h-50px" style="background-image:url(assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                  <!-- Card body START -->
                  <div class="card-body pt-0">
                    <div class="text-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-lg mt-n5 mb-3">
                      <a href="#!"><img class="avatar-img rounded border border-white border-3" src="assets/images/avatar/07.jpg" alt=""></a>
                    </div>
                    <!-- Info -->
                    <h5 class="mb-0"> <a href="#!">Sam Lanson </a> </h5>
                    <small>Web Developer at Webestica</small>

                    <!-- User stat START -->
                    <div class="hstack gap-2 gap-xl-3 justify-content-center">
                      <!-- User stat item -->
                      <div>
                        <h6 class="mb-0">256</h6>
                        <small>Evenement</small>
                      </div>
                      <!-- Divider -->
                      <div class="vr"></div>
                      <!-- User stat item -->
                      <div>
                        <h6 class="mb-0">2.5K</h6>
                        <small>Abonnés</small>
                      </div>
                      <!-- Divider -->
                      <div class="vr"></div>
                      <!-- User stat item -->
                      <div>
                        <h6 class="mb-0">365</h6>
                        <small>Abonnement</small>
                      </div>
                    </div>
                    <!-- User stat END -->
                  </div>

                  <!-- Divider -->
                  <hr>

                  <!-- Side Nav START -->
                  <ul class="nav nav-link-secondary flex-column fw-bold gap-2">

                    <li class="nav-item">
                      <a class="nav-link" href="my-profile-connections.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/person-outline-filled.svg" alt=""><span>Connexions</span></a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="events.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/calendar-outline-filled.svg" alt=""><span>Events </span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="groups.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/chat-outline-filled.svg" alt=""><span>Groupes </span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="notifications.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notifications </span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="settings.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/cog-outline-filled.svg" alt=""><span>Profile </span></a>
                    </li>
                  </ul>
                  <!-- Side Nav END -->
                </div>
                <!-- Card body END -->
                <!-- Card footer -->
                <div class="card-footer text-center py-2">
                  <a class="btn btn-link btn-sm" href="">Voir mon profil</a>
                </div>
              </div>
              <!-- Card END -->


            </div>
          </div>
        </nav>
        <!-- Navbar END-->
      </div>
      <!-- Sidenav END -->

      <!-- Main content START -->
      <div class="col-md-8 col-lg-6 vstack gap-4">
          <!-- Card START -->
          <div class="card">
            <!-- Card header START -->
            <div class="card-header border-0 pb-0">
              <div class="row g-2">
                <div class="col-lg-2">
                  <!-- Card title -->
                  <h1 class="h4 card-title mb-lg-0">Groupe</h1>
                </div>
                <div class="col-sm-6 col-lg-3 ms-lg-auto">
                  <!-- Select Groups -->
                  <select class="form-select js-choice choice-select-text-none" data-search-enabled="false">
                    <option value="AB">Alphabetical</option>

                  </select>
                </div>
                  <div class="col-sm-6 col-lg-3">
                  <!-- Button modal -->
                  <a class="btn btn-primary-soft ms-auto w-100" href="#" data-bs-toggle="modal" data-bs-target="#modalCreateGroup"> <i class="fa-solid fa-plus pe-1"></i> Creer un groupe</a>
                </div>
              </div>
            </div>
            <!-- Card header START -->
            <!-- Card body START -->
            <div class="card-body">
              <!-- Tab nav line -->
              <ul class="nav nav-tabs nav-bottom-line justify-content-center justify-content-md-start">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-1"> Vos groupes</a> </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"> Groupe populaire </a> </li>

              </ul>
              <div class="tab-content mb-0 pb-0">

                <!-- Friends groups tab START -->
                <div class="tab-pane fade show active" id="tab-1">
                  <div class="row g-4">


                    <div class="col-sm-6 col-lg-4">
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
            </div></div>
                      <!-- Card END -->
                    </div>




                    </div>
                  </div>
                  <!-- Friends' groups tab END -->

                <!-- Suggested for you START -->
               <!-- Popular near you START -->
                <div class="tab-pane fade" id="tab-2">
                   <!-- Add group -->
                  <div class="my-sm-5 py-sm-5 text-center">
                    <i class="display-1 text-muted bi bi-people"> </i>
                    <h4 class="mt-2 mb-3 text-body">Pas de groupe trouve</h4>

                  </div>
                </div>
                <!-- Suggested for you END -->




            </div>
          </div>
          <!-- Card body END -->
        </div>
        <!-- Card END -->
      </div>
      <!-- Right sidebar END -->

    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Modal create group START -->
<div class="modal fade" id="modalCreateGroup" tabindex="-1" aria-labelledby="modalLabelCreateGroup" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Title -->
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCreateGroup">Create Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form START -->
        <form>
          <!-- Group name -->
          <div class="mb-3">
            <label class="form-label">Group name</label>
            <input type="text" class="form-control" placeholder="Add Group name here">
          </div>
          <!-- Group picture -->
          <div class="mb-3">
            <label class="form-label">Group picture</label>
            <!-- Avatar upload START -->
            <div class="d-flex align-items-center">
              <div class="avatar-uploader me-3">
                <!-- Avatar edit -->
                <div class="avatar-edit">
                  <input type='file' id="avatarUpload" accept=".png, .jpg, .jpeg" />
                  <label for="avatarUpload"></label>
                </div>
                <!-- Avatar preview -->
                <div class="avatar avatar-xl position-relative">
                  <img id="avatar-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/placeholder.jpg" alt="">
                </div>
              </div>
              <!-- Avatar remove button -->
              <div class="avatar-remove">
                <button type="button" id="avatar-reset-img" class="btn btn-light">Delete</button>
              </div>
            </div>
            <!-- Avatar upload END -->
          </div>
          <!-- Select audience -->
          <div class="mb-3">
            <label class="form-label d-block">Select audience</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PublicRadioOptions" id="publicRadio1" value="option1">
              <label class="form-check-label" for="publicRadio1">Public</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PublicRadioOptions" id="privateRadio2" value="option2">
              <label class="form-check-label" for="privateRadio2">Private</label>
            </div>
          </div>
          <!-- Invite friend -->
          <div class="mb-3">
            <label class="form-label">Invite friend </label>
            <input type="text" class="form-control" placeholder="Add friend name here">
          </div>
          <!-- Group description -->
          <div class="mb-3">
            <label class="form-label">Group description </label>
            <textarea class="form-control" rows="3" placeholder="Description here"></textarea>
          </div>
        </form>
        <!-- Form END -->
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success-soft">Create now</button>
      </div>
    </div>
  </div>
</div>

@endsection
