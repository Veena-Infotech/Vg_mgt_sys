<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">



<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- =================================a==============-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Add Society</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../unicons.iconscout.com/release/v4.0.8/css/line.css">
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
    <link href="../../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <style>
        .error-popup {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: none;
        }

        .error-popup.show {
            display: block;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            color: #721c24;
            float: right;
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        @media (max-width: 767.98px) {
            .row>[class*="col-"] {
                margin-bottom: 15px !important;
            }
        }

        

        
    </style>
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
        <div class="content" id="heading-gsap">

            <h3 class="mb-4">Add Property </h3>

            <div class="radio-buttons d-flex gap-3">
                <label>
                    <input type="radio" name="toggle" value="add-society" onclick="toggleForm()" checked>
                    Add Society
                </label>
                <label>
                    <input type="radio" name="toggle" value="land-lord" onclick="toggleForm()">
                    Landlord
                </label>
            </div>
            <div id="add-society" class="form-section active">
                <div class="content">
                    <!-- view leads table  -->
                    <div class="row g-0 justify-content-between align-items-center">

                        <div>
                            <div class="scrollbar">
                                <ul class="nav nav-underline fs-9 flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                                    <li class="nav-item me-3" role="presentation">
                                        <a class="nav-link text-nowrap active" id="orders-tab" data-bs-toggle="tab"
                                            href="#tab-orders" role="tab" aria-controls="tab-orders"
                                            aria-selected="true">
                                            <i class="fa-solid fa-landmark me-2"></i>
                                            Add Society
                                        </a>

                                    </li>
                                    <li class="nav-item me-3" role="presentation">
                                        <a class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab"
                                            href="#tab-reviews" role="tab" aria-controls="tab-reviews"
                                            aria-selected="false">
                                            <i class="fa-solid fa-star"></i>
                                            Members Directory
                                        </a>
                                    </li>
                                    <li class="nav-item me-3" role="presentation">
                                        <a class="nav-link text-nowrap" id="wishlist-tab" data-bs-toggle="tab"
                                            href="#tab-wishlist" role="tab" aria-controls="tab-wishlist"
                                            aria-selected="false">
                                            <i class="fa-solid fa-heart"></i>
                                            Committee Details
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <div class="tab-content" id="profileTabContent">
                                <div class="tab-pane fade show active" id="tab-orders" role="tabpanel"
                                    aria-labelledby="orders-tab">
                                    <div class="border-top border-bottom border-translucent" id="profileOrdersTable"
                                        data-list="{&quot;valueNames&quot;:[&quot;order&quot;,&quot;status&quot;,&quot;delivery&quot;,&quot;date&quot;,&quot;total&quot;],&quot;page&quot;:6,&quot;pagination&quot;:true}">
                                        <div class="table-responsive scrollbar">
                                            <form method="post">
                                                <div class="container">
                                                    <!-- Add Society Title -->
                                                    <div style="width: 100%; text-align: center; margin: 20px 0;">
                                                        <h3 style="margin: 0;">Add Society</h3>
                                                    </div>

                                                    <!-- Hidden Society ID -->
                                                    <input type="hidden" id="society-id" name="society-id"
                                                        value="Auto-generated ID" />

                                                    <!-- CTS Number -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="society-name">Society Name
                                                            </label>
                                                            <input class="form-control" id="society-name"
                                                                name="society-name" type="text"
                                                                placeholder="Enter Society Name" required />
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="cts-number">CTS
                                                                Number</label>
                                                            <input class="form-control" id="cts-number"
                                                                name="cts-number" type="text"
                                                                placeholder="Enter CTS Number" />
                                                        </div>
                                                    </div>

                                                    <!-- Village, Taluka, and District Section -->
                                                    <div class="row mb-3">
                                                        <!-- District -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="district">District</label>
                                                            <input list="districts" id="district" name="district"
                                                                class="form-control" placeholder="district"/>
                                                            <datalist id="districts">
                                                                <!-- <select class="form-select" id="district" name="district" required> -->

                                                                <option value="">Select District</option>
                                                                <option value="Ahmedabad"></option>
                                                                <option value="Akola"></option>
                                                                <option value="Amravati"></option>
                                                                <option value="Aurangabad"></option>
                                                                <option value="Beed"></option>
                                                                <option value="Bhandara"></option>
                                                                <option value="Buldhana"></option>
                                                                <option value="Chandrapur"></option>
                                                                <option value="Dhule"></option>
                                                                <option value="Gadchiroli"></option>
                                                                <option value="Gondia"></option>
                                                                <option value="Hingoli"></option>
                                                                <option value="Jalgaon"></option>
                                                                <option value="Jalna"></option>
                                                                <option value="Kolhapur"></option>
                                                                <option value="Latur"></option>
                                                                <option value="Mumbai"></option>
                                                                <option value="MumbaiSuburban"></option>
                                                                <option value="NaviMumbai"></option>
                                                                <option value="Nagpur"></option>
                                                                <option value="Nanded"></option>
                                                                <option value="Nandurbar"></option>
                                                                <option value="Nashik"></option>
                                                                <option value="Osmanabad"></option>
                                                                <option value="Palghar"></option>
                                                                <option value="Parbhani"></option>
                                                                <option value="Pune"></option>
                                                                <option value="Raigad"></option>
                                                                <option value="Ratnagiri"></option>
                                                                <option value="Sangli"></option>
                                                                <option value="Satara"></option>
                                                                <option value="Sindhudurg"></option>
                                                                <option value="Solapur"></option>
                                                                <option value="Thane"></option>
                                                                <option value="Wardha"></option>
                                                                <option value="Washim"></option>
                                                                <option value="Yavatmal"></option>

                                                                <!-- </select> -->
                                                            </datalist>
                                                        </div>

                                                        <!-- Taluka -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="taluka">Taluka</label>
                                                            <select class="form-select" id="taluka" name="taluka"
                                                                value="taluka" disabled>
                                                                <option value="">Select Taluka</option>
                                                            </select>
                                                        </div>

                                                        <!-- Village -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="village">Village</label>
                                                            <select class="form-select" id="village" name="village"
                                                                value="taluka" disabled>
                                                                <option value="">Select Village</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <script>
                                                        const districtData = {

                                                            Nagpur: {
                                                                talukas: {
                                                                    Ramtek: ["Chicholi", "Turikheda", "Kachurwahi", "Wadamba"],
                                                                    Umred: ["Ghatrohana", "Tekadi", "Keslapar", "Vihirgaon"],
                                                                    Kalameshwar: ["Sawali", "Shingori", "Kinhi", "Gondkhairi"],
                                                                    Katol: ["Khadki", "Mandhal", "Yerla", "Lonsawali"],
                                                                    Kamptee: ["Kanhan", "Gumgaon", "Gondwana", "Bela"],
                                                                    Kuhi: ["Pohra", "Wakeshwar", "Lonara", "Kopara"],
                                                                    Narkhed: ["Shendurjana", "Waroda", "Pandhari", "Masod"],
                                                                    Nagpur: ["Mankapur", "Sitabuldi", "Dharampeth", "Dhantoli"],
                                                                    NagpurRural: ["Borgaon", "Kharbi", "Hingana", "Wanadongri"],
                                                                    Parseoni: ["Salai", "Bhivkund", "Parseoni", "Bela"],
                                                                    Bhiwapur: ["Sonpur", "Bhiwapur", "Warud", "Ambada"],
                                                                    Mouda: ["Mouda", "Khandala", "Chicholi", "Khaparkheda"],
                                                                    Savner: ["Saoner", "Pipri", "Lohdongri", "Khubala"],
                                                                    Hingna: ["Wanadongri", "Hingna", "Amgaon", "Dongargaon"]
                                                                }
                                                            },

                                                            Yavatmal: {
                                                                talukas: {
                                                                    Arni: ["Rajurwadi", "Darati", "Pimpri", "Shivni", "Sukli", "Kawath", "Babhulgaon", "Ekurka"],
                                                                    Umarkhed: ["Pophali", "Wadgaon", "Lohara", "Bhivpur", "Sonkhed", "Tembhi", "Mangrul", "Umri"],
                                                                    Kalamb: ["Adgaon", "Khadgaon", "Bhivapur", "Wadshed", "Dhanora", "Borgaon", "Pusli", "Patoda"],
                                                                    PandharkaodaKelapur: ["Kelapur", "Pandharkaoda", "Rajur", "Wadgaon", "Sirsi", "Dongargaon", "Chandap", "Umari"],
                                                                    Ghatanji: ["Nandapur", "Kokangaon", "Wadshed", "Kolambi", "Dabhadi", "Ambadi", "Lohara", "Kohla"],
                                                                    ZariJamani: ["Bhivapur", "Pathri", "Zari", "Jamani", "Sukli", "Palsoda", "Malkhed", "Borgaon"],
                                                                    Darwha: ["Pimpalgaon", "Kalamgaon", "Ghodgaon", "Arambhi", "Belura", "Ekurka", "Sawangi", "Anjani"],
                                                                    Digras: ["Belkhed", "Mangrul", "Shivani", "Wadshed", "Sonkhed", "Digras", "Rajur", "Takali"],
                                                                    Ner: ["Lohara", "Borgaon", "Pusli", "Rudhana", "Arambhi", "Bhivapur", "Ekurka", "Dighi"],
                                                                    Pusad: ["Chincholi", "Bhivpur", "Pusad", "Dongargaon", "Wadgaon", "Belura", "Mangrul", "Wadshed"],
                                                                    Babhulgaon: ["Ghatladki", "Sawangi", "Shirpur", "Wadshed", "Kolambi", "Bhivapur", "Dongargaon", "Sonkhed"],
                                                                    Mahagaon: ["Palsi", "Rajur", "Sukli", "Bhivapur", "Belura", "Takali", "Kolambi", "Mangrul"],
                                                                    Maregaon: ["Rudhana", "Takalghat", "Dighi", "Kolambi", "Belura", "Pusli", "Ghodgaon", "Borgaon"],
                                                                    Yavatmal: ["Patilwadi", "Hivra", "Wadshed", "Kolambi", "Ghatladki", "Sawangi", "Shirpur", "Pusli"],
                                                                    Ralegaon: ["Dighi", "Arambhi", "Bhivapur", "Rudhana", "Kolambi", "Takali", "Borgaon", "Mangrul"],
                                                                    Wani: ["Ukni", "Talasawangi", "Kolambi", "Bhivapur", "Sawangi", "Ghodgaon", "Ekurka", "Shirpur"]
                                                                }
                                                            },

                                                            Wardha: {
                                                                talukas: {
                                                                    Wardha: ["Pipri", "Chincholi", "Sewagram", "Borgaon", "Dattapur", "Mandgaon", "Kharangna", "Bhidi"],
                                                                    Selu: ["Seloo", "Deoli", "Nachangaon", "Karanja", "Sawangi", "Arvi", "Kelapur", "Umari"],
                                                                    Deoli: ["Yelakeli", "Khanapur", "Jamb", "Mandgaon", "Borgaon", "Sukli", "Chandni", "Pangari"],
                                                                    Hinganghat: ["Hinganghat", "Sawargaon", "Ajanti", "Sindhi", "Mendha", "Wadgaon", "Anji", "Ganeshpur"],
                                                                    Samudrapur: ["Samudrapur", "Talegaon", "Pipalgaon", "Nandori", "Loni", "Bhivapur", "Gaurkheda", "Gondri"],
                                                                    Karanja: ["Karanja", "Mandgaon", "Wadgaon", "Jamb", "Dighi", "Arambhi", "Kelapur", "Pangari"],
                                                                    Arvi: ["Arvi", "Shendurjana", "Pulgaon", "Sawangi", "Kandegaon", "Lohara", "Ajanti", "Babhulgaon"],
                                                                    Ashti: ["Ashti", "Dhotra", "Pangarkheda", "Bhivapur", "Mendha", "Talegaon", "Mandgaon", "Sawangi"]
                                                                }
                                                            },
                                                            Washim: {
                                                                talukas: {
                                                                    Washim: ["Ansing", "Masla", "Malegaon", "Poharadevi", "Mandwa", "Mategaon", "Giroli", "Kawatha"],
                                                                    Malegaon: ["Malegaon", "Pangri", "Wadsangavi", "Adgaon", "Chikhalwadi", "Bhivapur", "Gondgaon", "Pimpalgaon"],
                                                                    Risod: ["Risod", "Lohara", "Wadji", "Kolambi", "Umra", "Hivra", "Ansing", "Digras"],
                                                                    Karanja: ["Karanja", "Shelu", "Bhivapur", "Wadgaon", "Dighi", "Manora", "Masla", "Mategaon"],
                                                                    Mangrulpir: ["Mangrulpir", "Sawargaon", "Kherda", "Mahuli", "Adgaon", "Ansing", "Poharadevi", "Wadji"],
                                                                    Manora: ["Manora", "Umari", "Bhivapur", "Pangri", "Giroli", "Mandwa", "Masla", "Wadsangavi"]
                                                                }
                                                            },

                                                            Solapur: {
                                                                talukas: {
                                                                    NorthSolapur: ["Kegaon", "Vidi Gharkul", "Arali", "Karamba", "Degaon", "Soregaon", "Wadala", "Kumbhari"],
                                                                    SouthSolapur: ["Ingalgi", "Narkhed", "Mandrup", "Akkalkot Road", "Hotgi", "Valasang", "Boramani", "Kurul"],
                                                                    Barshi: ["Gurav Pimpalgaon", "Yedshi", "Vairag", "Wadgaon", "Hingani", "Shirale", "Borgaon", "Pangaon"],
                                                                    Akkalkot: ["Akkalkot", "Boramani", "Nagansur", "Maindargi", "Alagundi", "Wadwal", "Korti", "Chungi"],
                                                                    Pandharpur: ["Gopalpur", "Nimgaon", "Karkamb", "Shetphal", "Wakhari", "Malewadi", "Chorakhali", "Kauthali"],
                                                                    Mangalwedha: ["Mangalwedha", "Marwade", "Tandulwadi", "Nandur", "Lohgaon", "Kuroli", "Bhose", "Javala"],
                                                                    Sangola: ["Sangola", "Mote", "Alegaon", "Wasud", "Jalihal", "Khardi", "Gaudgaon", "Tembhurni"],
                                                                    Mohol: ["Mohol", "Anjangaon", "Kurul", "Malinagar", "Madha", "Shetphal", "Arali", "Bhose"],
                                                                    Madha: ["Madha", "Mahisgaon", "Anjangaon", "Kurduwadi", "Pangri", "Parite", "Rajuri", "Wadsingi"],
                                                                    Karmala: ["Karmala", "Kem", "Chandapuri", "Shiral", "Pangri", "Alegaon", "Wafale", "Lonarwadi"],
                                                                    Malshiras: ["Malshiras", "Akluj", "Natepute", "Velapur", "Bhamburdi", "Gurholi", "Bhandishegaon", "Borale"]
                                                                }
                                                            },

                                                            Raigad: {
                                                                talukas: {
                                                                    Alibag: ["Saswane", "Kihim", "Mangaon", "Tarf Mhatoba", "Awas", "Varasoli", "Revdanda", "Rajpuri"],
                                                                    Murud: ["Murud", "Danda", "Janjira", "Anjarle", "Wadkhal", "Borgaon", "Palaspe", "Rasayani"],
                                                                    Pen: ["Pen", "Khopoli", "Pimpalgaon", "Shivpur", "Wadgaon", "Gadhapada", "Pimpalwadi", "Borivali"],
                                                                    Panvel: ["Panvel", "Taloje", "Kharghar", "Khandeshwar", "Dombivli", "Peth", "Brahmand", "Belapur"],
                                                                    Uran: ["Uran", "Belapur", "Gavan", "Khar", "Phunde", "Khardi", "Anjur", "Vichumbe"],
                                                                    Karjat: ["Karjat", "Neral", "Vajreshwari", "Sakwar", "Khopoli", "Borivali", "Hanga", "Pachad"],
                                                                    Khalapur: ["Panchgani", "Madh", "Jambul", "Gorle", "Kasarvadavali", "Gundewadi", "Wadi", "Devadi"],
                                                                    Roha: ["Roha", "Khopoli", "Phundewadi", "Arambhi", "Gothivali", "Mhasla", "Wadi", "Raigad"],
                                                                    Sudhagad: ["Pali", "Sudhagad", "Bhivpuri", "Khadakpada", "Vasai", "Ambegaon", "Bhivpur", "Juchandra"],
                                                                    Mangaon: ["Mangaon", "Wadgaon", "Narhe", "Karjat", "Pimpalgaon", "Gavhan", "Kolvan", "Khopoli"],
                                                                    Tala: ["Tala", "Adivare", "Kumbhivali", "Khandala", "Vashivali", "Kashiv", "Ghosalwadi", "Dhamani"],
                                                                    Shrivardhan: ["Shrivardhan", "Hirkani", "Sundarwadi", "Shilapada", "Velas", "Nandgaon", "Talegaon", "Anjarle"],
                                                                    Mhasla: ["Mhasla", "Anjandewadi", "Gothivade", "Kharewadi", "Wadala", "Kasheli", "Gundgaon", "Jambhavali"],
                                                                    Mahad: ["Mahad", "Poladpur", "Khandala", "Siddheshwar", "Shindewadi", "Rait", "Pimpalgaon", "Kambli"],
                                                                    Poladpur: ["Poladpur", "Shindewadi", "Raigad", "Samsher", "Kharsale", "Vajreshwari", "Borgaon", "Vade"]
                                                                }
                                                            },
                                                            Sindhudurg: {
                                                                talukas: {
                                                                    Devgad: ["Shiroda", "Pangari", "Mardol", "Rajapur", "Savane", "Wadath", "Jambhli", "Dhaboli"],
                                                                    Dodamarg: ["Narvan", "Maravade", "Pangire", "Ghot", "Hivara", "Povad", "Ranjani", "Tibba"],
                                                                    Kankavli: ["Kankavli", "Kudal", "Vajrad", "Kambali", "Mahagaon", "Dhopeshwar", "Chinchinim", "Kadama"],
                                                                    Kudal: ["Kudal", "Pimpalwadi", "Vajrad", "Savantwadi", "Motha", "Nandgaon", "Shivpur", "Khutewadi"],
                                                                    Malvan: ["Malvan", "Sodi", "Kude", "Vengurla", "Niveli", "Amboli", "Rajapur", "Kadamba"],
                                                                    Sawantwadi: ["Sawantwadi", "Virdi", "Hivra", "Pimpari", "Padi", "Khudali", "Khemapur", "Sidhpur"],
                                                                    Vaibhavwadi: ["Vaibhavwadi", "Patwadi", "Rajapur", "Shedge", "Alapur", "Chinchni", "Malgaon", "Anandwadi"],
                                                                    Vengurla: ["Vengurla", "Manur", "Puducheri", "Shiroda", "Dhamapur", "Tarkarli", "Niveli", "Vijaydurg"]
                                                                }
                                                            },

                                                            Satara: {
                                                                talukas: {
                                                                    Satara: ["Kondhwa", "Pimpalgaon", "Chandoli", "Malkapur", "Borgaon", "Vajirpur", "Wadi", "Sonavadi"],
                                                                    Jaoli: ["Jaoli", "Karad", "Khanapur", "Lohgaon", "Pimpalgaon", "Pandharpur", "Vaswani", "Khed"],
                                                                    Karad: ["Karad", "Gokul", "Wadi", "Shivapur", "Tondoli", "Kawdi", "Chandani", "Loni"],
                                                                    Koregaon: ["Koregaon", "Kanchanwadi", "Borgaon", "Siddhivinarayan", "Dhakani", "Shirle", "Nagwadi", "Jambhli"],
                                                                    Khatav: ["Khatav", "Khamgaon", "Banegaon", "Tajpur", "Guruwar", "Adgaon", "Ghodgaon", "Pimpalgaon"],
                                                                    Mahabaleshwar: ["Mahabaleshwar", "Panchgani", "Bhilar", "Shindola", "Chandranath", "Nandgaon", "Kedari", "Arpud"],
                                                                    Man: ["Man", "Nagarpada", "Chinchani", "Sangatwadi", "Borgaon", "Ranjani", "Alapur", "Sathgaon"],
                                                                    Patan: ["Patan", "Kokani", "Wadi", "Alapur", "Sathgaon", "Borhe", "Padali", "Velapur"],
                                                                    Phaltan: ["Phaltan", "Khandala", "Sidhpur", "Dhamangaon", "Kanhan", "Borgaon", "Pimpalgaon", "Koregaon"],
                                                                    Wai: ["Wai", "Anwa", "Lohgaon", "Sawargaon", "Malkapur", "Gondawali", "Pimpalgaon", "Mundhavi"],
                                                                    Khandala: ["Khandala", "Ghatshil", "Hivra", "Wadi", "Shetphal", "Banegaon", "Karamba", "Adgaon"]
                                                                }
                                                            },

                                                            Sangli: {
                                                                talukas: {
                                                                    Miraj: ["Miraj", "Borgaon", "Dhamangaon", "Pimpalwadi", "Chandranath", "Shindola", "Kusumwadi", "Nagla"],
                                                                    Tasgaon: ["Tasgaon", "Shirgaon", "Gundewadi", "Bhivpur", "Borgaon", "Sailu", "Khutgaon", "Jalgaon"],
                                                                    KavatheMahankal: ["Kavathe", "Gunjalwadi", "Nandgaon", "Patnagar", "Malkapur", "Sangavi", "Sidhpur", "Chandpur"],
                                                                    Jat: ["Jat", "Tondalwadi", "Gundewadi", "Sakharwadi", "Kumthe", "Chandpur", "Borgaon", "Patwad"],
                                                                    Vita: ["Vita", "Banegaon", "Malkapur", "Pimpalgaon", "Nagapur", "Pangri", "Bhivpur", "Karad"],
                                                                    Atpadi: ["Atpadi", "Gurawar", "Jambhali", "Ghatshil", "Dhawale", "Malkapur", "Sangavi", "Hivra"],
                                                                    Kadegaon: ["Kadegaon", "Mhaswad", "Shindola", "Borgaon", "Alapur", "Sundarpur", "Nagapur", "Goregaon"],
                                                                    Palus: ["Palus", "Guravwadi", "Gorhe", "Kambali", "Shivapur", "Ranjani", "Pimpalgaon", "Dhamangaon"],
                                                                    Walwa: ["Walwa", "Pandharpur", "Pimpalgaon", "Patwadi", "Dhapewadi", "Kharvi", "Alapur", "Tondawadi"],
                                                                    Shirala: ["Shirala", "Adivare", "Shindola", "Kawathe", "Chandpur", "Patwadi", "Borgaon", "Sundarpur"]
                                                                }
                                                            },

                                                            Ratnagiri: {
                                                                talukas: {
                                                                    Ratnagiri: ["Nivali", "Rajapur", "Goregaon", "Shirgaon", "Kokani", "Dhamapur", "Kasheli", "Guhagar"],
                                                                    Rajapur: ["Rajapur", "Kasheli", "Alapur", "Kovle", "Sakhari", "Gothiwade", "Pimpari", "Malgund"],
                                                                    Lanja: ["Lanja", "Wadgaon", "Velas", "Kothare", "Sindhudurg", "Ranjani", "Agarwadi", "Siddheshwar"],
                                                                    Sangmeshwar: ["Sangmeshwar", "Chandpur", "Wadgaon", "Goregaon", "Tondoli", "Vasai", "Nandgaon", "Bhivpur"],
                                                                    Chiplun: ["Chiplun", "Kasheli", "Alapur", "Tarakali", "Wadi", "Pimpalwadi", "Punewadi", "Malgund"],
                                                                    Guhagar: ["Guhagar", "Anjarle", "Shiroda", "Velas", "Khandala", "Kandoli", "Ranjani", "Borle"],
                                                                    Khed: ["Khed", "Pimpari", "Ranjani", "Wadgaon", "Panchgani", "Kavathe", "Gowari", "Shegaon"],
                                                                    Dapoli: ["Dapoli", "Pimpalwadi", "Agar", "Tondoli", "Jambhadi", "Borgaon", "Dabhole", "Anwa"],
                                                                    Mandangad: ["Mandangad", "Patapur", "Tondar", "Pimpalgaon", "Khandal", "Sirsala", "Borgaon", "Vishrambag"]
                                                                }
                                                            },


                                                            Nashik: {
                                                                talukas: {
                                                                    Nashik: ["Pimpalgaon", "Adgaon", "Laxmi Nagar", "Kanchanwadi", "Shiraswadi", "Nagapur", "Tondapur", "Kundewadi"],
                                                                    Igatpuri: ["Igatpuri", "Sangavi", "Murbad", "Shivpur", "Pimpalgaon", "Narale", "Ranjani", "Rohinwadi"],
                                                                    Trimbakeshwar: ["Trimbak", "Pimpalgaon", "Nashik Road", "Satpur", "Goregaon", "Anwa", "Alapur", "Kharadi"],
                                                                    Dindori: ["Dindori", "Nandgaon", "Patwadi", "Borgaon", "Shindola", "Sakri", "Pimpalgaon", "Dhamangaon"],
                                                                    Peth: ["Peth", "Nandpur", "Tondawadi", "Rajapur", "Nagaon", "Sakharwadi", "Sangavi", "Jambhadi"],
                                                                    Kalwan: ["Kalwan", "Borgaon", "Tondal", "Khidrapur", "Shindola", "Guravwadi", "Alapur", "Dudhala"],
                                                                    Surgana: ["Surgana", "Dhamangaon", "Pimpalgaon", "Chandpur", "Khudawad", "Pimpri", "Kishanwadi", "Guravwadi"],
                                                                    Chandwad: ["Chandwad", "Pimpalgaon", "Vanjalwadi", "Sangavi", "Nimbhora", "Ghatshil", "Alapur", "Khambale"],
                                                                    Deola: ["Deola", "Borgaon", "Pimpalgaon", "Wadi", "Rajapur", "Sakri", "Chandranath", "Malkapur"],
                                                                    BaglanSatana: ["Satana", "Baglan", "Khandala", "Sakri", "Sundarpur", "Dhabola", "Khambale", "Nandgaon"],
                                                                    Malegaon: ["Malegaon", "Pimpalgaon", "Vasai", "Sakhari", "Borgaon", "Kanhergaon", "Anwa", "Deola"],
                                                                    Nandgaon: ["Nandgaon", "Ghorawadi", "Pimpari", "Sangavi", "Alapur", "Tondal", "Khedgaon", "Rajapur"],
                                                                    Yeola: ["Yeola", "Borgaon", "Pimpalgaon", "Anwa", "Rajapur", "Khandala", "Nandgaon", "Khamgaon"],
                                                                    Niphad: ["Niphad", "Shiraswadi", "Deola", "Laxmi Nagar", "Anwa", "Borgaon", "Goregaon", "Sakri"],
                                                                    Sinnar: ["Sinnar", "Pimpalgaon", "Rajapur", "Alapur", "Tondal", "Sakharwadi", "Anwa", "Nandgaon"]
                                                                }
                                                            },
                                                            Thane: {
                                                                talukas: {
                                                                    Thane: ["Waghbil", "Kasarvadavali", "Shahad", "Manpada", "Dapode", "Kopri", "Ghodbunder", "Kelwa"],
                                                                    Bhiwandi: ["Mundka", "Thakurdwar", "Kadambeshwar", "Rajivnagar", "Kaman", "Pimpalwadi", "Pahadpur", "Jambhali"],
                                                                    Kalyan: ["Shivaji Nagar", "Murkha", "Ganeshwadi", "Dhamankar Naka", "Mankar", "Khopat", "Chunabhatti", "Vithalwadi"],
                                                                    Murbad: ["Murbad", "Gharai", "Chinchkheda", "Pimpalgaon", "Shivapur", "Banegaon", "Sawantwadi", "Nandgaon"],
                                                                    Shahapur: ["Shahapur", "Kelwa", "Nandgaon", "Anwa", "Borgaon", "Dholan", "Pimpri", "Chinchkheda"],
                                                                    Vasai: ["Vasai", "Vaitarna", "Nalasopara", "Rajodi", "Dahisar", "Bhayander", "Kandarpada", "Mira Road"],
                                                                    Palghar: ["Palghar", "Dahanu", "Gholwad", "Chinchani", "Kashid", "Mandva", "Vaitarna", "Kumbharkhani"],
                                                                    Ulhasnagar: ["Ulhasnagar", "Ulrika", "Chandreshwar", "Shahad", "Manpada", "Kopri", "Kasheli", "Kalher"],
                                                                    Ambarnath: ["Ambarnath", "Kalyan", "Manpada", "Agarwadi", "Pimpalwadi", "Nandgaon", "Kumbharkhani", "Shivapada"],
                                                                    Badlapur: ["Badlapur", "Thane", "Ulhasnagar", "Mundka", "Bapgaon", "Chincholi", "Kelwa", "Borgaon"],
                                                                    Dombivli: ["Dombivli", "Bapgaon", "Murbad", "Khoni", "Talegaon", "Shivaji Nagar", "Khopat", "Ganeshwadi"],
                                                                    Vikramgad: ["Vikramgad", "Kashid", "Wadi", "Chinchani", "Pimpalgaon", "Dhamankar", "Chandpur", "Thakurwadi"]
                                                                }
                                                            },
                                                            Ahmedabad: {
                                                                talukas: {
                                                                    AhmedabadCity: ["Vasna", "Makarba"],
                                                                    Daskroi: [
                                                                        "Aslali",
                                                                        "Bareja",
                                                                        "Bakrol Bujrang",
                                                                        "Barejadi",
                                                                        "Bhat",
                                                                        "Bhavda",
                                                                        "Bhuvaldi",
                                                                        "Chandial",
                                                                        "Dhamatvan",
                                                                        "Jetalpur",
                                                                        "Kasindra",
                                                                        "Kubadthal",
                                                                        "Kuha",
                                                                        "Mahijada",
                                                                        "Memadpur",
                                                                        "Navapura",
                                                                        "Paldi Kankaj",
                                                                        "Rakhial",
                                                                        "Vastral",
                                                                        "Vinzol",
                                                                        "Zanu",
                                                                        "Ghuma",
                                                                        "Manipur",
                                                                        "Kanbha",
                                                                        "Geratpur"
                                                                    ],

                                                                    Dholka: [
                                                                        "Ambaliyara",
                                                                        "Ambareli",
                                                                        "Ambethi",
                                                                        "Anandpura",
                                                                        "Andhari",
                                                                        "Arnej",
                                                                        "Badarkha",
                                                                        "Begva",
                                                                        "Bhetawada",
                                                                        "Bholad",
                                                                        "Bhumli",
                                                                        "Bhurkhi",
                                                                        "Chaloda",
                                                                        "Chandisar",
                                                                        "Dadusar",
                                                                        "Dholi",
                                                                        "Dholka (Rural)",
                                                                        "Ganesar",
                                                                        "Ganol",
                                                                        "Girand",
                                                                        "Gundi",
                                                                        "Ingoli",
                                                                        "Jakhda",
                                                                        "Jalalpur Godhaneshvar",
                                                                        "Jalalpur Vazifa",
                                                                        "Javaraj",
                                                                        "Kadipur",
                                                                        "Kaliyapura",
                                                                        "Kalyanpur",
                                                                        "Kariyana",
                                                                        "Kauka",
                                                                        "Kesargadh",
                                                                        "Khanpur",
                                                                        "Kharanti",
                                                                        "Khatripur",
                                                                        "Koth",
                                                                        "Lana",
                                                                        "Loliya",
                                                                        "Moti Boru",
                                                                        "Mujpur",
                                                                        "Nani Boru",
                                                                        "Nesda",
                                                                        "Paldi",
                                                                        "Pisawada",
                                                                        "Rajpur",
                                                                        "Rampur",
                                                                        "Rampura",
                                                                        "Ranoda",
                                                                        "Raypur",
                                                                        "Rupgadh",
                                                                        "Sahij",
                                                                        "Samani",
                                                                        "Saragvala",
                                                                        "Sarandi",
                                                                        "Saroda",
                                                                        "Sathal",
                                                                        "Shekhdi",
                                                                        "Shiyawada",
                                                                        "Simej",
                                                                        "Sindhraj",
                                                                        "Transad",
                                                                        "Uteliya",
                                                                        "Valthera",
                                                                        "Varna",
                                                                        "Vasna Keliya",
                                                                        "Vataman",
                                                                        "Vautha",
                                                                        "Vejalka",
                                                                        "Virdi",
                                                                        "Virpur"
                                                                    ],

                                                                    Dholera: [
                                                                        "Ambali",
                                                                        "Anandpur",
                                                                        "Bavliyari",
                                                                        "Bhadiyad",
                                                                        "Bhangadh",
                                                                        "Bhimtalav",
                                                                        "Cher",
                                                                        "Dholera",
                                                                        "Gogla",
                                                                        "Gorasu",
                                                                        "Hebatpur",
                                                                        "Kadipur",
                                                                        "Kamatalav",
                                                                        "Khun",
                                                                        "Mingalpur",
                                                                        "Mundi",
                                                                        "Navagam",
                                                                        "Otariya",
                                                                        "Panchi",
                                                                        "Pipli",
                                                                        "Rahatalav",
                                                                        "Sandhida",
                                                                        "Sangasar",
                                                                        "Shela",
                                                                        "Sodhi",
                                                                        "Sothavid",
                                                                        "Valinda",
                                                                        "Vejalka",
                                                                        "Vejbalampur",
                                                                        "Vejdi",
                                                                        "Vejidipada",
                                                                        "Vejpur",
                                                                        "Vejvadar"
                                                                    ],

                                                                    Bavla: [
                                                                        "Adroda",
                                                                        "Amipura",
                                                                        "Bagodara",
                                                                        "Baldana",
                                                                        "Bhamsara",
                                                                        "Bhayla",
                                                                        "Chhabasar",
                                                                        "Chiyada",
                                                                        "Dahegamda",
                                                                        "Devadthal",
                                                                        "Devdholera",
                                                                        "Dhanwada",
                                                                        "Dhedhal",
                                                                        "Dhingda",
                                                                        "Dumali",
                                                                        "Durgi",
                                                                        "Gangad",
                                                                        "Gundanapara",
                                                                        "Hasannagar",
                                                                        "Juval Rupavati",
                                                                        "Kaliveji",
                                                                        "Kalyangadh",
                                                                        "Kanotar",
                                                                        "Kavitha",
                                                                        "Kavla",
                                                                        "Kerala",
                                                                        "Kesaradi",
                                                                        "Kochariya",
                                                                        "Lagdana",
                                                                        "Memar",
                                                                        "Meni",
                                                                        "Metal",
                                                                        "Mithapur",
                                                                        "Nanodara",
                                                                        "Ranesar",
                                                                        "Rohika",
                                                                        "Rupal",
                                                                        "Sakodara",
                                                                        "Saljada",
                                                                        "Sankod",
                                                                        "Sarala",
                                                                        "Shiyal",
                                                                        "Vasna Dhedhal",
                                                                        "Vasna Nanodara",
                                                                        "Zekda"
                                                                    ],
                                                                    Sanand: [
                                                                        "Anadej",
                                                                        "Aniyali",
                                                                        "Bakrana",
                                                                        "Bhavanpur",
                                                                        "Bol",
                                                                        "Changodar",
                                                                        "Charal",
                                                                        "Chekhla",
                                                                        "Chharodi",
                                                                        "Daduka",
                                                                        "Daran",
                                                                        "Dodar",
                                                                        "Fangdi",
                                                                        "Garodiya",
                                                                        "Godhavi",
                                                                        "Goraj",
                                                                        "Govinda",
                                                                        "Hirapur",
                                                                        "Iyava",
                                                                        "Juda",
                                                                        "Juwal",
                                                                        "Kalana",
                                                                        "Kaneti",
                                                                        "Khicha",
                                                                        "Khoda",
                                                                        "Khoraj",
                                                                        "Kodaliya",
                                                                        "Kolat",
                                                                        "Kundal",
                                                                        "Kunvar",
                                                                        "Lekhamba",
                                                                        "Lodariyal",
                                                                        "Makhiyav",
                                                                        "Mankol",
                                                                        "Melasana",
                                                                        "Modasar",
                                                                        "Moti Devti",
                                                                        "Nani Devti",
                                                                        "Naranpura",
                                                                        "Palwada",
                                                                        "Pipan",
                                                                        "Rampura",
                                                                        "Rethal",
                                                                        "Rupavati",
                                                                        "Shiyawada",
                                                                        "Soyla",
                                                                        "Tajpur",
                                                                        "Upardal",
                                                                        "Vanaliya",
                                                                        "Vasna Iyava",
                                                                        "Vasodara",
                                                                        "Vinchhiya",
                                                                        "Virochannagar",
                                                                        "Zamp",
                                                                        "Zolapur"
                                                                    ],
                                                                    Viramgam: [
                                                                        "Asalgam",
                                                                        "Bhadana",
                                                                        "Bhavda",
                                                                        "Bhojva",
                                                                        "Chanothiya",
                                                                        "Chuninapura",
                                                                        "Dalsana",
                                                                        "Dediyasan",
                                                                        "Devpura",
                                                                        "Dhakdi",
                                                                        "Dumana",
                                                                        "Ghoda",
                                                                        "Goraiya",
                                                                        "Hansalpur Sereshvar",
                                                                        "Jakhwada",
                                                                        "Jaksi",
                                                                        "Jalampura",
                                                                        "Jetapur",
                                                                        "Juna Padar",
                                                                        "Kadipur",
                                                                        "Kaliyana",
                                                                        "Kalyanpur (Shiyal)",
                                                                        "Kamijla",
                                                                        "Kankaravadi",
                                                                        "Kanpura (Dalsana)",
                                                                        "Karakathal",
                                                                        "Karangadh",
                                                                        "Kariyana",
                                                                        "Kayla",
                                                                        "Khengariya",
                                                                        "Khudad",
                                                                        "Kokta",
                                                                        "Kumarkhan",
                                                                        "Limbad",
                                                                        "Liya",
                                                                        "Melaj",
                                                                        "Memadpura",
                                                                        "Moti Kishol",
                                                                        "Moti Kumad",
                                                                        "Nadiyana",
                                                                        "Nani Kishol",
                                                                        "Nani Kumad",
                                                                        "Nilki",
                                                                        "Ogan",
                                                                        "Rahemalpur",
                                                                        "Rangpur",
                                                                        "Rupavati",
                                                                        "Sabalpura",
                                                                        "Sachana",
                                                                        "Sarsavadi",
                                                                        "Shahpur",
                                                                        "Shivpura",
                                                                        "Sokali",
                                                                        "Thori Mubarak",
                                                                        "Thori Thambha",
                                                                        "Thori Vadgas",
                                                                        "Thuleta",
                                                                        "Ukhalod",
                                                                        "Vadgas",
                                                                        "Valana",
                                                                        "Vani",
                                                                        "Vanthal",
                                                                        "Vasan",
                                                                        "Vasveliya",
                                                                        "Vekariya",
                                                                        "Zezara"
                                                                    ],
                                                                    DetrojRampura: [
                                                                        "Abasna",
                                                                        "Aghar (Ashoknagar)",
                                                                        "Amarpura",
                                                                        "Balsasan",
                                                                        "Bamroli",
                                                                        "Bantai",
                                                                        "Bhagapura",
                                                                        "Bhankoda",
                                                                        "Bhatariya",
                                                                        "Bhonyni",
                                                                        "Bhonynipura",
                                                                        "Boska",
                                                                        "Chhaniyar",
                                                                        "Dabhsar",
                                                                        "Damodaripura",
                                                                        "Dangarva",
                                                                        "Dekavada",
                                                                        "Detroj",
                                                                        "Fatepura",
                                                                        "Gamanpura",
                                                                        "Ghatisana",
                                                                        "Ghelda",
                                                                        "Gunjala",
                                                                        "Hathipura",
                                                                        "Indrapura",
                                                                        "Jaspura",
                                                                        "Jethipura",
                                                                        "Kantrodi",
                                                                        "Kanz",
                                                                        "Kointiya",
                                                                        "Kukvav",
                                                                        "Madrisana",
                                                                        "Marusana",
                                                                        "Mota Karanpura",
                                                                        "Moti Rantai",
                                                                        "Nadishala",
                                                                        "Nana Karanpura",
                                                                        "Nani Rantai",
                                                                        "Nathpura",
                                                                        "Odhav",
                                                                        "Odhav Paru",
                                                                        "Panar",
                                                                        "Rajpura",
                                                                        "Rampura",
                                                                        "Ratanpura",
                                                                        "Rudatal",
                                                                        "Sadatpura",
                                                                        "Sangpara",
                                                                        "Shihor",
                                                                        "Shobhasan",
                                                                        "Sujpura",
                                                                        "Sunvala",
                                                                        "Telavi",
                                                                        "Umedpura",
                                                                        "Vasna (Chhaniyar)"
                                                                    ],
                                                                    Mandal: [
                                                                        "Anandpura",
                                                                        "Dadhana",
                                                                        "Dalod",
                                                                        "Dhedhasana",
                                                                        "Endla",
                                                                        "Hansalpur Becharaji",
                                                                        "Jalisana",
                                                                        "Kachrol",
                                                                        "Kadvasan",
                                                                        "Kanpura",
                                                                        "Karshanpura",
                                                                        "Kunpur",
                                                                        "Mandal",
                                                                        "Manpura",
                                                                        "Mithapur",
                                                                        "Nana Ubhada",
                                                                        "Navagam",
                                                                        "Nayakpur",
                                                                        "Odaki",
                                                                        "Rakhiyana",
                                                                        "Ribdi",
                                                                        "Sadra",
                                                                        "Sher",
                                                                        "Sinaj",
                                                                        "Sitapur",
                                                                        "Solgam",
                                                                        "Trent",
                                                                        "Ughroj",
                                                                        "Ughrojpura",
                                                                        "Ukardi",
                                                                        "Vanpardi",
                                                                        "Varmor",
                                                                        "Vasna Kunpur",
                                                                        "Vinchhan",
                                                                        "Vinzuvada",
                                                                        "Vithlapur",
                                                                        "Zanzarava"
                                                                    ],
                                                                    Dhandhuka: [
                                                                        "Adval",
                                                                        "Akru",
                                                                        "Ambli",
                                                                        "Anandpur",
                                                                        "Aniyali Bhimji",
                                                                        "Bajarda",
                                                                        "Bavliyari",
                                                                        "Bhadiyad",
                                                                        "Bhalgamda",
                                                                        "Bhangadh",
                                                                        "Bhimtalav",
                                                                        "Buranpur",
                                                                        "Chandarva",
                                                                        "Cher",
                                                                        "Chharodiya",
                                                                        "Chhasiyana",
                                                                        "Dhanala",
                                                                        "Dholera",
                                                                        "Fattepur",
                                                                        "Fedra",
                                                                        "Galsana",
                                                                        "Gamph",
                                                                        "Gogla",
                                                                        "Gorasu",
                                                                        "Gunjar",
                                                                        "Jambuda",
                                                                        "Jasvantpura",
                                                                        "Jethal",
                                                                        "Jivapar",
                                                                        "Kadiyali",
                                                                        "Kansara",
                                                                        "Kansari",
                                                                        "Kansiya",
                                                                    ],
                                                                    Barwala: [
                                                                        "Ankevaliya",
                                                                        "Bela",
                                                                        "Chachariya",
                                                                        "Chokdi",
                                                                        "Dhadhodar",
                                                                        "Hebatpur",
                                                                        "Jharvaliya",
                                                                        "Kapadiyali",
                                                                        "Khadsaliya",
                                                                        "Khambhada",
                                                                        "Khamidana",
                                                                        "Kundal",
                                                                        "Nabhoi",
                                                                        "Navda",
                                                                        "Pipariya",
                                                                        "Polarpur",
                                                                        "Rampura",
                                                                        "Ranpari",
                                                                        "Refda",
                                                                        "Rojid",
                                                                        "Salangpur",
                                                                        "Sangasara",
                                                                        "Shahpur",
                                                                        "Sodhi",
                                                                        "Timbla",
                                                                        "Vadhela",
                                                                        "Vahiya"
                                                                    ],
                                                                }
                                                            },
                                                            Akola: {
                                                                talukas: {
                                                                    Akola: ["Anvapada", "Borgaon", "Ghunegaon", "Jambhli", "Kalapathar", "Khamgaon"],
                                                                    Akot: ["Babhulgaon", "Borgaon", "Borgaon Kd", "Gadchandur", "Ghatna", "Goregaon"],
                                                                    Balapur: ["Babhulgaon", "Fulsawangi", "Gundhana", "Indira Nagar", "Kanhan", "Jambhli"],
                                                                    Barshitakli: ["Adgaon", "Pimpalgaon", "Khamgaon", "Pimpalwadi", "Tharwada", "Nimkheda"],
                                                                    Murtijapur: ["Borgaon", "Kothari", "Malkapur", "Patilwadi", "Raigarh", "Nandgaon"],
                                                                    Patur: ["Borgaon", "Khamgaon", "Nandgaon", "Patilwadi", "Pimpalgaon", "Raipur"],
                                                                    Telhara: ["Babhulgaon", "Borgaon", "Nandgaon", "Pimpalgaon", "Tharwada", "Wadi"]
                                                                }
                                                            },
                                                            Amravati: {
                                                                talukas: {
                                                                    Achalpur: ["Adivala", "Borgaon", "Chandpur", "Dhamangaon", "Ghatpur", "Hingani", "Khamkheda", "Pimpalgaon"],
                                                                    Amravati: ["Adgaon", "Banegaon", "Borgaon", "Hindpur", "Jambhali", "Khamkheda", "Pimpalwadi", "Shiraswadi"],
                                                                    AnjangaonSurji: ["Adgaon", "Bhivpur", "Chandpur", "Jambhli", "Khamkheda", "Pimpalwadi", "Wadi", "Warud"],
                                                                    Bhatkuli: ["Borgaon", "Hingani", "Khamkheda", "Malkapur", "Phulsawangi", "Pimpalgaon", "Wadi", "Zarvade"],
                                                                    ChandurRailway: ["Chandur", "Morshi", "Rajur", "Adgaon", "Hingani", "Shiraswadi", "Jambhli", "Nandgaon"],
                                                                    Chandurbazar: ["Borgaon", "Hingani", "Khamkheda", "Narayanpur", "Rajur", "Shiraswadi", "Wadi", "Khamkheda"],
                                                                    Chikhaldara: ["Chikhaldara", "Wadi", "Adgaon", "Jambhli", "Sangrampur", "Borgaon", "Nandgaon", "Wadi"],
                                                                    Daryapur: ["Daryapur", "Ghatpur", "Hingani", "Pimpalwadi", "Warud", "Adgaon", "Malkapur", "Khamkheda"],
                                                                    DhamangaonRailway: ["Adgaon", "Dhamangaon", "Ghatpur", "Hingani", "Khamkheda", "Wadi", "Phulsawangi"],
                                                                    Dharni: ["Dharni", "Ghatpur", "Jambhli", "Khamkheda", "Malkapur", "Shiraswadi", "Wadi"],
                                                                    Morshi: ["Morshi", "Wadi", "Warud", "Daryapur", "Borgaon", "Phulsawangi", "Shiraswadi", "Adgaon"],
                                                                    NandgaonKhandeshwar: ["Nandgaon", "Phulsawangi", "Malkapur", "Ghatpur", "Wadi", "Shiraswadi"],
                                                                    Teosa: ["Teosa", "Borgaon", "Rajur", "Wadi", "Hingani", "Khamkheda", "Pimpalwadi", "Shiraswadi"],
                                                                    Warud: ["Warud", "Ghatpur", "Malkapur", "Hingani", "Shiraswadi", "Adgaon", "Khamkheda"]
                                                                }
                                                            },
                                                            Aurangabad: {
                                                                talukas: {
                                                                    Aurangabad: ["Adgaon", "Babhulgaon", "Chandpur", "Dhamangaon", "Khamkheda", "Mirkheda", "Nandgaon", "Pimpalwadi"],
                                                                    Gangapur: ["Adgaon", "Hindapur", "Borgaon", "Karjika", "Nimbala", "Siddhpur", "Wadi", "Pimpalgaon"],
                                                                    Kannad: ["Khamkheda", "Pimpalgaon", "Shiraswadi", "Khadakpada", "Vasmat", "Kharmala", "Hadiwara", "Fulsawangi"],
                                                                    Khuldabad: ["Khuldabad", "Wadgaon", "Borgaon", "Khamkheda", "Somanpada", "Pimpalgaon", "Wadi", "Humbali"],
                                                                    Paithan: ["Paithan", "Ranjani", "Shiraswadi", "Babhulgaon", "Wadgaon", "Phulsawangi", "Vasgaon", "Gokulwadi"],
                                                                    Phulambri: ["Phulambri", "Gadhegaon", "Narayanpur", "Pimpalwadi", "Khamkheda", "Gopalwadi", "Khatalwadi", "Wadi"],
                                                                    Sillod: ["Sillod", "Borgaon", "Shiraswadi", "Khamkheda", "Vasmat", "Wadi", "Nimbala", "Fulsawangi"],
                                                                    Soegaon: ["Soegaon", "Wadgaon", "Babhulgaon", "Khamkheda", "Narayanpur", "Pimpalwadi", "Wadi", "Mirkheda"],
                                                                    Vaijapur: ["Vaijapur", "Babhulgaon", "Wadgaon", "Khultabad", "Nimbala", "Khamkheda", "Rajur", "Pandharkawda"]
                                                                }
                                                            },
                                                            Beed: {
                                                                talukas: {
                                                                    Ambajogai: ["Chousala", "Dharmapuri", "Parli", "Malwati", "Pimpalwadi", "Aashti", "Ghatnandur", "Jirewadi"],
                                                                    Ashti: ["Ashti", "Hivare", "Deola", "Dhangarwadi", "Chincholi", "Pathardi", "Kothala", "Pangri"],
                                                                    Beed: ["Beed", "Rajuri", "Nipani", "Hatgaon", "Sonijawala", "Nagewadi", "Manjarsumba", "Padalsingi"],
                                                                    Dharur: ["Dharur", "Yellambghat", "Telgaon", "Ukhalad", "Shirur", "Kaijwadi", "Bodhegaon", "Wadshed"],
                                                                    Georai: ["Georai", "Pachegaon", "Rajur", "Ganeshwadi", "Dongarkini", "Madalmohi", "Kukna", "Takli"],
                                                                    Kaij: ["Kaij", "Bansarola", "Telgaon", "Mandwa", "Pimpalgaon", "Pardi", "Sawargaon", "Aranwadi"],
                                                                    Majalgaon: ["Majalgaon", "Gomalwadi", "Kada", "Dhanora", "Pathri", "Umri", "Kopra", "Bhose"],
                                                                    ParliVaijnath: ["Parli", "Takli", "Ralegaon", "Dhondrai", "Wadshed", "Yellambghat", "Khandgaon", "Sonijawala"],
                                                                    Patoda: ["Patoda", "Kankara", "Loni", "Rajuri", "Talegaon", "Pangri", "Chikhalwadi", "Warad"],
                                                                    Wadwani: ["Wadwani", "Kanherwadi", "Naigaon", "Babhulgaon", "Chumb", "Malegaon", "Hivare", "Deola"],
                                                                    ShirurKasar: ["Shirur Kasar", "Dongargaon", "Rajurwadi", "Takli", "Pangri", "Manur", "Lonwadi", "Padali"]
                                                                }
                                                            },
                                                            Bhandara: {
                                                                talukas: {
                                                                    Bhandara: ["Chandpur", "Pindkepar", "Mandhal", "Adyal", "Madgi", "Palora", "Warthi", "Navegaon"],
                                                                    Tumsar: ["Tumsar", "Morgaon Arjuni", "Ladgaon", "Dhargaon", "Sihora", "Ganeshpur", "Khandara", "Gobarwahi"],
                                                                    Mohadi: ["Mohadi", "Pipari", "Sondad", "Kawadsi", "Mangli", "Lonara", "Navegaon", "Ramakona"],
                                                                    Pauni: ["Pauni", "Bhivapur", "Koka", "Dhargaon", "Karachkheda", "Jamb", "Kawadgaon", "Madgi"],
                                                                    Sakoli: ["Sakoli", "Pohra", "Chicholi", "Murri", "Lohara", "Mohgaon", "Yerla", "Biwapur"],
                                                                    Lakhani: ["Lakhani", "Sawargaon", "Kamptee", "Belgaon", "Manegaon", "Dighori", "Palandur", "Murkhala"],
                                                                    Lakhandur: ["Lakhandur", "Deori", "Mundhari", "Kosambi", "Asola", "Mangli", "Belapur", "Kaneri"]
                                                                }
                                                            },
                                                            Buldhana: {
                                                                talukas: {
                                                                    Buldhana: ["Chikhali", "Pimpalgaon Raja", "Dhad", "Borakhedi", "Bawanbir", "Anjani", "Umali", "Khamgaon"],
                                                                    Chikhli: ["Chikhli", "Rajur", "Khanapur", "Jalgaon", "Takarkheda", "Deulgaon Dhudh", "Sakhar Kherda", "Pangarkhed"],
                                                                    DeulgaonRaja: ["Deulgaon Raja", "Rohinkhed", "Kardkhed", "Bodkha", "Manegaon", "Talegaon", "Amdapur", "Chandol"],
                                                                    Malkapur: ["Malkapur", "Nimgaon", "Soner", "Pimpalgaon Kale", "Borkhedi", "Palaskhed", "Rajur", "Tambol"],
                                                                    Motala: ["Motala", "Loni", "Paturda", "Motha", "Dhanora", "Kolwad", "Shelgaon", "Giroli"],
                                                                    Nandura: ["Nandura", "Mahatpur", "Pimpalgaon Kale", "Shivani", "Tamgaon", "Palaskhed", "Ladgaon", "Manegaon"],
                                                                    Mehkar: ["Mehkar", "Shelgaon", "Sindkhed", "Lonar", "Takli", "Adgaon", "Kolwad", "Sakharkherda"],
                                                                    SindkhedRaja: ["Sindkhed Raja", "Raja Takli", "Kolgaon", "Deulgaon Mahi", "Takli", "Borakhedi", "Bhivpur", "Shevti"],
                                                                    Lonar: ["Lonar", "Ajantha", "Khamgaon", "Murtijapur", "Chondi", "Jambhrun", "Bori", "Babhulgaon"],
                                                                    Khamgaon: ["Khamgaon", "Nandura", "Jalgaon", "Bodwad", "Pimpalgaon", "Soner", "Palaskhed", "Deulgaon Raja"],
                                                                    Shegaon: ["Shegaon", "Akot", "Akola", "Balapur", "Khamgaon", "Patur", "Paturda", "Loni"],
                                                                    JalgaonJamod: ["Jalgaon Jamod", "Telhara", "Akot", "Washim", "Murtijapur", "Shegaon", "Balapur", "Patur"],
                                                                    Sangrampur: ["Sangrampur", "Sonala", "Tunki", "Warwat", "Shivpur", "Pandhurna", "Dhamangaon", "Malegaon"]
                                                                }
                                                            },
                                                            Chandrapur: {
                                                                talukas: {
                                                                    Chandrapur: ["Durgapur", "Pathanpura", "Bhari", "Chargaon", "Gourala", "Tadoba", "Ramnagar", "Mul Road"],
                                                                    Ballarpur: ["Ballarpur", "Sasti", "Manikgarh", "Padmapur", "Hingoli", "Nandgaon", "Bamni", "Wadgaon"],
                                                                    Warora: ["Warora", "Bhivkund", "Nandori", "Tadali", "Bramhapuri", "Nimgaon", "Somnath", "Khutala"],
                                                                    Bhadravati: ["Bhadravati", "Chora", "Sasti", "Ghatkul", "Manikgarh", "Hirapur", "Padmapur", "Umri"],
                                                                    Chimur: ["Chimur", "Makardhokda", "Lohara", "Navegaon", "Junona", "Palasgaon", "Bramhanwada", "Antargaon"],
                                                                    Nagbhid: ["Nagbhid", "Morgaon", "Dighori", "Pombhurna", "Tukum", "Chargaon", "Gondmohadi", "Umri"],
                                                                    Bramhapuri: ["Bramhapuri", "Wadsa", "Chandankheda", "Kothari", "Devgaon", "Khopadi", "Bamanpeth", "Pathari"],
                                                                    Sindewahi: ["Sindewahi", "Sasti", "Manikgarh", "Padmapur", "Chora", "Bhivkund", "Saraswati", "Umari"],
                                                                    Mul: ["Mul", "Rajoli", "Ghot", "Devgaon", "Mundipar", "Somnath", "Waghala", "Junona"],
                                                                    Saoli: ["Saoli", "Dongargaon", "Junona", "Umargaon", "Manikgarh", "Padmapur", "Bhivkund", "Nandgaon"],
                                                                    Gondpimpri: ["Gondpimpri", "Chargaon", "Pathari", "Ramala", "Mundipar", "Somnath", "Waghala", "Umari"],
                                                                    Pombhurna: ["Pombhurna", "Tadoba", "Junona", "Somnath", "Bramhapuri", "Navegaon", "Palasgaon", "Makardhokda"],
                                                                    Rajura: ["Rajura", "Ballarpur", "Chargaon", "Junona", "Wadgaon", "Manikgarh", "Sasti", "Bamni"],
                                                                    Korpana: ["Korpana", "Pathari", "Rajoli", "Somnath", "Devgaon", "Bramhapuri", "Makardhokda", "Nandgaon"],
                                                                    Jiwati: ["Jiwati", "Dongargaon", "Palasgaon", "Navegaon", "Waghala", "Chargaon", "Rajoli", "Umri"]
                                                                }
                                                            },
                                                            Dhule: {
                                                                talukas: {
                                                                    Dhule: ["Avadhan", "Mohadi", "Nardana", "Laling", "Malkhede", "Babhale", "Valane", "Ashta"],
                                                                    Sakri: ["Sakri", "Pimparkhed", "Nimdale", "Dhadane", "Navapur", "Waghale", "Borale", "Jamane"],
                                                                    Shirpur: ["Shirpur", "Tonde", "Pimpri", "Kapadane", "Shirpur Waghadi", "Holnanthe", "Somthana", "Vikharan"],
                                                                    Sindkheda: ["Sindkheda", "Amode", "Nimgul", "Morde", "Balhane", "Dhaner", "Jatode", "Waghadi"]
                                                                }
                                                            },
                                                            Gadchiroli: {
                                                                talukas: {
                                                                    Gadchiroli: ["Gadchiroli", "Panderwani", "Chamorshi", "Markanda", "Ashti", "Bhamragad", "Zingaon", "Talasgaon"],
                                                                    Dhanora: ["Dhanora", "Rangi", "Pusgaon", "Kondawahi", "Mendha", "Bhagwanpur", "Navargaon", "Potegaon"],
                                                                    Aheri: ["Aheri", "Rajaram", "Bhamragad", "Ghot", "Mahagaon", "Parandoli", "Jimalgatta", "Dharmapuri"],
                                                                    Sironcha: ["Sironcha", "Perimilli", "Alapalli", "Kondapalli", "Manikgarh", "Rajura", "Bendri", "Tummidihatti"],
                                                                    Chamorshi: ["Chamorshi", "Mulchera", "Potegaon", "Ashti", "Saigaon", "Jimalgatta", "Bamanpeth", "Zingaon"],
                                                                    Mulchera: ["Mulchera", "Durgapur", "Alapalli", "Sawargaon", "Dhanora", "Kondawahi", "Kasansur", "Pataguda"],
                                                                    Etapalli: ["Etapalli", "Kandoli", "Ghot", "Potegaon", "Mahagaon", "Kasansur", "Rangi", "Jimalgatta"],
                                                                    Bhamragad: ["Bhamragad", "Gadchiroli", "Wadsa", "Zingaon", "Durgapur", "Chamorshi", "Jimalgatta", "Ashti"],
                                                                    Wadsa: ["Wadsa", "Sawargaon", "Dhanora", "Brahmapuri", "Panderwani", "Mendha", "Rangi", "Potegaon"],
                                                                    Armori: ["Armori", "Markanda", "Talasgaon", "Rajaram", "Kondapalli", "Mahagaon", "Rajura", "Ghot"],
                                                                    Kurkheda: ["Kurkheda", "Korchi", "Pusgaon", "Jimalgatta", "Potegaon", "Kasansur", "Durgapur", "Bhamragad"],
                                                                    Korchi: ["Korchi", "Kurkheda", "Ashti", "Sawargaon", "Rangi", "Pusgaon", "Talasgaon", "Zingaon"]
                                                                }
                                                            },
                                                            Gondia: {
                                                                talukas: {
                                                                    Gondia: ["Fulchur", "Nimgaon", "Gonditola", "Mundipar", "Gondia", "Pipariya", "Mendha", "Satgaon"],
                                                                    Tirora: ["Tirora", "Deori", "Amgaon", "Mohadi", "Sakoli", "Borgaon", "Rajegaon", "Mangeli"],
                                                                    Goregaon: ["Goregaon", "Pindkepar", "Katangi", "Murpar", "Navegaon", "Barabhati", "Chichgad", "Balapur"],
                                                                    Deori: ["Deori", "Mangrukheda", "Chorkhamara", "Parasdoh", "Lohara", "Pandharwani", "Malgaon", "Khamari"],
                                                                    Amgaon: ["Amgaon", "Mohadi", "Salekasa", "Shivani", "Dhotra", "Nawatola", "Ambadi", "Parsodi"],
                                                                    Salekasa: ["Salekasa", "Pujaritola", "Pindkepar", "Sarekha", "Dhabetola", "Manditola", "Keshori", "Gonditola"],
                                                                    ArjuniMorgaon: ["Arjuni", "Morgaon", "Navegaon", "Chichgad", "Bopli", "Pathari", "Chorkhamara", "Waghodi"],
                                                                    SadakArjuni: ["Sadak Arjuni", "Katangi", "Borgaon", "Nandgaon", "Khamari", "Mundipar", "Satgaon", "Mangrukheda"]
                                                                }
                                                            },
                                                            Hingoli: {
                                                                talukas: {
                                                                    Hingoli: ["Hingoli", "Pangra", "Narsi", "Dhamangaon", "Gundegaon", "Satephal", "Talegaon", "Malegaon"],
                                                                    Kalamnuri: ["Kalamnuri", "Sawangi", "Ekurka", "Tadkalas", "Jawala", "Adgaon", "Pimpri", "Rajur"],
                                                                    Sengaon: ["Sengaon", "Gokulwadi", "Hatgaon", "Shelgaon", "Banegaon", "Pimpri", "Tandulwadi", "Wadshed"],
                                                                    AundhaNagnath: ["Aundha Nagnath", "Palsi", "Hatgaon", "Wadshed", "Dhanora", "Talegaon", "Jawala", "Ekurka"],
                                                                    Basmath: ["Basmath", "Digras", "Rajur", "Nandapur", "Pangra", "Loni", "Tondapur", "Banegaon"]
                                                                }
                                                            },
                                                            Jalgaon: {
                                                                talukas: {
                                                                    Jalgaon: ["Asoda", "Bhadli", "Chincholi", "Ekurka", "Neri", "Pimpri", "Rajur", "Umale"],
                                                                    Pachora: ["Pachora", "Adgaon", "Ekurka", "Hatgaon", "Khedgaon", "Mhasdi", "Vadshed", "Wadshed"],
                                                                    Amalner: ["Amalner", "Dharangaon", "Hatgaon", "Lohagad", "Rajur", "Shelgaon", "Takali", "Umardi"],
                                                                    Yawal: ["Yawal", "Faizpur", "Hatgaon", "Neri", "Raver", "Rajur", "Sakri", "Tondapur"],
                                                                    Erandol: ["Erandol", "Hatgaon", "Rajur", "Pimpri", "Mhasdi", "Wadshed", "Loni", "Tondapur"],
                                                                    Bhusawal: ["Bhusawal", "Hatgaon", "Neri", "Rajur", "Shelgaon", "Faizpur", "Pachora", "Takali"],
                                                                    Chalisgaon: ["Chalisgaon", "Adgaon", "Faizpur", "Hatgaon", "Rajur", "Takali", "Umardi", "Mhasdi"],
                                                                    Jamner: ["Jamner", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Wadshed", "Umardi", "Loni"],
                                                                    Bhadgaon: ["Bhadgaon", "Adgaon", "Hatgaon", "Neri", "Rajur", "Shelgaon", "Takali", "Tondapur"],
                                                                    Chopda: ["Chopda", "Ekurka", "Hatgaon", "Lohagad", "Rajur", "Shelgaon", "Tondapur", "Wadshed"],
                                                                    Raver: ["Raver", "Faizpur", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Umardi", "Tondapur"],
                                                                    Dharangaon: ["Dharangaon", "Adgaon", "Hatgaon", "Loni", "Rajur", "Shelgaon", "Takali", "Wadshed"],
                                                                    Parola: ["Parola", "Ekurka", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Tondapur", "Umardi"],
                                                                    Muktainagar: ["Muktainagar", "Hatgaon", "Neri", "Rajur", "Shelgaon", "Takali", "Tondapur", "Wadshed"],
                                                                    Bodwad: ["Bodwad", "Adgaon", "Ekurka", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Wadshed"]
                                                                }
                                                            },
                                                            Jalna: {
                                                                talukas: {
                                                                    Jalna: ["Jalna", "Rajur", "Babhulgaon", "Pimpalgaon", "Gundegaon", "Wadshed", "Lohagad", "Dongaon"],
                                                                    Badnapur: ["Badnapur", "Takali", "Banegaon", "Lahora", "Palaskheda", "Shedgaon", "Hatgaon", "Loni"],
                                                                    Ghansawangi: ["Ghansawangi", "Ekurka", "Sultanpur", "Rajur", "Pimpalgaon", "Tembhurni", "Gokulwadi", "Adgaon"],
                                                                    Partur: ["Partur", "Shelgaon", "Rajur", "Dhangarwadi", "Kolwadi", "Pangra", "Banegaon", "Sadegaon"],
                                                                    Mantha: ["Mantha", "Hatgaon", "Nandapur", "Chinchkheda", "Devgaon", "Nivdunga", "Gunj", "Kolwadi"],
                                                                    Bhokardan: ["Bhokardan", "Loni", "Ekurka", "Golegaon", "Pipalgaon Renukai", "Chinchpur", "Banegaon", "Rajur"],
                                                                    Ambad: ["Ambad", "Gundegaon", "Babhulgaon", "Sultanpur", "Takali", "Dongaon", "Hatgaon", "Banegaon"]
                                                                }
                                                            },
                                                            Kolhapur: {
                                                                talukas: {
                                                                    Shahuwadi: ["Shahuwadi", "Dhamapur", "Wadi", "Pimpalgaon", "Malkapur", "Borgaon", "Rajur", "Sakri"],
                                                                    Panhala: ["Panhala", "Wadi", "Babhulgaon", "Rajur", "Mundapur", "Sangvi", "Vasai", "Malkapur"],
                                                                    Hatkanangale: ["Hatkanangale", "Pimpalgaon", "Babhulgaon", "Rajur", "Wadi", "Malkapur", "Sangvi", "Vasai"],
                                                                    Shirol: ["Shirol", "Pimpalgaon", "Rajur", "Malkapur", "Wadi", "Babhulgaon", "Sangvi", "Vasai"],
                                                                    Karveer: ["Karveer", "Rajur", "Babhulgaon", "Pimpalgaon", "Malkapur", "Wadi", "Vasai", "Mundapur"],
                                                                    Gaganbawada: ["Gaganbawada", "Malkapur", "Rajur", "Babhulgaon", "Pimpalgaon", "Vasai", "Wadi", "Sangvi"],
                                                                    Radhanagari: ["Radhanagari", "Sakri", "Babhulgaon", "Rajur", "Mundapur", "Wadi", "Vasai", "Malkapur"],
                                                                    Kagal: ["Kagal", "Sangvi", "Babhulgaon", "Pimpalgaon", "Rajur", "Malkapur", "Wadi", "Vasai"],
                                                                    Bhudargad: ["Bhudargad", "Rajur", "Mundapur", "Vasai", "Babhulgaon", "Sangvi", "Pimpalgaon", "Malkapur"],
                                                                    Ajara: ["Ajara", "Babhulgaon", "Pimpalgaon", "Rajur", "Malkapur", "Vasai", "Wadi", "Sangvi"],
                                                                    Gadhinglaj: ["Gadhinglaj", "Rajur", "Malkapur", "Wadi", "Babhulgaon", "Sangvi", "Pimpalgaon", "Vasai"],
                                                                    Chandgad: ["Chandgad", "Mundapur", "Rajur", "Sangvi", "Babhulgaon", "Vasai", "Pimpalgaon", "Malkapur"]
                                                                }
                                                            },
                                                            Latur: {
                                                                talukas: {
                                                                    Latur: ["Latur", "Pimpalgaon", "Wadi", "Adgaon", "Sangavi", "Mundapur", "Gundegaon", "Dhamangaon"],
                                                                    Ausa: ["Ausa", "Khandvi", "Babhulgaon", "Rajur", "Pimpalgaon", "Malkapur", "Sakri", "Borgaon"],
                                                                    Renapur: ["Renapur", "Babhulgaon", "Rajur", "Mundapur", "Pimpalgaon", "Malkapur", "Vasai", "Shiraswadi"],
                                                                    Nilanga: ["Nilanga", "Gondgaon", "Babhulgaon", "Pimpalgaon", "Rajur", "Wadi", "Sangvi", "Vasai"],
                                                                    Udgir: ["Udgir", "Pimpalgaon", "Babhulgaon", "Rajur", "Wadi", "Malkapur", "Gondgaon", "Sangvi"],
                                                                    Jalkot: ["Jalkot", "Pimpalgaon", "Mundapur", "Vasai", "Rajur", "Babhulgaon", "Sangvi", "Borgaon"],
                                                                    Ahmedpur: ["Ahmedpur", "Mundapur", "Pimpalgaon", "Rajur", "Vasai", "Babhulgaon", "Malkapur", "Shiraswadi"],
                                                                    Chakur: ["Chakur", "Babhulgaon", "Rajur", "Pimpalgaon", "Malkapur", "Vasai", "Wadi", "Sangvi"],
                                                                    ShirurAnantpal: ["Shirur Anantpal", "Pimpalgaon", "Babhulgaon", "Rajur", "Wadi", "Sangvi", "Vasai", "Mundapur"],
                                                                    Deoni: ["Deoni", "Rajur", "Babhulgaon", "Vasai", "Malkapur", "Pimpalgaon", "Shiraswadi", "Sangvi"]
                                                                }
                                                            },
                                                            Mumbai: {
                                                                talukas: {
                                                                    MumbaiCity: ["Kandivali", "Andheri", "Bandra", "Goregaon", "Mulund", "Vile Parle", "Dadar", "Colaba", "Mahim", "Lower Parel", "Malad", "Bhandup", "Jogeshwari", "Mira Road", "Dahisar"]
                                                                }
                                                            },
                                                            MumbaiSuburban: {
                                                                talukas: {
                                                                    Andheri: [
                                                                        "Andheri West",
                                                                        "Andheri East",
                                                                        "Chakala",
                                                                        "Four Bungalows",
                                                                        "Oshiwara",
                                                                        "Juhu",
                                                                        "Vile Parle",
                                                                        "Jogeshwari",
                                                                        "Marol",
                                                                        "Andheri (Kurla Road)",
                                                                        "Saki Naka",
                                                                        "Mogra",
                                                                        "Kandivali",
                                                                        "Malad",
                                                                        "Dindoshi",
                                                                        "Versova"
                                                                    ],
                                                                    Borivali: [
                                                                        "Borivali West",
                                                                        "Borivali East",
                                                                        "Kandarpada",
                                                                        "Shimpoli",
                                                                        "Eksar",
                                                                        "Kandivali Village",
                                                                        "Raghunath Nagar",
                                                                        "Dahanukarwadi",
                                                                        "Sunder Nagar",
                                                                        "Kandivali East",
                                                                        "Devipada",
                                                                        "Shree Nagar",
                                                                        "Mogra",
                                                                        "Gorai",
                                                                        "Marve",
                                                                        "Dattapada",
                                                                        "Raval Pada",
                                                                        "Bhayandar",
                                                                        "Mira Road"
                                                                    ],
                                                                    Kurla: [
                                                                        "Kurla East",
                                                                        "Kurla West",
                                                                        "Nehrunagar",
                                                                        "Nandivali",
                                                                        "Ghatkopar",
                                                                        "Vidya Nagar",
                                                                        "Chandivali",
                                                                        "LBS Nagar",
                                                                        "Shahad",
                                                                        "Kolivada",
                                                                        "Mankhurd",
                                                                        "Marol",
                                                                        "Shivaji Nagar",
                                                                        "Kherwadi",
                                                                        "Kurla Village",
                                                                        "LBS Road"
                                                                    ],
                                                                    Kandivali: [
                                                                        "Kandivali West",
                                                                        "Kandivali East",
                                                                        "Thakur Village",
                                                                        "Borivali West",
                                                                        "Dahanukarwadi",
                                                                        "Kandarpada",
                                                                        "Shimpoli",
                                                                        "Pahadi Eksar",
                                                                        "Kandivali Village",
                                                                        "Malad West",
                                                                        "Oshiwara",
                                                                        "Goregaon East",
                                                                        "Mogra",
                                                                        "Kandivali (East)"
                                                                    ],
                                                                    Malad: [
                                                                        "Malad West",
                                                                        "Malad East",
                                                                        "Goregaon West",
                                                                        "Goregaon East",
                                                                        "Dindoshi",
                                                                        "Jogeshwari West",
                                                                        "Kandarpada",
                                                                        "Pahadi Eksar",
                                                                        "Kandivali East",
                                                                        "Oshiwara",
                                                                        "Dahisar",
                                                                        "Mogra",
                                                                        "Shimpoli",
                                                                        "Marve",
                                                                        "Madh Island",
                                                                        "Versova",
                                                                        "Marve Village",
                                                                        "Bangur Nagar",
                                                                        "Malwani",
                                                                        "Kandivali Village"
                                                                    ],
                                                                    Goregaon: [
                                                                        "Goregaon West",
                                                                        "Goregaon East",
                                                                        "Dindoshi",
                                                                        "Malad East",
                                                                        "Malad West",
                                                                        "Jogeshwari East",
                                                                        "Jogeshwari West",
                                                                        "Shastri Nagar",
                                                                        "Oshiwara",
                                                                        "Chandivali",
                                                                        "Pahadi Eksar",
                                                                        "Kandarpada",
                                                                        "Kandivali East",
                                                                        "Shivaji Nagar",
                                                                        "Goregaon Village",
                                                                        "Mogra",
                                                                        "Bangur Nagar",
                                                                        "Veera Desai Road"
                                                                    ],
                                                                    VileParle: [
                                                                        "Vile Parle East",
                                                                        "Vile Parle West",
                                                                        "Parle Village",
                                                                        "Shastri Nagar",
                                                                        "N.S. Road",
                                                                        "Ramalay",
                                                                        "Hirabai",
                                                                        "Mogra",
                                                                        "Vishnu Nagar",
                                                                        "Sunder Nagar",
                                                                        "Samarth Nagar",
                                                                        "Andheri East",
                                                                        "Chandivali",
                                                                        "Goregaon East"
                                                                    ],
                                                                    Mulund: [
                                                                        "Mulund West",
                                                                        "Mulund East",
                                                                        "Nirmal Nagar",
                                                                        "LBS Nagar",
                                                                        "Ashok Nagar",
                                                                        "Tata Colony",
                                                                        "Jambhli Naka",
                                                                        "Goregaon East",
                                                                        "Jivdani",
                                                                        "Kandarpada",
                                                                        "Bhandup West",
                                                                        "Bhandup East",
                                                                        "Mahul",
                                                                        "Sunderwadi",
                                                                        "Wadi Bunder",
                                                                        "Lokmanya Nagar"
                                                                    ],
                                                                    Bhandup: [
                                                                        "Bhandup West",
                                                                        "Bhandup East",
                                                                        "Nirmal Nagar",
                                                                        "Lokmanya Nagar",
                                                                        "Mulund West",
                                                                        "Mulund East",
                                                                        "Shivaji Nagar",
                                                                        "Wadi Bunder",
                                                                        "Kandarpada",
                                                                        "Jambhli Naka",
                                                                        "Kanjurmarg East",
                                                                        "Kanjurmarg West",
                                                                        "Mahul",
                                                                        "Bhandup Village",
                                                                        "Sunderwadi",
                                                                        "Ganesh Nagar",
                                                                        "Vasai Village"
                                                                    ],
                                                                    Jogeshwari: [
                                                                        "Jogeshwari West",
                                                                        "Jogeshwari East",
                                                                        "Eksar Village",
                                                                        "Oshiwara",
                                                                        "Shastri Nagar",
                                                                        "Goregaon East",
                                                                        "Kandarpada",
                                                                        "Chandivali",
                                                                        "Kandivali East",
                                                                        "Veera Desai Road",
                                                                        "Mogra",
                                                                        "Bangur Nagar",
                                                                        "Vishnu Nagar",
                                                                        "Marol",
                                                                        "Andheri East"
                                                                    ],
                                                                    MiraBhayandar: [
                                                                        "Mira Road",
                                                                        "Bhayandar West",
                                                                        "Bhayandar East",
                                                                        "Mira Village",
                                                                        "Naya Nagar",
                                                                        "Golden Nest",
                                                                        "Shanti Nagar",
                                                                        "Kandarpada",
                                                                        "Dahisar East",
                                                                        "Dahisar West",
                                                                        "Nandivali",
                                                                        "Kanakia",
                                                                        "Mira-Bhayandar Road",
                                                                        "Panchwati",
                                                                        "Naya Nagar",
                                                                        "Kashimira"
                                                                    ],
                                                                    Dahisar: [
                                                                        "Dahisar West",
                                                                        "Dahisar East",
                                                                        "Dahisar Village",
                                                                        "Kandarpada",
                                                                        "Shimpoli",
                                                                        "Nandivali",
                                                                        "Raghunath Nagar",
                                                                        "Kashimira",
                                                                        "Naya Nagar",
                                                                        "Devipada",
                                                                        "Panchpakhadi",
                                                                        "Mira Road East",
                                                                        "Mira Road West",
                                                                        "Borivali East"
                                                                    ]

                                                                }
                                                            },
                                                            NaviMumbai: {
                                                                talukas: {
                                                                    NaviMumbai: ["Airoli", "Belapur", "Kharghar", "Kopar Khairane", "Marine Lines", "Seawoods", "Vashi"],
                                                                    Uran: ["Adgaon", "Bhingari", "Dronagiri", "Karanja", "Panje", "Uran", "Ulwe"],
                                                                    Panvel: ["New Panvel", "Kamothe", "Kharghar", "Nere", "Mansarovar", "Vihighar"]
                                                                }
                                                            },

                                                            Nanded: {
                                                                talukas: {
                                                                    Nanded: ["Nanded", "Jambhali", "Pimpalgaon", "Malkapur", "Wadgaon", "Borgaon", "Mundapur", "Adgaon"],
                                                                    Ardhapur: ["Ardhapur", "Sakri", "Wadi", "Gundegaon", "Khairgaon", "Rajur", "Pimpalgaon", "Dhamangaon"],
                                                                    Bhokar: ["Bhokar", "Chandrapur", "Rajur", "Pimpalgaon", "Wadi", "Malkapur", "Vasai", "Borgaon"],
                                                                    Mudkhed: ["Mudkhed", "Wadgaon", "Shiraswadi", "Pimpalgaon", "Vasai", "Khadakpada", "Babhulgaon", "Rajur"],
                                                                    Biloli: ["Biloli", "Rajur", "Nandgaon", "Gondgaon", "Chandpur", "Sangvi", "Pimpalgaon", "Borgaon"],
                                                                    Naigaon: ["Naigaon", "Chandrapur", "Babhulgaon", "Pimpalgaon", "Mundapur", "Malkapur", "Wadi", "Sangvi"],
                                                                    Degloor: ["Degloor", "Pimpalgaon", "Vasai", "Khaira", "Rajur", "Mundapur", "Adgaon", "Wadi"],
                                                                    Mukhed: ["Mukhed", "Pimpalgaon", "Shiraswadi", "Khandvi", "Rajur", "Babhulgaon", "Malkapur", "Sakri"],
                                                                    Dharmabad: ["Dharmabad", "Malkapur", "Pimpalgaon", "Rajur", "Wadi", "Sangvi", "Gundegaon", "Wadgaon"],
                                                                    Umri: ["Umri", "Pimpalgaon", "Rajur", "Malkapur", "Babhulgaon", "Khaira", "Adgaon", "Sangvi"],
                                                                    Hadgaon: ["Hadgaon", "Rajur", "Vasai", "Mundapur", "Wadgaon", "Babhulgaon", "Pimpalgaon", "Sangvi"],
                                                                    Himayatnagar: ["Himayatnagar", "Rajur", "Wadi", "Sakri", "Vasai", "Pimpalgaon", "Babhulgaon", "Malkapur"],
                                                                    Kandhar: ["Kandhar", "Vasai", "Rajur", "Mundapur", "Sangvi", "Babhulgaon", "Pimpalgaon", "Shiraswadi"],
                                                                    Loha: ["Loha", "Rajur", "Pimpalgaon", "Vasai", "Malkapur", "Sangvi", "Babhulgaon", "Sakri"],
                                                                    Kinwat: ["Kinwat", "Wadi", "Pimpalgaon", "Rajur", "Malkapur", "Babhulgaon", "Vasai", "Sangvi"],
                                                                    Mahur: ["Mahur", "Pimpalgaon", "Rajur", "Vasai", "Mundapur", "Sangvi", "Wadi", "Babhulgaon"]
                                                                }
                                                            },
                                                            Nandurbar: {
                                                                talukas: {
                                                                    Nandurbar: ["Nandurbar", "Madhwa", "Pimpalgaon", "Khamkheda", "Dhamangaon", "Sakri", "Borvihir", "Kakadwadi"],
                                                                    Navapur: ["Navapur", "Sakri", "Dhamangaon", "Waghpur", "Valvi", "Rajur", "Vasai", "Sahapur"],
                                                                    Shahada: ["Shahada", "Jalgaon", "Khandvi", "Babhulgaon", "Pimpalgaon", "Wadi", "Sakri", "Borgaon"],
                                                                    Taloda: ["Taloda", "Khandvi", "Sakri", "Jambhli", "Vasai", "Pimpalgaon", "Waghpur", "Malkapur"],
                                                                    Akrani: ["Akrani", "Babhulgaon", "Dahigaon", "Wadgaon", "Khandvi", "Malkapur", "Sakri", "Rajur"],
                                                                    Akkalkuwa: ["Akkalkuwa", "Babhulgaon", "Rajur", "Wadi", "Khachari", "Sakri", "Dahigaon", "Pimpalgaon"]
                                                                }
                                                            },
                                                            Osmanabad: {
                                                                talukas: {
                                                                    Bhoom: ["Bhoom", "Anvapada", "Pimpalgaon", "Nandgaon", "Ranjala", "Wadi", "Sundapur", "Malkapur"],
                                                                    Kalamb: ["Kalamb", "Babhulgaon", "Lohgaon", "Khandvi", "Borgaon", "Malkapur", "Babhulwadi", "Mhasla"],
                                                                    Lohara: ["Lohara", "Gundegaon", "Narayanpur", "Borgaon", "Hirapur", "Patonda", "Pimpalgaon", "Sakharwadi"],
                                                                    Omerga: ["Omerga", "Baranjala", "Babhulgaon", "Lohgaon", "Salebhavi", "Bhivpur", "Malkapur", "Wadi"],
                                                                    Osmanabad: ["Osmanabad", "Adgaon", "Sailu", "Malkapur", "Kumbhari", "Ranjangaon", "Jambhli", "Nandgaon"],
                                                                    Paranda: ["Paranda", "Babhulgaon", "Rajur", "Chandrapur", "Vasai", "Wadi", "Adgaon", "Nandgaon"],
                                                                    Tuljapur: ["Tuljapur", "Sangamner", "Sirsala", "Patoda", "Malkapur", "Khandvi", "Baranjala", "Garkheda"],
                                                                    Washi: ["Washi", "Babhulgaon", "Hirapur", "Malkapur", "Khandvi", "Rajur", "Gundegaon", "Bhivpur"]
                                                                }
                                                            },
                                                            Palghar: {
                                                                talukas: {
                                                                    Palghar: ["Palghar", "Saphale", "Dahisar", "Shiras", "Gokhiware", "Suryamal", "Vasai", "Kadavali", "Sambalpur"],
                                                                    Vasai: ["Vasai", "Nalla Sopara", "Bhayandar", "Naigaon", "Vaitarna", "Vasai East", "Vasai West", "Mira Road", "Dahanukarwadi"],
                                                                    Dahanu: ["Dahanu", "Aswali", "Panchal", "Vada", "Bhivpur", "Jambhul", "Khamgaon", "Mhasla", "Sawarpada"],
                                                                    Talasari: ["Talasari", "Gundavli", "Vadhwana", "Chandwad", "Vasai Road", "Babhulgaon", "Pimpalgaon", "Kudus"],
                                                                    Wada: ["Wada", "Nimkheda", "Sailu", "Valvi", "Dhaman", "Gondali", "Kheda", "Anvapada", "Vasanpada"],
                                                                    Vikramgad: ["Vikramgad", "Murbad", "Chandrapada", "Vadhgaon", "Chinchpada", "Babhulgaon", "Mhasla"],
                                                                    Jawhar: ["Jawhar", "Nandgaon", "Khandvi", "Shirpur", "Pimpalgaon", "Dhamangaon", "Anvapada", "Jambhi", "Sarsai"],
                                                                    Mokhada: ["Mokhada", "Hirapur", "Pimpalgaon", "Vasai", "Gokhiware", "Kendrapada", "Dhakne", "Babhulgaon"]
                                                                }
                                                            },
                                                            Parbhani: {
                                                                talukas: {
                                                                    Parbhani: ["Adgaon", "Khamgaon", "Shiraswadi", "Chinchkheda", "Mhasla", "Sangvi", "Sawargaon", "Mandvi"],
                                                                    Selu: ["Selu", "Lohgaon", "Sirsala", "Malkapur", "Babhulgaon", "Pimpalgaon", "Vadhona", "Anvapada"],
                                                                    Jintur: ["Jintur", "Khamgaon", "Pimpalgaon", "Garkheda", "Adgaon", "Dhamangaon", "Siddheshwar"],
                                                                    Gangakhed: ["Gangakhed", "Dharangaon", "Chandpur", "Pimpalgaon", "Vasai", "Sungawadi", "Rajur", "Nandgaon"],
                                                                    Purna: ["Purna", "Ashti", "Banegaon", "Karajgaon", "Karkheda", "Khandvi", "Garkheda"],
                                                                    Palam: ["Palam", "Anvapada", "Janglat", "Aundha", "Vanjala", "Shivkheda", "Mhasala"],
                                                                    Pathri: ["Pathri", "Jamdapur", "Shirapur", "Malkapur", "Wadi", "Mankapur", "Lohgaon", "Mandvi"],
                                                                    Manwath: ["Manwath", "Patonda", "Malkapur", "Vasanpada", "Sirsala", "Wadi", "Shiraswadi", "Kharda"],
                                                                    Sonpeth: ["Sonpeth", "Shiraswadi", "Pimpalgaon", "Rajur", "Adgaon", "Gangpur", "Wadgaon", "Wadi"]
                                                                }
                                                            },
                                                            Pune: {
                                                                talukas: {
                                                                    PuneCity: ["Shivajinagar", "Kothrud", "Aundh", "Wakad", "Hadapsar", "Viman Nagar", "Hinjewadi", "Pimple Saudagar"],
                                                                    Haveli: ["Tathawade", "Bhosari", "Talegaon Dhamdhere", "Loni Kalbhor", "Fursungi", "Yerwada", "Khadki", "Sangvi"],
                                                                    Maval: ["Kamshet", "Tungarli", "Panshet", "Lonavala", "Karjat", "Kalamb", "Alandi", "Bhor", "Banegaon"],
                                                                    Mulshi: ["Pune", "Panshet", "Tungarli", "Lonavala", "Lavale", "Vichumbe", "Sakharwadi"],
                                                                    Shirur: ["Shirur", "Malshej Ghat", "Alapur", "Chinchwad", "Shiraswadi"],
                                                                    Baramati: ["Baramati", "Indapur", "Dhayat", "Salumbra", "Kundalwadi", "Talegaon"],
                                                                    Daund: ["Daund", "Malshej", "Koregaon", "Chinchani", "Ranjangaon", "Wadi"],
                                                                    Indapur: ["Indapur", "Saswad", "Sangavi", "Waghapur", "Jambhul", "Kotharwadi"],
                                                                    Bhor: ["Bhor", "Nandgaon", "Babhulgaon", "Chinchwad", "Chandrapur", "Vada"],
                                                                    Velhe: ["Velhe", "Bhivpur", "Borgaon", "Mahad", "Wadgaon", "Jambhali"],
                                                                    Purandar: ["Purandar", "Narhe", "Pimpalgaon", "Shirasgaon", "Sangvi", "Saswad"],
                                                                    Khed: ["Khed", "Rajgurunagar", "Pimpri", "Mochana", "Goregaon"],
                                                                    Junnar: ["Junnar", "Pimpalgaon", "Ambegaon", "Kondhwa", "Rajewadi"],
                                                                    Ambegaon: ["Ambegaon", "Chandwad", "Khandala", "Narayanpur", "Hadiyala", "Borgaon"],
                                                                    PimpriChinchwadCity: ["Bhosari", "Pimpri", "Chinchwad", "Wakad", "Nigdi", "Akurdi"]
                                                                }
                                                            }
                                                        }

                                                        const districtSelect = document.getElementById('district');
                                                        const talukaSelect = document.getElementById('taluka');
                                                        const villageSelect = document.getElementById('village');

                                                        districtSelect.addEventListener('change', function () {
                                                            const selectedDistrict = districtSelect.value;
                                                            if (selectedDistrict) {
                                                                populateTalukas(selectedDistrict);
                                                            } else {
                                                                resetTalukaAndVillage();
                                                            }
                                                        });

                                                        talukaSelect.addEventListener('change', function () {
                                                            const selectedDistrict = districtSelect.value;
                                                            const selectedTaluka = talukaSelect.value;
                                                            if (selectedTaluka) {
                                                                populateVillages(selectedDistrict, selectedTaluka);
                                                            } else {
                                                                villageSelect.innerHTML = '<option value="">Select Village</option>';
                                                                villageSelect.disabled = true;
                                                            }
                                                        });

                                                        function populateTalukas(district) {
                                                            const talukas = districtData[district].talukas;
                                                            talukaSelect.innerHTML = '<option value="">Select Taluka</option>';
                                                            for (let taluka in talukas) {
                                                                const option = document.createElement('option');
                                                                option.value = taluka;
                                                                option.textContent = taluka.charAt(0).toUpperCase() + taluka.slice(1);
                                                                talukaSelect.appendChild(option);
                                                            }
                                                            talukaSelect.disabled = false;
                                                        }

                                                        function populateVillages(district, taluka) {
                                                            const villages = districtData[district].talukas[taluka];
                                                            villageSelect.innerHTML = '<option value="">Select Village</option>';
                                                            villages.forEach(village => {
                                                                const option = document.createElement('option');
                                                                option.value = village;
                                                                option.textContent = village;
                                                                villageSelect.appendChild(option);
                                                            });
                                                            villageSelect.disabled = false;
                                                        }

                                                        function resetTalukaAndVillage() {
                                                            talukaSelect.innerHTML = '<option value="">Select Taluka</option>';
                                                            talukaSelect.disabled = true;
                                                            villageSelect.innerHTML = '<option value="">Select Village</option>';
                                                            villageSelect.disabled = true;
                                                        }
                                                    </script>

                                                    <!-- Ward Dropdown -->
                                                    <div class="row mb-3">
                                                    <div class="col-12 col-md-6">
                                                            <label class="form-label" for="ward">Ward</label>
                                                            <select class="form-select" id="ward" name="ward" required>
            <option value="" disabled selected>Select Ward</option>
            <?php
            include '../PhpFiles/connection.php';
            $query = "SELECT * FROM tbl_ward_details";
            $result = mysqli_query($conn, $query) or die("Query Unsuccessful: " . mysqli_error($conn));
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
// echo '<option value="'.$row['id'].'">'.$row['ward_name'].'</option>';
echo '
  <option value="'.$row['id'].'">'.$row['ward_name'].'</option>';

  $ward = $_POST['ward'];
echo "Submitted ward: " . $ward; // Debug


                }
            }
            ?>
        </select>
                                                        </div>
                                                        
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="society-address">Society
                                                                Address</label>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="society-address"
                                                                    name="society-address" rows="3"
                                                                    placeholder="Enter Society Address"></textarea>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Plot Holding dtype Dropdown -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="plot-holding-size">Plot
                                                                Holding Type</label>
                                                            <select class="form-select" id="plot-holding-size"
                                                                name="plot-holding-type" value="plot-holding-size">
                                                                <option value="" disabled selected>Select Plot Holding
                                                                    Type</option>
                                                                <option value="Mhada">MHADA</option>
                                                                <option value="Collector">Collector</option>
                                                                <option value="MCGM">MCGM/BMC</option>
                                                                <option value="Private">Private</option>
                                                                <option value="SRA">SRA</option>
                                                                <option value="open-land">Open Land</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label for="select-lead" class="form-label">Select Lead
                                                            </label>
                                                            <select class="form-select" id="select-lead"
                                                                name="lead" required>
                                                                <!-- name = "plot-holding-type" -->
                                                                 <option value="" disabled selected>Select Lead</option>
                                                                 <?php
                                                                 include '../PhpFiles/connection.php';

                                                                 $query = "SELECT * FROM tbl_leads";
                                                                 $result = mysqli_query($conn, $query) or die("Query unsuccessful".mysqli_error($conn));
                                                                 if($result > 0){
                                                                    while($row = mysqli_fetch_assoc($result)){
                                                                        echo '<option value="'.$row['id'].'">'.$row['first_name'].' '.$row['last_name'].'</option>';
                                                                    }
                                                                 }
                                                                 ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="number-of-units">Number of
                                                                Units</label>
                                                            <input type="number" id="number-of-units"
                                                                name="number-of-units" value="plot-holding-size"
                                                                class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)">
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label" for="number-of-tenants">Number of
                                                                Tenants</label>
                                                            <input type="number" id="number-of-tenants"
                                                                name="number-of-tenants" value="number-of-tenants"
                                                                class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-end">
                                                        <!-- Input Field: As per Physical -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="physical-area">As per
                                                                Physical</label>
                                                            <input type="number" id="physical-area" name="physical-area"
                                                                value="physical-area" class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)">
                                                        </div>

                                                        <!-- Input Field: As per PR Card -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="pr-card-area">As per PR
                                                                Card</label>
                                                            <input type="number" id="pr-card-area" name="pr-card-area"
                                                                value="pr-card-area" class="form-control" min="0"
                                                                oninput="this.value = Math.max(this.value, 0)">
                                                        </div>

                                                        <!-- Dropdown: Units -->
                                                        <div class="col-12 col-md-4">
                                                            <label class="form-label" for="unit-selection">Unit</label>
                                                            <select id="unit-selection" name="unit-selection"
                                                                value="unit-selection" class="form-select">
                                                                <option value="sq-feet">Sq. Feet</option>
                                                                <option value="sq-meter">Sq. Meter</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label"
                                                                for="plot-holding-scheme">Scheme</label>
                                                            <select class="form-select" id="plot-holding-scheme"
                                                                name="plot-holding-scheme" value="plot-holding-scheme">
                                                                <option value="33(7)B">33(7)B</option>
                                                                <option value="33(11)">33(11)</option>
                                                                <option value="33(5)">33(5)</option>
                                                                <option value="33(20)B">33(20)B</option>
                                                                <option value="33(9)">33(9)</option>
                                                                <option value="33(10)">33(10)</option>
                                                                <option value="33(7)">33(7)</option>


                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <label class="form-label"
                                                                for="plot-holding-reservation">Reservation</label>
                                                            <select class="form-select" id="plot-holding-reservation"
                                                                name="plot-holding-reservation">
                                                                <option value="" default>Choose</option>
                                                                <option value="mahada">MHADA</option>
                                                                <option value="PMC">PMC</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <!-- Submit and Reset Buttons -->
                                                    <div class="row gy-3">
                                                        <div class="col-12 col-md-4">
                                                            <button type="submit" name="add-society-button"
                                                                class="btn btn-primary w-100">Submit</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- add society -->
                                <?php
                                include '../PhpFiles/connection.php';
                                // if(isset($_POST['add-society-button'])){
                                //     $society_name = $_POST['society-name'];
                                //     $cts_number = $_POST['cts-number'];
                                //     $district = $_POST['district'];
                                //     $taluka = $_POST['taluka'];
                                //     $village = $_POST['village'];
                                //     $ward = $_POST['ward'];
                                //     $society_address = $_POST['society-address'];
                                //     $plot_holding_type = $_POST['plot-holding-type'];
                                //     $lead = $_POST['lead'];
                                //     $unit_number = $_POST['number-of-units'];
                                //     $tenant_number = $_POST['number-of-tenants'];
                                //     $as_per_physical = $_POST['physical-area'];
                                //     $as_per_card = $_POST['pr-card-area'];
                                //     $units = $_POST['unit-selection'];
                                //     $scheme = $_POST['plot-holding-scheme'];
                                //     $reservation = $_POST['plot-holding-reservation'];

                                //     // generate unique id
                                //     $uid = uniqid('society', true);

                                //     $query = "INSERT INTO `tbl_add_society` (`uid`,`society_name`, `cts_number`, `district`, `society_address`, `units_number`, `tenants_number`, `physical`, `card`, `taluka`, `village`, `plot_holding_type`, `units`, `scheme`, `reservation`, `ward_id`, `lead_id`) VALUES ('$uid', '$society_name', '$cts_number', '$district', '$society_address', '$unit_number', '$tenant_number', '$as_per_physical', '$as_per_card', '$taluka', '$village', '$plot_holding_type', '$units', '$scheme', '$reservation', '$ward', '$lead') ";

                                //     $result = mysqli_query($conn, $query) or die("Query Unsuccessful".mysqli_error($conn));

                                //     if($result){
                                //         echo '<script> alert("Data added successfully"); window.location.href = "add_property.php" </script>';
                                //     }else{
                                //         echo '<script> alert("Failed : " '.mysqli_error($conn).'); window.location.href = "add_property.php" </script>';
                                //     }
                                // }
include '../PhpFiles/connection.php';

if(isset($_POST['add-society-button'])) {
    $society_name = $_POST['society-name'];
    $cts_number = $_POST['cts-number'];
    $district = $_POST['district'];
    $taluka = $_POST['taluka'];
    $village = $_POST['village'];
    $ward = $_POST['ward'];  // Ensure this exists and is posted correctly
    $society_address = $_POST['society-address'];
    $plot_holding_type = $_POST['plot-holding-type'];
    $lead = $_POST['lead'];
    $unit_number = $_POST['number-of-units'];
    $tenant_number = $_POST['number-of-tenants'];
    $as_per_physical = $_POST['physical-area'];
    $as_per_card = $_POST['pr-card-area'];
    $units = $_POST['unit-selection'];
    $scheme = $_POST['plot-holding-scheme'];
    $reservation = $_POST['plot-holding-reservation'];

    // manually generate unique id
    $uid = uniqid('society', true);

    $query = "INSERT INTO `tbl_society` (`soc_name`, `cts_no`, `district`, `taluka`, `village`, `ward`, `address`, `total_units`, `total_tenants`, `as_per_physical`, `as_per_card`, `unit`, `scheme`, `plot_holding_type`, `reservation`, `uid`, `lead_id`) VALUES ('$society_name', '$cts_number', '$district', '$taluka', '$village', '$ward', '$society_address', '$unit_number', '$tenant_number', '$as_per_physical', '$as_per_card', '$units', '$scheme', 'plot_holding_ype', '$reservation', '$uid', '$lead');";

    $result = mysqli_query($conn, $query);

    if($result) {
        echo '<script>alert("Data added successfully"); window.location.href = "add_property.php"</script>';
    } else {
        echo '<script>alert("Failed: '.mysqli_error($conn).'"); window.location.href = "add_property.php"</script>';
    }
}
?>

                                <!-- Members Directory -->
                                <div class="tab-pane fade" id="tab-reviews" role="tabpanel"
                                    aria-labelledby="reviews-tab">
                                    <div class="border-y" id="profileRatingTable"
                                        data-list="{&quot;valueNames&quot;:[&quot;product&quot;,&quot;rating&quot;,&quot;review&quot;,&quot;status&quot;,&quot;date&quot;],&quot;page&quot;:6,&quot;pagination&quot;:true}">
                                        <div class="table-responsive scrollbar">
                                            <!-- Members Directory Section -->
                                            <div class="members-directory">
                                                <div style="width: 100%;  margin: 20px 0;">
                                                    <h3 style="margin: 0;">Members Directory</h3>
                                                </div>
                                                <br>
                                                <form method="post">
                                                    <!-- Member Details Section -->
                                                    <div class="row mb-3">
                                                        <!-- Flat/Unit Owner Name -->
                                                        <div class="col-12">
                                                            <label class="form-label" for="owner-name">Flat/Unit Owner
                                                                Name</label>
                                                            <input class="form-control" id="owner-name"
                                                                name="owner-name" type="text"
                                                                placeholder="Enter Owner Name" required />
                                                        </div>

                                                        <!-- Contact Number -->
                                                        <div class="col-12 mt-3">
                                                            <label class="form-label" for="phone">Contact No.</label>
                                                            <input type="tel" id="phone" name="phone"
                                                                class="form-control" pattern="(\+91)?[6-9][0-9]{9}"
                                                                placeholder="Contact No." required />
                                                        </div>

                                                        <!-- Email Address -->
                                                        <div class="col-12 mt-3">
                                                            <label class="form-label" for="email">Email Address</label>
                                                            <input type="email" id="email" name="email"
                                                                class="form-control" placeholder="Email Address"
                                                                required />
                                                        </div>
                                                    </div>


                                                    <!-- Unit/Flat Number -->
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <label class="form-label" for="unit-number">Unit/Flat
                                                                Number</label>
                                                            <input class="form-control" id="unit-number"
                                                                name="unit-number" type="number"
                                                                placeholder="Enter Unit/Flat Number" required />
                                                        </div>
                                                    </div>

                                                    <!-- Custom Tags -->
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <label class="form-label" for="custom-tags">Custom
                                                                Tags</label>
                                                            <select class="form-select" id="custom-tags"
                                                                name="custom-tags" required>
                                                                <option value="" disabled selected>Select a Tag</option>
                                                                <option value="Committee Member">Committee Member
                                                                </option>
                                                                <option value="Resident">Resident</option>
                                                                <option value="Tenant">Tenant</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <!-- Additional Inputs (Initially Hidden) -->
                                                    <div id="additional-inputs" class="row mb-3" style="display: none;">
                                                        <!-- Freehold Input -->
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <label class="form-label" for="freehold">Freehold</label>
                                                            <input type="text" id="freehold" name="freehold"
                                                                class="form-control" placeholder="Enter Freehold" />
                                                        </div>
                                                        <!-- Leasehold Input -->
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <label class="form-label" for="leasehold">Leasehold</label>
                                                            <input type="text" id="leasehold" name="leasehold"
                                                                class="form-control" placeholder="Enter Leasehold" />
                                                        </div>
                                                    </div>

                                                    <script>
                                                        // Get references to the dropdown and additional inputs
                                                        const customTagsDropdown = document.getElementById("custom-tags");
                                                        const additionalInputs = document.getElementById("additional-inputs");

                                                        // Listen for changes in the dropdown
                                                        customTagsDropdown.addEventListener("change", function () {
                                                            if (customTagsDropdown.value === "Committee Member") {
                                                                // Show additional inputs if "Committee Member" is selected
                                                                additionalInputs.style.display = "flex";
                                                            } else {
                                                                // Hide additional inputs for other options
                                                                additionalInputs.style.display = "none";
                                                            }
                                                        });
                                                    </script>

                                                    <!-- Bulk Upload -->
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <label class="form-label" for="bulk-upload">Bulk Upload
                                                                (CSV/Excel)</label>
                                                            <br>
                                                            <button type="button" class="btn btn-info w-100"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#bulkUploadModal">
                                                                Upload File
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Bulk Upload Modal -->
                                                    <div class="modal fade" id="bulkUploadModal" tabindex="-1"
                                                        aria-labelledby="bulkUploadModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="bulkUploadModalLabel">
                                                                        Bulk
                                                                        Upload Instructions</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Upload the CSV file in the following format. Do
                                                                        not
                                                                        include the header/column header.
                                                                        For example: <a href="../../example.csv"
                                                                            download="../../example.csv">example.csv</a>
                                                                    </p>
                                                                    <p>The CSV file should follow this format:</p>
                                                                    <ul>
                                                                        <b>Serial No.</b>|<b>Flat No.</b>|<b>Primary
                                                                            Owner</b>|<b>Associate Owner</b>|<b>Joint
                                                                            Owner</b>|<b>Contact No.</b>|<b>Email ID</b>

                                                                    </ul>
                                                                    <input class="form-control" id="bulk-upload"
                                                                        name="bulk-upload" type="file" accept=".csv" />
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-bs-dismiss="modal">Upload</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Data Table -->
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <h5>Uploaded Data</h5>
                                                            <table class="table table-striped table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Serial No.</th>
                                                                        <th>Society Name</th>
                                                                        <th>Flat No.</th>
                                                                        <th>Primary Owner</th>
                                                                        <th>Associate Owner</th>
                                                                        <th>Joint Owner</th>
                                                                        <th>Contact No.</th>
                                                                        <th>Email ID</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="text-center">
                                                                    <!-- Static Row 1 -->
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Green Valley Residency</td>
                                                                        <td>A-101</td>
                                                                        <td>Rajesh Mehta</td>
                                                                        <td>Sunita Mehta</td>
                                                                        <td>Aryan Mehta</td>
                                                                        <td>9876543210</td>
                                                                        <td>rajesh.mehta@example.com</td>
                                                                    </tr>
                                                                    <!-- Static Row 2 -->
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Blue Orchid Apartments</td>
                                                                        <td>B-204</td>
                                                                        <td>Anjali Sharma</td>
                                                                        <td>—</td>
                                                                        <td>—</td>
                                                                        <td>9123456789</td>
                                                                        <td>anjali.sharma@example.com</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>

                                                    <!-- Submit and Reset Buttons -->
                                                    <div class="row gy-3">
                                                        <div class="col-12 col-md-4">
                                                            <button type="submit" name="add-society-button"
                                                                class="btn btn-primary w-100">Submit</button>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <button type="reset"
                                                                class="btn btn-secondary w-100">Reset</button>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <button type="button" class="btn btn-primary w-100"
                                                                id="next-tab-btn">Next</button>
                                                        </div>
                                                    </div>


                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-wishlist" role="tabpanel"
                                    aria-labelledby="wishlist-tab">
                                    <div class="border-y border-translucent" id="productWishlistTable"
                                        data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                                        <div class="table-responsive scrollbar">
                                            <div class="row g-0 justify-content-between align-items-center">
                                                <!-- Container for the Title -->
                                                <div style="width: 100%; text-align: center; margin: 20px 0;">
                                                    <h3 style="margin: 0;">Committee Details</h3>
                                                </div>
                                                <hr>

                                                <!-- Form for adding committee details -->
                                                <form method="post">
                                                    <!-- Office Bearers Section -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6 col-lg-4">
                                                            <label class="form-label" for="soc-name">Society Name
                                                            </label>
                                                            <select class="form-select" id="soc-name" name="soc-name"
                                                                required>
                                                                <option value="defaultsociety" disabled selected>Select
                                                                    Society
                                                                </option>
                                                                <option value="neelamnagar-society">Neelam Nagar
                                                                </option>
                                                                <option value="sunrise-society">Sunrise residency
                                                                </option>
                                                                <option value="blueshine-society">BlueShine residency
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <!-- Office Bearer Name -->
                                                        <div class="col-12 col-md-6 col-lg-4">
                                                            <label class="form-label" for="office-bearer-name">Committe
                                                                Member
                                                                Name </label>
                                                            <input class="form-control" id="office-bearer-name"
                                                                name="office-bearer-name" type="text"
                                                                placeholder="Enter Name" required />
                                                        </div>
                                                        <!-- Role -->
                                                        <div class="col-12 col-md-6 col-lg-4">
                                                            <label class="form-label" for="role">Role </label>
                                                            <select class="form-select" id="role" name="role" required>
                                                                <option value="" disabled selected>Select Role</option>
                                                                <option value="chairperson">Chairman</option>
                                                                <option value="chairperson">Committe Member</option>

                                                                <option value="secretary">Secretary</option>
                                                                <option value="treasurer">Treasurer</option>
                                                                <!-- Add more roles as needed -->
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Contact Information -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <label class="form-label" for="contact-phone">Phone Number
                                                            </label>
                                                            <input type="tel" id="phone" name="phone"
                                                                pattern="(\+91)?[6-9][0-9]{9}" required
                                                                class="form-control"
                                                                placeholder="Enter Mobile Number" />

                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <label class="form-label" for="contact-email">Email Address
                                                            </label>
                                                            <input class="form-control" id="contact-email"
                                                                name="contact-email" type="email"
                                                                placeholder="Enter Email Address" required />
                                                        </div>
                                                    </div>

                                                    <!-- Term Duration -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <label class="form-label" for="term-start">Term Start Date
                                                            </label>
                                                            <input class="form-control" id="term-start"
                                                                name="term-start" type="date" required />
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6">
                                                            <label class="form-label" for="term-end">Term End Date
                                                            </label>
                                                            <input class="form-control" id="term-end" name="term-end"
                                                                type="date" required />
                                                        </div>


                                                    </div>



                                                    <!-- Notifications Section -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 d-flex align-items-center">
                                                            <input class="form-check-input  mx-1" type="checkbox"
                                                                id="notifications" name="notifications"
                                                                style="width: 1.2em; height: 1.2em;" />
                                                            <label class="form-label mb-0" for="notifications">
                                                                Enable Notifications for Term Expiration & Role Changes
                                                            </label>
                                                        </div>
                                                    </div>


                                                    <!-- Submit Button -->
                                                    <div class="row mb-3">
                                                        <div class="col-12 col-md-6 mb-2">
                                                            <button type="submit"
                                                                class="btn btn-primary w-100">Submit</button>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <button type="reset"
                                                                class="btn btn-secondary w-100">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div id="land-lord" class="form-section content">
                <form method="post">
                    <h3 class="mb-4">Landlord Details</h3>
                    <!-- Landlord Name -->
                    <div class="mb-3">
                        <label for="landlord-name" class="form-label">Landlord Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="landlord-name" name="landlord_name" class="form-control"
                            placeholder="Enter Landlord Name" required>
                    </div>
                    <!-- Email -->
                    <div class="row">
                        <div class="mb-3 col-md-12 col-lg-6 col-sm-12">
                            <label for="landlord-email" class="form-label">Email </label>
                            <input type="email" id="landlord-email" name="landlord_email" class="form-control"
                                placeholder="Enter Email">
                        </div>
                        <!-- Phone Number -->
                        <div class="mb-3 col-md-12 col-lg-6  col-sm-12">
                            <label for="landlord-phone" class="form-label">Phone Number </label>
                            <input type="tel" id="phone" name="phone" pattern="(\+91)?[6-9][0-9]{9}" required
                                class="form-control" placeholder="Enter Mobile Number" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- District -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="district">District</label>
                            <input list="districts" id="dist" name="district" class="form-control" value="district" />
                            <datalist id="districts">
                                <!-- <select class="form-select" id="district" name="district" required> -->

                                <option value="">Select District</option>
                                <option value="Ahmedabad"></option>
                                <option value="Akola"></option>
                                <option value="Amravati"></option>
                                <option value="Aurangabad"></option>
                                <option value="Beed"></option>
                                <option value="Bhandara"></option>
                                <option value="Buldhana"></option>
                                <option value="Chandrapur"></option>
                                <option value="Dhule"></option>
                                <option value="Gadchiroli"></option>
                                <option value="Gondia"></option>
                                <option value="Hingoli"></option>
                                <option value="Jalgaon"></option>
                                <option value="Jalna"></option>
                                <option value="Kolhapur"></option>
                                <option value="Latur"></option>
                                <option value="Mumbai"></option>
                                <option value="MumbaiSuburban"></option>
                                <option value="NaviMumbai"></option>
                                <option value="Nagpur"></option>
                                <option value="Nanded"></option>
                                <option value="Nandurbar"></option>
                                <option value="Nashik"></option>
                                <option value="Osmanabad"></option>
                                <option value="Palghar"></option>
                                <option value="Parbhani"></option>
                                <option value="Pune"></option>
                                <option value="Raigad"></option>
                                <option value="Ratnagiri"></option>
                                <option value="Sangli"></option>
                                <option value="Satara"></option>
                                <option value="Sindhudurg"></option>
                                <option value="Solapur"></option>
                                <option value="Thane"></option>
                                <option value="Wardha"></option>
                                <option value="Washim"></option>
                                <option value="Yavatmal"></option>

                                <!-- </select> -->
                            </datalist>
                        </div>

                        <!-- Taluka -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="taluka">Taluka</label>
                            <select class="form-select" id="talukass" name="taluka" value="taluka" disabled>
                                <option value="">Select Taluka</option>
                            </select>
                        </div>

                        <!-- Village -->
                        <div class="col-12 col-md-4">
                            <label class="form-label" for="village">Village</label>
                            <select class="form-select" id="villagess" name="village" value="taluka" disabled>
                                <option value="">Select Village</option>
                            </select>
                        </div>
                    </div>

                    <script>
                        const DataOfDistrict = {

                            Nagpur: {
                                talukas: {
                                    Ramtek: ["Chicholi", "Turikheda", "Kachurwahi", "Wadamba"],
                                    Umred: ["Ghatrohana", "Tekadi", "Keslapar", "Vihirgaon"],
                                    Kalameshwar: ["Sawali", "Shingori", "Kinhi", "Gondkhairi"],
                                    Katol: ["Khadki", "Mandhal", "Yerla", "Lonsawali"],
                                    Kamptee: ["Kanhan", "Gumgaon", "Gondwana", "Bela"],
                                    Kuhi: ["Pohra", "Wakeshwar", "Lonara", "Kopara"],
                                    Narkhed: ["Shendurjana", "Waroda", "Pandhari", "Masod"],
                                    Nagpur: ["Mankapur", "Sitabuldi", "Dharampeth", "Dhantoli"],
                                    NagpurRural: ["Borgaon", "Kharbi", "Hingana", "Wanadongri"],
                                    Parseoni: ["Salai", "Bhivkund", "Parseoni", "Bela"],
                                    Bhiwapur: ["Sonpur", "Bhiwapur", "Warud", "Ambada"],
                                    Mouda: ["Mouda", "Khandala", "Chicholi", "Khaparkheda"],
                                    Savner: ["Saoner", "Pipri", "Lohdongri", "Khubala"],
                                    Hingna: ["Wanadongri", "Hingna", "Amgaon", "Dongargaon"]
                                }
                            },

                            Yavatmal: {
                                talukas: {
                                    Arni: ["Rajurwadi", "Darati", "Pimpri", "Shivni", "Sukli", "Kawath", "Babhulgaon", "Ekurka"],
                                    Umarkhed: ["Pophali", "Wadgaon", "Lohara", "Bhivpur", "Sonkhed", "Tembhi", "Mangrul", "Umri"],
                                    Kalamb: ["Adgaon", "Khadgaon", "Bhivapur", "Wadshed", "Dhanora", "Borgaon", "Pusli", "Patoda"],
                                    PandharkaodaKelapur: ["Kelapur", "Pandharkaoda", "Rajur", "Wadgaon", "Sirsi", "Dongargaon", "Chandap", "Umari"],
                                    Ghatanji: ["Nandapur", "Kokangaon", "Wadshed", "Kolambi", "Dabhadi", "Ambadi", "Lohara", "Kohla"],
                                    ZariJamani: ["Bhivapur", "Pathri", "Zari", "Jamani", "Sukli", "Palsoda", "Malkhed", "Borgaon"],
                                    Darwha: ["Pimpalgaon", "Kalamgaon", "Ghodgaon", "Arambhi", "Belura", "Ekurka", "Sawangi", "Anjani"],
                                    Digras: ["Belkhed", "Mangrul", "Shivani", "Wadshed", "Sonkhed", "Digras", "Rajur", "Takali"],
                                    Ner: ["Lohara", "Borgaon", "Pusli", "Rudhana", "Arambhi", "Bhivapur", "Ekurka", "Dighi"],
                                    Pusad: ["Chincholi", "Bhivpur", "Pusad", "Dongargaon", "Wadgaon", "Belura", "Mangrul", "Wadshed"],
                                    Babhulgaon: ["Ghatladki", "Sawangi", "Shirpur", "Wadshed", "Kolambi", "Bhivapur", "Dongargaon", "Sonkhed"],
                                    Mahagaon: ["Palsi", "Rajur", "Sukli", "Bhivapur", "Belura", "Takali", "Kolambi", "Mangrul"],
                                    Maregaon: ["Rudhana", "Takalghat", "Dighi", "Kolambi", "Belura", "Pusli", "Ghodgaon", "Borgaon"],
                                    Yavatmal: ["Patilwadi", "Hivra", "Wadshed", "Kolambi", "Ghatladki", "Sawangi", "Shirpur", "Pusli"],
                                    Ralegaon: ["Dighi", "Arambhi", "Bhivapur", "Rudhana", "Kolambi", "Takali", "Borgaon", "Mangrul"],
                                    Wani: ["Ukni", "Talasawangi", "Kolambi", "Bhivapur", "Sawangi", "Ghodgaon", "Ekurka", "Shirpur"]
                                }
                            },

                            Wardha: {
                                talukas: {
                                    Wardha: ["Pipri", "Chincholi", "Sewagram", "Borgaon", "Dattapur", "Mandgaon", "Kharangna", "Bhidi"],
                                    Selu: ["Seloo", "Deoli", "Nachangaon", "Karanja", "Sawangi", "Arvi", "Kelapur", "Umari"],
                                    Deoli: ["Yelakeli", "Khanapur", "Jamb", "Mandgaon", "Borgaon", "Sukli", "Chandni", "Pangari"],
                                    Hinganghat: ["Hinganghat", "Sawargaon", "Ajanti", "Sindhi", "Mendha", "Wadgaon", "Anji", "Ganeshpur"],
                                    Samudrapur: ["Samudrapur", "Talegaon", "Pipalgaon", "Nandori", "Loni", "Bhivapur", "Gaurkheda", "Gondri"],
                                    Karanja: ["Karanja", "Mandgaon", "Wadgaon", "Jamb", "Dighi", "Arambhi", "Kelapur", "Pangari"],
                                    Arvi: ["Arvi", "Shendurjana", "Pulgaon", "Sawangi", "Kandegaon", "Lohara", "Ajanti", "Babhulgaon"],
                                    Ashti: ["Ashti", "Dhotra", "Pangarkheda", "Bhivapur", "Mendha", "Talegaon", "Mandgaon", "Sawangi"]
                                }
                            },
                            Washim: {
                                talukas: {
                                    Washim: ["Ansing", "Masla", "Malegaon", "Poharadevi", "Mandwa", "Mategaon", "Giroli", "Kawatha"],
                                    Malegaon: ["Malegaon", "Pangri", "Wadsangavi", "Adgaon", "Chikhalwadi", "Bhivapur", "Gondgaon", "Pimpalgaon"],
                                    Risod: ["Risod", "Lohara", "Wadji", "Kolambi", "Umra", "Hivra", "Ansing", "Digras"],
                                    Karanja: ["Karanja", "Shelu", "Bhivapur", "Wadgaon", "Dighi", "Manora", "Masla", "Mategaon"],
                                    Mangrulpir: ["Mangrulpir", "Sawargaon", "Kherda", "Mahuli", "Adgaon", "Ansing", "Poharadevi", "Wadji"],
                                    Manora: ["Manora", "Umari", "Bhivapur", "Pangri", "Giroli", "Mandwa", "Masla", "Wadsangavi"]
                                }
                            },

                            Solapur: {
                                talukas: {
                                    NorthSolapur: ["Kegaon", "Vidi Gharkul", "Arali", "Karamba", "Degaon", "Soregaon", "Wadala", "Kumbhari"],
                                    SouthSolapur: ["Ingalgi", "Narkhed", "Mandrup", "Akkalkot Road", "Hotgi", "Valasang", "Boramani", "Kurul"],
                                    Barshi: ["Gurav Pimpalgaon", "Yedshi", "Vairag", "Wadgaon", "Hingani", "Shirale", "Borgaon", "Pangaon"],
                                    Akkalkot: ["Akkalkot", "Boramani", "Nagansur", "Maindargi", "Alagundi", "Wadwal", "Korti", "Chungi"],
                                    Pandharpur: ["Gopalpur", "Nimgaon", "Karkamb", "Shetphal", "Wakhari", "Malewadi", "Chorakhali", "Kauthali"],
                                    Mangalwedha: ["Mangalwedha", "Marwade", "Tandulwadi", "Nandur", "Lohgaon", "Kuroli", "Bhose", "Javala"],
                                    Sangola: ["Sangola", "Mote", "Alegaon", "Wasud", "Jalihal", "Khardi", "Gaudgaon", "Tembhurni"],
                                    Mohol: ["Mohol", "Anjangaon", "Kurul", "Malinagar", "Madha", "Shetphal", "Arali", "Bhose"],
                                    Madha: ["Madha", "Mahisgaon", "Anjangaon", "Kurduwadi", "Pangri", "Parite", "Rajuri", "Wadsingi"],
                                    Karmala: ["Karmala", "Kem", "Chandapuri", "Shiral", "Pangri", "Alegaon", "Wafale", "Lonarwadi"],
                                    Malshiras: ["Malshiras", "Akluj", "Natepute", "Velapur", "Bhamburdi", "Gurholi", "Bhandishegaon", "Borale"]
                                }
                            },

                            Raigad: {
                                talukas: {
                                    Alibag: ["Saswane", "Kihim", "Mangaon", "Tarf Mhatoba", "Awas", "Varasoli", "Revdanda", "Rajpuri"],
                                    Murud: ["Murud", "Danda", "Janjira", "Anjarle", "Wadkhal", "Borgaon", "Palaspe", "Rasayani"],
                                    Pen: ["Pen", "Khopoli", "Pimpalgaon", "Shivpur", "Wadgaon", "Gadhapada", "Pimpalwadi", "Borivali"],
                                    Panvel: ["Panvel", "Taloje", "Kharghar", "Khandeshwar", "Dombivli", "Peth", "Brahmand", "Belapur"],
                                    Uran: ["Uran", "Belapur", "Gavan", "Khar", "Phunde", "Khardi", "Anjur", "Vichumbe"],
                                    Karjat: ["Karjat", "Neral", "Vajreshwari", "Sakwar", "Khopoli", "Borivali", "Hanga", "Pachad"],
                                    Khalapur: ["Panchgani", "Madh", "Jambul", "Gorle", "Kasarvadavali", "Gundewadi", "Wadi", "Devadi"],
                                    Roha: ["Roha", "Khopoli", "Phundewadi", "Arambhi", "Gothivali", "Mhasla", "Wadi", "Raigad"],
                                    Sudhagad: ["Pali", "Sudhagad", "Bhivpuri", "Khadakpada", "Vasai", "Ambegaon", "Bhivpur", "Juchandra"],
                                    Mangaon: ["Mangaon", "Wadgaon", "Narhe", "Karjat", "Pimpalgaon", "Gavhan", "Kolvan", "Khopoli"],
                                    Tala: ["Tala", "Adivare", "Kumbhivali", "Khandala", "Vashivali", "Kashiv", "Ghosalwadi", "Dhamani"],
                                    Shrivardhan: ["Shrivardhan", "Hirkani", "Sundarwadi", "Shilapada", "Velas", "Nandgaon", "Talegaon", "Anjarle"],
                                    Mhasla: ["Mhasla", "Anjandewadi", "Gothivade", "Kharewadi", "Wadala", "Kasheli", "Gundgaon", "Jambhavali"],
                                    Mahad: ["Mahad", "Poladpur", "Khandala", "Siddheshwar", "Shindewadi", "Rait", "Pimpalgaon", "Kambli"],
                                    Poladpur: ["Poladpur", "Shindewadi", "Raigad", "Samsher", "Kharsale", "Vajreshwari", "Borgaon", "Vade"]
                                }
                            },
                            Sindhudurg: {
                                talukas: {
                                    Devgad: ["Shiroda", "Pangari", "Mardol", "Rajapur", "Savane", "Wadath", "Jambhli", "Dhaboli"],
                                    Dodamarg: ["Narvan", "Maravade", "Pangire", "Ghot", "Hivara", "Povad", "Ranjani", "Tibba"],
                                    Kankavli: ["Kankavli", "Kudal", "Vajrad", "Kambali", "Mahagaon", "Dhopeshwar", "Chinchinim", "Kadama"],
                                    Kudal: ["Kudal", "Pimpalwadi", "Vajrad", "Savantwadi", "Motha", "Nandgaon", "Shivpur", "Khutewadi"],
                                    Malvan: ["Malvan", "Sodi", "Kude", "Vengurla", "Niveli", "Amboli", "Rajapur", "Kadamba"],
                                    Sawantwadi: ["Sawantwadi", "Virdi", "Hivra", "Pimpari", "Padi", "Khudali", "Khemapur", "Sidhpur"],
                                    Vaibhavwadi: ["Vaibhavwadi", "Patwadi", "Rajapur", "Shedge", "Alapur", "Chinchni", "Malgaon", "Anandwadi"],
                                    Vengurla: ["Vengurla", "Manur", "Puducheri", "Shiroda", "Dhamapur", "Tarkarli", "Niveli", "Vijaydurg"]
                                }
                            },

                            Satara: {
                                talukas: {
                                    Satara: ["Kondhwa", "Pimpalgaon", "Chandoli", "Malkapur", "Borgaon", "Vajirpur", "Wadi", "Sonavadi"],
                                    Jaoli: ["Jaoli", "Karad", "Khanapur", "Lohgaon", "Pimpalgaon", "Pandharpur", "Vaswani", "Khed"],
                                    Karad: ["Karad", "Gokul", "Wadi", "Shivapur", "Tondoli", "Kawdi", "Chandani", "Loni"],
                                    Koregaon: ["Koregaon", "Kanchanwadi", "Borgaon", "Siddhivinarayan", "Dhakani", "Shirle", "Nagwadi", "Jambhli"],
                                    Khatav: ["Khatav", "Khamgaon", "Banegaon", "Tajpur", "Guruwar", "Adgaon", "Ghodgaon", "Pimpalgaon"],
                                    Mahabaleshwar: ["Mahabaleshwar", "Panchgani", "Bhilar", "Shindola", "Chandranath", "Nandgaon", "Kedari", "Arpud"],
                                    Man: ["Man", "Nagarpada", "Chinchani", "Sangatwadi", "Borgaon", "Ranjani", "Alapur", "Sathgaon"],
                                    Patan: ["Patan", "Kokani", "Wadi", "Alapur", "Sathgaon", "Borhe", "Padali", "Velapur"],
                                    Phaltan: ["Phaltan", "Khandala", "Sidhpur", "Dhamangaon", "Kanhan", "Borgaon", "Pimpalgaon", "Koregaon"],
                                    Wai: ["Wai", "Anwa", "Lohgaon", "Sawargaon", "Malkapur", "Gondawali", "Pimpalgaon", "Mundhavi"],
                                    Khandala: ["Khandala", "Ghatshil", "Hivra", "Wadi", "Shetphal", "Banegaon", "Karamba", "Adgaon"]
                                }
                            },

                            Sangli: {
                                talukas: {
                                    Miraj: ["Miraj", "Borgaon", "Dhamangaon", "Pimpalwadi", "Chandranath", "Shindola", "Kusumwadi", "Nagla"],
                                    Tasgaon: ["Tasgaon", "Shirgaon", "Gundewadi", "Bhivpur", "Borgaon", "Sailu", "Khutgaon", "Jalgaon"],
                                    KavatheMahankal: ["Kavathe", "Gunjalwadi", "Nandgaon", "Patnagar", "Malkapur", "Sangavi", "Sidhpur", "Chandpur"],
                                    Jat: ["Jat", "Tondalwadi", "Gundewadi", "Sakharwadi", "Kumthe", "Chandpur", "Borgaon", "Patwad"],
                                    Vita: ["Vita", "Banegaon", "Malkapur", "Pimpalgaon", "Nagapur", "Pangri", "Bhivpur", "Karad"],
                                    Atpadi: ["Atpadi", "Gurawar", "Jambhali", "Ghatshil", "Dhawale", "Malkapur", "Sangavi", "Hivra"],
                                    Kadegaon: ["Kadegaon", "Mhaswad", "Shindola", "Borgaon", "Alapur", "Sundarpur", "Nagapur", "Goregaon"],
                                    Palus: ["Palus", "Guravwadi", "Gorhe", "Kambali", "Shivapur", "Ranjani", "Pimpalgaon", "Dhamangaon"],
                                    Walwa: ["Walwa", "Pandharpur", "Pimpalgaon", "Patwadi", "Dhapewadi", "Kharvi", "Alapur", "Tondawadi"],
                                    Shirala: ["Shirala", "Adivare", "Shindola", "Kawathe", "Chandpur", "Patwadi", "Borgaon", "Sundarpur"]
                                }
                            },

                            Ratnagiri: {
                                talukas: {
                                    Ratnagiri: ["Nivali", "Rajapur", "Goregaon", "Shirgaon", "Kokani", "Dhamapur", "Kasheli", "Guhagar"],
                                    Rajapur: ["Rajapur", "Kasheli", "Alapur", "Kovle", "Sakhari", "Gothiwade", "Pimpari", "Malgund"],
                                    Lanja: ["Lanja", "Wadgaon", "Velas", "Kothare", "Sindhudurg", "Ranjani", "Agarwadi", "Siddheshwar"],
                                    Sangmeshwar: ["Sangmeshwar", "Chandpur", "Wadgaon", "Goregaon", "Tondoli", "Vasai", "Nandgaon", "Bhivpur"],
                                    Chiplun: ["Chiplun", "Kasheli", "Alapur", "Tarakali", "Wadi", "Pimpalwadi", "Punewadi", "Malgund"],
                                    Guhagar: ["Guhagar", "Anjarle", "Shiroda", "Velas", "Khandala", "Kandoli", "Ranjani", "Borle"],
                                    Khed: ["Khed", "Pimpari", "Ranjani", "Wadgaon", "Panchgani", "Kavathe", "Gowari", "Shegaon"],
                                    Dapoli: ["Dapoli", "Pimpalwadi", "Agar", "Tondoli", "Jambhadi", "Borgaon", "Dabhole", "Anwa"],
                                    Mandangad: ["Mandangad", "Patapur", "Tondar", "Pimpalgaon", "Khandal", "Sirsala", "Borgaon", "Vishrambag"]
                                }
                            },


                            Nashik: {
                                talukas: {
                                    Nashik: ["Pimpalgaon", "Adgaon", "Laxmi Nagar", "Kanchanwadi", "Shiraswadi", "Nagapur", "Tondapur", "Kundewadi"],
                                    Igatpuri: ["Igatpuri", "Sangavi", "Murbad", "Shivpur", "Pimpalgaon", "Narale", "Ranjani", "Rohinwadi"],
                                    Trimbakeshwar: ["Trimbak", "Pimpalgaon", "Nashik Road", "Satpur", "Goregaon", "Anwa", "Alapur", "Kharadi"],
                                    Dindori: ["Dindori", "Nandgaon", "Patwadi", "Borgaon", "Shindola", "Sakri", "Pimpalgaon", "Dhamangaon"],
                                    Peth: ["Peth", "Nandpur", "Tondawadi", "Rajapur", "Nagaon", "Sakharwadi", "Sangavi", "Jambhadi"],
                                    Kalwan: ["Kalwan", "Borgaon", "Tondal", "Khidrapur", "Shindola", "Guravwadi", "Alapur", "Dudhala"],
                                    Surgana: ["Surgana", "Dhamangaon", "Pimpalgaon", "Chandpur", "Khudawad", "Pimpri", "Kishanwadi", "Guravwadi"],
                                    Chandwad: ["Chandwad", "Pimpalgaon", "Vanjalwadi", "Sangavi", "Nimbhora", "Ghatshil", "Alapur", "Khambale"],
                                    Deola: ["Deola", "Borgaon", "Pimpalgaon", "Wadi", "Rajapur", "Sakri", "Chandranath", "Malkapur"],
                                    BaglanSatana: ["Satana", "Baglan", "Khandala", "Sakri", "Sundarpur", "Dhabola", "Khambale", "Nandgaon"],
                                    Malegaon: ["Malegaon", "Pimpalgaon", "Vasai", "Sakhari", "Borgaon", "Kanhergaon", "Anwa", "Deola"],
                                    Nandgaon: ["Nandgaon", "Ghorawadi", "Pimpari", "Sangavi", "Alapur", "Tondal", "Khedgaon", "Rajapur"],
                                    Yeola: ["Yeola", "Borgaon", "Pimpalgaon", "Anwa", "Rajapur", "Khandala", "Nandgaon", "Khamgaon"],
                                    Niphad: ["Niphad", "Shiraswadi", "Deola", "Laxmi Nagar", "Anwa", "Borgaon", "Goregaon", "Sakri"],
                                    Sinnar: ["Sinnar", "Pimpalgaon", "Rajapur", "Alapur", "Tondal", "Sakharwadi", "Anwa", "Nandgaon"]
                                }
                            },
                            Thane: {
                                talukas: {
                                    Thane: ["Waghbil", "Kasarvadavali", "Shahad", "Manpada", "Dapode", "Kopri", "Ghodbunder", "Kelwa"],
                                    Bhiwandi: ["Mundka", "Thakurdwar", "Kadambeshwar", "Rajivnagar", "Kaman", "Pimpalwadi", "Pahadpur", "Jambhali"],
                                    Kalyan: ["Shivaji Nagar", "Murkha", "Ganeshwadi", "Dhamankar Naka", "Mankar", "Khopat", "Chunabhatti", "Vithalwadi"],
                                    Murbad: ["Murbad", "Gharai", "Chinchkheda", "Pimpalgaon", "Shivapur", "Banegaon", "Sawantwadi", "Nandgaon"],
                                    Shahapur: ["Shahapur", "Kelwa", "Nandgaon", "Anwa", "Borgaon", "Dholan", "Pimpri", "Chinchkheda"],
                                    Vasai: ["Vasai", "Vaitarna", "Nalasopara", "Rajodi", "Dahisar", "Bhayander", "Kandarpada", "Mira Road"],
                                    Palghar: ["Palghar", "Dahanu", "Gholwad", "Chinchani", "Kashid", "Mandva", "Vaitarna", "Kumbharkhani"],
                                    Ulhasnagar: ["Ulhasnagar", "Ulrika", "Chandreshwar", "Shahad", "Manpada", "Kopri", "Kasheli", "Kalher"],
                                    Ambarnath: ["Ambarnath", "Kalyan", "Manpada", "Agarwadi", "Pimpalwadi", "Nandgaon", "Kumbharkhani", "Shivapada"],
                                    Badlapur: ["Badlapur", "Thane", "Ulhasnagar", "Mundka", "Bapgaon", "Chincholi", "Kelwa", "Borgaon"],
                                    Dombivli: ["Dombivli", "Bapgaon", "Murbad", "Khoni", "Talegaon", "Shivaji Nagar", "Khopat", "Ganeshwadi"],
                                    Vikramgad: ["Vikramgad", "Kashid", "Wadi", "Chinchani", "Pimpalgaon", "Dhamankar", "Chandpur", "Thakurwadi"]
                                }
                            },
                            Ahmedabad: {
                                talukas: {
                                    AhmedabadCity: ["Vasna", "Makarba"],
                                    Daskroi: [
                                        "Aslali",
                                        "Bareja",
                                        "Bakrol Bujrang",
                                        "Barejadi",
                                        "Bhat",
                                        "Bhavda",
                                        "Bhuvaldi",
                                        "Chandial",
                                        "Dhamatvan",
                                        "Jetalpur",
                                        "Kasindra",
                                        "Kubadthal",
                                        "Kuha",
                                        "Mahijada",
                                        "Memadpur",
                                        "Navapura",
                                        "Paldi Kankaj",
                                        "Rakhial",
                                        "Vastral",
                                        "Vinzol",
                                        "Zanu",
                                        "Ghuma",
                                        "Manipur",
                                        "Kanbha",
                                        "Geratpur"
                                    ],

                                    Dholka: [
                                        "Ambaliyara",
                                        "Ambareli",
                                        "Ambethi",
                                        "Anandpura",
                                        "Andhari",
                                        "Arnej",
                                        "Badarkha",
                                        "Begva",
                                        "Bhetawada",
                                        "Bholad",
                                        "Bhumli",
                                        "Bhurkhi",
                                        "Chaloda",
                                        "Chandisar",
                                        "Dadusar",
                                        "Dholi",
                                        "Dholka (Rural)",
                                        "Ganesar",
                                        "Ganol",
                                        "Girand",
                                        "Gundi",
                                        "Ingoli",
                                        "Jakhda",
                                        "Jalalpur Godhaneshvar",
                                        "Jalalpur Vazifa",
                                        "Javaraj",
                                        "Kadipur",
                                        "Kaliyapura",
                                        "Kalyanpur",
                                        "Kariyana",
                                        "Kauka",
                                        "Kesargadh",
                                        "Khanpur",
                                        "Kharanti",
                                        "Khatripur",
                                        "Koth",
                                        "Lana",
                                        "Loliya",
                                        "Moti Boru",
                                        "Mujpur",
                                        "Nani Boru",
                                        "Nesda",
                                        "Paldi",
                                        "Pisawada",
                                        "Rajpur",
                                        "Rampur",
                                        "Rampura",
                                        "Ranoda",
                                        "Raypur",
                                        "Rupgadh",
                                        "Sahij",
                                        "Samani",
                                        "Saragvala",
                                        "Sarandi",
                                        "Saroda",
                                        "Sathal",
                                        "Shekhdi",
                                        "Shiyawada",
                                        "Simej",
                                        "Sindhraj",
                                        "Transad",
                                        "Uteliya",
                                        "Valthera",
                                        "Varna",
                                        "Vasna Keliya",
                                        "Vataman",
                                        "Vautha",
                                        "Vejalka",
                                        "Virdi",
                                        "Virpur"
                                    ],

                                    Dholera: [
                                        "Ambali",
                                        "Anandpur",
                                        "Bavliyari",
                                        "Bhadiyad",
                                        "Bhangadh",
                                        "Bhimtalav",
                                        "Cher",
                                        "Dholera",
                                        "Gogla",
                                        "Gorasu",
                                        "Hebatpur",
                                        "Kadipur",
                                        "Kamatalav",
                                        "Khun",
                                        "Mingalpur",
                                        "Mundi",
                                        "Navagam",
                                        "Otariya",
                                        "Panchi",
                                        "Pipli",
                                        "Rahatalav",
                                        "Sandhida",
                                        "Sangasar",
                                        "Shela",
                                        "Sodhi",
                                        "Sothavid",
                                        "Valinda",
                                        "Vejalka",
                                        "Vejbalampur",
                                        "Vejdi",
                                        "Vejidipada",
                                        "Vejpur",
                                        "Vejvadar"
                                    ],

                                    Bavla: [
                                        "Adroda",
                                        "Amipura",
                                        "Bagodara",
                                        "Baldana",
                                        "Bhamsara",
                                        "Bhayla",
                                        "Chhabasar",
                                        "Chiyada",
                                        "Dahegamda",
                                        "Devadthal",
                                        "Devdholera",
                                        "Dhanwada",
                                        "Dhedhal",
                                        "Dhingda",
                                        "Dumali",
                                        "Durgi",
                                        "Gangad",
                                        "Gundanapara",
                                        "Hasannagar",
                                        "Juval Rupavati",
                                        "Kaliveji",
                                        "Kalyangadh",
                                        "Kanotar",
                                        "Kavitha",
                                        "Kavla",
                                        "Kerala",
                                        "Kesaradi",
                                        "Kochariya",
                                        "Lagdana",
                                        "Memar",
                                        "Meni",
                                        "Metal",
                                        "Mithapur",
                                        "Nanodara",
                                        "Ranesar",
                                        "Rohika",
                                        "Rupal",
                                        "Sakodara",
                                        "Saljada",
                                        "Sankod",
                                        "Sarala",
                                        "Shiyal",
                                        "Vasna Dhedhal",
                                        "Vasna Nanodara",
                                        "Zekda"
                                    ],
                                    Sanand: [
                                        "Anadej",
                                        "Aniyali",
                                        "Bakrana",
                                        "Bhavanpur",
                                        "Bol",
                                        "Changodar",
                                        "Charal",
                                        "Chekhla",
                                        "Chharodi",
                                        "Daduka",
                                        "Daran",
                                        "Dodar",
                                        "Fangdi",
                                        "Garodiya",
                                        "Godhavi",
                                        "Goraj",
                                        "Govinda",
                                        "Hirapur",
                                        "Iyava",
                                        "Juda",
                                        "Juwal",
                                        "Kalana",
                                        "Kaneti",
                                        "Khicha",
                                        "Khoda",
                                        "Khoraj",
                                        "Kodaliya",
                                        "Kolat",
                                        "Kundal",
                                        "Kunvar",
                                        "Lekhamba",
                                        "Lodariyal",
                                        "Makhiyav",
                                        "Mankol",
                                        "Melasana",
                                        "Modasar",
                                        "Moti Devti",
                                        "Nani Devti",
                                        "Naranpura",
                                        "Palwada",
                                        "Pipan",
                                        "Rampura",
                                        "Rethal",
                                        "Rupavati",
                                        "Shiyawada",
                                        "Soyla",
                                        "Tajpur",
                                        "Upardal",
                                        "Vanaliya",
                                        "Vasna Iyava",
                                        "Vasodara",
                                        "Vinchhiya",
                                        "Virochannagar",
                                        "Zamp",
                                        "Zolapur"
                                    ],
                                    Viramgam: [
                                        "Asalgam",
                                        "Bhadana",
                                        "Bhavda",
                                        "Bhojva",
                                        "Chanothiya",
                                        "Chuninapura",
                                        "Dalsana",
                                        "Dediyasan",
                                        "Devpura",
                                        "Dhakdi",
                                        "Dumana",
                                        "Ghoda",
                                        "Goraiya",
                                        "Hansalpur Sereshvar",
                                        "Jakhwada",
                                        "Jaksi",
                                        "Jalampura",
                                        "Jetapur",
                                        "Juna Padar",
                                        "Kadipur",
                                        "Kaliyana",
                                        "Kalyanpur (Shiyal)",
                                        "Kamijla",
                                        "Kankaravadi",
                                        "Kanpura (Dalsana)",
                                        "Karakathal",
                                        "Karangadh",
                                        "Kariyana",
                                        "Kayla",
                                        "Khengariya",
                                        "Khudad",
                                        "Kokta",
                                        "Kumarkhan",
                                        "Limbad",
                                        "Liya",
                                        "Melaj",
                                        "Memadpura",
                                        "Moti Kishol",
                                        "Moti Kumad",
                                        "Nadiyana",
                                        "Nani Kishol",
                                        "Nani Kumad",
                                        "Nilki",
                                        "Ogan",
                                        "Rahemalpur",
                                        "Rangpur",
                                        "Rupavati",
                                        "Sabalpura",
                                        "Sachana",
                                        "Sarsavadi",
                                        "Shahpur",
                                        "Shivpura",
                                        "Sokali",
                                        "Thori Mubarak",
                                        "Thori Thambha",
                                        "Thori Vadgas",
                                        "Thuleta",
                                        "Ukhalod",
                                        "Vadgas",
                                        "Valana",
                                        "Vani",
                                        "Vanthal",
                                        "Vasan",
                                        "Vasveliya",
                                        "Vekariya",
                                        "Zezara"
                                    ],
                                    DetrojRampura: [
                                        "Abasna",
                                        "Aghar (Ashoknagar)",
                                        "Amarpura",
                                        "Balsasan",
                                        "Bamroli",
                                        "Bantai",
                                        "Bhagapura",
                                        "Bhankoda",
                                        "Bhatariya",
                                        "Bhonyni",
                                        "Bhonynipura",
                                        "Boska",
                                        "Chhaniyar",
                                        "Dabhsar",
                                        "Damodaripura",
                                        "Dangarva",
                                        "Dekavada",
                                        "Detroj",
                                        "Fatepura",
                                        "Gamanpura",
                                        "Ghatisana",
                                        "Ghelda",
                                        "Gunjala",
                                        "Hathipura",
                                        "Indrapura",
                                        "Jaspura",
                                        "Jethipura",
                                        "Kantrodi",
                                        "Kanz",
                                        "Kointiya",
                                        "Kukvav",
                                        "Madrisana",
                                        "Marusana",
                                        "Mota Karanpura",
                                        "Moti Rantai",
                                        "Nadishala",
                                        "Nana Karanpura",
                                        "Nani Rantai",
                                        "Nathpura",
                                        "Odhav",
                                        "Odhav Paru",
                                        "Panar",
                                        "Rajpura",
                                        "Rampura",
                                        "Ratanpura",
                                        "Rudatal",
                                        "Sadatpura",
                                        "Sangpara",
                                        "Shihor",
                                        "Shobhasan",
                                        "Sujpura",
                                        "Sunvala",
                                        "Telavi",
                                        "Umedpura",
                                        "Vasna (Chhaniyar)"
                                    ],
                                    Mandal: [
                                        "Anandpura",
                                        "Dadhana",
                                        "Dalod",
                                        "Dhedhasana",
                                        "Endla",
                                        "Hansalpur Becharaji",
                                        "Jalisana",
                                        "Kachrol",
                                        "Kadvasan",
                                        "Kanpura",
                                        "Karshanpura",
                                        "Kunpur",
                                        "Mandal",
                                        "Manpura",
                                        "Mithapur",
                                        "Nana Ubhada",
                                        "Navagam",
                                        "Nayakpur",
                                        "Odaki",
                                        "Rakhiyana",
                                        "Ribdi",
                                        "Sadra",
                                        "Sher",
                                        "Sinaj",
                                        "Sitapur",
                                        "Solgam",
                                        "Trent",
                                        "Ughroj",
                                        "Ughrojpura",
                                        "Ukardi",
                                        "Vanpardi",
                                        "Varmor",
                                        "Vasna Kunpur",
                                        "Vinchhan",
                                        "Vinzuvada",
                                        "Vithlapur",
                                        "Zanzarava"
                                    ],
                                    Dhandhuka: [
                                        "Adval",
                                        "Akru",
                                        "Ambli",
                                        "Anandpur",
                                        "Aniyali Bhimji",
                                        "Bajarda",
                                        "Bavliyari",
                                        "Bhadiyad",
                                        "Bhalgamda",
                                        "Bhangadh",
                                        "Bhimtalav",
                                        "Buranpur",
                                        "Chandarva",
                                        "Cher",
                                        "Chharodiya",
                                        "Chhasiyana",
                                        "Dhanala",
                                        "Dholera",
                                        "Fattepur",
                                        "Fedra",
                                        "Galsana",
                                        "Gamph",
                                        "Gogla",
                                        "Gorasu",
                                        "Gunjar",
                                        "Jambuda",
                                        "Jasvantpura",
                                        "Jethal",
                                        "Jivapar",
                                        "Kadiyali",
                                        "Kansara",
                                        "Kansari",
                                        "Kansiya",
                                    ],
                                    Barwala: [
                                        "Ankevaliya",
                                        "Bela",
                                        "Chachariya",
                                        "Chokdi",
                                        "Dhadhodar",
                                        "Hebatpur",
                                        "Jharvaliya",
                                        "Kapadiyali",
                                        "Khadsaliya",
                                        "Khambhada",
                                        "Khamidana",
                                        "Kundal",
                                        "Nabhoi",
                                        "Navda",
                                        "Pipariya",
                                        "Polarpur",
                                        "Rampura",
                                        "Ranpari",
                                        "Refda",
                                        "Rojid",
                                        "Salangpur",
                                        "Sangasara",
                                        "Shahpur",
                                        "Sodhi",
                                        "Timbla",
                                        "Vadhela",
                                        "Vahiya"
                                    ],
                                }
                            },
                            Akola: {
                                talukas: {
                                    Akola: ["Anvapada", "Borgaon", "Ghunegaon", "Jambhli", "Kalapathar", "Khamgaon"],
                                    Akot: ["Babhulgaon", "Borgaon", "Borgaon Kd", "Gadchandur", "Ghatna", "Goregaon"],
                                    Balapur: ["Babhulgaon", "Fulsawangi", "Gundhana", "Indira Nagar", "Kanhan", "Jambhli"],
                                    Barshitakli: ["Adgaon", "Pimpalgaon", "Khamgaon", "Pimpalwadi", "Tharwada", "Nimkheda"],
                                    Murtijapur: ["Borgaon", "Kothari", "Malkapur", "Patilwadi", "Raigarh", "Nandgaon"],
                                    Patur: ["Borgaon", "Khamgaon", "Nandgaon", "Patilwadi", "Pimpalgaon", "Raipur"],
                                    Telhara: ["Babhulgaon", "Borgaon", "Nandgaon", "Pimpalgaon", "Tharwada", "Wadi"]
                                }
                            },
                            Amravati: {
                                talukas: {
                                    Achalpur: ["Adivala", "Borgaon", "Chandpur", "Dhamangaon", "Ghatpur", "Hingani", "Khamkheda", "Pimpalgaon"],
                                    Amravati: ["Adgaon", "Banegaon", "Borgaon", "Hindpur", "Jambhali", "Khamkheda", "Pimpalwadi", "Shiraswadi"],
                                    AnjangaonSurji: ["Adgaon", "Bhivpur", "Chandpur", "Jambhli", "Khamkheda", "Pimpalwadi", "Wadi", "Warud"],
                                    Bhatkuli: ["Borgaon", "Hingani", "Khamkheda", "Malkapur", "Phulsawangi", "Pimpalgaon", "Wadi", "Zarvade"],
                                    ChandurRailway: ["Chandur", "Morshi", "Rajur", "Adgaon", "Hingani", "Shiraswadi", "Jambhli", "Nandgaon"],
                                    Chandurbazar: ["Borgaon", "Hingani", "Khamkheda", "Narayanpur", "Rajur", "Shiraswadi", "Wadi", "Khamkheda"],
                                    Chikhaldara: ["Chikhaldara", "Wadi", "Adgaon", "Jambhli", "Sangrampur", "Borgaon", "Nandgaon", "Wadi"],
                                    Daryapur: ["Daryapur", "Ghatpur", "Hingani", "Pimpalwadi", "Warud", "Adgaon", "Malkapur", "Khamkheda"],
                                    DhamangaonRailway: ["Adgaon", "Dhamangaon", "Ghatpur", "Hingani", "Khamkheda", "Wadi", "Phulsawangi"],
                                    Dharni: ["Dharni", "Ghatpur", "Jambhli", "Khamkheda", "Malkapur", "Shiraswadi", "Wadi"],
                                    Morshi: ["Morshi", "Wadi", "Warud", "Daryapur", "Borgaon", "Phulsawangi", "Shiraswadi", "Adgaon"],
                                    NandgaonKhandeshwar: ["Nandgaon", "Phulsawangi", "Malkapur", "Ghatpur", "Wadi", "Shiraswadi"],
                                    Teosa: ["Teosa", "Borgaon", "Rajur", "Wadi", "Hingani", "Khamkheda", "Pimpalwadi", "Shiraswadi"],
                                    Warud: ["Warud", "Ghatpur", "Malkapur", "Hingani", "Shiraswadi", "Adgaon", "Khamkheda"]
                                }
                            },
                            Aurangabad: {
                                talukas: {
                                    Aurangabad: ["Adgaon", "Babhulgaon", "Chandpur", "Dhamangaon", "Khamkheda", "Mirkheda", "Nandgaon", "Pimpalwadi"],
                                    Gangapur: ["Adgaon", "Hindapur", "Borgaon", "Karjika", "Nimbala", "Siddhpur", "Wadi", "Pimpalgaon"],
                                    Kannad: ["Khamkheda", "Pimpalgaon", "Shiraswadi", "Khadakpada", "Vasmat", "Kharmala", "Hadiwara", "Fulsawangi"],
                                    Khuldabad: ["Khuldabad", "Wadgaon", "Borgaon", "Khamkheda", "Somanpada", "Pimpalgaon", "Wadi", "Humbali"],
                                    Paithan: ["Paithan", "Ranjani", "Shiraswadi", "Babhulgaon", "Wadgaon", "Phulsawangi", "Vasgaon", "Gokulwadi"],
                                    Phulambri: ["Phulambri", "Gadhegaon", "Narayanpur", "Pimpalwadi", "Khamkheda", "Gopalwadi", "Khatalwadi", "Wadi"],
                                    Sillod: ["Sillod", "Borgaon", "Shiraswadi", "Khamkheda", "Vasmat", "Wadi", "Nimbala", "Fulsawangi"],
                                    Soegaon: ["Soegaon", "Wadgaon", "Babhulgaon", "Khamkheda", "Narayanpur", "Pimpalwadi", "Wadi", "Mirkheda"],
                                    Vaijapur: ["Vaijapur", "Babhulgaon", "Wadgaon", "Khultabad", "Nimbala", "Khamkheda", "Rajur", "Pandharkawda"]
                                }
                            },
                            Beed: {
                                talukas: {
                                    Ambajogai: ["Chousala", "Dharmapuri", "Parli", "Malwati", "Pimpalwadi", "Aashti", "Ghatnandur", "Jirewadi"],
                                    Ashti: ["Ashti", "Hivare", "Deola", "Dhangarwadi", "Chincholi", "Pathardi", "Kothala", "Pangri"],
                                    Beed: ["Beed", "Rajuri", "Nipani", "Hatgaon", "Sonijawala", "Nagewadi", "Manjarsumba", "Padalsingi"],
                                    Dharur: ["Dharur", "Yellambghat", "Telgaon", "Ukhalad", "Shirur", "Kaijwadi", "Bodhegaon", "Wadshed"],
                                    Georai: ["Georai", "Pachegaon", "Rajur", "Ganeshwadi", "Dongarkini", "Madalmohi", "Kukna", "Takli"],
                                    Kaij: ["Kaij", "Bansarola", "Telgaon", "Mandwa", "Pimpalgaon", "Pardi", "Sawargaon", "Aranwadi"],
                                    Majalgaon: ["Majalgaon", "Gomalwadi", "Kada", "Dhanora", "Pathri", "Umri", "Kopra", "Bhose"],
                                    ParliVaijnath: ["Parli", "Takli", "Ralegaon", "Dhondrai", "Wadshed", "Yellambghat", "Khandgaon", "Sonijawala"],
                                    Patoda: ["Patoda", "Kankara", "Loni", "Rajuri", "Talegaon", "Pangri", "Chikhalwadi", "Warad"],
                                    Wadwani: ["Wadwani", "Kanherwadi", "Naigaon", "Babhulgaon", "Chumb", "Malegaon", "Hivare", "Deola"],
                                    ShirurKasar: ["Shirur Kasar", "Dongargaon", "Rajurwadi", "Takli", "Pangri", "Manur", "Lonwadi", "Padali"]
                                }
                            },
                            Bhandara: {
                                talukas: {
                                    Bhandara: ["Chandpur", "Pindkepar", "Mandhal", "Adyal", "Madgi", "Palora", "Warthi", "Navegaon"],
                                    Tumsar: ["Tumsar", "Morgaon Arjuni", "Ladgaon", "Dhargaon", "Sihora", "Ganeshpur", "Khandara", "Gobarwahi"],
                                    Mohadi: ["Mohadi", "Pipari", "Sondad", "Kawadsi", "Mangli", "Lonara", "Navegaon", "Ramakona"],
                                    Pauni: ["Pauni", "Bhivapur", "Koka", "Dhargaon", "Karachkheda", "Jamb", "Kawadgaon", "Madgi"],
                                    Sakoli: ["Sakoli", "Pohra", "Chicholi", "Murri", "Lohara", "Mohgaon", "Yerla", "Biwapur"],
                                    Lakhani: ["Lakhani", "Sawargaon", "Kamptee", "Belgaon", "Manegaon", "Dighori", "Palandur", "Murkhala"],
                                    Lakhandur: ["Lakhandur", "Deori", "Mundhari", "Kosambi", "Asola", "Mangli", "Belapur", "Kaneri"]
                                }
                            },
                            Buldhana: {
                                talukas: {
                                    Buldhana: ["Chikhali", "Pimpalgaon Raja", "Dhad", "Borakhedi", "Bawanbir", "Anjani", "Umali", "Khamgaon"],
                                    Chikhli: ["Chikhli", "Rajur", "Khanapur", "Jalgaon", "Takarkheda", "Deulgaon Dhudh", "Sakhar Kherda", "Pangarkhed"],
                                    DeulgaonRaja: ["Deulgaon Raja", "Rohinkhed", "Kardkhed", "Bodkha", "Manegaon", "Talegaon", "Amdapur", "Chandol"],
                                    Malkapur: ["Malkapur", "Nimgaon", "Soner", "Pimpalgaon Kale", "Borkhedi", "Palaskhed", "Rajur", "Tambol"],
                                    Motala: ["Motala", "Loni", "Paturda", "Motha", "Dhanora", "Kolwad", "Shelgaon", "Giroli"],
                                    Nandura: ["Nandura", "Mahatpur", "Pimpalgaon Kale", "Shivani", "Tamgaon", "Palaskhed", "Ladgaon", "Manegaon"],
                                    Mehkar: ["Mehkar", "Shelgaon", "Sindkhed", "Lonar", "Takli", "Adgaon", "Kolwad", "Sakharkherda"],
                                    SindkhedRaja: ["Sindkhed Raja", "Raja Takli", "Kolgaon", "Deulgaon Mahi", "Takli", "Borakhedi", "Bhivpur", "Shevti"],
                                    Lonar: ["Lonar", "Ajantha", "Khamgaon", "Murtijapur", "Chondi", "Jambhrun", "Bori", "Babhulgaon"],
                                    Khamgaon: ["Khamgaon", "Nandura", "Jalgaon", "Bodwad", "Pimpalgaon", "Soner", "Palaskhed", "Deulgaon Raja"],
                                    Shegaon: ["Shegaon", "Akot", "Akola", "Balapur", "Khamgaon", "Patur", "Paturda", "Loni"],
                                    JalgaonJamod: ["Jalgaon Jamod", "Telhara", "Akot", "Washim", "Murtijapur", "Shegaon", "Balapur", "Patur"],
                                    Sangrampur: ["Sangrampur", "Sonala", "Tunki", "Warwat", "Shivpur", "Pandhurna", "Dhamangaon", "Malegaon"]
                                }
                            },
                            Chandrapur: {
                                talukas: {
                                    Chandrapur: ["Durgapur", "Pathanpura", "Bhari", "Chargaon", "Gourala", "Tadoba", "Ramnagar", "Mul Road"],
                                    Ballarpur: ["Ballarpur", "Sasti", "Manikgarh", "Padmapur", "Hingoli", "Nandgaon", "Bamni", "Wadgaon"],
                                    Warora: ["Warora", "Bhivkund", "Nandori", "Tadali", "Bramhapuri", "Nimgaon", "Somnath", "Khutala"],
                                    Bhadravati: ["Bhadravati", "Chora", "Sasti", "Ghatkul", "Manikgarh", "Hirapur", "Padmapur", "Umri"],
                                    Chimur: ["Chimur", "Makardhokda", "Lohara", "Navegaon", "Junona", "Palasgaon", "Bramhanwada", "Antargaon"],
                                    Nagbhid: ["Nagbhid", "Morgaon", "Dighori", "Pombhurna", "Tukum", "Chargaon", "Gondmohadi", "Umri"],
                                    Bramhapuri: ["Bramhapuri", "Wadsa", "Chandankheda", "Kothari", "Devgaon", "Khopadi", "Bamanpeth", "Pathari"],
                                    Sindewahi: ["Sindewahi", "Sasti", "Manikgarh", "Padmapur", "Chora", "Bhivkund", "Saraswati", "Umari"],
                                    Mul: ["Mul", "Rajoli", "Ghot", "Devgaon", "Mundipar", "Somnath", "Waghala", "Junona"],
                                    Saoli: ["Saoli", "Dongargaon", "Junona", "Umargaon", "Manikgarh", "Padmapur", "Bhivkund", "Nandgaon"],
                                    Gondpimpri: ["Gondpimpri", "Chargaon", "Pathari", "Ramala", "Mundipar", "Somnath", "Waghala", "Umari"],
                                    Pombhurna: ["Pombhurna", "Tadoba", "Junona", "Somnath", "Bramhapuri", "Navegaon", "Palasgaon", "Makardhokda"],
                                    Rajura: ["Rajura", "Ballarpur", "Chargaon", "Junona", "Wadgaon", "Manikgarh", "Sasti", "Bamni"],
                                    Korpana: ["Korpana", "Pathari", "Rajoli", "Somnath", "Devgaon", "Bramhapuri", "Makardhokda", "Nandgaon"],
                                    Jiwati: ["Jiwati", "Dongargaon", "Palasgaon", "Navegaon", "Waghala", "Chargaon", "Rajoli", "Umri"]
                                }
                            },
                            Dhule: {
                                talukas: {
                                    Dhule: ["Avadhan", "Mohadi", "Nardana", "Laling", "Malkhede", "Babhale", "Valane", "Ashta"],
                                    Sakri: ["Sakri", "Pimparkhed", "Nimdale", "Dhadane", "Navapur", "Waghale", "Borale", "Jamane"],
                                    Shirpur: ["Shirpur", "Tonde", "Pimpri", "Kapadane", "Shirpur Waghadi", "Holnanthe", "Somthana", "Vikharan"],
                                    Sindkheda: ["Sindkheda", "Amode", "Nimgul", "Morde", "Balhane", "Dhaner", "Jatode", "Waghadi"]
                                }
                            },
                            Gadchiroli: {
                                talukas: {
                                    Gadchiroli: ["Gadchiroli", "Panderwani", "Chamorshi", "Markanda", "Ashti", "Bhamragad", "Zingaon", "Talasgaon"],
                                    Dhanora: ["Dhanora", "Rangi", "Pusgaon", "Kondawahi", "Mendha", "Bhagwanpur", "Navargaon", "Potegaon"],
                                    Aheri: ["Aheri", "Rajaram", "Bhamragad", "Ghot", "Mahagaon", "Parandoli", "Jimalgatta", "Dharmapuri"],
                                    Sironcha: ["Sironcha", "Perimilli", "Alapalli", "Kondapalli", "Manikgarh", "Rajura", "Bendri", "Tummidihatti"],
                                    Chamorshi: ["Chamorshi", "Mulchera", "Potegaon", "Ashti", "Saigaon", "Jimalgatta", "Bamanpeth", "Zingaon"],
                                    Mulchera: ["Mulchera", "Durgapur", "Alapalli", "Sawargaon", "Dhanora", "Kondawahi", "Kasansur", "Pataguda"],
                                    Etapalli: ["Etapalli", "Kandoli", "Ghot", "Potegaon", "Mahagaon", "Kasansur", "Rangi", "Jimalgatta"],
                                    Bhamragad: ["Bhamragad", "Gadchiroli", "Wadsa", "Zingaon", "Durgapur", "Chamorshi", "Jimalgatta", "Ashti"],
                                    Wadsa: ["Wadsa", "Sawargaon", "Dhanora", "Brahmapuri", "Panderwani", "Mendha", "Rangi", "Potegaon"],
                                    Armori: ["Armori", "Markanda", "Talasgaon", "Rajaram", "Kondapalli", "Mahagaon", "Rajura", "Ghot"],
                                    Kurkheda: ["Kurkheda", "Korchi", "Pusgaon", "Jimalgatta", "Potegaon", "Kasansur", "Durgapur", "Bhamragad"],
                                    Korchi: ["Korchi", "Kurkheda", "Ashti", "Sawargaon", "Rangi", "Pusgaon", "Talasgaon", "Zingaon"]
                                }
                            },
                            Gondia: {
                                talukas: {
                                    Gondia: ["Fulchur", "Nimgaon", "Gonditola", "Mundipar", "Gondia", "Pipariya", "Mendha", "Satgaon"],
                                    Tirora: ["Tirora", "Deori", "Amgaon", "Mohadi", "Sakoli", "Borgaon", "Rajegaon", "Mangeli"],
                                    Goregaon: ["Goregaon", "Pindkepar", "Katangi", "Murpar", "Navegaon", "Barabhati", "Chichgad", "Balapur"],
                                    Deori: ["Deori", "Mangrukheda", "Chorkhamara", "Parasdoh", "Lohara", "Pandharwani", "Malgaon", "Khamari"],
                                    Amgaon: ["Amgaon", "Mohadi", "Salekasa", "Shivani", "Dhotra", "Nawatola", "Ambadi", "Parsodi"],
                                    Salekasa: ["Salekasa", "Pujaritola", "Pindkepar", "Sarekha", "Dhabetola", "Manditola", "Keshori", "Gonditola"],
                                    ArjuniMorgaon: ["Arjuni", "Morgaon", "Navegaon", "Chichgad", "Bopli", "Pathari", "Chorkhamara", "Waghodi"],
                                    SadakArjuni: ["Sadak Arjuni", "Katangi", "Borgaon", "Nandgaon", "Khamari", "Mundipar", "Satgaon", "Mangrukheda"]
                                }
                            },
                            Hingoli: {
                                talukas: {
                                    Hingoli: ["Hingoli", "Pangra", "Narsi", "Dhamangaon", "Gundegaon", "Satephal", "Talegaon", "Malegaon"],
                                    Kalamnuri: ["Kalamnuri", "Sawangi", "Ekurka", "Tadkalas", "Jawala", "Adgaon", "Pimpri", "Rajur"],
                                    Sengaon: ["Sengaon", "Gokulwadi", "Hatgaon", "Shelgaon", "Banegaon", "Pimpri", "Tandulwadi", "Wadshed"],
                                    AundhaNagnath: ["Aundha Nagnath", "Palsi", "Hatgaon", "Wadshed", "Dhanora", "Talegaon", "Jawala", "Ekurka"],
                                    Basmath: ["Basmath", "Digras", "Rajur", "Nandapur", "Pangra", "Loni", "Tondapur", "Banegaon"]
                                }
                            },
                            Jalgaon: {
                                talukas: {
                                    Jalgaon: ["Asoda", "Bhadli", "Chincholi", "Ekurka", "Neri", "Pimpri", "Rajur", "Umale"],
                                    Pachora: ["Pachora", "Adgaon", "Ekurka", "Hatgaon", "Khedgaon", "Mhasdi", "Vadshed", "Wadshed"],
                                    Amalner: ["Amalner", "Dharangaon", "Hatgaon", "Lohagad", "Rajur", "Shelgaon", "Takali", "Umardi"],
                                    Yawal: ["Yawal", "Faizpur", "Hatgaon", "Neri", "Raver", "Rajur", "Sakri", "Tondapur"],
                                    Erandol: ["Erandol", "Hatgaon", "Rajur", "Pimpri", "Mhasdi", "Wadshed", "Loni", "Tondapur"],
                                    Bhusawal: ["Bhusawal", "Hatgaon", "Neri", "Rajur", "Shelgaon", "Faizpur", "Pachora", "Takali"],
                                    Chalisgaon: ["Chalisgaon", "Adgaon", "Faizpur", "Hatgaon", "Rajur", "Takali", "Umardi", "Mhasdi"],
                                    Jamner: ["Jamner", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Wadshed", "Umardi", "Loni"],
                                    Bhadgaon: ["Bhadgaon", "Adgaon", "Hatgaon", "Neri", "Rajur", "Shelgaon", "Takali", "Tondapur"],
                                    Chopda: ["Chopda", "Ekurka", "Hatgaon", "Lohagad", "Rajur", "Shelgaon", "Tondapur", "Wadshed"],
                                    Raver: ["Raver", "Faizpur", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Umardi", "Tondapur"],
                                    Dharangaon: ["Dharangaon", "Adgaon", "Hatgaon", "Loni", "Rajur", "Shelgaon", "Takali", "Wadshed"],
                                    Parola: ["Parola", "Ekurka", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Tondapur", "Umardi"],
                                    Muktainagar: ["Muktainagar", "Hatgaon", "Neri", "Rajur", "Shelgaon", "Takali", "Tondapur", "Wadshed"],
                                    Bodwad: ["Bodwad", "Adgaon", "Ekurka", "Hatgaon", "Rajur", "Shelgaon", "Takali", "Wadshed"]
                                }
                            },
                            Jalna: {
                                talukas: {
                                    Jalna: ["Jalna", "Rajur", "Babhulgaon", "Pimpalgaon", "Gundegaon", "Wadshed", "Lohagad", "Dongaon"],
                                    Badnapur: ["Badnapur", "Takali", "Banegaon", "Lahora", "Palaskheda", "Shedgaon", "Hatgaon", "Loni"],
                                    Ghansawangi: ["Ghansawangi", "Ekurka", "Sultanpur", "Rajur", "Pimpalgaon", "Tembhurni", "Gokulwadi", "Adgaon"],
                                    Partur: ["Partur", "Shelgaon", "Rajur", "Dhangarwadi", "Kolwadi", "Pangra", "Banegaon", "Sadegaon"],
                                    Mantha: ["Mantha", "Hatgaon", "Nandapur", "Chinchkheda", "Devgaon", "Nivdunga", "Gunj", "Kolwadi"],
                                    Bhokardan: ["Bhokardan", "Loni", "Ekurka", "Golegaon", "Pipalgaon Renukai", "Chinchpur", "Banegaon", "Rajur"],
                                    Ambad: ["Ambad", "Gundegaon", "Babhulgaon", "Sultanpur", "Takali", "Dongaon", "Hatgaon", "Banegaon"]
                                }
                            },
                            Kolhapur: {
                                talukas: {
                                    Shahuwadi: ["Shahuwadi", "Dhamapur", "Wadi", "Pimpalgaon", "Malkapur", "Borgaon", "Rajur", "Sakri"],
                                    Panhala: ["Panhala", "Wadi", "Babhulgaon", "Rajur", "Mundapur", "Sangvi", "Vasai", "Malkapur"],
                                    Hatkanangale: ["Hatkanangale", "Pimpalgaon", "Babhulgaon", "Rajur", "Wadi", "Malkapur", "Sangvi", "Vasai"],
                                    Shirol: ["Shirol", "Pimpalgaon", "Rajur", "Malkapur", "Wadi", "Babhulgaon", "Sangvi", "Vasai"],
                                    Karveer: ["Karveer", "Rajur", "Babhulgaon", "Pimpalgaon", "Malkapur", "Wadi", "Vasai", "Mundapur"],
                                    Gaganbawada: ["Gaganbawada", "Malkapur", "Rajur", "Babhulgaon", "Pimpalgaon", "Vasai", "Wadi", "Sangvi"],
                                    Radhanagari: ["Radhanagari", "Sakri", "Babhulgaon", "Rajur", "Mundapur", "Wadi", "Vasai", "Malkapur"],
                                    Kagal: ["Kagal", "Sangvi", "Babhulgaon", "Pimpalgaon", "Rajur", "Malkapur", "Wadi", "Vasai"],
                                    Bhudargad: ["Bhudargad", "Rajur", "Mundapur", "Vasai", "Babhulgaon", "Sangvi", "Pimpalgaon", "Malkapur"],
                                    Ajara: ["Ajara", "Babhulgaon", "Pimpalgaon", "Rajur", "Malkapur", "Vasai", "Wadi", "Sangvi"],
                                    Gadhinglaj: ["Gadhinglaj", "Rajur", "Malkapur", "Wadi", "Babhulgaon", "Sangvi", "Pimpalgaon", "Vasai"],
                                    Chandgad: ["Chandgad", "Mundapur", "Rajur", "Sangvi", "Babhulgaon", "Vasai", "Pimpalgaon", "Malkapur"]
                                }
                            },
                            Latur: {
                                talukas: {
                                    Latur: ["Latur", "Pimpalgaon", "Wadi", "Adgaon", "Sangavi", "Mundapur", "Gundegaon", "Dhamangaon"],
                                    Ausa: ["Ausa", "Khandvi", "Babhulgaon", "Rajur", "Pimpalgaon", "Malkapur", "Sakri", "Borgaon"],
                                    Renapur: ["Renapur", "Babhulgaon", "Rajur", "Mundapur", "Pimpalgaon", "Malkapur", "Vasai", "Shiraswadi"],
                                    Nilanga: ["Nilanga", "Gondgaon", "Babhulgaon", "Pimpalgaon", "Rajur", "Wadi", "Sangvi", "Vasai"],
                                    Udgir: ["Udgir", "Pimpalgaon", "Babhulgaon", "Rajur", "Wadi", "Malkapur", "Gondgaon", "Sangvi"],
                                    Jalkot: ["Jalkot", "Pimpalgaon", "Mundapur", "Vasai", "Rajur", "Babhulgaon", "Sangvi", "Borgaon"],
                                    Ahmedpur: ["Ahmedpur", "Mundapur", "Pimpalgaon", "Rajur", "Vasai", "Babhulgaon", "Malkapur", "Shiraswadi"],
                                    Chakur: ["Chakur", "Babhulgaon", "Rajur", "Pimpalgaon", "Malkapur", "Vasai", "Wadi", "Sangvi"],
                                    ShirurAnantpal: ["Shirur Anantpal", "Pimpalgaon", "Babhulgaon", "Rajur", "Wadi", "Sangvi", "Vasai", "Mundapur"],
                                    Deoni: ["Deoni", "Rajur", "Babhulgaon", "Vasai", "Malkapur", "Pimpalgaon", "Shiraswadi", "Sangvi"]
                                }
                            },
                            Mumbai: {
                                talukas: {
                                    MumbaiCity: ["Kandivali", "Andheri", "Bandra", "Goregaon", "Mulund", "Vile Parle", "Dadar", "Colaba", "Mahim", "Lower Parel", "Malad", "Bhandup", "Jogeshwari", "Mira Road", "Dahisar"]
                                }
                            },
                            MumbaiSuburban: {
                                talukas: {
                                    Andheri: [
                                        "Andheri West",
                                        "Andheri East",
                                        "Chakala",
                                        "Four Bungalows",
                                        "Oshiwara",
                                        "Juhu",
                                        "Vile Parle",
                                        "Jogeshwari",
                                        "Marol",
                                        "Andheri (Kurla Road)",
                                        "Saki Naka",
                                        "Mogra",
                                        "Kandivali",
                                        "Malad",
                                        "Dindoshi",
                                        "Versova"
                                    ],
                                    Borivali: [
                                        "Borivali West",
                                        "Borivali East",
                                        "Kandarpada",
                                        "Shimpoli",
                                        "Eksar",
                                        "Kandivali Village",
                                        "Raghunath Nagar",
                                        "Dahanukarwadi",
                                        "Sunder Nagar",
                                        "Kandivali East",
                                        "Devipada",
                                        "Shree Nagar",
                                        "Mogra",
                                        "Gorai",
                                        "Marve",
                                        "Dattapada",
                                        "Raval Pada",
                                        "Bhayandar",
                                        "Mira Road"
                                    ],
                                    Kurla: [
                                        "Kurla East",
                                        "Kurla West",
                                        "Nehrunagar",
                                        "Nandivali",
                                        "Ghatkopar",
                                        "Vidya Nagar",
                                        "Chandivali",
                                        "LBS Nagar",
                                        "Shahad",
                                        "Kolivada",
                                        "Mankhurd",
                                        "Marol",
                                        "Shivaji Nagar",
                                        "Kherwadi",
                                        "Kurla Village",
                                        "LBS Road"
                                    ],
                                    Kandivali: [
                                        "Kandivali West",
                                        "Kandivali East",
                                        "Thakur Village",
                                        "Borivali West",
                                        "Dahanukarwadi",
                                        "Kandarpada",
                                        "Shimpoli",
                                        "Pahadi Eksar",
                                        "Kandivali Village",
                                        "Malad West",
                                        "Oshiwara",
                                        "Goregaon East",
                                        "Mogra",
                                        "Kandivali (East)"
                                    ],
                                    Malad: [
                                        "Malad West",
                                        "Malad East",
                                        "Goregaon West",
                                        "Goregaon East",
                                        "Dindoshi",
                                        "Jogeshwari West",
                                        "Kandarpada",
                                        "Pahadi Eksar",
                                        "Kandivali East",
                                        "Oshiwara",
                                        "Dahisar",
                                        "Mogra",
                                        "Shimpoli",
                                        "Marve",
                                        "Madh Island",
                                        "Versova",
                                        "Marve Village",
                                        "Bangur Nagar",
                                        "Malwani",
                                        "Kandivali Village"
                                    ],
                                    Goregaon: [
                                        "Goregaon West",
                                        "Goregaon East",
                                        "Dindoshi",
                                        "Malad East",
                                        "Malad West",
                                        "Jogeshwari East",
                                        "Jogeshwari West",
                                        "Shastri Nagar",
                                        "Oshiwara",
                                        "Chandivali",
                                        "Pahadi Eksar",
                                        "Kandarpada",
                                        "Kandivali East",
                                        "Shivaji Nagar",
                                        "Goregaon Village",
                                        "Mogra",
                                        "Bangur Nagar",
                                        "Veera Desai Road"
                                    ],
                                    VileParle: [
                                        "Vile Parle East",
                                        "Vile Parle West",
                                        "Parle Village",
                                        "Shastri Nagar",
                                        "N.S. Road",
                                        "Ramalay",
                                        "Hirabai",
                                        "Mogra",
                                        "Vishnu Nagar",
                                        "Sunder Nagar",
                                        "Samarth Nagar",
                                        "Andheri East",
                                        "Chandivali",
                                        "Goregaon East"
                                    ],
                                    Mulund: [
                                        "Mulund West",
                                        "Mulund East",
                                        "Nirmal Nagar",
                                        "LBS Nagar",
                                        "Ashok Nagar",
                                        "Tata Colony",
                                        "Jambhli Naka",
                                        "Goregaon East",
                                        "Jivdani",
                                        "Kandarpada",
                                        "Bhandup West",
                                        "Bhandup East",
                                        "Mahul",
                                        "Sunderwadi",
                                        "Wadi Bunder",
                                        "Lokmanya Nagar"
                                    ],
                                    Bhandup: [
                                        "Bhandup West",
                                        "Bhandup East",
                                        "Nirmal Nagar",
                                        "Lokmanya Nagar",
                                        "Mulund West",
                                        "Mulund East",
                                        "Shivaji Nagar",
                                        "Wadi Bunder",
                                        "Kandarpada",
                                        "Jambhli Naka",
                                        "Kanjurmarg East",
                                        "Kanjurmarg West",
                                        "Mahul",
                                        "Bhandup Village",
                                        "Sunderwadi",
                                        "Ganesh Nagar",
                                        "Vasai Village"
                                    ],
                                    Jogeshwari: [
                                        "Jogeshwari West",
                                        "Jogeshwari East",
                                        "Eksar Village",
                                        "Oshiwara",
                                        "Shastri Nagar",
                                        "Goregaon East",
                                        "Kandarpada",
                                        "Chandivali",
                                        "Kandivali East",
                                        "Veera Desai Road",
                                        "Mogra",
                                        "Bangur Nagar",
                                        "Vishnu Nagar",
                                        "Marol",
                                        "Andheri East"
                                    ],
                                    MiraBhayandar: [
                                        "Mira Road",
                                        "Bhayandar West",
                                        "Bhayandar East",
                                        "Mira Village",
                                        "Naya Nagar",
                                        "Golden Nest",
                                        "Shanti Nagar",
                                        "Kandarpada",
                                        "Dahisar East",
                                        "Dahisar West",
                                        "Nandivali",
                                        "Kanakia",
                                        "Mira-Bhayandar Road",
                                        "Panchwati",
                                        "Naya Nagar",
                                        "Kashimira"
                                    ],
                                    Dahisar: [
                                        "Dahisar West",
                                        "Dahisar East",
                                        "Dahisar Village",
                                        "Kandarpada",
                                        "Shimpoli",
                                        "Nandivali",
                                        "Raghunath Nagar",
                                        "Kashimira",
                                        "Naya Nagar",
                                        "Devipada",
                                        "Panchpakhadi",
                                        "Mira Road East",
                                        "Mira Road West",
                                        "Borivali East"
                                    ]

                                }
                            },
                            NaviMumbai: {
                                talukas: {
                                    NaviMumbai: ["Airoli", "Belapur", "Kharghar", "Kopar Khairane", "Marine Lines", "Seawoods", "Vashi"],
                                    Uran: ["Adgaon", "Bhingari", "Dronagiri", "Karanja", "Panje", "Uran", "Ulwe"],
                                    Panvel: ["New Panvel", "Kamothe", "Kharghar", "Nere", "Mansarovar", "Vihighar"]
                                }
                            },

                            Nanded: {
                                talukas: {
                                    Nanded: ["Nanded", "Jambhali", "Pimpalgaon", "Malkapur", "Wadgaon", "Borgaon", "Mundapur", "Adgaon"],
                                    Ardhapur: ["Ardhapur", "Sakri", "Wadi", "Gundegaon", "Khairgaon", "Rajur", "Pimpalgaon", "Dhamangaon"],
                                    Bhokar: ["Bhokar", "Chandrapur", "Rajur", "Pimpalgaon", "Wadi", "Malkapur", "Vasai", "Borgaon"],
                                    Mudkhed: ["Mudkhed", "Wadgaon", "Shiraswadi", "Pimpalgaon", "Vasai", "Khadakpada", "Babhulgaon", "Rajur"],
                                    Biloli: ["Biloli", "Rajur", "Nandgaon", "Gondgaon", "Chandpur", "Sangvi", "Pimpalgaon", "Borgaon"],
                                    Naigaon: ["Naigaon", "Chandrapur", "Babhulgaon", "Pimpalgaon", "Mundapur", "Malkapur", "Wadi", "Sangvi"],
                                    Degloor: ["Degloor", "Pimpalgaon", "Vasai", "Khaira", "Rajur", "Mundapur", "Adgaon", "Wadi"],
                                    Mukhed: ["Mukhed", "Pimpalgaon", "Shiraswadi", "Khandvi", "Rajur", "Babhulgaon", "Malkapur", "Sakri"],
                                    Dharmabad: ["Dharmabad", "Malkapur", "Pimpalgaon", "Rajur", "Wadi", "Sangvi", "Gundegaon", "Wadgaon"],
                                    Umri: ["Umri", "Pimpalgaon", "Rajur", "Malkapur", "Babhulgaon", "Khaira", "Adgaon", "Sangvi"],
                                    Hadgaon: ["Hadgaon", "Rajur", "Vasai", "Mundapur", "Wadgaon", "Babhulgaon", "Pimpalgaon", "Sangvi"],
                                    Himayatnagar: ["Himayatnagar", "Rajur", "Wadi", "Sakri", "Vasai", "Pimpalgaon", "Babhulgaon", "Malkapur"],
                                    Kandhar: ["Kandhar", "Vasai", "Rajur", "Mundapur", "Sangvi", "Babhulgaon", "Pimpalgaon", "Shiraswadi"],
                                    Loha: ["Loha", "Rajur", "Pimpalgaon", "Vasai", "Malkapur", "Sangvi", "Babhulgaon", "Sakri"],
                                    Kinwat: ["Kinwat", "Wadi", "Pimpalgaon", "Rajur", "Malkapur", "Babhulgaon", "Vasai", "Sangvi"],
                                    Mahur: ["Mahur", "Pimpalgaon", "Rajur", "Vasai", "Mundapur", "Sangvi", "Wadi", "Babhulgaon"]
                                }
                            },
                            Nandurbar: {
                                talukas: {
                                    Nandurbar: ["Nandurbar", "Madhwa", "Pimpalgaon", "Khamkheda", "Dhamangaon", "Sakri", "Borvihir", "Kakadwadi"],
                                    Navapur: ["Navapur", "Sakri", "Dhamangaon", "Waghpur", "Valvi", "Rajur", "Vasai", "Sahapur"],
                                    Shahada: ["Shahada", "Jalgaon", "Khandvi", "Babhulgaon", "Pimpalgaon", "Wadi", "Sakri", "Borgaon"],
                                    Taloda: ["Taloda", "Khandvi", "Sakri", "Jambhli", "Vasai", "Pimpalgaon", "Waghpur", "Malkapur"],
                                    Akrani: ["Akrani", "Babhulgaon", "Dahigaon", "Wadgaon", "Khandvi", "Malkapur", "Sakri", "Rajur"],
                                    Akkalkuwa: ["Akkalkuwa", "Babhulgaon", "Rajur", "Wadi", "Khachari", "Sakri", "Dahigaon", "Pimpalgaon"]
                                }
                            },
                            Osmanabad: {
                                talukas: {
                                    Bhoom: ["Bhoom", "Anvapada", "Pimpalgaon", "Nandgaon", "Ranjala", "Wadi", "Sundapur", "Malkapur"],
                                    Kalamb: ["Kalamb", "Babhulgaon", "Lohgaon", "Khandvi", "Borgaon", "Malkapur", "Babhulwadi", "Mhasla"],
                                    Lohara: ["Lohara", "Gundegaon", "Narayanpur", "Borgaon", "Hirapur", "Patonda", "Pimpalgaon", "Sakharwadi"],
                                    Omerga: ["Omerga", "Baranjala", "Babhulgaon", "Lohgaon", "Salebhavi", "Bhivpur", "Malkapur", "Wadi"],
                                    Osmanabad: ["Osmanabad", "Adgaon", "Sailu", "Malkapur", "Kumbhari", "Ranjangaon", "Jambhli", "Nandgaon"],
                                    Paranda: ["Paranda", "Babhulgaon", "Rajur", "Chandrapur", "Vasai", "Wadi", "Adgaon", "Nandgaon"],
                                    Tuljapur: ["Tuljapur", "Sangamner", "Sirsala", "Patoda", "Malkapur", "Khandvi", "Baranjala", "Garkheda"],
                                    Washi: ["Washi", "Babhulgaon", "Hirapur", "Malkapur", "Khandvi", "Rajur", "Gundegaon", "Bhivpur"]
                                }
                            },
                            Palghar: {
                                talukas: {
                                    Palghar: ["Palghar", "Saphale", "Dahisar", "Shiras", "Gokhiware", "Suryamal", "Vasai", "Kadavali", "Sambalpur"],
                                    Vasai: ["Vasai", "Nalla Sopara", "Bhayandar", "Naigaon", "Vaitarna", "Vasai East", "Vasai West", "Mira Road", "Dahanukarwadi"],
                                    Dahanu: ["Dahanu", "Aswali", "Panchal", "Vada", "Bhivpur", "Jambhul", "Khamgaon", "Mhasla", "Sawarpada"],
                                    Talasari: ["Talasari", "Gundavli", "Vadhwana", "Chandwad", "Vasai Road", "Babhulgaon", "Pimpalgaon", "Kudus"],
                                    Wada: ["Wada", "Nimkheda", "Sailu", "Valvi", "Dhaman", "Gondali", "Kheda", "Anvapada", "Vasanpada"],
                                    Vikramgad: ["Vikramgad", "Murbad", "Chandrapada", "Vadhgaon", "Chinchpada", "Babhulgaon", "Mhasla"],
                                    Jawhar: ["Jawhar", "Nandgaon", "Khandvi", "Shirpur", "Pimpalgaon", "Dhamangaon", "Anvapada", "Jambhi", "Sarsai"],
                                    Mokhada: ["Mokhada", "Hirapur", "Pimpalgaon", "Vasai", "Gokhiware", "Kendrapada", "Dhakne", "Babhulgaon"]
                                }
                            },
                            Parbhani: {
                                talukas: {
                                    Parbhani: ["Adgaon", "Khamgaon", "Shiraswadi", "Chinchkheda", "Mhasla", "Sangvi", "Sawargaon", "Mandvi"],
                                    Selu: ["Selu", "Lohgaon", "Sirsala", "Malkapur", "Babhulgaon", "Pimpalgaon", "Vadhona", "Anvapada"],
                                    Jintur: ["Jintur", "Khamgaon", "Pimpalgaon", "Garkheda", "Adgaon", "Dhamangaon", "Siddheshwar"],
                                    Gangakhed: ["Gangakhed", "Dharangaon", "Chandpur", "Pimpalgaon", "Vasai", "Sungawadi", "Rajur", "Nandgaon"],
                                    Purna: ["Purna", "Ashti", "Banegaon", "Karajgaon", "Karkheda", "Khandvi", "Garkheda"],
                                    Palam: ["Palam", "Anvapada", "Janglat", "Aundha", "Vanjala", "Shivkheda", "Mhasala"],
                                    Pathri: ["Pathri", "Jamdapur", "Shirapur", "Malkapur", "Wadi", "Mankapur", "Lohgaon", "Mandvi"],
                                    Manwath: ["Manwath", "Patonda", "Malkapur", "Vasanpada", "Sirsala", "Wadi", "Shiraswadi", "Kharda"],
                                    Sonpeth: ["Sonpeth", "Shiraswadi", "Pimpalgaon", "Rajur", "Adgaon", "Gangpur", "Wadgaon", "Wadi"]
                                }
                            },
                            Pune: {
                                talukas: {
                                    PuneCity: ["Shivajinagar", "Kothrud", "Aundh", "Wakad", "Hadapsar", "Viman Nagar", "Hinjewadi", "Pimple Saudagar"],
                                    Haveli: ["Tathawade", "Bhosari", "Talegaon Dhamdhere", "Loni Kalbhor", "Fursungi", "Yerwada", "Khadki", "Sangvi"],
                                    Maval: ["Kamshet", "Tungarli", "Panshet", "Lonavala", "Karjat", "Kalamb", "Alandi", "Bhor", "Banegaon"],
                                    Mulshi: ["Pune", "Panshet", "Tungarli", "Lonavala", "Lavale", "Vichumbe", "Sakharwadi"],
                                    Shirur: ["Shirur", "Malshej Ghat", "Alapur", "Chinchwad", "Shiraswadi"],
                                    Baramati: ["Baramati", "Indapur", "Dhayat", "Salumbra", "Kundalwadi", "Talegaon"],
                                    Daund: ["Daund", "Malshej", "Koregaon", "Chinchani", "Ranjangaon", "Wadi"],
                                    Indapur: ["Indapur", "Saswad", "Sangavi", "Waghapur", "Jambhul", "Kotharwadi"],
                                    Bhor: ["Bhor", "Nandgaon", "Babhulgaon", "Chinchwad", "Chandrapur", "Vada"],
                                    Velhe: ["Velhe", "Bhivpur", "Borgaon", "Mahad", "Wadgaon", "Jambhali"],
                                    Purandar: ["Purandar", "Narhe", "Pimpalgaon", "Shirasgaon", "Sangvi", "Saswad"],
                                    Khed: ["Khed", "Rajgurunagar", "Pimpri", "Mochana", "Goregaon"],
                                    Junnar: ["Junnar", "Pimpalgaon", "Ambegaon", "Kondhwa", "Rajewadi"],
                                    Ambegaon: ["Ambegaon", "Chandwad", "Khandala", "Narayanpur", "Hadiyala", "Borgaon"],
                                    PimpriChinchwadCity: ["Bhosari", "Pimpri", "Chinchwad", "Wakad", "Nigdi", "Akurdi"]
                                }
                            }








                        }















                        const selectDistrict = document.getElementById('dist');
                        const selectTaluka = document.getElementById('talukass');
                        const selectVillage = document.getElementById('villagess');

                        selectDistrict.addEventListener('change', function () {
                            const selectedDistrict = selectDistrict.value;
                            if (selectedDistrict) {
                                TalukaPopulate(selectedDistrict);
                            } else {
                                resetTaluka();
                            }
                        });

                        selectTaluka.addEventListener('change', function () {
                            const selectedDistrict = selectDistrict.value;
                            const selectedTaluka = selectTaluka.value;
                            if (selectedTaluka) {
                                villagesPopulate(selectedDistrict, selectedTaluka);
                            } else {
                                selectVillage.innerHTML = '<option value="">Select Village</option>';
                                selectVillage.disabled = true;
                            }
                        });

                        function TalukaPopulate(districts) {
                            const tal = DataOfDistrict[districts].talukas;
                            selectTaluka.innerHTML = '<option value="">Select Taluka</option>';
                            for (let taluk in tal) {
                                const option = document.createElement('option');
                                option.value = taluk;
                                option.textContent = taluk.charAt(0).toUpperCase() + taluk.slice(1);
                                selectTaluka.appendChild(option);
                            }
                            selectTaluka.disabled = false;
                        }

                        function villagesPopulate(districts, taluk) {
                            const vill = DataOfDistrict[districts].talukas[taluk];
                            selectVillage.innerHTML = '<option value="">Select Village</option>';
                            vill.forEach(village => {
                                const option = document.createElement('option');
                                option.value = village;
                                option.textContent = village;
                                selectVillage.appendChild(option);
                            });
                            selectVillage.disabled = false;
                        }

                        function resetTaluka() {
                            selectTaluka.innerHTML = '<option value="">Select Taluka</option>';
                            selectTaluka.disabled = true;
                            selectVillage.innerHTML = '<option value="">Select Village</option>';
                            selectVillage.disabled = true;
                        }
                    </script>
                    <div class="row mb-3">
                        <div class="col-12 col-md-12 col-sm-12">
                            <label class="form-label" for="society-address">Society
                                Address</label>
                            <div class="input-group">
                                <textarea class="form-control" id="society-address" name="society-address" rows="3"
                                    placeholder="Enter Society Address">society-address</textarea>

                            </div>
                        </div>
                    </div>
                    <!-- Dropdown -->
                    <div class="mb-3">
                        <label for="property-type" class="form-label">Property Type </label>
                        <select id="property-type" name="property_type" class="form-select" required>
                            <option value="" disabled selected>Select Property Type</option>
                            <option value="open land">Open Land</option>
                            <option value="villa">Villa</option>
                            <option value="bungalow">Bungalow</option>
                            <option value="structure">Structure</option>
                        </select>
                    </div>

                    <!-- Structure Options -->
                    <div id="structure-options" class="mb-3" style="display: none;">
                        <label for="structure-type" class="form-label">Structure Type</label>
                        <select id="structure-type" name="structure_type" class="form-select">
                            <option value="" disabled selected>Select Structure Type</option>
                            <option value="private">Private</option>
                            <option value="public">Multiple Buildings</option>
                            <option value="society">Society</option>
                        </select>
                    </div>

                    <!-- Private Inputs -->
                    <div id="private-options" class="row g-3 mb-3" style="display: none;">
                        <div class="col-md-6">
                            <label for="private-floors" class="form-label">Number of Floors</label>
                            <input type="number" id="private-floors" name="private_floors" class="form-control"
                                placeholder="Enter Number of Floors">
                        </div>
                        <div class="col-md-6">
                            <label for="private-units" class="form-label">Number of Units</label>
                            <input type="number" id="private-units" name="private_units" class="form-control"
                                placeholder="Enter Number of Units">
                        </div>
                    </div>

                    <!-- Public Inputs -->
                    <div id="public-options" class="row g-3 mb-3" style="display: none;">
                        <div class="col-md-6">
                            <label for="public-wings" class="form-label">Number of Wings</label>
                            <input type="number" id="public-wings" name="public_wings" class="form-control"
                                placeholder="Enter Number of Wings">
                        </div>
                        <div class="col-md-6">
                            <label for="public-floors" class="form-label">Number of Floors</label>
                            <input type="number" id="public-floors" name="public_floors" class="form-control"
                                placeholder="Enter Number of Floors">
                        </div>
                    </div>

                    <!-- Society Inputs -->
                    <div id="society-options" class="mb-3" style="display: none;">
                        <label for="society-units" class="form-label">Number of Units</label>
                        <input type="number" id="society-units" name="society_units" class="form-control"
                            placeholder="Enter Number of Units">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <script>
                    // DOM Elements
                    const propertyType = document.getElementById('property-type');
                    const structureOptions = document.getElementById('structure-options');
                    const structureType = document.getElementById('structure-type');
                    const privateOptions = document.getElementById('private-options');
                    const publicOptions = document.getElementById('public-options');
                    const societyOptions = document.getElementById('society-options');

                    // Event Listeners
                    propertyType.addEventListener('change', function () {
                        structureOptions.style.display = this.value === 'structure' ? 'block' : 'none';
                        resetStructureOptions();
                    });

                    structureType.addEventListener('change', function () {
                        resetStructureOptions();
                        if (this.value === 'private') {
                            privateOptions.style.display = 'flex';
                        } else if (this.value === 'public') {
                            publicOptions.style.display = 'flex';
                        } else if (this.value === 'society') {
                            societyOptions.style.display = 'block';
                        }
                    });

                    function resetStructureOptions() {
                        privateOptions.style.display = 'none';
                        publicOptions.style.display = 'none';
                        societyOptions.style.display = 'none';
                    }
                </script>



            </div>
            <?php include("../../Components/footer.php"); ?>
        </div>













        <script>
            // Show the popup on page load if there is an error
            window.onload = function () {
                const errorPopup = document.getElementById('errorPopup');
                if (errorPopup) {
                    errorPopup.classList.add('show');
                }
            };

            // Function to close the popup
            function closePopup() {
                const errorPopup = document.getElementById('errorPopup');
                if (errorPopup) {
                    errorPopup.classList.remove('show');
                }
            }
        </script>


    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <script>
        function toggleForm() {
            const selectedValue = document.querySelector('input[name="toggle"]:checked').value;

            document.getElementById('add-society').classList.remove('active');
            document.getElementById('land-lord').classList.remove('active');

            if (selectedValue === 'add-society') {
                document.getElementById('add-society').classList.add('active');
            } else {
                document.getElementById('land-lord').classList.add('active');
            }
        }
    </script>

    <script>
        //bootstrap tab api
        document.addEventListener('DOMContentLoaded', () => {
            // Add event listeners for all Next buttons
            document.querySelectorAll('button[id^="next-tab"]').forEach((button) => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent any default form submission or action

                    // Get the current tab's parent element
                    const currentTab = e.target.closest('.tab-pane');
                    const currentTabLink = document.querySelector(`a[href="#${currentTab.id}"]`);

                    // Find the next tab link
                    const nextTabLink = currentTabLink.parentElement.nextElementSibling?.querySelector('.nav-link');
                    if (nextTabLink) {
                        // Switch to the next tab
                        nextTabLink.click();
                    } else {
                        console.log('No next tab available.');
                    }
                });
            });
        });
    </script>
    <!-- ===============================================-->
    <!--    JavaScripts-->

    <!-- ===============================================-->
    <!--Dropdown for contacted-to--->


    <!-- Script to validate the start date and end date of the committee members -->
    <script>
        // Get the input fields
        const termStart = document.getElementById('term-start');
        const termEnd = document.getElementById('term-end');

        // Add event listeners to validate the dates
        termStart.addEventListener('change', validateDates);
        termEnd.addEventListener('change', validateDates);

        function validateDates() {
            const startDate = new Date(termStart.value);
            const endDate = new Date(termEnd.value);

            if (termEnd.value && startDate > endDate) {
                alert('Term End Date cannot be earlier than Term Start Date.');
                termEnd.value = ''; // Clear the invalid date
            }
        }
    </script>
    <!--  -->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../vendors/leaflet/leaflet.js"></script>
    <script src="../../../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../../../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
    <script src="../../../vendors/echarts/echarts.min.js"></script>
    <script src="../../../assets/js/ecommerce-dashboard.js"></script>
    <!-- Bootstrap 5 (no jQuery needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>






    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

    <script>
        gsap.from("#heading-gsap", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.2
        });
        gsap.from("#filterType", {
            opacity: 0,
            y: 50,
            duration: 0.8,
            ease: "power2.out",
            delay: 0.5
        });
    </script>



</body>


<!-- Mirrored from prium.github.io/phoenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Sep 2024 13:37:21 GMT -->

</html>