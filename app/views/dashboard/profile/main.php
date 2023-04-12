        <!-- Section Start -->
        <section id="profile">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Profile</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div id="tabs">
                            <div class="tab" data-tab="1">User Profile</div>
                            <div class="tab" data-tab="2">Change Password</div>
                            <div class="tab" data-tab="3">Address List</div>
                        </div>
                    </div>
                    <?php Flasher::flash() ?>
                    <div id="tab-content">
                        <div class="tab-data tab-data-desc" data-tab="1">
                            <div class="overall-edit-profile">
                                <form action="<?= BASEURL; ?>/dashboard/update_profile" class="edit-profile-form" method="POST" enctype="multipart/form-data">
                                    <div class="profile-image">
                                        <img src="<?= PROFILE_IMAGE ?><?= $data['user']['profile_picture'] ?>" alt="User Profile Picture">
                                        <div class="edit-profile">
                                            <input type="file" id="profile_picture" name="profile_picture">
                                            <i class="material-icons-round">photo_camera</i>
                                        </div>
                                    </div>  

                                    <div class="input-form">
                                        <div class="field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" value="<?= $data['user']['name'] ?>" required>
                                        </div>
                                        
                                        <div class="field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" value="<?= $data['user']['email'] ?>" required disabled>
                                        </div>

                                        <div class="field">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="phone_number" id="phone_number" name="phone_number" value="<?= $data['user']['phone_number'] ?>" required disabled>
                                            <span toggle="#phone_number" class="flag-icon"></span>
                                        </div>

                                        <button type="submit" class="save-changes">Save Changes</button>
                                    </div>

                                </form>
                            
                                <div class="attention-tips-from-us">
                                    <img src="<?= BASEURL; ?>/image/mascot-list-crop.png" alt="Mascot Holding List">
                                    <div class="attention-tips">
                                        <h2>Attention</h2>
                                        <p>You can change your name if you want to, but your email and phone number are locked in. </p>
                                        <br>
                                        <p>Don’t forget to save your changes after that!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="danger-zone">
                                <div class="danger-zone-title">
                                    <h2>Danger Zone</h2>
                                    <p>Delete user account</p>
                                </div>
                                <p>By deleting your account, you will lose all your data and access. You can’t recover this account </p>
                                <a class="delete-account" href="<?= BASEURL ?>/dashboard/delete_profile">Delete My Account</a>
                            </div>
                        </div>

                        <div class="tab-data tab-data-desc" data-tab="2">
                            <div class="overall-change-password">
                                <form action="" class="change-password-form">
                                    <div class="input-form">
                                        <div class="field password-container">
                                            <label for="password">Current Password</label>
                                            <input type="password" id="password" name="password" placeholder="*******" required>
                                            <span toggle="#password" class="eye-icon"></span>
                                        </div>

                                        <div class="field password-container">
                                            <label for="password">New Password</label>
                                            <input type="password" id="password" name="password" placeholder="*******" required>
                                            <span toggle="#password" class="eye-icon"></span>
                                        </div>

                                        <div class="field password-container">
                                            <label for="password">Confirm New Password</label>
                                            <input type="password" id="password" name="password" placeholder="*******" required>
                                            <span toggle="#password" class="eye-icon"></span>
                                        </div>

                                        <button type="submit" class="save-changes">Save Changes</button>
                                    </div>

                                </form>

                                <div class="attention-tips-from-us">
                                    <img src="<?= BASEURL; ?>/image/mascot-list-crop.png" alt="Mascot Holding List">
                                    <div class="attention-tips">
                                        <h2>Tips from us</h2>
                                        <p>For security reasons, we recommend changing your password every three months.</p>
                                        <br>
                                        <p>It's an easy way to help protect your account and keep your information safe.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-data tab-data-desc" data-tab="3">
                            <div class="search-bar-and-add-address">
                                <form action="" class="search-bar">
                                    <i class="material-icons-round">search</i>    
                                    <input type="search" placeholder="Search Address" id="address" name="address">
                                </form>

                                <a class="add-address" href="#">+ Add New Address</a>
                            </div>

                            <div class="address-cards" id="address-suggestion">
                                <?php foreach ($data['addresses'] as $address) : ?>
                                    <div class="address-card">
                                        <div class="address-content">
                                            <h3 class="title-address"><?= $address['label_address'] ?></h3>
                                            <p class="address"><?= $address['street'] ?>, <?= $address['sub_district'] ?>, <?= $address['district'] ?>, <?= $address['regency'] ?>, <?= $address['province'] ?>, <?= $address['post_code'] ?></p>
                                            <small class="note-address">“<?= $address['additional_information'] ?>”</small>
                                        </div>
                                        <div class="button-edit-and-delete">
                                            <a href="#" class="edit-address">
                                                <i class="material-icons-round">edit</i>
                                                <span>Edit</span>
                                            </a>
                                            <form action="#">
                                                <a href="#" class="delete-address">
                                                    <i class="material-icons-round">delete</i>
                                                    <span>Delete</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
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