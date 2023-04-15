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
                        <form action="<?= BASEURL ?>/dashboard/neworder" method="post" enctype="multipart/form-data">
                            <div class="step-data step-data-desc" data-step="1">
                                <div class="input-form">
                                    <div class="field">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" value="<?= $data['user']['name'] ?>" required disabled>
                                    </div>

                                    <div class="field">
                                        <label for="address">Address</label>
                                        <select name="address" id="address">
                                            <?php foreach ($data['addresses'] as $address ) : ?>
                                            <option value=<?= $address['label_address'] ?>>
                                                <?= $address['label_address'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="field">
                                        <label for="Date">Date</label>
                                        <input type="date" id="date" name="date" value="<?= $data['date'] ?>">
                                    </div>

                                    <div class="field">
                                        <label for="time">Time</label>
                                        <input type="time" id="time" name="time" value="10:00">
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="next" id="nextBtn1" onclick="nextStep(1)">Next</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="step-data step-data-desc" data-step="2">
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
                                                <input type="checkbox" id="vehicle1" name="service_id" value="<?= $service['id'] ?>">
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
                                                <input type="radio" id="vehicle1" name="ac_brand" value="Daikin">
                                                <label for="vehicle1">Daikin</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle2" name="vehicle2" value="Panasonic">
                                                <label for="vehicle2">Panasonic</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle3" name="vehicle3" value="Sharp">
                                                <label for="vehicle3">Sharp</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle1" name="vehicle1" value="LG">
                                                <label for="vehicle1">LG</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle2" name="vehicle2" value="Mitsubishi Electric">
                                                <label for="vehicle2">Mitsubishi Electric</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle3" name="vehicle3" value="Samsung">
                                                <label for="vehicle3">Samsung</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle1" name="vehicle1" value="Toshiba">
                                                <label for="vehicle1">Toshiba</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle2" name="vehicle2" value="Polytron">
                                                <label for="vehicle2">Polytron</label><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="back" id="prevBtn2" onclick="prevStep(0)">Back</button>
                                        <button class="next" id="nextBtn2" onclick="nextStep(2)">Next</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="step-data step-data-desc" data-step="3">
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
                                    <div class="button-stepper-form">
                                        <button class="back" id="prevBtn3" onclick="prevStep(1)">Back</button>
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