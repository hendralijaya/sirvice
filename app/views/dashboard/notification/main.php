        <!-- Section Start -->
        <section id="notification">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Notification</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div class="notification-all-messages">
                            <?php foreach ($data['notifications'] as $notification) : ?>
                            <a class="notification-message" href="<?php echo isset($notification['link']) ? $notification['link'] : '#'; ?>">
                                <div class="icon-notification-mark">
                                    <i class="material-icons-round <?= $notification['icon_class'] ?>"><?= $notification['icon'] ?></i>
                                </div>
                                <div class="notification-detail-message">
                                    <h5><?= $notification['title'] ?></h5>
                                    <p><?= $notification['description'] ?></p>
                                    <time datetime="2022-04-12"><?= $notification['date'] ?></time>
                                </div>
                            </a>
                            <?php endforeach; ?>
                            
<!-- 
                            <a class="notification-message" href="#">
                                <div class="icon-notification-mark">
                                    <i class="material-icons-round check">check_circle</i>
                                </div>
                                <div class="notification-detail-message">
                                    <h5>Order Successful!</h5>
                                    <p>Congratulations, your order has been successfully processed! You can now check the progress of your order, and we
                                        look forward to providing you with the best possible experience.</p>
                                    <time datetime="2022-04-10">Monday, 10 April 2022</time>
                                </div>
                            </a>

                            <a class="notification-message" href="#">
                                <div class="icon-notification-mark">
                                    <i class="material-icons-round info">info</i>
                                </div>
                                <div class="notification-detail-message">
                                    <h5>You have Incoming Order Today</h5>
                                    <p>Just a friendly reminder that you have an order scheduled for today! Our team is working hard to ensure that your
                                        order is processed and delivered on time. You can check the progress of your order at any time on our website, and
                                        we will keep you updated every step of the way.</p>
                                    <time datetime="2022-04-12">Wednesday, 12 April 2022</time>
                                </div>
                            </a>
                            <a class="notification-message" href="#">
                                <div class="icon-notification-mark">
                                    <i class="material-icons-round check">check_circle</i>
                                </div>
                                <div class="notification-detail-message">
                                    <h5>Order Successful!</h5>
                                    <p>Congratulations, your order has been successfully processed! You can now check the progress of your order, and we
                                        look forward to providing you with the best possible experience.</p>
                                    <time datetime="2022-04-10">Monday, 10 April 2022</time>
                                </div>
                            </a> -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->