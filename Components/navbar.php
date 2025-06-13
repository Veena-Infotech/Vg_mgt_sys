<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>



  <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
          <li class="nav-item">
            <!----Dashboard--->
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-dashboard" role="button"
                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-dashboard">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                  </div>
                  <span class="nav-link-icon"><span class="fas fa-user-tie"></span></span>
                  <span class="nav-link-text">Dashboard</span>
                  <span class="fa-solid text-info ms-1" style="font-size: 6px"></span>
                </div>
              </a>

              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent " data-bs-parent="#navbarVerticalCollapse" id="nv-dashboard">
                  <li class="collapsed-nav-item-title d-none">Dashboard</li>

                  <li class="nav-item">
                    <a class="nav-link" href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="nv-dashboard">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="nav-link-text">Admin Dashboard</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="nv-dashboard">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="nav-link-text">Employee Dashboard</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!---VMS-->
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-vms" role="button"
                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-vms">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                  </div>
                  <span class="nav-link-icon"><i class="fa-solid fa-user"></i></span>
                  <span class="nav-link-text">VMS</span>
                  <span class="fa-solid text-info ms-1" style="font-size: 6px"></span>
                </div>
              </a>

              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent " data-bs-parent="#navbarVerticalCollapse" id="nv-vms">
                  <li class="collapsed-nav-item-title d-none">VMS</li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/New-Registration.php?tag=new-reg" id="new-reg">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-user-plus"></i></span>
                        <span class="nav-link-text">New Registration</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/LobbyManagement.php?tag=lobby" id="lobby">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-users-line"></i></span>
                        <span class="nav-link-text">Lobby Management</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/Employee_Side_Meeting.php?tag=emp-meet" id="emp-meet">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-handshake"></i></span>
                        <span class="nav-link-text">Employee Side Meeting</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/MeetingHistory.php?tag=recp-meet" id="recp-meet">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-regular fa-handshake"></i></span>
                        <span class="nav-link-text">Receptionist Side Meeting..</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/Payment-management.php?tag=payment" id="payment">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">Payment Management</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/emp_attendence.php?tag=emp-att" id="emp-att">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">Employee Attendance</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/employee_dashboard.php?tag=emp-dash" id="emp-dash">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">Employee Dashboard</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/get_email.php?tag=get-email" id="get-email">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">Get Email</span>
                      </div>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/Receptionist-dashboard.php?tag=rec-dash" id="rec-dash">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">Receptionist Dashboard</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/view_tasks.php?tag=view-task" id="view-task">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">View Task</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/vms/payment_verification.php?tag=payment_ver" id="payment_ver">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fa-solid fa-money-bill"></i></span>
                        <span class="nav-link-text">Payment Verification</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- parent pages-->
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-ems" role="button"
                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-ems">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                  </div>
                  <span class="nav-link-icon"><span class="fas fa-user-tie"></span></span>
                  <span class="nav-link-text">EMS</span>
                  <span class="fa-solid text-info ms-1" style="font-size: 6px"></span>
                </div>
              </a>

              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent " data-bs-parent="#navbarVerticalCollapse" id="nv-ems">
                  <li class="collapsed-nav-item-title d-none">EMS</li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/attendence_track.php?tag=attendance" id="attendance">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="nav-link-text">Attendance Track</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/listemployee.php?tag=list-emp" id="list-emp">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-calendar-check"></i></span>
                        <span class="nav-link-text">List Employee</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/salary_slip_generator.php?tag=slip" id="slip">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-handshake"></i></span>
                        <span class="nav-link-text">Salary Slip Generator</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/leave_request.php?tag=leave" id="leave">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Leave Request</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/leave_history.php?tag=leave-history" id="leave-history">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Leave History</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/pay_slip_admin.php?tag=psa" id="psa">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Payslip Admin</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/pay_slip_emp.php?tag=psp" id="psp">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Payslip Employee</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/registrationform.php?tag=reg-form" id="reg-form">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Registration Form</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/self_attendence_track.php?tag=att-track" id="att-track">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Self Attendance Track</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/ems/leave_a-r_admin.php?tag=task" id="task">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">Leave A-R Admin</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>


            </div>
            <!----FMS MODULE--->
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-fms" role="button"
                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-fms">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                  </div>
                  <span class="nav-link-icon"><span class="fas fa-user-tie"></span></span>
                  <span class="nav-link-text">FMS</span>
                  <span class="fa-solid text-info ms-1" style="font-size: 6px"></span>
                </div>
              </a>

              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent " data-bs-parent="#navbarVerticalCollapse" id="nv-fms">
                  <li class="collapsed-nav-item-title d-none">FMS</li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Fms/index_table.php?tag=FMS" id="FMS">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">FMS</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!---DIMS-->
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-dims" role="button"
                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-dims">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                  </div>
                  <span class="nav-link-icon"><span class="fas fa-user-tie"></span></span>
                  <span class="nav-link-text">DIMS</span>
                  <span class="fa-solid text-info ms-1" style="font-size: 6px"></span>
                </div>
              </a>

              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent " data-bs-parent="#navbarVerticalCollapse" id="nv-dims">
                  <li class="collapsed-nav-item-title d-none">DIMS</li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/DIMS/index.php?tag=DIMS" id="DIMS">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">DIMS</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!---Template Pages-->

            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-template" role="button"
                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-template">
                <div class="d-flex align-items-center">
                  <div class="dropdown-indicator-icon-wrapper">
                    <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                  </div>
                  <span class="nav-link-icon"><span class="fas fa-user-tie"></span></span>
                  <span class="nav-link-text">Template Pages</span>
                  <span class="fa-solid text-info ms-1" style="font-size: 6px"></span>
                </div>
              </a>

              <div class="parent-wrapper label-1">
                <ul class="nav collapse parent " data-bs-parent="#navbarVerticalCollapse" id="nv-template">
                  <li class="collapsed-nav-item-title d-none">Template Pages</li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view_manage_landlord.php?tag=view-landlord" id="view-landlord">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View Manage Landlord</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view_proposal.php?tag=view-proposal" id="view-proposal">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View Proposal</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view_society.php?tag=view-society" id="view-society">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View Society</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-builders.php?tag=view-builders" id="view-builders">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View Builders</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-agencies.php?tag=view-agencies" id="view-agencies">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage Agencies</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-competitors.php?tag=view-competitors" id="view-competitors">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage Competition</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-propertytypes.php?tag=view-propertytypes" id="view-propertytypes">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage property Types</span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-reservation.php?tag=view-reservation" id="view-reservation">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage Reservation </span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-service.php?tag=view-services" id="view-services">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage Service </span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-sources.php?tag=view-sources" id="view-sources">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage sources </span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-status.php?tag=view-status" id="view-status">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage Status </span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-manage-ward.php?tag=view-ward" id="view-ward">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View / Manage wardward </span>
                      </div>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/Vg_mgt_sys/VgmsModules/Templates/view-projecttype.php?tag=view-projecttype" id="view-projecttype">
                      <div class="d-flex align-items-center">
                        <span class="me-2"><i class="fas fa-tasks"></i></span>
                        <span class="nav-link-text">View Project Type </span>
                      </div>
                    </a>
                  </li>


                  <!---Template pages ends--->


                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </li>

    </ul>
    </div>
    </div>
    <div class="navbar-vertical-footer"><button
        class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
          class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span
          class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
  </nav>
  <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
          aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
              class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="index.html">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="/VG_MGT_SYS/assets/img/logos/logo.png" alt="phoenix"
                width="180" />
              <h5 class="logo-text ms-2 d-none d-sm-block"></h5>
            </div>
          </div>
        </a>
      </div>
      <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
        style="width:25rem;">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
            class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
            placeholder="Search..." aria-label="Search" />
          <span class="fas fa-search search-box-icon"></span>
        </form>
        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
          data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
        <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
          <div class="scrollbar-overlay" style="max-height: 30rem;">
            <div class="list pb-3">
              <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                  class="text-body-quaternary">results</span></h6>
              <hr class="my-0" />
              <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently
                Searched </h6>
              <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left"
                        data-fa-transform="shrink-2"></span> Store Macbook</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left"
                        data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                  </div>
                </a>
              </div>
              <hr class="my-0" />
              <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products
              </h6>
              <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                  href="apps/e-commerce/landing/product-details.html">
                  <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3"
                      src="assets/img/products/60x60/3.png" alt="" /></div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                        class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span>
                    </p>
                  </div>
                </a>
                <a class="dropdown-item py-2 d-flex align-items-center"
                  href="apps/e-commerce/landing/product-details.html">
                  <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/products/60x60/3.png"
                      alt="" /></div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                        class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                  </div>
                </a>
              </div>
              <hr class="my-0" />
              <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick
                Links</h6>
              <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body"
                        data-fa-transform="shrink-2"></span> Support MacBook House</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body"
                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                  </div>
                </a>
              </div>
              <hr class="my-0" />
              <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files
              </h6>
              <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body"
                        data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body"
                        data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body"
                        data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                  </div>
                </a>
              </div>
              <hr class="my-0" />
              <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members
              </h6>
              <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                  <div class="avatar avatar-l status-online  me-2 text-body">
                    <img class="rounded-circle " src="assets/img/team/40x40/10.webp" alt="" />
                  </div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                    <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                  </div>
                </a>
                <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                  <div class="avatar avatar-l  me-2 text-body">
                    <img class="rounded-circle " src="assets/img/team/40x40/12.webp" alt="" />
                  </div>
                  <div class="flex-1">
                    <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                    <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                  </div>
                </a>
              </div>
              <hr class="my-0" />
              <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related
                Searches</h6>
              <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"><span
                        class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in
                      the Web MacBook</div>
                  </div>
                </a>
                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                  <div class="d-flex align-items-center">
                    <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body"
                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                  </div>
                </a>
              </div>
            </div>
            <div class="text-center">
              <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
            </div>
          </div>
        </div>
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input
              class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme"
              value="dark" id="themeControlToggle" /><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
              style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
              style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block"
              style="height:20px;width:20px;"><span data-feather="bell"
                style="height:20px;width:20px;"></span></span></a>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal"
                    type="button">Mark all as read</button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="../assets/img/team/40x40/30.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:41 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3">
                          <div class="avatar-name rounded-circle"><span>J</span></div>
                        </div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>📅</span>Created an event.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:20 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                            src="\VGMS\assets\img\team\72x72\57.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>👍</span>Liked your comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">9:30 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="../assets/img/team/40x40/57.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">9:11 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="assets/img/team/40x40/59.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:58 PM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="assets/img/team/40x40/58.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>👍</span>Liked your comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:18 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-translucent border-0">
                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                    href="pages/notifications.html">Notification history</a></div>
              </div>
            </div>
          </div>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
              viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
            aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-body-emphasis position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li> -->
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
              <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
            aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                </div>
                <!-- <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div> -->
              </div>
              <div class="overflow-auto scrollbar" style="height: 4.5rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item">
                    <a href="/VGMS/employee-pages/employee-profile.php?id=empId" class="nav-link px-3 d-block">
                      <span class="me-2 text-body align-bottom" data-feather="user"></span>Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3 d-block" href="#!">
                      <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy
                    </a>
                  </li>
                </ul>

              </div>
              <!-- <div class="card-footer p-0 border-top border-translucent"> -->
              <!-- <ul class="nav d-flex flex-column my-3"> -->
              <!-- <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li> -->
              <!-- </ul> -->
              <hr />

              <div class="px-3">
                <a class="btn btn-phoenix-secondary d-flex flex-center w-100 mb-2" href="/VGMS/index.php?action=logout">
                  <span class="me-2" data-feather="log-out"></span>Sign out
                </a>
              </div>

              <!-- <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div> -->
              <!-- </div> -->
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
          aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
              class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="index.html">phoenix <span
            class="text-body-highlight d-none d-sm-inline">slim</span></a>
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
              class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
              data-theme-control="phoenixTheme" value="dark" /><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon"
                  data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon"
                  data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label></div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
              class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search"
                style="height:12px;width:12px;"></span></span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block"
              style="height:12px;width:12px;"><span data-feather="bell"
                style="height:12px;width:12px;"></span></span></a>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal"
                    type="button">Mark all as read</button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="assets/img/team/40x40/30.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:41 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3">
                          <div class="avatar-name rounded-circle"><span>J</span></div>
                        </div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>📅</span>Created an event.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:20 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                            src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>👍</span>Liked your comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">9:30 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="../assets/img/team/40x40/57.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">9:11 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="assets/img/team/40x40/59.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:58 PM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                      <div class="d-flex">
                        <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                            src="assets/img/team/40x40/58.webp" alt="" /></div>
                        <div class="flex-1 me-sm-3">
                          <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                          <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                              class='me-1 fs-10'>👍</span>Liked your comment.<span
                              class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                          <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                              class="fw-bold">10:18 AM </span>August 7,2021</p>
                        </div>
                      </div>
                      <div class="dropdown notification-dropdown"><button
                          class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                          data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                          data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                        <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-translucent border-0">
                <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                    href="pages/notifications.html">Notification history</a></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10"
              viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
            aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-body-emphasis position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                    </a></div>
                  <div class="col-4"><a
                      class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                      <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
            aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span
                class="fa-solid fa-chevron-down fs-10"></span></span></a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
            aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                </div>
                <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                    placeholder="Update your status" /></div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                        class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                        class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                        class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                        class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a>
                  </li>
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                        class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                        class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                </ul>
              </div>
              <div class="card-footer p-0 border-top border-translucent">
                <ul class="nav d-flex flex-column my-3">
                  <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                        class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr />
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                      class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1"
                    href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                    class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
    <div class="navbar-logo">
      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center"><img src="/VG_MGT_SYS/assets/img/logos/logo.png" alt="phoenix"
              width="180" />
            <h5 class="logo-text ms-2 d-none d-sm-block"></h5>
          </div>
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
      id="navbarTopCollapse">
      <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-users me-2"></span>Employee
          </a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="dashboard">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-tachometer-alt me-2"></span>Dashboard
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/emp-attendance.php?tag=attendance" id="attendance">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-calendar-check me-2"></span>Attendance
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/task-page.php?tag=task" id="task">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-tasks me-2"></span>Project Tasks
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-icon-wait px-2"><input
            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme"
            value="dark" id="themeControlToggle" /><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
            style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
            style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
            data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block"
            style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
          id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
          <div class="card position-relative border-0">
            <div class="card-header p-2">
              <div class="d-flex justify-content-between">
                <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal"
                  type="button">Mark all as read</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="scrollbar-overlay" style="height: 27rem;">
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/30.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3">
                        <div class="avatar-name rounded-circle"><span>J</span></div>
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>📅</span>Created an event.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="../assets/img/team/40x40/57.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/59.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/58.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-0 border-top border-translucent border-0">
              <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                  href="pages/notifications.html">Notification history</a></div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
            viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
          aria-labelledby="navbarDropdownNindeDots">
          <div class="card bg-body-emphasis position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
              <div class="row text-center align-items-center gx-0 gy-0">
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
          data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-l ">
            <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
          aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                  <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                </div>
                <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
              </div>
              <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                  placeholder="Update your status" /></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                      class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a>
                </li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top border-translucent">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
              </ul>
              <hr />
              <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                    class="me-2" data-feather="log-out"> </span>Sign out</a></div>
              <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1"
                  href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                  class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
    style="display:none;">
    <div class="navbar-logo">
      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
      <a class="navbar-brand navbar-brand" href="index.html">phoenix <span
          class="text-body-highlight d-none d-sm-inline">slim</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
      id="navbarTopCollapse">
      <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-users me-2"></span>Employee
          </a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="dashboard">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-tachometer-alt me-2"></span>Dashboard
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/emp-attendance.php?tag=attendance" id="attendance">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-calendar-check me-2"></span>Attendance
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/task-page.php?tag=task" id="task">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-tasks me-2"></span>Project Tasks
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
            class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
            data-theme-control="phoenixTheme" value="dark" /><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
              class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon"
                data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
              class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon"
                data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label></div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
            class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search"
              style="height:12px;width:12px;"></span></span></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
          data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block"
            style="height:12px;width:12px;"><span data-feather="bell" style="height:12px;width:12px;"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
          id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
          <div class="card position-relative border-0">
            <div class="card-header p-2">
              <div class="d-flex justify-content-between">
                <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal"
                  type="button">Mark all as read</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="scrollbar-overlay" style="height: 27rem;">
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/30.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3">
                        <div class="avatar-name rounded-circle"><span>J</span></div>
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>📅</span>Created an event.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="../assets/img/team/40x40/57.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/59.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/58.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-0 border-top border-translucent border-0">
              <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                  href="pages/notifications.html">Notification history</a></div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10"
            viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
          aria-labelledby="navbarDropdownNindeDots">
          <div class="card bg-body-emphasis position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
              <div class="row text-center align-items-center gx-0 gy-0">
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!"
          role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
          aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span
              class="fa-solid fa-chevron-down fs-10"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
          aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                  <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                </div>
                <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
              </div>
              <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                  placeholder="Update your status" /></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                      class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a>
                </li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top border-translucent">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
              </ul>
              <hr />
              <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                    class="me-2" data-feather="log-out"> </span>Sign out</a></div>
              <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1"
                  href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                  class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo"
    data-move-target="#navbarVerticalNav" style="display:none;">
    <div class="navbar-logo">
      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
      <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center"><img src="/VG_MGT_SYS/assets/img/logos/logo.png" alt="phoenix"
              width="180" />
            <h5 class="logo-text ms-2 d-none d-sm-block"></h5>
          </div>
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
      id="navbarTopCollapse">
      <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
              class="uil fs-8 me-2 uil-chart-pie"></span>Employee</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li><a class="dropdown-item " href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="dashboard">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>Dashboard
                </div>
              </a></li>
            <li><a class="dropdown-item" href="/VGMS/employee-pages/emp-attendance.php">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Attendance
                </div>
              </a></li>
            <li><a class="dropdown-item"
                href="/VGMS/prirum.github.io/phoenix/v1.19.0/employee-pages/task-page.php?tag=task" id="task">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
              </a></li>
            <!-- <li><a class="dropdown-item" href="dashboard/travel-agency.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="briefcase"></span>Travel agency</div>
                  </a></li> -->
            <!-- <li><a class="dropdown-item" href="apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li> -->
          </ul>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-icon-wait px-2"><input
            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme"
            value="dark" id="themeControlToggle" /><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
            style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
            style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
            data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block"
            style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
          id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
          <div class="card position-relative border-0">
            <div class="card-header p-2">
              <div class="d-flex justify-content-between">
                <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal"
                  type="button">Mark all as read</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="scrollbar-overlay" style="height: 27rem;">
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/30.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3">
                        <div class="avatar-name rounded-circle"><span>J</span></div>
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>📅</span>Created an event.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="../assets/img/team/40x40/57.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/59.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/58.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-0 border-top border-translucent border-0">
              <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                  href="pages/notifications.html">Notification history</a></div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
            viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
          aria-labelledby="navbarDropdownNindeDots">
          <div class="card bg-body-emphasis position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
              <div class="row text-center align-items-center gx-0 gy-0">
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
          data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-l ">
            <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
          aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                  <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                </div>
                <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
              </div>
              <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                  placeholder="Update your status" /></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                      class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a>
                </li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top border-translucent">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
              </ul>
              <hr />
              <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                    class="me-2" data-feather="log-out"> </span>Sign out</a></div>
              <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1"
                  href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                  class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim"
    data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
    <div class="navbar-logo">
      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
            class="toggle-line"></span></span></button>
      <a class="navbar-brand navbar-brand" href="index.html">phoenix <span
          class="text-body-highlight d-none d-sm-inline">slim</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
      id="navbarTopCollapse">
      <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-users me-2"></span>Employee
          </a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="dashboard">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-tachometer-alt me-2"></span>Dashboard
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/emp-attendance.php?tag=attendance" id="attendance">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-calendar-check me-2"></span>Attendance
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="/VGMS/employee-pages/task-page.php?tag=task" id="task">
                <div class="dropdown-item-wrapper">
                  <span class="fas fa-tasks me-2"></span>Project Tasks
                </div>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      </li>

      </ul>
      </li>
      </ul>

      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
            class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
            data-theme-control="phoenixTheme" value="dark" /><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
              class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon"
                data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label><label
            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
              class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon"
                data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label></div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
            class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search"
              style="height:12px;width:12px;"></span></span></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
          data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block"
            style="height:12px;width:12px;"><span data-feather="bell" style="height:12px;width:12px;"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
          id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
          <div class="card position-relative border-0">
            <div class="card-header p-2">
              <div class="d-flex justify-content-between">
                <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal"
                  type="button">Mark all as read</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="scrollbar-overlay" style="height: 27rem;">
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/30.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:41 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3">
                        <div class="avatar-name rounded-circle"><span>J</span></div>
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>📅</span>Created an event.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:20 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                          src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="../assets/img/team/40x40/57.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/59.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:58 PM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                          src="assets/img/team/40x40/58.webp" alt="" /></div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                            class='me-1 fs-10'>👍</span>Liked your comment.<span
                            class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                            class="fw-bold">10:18 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown"><button
                        class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                        data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-0 border-top border-translucent border-0">
              <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                  href="pages/notifications.html">Notification history</a></div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
          aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10"
            viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
          aria-labelledby="navbarDropdownNindeDots">
          <div class="card bg-body-emphasis position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
              <div class="row text-center align-items-center gx-0 gy-0">
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                  </a></div>
                <div class="col-4"><a
                    class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                    href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!"
          role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
          aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span
              class="fa-solid fa-chevron-down fs-10"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
          aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                  <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                </div>
                <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
              </div>
              <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                  placeholder="Update your status" /></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                      class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a>
                </li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top border-translucent">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                      class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
              </ul>
              <hr />
              <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                    class="me-2" data-feather="log-out"> </span>Sign out</a></div>
              <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1"
                  href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                  class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;">
    <div class="w-100">
      <div class="d-flex flex-between-center dual-nav-first-layer">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="/VG_MGT_SYS/assets/img/logos/logo.png" alt="phoenix"
                  width="180" />
                <h5 class="logo-text ms-2 d-none d-sm-block"></h5>
              </div>
            </div>
          </a>
        </div>
        <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
          style="width:25rem;">
          <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
              class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
              placeholder="Search..." aria-label="Search" />
            <span class="fas fa-search search-box-icon"></span>
          </form>
          <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
            data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
          <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
            <div class="scrollbar-overlay" style="max-height: 30rem;">
              <div class="list pb-3">
                <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span
                    class="text-body-quaternary">results</span></h6>
                <hr class="my-0" />
                <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                  Recently Searched </h6>
                <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left"
                          data-fa-transform="shrink-2"></span> Store Macbook</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left"
                          data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                    </div>
                  </a>
                </div>
                <hr class="my-0" />
                <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">
                  Products</h6>
                <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                    href="apps/e-commerce/landing/product-details.html">
                    <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3"
                        src="assets/img/products/60x60/3.png" alt="" /></div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                      <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                          class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB
                          Storage</span></p>
                    </div>
                  </a>
                  <a class="dropdown-item py-2 d-flex align-items-center"
                    href="apps/e-commerce/landing/product-details.html">
                    <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/products/60x60/3.png"
                        alt="" /></div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                      <p class="fs-10 mb-0 d-flex text-body-tertiary"><span
                          class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                    </div>
                  </a>
                </div>
                <hr class="my-0" />
                <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick
                  Links</h6>
                <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body"
                          data-fa-transform="shrink-2"></span> Support MacBook House</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body"
                          data-fa-transform="shrink-2"></span> Store MacBook″</div>
                    </div>
                  </a>
                </div>
                <hr class="my-0" />
                <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files
                </h6>
                <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body"
                          data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body"
                          data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body"
                          data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                    </div>
                  </a>
                </div>
                <hr class="my-0" />
                <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members
                </h6>
                <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                    <div class="avatar avatar-l status-online  me-2 text-body">
                      <img class="rounded-circle " src="assets/img/team/40x40/10.webp" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                      <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                    </div>
                  </a>
                  <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                    <div class="avatar avatar-l  me-2 text-body">
                      <img class="rounded-circle " src="assets/img/team/40x40/12.webp" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                      <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                    </div>
                  </a>
                </div>
                <hr class="my-0" />
                <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related
                  Searches</h6>
                <div class="py-2"><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"><span
                          class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in
                        the Web MacBook</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body"
                          data-fa-transform="shrink-2"></span> Store MacBook″</div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="text-center">
                <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
              </div>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input
                class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
                class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block"
                style="height:20px;width:20px;"><span data-feather="bell"
                  style="height:20px;width:20px;"></span></span></a>
            <div
              class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret"
              id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notifications</h5><button
                      class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button
                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs-10'>📅</span>Created an event.<span
                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button
                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                              src="assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs-10'>👍</span>Liked your comment.<span
                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button
                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button
                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs-10'>👤</span>Tagged you in a comment.<span
                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button
                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs-10'>👍</span>Liked your comment.<span
                                class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="dropdown notification-dropdown"><button
                            class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button"
                            data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"
                            data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder"
                      href="pages/notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
                viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border"
              aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                        href="#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
              aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="\VGMS\assets\img\team\72x72\57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                      placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                          class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span
                          class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                          class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                          class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                          class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                          class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span
                          class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a>
                    </li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                        class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1"
                      href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                      class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse navbar-top-collapse justify-content-center" id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <span class="fas fa-users me-2"></span>Employee
            </a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li>
                <a class="dropdown-item" href="/VGMS/employee-pages/dashboard.php?tag=dashboard" id="dashboard">
                  <div class="dropdown-item-wrapper">
                    <span class="fas fa-tachometer-alt me-2"></span>Dashboard
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="/VGMS/employee-pages/emp-attendance.php?tag=attendance" id="attendance">
                  <div class="dropdown-item-wrapper">
                    <span class="fas fa-calendar-check me-2"></span>Attendance
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="/VGMS/employee-pages/task-page.php?tag=task" id="task">
                  <div class="dropdown-item-wrapper">
                    <span class="fas fa-tasks me-2"></span>Project Tasks
                  </div>
                </a>
              </li>
            </ul>
          </li>

        </ul>

        </ul>
      </div>
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

</body>

</html>