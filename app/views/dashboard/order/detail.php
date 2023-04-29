        <?php 
        $subtotal = 0;
         ?>
        <!-- Section Start -->
        <section id="detail-order">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Detail Order</h1>
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
                                <div class="status">
                                    <i class="material-icons-round"><?= $data['order']['icon'] ?></i>
                                    <p class="status-order"><?= $data['order']['status'] ?></p>
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

                                <div class="technician-and-rating">
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
                                    <?php if($data['order']['status'] == "Done" && $data['review_status'] == 0) : ?>
                                    <div class="rating-score">
                                        <h2 class="title">Rating Score</h2>
                                        <div class="rating">
                                            <i class="material-icons-round">star</i>
                                            <p>-/5 Stars</p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['order']['status'] == "Done" && $data['review_status'] == 1) : ?>
                                    <?php $review = $this->model('Reviews_model')->getReview($_SESSION['user_id'], $data['order']['id']) ?>
                                        <div class="rating-score">
                                        <h2 class="title">Rating Score</h2>
                                        <div class="rating">
                                            <i class="material-icons-round">star</i>
                                            <p><?= $review['rating'] ?>/5 Stars</p>
                                        </div>
                                    </div>
                                    <?php endif; ?>
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
                            <div class="button-to-complete-order">
                                <?php if($data['order']['status'] == "In Progress") : ?>
                                <button type="button" id="myBtn" class="primary-button submit-form">Complete Order</button>
                                <?php endif; ?>

                                <?php if($data['order']['status'] == "Done" && $data['review_status'] == 0) : ?>
                                <button type="button" id="myBtnFeedback" class="primary-button submit-form">Give Feedback</button>
                                <?php endif; ?>
                                </div>
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
                    <div class="modal-icon">
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
                    <form action="<?= BASEURL ?>/dashboard/completeOrder" method="post">
                        <div class="modal-button">
                            <div class="secondary-button">
                                <input type="hidden" name="order_id" value="<?= $data['order']['id'] ?>">
                                <input type="hidden" name="complete_order" value="complete_order">
                                <button type="button" class="secondary-button" id="cancel">Wait a second...</button>
                            </div>
                            <div class="main-button">
                                <button type="submit" class="primary-button" id="submitForm">Yes, They've done it</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <div id="myModalFeedback" class="modal">
            <div class="modal-content">
                <i class="material-icons-round close">close</i>
                <div class="modal-main-content">
                    <div class="modal-text-content">
                        <div class="modal-title">
                            <h2 class="title">Give Feedback</h2>
                        </div>
                        <div class="modal-description">
                            <p>Rate our services from 1 to 5 stars</p>
                        </div>
                    </div>

                    <form action="<?= BASEURL ?>/dashboard/giveFeedback" method="post">
                        <div class="input-form">
                            <div class="feedback-stars">
                                <ul class="stars">
                                    <li><input type="radio" name="rating" id="star1" value="1"><label class="star" for="star1"><i class="material-icons-round">star</i></label></li>
                                    <li><input type="radio" name="rating" id="star2" value="2"><label class="star" for="star2"><i class="material-icons-round">star</i></label></li>
                                    <li><input type="radio" name="rating" id="star3" value="3"><label class="star" for="star3"><i class="material-icons-round">star</i></label></li>
                                    <li><input type="radio" name="rating" id="star4" value="4"><label class="star" for="star4"><i class="material-icons-round">star</i></label></li>
                                    <li><input type="radio" name="rating" id="star5" value="5"><label class="star" for="star5"><i class="material-icons-round">star</i></label></li>
                                </ul>
                            </div>

                            <div class="field">
                                <label for="name">Suggestions</label>
                                <small>Any suggestions to improve our service?</small>
                                <input type="text" id="name" name="description" value="" placeholder="Example: Sir-vice is the best" required>
                            </div>
                            <input type="hidden" name="order_id" value="<?= $data['order']['id'] ?>">
                            <input type="hidden" name="review" value="review">
                            <div class="modal-button">
                                <div class="main-button">
                                    <button type="submit" class="primary-button" id="submitFormFeedback">Submit Feedback</button>
                                </div>
                                <div class="secondary-button">
                                    <button type="button" class="secondary-button" id="cancelFeedback">I'll do the feedback later...</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>