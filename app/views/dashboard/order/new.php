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
                        <form action="" method="post">
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
                                        <input type="text" id="name" name="name" placeholder="Example: The temperature is not as what expected, It smells bad, etc." required>
                                    </div>

                                    <div class="field">
                                        <label for="address">Services</label>
                                        <small>Which services do you want to order from us?</small>
                                        <div class="checkboxes">
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Service 1</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2">Service 2</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3">Service 3</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Service 1</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2">Service 2</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3">Service 3</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Service 1</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2">Service 2</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3">Service 3</label><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label for="ac-unit">Number of AC Units</label>
                                        <small>How many AC that you want us to repair?</small>
                                        <input type="number" placeholder="Example: 3" id="ac-unit" name="ac-unit">
                                    </div>

                                    <div class="field">
                                        <label for="ac-brand">AC Brand</label>
                                        <small>What kind of brand is your AC?</small>
                                        <div class="checkboxes">
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle1" name="vehicle" value="Bike">
                                                <label for="vehicle1">Service 1</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle2" name="vehicle" value="Car">
                                                <label for="vehicle2">Service 2</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle3" name="vehicle" value="Boat">
                                                <label for="vehicle3">Service 3</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle4" name="vehicle" value="Bike">
                                                <label for="vehicle4">Service 1</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle5" name="vehicle" value="Car">
                                                <label for="vehicle5">Service 2</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle6" name="vehicle" value="Boat">
                                                <label for="vehicle6">Service 3</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle7" name="vehicle" value="Bike">
                                                <label for="vehicle7">Service 1</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle8" name="vehicle" value="Car">
                                                <label for="vehicle8">Service 2</label><br>
                                            </div>
                                            <div class="checkbox">
                                                <input type="radio" id="vehicle9" name="vehicle" value="Boat">
                                                <label for="vehicle9">Service 3</label><br>
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
                                            <input type="file" id="payment-file" name="payment-file" hidden required>
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