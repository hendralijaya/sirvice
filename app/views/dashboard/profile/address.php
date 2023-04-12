        <!-- Section Start -->
        <section id="address-add-and-edit">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Address</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div class="breadcrumbs">
                            <div class="breadcrumb">
                                <a href="<?= BASEURL; ?>/dashboard/profile">Address List</a>
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="breadcrumb">
                                <p class="title">Add / Edit New Address</p>
                            </div>
                        </div>

                        <div class="overall-address-fields">
                            <form action="" class="address-form">
                                <div class="input-form">
                                    <div class="field field-border-bottom">
                                        <label for="label-address">Label Address</label>
                                        <input type="text" id="label-address" name="label-address" required>
                                    </div>

                                    <div class="field">
                                        <label for="country">Country</label>
                                        <select name="country" id="country"> 
                                            <option value="Value 1">Value 1</option>
                                            <option value="Value 2">Value 2</option>
                                            <option value="Value 3">Value 3</option>
                                        </select>
                                    </div>

                                    <div class="flex-field">
                                        <div class="field">
                                            <label for="province">Province</label>
                                            <select name="province" id="province"> 
                                                <option value="Value 1">Value 1</option>
                                                <option value="Value 2">Value 2</option>
                                                <option value="Value 3">Value 3</option>
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label for="regency">Regency</label>
                                            <select name="regency" id="regency"> 
                                                <option value="Value 1">Value 1</option>
                                                <option value="Value 2">Value 2</option>
                                                <option value="Value 3">Value 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex-field">
                                        <div class="field">
                                            <label for="province">Province</label>
                                            <select name="province" id="province"> 
                                                <option value="Value 1">Value 1</option>
                                                <option value="Value 2">Value 2</option>
                                                <option value="Value 3">Value 3</option>
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label for="regency">Regency</label>
                                            <select name="regency" id="regency"> 
                                                <option value="Value 1">Value 1</option>
                                                <option value="Value 2">Value 2</option>
                                                <option value="Value 3">Value 3</option>
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label for="zip-code">Zip / Postal Code</label>
                                            <input type="number" id="zip-code" name="zip-code" placeholder="Example: 15880" required>
                                        </div>
                                    </div>

                                    <div class="field field-border-bottom">
                                        <label for="street-address">Street Address</label>
                                        <input type="text" id="street-address" name="street-address" placeholder="Example: Jl. Scientia Boulevard Park No. 5" required>
                                    </div>

                                    <div class="field">
                                        <label for="street-address">Note for Technician</label>
                                        <input type="text" id="street-address" name="street-address" placeholder="Example: The one with the red gate" required>
                                    </div>

                                    <div class="button-stepper-form">
                                        <button class="next" type="submit">Add New Address</button>
                                        <button class="back">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->