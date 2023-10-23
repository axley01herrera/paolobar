<?php echo view("layout/header"); ?>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative">

    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root">
        <div class="mb-lg-n15 position-relative z-index-2">
            <div class="container-fuid">
                <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                    <div class="card-body p-lg-20">
                        <div class="text-center mb-5 mb-lg-10">
                            <!-- Title -->
                            <h1 class="text-dark lh-base fw-bold fs-2x fs-lg-3x mb-15">Paulos Sport Bar & Tapas Playa Blanca Lanzarote</h1>
                        </div>
                        <!-- Tabs content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                                <div class="row g-10">
                                    <div class="col-lg-6">
                                        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="<?php echo base_url("public/assets/img/background.jpg"); ?>">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('<?php echo base_url("public/assets/img/background.jpg"); ?>')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row g-10 mb-10">
                                            <div class="col-lg-6">
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="<?php echo base_url("public/assets/img/01.jpg"); ?>">
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo base_url("public/assets/img/01.jpg"); ?>')"></div>
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="ki-duotone ki-eye fs-3x text-white">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="<?php echo base_url("public/assets/img/02.jpg"); ?>">
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo base_url("public/assets/img/02.jpg"); ?>')"></div>
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="ki-duotone ki-eye fs-3x text-white">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="<?php echo base_url("public/assets/img/03.jpg"); ?>">
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo base_url("public/assets/img/03.jpg"); ?>')"></div>
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 mb-n20 position-relative z-index-2">
            <div class="container-fluid">
                <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
                    <div class="card-body p-lg-20">
                        <div class="text-center mb-17">
                            <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">Que opinan nuestros clientes!</h3>
                            <div class="fs-5 text-muted fw-bold">Tu opinión nos interesa y nos ayuda
                                <br />reseñas tomadas de Goolgle y Tripadvisor
                            </div>
                        </div>
                        <div class="row g-lg-10 mb-10 mb-lg-20">
                            <div class="col-lg-4">
                                <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                    <div class="mb-7">
                                        <div class="rating mb-6">
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="fs-2 fw-bold text-dark mb-3">Personal muy amable y atento. La comida es muy barata (pizza, hamburguesa, sándwich) y está buena.
                                            Tienen un lorito por allí muy graciosa y entretenida.
                                            Recomendado si vas a comer o cenar cerca de las playas del papagayo
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                    <div class="mb-7">
                                        <div class="rating mb-6">
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="fs-2 fw-bold text-dark mb-3">
                                            Rica comida, platos abundantes, recomendable la pata de pulpo a la brasa, las croquetas (de cualquier sabor), el tartar de atún y el helado se Ferrero Rocher. El dueño muy amable, el servicio un poco lento, no mucho, pero más lento de lo habitual. No obstante el restaurante estaba lleno y las mesas eran grandes, eso afecta al tiempo de servir las comandas. Precio atractivo y muy importante la opción de medias raciones o racion entera. Opción muy recomendable si vas a Playa Blanca o a las playas de los papagayos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                                    <div class="mb-7">
                                        <div class="rating mb-6">
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                            <div class="rating-label me-2 checked">
                                                <i class="ki-duotone ki-star fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="fs-2 fw-bold text-dark mb-3">
                                            Excelentes mojitos y el loro nos mantuvo entretenidos y compartió nuestras nueces de cortesía en la mesa. Paulo está lleno de gran carácter charlando con todos mientras pasan por el bar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-0 mt-10">
            <div class="landing-dark-bg pt-20">
                <div class="container">
                    <div class="row py-10 py-lg-20">
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!-- Map -->
                            <div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2 leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" style="height: 486px; position: relative;" tabindex="0">
                                <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(60px, 0px, 0px);">
                                    <div class="leaflet-pane leaflet-tile-pane">
                                        <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                            <div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" src="https://a.tile.openstreetmap.org/18/77197/98549.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(15px, 143px, 0px); opacity: 1;"><img alt="" src="https://c.tile.openstreetmap.org/18/77197/98548.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(15px, -113px, 0px); opacity: 1;"><img alt="" src="https://c.tile.openstreetmap.org/18/77196/98549.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-241px, 143px, 0px); opacity: 1;"><img alt="" src="https://b.tile.openstreetmap.org/18/77198/98549.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(271px, 143px, 0px); opacity: 1;"><img alt="" src="https://b.tile.openstreetmap.org/18/77197/98550.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(15px, 399px, 0px); opacity: 1;"><img alt="" src="https://b.tile.openstreetmap.org/18/77196/98548.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-241px, -113px, 0px); opacity: 1;"><img alt="" src="https://a.tile.openstreetmap.org/18/77198/98548.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(271px, -113px, 0px); opacity: 1;"><img alt="" src="https://a.tile.openstreetmap.org/18/77196/98550.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-241px, 399px, 0px); opacity: 1;"><img alt="" src="https://c.tile.openstreetmap.org/18/77198/98550.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(271px, 399px, 0px); opacity: 1;"></div>
                                        </div>
                                    </div>
                                    <div class="leaflet-pane leaflet-overlay-pane"></div>
                                    <div class="leaflet-pane leaflet-shadow-pane"></div>
                                    <div class="leaflet-pane leaflet-marker-pane">
                                        <div style="background-position: -10px -10px; margin-left: -20px; margin-top: -37px; width: 12px; height: 12px; transform: translate3d(251px, 312px, 0px); z-index: 312;" class="leaflet-marker-icon leaflet-marker leaflet-zoom-animated leaflet-interactive" tabindex="0" role="button"><i class="ki-solid ki-geolocation text-primary fs-3x"></i></div>
                                    </div>
                                    <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                    <div class="leaflet-pane leaflet-popup-pane">
                                        <div class="leaflet-popup  leaflet-zoom-animated" style="opacity: 1; transform: translate3d(251px, 275px, 0px); bottom: -7px; left: -120px;">
                                            <div class="leaflet-popup-content-wrapper">
                                                <div class="leaflet-popup-content" style="width: 193px;">2700 N. Macdill Ave ampa, FL, 33607 US, Suite: 211</div>
                                            </div>
                                            <div class="leaflet-popup-tip-container">
                                                <div class="leaflet-popup-tip"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(19762600px, 25228600px, 0px) scale(131072);"></div>
                                </div>
                                <div class="leaflet-control-container">
                                    <div class="leaflet-top leaflet-left">
                                        <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in leaflet-disabled" href="#" title="Zoom in" role="button" aria-label="Zoom in" aria-disabled="true"><span aria-hidden="true">+</span></a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out" aria-disabled="false"><span aria-hidden="true">−</span></a></div>
                                    </div>
                                    <div class="leaflet-top leaflet-right"></div>
                                    <div class="leaflet-bottom leaflet-left"></div>
                                    <div class="leaflet-bottom leaflet-right">
                                        <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JavaScript library for interactive maps"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" class="leaflet-attribution-flag">
                                                    <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                                                    <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                                                    <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                                                </svg> Leaflet</a> <span aria-hidden="true">|</span> © <a href="https://osm.org/copyright">OpenStreetMap</a> contributors</div>
                                    </div>
                                </div>
                            </div>
                            <!--end Map -->
                        </div>
                        <div class="col-lg-6 ps-lg-16">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex fw-semibold flex-column me-20">

                                </div>
                                <div class="d-flex fw-semibold flex-column ms-lg-20 mt-10">
                                    <a target="_blank" href="https://www.facebook.com/keenthemes" class="mb-6">
                                        <img src="<?php echo base_url("public/assets/img/tripadvisor.svg"); ?>" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Tripadvisor</span>
                                    </a>
                                    <a target="_blank" href="https://www.google.com/maps/place/Paulo,s+Bar/@28.8603731,-13.8015265,17z/data=!3m1!4b1!4m6!3m5!1s0xc463199d7e659f9:0xd889d4c6afd833dd!8m2!3d28.8603731!4d-13.7989516!16s%2Fg%2F11sgbkfqzb?entry=ttu" class="mb-6">
                                        <img src="<?php echo base_url("public/assets/img/google-maps.svg")?>" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Goolgle Maps</span>
                                    </a>
                                    <a target="_blank" href="https://www.facebook.com/p/PauloS-bar-100069433546702/" class="mb-6">
                                        <img src="<?php echo base_url("public/assets/media/svg/brand-logos/facebook-4.svg") ?>" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <a target="_blank" href="https://www.instagram.com/keenthemes" class="mb-6">
                                        <img src="<?php echo base_url("public/") ?>assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="landing-dark-separator"></div>
                <div class="container">
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="#">&copy; 2023 Paulos Bar.</span>
                        </div>
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0"> </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <script>
        var hostUrl = "<?php echo base_url("public/assets/"); ?>";
    </script>
    <script src="<?php echo base_url("public/assets/plugins/global/plugins.bundle.js"); ?>"></script>
    <script src="<?php echo base_url("public/assets/js/scripts.bundle.js"); ?>"></script>
    <script src="<?php echo base_url("public/assets/plugins/custom/fslightbox/fslightbox.bundle.js"); ?>"></script>
    <script src="<?php echo base_url("public/assets/plugins/custom/typedjs/typedjs.bundle.js"); ?>"></script>
    <script src="<?php echo base_url("public/assets/js/custom/landing.js"); ?>"></script>

    <script>
        "use strict";

        var KTContactApply = function() {
            var t, e, o, n;

            return {
                init: function() {

                    (function(t) {
                        if (L) {
                            var e, o = L.map(t, {
                                center: [28.860, -13.798],
                                zoom: 30
                            });

                            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                                attribution: ''
                            }).addTo(o);

                            e = void 0 === L.esri.Geocoding ? L.esri.geocodeService() : L.esri.Geocoding.geocodeService();

                            var i = L.layerGroup().addTo(o);

                            var a = L.divIcon({
                                html: '<i class="ki-solid ki-geolocation text-primary fs-3x"></span>',
                                bgPos: [10, 10],
                                iconAnchor: [20, 37],
                                popupAnchor: [0, -37],
                                className: "leaflet-marker"
                            });

                            L.marker([28.860383357825352, -13.798953123083653], {
                                icon: a
                            }).addTo(i).bindPopup("El Pueblo, Las Coloradas, Yaiza, Las Palmas, 35580, Playa Blanca España", {
                                closeButton: false
                            }).openPopup();

                            o.on("click", function(t) {
                                e.reverse().latlng(t.latlng).run(function(t, e) {
                                    if (!t) {
                                        i.clearLayers();
                                        n = e.address.Match_addr;
                                        L.marker(e.latlng, {
                                            icon: a
                                        }).addTo(i).bindPopup(e.address.Match_addr, {
                                            closeButton: false
                                        }).openPopup();

                                        Swal.fire({
                                            html: 'Your selected - <b>"' + n + " - " + e.latlng + '"</b>.',
                                            icon: "success",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        }).then(function(t) {});
                                    }
                                });
                            });
                        }
                    })("kt_contact_map");
                }
            };
        }();

        KTUtil.onDOMContentLoaded(function() {
            KTContactApply.init();
        });
    </script>
</body>

</html>