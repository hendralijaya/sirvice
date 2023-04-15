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
                                <p class="title"><?= ($data['view'] == 'add') ? 'Add New Address' : (($data['view'] == 'update') ? 'Edit Address' : '') ?></p>
                            </div>
                        </div>

                        <div class="overall-address-fields">
                            <form action="<?= BASEURL ?>/dashboard/address" class="address-form" method="POST">
                                <div class="input-form">
                                    <div class="field field-border-bottom">
                                        <label for="label-address">Label Address</label>
                                        <input type="text" id="label-address" name="label_address" required value="<?php echo isset($_POST['label_address']) ? $_POST['label_address'] : (isset($data['address']['label_address']) ? $data['address']['label_address'] : ''); ?>">
                                    </div>

                                    <div class="field">
                                        <label for="country">Country</label>
                                        <select name="country" id="country"> 
                                            <option value="Indonesia" <?php echo ((isset($_POST['country']) && $_POST['country'] == 'Indonesia') || (isset($data['address']['country']) && $data['address']['country'] == 'Indonesia')) ? 'selected' : ''; ?>>Indonesia</option>
                                            <option value="India" <?php echo ((isset($_POST['country']) && $_POST['country'] == 'India') || (isset($data['address']['country']) && $data['address']['country'] == 'India')) ? 'selected' : ''; ?>>India</option>
                                            <option value="Zimbabwe" <?php echo ((isset($_POST['country']) && $_POST['country'] == 'Zimbabwe') || (isset($data['address']['country']) && $data['address']['country'] == 'Zimbabwe')) ? 'selected' : ''; ?>>Zimbabwe</option>
                                        </select>
                                    </div>

                                    <div class="flex-field">
                                        <div class="field">
                                            <label for="province">Province</label>
                                            <select name="province" id="province"> 
                                                <option value="Daerah Khusus Ibu Kota Jakarta" <?php echo ((isset($_POST['province']) && $_POST['province'] == 'Daerah Khusus Ibu Kota Jakarta') || (isset($data['address']['province']) && $data['address']['province'] == 'Daerah Khusus Ibu Kota Jakarta')) ? 'selected' : ''; ?>>Daerah Khusus Ibu Kota Jakarta</option>
                                                <option value="Bogor"<?php echo ((isset($_POST['province']) && $_POST['province'] == 'Bogor') || (isset($data['address']['province']) && $data['address']['province'] == 'Bogor')) ? 'selected' : ''; ?>>Bogor</option>
                                                <option value="Depok" <?php echo ((isset($_POST['province']) && $_POST['province'] == 'Depok') || (isset($data['address']['province']) && $data['address']['province'] == 'Depok')) ? 'selected' : ''; ?>>Depok</option>
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label for="regency">Regency</label>
                                            <select name="regency" id="regency"> 
                                                <option value="Kota Jakarta Barat" <?php echo ((isset($_POST['regency']) && $_POST['regency'] == 'Kota Jakarta Barat') || (isset($data['address']['regency']) && $data['address']['regency'] == 'Kota Jakarta Barat')) ? 'selected' : ''; ?>>Kota Jakarta Barat</option>
                                                <option value="Kota Jakarta Timur" <?php echo ((isset($_POST['regency']) && $_POST['regency'] == 'Kota Jakarta Timur') || (isset($data['address']['regency']) && $data['address']['regency'] == 'Kota Jakarta Timur')) ? 'selected' : ''; ?>>Kota Jakarta Timur</option>
                                                <option value="Kota Jakarta Utara" <?php echo ((isset($_POST['regency']) && $_POST['regency'] == 'Kota Jakarta Utara') || (isset($data['address']['regency']) && $data['address']['regency'] == 'Kota Jakarta Utara')) ? 'selected' : ''; ?>>Kota Jakarta Utara</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex-field">
                                        <div class="field">
                                            <label for="province">District</label>
                                            <select name="district" id="province"> 
                                                <option value="Kecamatan Gambir" <?php echo ((isset($_POST['district']) && $_POST['district'] == 'Kecamatan Gambir') || (isset($data['address']['district']) && $data['address']['district'] == 'Kecamatan Gambir')) ? 'selected' : ''; ?>>Kecamatan Gambir</option>
                                                <option value="Kecamatan Grogol Petamburan" <?php echo ((isset($_POST['district']) && $_POST['district'] == 'Kecamatan Grogol Petamburan') || (isset($data['address']['district']) && $data['address']['district'] == 'Kecamatan Grogol Petamburan')) ? 'selected' : ''; ?>>Kecamatan Grogol petamburan</option>
                                                <option value="Kecamatan Kebayoran Baru" <?php echo ((isset($_POST['district']) && $_POST['district'] == 'Kecamatan Kebayoran Baru') || (isset($data['address']['district']) && $data['address']['district'] == 'Kecamatan Kebayoran Baru')) ? 'selected' : ''; ?>>Kecamatan Kebayoran Baru</option>
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label for="regency">Sub District</label>
                                            <select name="sub_district" id="regency"> 
                                                <option value="Kelurahan Kebon Jeruk" <?php echo ((isset($_POST['sub_district']) && $_POST['sub_district'] == 'Kelurahan Kebon Jeruk') || (isset($data['address']['sub_district']) && $data['address']['sub_district'] == 'Kelurahan Kebon Jeruk')) ? 'selected' : ''; ?>>Kelurahan Kebon Jeruk</option>
                                                <option value="Kelurahan Petojo Utara" <?php echo ((isset($_POST['sub_district']) && $_POST['sub_district'] == 'Kelurahan Petojo Utara') || (isset($data['address']['sub_district']) && $data['address']['sub_district'] == 'Kelurahan Petojo Utara')) ? 'selected' : ''; ?>>Kelurahan Petojo Utara</option>
                                                <option value="Kelurahan Menteng" <?php echo ((isset($_POST['sub_district']) && $_POST['sub_district'] == 'Kelurahan Menteng') || (isset($data['address']['sub_district']) && $data['address']['sub_district'] == 'Kelurahan Menteng')) ? 'selected' : ''; ?>>Kelurahan Menteng</option>
                                            </select>
                                        </div>

                                        <div class="field">
                                            <label for="zip-code">Zip / Postal Code</label>
                                            <input type="number" id="zip-code" name="post_code" placeholder="Example: 15880" required value="<?php echo isset($_POST['post_code']) ? $_POST['post_code'] : (isset($data['address']['post_code']) ? $data['address']['post_code'] : ''); ?>">
                                        </div>
                                    </div>

                                    <div class="field field-border-bottom">
                                        <label for="street-address">Street Address</label>
                                        <input type="text" id="street-address" name="street" placeholder="Example: Jl. Scientia Boulevard Park No. 5" required value="<?php echo isset($_POST['street']) ? $_POST['street'] : (isset($data['address']['street']) ? $data['address']['street'] : ''); ?>">
                                    </div>

                                    <div class="field">
                                        <label for="street-address">Note for Technician</label>
                                        <input type="text" id="street-address" name="additional_information" placeholder="Example: The one with the red gate" required value="<?php echo isset($_POST['additional_information']) ? $_POST['additional_information'] : (isset($data['address']['additional_information']) ? $data['address']['additional_information'] : ''); ?>">
                                    </div>
                                    <input type="hidden" id="login" name="<?= ($data['view'] == 'add') ? 'add_address' : (($data['view'] == 'update') ? 'update_address' : '') ?>" value="valid">
                                    <div class="button-stepper-form">
                                        <button class="next" type="submit"><?= ($data['view'] == 'add') ? 'Add New Address' : (($data['view'] == 'update') ? 'Update Address' : '') ?></button>
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