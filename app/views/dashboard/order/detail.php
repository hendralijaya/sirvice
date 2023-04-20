        <?php 
        $subtotal = 0;
         ?>
        <!-- Section Start -->
        <section id="detail-order">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Tips & Tricks</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div class="breadcrumbs-and-order-status">
                            <div class="breadcrumbs">
                                <div class="breadcrumb">
                                    <a href="<?= BASEURL; ?>/dashboard/order">Order</a>
                                    <i class="material-icons-round">arrow_right</i>
                                </div>
                                <div class="breadcrumb">
                                    <p class="title">Detail Order #<?= $data['order']['id'] ?></p>
                                </div>
                            </div>

                            <div class="status-progress-info">
                                <div class="status scheduled">
                                    <i class="material-icons-round"><?= $data['order']['icon'] ?></i>
                                    <p><?= $data['order']['status'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="overall-detail-order">
                            <div class="technician-and-client-profile">
                                <div class="client-identity-and-address">
                                    <div class="client-identity">
                                        <h2 class="title">Client Identity & Address</h2>
                                        <div class="name-and-phone-number">
                                            <p class="name"><?= $data['user']['name'] ?></p>
                                            <p class="phone-number"><?= $data['user']['phone_number'] ?></p>
                                        </div>
                                    </div>

                                    <div class="client-address">
                                        <p class="title-address"><?= $data['address']['label_address'] ?></p>
                                        <p class="address"><?= $data['address']['street'] ?>, <?= $data['address']['sub_district'] ?>, <?= $data['address']['district'] ?>, <?= $data['address']['regency'] ?>, <?= $data['address']['province'] ?>, <?= $data['address']['post_code'] ?></p>
                                        <small class="note-address">“<?= $data['address']['additional_information'] ?>”</small>
                                    </div>
                                </div>

                                <div class="technician-identity">
                                    <h2 class="title">Technician Identity</h2>
                                    <div class="technician-profile">
                                        <div class="technician-image">
                                            <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="Technician Profile Picture">
                                        </div>
                                        <div class="technician-name-and-phone-number">
                                            <p class="technician-name"><?= $data['technician']['name'] ?></p>
                                            <p class="technician-phone-number"><?= $data['technician']['phone_number'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-details">
                                <div class="date-time-problem-and-ac-brand">
                                    <div class="scheduled-date-and-time">
                                        <p class="title">Scheduled Date and Time:</p>
                                        <p class="content"><?= "{$data['order']['scheduled_day']}, {$data['order']['scheduled_date']}" ?> - <?= $data['order']['scheduled_time'] ?> WIB</p>
                                    </div>

                                    <div class="problem-and-ac-brand">
                                        <div class="problem-details">
                                            <p class="title">Problem Details:</p>
                                            <p class="content"><?= $data['order']['description'] ?></p>
                                        </div>

                                        <div class="ac-brand">
                                            <p class="title">AC Brand:</p>
                                            <p class="content"><?= $data['order']['ac_brand'] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="invoice-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Service Selection</th>
                                                <th>Quantity</th>
                                                <th>Price per AC</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['services'] as $service) : ?>
                                                <tr class="invoice-detail">
                                                    <td><?= $service['name'] ?></td>
                                                    <td><?= $data['order']['number_unit'] ?></td>
                                                    <td>Rp. <?= $service['price'] ?>,-</td>
                                                    <td>Rp. <?= number_format($service['price'] * $data['order']['number_unit'], 3, '.', '') ?>,-</td>
                                                </tr>
                                                <?php $subtotal += $service['price'] * $data['order']['number_unit'] ?>
                                            <?php endforeach; ?>
                                            <tr class="sub-total">
                                                <td>Sub Total</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp. <?= number_format($subtotal, 3, '.', '') ?>,-</td>
                                            </tr>
                                            <tr class="tax">
                                                <td>Service Tax (2%)</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp <?= number_format($subtotal * 0.02, 3, '.', '') ?>,-</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="final-total">
                                                <td>Total</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp. <?= number_format($subtotal + $subtotal * 0.02, 3, '.', '') ?>,-</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <?php if($data['order']['status'] == "In Progress") : ?>
                            <div class="button-to-complete-order">
                                <form action="" method="post">
                                    <button type="button" id="myBtn" class="primary-button submit-form">Complete Order</button>
                                </form>
                            </div>
                            <?php endif; ?>
                            <div class="history-date-order">
                                <p>Ordered on <time datetime="2023-04-10"><?= $data['order']['order_date'] ?></time></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->

        <div id="myModal" class="modal">
            <div class="modal-content">
                <i class="material-icons-round close">close</i>
                <div class="modal-main-content">
                    <div class="icon-modal">
                        <i class="material-icons-round">info</i>
                    </div>
                    <div class="modal-text-content">
                        <div class="modal-title">
                            <h2 class="title">Complete Order?</h2>
                        </div>
                        <div class="modal-description">
                            <p>Please make sure that the order is done by our technician.</p>
                        </div>
                    </div>
                    <div class="modal-button">
                        <div class="secondary-button">
                            <button type="button" class="secondary-button">Wait a second...</button>
                        </div>
                        <div class="main-button">
                            <button type="submit" class="primary-button">Yes, They've done it</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>