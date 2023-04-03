        <!-- Section Start -->
        <section id="home">
            <div class="container">
                <div class="welcome-for-user">
                    <div class="welcome-content">
                        <h4 class="welcome">Welcome,</h4>
                        <h1 class="username"><?= $data['user']['name'] ?></h1>
                        <p class="quote">“We’ll do our best to keep you breathing the fresh air!”</p>
                    </div>
                    <div class="welcome-mascot-image">
                        <img src="<?= BASEURL; ?>/image/mascot-welcome-crop.png" alt="Mascot Is Welcoming User">
                    </div>
                </div>

                <div class="main-content">
                    <div class="upcoming-order">
                        <div class="upcoming-order-header">
                            <h5 class="title">Upcoming Order</h5>
                            <a href="#">View All</a>
                        </div>
                        <div class="upcoming-order-cards">
                            <?php foreach ($data['upcoming_order'] as $order) : ?>
                                <a class="upcoming-order-card" href="#">
                                    <div class="service-technician-status-info">
                                        <div class="status-progress-info">
                                            <p class="status in-progress"><?= $order['status'] ?></p>
                                        </div>
                                        <div class="service-technician-info">
                                            <div class="general-info">
                                                <p class="service-id-full">Order ID. <span><?= $order['id'] ?></span></p>
                                                <p class="technician-name"><?= $data['technician']['name'] ?></p>
                                            </div>
                                            <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="Technician Profile Picture">
                                        </div>
                                        <?php $services = $this->model('Services_model')->getServicesByOrder($order['id']); ?>
                                        <div class='service-types'>
                                            <?php foreach ($services as $service) : ?>
                                                <div class='service-type'>
                                                    <i class='material-icons-round'>home_repair_service</i>
                                                    <p class='service-type-name'><?= $service['name']; ?></p>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>
                                    <div class="date-time-location-info">
                                        <div class="date-info">
                                            <i class="material-icons-round">calendar_month</i>
                                            <time datetime="2023-04-12"><?= $order['scheduled_day'] ?>, <?= $order['scheduled_time'] ?></time>
                                        </div>
                                        <div class="time">
                                            <i class="material-icons-round">access_time</i>
                                            <time datetime="14:00"><?= $order['scheduled_time']; ?> WIB</time>
                                        </div>
                                        <div class="location">
                                            <i class="material-icons-round">location_on</i>
                                            <?php $address = $this->model('Address_model')->getAddressById($order['address_id']) ?>
                                            <address><?= $address['street'] ?>, <?= $address['sub_district'] ?>, <?= $address['district'] ?>, <?= $address['regency'] ?>, <?= $address['province'] ?>, <?= $address['country'] ?>, <?= $address['post_code']; ?></address>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                            <!-- <a class="upcoming-order-card" href="#">
                                    <div class="service-technician-status-info">
                                        <div class="status-progress-info">
                                            <p class="status scheduled">Scheduled</p>
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
                                </a> -->
                        </div>

                    </div>

                    <div class="total-summary">
                        <div class="total-order-card">
                            <h5 class="title">Total Order</h5>
                            <p class="total-order-number"><?= $data['total_order'] ?></p>
                            <i class="material-icons-round">list_alt</i>
                        </div>

                        <div class="appointment-scheduled-card">
                            <h5 class="title">Appointment Scheduled</h5>
                            <p class="appointment-scheduled-number"><?= $data['appointment_scheduled'] ?></p>
                            <i class="material-icons-round">access_time</i>
                        </div>

                        <div class="global-ratings-card">
                            <h5 class="title">Global Ratings</h5>
                            <p class="global-ratings-number"><?= $data['global_ratings'] ?>/5.0</p>
                            <i class="material-icons-round">star_border</i>
                        </div>
                    </div>

                    <div class="tips-and-tricks">
                        <div class="tips-and-tricks-header">
                            <h5 class="title">Tips & Tricks</h5>
                            <a href="#">View All</a>
                        </div>

                        <div class="tips-and-tricks-cards">
                            <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <h6 class="title">"<?= $data['tips']['title'] ?>”</h6>
                                    <p class="description"><?= $data['tips']['description'] ?></p>
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->