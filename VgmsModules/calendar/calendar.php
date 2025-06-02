<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Starter code</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/css/theme-rtl.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <?php include '../../Components/navbar.php'; ?>
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
        <div class="content">
            <div class="row g-0 mb-4 align-items-center">
                <div class="col-5 col-md-6">
                    <h4 class="mb-0 text-body-emphasis fw-bold fs-md-6"><span class="calendar-day d-block d-md-inline mb-1"></span><span class="px-3 fw-thin text-body-quaternary d-none d-md-inline">|</span><span class="calendar-date"></span></h4>
                </div>
                <div class="col-7 col-md-6 d-flex justify-content-end"><button class="btn btn-link text-body px-0 me-2 me-md-4"><span class="fa-solid fa-sync fs-10 me-2"></span><span class="d-none d-md-inline">Sync Now</span></button><button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus pe-2 fs-10"></span>Add new task </button></div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 border-y border-translucent">
                <div class="row py-3 gy-3 gx-0">
                    <div class="col-6 col-md-4 order-1 d-flex align-items-center"><button class="btn btn-sm btn-phoenix-primary px-4" data-event="today">Today</button></div>
                    <div class="col-12 col-md-4 order-md-1 d-flex align-items-center justify-content-center"><button class="btn icon-item icon-item-sm shadow-none text-body-emphasis p-0" type="button" data-event="prev" title="Previous"><span class="fas fa-chevron-left"></span></button>
                        <h3 class="px-3 text-body-emphasis fw-semibold calendar-title mb-0"> </h3><button class="btn icon-item icon-item-sm shadow-none text-body-emphasis p-0" type="button" data-event="next" title="Next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                    <div class="col-6 col-md-4 ms-auto order-1 d-flex justify-content-end">
                        <div>
                            <div class="btn-group btn-group-sm" role="group"><button class="btn btn-phoenix-secondary active-view" data-fc-view="dayGridMonth">Month</button><button class="btn btn-phoenix-secondary" data-fc-view="timeGridWeek">Week</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calendar-outline mt-6 mb-9" id="appCalendar"></div>
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <!-- Footer -->
                    <?php include("../../Components/footer.php"); ?>
                </div>
            </footer>
        </div>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15 rounded-pill">
                    <div class="modal-body p-0">
                        <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                                <div class="scrollbar-overlay" style="max-height: 30rem;">
                                    <div class="list pb-3">
                                        <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center" href="e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">30 Sep at 12:30 PM</span></p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                                                <div class="avatar avatar-l status-online  me-2 text-body">
                                                    <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                                                <div class="avatar avatar-l  me-2 text-body">
                                                    <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                                                    <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="my-0" />
                                        <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                                        <div class="py-2"><a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="eventDetailsModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border border-translucent"></div>
            </div>
        </div>
        <div class="modal fade" id="addEventModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content border border-translucent">
                    <form id="addEventForm" autocomplete="off">
                        <div class="modal-header px-card border-0">
                            <div class="w-100 d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="mb-0 lh-sm text-body-highlight">Add new</h5>
                                    <div class="mt-2">
                                        <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio1" type="radio" name="calendarTask" checked="checked" /><label class="form-check-label" for="inlineRadio1">Event</label></div>
                                        <div class="form-check form-check-inline"> <input class="form-check-input" id="inlineRadio2" type="radio" name="calendarTask" /><label class="form-check-label" for="inlineRadio2">Task</label></div>
                                    </div>
                                </div><button class="btn p-1 fs-10 text-body" type="button" data-bs-dismiss="modal" aria-label="Close">DISCARD </button>
                            </div>
                        </div>
                        <div class="modal-body p-card py-0">
                            <div class="form-floating mb-3"><input class="form-control" id="eventTitle" type="text" name="title" required="required" placeholder="Event title" /><label for="eventTitle">Title</label></div>
                            <div class="form-floating mb-5"><select class="form-select" id="eventLabel" name="label">
                                    <option value="primary" selected="selected">Business</option>
                                    <option value="secondary">Personal</option>
                                    <option value="success">Meeting</option>
                                    <option value="danger">Birthday</option>
                                    <option value="info">Report</option>
                                    <option value="warinng">Must attend</option>
                                </select><label for="eventLabel">Label</label></div>
                            <div class="flatpickr-input-container mb-3">
                                <div class="form-floating"><input class="form-control datetimepicker" id="eventStartDate" type="text" name="startDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"disableMobile":true,"enableTime":"true","dateFormat":"Y-m-d H:i"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span><label class="ps-6" for="eventStartDate">Starts at</label></div>
                            </div>
                            <div class="flatpickr-input-container mb-3">
                                <div class="form-floating"><input class="form-control datetimepicker" id="eventEndDate" type="text" name="endDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"disableMobile":true,"enableTime":"true","dateFormat":"Y-m-d H:i"}' /><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span><label class="ps-6" for="eventEndDate">Ends at</label></div>
                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="eventAllDay" name="allDay" /><label class="form-check-label" for="eventAllDay">All day event </label></div>
                            <div class="form-floating my-5"><textarea class="form-control" id="eventDescription" placeholder="Leave a comment here" name="description" style="height: 128px"></textarea><label for="eventDescription">Description</label></div>
                            <div class="form-floating mb-3"><select class="form-select" id="eventRepetition" name="repetition">
                                    <option value="" selected="selected">No Repeat</option>
                                    <option value="daily">Daily </option>
                                    <option value="deekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="dailyExceptHolidays">Daily (except holidays)</option>
                                    <option value="custom">Custom</option>
                                </select><label for="eventRepetition">Repetition</label></div>
                            <div class="form-floating mb-3"><select class="form-select" id="eventReminder" name="reminder">
                                    <option value="" selected="selected">30 minutes earlier</option>
                                    <option value="">8 am on the day</option>
                                    <option value="">8 am on the day before</option>
                                    <option value="">2 days earlier</option>
                                    <option value="">a week earlier</option>
                                </select><label for="eventReminder">Reminder</label></div><button class="btn btn-link p-0 mb-3" type="button"> <span class="fa-solid fa-plus me-2"></span>Add Reminder</button>
                        </div>
                        <div class="modal-footer d-flex justify-content-between align-items-center border-0"><a class="me-3 fs-9 text-body" href="events/create-an-event.html">More options<span class="fas fa-angle-right ms-1 fs-10"></span></a><button class="btn btn-primary px-4" type="submit">Save</button></div>
                    </form>
                </div>
            </div>
        </div>









    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->

    <!-- ===============================================-->
    <!--Dropdown for contacted-to--->

    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/fullcalendar/index.global.min.js"></script>
    <script src="../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../vendors/flatpickr/flatpickr.min.js"></script>
    <script src="../../assets/js/phoenix.js"></script>
    <!-- <script src="../../assets/js/calendar.js"></script> -->





    </script>
    <script>
        (function(factory) {
            typeof define === "function" && define.amd ? define(factory) : factory();
        })(function() {
            "use strict";

            const camelize = (e) => {
                const t = e.replace(/[-_\s.]+(.)?/g, (e, t) => (t ? t.toUpperCase() : ""));
                return `${t.substr(0, 1).toLowerCase()}${t.substr(1)}`;
            };
            const getData = (e, t) => {
                try {
                    return JSON.parse(e.dataset[camelize(t)]);
                } catch (o) {
                    return e.dataset[camelize(t)];
                }
            };

            const renderCalendar = (e, t) => {
                const {
                    merge: r
                } = window._,
                    a = r({
                            initialView: "dayGridMonth",
                            weekNumberCalculation: "ISO",
                            editable: !0,
                            direction: document.querySelector("html").getAttribute("dir"),
                            headerToolbar: {
                                left: "prev,next today",
                                center: "title",
                                right: "dayGridMonth,timeGridWeek,timeGridDay",
                            },
                            buttonText: {
                                month: "Month",
                                week: "Week",
                                day: "Day"
                            },
                        },
                        t
                    ),
                    n = new window.FullCalendar.Calendar(e, a);
                return (
                    n.render(),
                    document
                    .querySelector(".navbar-vertical-toggle")
                    ?.addEventListener("navbar.vertical.toggle", () => n.updateSize()),
                    n
                );
            };
            const fullCalendarInit = () => {
                const {
                    getData: e
                } = window.phoenix.utils;
                document.querySelectorAll("[data-calendar]").forEach((t) => {
                    const r = e(t, "calendar");
                    renderCalendar(t, r);
                });
            };
            const fullCalendar = {
                renderCalendar: renderCalendar,
                fullCalendarInit: fullCalendarInit,
            };

            const {
                dayjs: dayjs
            } = window,
            currentDay = dayjs && dayjs().format("DD"),
                currentMonth = dayjs && dayjs().format("MM"),
                prevMonth = dayjs && dayjs().subtract(1, "month").format("MM"),
                nextMonth = dayjs && dayjs().add(1, "month").format("MM"),
                currentYear = dayjs && dayjs().format("YYYY"),
                events = [{
                        title: "Boot Camp Neav",
                        start: `${currentYear}-${currentMonth}-01 10:00:00`,
                        end: `${currentYear}-${currentMonth}-03 16:00:00`,
                        description: "Boston Harbor Now in partnership with the Friends of Christopher Columbus Park, the Wharf District Council and the City of Boston is proud to announce the New Year's Eve Midnight Harbor Fireworks! This beloved nearly 40-year old tradition is made possible by the generous support of local waterfront organizations and businesses and the support of the City of Boston and the Office of Mayor Marty Walsh.",
                        className: "text-success",
                        location: "Boston Harborwalk, Christopher Columbus Park, <br /> Boston, MA 02109, United States",
                        organizer: "Boston Harbor Now",
                    },
                    {
                        title: "Crain's New York Business ",
                        start: `${currentYear}-${currentMonth}-11`,
                        description: "Crain's 2020 Hall of Fame. Sponsored Content By Crain's Content Studio. Crain's Content Studio Presents: New Jersey: Perfect for Business. Crain's Business Forum: Letitia James, New York State Attorney General. Crain's NYC Summit: Examining racial disparities during the pandemic",
                        className: "text-primary",
                    },
                    {
                        title: "Conference",
                        start: `${currentYear}-${currentMonth}-${currentDay}`,
                        description: "The Milken Institute Global Conference gathered the best minds in the world to tackle some of its most stubborn challenges. It was a unique experience in which individuals with the power to enact change connected with experts who are reinventing health, technology, philanthropy, industry, and media.",
                        className: "text-success",
                        schedules: [{
                                title: "Reporting",
                                start: `${currentYear}-${currentMonth}-${currentDay} 11:00:00`,
                                description: "Time to start the conference and will briefly describe all information about the event.  ",
                                className: "text-success ",
                            },
                            {
                                title: "Lunch",
                                start: `${currentYear}-${currentMonth}-${currentDay} 14:00:00`,
                                description: "Lunch facility for all the attendance in the conference.",
                                className: "text-info",
                            },
                            {
                                title: "Contest",
                                start: `${currentYear}-${currentMonth}-${currentDay} 16:00:00`,
                                description: "The starting of the programming contest",
                                className: "text-success",
                            },
                            {
                                title: "Dinner",
                                start: `${currentYear}-${currentMonth}-${currentDay} 22:00:00`,
                                description: "Dinner facility for all the attendance in the conference",
                                className: "text-success",
                            },
                        ],
                    },
                    {
                        title: `ICT Expo ${currentYear} - Product Release`,
                        start: `${currentYear}-${currentMonth}-16 10:00:00`,
                        description: `ICT Expo ${currentYear} is the largest private-sector exposition aimed at showcasing IT and ITES products and services in Switzerland.`,
                        end: `${currentYear}-${currentMonth}-18 16:00:00`,
                        className: "text-warning",
                        allDay: !0,
                    },
                    {
                        title: "Meeting",
                        start: `${currentYear}-${currentMonth}-07 10:00:00`,
                        description: " about the upcoming projects in current year and assign all tasks to the individuals",
                        className: "text-info",
                    },
                    {
                        title: "Contest",
                        start: `${currentYear}-${currentMonth}-14 10:00:00`,
                        className: "text-info",
                        description: "PeaceX is an international peace and amity organisation that aims at casting a pall at the striking issues surmounting the development of peoples and is committed to impacting the lives of young people all over the world.",
                    },
                    {
                        title: "Event With Url",
                        start: `${currentYear}-${currentMonth}-23`,
                        description: "Sample example of a event with url. Click the event, will redirect to the given link.",
                        className: "text-success",
                        url: "http://google.com",
                    },
                    {
                        title: "Competition",
                        start: `${currentYear}-${currentMonth}-26`,
                        description: "The Future of Zambia – Top 30 Under 30 is an annual award, ranking scheme, and recognition platform for young Zambian achievers under the age of 30, who are building brands, creating jobs, changing the game, and transforming the country.",
                        className: "text-danger",
                    },
                    {
                        title: "Birthday Party",
                        start: `${currentYear}-${nextMonth}-05`,
                        description: "Will celebrate birthday party with my friends and family",
                        className: "text-primary",
                    },
                    {
                        title: "Click for Google",
                        url: "http://google.com/",
                        start: `${currentYear}-${prevMonth}-10`,
                        description: "Applications are open for the New Media Writing Prize 2020. The New Media Writing Prize (NMWP) showcases exciting and inventive stories and poetry that integrate a variety of formats, platforms, and digital media.",
                        className: "text-primary",
                    },
                ];

            const getTemplate = (n) =>
                `\n<div class="modal-header ps-card border-bottom border-translucent justify-content-between">\n  <div>\n    <h4 class="modal-title text-body-highlight mb-0">${
      n.title
    }</h4>\n    ${
      n.extendedProps.organizer
        ? `<p class="mb-0 fs-9 mt-1">\n        by <a href="#!">${n.extendedProps.organizer}</a>\n      </p>`
        : ""
    }\n  </div>\n  <button type="button" class="btn p-1 fw-bolder" data-bs-dismiss="modal" aria-label="Close">\n    <span class='fas fa-times fs-8'></span>\n  </button>\n\n</div>\n\n<div class="modal-body px-card pb-card pt-1 fs-9">\n  ${
      n.extendedProps.description
        ? `\n      <div class="mt-3 border-bottom pb-3 border-translucent">\n        <h5 class='mb-0 text-body-secondary'>Description</h5>\n        <p class="mb-0 mt-2">\n          ${n.extendedProps.description
            .split(" ")
            .slice(0, 30)
            .join(" ")}\n        </p>\n      </div>\n    `
        : ""
    } \n  <div class="mt-4 ${
      n.extendedProps.location ? "border-bottom pb-3 border-translucent" : ""
    }">\n    <h5 class='mb-0 text-body-secondary'>Date and Time</h5>\n    <p class="mb-1 mt-2">\n    ${
      window.dayjs && window.dayjs(n.start).format("dddd, MMMM D, YYYY, h:mm A")
    } \n    ${
      n.end
        ? `– ${
            window.dayjs &&
            window
              .dayjs(n.end)
              .subtract(1, "day")
              .format("dddd, MMMM D, YYYY, h:mm A")
          }`
        : ""
    }\n  </p>\n\n  </div>\n  ${
      n.extendedProps.location
        ? `\n        <div class="mt-4 ">\n          <h5 class='mb-0 text-body-secondary'>Location</h5>\n          <p class="mb-0 mt-2">${n.extendedProps.location}</p>\n        </div>\n      `
        : ""
    }\n  ${
      n.schedules
        ? `\n      <div class="mt-3">\n        <h5 class='mb-0 text-body-secondary'>Schedule</h5>\n        <ul class="list-unstyled timeline mt-2 mb-0">\n          ${n.schedules
            .map((n) => `<li>${n.title}</li>`)
            .join("")}\n        </ul>\n      </div>\n      `
        : ""
    }\n  </div>\n</div>\n\n<div class="modal-footer d-flex justify-content-end px-card pt-0 border-top-0">\n  <a href="#!" class="btn btn-phoenix-secondary btn-sm">\n    <span class="fas fa-pencil-alt fs-10 mr-2"></span> Edit\n  </a>\n  <button class="btn btn-phoenix-danger btn-sm" data-calendar-event-remove >\n    <span class="fa-solid fa-trash fs-9 mr-2" data-fa-transform="shrink-2"></span> Delete\n  </button>\n  <a href='#!' class="btn btn-primary btn-sm">\n    See more details\n    <span class="fas fa-angle-right fs-10 ml-1"></span>\n  </a>\n</div>\n`;

            const appCalendarInit = () => {
                const e = "#addEventForm",
                    t = "#addEventModal",
                    a = "#appCalendar",
                    n = ".calendar-title",
                    r = ".calendar-day",
                    o = ".calendar-date",
                    l = "[data-fc-view]",
                    c = "data-event",
                    d = "#eventDetailsModal",
                    i = "#eventDetailsModal .modal-content",
                    s = '#addEventModal [name="startDate"]',
                    u = '[name="title"]',
                    m = "shown.bs.modal",
                    v = "submit",
                    g = "event",
                    y = "fc-view",
                    p = events.reduce(
                        (e, t) => (t.schedules ? e.concat(t.schedules.concat(t)) : e.concat(t)),
                        []
                    );
                (() => {
                    const e = new Date(),
                        t = e.toLocaleString("en-US", {
                            month: "short"
                        }),
                        a = e.getDate(),
                        n = e.getDay(),
                        l = `${a}  ${t},  ${e.getFullYear()}`;
                    document.querySelector(r) &&
                        (document.querySelector(r).textContent = ((e) => [
                            "Sunday",
                            "Monday",
                            "Tuesday",
                            "Wednesday",
                            "Thursday",
                            "Friday",
                            "Saturday",
                        ][e])(n)),
                        document.querySelector(o) &&
                        (document.querySelector(o).textContent = l);
                })();
                const h = (e) => {
                        const {
                            currentViewType: t
                        } = e;
                        if ("timeGridWeek" === t) {
                            const t = e.dateProfile.currentRange.start,
                                a = t.toLocaleString("en-US", {
                                    month: "short"
                                }),
                                r = t.getDate(),
                                o = e.dateProfile.currentRange.end,
                                l = o.toLocaleString("en-US", {
                                    month: "short"
                                });
                            console.log(o);
                            const c = o.getDate();
                            document.querySelector(n).textContent = `${a} ${r} - ${l} ${c}`;
                        } else document.querySelector(n).textContent = e.viewTitle;
                    },
                    w = document.querySelector(a),
                    f = document.querySelector(e),
                    D = document.querySelector(t),
                    S = document.querySelector(d);
                if (w) {
                    const e = fullCalendar.renderCalendar(w, {
                        headerToolbar: !1,
                        dayMaxEvents: 3,
                        height: 800,
                        stickyHeaderDates: !1,
                        views: {
                            week: {
                                eventLimit: 3
                            }
                        },
                        eventTimeFormat: {
                            hour: "numeric",
                            minute: "2-digit",
                            omitZeroMinute: !0,
                            meridiem: !0,
                        },
                        events: p,
                        eventClick: (e) => {
                            if (e.event.url)
                                window.open(e.event.url, "_blank"), e.jsEvent.preventDefault();
                            else {
                                const t = getTemplate(e.event);
                                document.querySelector(i).innerHTML = t;
                                new window.bootstrap.Modal(S).show();
                            }
                        },
                        dateClick(e) {
                            new window.bootstrap.Modal(D).show();
                            document.querySelector(s)._flatpickr.setDate([e.dateStr]);
                        },
                    });
                    h(e.currentData),
                        document.addEventListener("click", (t) => {
                            if (t.target.hasAttribute(c) || t.target.parentNode.hasAttribute(c)) {
                                const a = t.target.hasAttribute(c) ? t.target : t.target.parentNode;
                                switch (getData(a, g)) {
                                    case "prev":
                                        e.prev(), h(e.currentData);
                                        break;
                                    case "next":
                                        e.next(), h(e.currentData);
                                        break;
                                    default:
                                        e.today(), h(e.currentData);
                                }
                            }
                            if (t.target.hasAttribute("data-fc-view")) {
                                const a = t.target;
                                e.changeView(getData(a, y)),
                                    h(e.currentData),
                                    document.querySelectorAll(l).forEach((e) => {
                                        e === t.target ?
                                            e.classList.add("active-view") :
                                            e.classList.remove("active-view");
                                    });
                            }
                        }),
                        f &&
                        f.addEventListener(v, (t) => {
                            t.preventDefault();
                            const {
                                title: a,
                                startDate: n,
                                endDate: r,
                                label: o,
                                description: l,
                                allDay: c,
                            } = t.target;
                            e.addEvent({
                                    title: a.value,
                                    start: n.value,
                                    end: r.value ? r.value : null,
                                    allDay: c.checked,
                                    className: `text-${o.value}`,
                                    description: l.value,
                                }),
                                t.target.reset(),
                                window.bootstrap.Modal.getInstance(D).hide();
                        }),
                        D &&
                        D.addEventListener(m, ({
                            currentTarget: e
                        }) => {
                            e.querySelector(u)?.focus();
                        });
                }
            };

            const {
                docReady: docReady
            } = window.phoenix.utils;
            docReady(appCalendarInit);
        });
        //# sourceMappingURL=calendar.js.map
    </script>



</body>




</html>