<div class="vstack gap-0">
      <div role="tablist" id="list-tab">
            <a href="#list-dashboard" id="list-dashboard-list" data-bs-toggle="list" role="tab" aria-controls="list-dashboard" class="list-group-item list-group-item-action active link-underline link-underline-opacity-0 text-dark nav-link-sidebar initialColor colorLink" data-page="page1">
                  <div class="p-2 ps-4">
                        <div class="text-dark menu-sidebar">
                              Dashboard
                        </div>
                  </div>
            </a>
            <div class="px-3 ">
                  <hr style="color: #8ca9e0;">
            </div>
            <div class="ps-3  mb-3 text-dark fw-bolder menu-sidebar">MENU</div>
            <a href="#list-loker{{ $employE->id }}" id="list-loker-list" data-bs-toggle="list" role="tab" aria-controls="list-loker" class="list-group-item list-group-item-action link-underline link-underline-opacity-0 text-dark nav-link-sidebar initialColor colorLink" data-page="page1">
                  <div class="p-2 ps-4">
                        <div class="d-flex gap-3 menu-sidebar align-items-center">
                              <i class="bi bi-grid-1x2 text-dark"></i>
                              Loker
                        </div>
                  </div>
            </a>
            <a href="#list-apply" id="list-apply-list" data-bs-toggle="list" role="tab" aria-controls="list-apply" class="list-group-item list-group-item-action link-underline link-underline-opacity-0 text-dark nav-link-sidebar initialColor colorLink" data-page="page1">
                  <div class="p-2 ps-4">
                        <div class="d-flex gap-3 menu-sidebar align-items-center">
                              <i class="bi bi-grid-1x2 text-dark"></i>
                              Job Applicant
                        </div>
                  </div>
            </a>
            <a href="#list-candidat" id="list-candidat-list" data-bs-toggle="list" role="tab" aria-controls="list-candidat" class="list-group-item list-group-item-action link-underline link-underline-opacity-0 text-dark nav-link-sidebar initialColor colorLink" data-page="page1">
                  <div class="p-2 ps-4">
                        <div class="d-flex gap-3 menu-sidebar align-items-center">
                              <i class="bi bi-grid-1x2 text-dark"></i>
                              Candidat
                        </div>
                  </div>
            </a>
            <div class="px-3 ">
                  <hr style="color: #8ca9e0;">
            </div>
      </div>
      <div class="ps-3  mb-3 text-dark fw-bolder menu-sidebar">MENU LAINNYA</div>
      <a href="{{ route('employe.edit-employe')}}" class="link-underline link-underline-opacity-0 text-dark nav-link-sidebar initialColor colorLink " data-page="page1" id="colorLink">
            <div class="p-2 ps-4">
                  <div class="d-flex gap-3 text-dark menu-sidebar align-items-center">
                        <i class="bi bi-grid-1x2 text-dark"></i>
                        Edit Profile
                  </div>
            </div>
      </a>
      <a href="{{ route('employe-logout')}}" class="link-underline link-underline-opacity-0 text-dark nav-link-sidebar initialColor colorLink sidebar-admin-logout" data-page="page1" id="colorLink">
            <div class="p-2 ps-4">
                  <div class="d-flex gap-3 text-danger menu-sidebar align-items-center">
                        <i class="bi bi-grid-1x2 text-danger"></i>
                        Logout
                  </div>
            </div>
      </a>
</div>
