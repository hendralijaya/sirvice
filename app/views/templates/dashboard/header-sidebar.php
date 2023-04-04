<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/reset.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-color.css">

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-loader.css">

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-sidebar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-dashboard.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-add-order.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-detail-tips.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Sidebar Start -->
    <nav class="sidebar-navigation open">
        <ul>
            <div class="logo">
                <svg width="1033" height="1033" viewBox="0 0 1033 1033" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M735.358 47.5911C734.027 53.8801 732.009 60.0085 729.241 65.6858L581.07 369.378L761.891 379.378C769.528 379.801 773.883 388.291 769.771 394.74L375.745 1012.65C420.491 1025.3 467.706 1032.07 516.5 1032.07C801.755 1032.07 1033 800.821 1033 515.566C1033 308.545 911.204 129.971 735.358 47.5911ZM485.172 0L315.851 443.301C302.265 478.813 314.333 524.728 337.593 526.014L436.67 531.493L319.131 964.129C316.338 973.346 314.974 982.508 314.766 991.184C129.753 912.612 0 729.242 0 515.566C0 240.829 214.505 16.1937 485.172 0Z" fill="url(#paint0_linear_306_806)" />
                    <defs>
                        <linearGradient id="paint0_linear_306_806" x1="-93.3623" y1="568.565" x2="989.638" y2="856.065" gradientUnits="userSpaceOnUse">
                            <stop offset="0.0558574" stop-color="#7CB5D5" />
                            <stop offset="0.464388" stop-color="#92CAE9" />
                            <stop offset="0.500492" stop-color="#A9E0FF" />
                            <stop offset="1" stop-color="#A9E0FF" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <li class="active">
                <a href="<?= BASEURL; ?>/dashboard/home"><i class="material-icons-round">home</i></a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/order"><i class="material-icons-round">list_alt</i></a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/profile"><i class="material-icons-round">person</i></a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/dashboard/tips"><i class="material-icons-round">tips_and_updates</i></a>
                <span class="tooltip">Tips</span>
            </li>
        </ul>

        <ul>
            <li>
                <i class="material-icons-round">dark_mode</i>
                <span class="tooltip">Dark</span>
            </li>
            <li>
                <a href="<?= BASEURL; ?>/auth/logout">
                    <i class="material-icons-round">logout</i>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </nav>
    <!-- Sidebar End -->


    <main>
        <!-- Header Start -->
        <header>
            <nav id="navbar-dashboard">
                <div class="header-left" onclick="changeImage()">
                    <div class="sidebar-toggle" id="hamburger">
                        <i class="material-icons-round">menu</i>
                    </div>

                    <div class="sidebar-toggle" id="hamburger-close">
                        <i class="material-icons-round">menu_open</i>
                    </div>
                </div>

                <div class="sneakpeek">
                    <div class="notification-sneakpeek">
                        <button class="notification-dropdown">
                            <i class="material-icons-round">
                                notifications
                            </i>
                        </button>

                        <div class="notification-dropdown-content">
                            <div class="notification-title-and-link">
                                <h4>Notification</h4>
                                <a href="#">View All</a>
                            </div>

                            <div class="notification-all-messages">
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

                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="profile-sneakpeek">
                        <button class="profile-dropdown">
                            <img src="<?= PROFILE_IMAGE ?><?= $data['user']['profile_picture'] ?>" alt="User Profile Picture">
                            <p class="fullname"><?= $data['user']['name'] ?></p>
                            <i class="material-icons-round">arrow_drop_down</i>
                            <!-- <i class="material-icons-round">arrow_drop_up</i> -->
                        </button>

                        <div class="profile-dropdown-content">
                            <div class="profile-general-info">
                                <img src="<?= PROFILE_IMAGE ?><?= $data['user']['profile_picture'] ?>" alt="User Profile Picture">
                                <div class="profile-info">
                                    <h6 class="fullname"><?= $data['user']['name'] ?></h6>
                                    <p class="email-address"><?= $data['user']['email'] ?></p>
                                </div>
                            </div>

                            <div class="profile-dropdown-menu">
                                <a href="<?= BASEURL; ?>/dashboard/profile">
                                    <i class="material-icons-round">person</i>
                                    <p>Profile</p>
                                </a>
                                <a href="<?= BASEURL; ?>/auth/logout">
                                    <i class="material-icons-round">logout</i>
                                    <p>Logout</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header End-->