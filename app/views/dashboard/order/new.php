        <!-- Section Start -->
        <section id="add-order">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Add New Order</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div id="steps">
                            <div class="step active" data-step="1">
                                <div class="count">1</div>
                                Personal Information
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="step" data-step="2">
                                <div class="count">2</div>
                                Service
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="step" data-step="3">
                                <div class="count">3</div>
                                Payment
                            </div>
                        </div>
                    </div>

                    <div id="step-content">
                        <form action="<?= BASEURL ?>/dashboard/neworder" method="post" enctype="multipart/form-data" id="order-form">
                            <div class="step-data step-data-desc" data-step="1">
                                <div class="input-form">
                                    <div class="field">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" value="<?= $data['user']['name'] ?>" required disabled>
                                    </div>

                                    <div class="field">
                                        <label for="address">Address</label>
                                        <select name="address_id" id="address">
                                            <?php foreach ($data['addresses'] as $address ) : ?>
                                            <option value=<?= $address['id'] ?>>
                                                <?= $address['label_address'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="field">
                                        <label for="Date">Date</label>
                                        <input type="date" id="date" name="scheduled_date" value="<?= $data['date'] ?>">
                                    </div>

                                    <div class="field">
                                        <label for="time">Time</label>
                                        <input type="time" id="time" name="scheduled_time" value="<?php echo isset($_POST["scheduled_time"]) ? $_POST["scheduled_time"] : '10:00'; ?>">
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="next" id="nextBtn1" onclick="nextStep(1)">Next</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="step-data step-data-desc" data-step="2">
                                <div class="input-form">
                                    <div class="field">
                                        <label for="ac_problem_details">AC Problem Details</label>
                                        <small>Please tell us what’s the problem with the AC. Make it as detail as possible so that we can save more time on diagnosing the problem :D</small>
                                        <input type="text" id="ac_problem_details" name="description" placeholder="Example: The temperature is not as expected, It smells bad, etc." required value="<?php echo isset($_POST["description"]) ? htmlspecialchars($_POST["description"]) : ''; ?>">
                                    </div>

                                    <div class="field">
                                        <label for="address">Services</label>
                                        <small>Which services do you want to order from us?</small>
                                        <div class="checkboxes">
                                        <?php $i = 1; ?>
                                        <?php foreach ($data['services'] as $service) : ?>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle<?= $i ?>" name="service_id[]" value="<?= $service['id'] ?>" <?php echo (isset($_POST['service_id']) && in_array($service['id'], $_POST['service_id'])) ? 'checked' : ''; ?>>
                                                <label for="vehicle<?= $i ?>"><?= $service['name'] . ' - Rp.' . $service['price'] ?></label><br>
                                            </div>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="ac-unit">Number of AC Units</label>
                                        <small>How many AC that you want us to repair?</small>
                                        <input type="number" placeholder="Example: 3" id="ac-unit" name="number_unit" value="<?php echo isset($_POST['number_unit']) ? $_POST['number_unit'] : ''; ?>">
                                    </div>

                                    <div class="field">
                                        <label for="ac-brand">AC Brand</label>
                                        <small>What kind of brand is your AC?</small>
                                        <div class="checkboxes">
                                            <div class="checkbox">
                                                <input type="radio" id="brand1" name="ac_brand" value="Daikin" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Daikin' ? 'checked' : ''; ?>>
                                                <label for="brand1">Daikin</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand2" name="ac_brand" value="Panasonic" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Panasonic' ? 'checked' : ''; ?>>
                                                <label for="brand1">Panasonic</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand3" name="ac_brand" value="Sharp" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Sharp' ? 'checked' : ''; ?>>
                                                <label for="brand1">Sharp</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand4" name="ac_brand" value="LG" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'LG' ? 'checked' : ''; ?>>
                                                <label for="brand1">LG</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand5" name="ac_brand" value="Mistubishi Electric" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Mistubishi Electric' ? 'checked' : ''; ?>>
                                                <label for="brand1">Mistubishi Electric</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand6" name="ac_brand" value="Samsung" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Samsung' ? 'checked' : ''; ?>>
                                                <label for="brand1">Samsung</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand7" name="ac_brand" value="Toshiba" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Toshiba' ? 'checked' : ''; ?>>
                                                <label for="brand1">Toshiba</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="brand7" name="ac_brand" value="Polytron" <?php echo isset($_POST['ac_brand']) && $_POST['ac_brand'] == 'Polytron' ? 'checked' : ''; ?>>
                                                <label for="brand1">Polytron</label><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="back" id="prevBtn2" onclick="prevStep(0)">Back</button>
                                        <button class="next" id="nextBtn2" onclick="nextStep(2); paymentDetails()">Next</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="step-data step-data-desc" data-step="3">
                                <div class="input-form">
                                    <div class="field">
                                        <label for="payment">Payment Details</label>
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
                                                    <!-- <tr class="invoice-detail">
                                                        <td><span id="invoice_services">Cleaning Air Conditoner</span></td>
                                                        <td><span id="invoice_number_unit">3</span></td>
                                                        <td>Rp. <span id="invoice_price_per-ac">75.000</span>,-</td>
                                                        <td>Rp. <span id="invoice_amount_price">225.000</span>,-</td>
                                                    </tr>
                                                    <tr class="invoice-detail">
                                                        <td><span id="invoice_services_2">Cleaning Air Conditoner</span></td>
                                                        <td><span id="invoice_number_unit_2">3</span></td>
                                                        <td>Rp. <span id="invoice_price_per-ac_2">75.000</span>,-</td>
                                                        <td>Rp. <span id="invoice_amount_price_2">225.000</span>,-</td>
                                                    </tr>
                                                    <tr class="invoice-detail">
                                                        <td><span id="invoice_services_3">Cleaning Air Conditoner</span></td>
                                                        <td><span id="invoice_number_unit_3">3</span></td>
                                                        <td>Rp. <span id="invoice_price_per-ac_3">75.000</span>,-</td>
                                                        <td>Rp. <span id="invoice_amount_price_3">225.000</span>,-</td>
                                                    </tr>
                                                    <tr class="sub-total">
                                                        <td>Sub Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Rp. <span id="invoice_sub_total">225.000</span>,-</td>
                                                    </tr>
                                                    <tr class="tax">
                                                        <td>Service Tax (2%)</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Rp. <span id="invoice_service_tax">4.500</span>,-</td>
                                                    </tr> -->
                                                </tbody>
                                                <!-- <tfoot>
                                                    <tr class="final-total">
                                                        <td>Total</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Rp. <span id="invoice_final_total">229.500</span>,-</td>
                                                    </tr>
                                                </tfoot> -->
                                            </table>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="name">Payment Proof</label>
                                        <small>
                                        Please proceed your payment to this account below and screenshot for the proof of the payment.
                                        <br>
                                        <br>
                                        <em>
                                            Account :
                                            <br>
                                            <span style="font-weight: 500;">(789******* - BCA - Joseline Kuniadi)</span>
                                        </em>
                                        </small>
                                    </div>
                                    
                                    <div class="payment-field">
                                        <div class="field">
                                            <i class="material-icons-round">description</i>
                                            <p>We only accept file with .png, .jpg, and .jpeg type</p>
                                            <label for="payment-file">Choose File</label>
                                            <input type="file" id="payment-file" name="payment" hidden required>
                                        </div>
                                        <div class="document-payment-proof">
                                            <div class="screenshot" id="screenshot-payment">
                                                <!-- This will be the one where the file of payment shown -->
                                                <img src="#" alt="">
                                            </div>
                                            <div class="message-none">
                                                <p>
                                                    No file choosen, yet!
                                                    <br>
                                                    You will see the preview of your screenshot here!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="order" id="login" value="order">
                                    <div class="button-stepper-form">
                                        <button class="back" id="prevBtn3" onclick="prevStep(1); clearServices()">Back</button>
                                        <button type="button" id="myBtn" class="primary-button submit submit-form">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <h2 class="title">Proceed the Order?</h2>
                        </div>
                        <div class="modal-description">
                            <p>If you request for this service to be provided, you will not be able to cancel the order.</p>
                        </div>
                    </div>
                    <div class="modal-button">
                        <div class="secondary-button">
                            <button type="button" class="secondary-button" id="cancel">No, Go Back</button>
                        </div>
                        <div class="main-button">
                            <button type="submit" class="primary-button" id="submitForm">Yes, Order This</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>