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
                                    <p class="title">Detail Order #8194</p>
                                </div>
                            </div>

                            <div class="status-progress-info">
                                <div class="status scheduled">
                                    <i class="material-icons-round">schedule</i>
                                    <p>Scheduled</p>
                                </div>
                            </div>
                        </div>

                        <div class="overall-detail-order">
                            <div class="technician-and-client-profile">
                                <div class="client-identity-and-address">
                                    <div class="client-identity">
                                        <h2 class="title">Client Identity & Address</h2>
                                        <div class="name-and-phone-number">
                                            <p class="name">Patricia Ho</p>
                                            <p class="phone-number">(+62)81905197673</p>
                                        </div>
                                    </div>

                                    <div class="client-address">
                                        <p class="title-address">Pradita University</p>
                                        <p class="address">Jl. Gading Serpong Boulevard No. 1, Curug Sangereng, Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810</p>
                                        <small class="note-address">“Di gedung 1 , yang deket lapangan basket”</small>
                                    </div>
                                </div>

                                <div class="technician-identity">
                                    <h2 class="title">Technician Identity</h2>
                                    <div class="technician-profile">
                                        <div class="technician-image">
                                            <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="Technician Profile Picture">
                                        </div>
                                        <div class="technician-name-and-phone-number">
                                            <p class="technician-name">Aldy Kusumo</p>
                                            <p class="technician-phone-number">(+62)818765234</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-details">
                                <div class="date-time-problem-and-ac-brand">
                                    <div class="scheduled-date-and-time">
                                        <p class="title">Scheduled Date and Time:</p>
                                        <p class="content">Wednesday, 12 April 2023 - 14:00 WIB</p>
                                    </div>

                                    <div class="problem-and-ac-brand">
                                        <div class="problem-details">
                                            <p class="title">Problem Details:</p>
                                            <p class="content">AC tidak dingin dan berbau tak sedap.</p>
                                        </div>

                                        <div class="ac-brand">
                                            <p class="title">AC Brand:</p>
                                            <p class="content">LG, Daikin, Panasonic</p>
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
                                            <tr class="invoice-detail">
                                                <td>Cleaning Air Conditoner</td>
                                                <td>3</td>
                                                <td>Rp. 75.000,-</td>
                                                <td>Rp. 225.000,-</td>
                                            </tr>
                                            <tr class="sub-total">
                                                <td>Sub Total</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp. 200.000,-</td>
                                            </tr>
                                            <tr class="tax">
                                                <td>Service Tax (2%)</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp 4.500,-</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="final-total">
                                                <td>Total</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp. 600.000,-</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="button-to-complete-order">
                                <form action="" method="post">
                                    <button type="button" id="myBtn" class="primary-button submit-form">Complete Order</button>
                                </form>
                            </div>

                            <div class="history-date-order">
                                <p>Ordered on <time datetime="2023-04-10"> Monday, 10 April 2023</time></p>
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