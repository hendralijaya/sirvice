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

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-navbar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-footer.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-aboutus.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-services.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/notfound.css">

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
    <header id="header">
        <div class="container navigation-bar">
            <div class="logo">
                <svg width="710" height="153" viewBox="0 0 710 153" fill="none" xmlns="http://www.w3.org/2000/svg" class="sirvice-logo" aria-labelledby="alt-text-logo-sirvice">
                    <title id="alt-text-logo-sirvice">Logo Sir-Vice</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M242.529 126.497C236.892 126.497 231.828 125.517 227.335 123.556C222.925 121.514 219.453 118.737 216.921 115.224C214.389 111.63 213.082 107.505 213 102.849H224.885C225.293 106.851 226.927 110.241 229.786 113.019C232.727 115.714 236.974 117.062 242.529 117.062C247.838 117.062 252.004 115.755 255.026 113.141C258.13 110.445 259.682 107.015 259.682 102.849C259.682 99.5811 258.784 96.9263 256.987 94.8841C255.19 92.8419 252.943 91.2899 250.248 90.2279C247.552 89.166 243.917 88.0224 239.343 86.7971C233.707 85.3267 229.173 83.8564 225.743 82.386C222.394 80.9156 219.494 78.6284 217.043 75.5243C214.675 72.3385 213.49 68.0908 213.49 62.7811C213.49 58.125 214.675 53.9998 217.043 50.4056C219.412 46.8114 222.72 44.034 226.968 42.0735C231.297 40.1131 236.239 39.1328 241.793 39.1328C249.798 39.1328 256.333 41.1341 261.398 45.1368C266.544 49.1394 269.443 54.4491 270.097 61.0657H257.844C257.436 57.7982 255.721 54.9392 252.698 52.4886C249.676 49.9563 245.673 48.6902 240.691 48.6902C236.035 48.6902 232.236 49.9155 229.296 52.3661C226.355 54.735 224.885 58.0841 224.885 62.4135C224.885 65.5176 225.743 68.0499 227.458 70.0104C229.255 71.9709 231.42 73.4821 233.952 74.544C236.566 75.5243 240.201 76.6679 244.857 77.9749C250.493 79.5269 255.026 81.079 258.457 82.6311C261.888 84.1014 264.828 86.4295 267.279 89.6153C269.729 92.7194 270.955 96.9671 270.955 102.358C270.955 106.524 269.852 110.445 267.646 114.121C265.441 117.797 262.174 120.779 257.844 123.066C253.515 125.353 248.41 126.497 242.529 126.497ZM298.853 58.4926V125.639H287.703V58.4926H298.853ZM329.345 69.3978C331.306 65.5585 334.083 62.5769 337.677 60.4531C341.353 58.3292 345.805 57.2673 351.032 57.2673V68.7851H348.092C335.594 68.7851 329.345 75.5651 329.345 89.1252V125.639H318.196V58.4926H329.345V69.3978ZM410.804 76.0144V85.4493H361.916V76.0144H410.804ZM502.643 40.2356L470.419 125.639H457.554L425.33 40.2356H437.215L464.048 113.876L490.881 40.2356H502.643ZM526.359 58.4926V125.639H515.21V58.4926H526.359ZM541.537 91.9434C541.537 85 542.926 78.9551 545.703 73.8088C548.48 68.5809 552.319 64.5374 557.22 61.6784C562.203 58.8193 567.88 57.3898 574.251 57.3898C582.501 57.3898 589.281 59.3911 594.59 63.3938C599.982 67.3964 603.535 72.9511 605.25 80.0579H593.243C592.099 75.9735 589.853 72.7469 586.504 70.378C583.236 68.0091 579.152 66.8246 574.251 66.8246C567.88 66.8246 562.734 69.0302 558.813 73.4412C554.892 77.7706 552.932 83.9381 552.932 91.9434C552.932 100.03 554.892 106.279 558.813 110.69C562.734 115.102 567.88 117.307 574.251 117.307C579.152 117.307 583.236 116.163 586.504 113.876C589.771 111.589 592.017 108.322 593.243 104.074H605.25C603.453 110.936 599.859 116.449 594.468 120.615C589.077 124.7 582.338 126.742 574.251 126.742C567.88 126.742 562.203 125.312 557.22 122.453C552.319 119.594 548.48 115.551 545.703 110.323C542.926 105.095 541.537 98.9684 541.537 91.9434ZM681.73 89.4928C681.73 91.6166 681.608 93.863 681.363 96.2319H627.697C628.105 102.849 630.351 108.036 634.436 111.793C638.602 115.469 643.625 117.307 649.506 117.307C654.326 117.307 658.328 116.204 661.514 113.999C664.781 111.712 667.068 108.689 668.375 104.932H680.383C678.586 111.385 674.992 116.654 669.6 120.738C664.209 124.741 657.511 126.742 649.506 126.742C643.135 126.742 637.417 125.312 632.353 122.453C627.37 119.594 623.449 115.551 620.59 110.323C617.731 105.013 616.302 98.8867 616.302 91.9434C616.302 85 617.691 78.9143 620.468 73.6863C623.245 68.4584 627.125 64.4557 632.108 61.6784C637.172 58.8193 642.972 57.3898 649.506 57.3898C655.878 57.3898 661.514 58.7785 666.415 61.5558C671.316 64.3332 675.073 68.1725 677.687 73.0737C680.383 77.8932 681.73 83.3663 681.73 89.4928ZM670.213 87.1647C670.213 82.917 669.274 79.2818 667.395 76.2594C665.516 73.1553 662.943 70.8273 659.676 69.2752C656.49 67.6415 652.937 66.8246 649.016 66.8246C643.38 66.8246 638.561 68.6217 634.558 72.2159C630.637 75.8102 628.391 80.7931 627.819 87.1647H670.213Z"
                        fill="black" class="logo-text"/>
                    <mask id="mask0_306_832" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="504" y="37"
                        width="35" height="15">
                        <path
                            d="M510.917 44.3379C513.388 43.4705 513.521 40.2218 516.777 39.5363C519.382 38.9866 520.946 40.9169 521.335 42.9661C521.66 44.6815 520.684 49.1411 515.475 49.1411C508.964 49.1411 506.794 44.6815 506.359 42.9661C507.01 43.6524 508.964 45.0242 510.917 44.3379Z"
                            fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                        <path
                            d="M531.865 44.3379C529.394 43.4705 529.261 40.2218 526.005 39.5363C523.4 38.9866 521.836 40.9169 521.447 42.9661C521.121 44.6815 522.098 49.1411 527.308 49.1411C533.819 49.1411 535.989 44.6815 536.423 42.9661C535.772 43.6524 533.818 45.0242 531.865 44.3379Z"
                            fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                    </mask>
                    <g mask="url(#mask0_306_832)">
                        <path d="M503.352 24.8906H539.428V63.6918H503.352V24.8906Z" fill="black" class="mustache logo-text" />
                    </g>
                    <mask id="mask1_306_832" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="276" y="37"
                        width="35" height="15">
                        <path
                            d="M282.882 44.3379C285.353 43.4705 285.486 40.2218 288.742 39.5363C291.347 38.9866 292.911 40.9169 293.3 42.9661C293.625 44.6815 292.649 49.1411 287.44 49.1411C280.928 49.1411 278.759 44.6815 278.324 42.9661C278.975 43.6524 280.928 45.0242 282.882 44.3379Z"
                            fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                        <path
                            d="M303.83 44.3379C301.359 43.4705 301.225 40.2218 297.97 39.5363C295.365 38.9866 293.8 40.9169 293.412 42.9661C293.086 44.6815 294.063 49.1411 299.272 49.1411C305.783 49.1411 307.953 44.6815 308.388 42.9661C307.737 43.6524 305.783 45.0242 303.83 44.3379Z"
                            fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                    </mask>
                    <g mask="url(#mask1_306_832)">
                        <path d="M275.316 24.8906H311.393V63.6918H275.316V24.8906Z" fill="black" class="mustache logo-text" />
                    </g>
                    <g clip-path="url(#clip0_306_832)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M106.78 6.91061C106.587 7.82383 106.294 8.71374 105.892 9.53811L84.3761 53.6367L110.633 55.0888C111.742 55.1502 112.374 56.383 111.777 57.3195L54.5612 147.045C61.0587 148.882 67.9147 149.865 75 149.865C116.421 149.865 150 116.286 150 74.8644C150 44.8032 132.314 18.8728 106.78 6.91061ZM70.4509 0L45.8641 64.3709C43.8913 69.5275 45.6437 76.1948 49.0212 76.3815L63.408 77.1771L46.3404 139.999C45.9349 141.338 45.7368 142.668 45.7066 143.928C18.8412 132.519 0 105.892 0 74.8644C0 34.9703 31.1479 2.35146 70.4509 0Z"
                            fill="url(#paint0_linear_306_832)" />
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_306_832" x1="-13.557" y1="82.5603" x2="143.703" y2="124.308"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0.0558574" stop-color="#7CB5D5" />
                            <stop offset="0.464388" stop-color="#92CAE9" />
                            <stop offset="0.500492" stop-color="#A9E0FF" />
                            <stop offset="1" stop-color="#A9E0FF" />
                        </linearGradient>
                        <clipPath id="clip0_306_832">
                            <rect width="150" height="150" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <nav id="navbar" class="navbar">
                <div class="main-navbar">
                    <ul>
                        <li><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/public/landingpage/home') ? 'active' : null; ?>" href="<?= BASEURL; ?>/landingpage/home">Home</a></li>
                        <li><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/public/landingpage/aboutus') ? 'active' : null; ?>" href="<?= BASEURL; ?>/landingpage/aboutus">About Us</a></li>
                        <li><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/public/landingpage/services') ? 'active' : null; ?>" href="<?= BASEURL; ?>/landingpage/services">Services</a></li>
                        
                        <div class="login-and-register">
                            <li class="nav-link login-button"><a href="<?= BASEURL; ?>/auth/login">Log in</a></li>
                            <li class="nav-link register-button"><a href="<?= BASEURL; ?>/auth/register">Register Now!</a></li>
                        </div>
                    </ul>
                </div>
                
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
