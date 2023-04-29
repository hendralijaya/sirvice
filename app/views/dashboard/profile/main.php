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
                    
                    <div id="tab-content">
                    <?php Flasher::flash() ?>
                        <div class="tab-data tab-data-desc" data-tab="1">
                            <div class="overall-edit-profile">
                                <form action="<?= BASEURL; ?>/dashboard/update_profile" class="edit-profile-form" method="POST" enctype="multipart/form-data">
                                    <div class="profile-image">
                                        <img src="<?= PROFILE_IMAGE ?><?= $data['user']['profile_picture'] ?>" alt="User Profile Picture">
                                        <div class="edit-profile">
                                            <input type="hidden" name="old_profile_picture" value="<?= $data['user']['profile_picture'] ?>">
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
                                        <input type="hidden" value="update_profile" name="update_profile">
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
                                <form action="<?= BASEURL ?>/dashboard/change_password" class="change-password-form" method="post">
                                    <div class="input-form">
                                        <div class="field password-container">
                                            <label for="old_password">Current Password</label>
                                            <input type="password" id="old_password" name="old_password" placeholder="*******" required>
                                            <span toggle="#password" class="eye-icon"></span>
                                        </div>

                                        <div class="field password-container">
                                            <label for="password">New Password</label>
                                            <input type="password" id="password" name="password" placeholder="*******" required>
                                            <span toggle="#password" class="eye-icon"></span>
                                        </div>

                                        <div class="field password-container">
                                            <label for="repassword">Confirm New Password</label>
                                            <input type="password" id="repassword" name="repassword" placeholder="*******" required>
                                            <span toggle="#password" class="eye-icon"></span>
                                        </div>
                                            <input type="hidden" name='change_password' value="change_password">
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
                                    <input type="search" placeholder="Search Address" id="address-search-bar" name="address">
                                </form>

                                <a class="add-address" href="<?= BASEURL ?>/dashboard/address">+ Add New Address</a>
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
                                            <a href="<?= BASEURL ?>/dashboard/address/<?= $address['id'] ?>" class="edit-address">
                                                <i class="material-icons-round">edit</i>
                                                <span>Edit</span>
                                            </a>
                                            <form action="#">
                                                <button type="button" class="delete-address delete-address-modal-show" onclick="modalTriggered('myModal<?= $address['id'] ?>');modalClosedWindow('myModal<?= $address['id'] ?>')">
                                                    <i class="material-icons-round">delete</i>
                                                    <span>Delete</span>
                                                    <p class="address_id" hidden><?= $address['id'] ?></p>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <div id="myModal<?= $address['id'] ?>" class="modal danger">
                                        <div class="modal-content">
                                            <i class="material-icons-round close" onclick="modalClosedButton('myModal<?= $address['id'] ?>')">close</i>
                                            <div class="modal-main-content">
                                                <div class="modal-icon">
                                                    <i class="material-icons-round">warning</i>
                                                </div>
                                                <div class="modal-text-content">
                                                    <div class="modal-title">
                                                        <h2 class="title">Delete Address?</h2>
                                                    </div>
                                                    <div class="modal-description">
                                                        <p>Are you sure you want to delete this address? You can’t undo this action. </p>
                                                    </div>
                                                </div>
                                                <form action="<?= BASEURL ?>/dashboard/delete_address/<?= $address['id'] ?>" >
                                                    <div class="modal-button">
                                                        <div class="secondary-button">
                                                            <button type="button" class="secondary-button" id="cancel" onclick="modalClosedButton('myModal<?= $address['id'] ?>')">No, Keep It</button>
                                                        </div>
                                                        <div class="main-button">
                                                            <button type="submit" class="primary-button">Yes, Delete Address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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

        <!-- <div id="myModal" class="modal danger">
            <div class="modal-content"> 
                <i class="material-icons-round close">close</i>
                <div class="modal-main-content">
                    <div class="modal-icon">
                        <i class="material-icons-round">warning</i>
                    </div>
                    <div class="modal-text-content">
                        <div class="modal-title">
                            <h2 class="title">Delete Address?</h2>
                        </div>
                        <div class="modal-description">
                            <p>Are you sure you want to delete this address? You can’t undo this action. </p>
                        </div>
                    </div>
                    <form action="<?= BASEURL ?>/dashboard/delete_address/<?= $address['id'] ?>" >
                        <div class="modal-button">
                            <div class="secondary-button">
                                <button type="button" class="secondary-button" id="cancel">No, Keep It</button>
                            </div>
                            <div class="main-button">
                                <button type="submit" class="primary-button">Yes, Delete Address</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->