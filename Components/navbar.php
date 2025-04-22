
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <style>
    .fa-bell {
      font-size: 20px;
    }
    .font-size-10{
      font-size: 10px;
    }
  </style>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <nav class="navbar navbar-vertical navbar-expand-lg animation-nav">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">

          <!-- Dashboard -->
          <li class="nav-item nav-links-animation">
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-dashboard" role="button" data-bs-toggle="collapse">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                  <span class="nav-link-icon"><span class="uil uil-users-alt fs-8"></span></span>
                  <span class="nav-link-text">Dashboard</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-dashboard">

                  <!-- add lead -->
                 
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/leads/add-leads.php?tag=add-leads" id="add-leads">
                        <!-- add the link for Add New Lead page here -->
                        <div class="d-flex align-items-center"><span class="nav-link-text">Employee Dashboard</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/leads/view-leads.php?tag=manage-leads" id="manage-leads">
                        <!-- add the link for View/Manage Leads page here -->
                        <div class="d-flex align-items-center"><span class="nav-link-text">Receptionist Dashboard</span></div>
                      </a>
                    </li>
                 
                </ul>
              </div>
            </div>
          </li>

          <!-- Leads -->
          <li class="nav-item nav-links-animation">
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-leads" role="button" data-bs-toggle="collapse">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                  <span class="nav-link-icon"><span class="uil uil-users-alt fs-8"></span></span>
                  <span class="nav-link-text">VMS</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-leads">

                  <!-- add lead -->
                 
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/leads/add-leads.php?tag=add-leads" id="add-leads">
                        <!-- add the link for Add New Lead page here -->
                        <div class="d-flex align-items-center"><span class="nav-link-text">New Registration</span></div>
                      </a>
                    </li>
                

                  <!-- view/manage lead -->


                 
                    <li class="nav-item">
                      <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Vms/EmployeeSideMeeting.php?tag=emp-meet-queue" id="emp-meet-queue">
                        <!-- add the link for View/Manage Leads page here -->
                        <div class="d-flex align-items-center"><span class="nav-link-text">Employee Side Meeting Queue</span></div>
                      </a>
                    </li>

                </ul>
              </div>
            </div>
          </li>

          <!-- Society -->
          <li class="nav-item nav-links-animation">
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-property" role="button" data-bs-toggle="collapse">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                  <span class="nav-link-icon"><span class="uil uil-building fs-8"></span></span>
                  <span class="nav-link-text">EMS</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-property">
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Property/Add-property.php?tag=add-property" id="add-property">
                        <!-- add the link for Add Society page here -->
                        <div class="d-flex align-items-center"><span class="nav-link-text">Add Property</span></div>
                      </a>
                    </li>
                
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Society/view-society.php?tag=view-society" id="view-society">
                        <!-- add the link for View/Manage Societies page here -->
                        <div class="d-flex align-items-center"><span class="nav-link-text">View/Manage Societies</span></div>
                      </a>
                    </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="/pms/PMS-files/pages/Property/view-manage-landlord.php?tag=view-manage-landlord" id="view-manage-landlord">
                      <div class="d-flex align-items-center"><span class="nav-link-text">View/Manage LandLord</span></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pms/PMS-files/pages/Property/view-landlord.php?tag=view-landlord" id="view-landlord">
                      <div class="d-flex align-items-center"><span class="nav-link-text">View Landlord</span></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pms/PMS-files/pages/Property/edit-landlord.php?tag=edit-landlord" id="edit-landlord">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Edit Landlord</span></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>

          <!---Documents Handling-->

          <li class="nav-item nav-links-animation">
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-document" role="button" data-bs-toggle="collapse">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                  <span class="nav-link-icon"><span><i class="fa-regular fa-file"></i></span></span>
                  <span class="nav-link-text">HRMS</span>
                </div>
              </a>
              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-document">


                  <li class="nav-item">
                    <!-- add document -->

                  
                  <li class="nav-item">
                    <a class="nav-link" href="/pms/PMS-files/pages/Document-Handling/Document-Handling.php?tag=document-add" id="document-add">
                      <!-- add the link for Add Society page here -->
                      <div class="d-flex align-items-center"><span class="nav-link-text">Add Document</span></div>
                    </a>
                  </li>
                

               
                  <li class="nav-item">

                    <a class="nav-link" href="/pms/PMS-files/pages/Document-Handling/View-document.php?tag=documentview" id="document-view">
                      <!-- add the link for Add Society page here -->
                      <div class="d-flex align-items-center"><span class="nav-link-text">View Document</span></div>
                    </a>

                  </li>
                
          </li>

        </ul>
      </div>
    </div>
    </li>


   

    <!-- Follow-Ups -->
    <li class="nav-item nav-links-animation">
      <div class="nav-item-wrapper">
        <a class="nav-link dropdown-indicator label-1" href="#nv-followups" role="button" data-bs-toggle="collapse">
          <div class="d-flex align-items-center">
            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
            <span class="nav-link-icon"><span class="uil uil-calendar-alt fs-8"></span></span>
            <span class="nav-link-text">Follow-Ups</span>
          </div>
        </a>
        <div class="parent-wrapper label-1">
          <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-followups">


            <!-- add followup -->


          
              <li class="nav-item">
                <a class="nav-link" href="/pms/PMS-files/pages/Follow-Ups/add-follow-up.php" id="add-follow-up">
                  <!-- add the link for Add Follow-Up page here -->
                  <div class="d-flex align-items-center"><span class="nav-link-text">Add Follow-Up</span></div>
                </a>
              </li>
           

            <!-- view followup -->


          
              <li class="nav-item">
                <a class="nav-link" href="/pms/PMS-files/pages/Follow-Ups/view-follow-up.php?tag=view-follow-up" id="view-follow-up">
                  <!-- add the link for View Follow-Ups page here -->
                    <div class="d-flex align-items-center"><span class="nav-link-text">View Follow-Ups <span class="badge badge-phoenix  badge-phoenix-danger"><span style="font-size: 10px;" class="badge-label">B</span></span></span></div>
                 
                </a>
              </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/pms/PMS-files/pages/Follow-Ups/manage-followup.php?tag=manage-follow-up" id="manage-follow-up">
                <!-- add the link for View Follow-Ups page here -->
                <div class="d-flex align-items-center"><span class="nav-link-text">Manage Follow Ups</span></div>
              </a>
            </li>





            <!-- <li class="nav-item">
                    <a class="nav-link" href="/PMS-files/pages/Follow-Ups/edit-follow-up.php?tag=edit-follow-up" id="edit-follow-up">
                      <div class="d-flex align-items-center"><span class="nav-link-text">Edit Follow-Up</span></div>
                    </a>
                  </li> -->
          </ul>
        </div>
      </div>
    </li>

    <!-- Projects -->
    <li class="nav-item nav-links-animation">
      <div class="nav-item-wrapper">
        <!-- <a class="nav-link dropdown-indicator label-1" href="#nv-projects" role="button" data-bs-toggle="collapse">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                  <span class="nav-link-icon"><span class="uil uil-folder fs-8"></span></span>
                  <span class="nav-link-text">Projects</span>
                </div>
              </a> -->
        <div class="parent-wrapper label-1">
          <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-projects">
            <li class="nav-item">
              <a class="nav-link" href="/pms/PMS-files/pages/Projects/create-project.php?tag=create-project" id="create-project">
                <!-- add the link for Create Project page here -->
                <div class="d-flex align-items-center"><span class="nav-link-text">Create Project</span></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <!-- add the link for View/Manage Projects page here -->
                <div class="d-flex align-items-center"><span class="nav-link-text">View/Manage Projects</span></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <!-- add the link for Completed Projects page here -->
                <div class="d-flex align-items-center"><span class="nav-link-text">Completed Projects</span></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </li>

    <!-- Tasks -->
    <li class="nav-item nav-links-animation">
      <div class="nav-item-wrapper">
        <!-- <a class="nav-link dropdown-indicator label-1" href="#nv-tasks" role="button" data-bs-toggle="collapse">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                  <span class="nav-link-icon"><span class="uil uil-clipboard fs-8"></span></span>
                  <span class="nav-link-text">Tasks</span>
                </div>
              </a> -->
        <div class="parent-wrapper label-1">
          <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-tasks">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <!-- add the link for Add Task page here -->
                <div class="d-flex align-items-center"><span class="nav-link-text">Add Task</span></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <!-- add the link for View/Manage Tasks page here -->
                <div class="d-flex align-items-center"><span class="nav-link-text">View/Manage Tasks</span></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </li>

    <!-- Document Management -->
    <!-- <li class="nav-item">
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="#" role="button">
                add the link for Document Management page here
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon"><span class="uil uil-file-alt fs-8"></span></span>
                  <span class="nav-link-text">Document Management</span>
                </div>
              </a>
            </div>
          </li> -->

    <!-- Settings -->

   
      <li class="nav-item nav-links-animation">
        <div class="nav-item-wrapper">
          <a class="nav-link dropdown-indicator label-1" href="#nv-settings" role="button" data-bs-toggle="collapse">
            <div class="d-flex align-items-center">
              <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
              <span class="nav-link-icon"><span class="uil uil-setting fs-8"></span></span>
              <span class="nav-link-text">Settings</span>
            </div>
          </a>
          <div class="parent-wrapper label-1">
            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-settings">
              <!-- Profile -->
              <li class="nav-item">
                <a class="nav-link" href="/pms/PMS-files/pages/Profile/profile.php?tag=profile" id="profile">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Profile</span></div>
                </a>
              </li>
              <!-- RBAC -->
              <li class="nav-item">
                <a class="nav-link" href="/pms/PMS-files/pages/RBAC/RBAC.php?tag=RBAC " id="RBAC">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Role-Based Access Control</span></div>
                </a>
              </li>
              <!-- Manage-Roles -->
              <li class="nav-item">
                <a class="nav-link" href="/pms/PMS-files/pages/RBAC/manage-role.php?tag=manage-role " id="manage-role">
                  <div class="d-flex align-items-center"><span class="nav-link-text">Manage role</span></div>
                </a>
              </li>
              <!-- Template Pages -->
              <li class="nav-item">
                <a class="nav-link dropdown-indicator label-1" href="#nv-template-pages" role="button" data-bs-toggle="collapse">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                    <span class="nav-link-icon"><span class="uil uil-folder fs-8"></span></span>
                    <span class="nav-link-text">Template Pages</span>
                  </div>
                </a>
                <div class="parent-wrapper label-1">
                  <ul class="nav collapse parent" data-bs-parent="#nv-settings" id="nv-template-pages">
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/ward/view-manage-ward.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Ward</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Services/View-Manage-services.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Service</span></div>
                      </a>
                    </li>
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="/pms/PMS-files/pages/Region/view-manage-region.php">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Manage Regions</span></div>
                          </a>
                        </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Sources/View-Manage-Sources.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Sources</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../Property-Type/View-Manage-propertytypes.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Property Types</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Agencies/View-Manage-Agencies.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Agencies</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Builders/view-builders.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Builders</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Competitors/manage-competitors.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Competitors</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/pms/PMS-files/pages/Reservations/view-manage-reservation.php">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Manage Reservations</span></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </li>



    </ul>
    </div>
    </div>

    <!-- Footer -->
    <div class="navbar-vertical-footer">
      <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
        <span class="uil uil-left-arrow-to-left fs-8"></span>
        <span class="uil uil-arrow-from-right fs-8"></span>
        <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
      </button>
    </div>
  </nav>

  <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="https://www.theveenagroup.com/">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="/pms/assets/img/icons/Veenagrp.png" alt="" width="170" height="70" />
              <h5 class="logo-text ms-2 d-none d-sm-block"></h5>
            </div>
          </div>
        </a>
      </div>

      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item me-1">
          <a class="nav-link "
            href="/pms/PMS-files/pages/updates/updates.php">
            <i class="fa-regular fa-bell"></i>

          </a>
        </li>

        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
          <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                </div>
              </div>
              <div>Notifications will be displayed here</div>
              <div class="card-footer p-0 border-top border-translucent border-0">
                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
              </div>
            </div>
          </div> -->

        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
              <img class="rounded-circle " src="../../assets/img/team/40x40/57.webp" alt="" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="../../assets/img/team/72x72/57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                </div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="/pms/PMS-files/pages/Profile/profile.php?tag=profile"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                </ul>
                <div class="d-flex justify-content-center align-items-center">
                  <button class="btn btn-primary btn-sm">Sign out</button>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-translucent">
                <ul class="nav d-flex flex-column my-3">
                </ul>
                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="/pms/PMS-files/pages/Profile-footer/privacy.php">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="/pms/PMS-files/pages/Profile-footer/terms.php">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="/pms/PMS-files/pages/Profile-footer/cookies.php">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <script>
    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
    var navbarPosition = window.config.config.phoenixNavbarPosition;
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTop = document.querySelector('#navbarTop');
    var topNavSlim = document.querySelector('#topNavSlim');
    var navbarTopSlim = document.querySelector('#navbarTopSlim');
    var navbarCombo = document.querySelector('#navbarCombo');
    var navbarComboSlim = document.querySelector('#navbarComboSlim');
    var dualNav = document.querySelector('#dualNav');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarPosition === 'dual-nav') {
      topNavSlim?.remove();
      navbarTop?.remove();
      navbarTopSlim?.remove();
      navbarCombo?.remove();
      navbarComboSlim?.remove();
      navbarDefault?.remove();
      navbarVertical?.remove();
      dualNav.removeAttribute('style');
      document.documentElement.setAttribute('data-navigation-type', 'dual');

    } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
      navbarDefault?.remove();
      navbarTop?.remove();
      navbarTopSlim?.remove();
      navbarCombo?.remove();
      navbarComboSlim?.remove();
      topNavSlim.style.display = 'block';
      navbarVertical.style.display = 'inline-block';
      document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
      navbarDefault?.remove();
      navbarVertical?.remove();
      navbarTop?.remove();
      topNavSlim?.remove();
      navbarCombo?.remove();
      navbarComboSlim?.remove();
      dualNav?.remove();
      navbarTopSlim.removeAttribute('style');
      document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
      navbarDefault?.remove();
      navbarTop?.remove();
      topNavSlim?.remove();
      navbarCombo?.remove();
      navbarTopSlim?.remove();
      dualNav?.remove();
      navbarComboSlim.removeAttribute('style');
      navbarVertical.removeAttribute('style');
      document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
      navbarDefault?.remove();
      topNavSlim?.remove();
      navbarVertical?.remove();
      navbarTopSlim?.remove();
      navbarCombo?.remove();
      navbarComboSlim?.remove();
      dualNav?.remove();
      navbarTop.removeAttribute('style');
      document.documentElement.setAttribute('data-navigation-type', 'horizontal');
    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
      topNavSlim?.remove();
      navbarTop?.remove();
      navbarTopSlim?.remove();
      navbarDefault?.remove();
      navbarComboSlim?.remove();
      dualNav?.remove();
      navbarCombo.removeAttribute('style');
      navbarVertical.removeAttribute('style');
      document.documentElement.setAttribute('data-navigation-type', 'combo');
    } else {
      topNavSlim?.remove();
      navbarTop?.remove();
      navbarTopSlim?.remove();
      navbarCombo?.remove();
      navbarComboSlim?.remove();
      dualNav?.remove();
      navbarDefault.removeAttribute('style');
      navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
      navbarTop.setAttribute('data-navbar-appearance', 'darker');
    }

    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
      navbarVertical.setAttribute('data-navbar-appearance', 'darker');
    }
  </script>

  <script>
    // Function to get query parameter by name
    function getQueryParam(name) {
      const params = new URLSearchParams(window.location.search);
      return params.get(name);
    }

    // Function to fetch the element by ID and update its class
    function updateClassById() {
      const tagValue = getQueryParam('tag');

      if (tagValue) {
        // Find the element with the ID that matches the tag value
        const element = document.getElementById(tagValue);

        if (element) {
          // Update the class of the found element
          element.className = 'dropdown-item active nav-link active';

          // alert('Class updated to: ' + element.className);
        } else {
          alert('No element found with ID: ' + tagValue);
        }
      }
    }

    // Run the function when the page loads
    window.onload = updateClassById;
  </script>

  <script>
    //GSAP Animation
    

    window.addEventListener("DOMContentLoaded", () => {
        gsap.from(".animation-nav", {
            duration: 0.8,     // animation duration in seconds
            opacity: 0,        // start from transparent
            y: 50,             // move up from 50px
            ease: "power3.out" // easing function
        });

        // Animate each row with a slight delay between them
        gsap.from(".nav-links-animation", {
            opacity: 0,
            x: -30,
            stagger: 0.1,
            delay: 0.3,
            ease: "power2.out"
        });
    });

  </script>

</body>

</html>