        <!-- Section Start -->
        <section id="add-order">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Add New Order</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div id="tabs">
                            <div class="tab" data-tab="1">
                                <div class="count">1</div>
                                Personal Information
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="tab" data-tab="2">
                                <div class="count">2</div>
                                Service
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="tab" data-tab="3">
                                <div class="count">3</div>
                                Payment
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="tab" data-tab="4">
                                <div class="count">4</div>
                                Done
                            </div>
                        </div>
                    </div>

                    <div id="tab-content">
                        <form action="<?= BASEURL ?>/dashboard/neworder" method="post" enctype="multipart/form-data">
                            <div class="tab-data tab-data-desc" data-tab="1">
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
                                        <input type="time" id="time" name="scheduled_time" value="10:00">
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="next">Next</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="tab-data tab-data-desc" data-tab="2">
                                <div class="input-form">
                                    <div class="field">
                                        <label for="name">AC Problem Details</label>
                                        <small>Please tell us what’s the problem with the AC. Make it as detail as possible so that we can save more time on diagnosing the problem :D</small>
                                        <input type="text" id="name" name="description" placeholder="Example: The temperature is not as what expected, It smells bad, etc." required>
                                    </div>

                                    <div class="field">
                                        <label for="address">Services</label>
                                        <small>Which services do you want to order from us?</small>
                                        <div class="checkboxes">
                                            <?php foreach ($data['services'] as $service) : ?>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="service_id[]" value="<?= $service['id'] ?>">
                                                <label for="vehicle1"><?= $service['name'] . ' - Rp.' . $service['price'] ?></label><br>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="ac-unit">Number of AC Units</label>
                                        <small>How many AC that you want us to repair?</small>
                                        <input type="number" placeholder="Example: 3" id="ac-unit" name="number_unit">
                                    </div>

                                    <div class="field">
                                        <label for="ac-brand">AC Brand</label>
                                        <small>What kind of brand is your AC?</small>
                                        <div class="checkboxes">
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="ac_brand" value="Daikin">
                                                <label for="vehicle1">Daikin</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle2" name="ac_brand" value="Panasonic">
                                                <label for="vehicle2">Panasonic</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle3" name="ac_brand" value="Sharp">
                                                <label for="vehicle3">Sharp</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="ac_brand" value="LG">
                                                <label for="vehicle1">LG</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle2" name="ac_brand" value="Mitsubishi Electric">
                                                <label for="vehicle2">Mitsubishi Electric</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle3" name="ac_brand" value="Samsung">
                                                <label for="vehicle3">Samsung</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="ac_brand" value="Toshiba">
                                                <label for="vehicle1">Toshiba</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle2" name="ac_brand" value="Polytron">
                                                <label for="vehicle2">Polytron</label><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="back">Back</button>
                                        <button class="next">Next</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="tab-data tab-data-desc" data-tab="3">
                                <div class="input-form">
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
                                            <div class="screenshot" hidden>
                                                <!-- This will be the one where the file of payment shown -->
                                                <img src="<?= BASEURL; ?>/image/technician-profile/technician-profile-1.png" alt="">
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
                                    <input type="hidden" id="login" name="order" value="order">
                                    <button type="submit">Submit button</button>
                                    <div class="button-stepper-form">
                                        <button class="back">Back</button>
                                        <button type="submit" class="submit">Submit</button>
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