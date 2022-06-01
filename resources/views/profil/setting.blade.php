@extends('app')
@section('content')
<div class="container">
    <div class="row">

      <!-- Sidenav START -->
      <div class="col-lg-3">

        <!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<div class="d-flex align-items-center mb-4 d-lg-none">
					<button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<i class="btn btn-primary fw-bold fa-solid fa-sliders"></i>
            <span class="h6 mb-0 fw-bold d-lg-none ms-2">Parametre</span>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->

        <nav class="navbar navbar-light navbar-expand-lg mx-0">
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
            <!-- Offcanvas header -->
						<div class="offcanvas-header">
							<button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>

            <!-- Offcanvas body -->
            <div class="offcanvas-body p-0">
              <!-- Card START -->
              <div class="card w-100">
                <!-- Card body START -->
                <div class="card-body">

                <!-- Side Nav START -->
                <ul class="nav nav-tabs nav-pills nav-pills-soft flex-column fw-bold gap-2 border-0">
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0 active" href="#nav-setting-tab-1" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/person-outline-filled.svg" alt=""><span>Compte </span></a>
                  </li>
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-2" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notification </span></a>
                  </li>
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-3" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/shield-outline-filled.svg" alt=""><span>Vie privée</span></a>
                  </li>

                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-4" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/chat-alt-outline-filled.svg" alt=""><span>Rdv </span></a>
                  </li>
                  <li class="nav-item" data-bs-dismiss="offcanvas">
                    <a class="nav-link d-flex mb-0" href="#nav-setting-tab-5" data-bs-toggle="tab"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/trash-var-outline-filled.svg" alt=""><span>Desactiver mon compte</span></a>
                  </li>
                </ul>
                <!-- Side Nav END -->

              </div>
              <!-- Card body END -->
              <!-- Card footer -->

              </div>
            <!-- Card END -->
            </div>
            <!-- Offcanvas body -->



          </div>
        </nav>
      </div>
      <!-- Sidenav END -->

        <!-- Main content START -->
        <div class="col-lg-6 vstack gap-4">
          <!-- Setting Tab content START -->
          <div class="tab-content py-0 mb-0">

            <!-- Account setting tab START -->
            <div class="tab-pane show active fade" id="nav-setting-tab-1">
              <!-- Account settings START -->
              <div class="card mb-4">

                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h1 class="h5 card-title">Compte</h1>

                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Form settings START -->
                  <form class="row g-3">
                    <!-- First name -->
                    <div class="col-sm-6 col-lg-4">
                      <label class="form-label">Nom </label>
                      <input type="text" class="form-control" placeholder="" value="Sam">
                    </div>
                    <!-- Last name -->



                    <!-- Allow checkbox -->
                    <div class="col-12">

                    </div>
                    <!-- Phone number -->
                    <div class="col-sm-6">
                      <label class="form-label">Phone number</label>
                      <input type="text" class="form-control" placeholder="" value="(678) 324-1251">
                      <!-- Add new number -->
                      <a class="btn btn-sm btn-dashed rounded mt-2" href="#!"> <i class="bi bi-plus-circle-dotted me-1"></i>Telephone</a>
                    </div>
                    <!-- Phone number -->
                    <div class="col-sm-6">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" placeholder="" value="sam@webestica.com">
                      <!-- Add new email -->
                      <a class="btn btn-sm btn-dashed rounded mt-2" href="#!"> <i class="bi bi-plus-circle-dotted me-1"></i>email</a>
                    </div>
                    <!-- Page information -->

                    <!-- Button  -->
                    <div class="col-12 text-end">
                      <button type="submit" class="btn btn-sm btn-primary mb-0">Modifier</button>
                    </div>
                  </form>
                  <!-- Settings END -->
                </div>
              <!-- Card body END -->
              </div>
              <!-- Account settings END -->

              <!-- Change your password START -->
              <div class="card">
                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Changer le mot de passe</h5>

                </div>
                <!-- Title START -->
                <div class="card-body">
                  <!-- Settings START -->
                  <form class="row g-3">
                    <!-- Current password -->
                    <div class="col-12">
                      <label class="form-label"> mot de passe actuel</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                    <!-- New mot de passe -->
                    <div class="col-12">
                      <label class="form-label">Nouveau mot de passe</label>
                      <!-- Input group -->
                      <div class="input-group">
                        <input class="form-control fakepassword" type="password" id="psw-input" placeholder="Enter new password">
                        <span class="input-group-text p-0">
                          <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                        </span>
                      </div>
                      <!-- Pswmeter -->
                      <div id="pswmeter" class="mt-2"></div>
                      <div id="pswmeter-message" class="rounded mt-1"></div>
                    </div>
                    <!-- Confirm password -->
                    <div class="col-12">
                      <label class="form-label">Confirmez le mot de passe</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                    <!-- Button  -->
                    <div class="col-12 text-end">
                      <button type="submit" class="btn btn-primary mb-0">Modifier</button>
                    </div>
                  </form>
                  <!-- Settings END -->
                </div>
              </div>
              <!-- Card END -->
            </div>
            <!-- Account setting tab END -->

            <!-- Notification tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-2">
              <!-- Notification START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Notification</h5>
                  <p class="mb-0">Tried law yet style child. The bore of true of no be deal. Frequently sufficient to be unaffected. The furnished she concluded depending procuring concealed. </p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body pb-0">
                  <!-- Notification START -->
                  <ul class="list-group list-group-flush">
                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0">Groupe</h6>
                     <!--    <p class="small mb-0">Joy say painful removed reached end.</p> -->
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked" checked>
                      </div>
                    </li>

                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0">Evenement</h6>
                  <!--       <p class="small mb-0">Preference any astonished unreserved Mrs.</p> -->
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked3">
                      </div>
                    </li>
                    <!-- Notification list item -->

                    <!-- Notification list item -->

                    <!-- Notification list item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                      <div class="me-2">
                        <h6 class="mb-0">Push notifications</h6>
                       <!--  <p class="small mb-0">Rendered six say his striking confined. </p> -->
                      </div>
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="NotiSwitchCheckChecked8" checked>
                      </div>
                    </li>
                    <!-- Notification list item -->

                  </ul>
                  <!-- Notification END -->

                </div>
              <!-- Card body END -->
              <!-- Button save -->
              <div class="card-footer pt-0 text-end border-0">
                <button type="submit" class="btn btn-sm btn-primary mb-0">Modification</button>
              </div>
            </div>
              <!-- Notification END -->
            </div>
            <!-- Notification tab END -->

            <!-- Privacy and safety tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-3">
              <!-- Privacy and safety START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Vie privé</h5>

                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Privacy START -->
                  <ul class="list-group">

                    <!-- Privacy item -->
                    <li class="list-group-item d-md-flex justify-content-between align-items-start">
                      <div class="me-md-3">
                        <h6 class="mb-0">	Utiliser la double authentification</h6>
                    <!--     <p class="small mb-0">Unaffected occasional thoroughly. Adieus it no wonders spirit houses. </p> -->
                      </div>
                      <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i class="bi bi-pencil-square"></i> Changez</button>
                    </li>




                    <!-- Privacy item -->
                    <li class="list-group-item d-md-flex justify-content-between align-items-start">
                      <div class="me-md-3">
                        <h6 class="mb-0">Historique de recherche</h6>
                    <!--     <p class="small mb-0">Choose to autoplay videos on social</p> -->
                      </div>
                      <button class="btn btn-primary-soft btn-sm mt-1 mt-md-0"> <i class="bi bi-pencil-square"></i> Changez</button>
                    </li>

                  </ul>
                  <!-- Privacy END -->
                </div>
                <!-- Card body END -->
                <!-- Button save -->
                <div class="card-footer pt-0 text-end border-0">
                  <button type="submit" class="btn btn-sm btn-primary mb-0">Modifier</button>
                </div>
              </div>
              <!-- Privacy and safety END -->
            </div>
            <!-- Privacy and safety tab END -->

            <!-- Communications tab START -->
            <div class="tab-pane fade" id="nav-setting-tab-4">
              <!-- Communications START -->
              <div class="card">
                <!-- Title START -->
                     <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Qui peut se connecter a vous ?</h5>
     <!--              <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p> -->
                </div>
                <!-- Title START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Accordion START -->
                  <div class="accordion" id="communications">
                    <!-- Accordion item -->
                    <div class="accordion-item bg-transparent">
                      <h2 class="accordion-header" id="communicationOne">
                        <button class="accordion-button mb-0 h6" type="button" data-bs-toggle="collapse" data-bs-target="#communicationcollapseOne" aria-expanded="true" aria-controls="communicationcollapseOne">
                         Requette de connexion
                        </button>
                      </h2>
                      <!-- Accordion info -->
                      <div id="communicationcollapseOne" class="accordion-collapse collapse show" aria-labelledby="communicationOne" data-bs-parent="#communications">
                        <div class="accordion-body">
                           <!-- Notification list item -->
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="ComRadio" id="ComRadio5">
                            <label class="form-check-label" for="ComRadio5">
                            Tout le monde (recommendé)
                            </label>
                          </div>
                          <!-- Notification list item -->
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="ComRadio" id="ComRadio2" checked>
                            <label class="form-check-label" for="ComRadio2">
                              seulement les membres du groupe
                            </label>
                          </div>
                          <!-- Notification list item -->
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="ComRadio" id="ComRadio3">
                            <label class="form-check-label" for="ComRadio3">
                              personne
                            </label>
                          </div>
                        </div>
                      </div>

               <!--  -->
                  </div>
                    <!-- Accordion item -->
                    <div class="accordion-item bg-transparent">
                      <h2 class="accordion-header" id="communicationTwo">
                        <button class="accordion-button mb-0 h6 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#communicationcollapseTwo" aria-expanded="false" aria-controls="communicationcollapseTwo">
                        Qui peut vous ecris
                        </button>
                      </h2>
                      <!-- Accordion info -->
                      <div id="communicationcollapseTwo" class="accordion-collapse collapse" aria-labelledby="communicationTwo" data-bs-parent="#communications">
                        <div class="accordion-body">
                          <ul class="list-group list-group-flush">
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0"> Tout le monde (recommendé)</p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked">
                              </div>
                            </li>
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">   seulement les membres du groupe</p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked2" checked>
                              </div>
                            </li>
                            <!-- Notification list item -->
                            <li class="list-group-item d-sm-flex justify-content-between align-items-center px-0 py-1 border-0">
                              <div class="me-2">
                                <p class="mb-0">       personne </p>
                              </div>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="comSwitchCheckChecked3" checked>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                 <!-- Accordion END -->
                </div>
              <!-- Card body END -->
               <!-- Button save -->
               <div class="card-footer pt-0 text-end border-0">
                <button type="submit" class="btn btn-sm btn-primary mb-0">Save changes</button>
              </div>
              </div>
              <!-- Communications  END -->
            </div>
            <!-- Communications tab END -->

            <!-- Messaging tab START -->
                   <div class="tab-pane fade" id="nav-setting-tab-5">
              <!-- Card START -->
              <div class="card">
                <!-- Card header START -->
                <div class="card-header border-0 pb-0">
                  <h5 class="card-title">Supprimer le compte</h5>

                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Delete START -->



                  <a href="#" class="btn btn-success-soft btn-sm mb-2 mb-sm-0">Desactivez mon compte</a>
                  <a href="#" class="btn btn-danger btn-sm mb-0">supprimer mon compte</a>
                  <!-- Delete END -->
                </div>
              <!-- Card body END -->
              </div>
              <!-- Card END -->
            </div>
            <!-- Close account tab END -->

          </div>
          <!-- Setting Tab content END -->
        </div>

    </div> <!-- Row END -->
  </div>
  <!-- Container END -->


@endsection
