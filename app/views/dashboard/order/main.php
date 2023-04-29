        <!-- Section Start -->
        <section id="order">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Order</h1>
                    <a class="add-new-order" href="<?= BASEURL; ?>/dashboard/neworder">+ Add New Order</a>
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
                    <?php Flasher::flash(); ?>
                        <div class="tab-data tab-data-desc" data-tab="1">
                            <div class="upcoming-order-cards">
                                <?php foreach ($data['inprogress_orders'] as $order) : ?>
                                    <a class="upcoming-order-card" href="<?= BASEURL ?>/dashboard/order/<?= $order['id'] ?>">
                                        <div class="service-technician-status-info">
                                            <div class="status-progress-info">
                                                <div class="status in-progress">
                                                    <i class="material-icons-round">schedule</i>
                                                    <p>In Progress</p>
                                                </div>
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
                                                <time datetime="2023-04-12"><?= "{$order['scheduled_day']}, {$order['scheduled_date']}" ?></time>
                                            </div>
                                            <div class="time">
                                                <i class="material-icons-round">access_time</i>
                                                <time datetime="14:00"><?= $order['scheduled_time'] ?> WIB</time>
                                            </div>
                                            <div class="location">
                                                <i class="material-icons-round">location_on</i>
                                                <?php $address = $this->model('Address_model')->getAddressById($_SESSION['user_id'], $order['address_id']); ?>
                                                <address><?= $address['street'] ?>, <?= $address['sub_district'] ?>, <?= $address['district'] ?>, <?= $address['regency'] ?>, <?= $address['province'] ?>, <?= $address['post_code'] ?></address>
                                            </div>
                                        </div>

                                        <div class="order-date-time">
                                            <p>Ordered on <time datetime="10-04-2023"><?= $order['order_date'] ?></time></p>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="tab-data tab-data-desc" data-tab="2">
                            <div class="upcoming-order-cards">
                                <?php foreach ($data['scheduled_orders'] as $order) : ?>
                                    <a class="upcoming-order-card" href="<?= BASEURL ?>/dashboard/order/<?= $order['id'] ?>">
                                        <div class="service-technician-status-info">
                                            <div class="status-progress-info">
                                                <div class="status scheduled">
                                                    <i class="material-icons-round">schedule</i>
                                                    <p>Scheduled</p>
                                                </div>
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
                                                <time datetime="2023-04-12"><?= "{$order['scheduled_day']}, {$order['scheduled_date']}" ?></time>
                                            </div>
                                            <div class="time">
                                                <i class="material-icons-round">access_time</i>
                                                <time datetime="14:00"><?= $order['scheduled_time'] ?> WIB</time>
                                            </div>
                                            <div class="location">
                                                <i class="material-icons-round">location_on</i>
                                                <?php $address = $this->model('Address_model')->getAddressById( $_SESSION['user_id'], $order['address_id']); ?>
                                                <address><?= $address['street'] ?>, <?= $address['sub_district'] ?>, <?= $address['district'] ?>, <?= $address['regency'] ?>, <?= $address['province'] ?>, <?= $address['post_code'] ?></address>
                                            </div>
                                        </div>

                                        <div class="order-date-time">
                                            <p>Ordered on <time datetime="10-04-2023"><?= $order['order_date'] ?></time></p>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-data tab-data-desc" data-tab="3">
                            <div class="upcoming-order-cards">
                                <?php foreach ($data['history_orders'] as $order) : ?>
                                    <a class="upcoming-order-card" href="<?= BASEURL ?>/dashboard/order/<?= $order['id'] ?>">
                                        <div class="service-technician-status-info">
                                            <div class="status-progress-info">
                                                <div class="status done">
                                                    <i class="material-icons-round">check</i>
                                                    <p>Done</p>
                                                </div>
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
                                                <time datetime="2023-04-12"><?= "{$order['scheduled_day']}, {$order['scheduled_date']}" ?></time>
                                            </div>
                                            <div class="time">
                                                <i class="material-icons-round">access_time</i>
                                                <time datetime="14:00"><?= $order['scheduled_time'] ?> WIB</time>
                                            </div>
                                            <div class="location">
                                                <i class="material-icons-round">location_on</i>
                                                <?php $address = $this->model('Address_model')->getAddressById($_SESSION['user_id'], $order['address_id']); ?>
                                                <address><?= $address['street'] ?>, <?= $address['sub_district'] ?>, <?= $address['district'] ?>, <?= $address['regency'] ?>, <?= $address['province'] ?>, <?= $address['post_code'] ?></address>
                                            </div>
                                        </div>

                                        <div class="order-date-time">
                                            <p>Ordered on <time datetime="10-04-2023"><?= $order['order_date'] ?></time></p>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->