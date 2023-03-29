        <!-- Section Start -->
        <section id="order">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Order</h1>
                    <a class="add-new-order" href="#">+ Add New Order</a>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div id="tabs">
                            <div class="tab" data-tab="1">In Progress</div>
                            <div class="tab" data-tab="2">Scheduled</div>
                            <div class="tab" data-tab="3">History</div>
                        </div>
                    </div>

                    <div id="tab-content">
                        <div class="tab-data tab-data-desc" data-tab="1">
                            <div class="upcoming-order-cards">
                                <a class="upcoming-order-card" href="#">
                                    <div class="service-technician-status-info">
                                        <div class="status-progress-info">
                                            <div class="status in-progress">
                                                <i class="material-icons-round">schedule</i>
                                                <p>In Progress</p>
                                            </div>
                                        </div>
                                        <div class="service-technician-info">
                                            <div class="general-info">
                                                <p class="service-id-full">Service ID. <span>8194</span></p>
                                                <p class="technician-name">Aldy Kusuma</p>
                                            </div>
                                            <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="Technician Profile Picture">
                                        </div>
                                        <div class="service-types">
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Cleaning AC</p>
                                            </div>
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Service AC</p>
                                            </div>
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Repair AC</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="date-time-location-info">
                                        <div class="date-info">
                                            <i class="material-icons-round">calendar_month</i>
                                            <time datetime="2023-04-12">Wednesday, 12 April 2023</time>
                                        </div>
                                        <div class="time">
                                            <i class="material-icons-round">access_time</i>
                                            <time datetime="14:00">14:00 WIB</time>
                                        </div>
                                        <div class="location">
                                            <i class="material-icons-round">location_on</i>
                                            <address>Jl. Kebon Jeruk Raya No. 1, RT. 1/RW. 1, Kebon Jeruk, Kec. Kby. Baru, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</address>
                                        </div>
                                    </div>

                                    <div class="order-date-time">
                                        <p>Ordered on <time datetime="10-04-2023">Monday, 10 April 2023</time></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="tab-data tab-data-desc" data-tab="2">
                            <div class="upcoming-order-cards">
                                <a class="upcoming-order-card" href="#">
                                    <div class="service-technician-status-info">
                                        <div class="status-progress-info">
                                            <div class="status scheduled">
                                                <i class="material-icons-round">schedule</i>
                                                <p>Scheduled</p>
                                            </div>
                                        </div>
                                        <div class="service-technician-info">
                                            <div class="general-info">
                                                <p class="service-id-full">Service ID. <span>8195</span></p>
                                                <p class="technician-name">Aldy Kusuma</p>
                                            </div>
                                            <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="Technician Profile Picture">
                                        </div>
                                        <div class="service-types">
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Cleaning AC</p>
                                            </div>
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Service AC</p>
                                            </div>
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Repair AC</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="date-time-location-info">
                                        <div class="date-info">
                                            <i class="material-icons-round">calendar_month</i>
                                            <time datetime="2023-04-12">Wednesday, 12 April 2023</time>
                                        </div>
                                        <div class="time">
                                            <i class="material-icons-round">access_time</i>
                                            <time datetime="14:00">14:00 WIB</time>
                                        </div>
                                        <div class="location">
                                            <i class="material-icons-round">location_on</i>
                                            <address>Jl. Kebon Jeruk Raya No. 1, RT. 1/RW. 1, Kebon Jeruk, Kec. Kby. Baru, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</address>
                                        </div>
                                    </div>

                                    <div class="order-date-time">
                                        <p>Ordered on <time datetime="10-04-2023">Monday, 10 April 2023</time></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="tab-data tab-data-desc" data-tab="3">
                            <div class="upcoming-order-cards">
                                <a class="upcoming-order-card" href="#">
                                    <div class="service-technician-status-info">
                                        <div class="status-progress-info">
                                            <div class="status done">
                                                <i class="material-icons-round">check</i>
                                                <p>Done</p>
                                            </div>
                                        </div>
                                        <div class="service-technician-info">
                                            <div class="general-info">
                                                <p class="service-id-full">Service ID. <span>8195</span></p>
                                                <p class="technician-name">Aldy Kusuma</p>
                                            </div>
                                            <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="Technician Profile Picture">
                                        </div>
                                        <div class="service-types">
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Cleaning AC</p>
                                            </div>
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Service AC</p>
                                            </div>
                                            <div class="service-type">
                                                <i class="material-icons-round">home_repair_service</i>
                                                <p class="service-type-name">Repair AC</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="date-time-location-info">
                                        <div class="date-info">
                                            <i class="material-icons-round">calendar_month</i>
                                            <time datetime="2023-04-12">Wednesday, 12 April 2023</time>
                                        </div>
                                        <div class="time">
                                            <i class="material-icons-round">access_time</i>
                                            <time datetime="14:00">14:00 WIB</time>
                                        </div>
                                        <div class="location">
                                            <i class="material-icons-round">location_on</i>
                                            <address>Jl. Kebon Jeruk Raya No. 1, RT. 1/RW. 1, Kebon Jeruk, Kec. Kby. Baru, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</address>
                                        </div>
                                    </div>

                                    <div class="order-date-time">
                                        <p>Ordered on <time datetime="10-04-2023">Monday, 10 April 2023</time></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->