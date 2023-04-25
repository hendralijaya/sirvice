    <main>
        <section id="services">
            <div class="container">
                <div class="hero">
                    <div class="hero-details hero-text">
                        <p class="servs">Services</p>
                        <h1 class="hero-title">
                            All in one Solution for Air Conditioner
                        </h1>

                        <p class="hero-description">
                        Definitely we provide all of AC services
                        </p>
                    </div>

                    <div class="hero-details">
                        <div class="hero-image">
                            <img src="<?= BASEURL; ?>/image/service.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service">
            <div class="service-description">
                <div class="service-tittle">
                    <h2>Air Conditioner</h2>
                    <p>Of course we provide service for Air Conditoner</p>
                </div>

                <div class="service-tab">
                    <div class="content-icon">
                        <button id="button1" onclick= "openA()">
                            <svg width="60" height="40" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M76.0617 68.7492H72.2105L70.8455 67.433C73.8921 63.8935 76.1187 59.7245 77.366 55.2241C78.6133 50.7237 78.8505 46.0032 78.0605 41.4005C75.7692 27.848 64.4592 17.0255 50.8092 15.368C46.0103 14.7609 41.1362 15.2596 36.5597 16.826C31.9832 18.3924 27.8257 20.985 24.4054 24.4054C20.985 27.8257 18.3924 31.9832 16.826 36.5597C15.2596 41.1362 14.7609 46.0103 15.368 50.8092C17.0255 64.4592 27.848 75.7692 41.4005 78.0605C46.0032 78.8505 50.7237 78.6133 55.2241 77.366C59.7245 76.1187 63.8935 73.8921 67.433 70.8455L68.7492 72.2105V76.0617L89.468 96.7805C91.4667 98.7792 94.733 98.7792 96.7317 96.7805C98.7305 94.7817 98.7305 91.5155 96.7317 89.5167L76.0617 68.7492ZM46.8117 68.7492C34.673 68.7492 24.8742 58.9505 24.8742 46.8117C24.8742 34.673 34.673 24.8742 46.8117 24.8742C58.9505 24.8742 68.7492 34.673 68.7492 46.8117C68.7492 58.9505 58.9505 68.7492 46.8117 68.7492Z" fill="#B7E5FF"/>
                            </svg> 
                        </button>

                        <button id = "button2" onclick="openB()"> 
                            <svg width="60" height="40" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M89.5449 53.1342L67.2535 55.7604L54.1685 48.2058L67.2535 40.6512L89.5449 43.2775C89.6677 43.292 89.7899 43.2991 89.9107 43.2991C91.4575 43.2991 92.7939 42.1411 92.9793 40.567C93.1792 38.8702 91.9657 37.3325 90.2688 37.1326L76.2159 35.477L84.9704 30.4225C86.4502 29.5681 86.9572 27.676 86.1027 26.1963C85.2485 24.7165 83.3566 24.2094 81.8767 25.0638L73.1219 30.1182L78.7145 17.1202C79.3899 15.5506 78.665 13.7309 77.0954 13.0555C75.5264 12.3804 73.7062 13.105 73.0308 14.6746L64.1596 35.2927L51.3415 42.6933V27.5836L64.7613 9.59204C65.783 8.22235 65.5008 6.28398 64.1313 5.26248C62.7616 4.24098 60.8232 4.52298 59.8017 5.89267L51.3415 17.2349V8.16648C51.3415 6.45779 49.9563 5.07273 48.2478 5.07273C46.5393 5.07273 45.154 6.45779 45.154 8.16648V17.2351L36.6937 5.89267C35.672 4.52298 33.7334 4.24116 32.3641 5.26248C30.9944 6.28416 30.7124 8.22254 31.7339 9.59204L45.154 27.5838V43.0012L31.802 35.2923L22.9308 14.6746C22.2554 13.1052 20.4357 12.3804 18.8662 13.0555C17.2966 13.7309 16.5717 15.5508 17.2471 17.1202L22.8399 30.1182L14.9862 25.5839C13.5065 24.7299 11.6144 25.2367 10.76 26.7164C9.90573 28.1962 10.4125 30.0882 11.8925 30.9427L19.7461 35.477L5.69298 37.1326C3.9961 37.3325 2.7826 38.8702 2.98248 40.567C3.16792 42.1411 4.50423 43.2993 6.0511 43.2991C6.17185 43.2991 6.2941 43.292 6.41692 43.2775L28.7084 40.6512L41.7935 48.2056L28.7084 55.7604L6.4171 53.1342C4.71967 52.9345 3.18254 54.1477 2.98266 55.8447C2.78279 57.5416 3.99629 59.0793 5.69317 59.2792L19.7461 60.9348L11.8927 65.4689C10.4129 66.3232 9.90592 68.2152 10.7602 69.695C11.3332 70.6876 12.373 71.2424 13.4424 71.2424C13.9672 71.2424 14.4991 71.1085 14.9862 70.8273L22.84 66.293L17.2471 79.2912C16.5717 80.8608 17.2968 82.6805 18.8662 83.3559C19.2518 83.5225 19.6674 83.6085 20.0875 83.6086C21.2862 83.6086 22.4272 82.9079 22.931 81.737L31.8024 61.1189L45.1542 53.4102V68.5195L31.7341 86.5113C30.7126 87.881 30.9946 89.8194 32.3643 90.8409C32.8975 91.24 33.5457 91.4555 34.2117 91.4549C35.155 91.4549 36.0865 91.025 36.694 90.2107L45.1544 78.8682V88.9773C45.1544 90.6858 46.5395 92.071 48.2482 92.071C49.9569 92.071 51.3419 90.6858 51.3419 88.9773V78.8684L59.8021 90.2107C60.8236 91.5805 62.7624 91.8624 64.1317 90.8407C65.5014 89.8192 65.7835 87.8808 64.7617 86.5111L51.3419 68.5195V53.7181L64.16 61.1185L73.0314 81.7366C73.5352 82.9075 74.6759 83.6082 75.8746 83.6082C76.2947 83.6081 76.7103 83.5221 77.096 83.3555C78.6655 82.6801 79.3902 80.8604 78.715 79.2909L73.1223 66.2926L81.877 71.3472C82.3461 71.6191 82.8787 71.7623 83.4209 71.7624C84.49 71.7624 85.5301 71.2074 86.1031 70.2149C86.9575 68.7352 86.4505 66.8431 84.9708 65.9889L76.2164 60.9344L90.2692 59.2788C91.966 59.0789 93.1796 57.541 92.9797 55.8444C92.7794 54.148 91.243 52.9344 89.5449 53.1342Z" fill="#B7E5FF"/>
                                <path d="M98.5 100.834H101.833V94.1673H108.5V90.834H101.833V84.1673H98.5V90.834H91.8333V94.1673H98.5V100.834ZM100.167 109.167C97.8611 109.167 95.6944 108.73 93.6667 107.854C91.6389 106.98 89.875 105.792 88.375 104.292C86.875 102.792 85.6878 101.028 84.8133 99.0007C83.9378 96.9729 83.5 94.8062 83.5 92.5007C83.5 90.1951 83.9378 88.0284 84.8133 86.0007C85.6878 83.9729 86.875 82.209 88.375 80.709C89.875 79.209 91.6389 78.0212 93.6667 77.1457C95.6944 76.2712 97.8611 75.834 100.167 75.834C102.472 75.834 104.639 76.2712 106.667 77.1457C108.694 78.0212 110.458 79.209 111.958 80.709C113.458 82.209 114.646 83.9729 115.52 86.0007C116.396 88.0284 116.833 90.1951 116.833 92.5007C116.833 94.8062 116.396 96.9729 115.52 99.0007C114.646 101.028 113.458 102.792 111.958 104.292C110.458 105.792 108.694 106.98 106.667 107.854C104.639 108.73 102.472 109.167 100.167 109.167ZM100.167 105.834C103.889 105.834 107.042 104.542 109.625 101.959C112.208 99.3756 113.5 96.2229 113.5 92.5007C113.5 88.7784 112.208 85.6257 109.625 83.0423C107.042 80.459 103.889 79.1673 100.167 79.1673C96.4444 79.1673 93.2917 80.459 90.7083 83.0423C88.125 85.6257 86.8333 88.7784 86.8333 92.5007C86.8333 96.2229 88.125 99.3756 90.7083 101.959C93.2917 104.542 96.4444 105.834 100.167 105.834Z" fill="#B7E5FF"/>
                            </svg>
                        </button>
                    
                        <button id="button3" onclick="openC()">
                            <svg width="60" height="40" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M54.457 29.5463C61.1845 29.5463 67.2783 32.2952 71.7145 36.7132L59.332 49.1817H88.582V19.7286L78.5883 29.7917C75.4231 26.5958 71.6617 24.0614 67.5203 22.3344C63.379 20.6074 58.9395 19.7218 54.457 19.7286C37.2483 19.7286 23.1108 32.5407 20.722 49.1817H30.5695C31.6934 43.6378 34.6849 38.6552 39.0379 35.077C43.3908 31.4989 48.8378 29.5451 54.457 29.5463ZM81.952 74.4132C85.2747 69.8789 87.4197 64.5805 88.192 58.9994H78.3445C77.2207 64.5433 74.2291 69.5259 69.8762 73.104C65.5232 76.6821 60.0762 78.636 54.457 78.6348C47.7295 78.6348 41.6358 75.8858 37.1995 71.4679L49.582 58.9994H20.332V88.4525L30.3258 78.3894C33.491 81.5853 37.2524 84.1197 41.3937 85.8467C45.5351 87.5737 49.9746 88.4593 54.457 88.4525C62.0133 88.4525 68.9845 85.949 74.6395 81.7765L98.332 105.584L105.596 98.2702L81.952 74.4132Z" fill="#B7E5FF"/>
                            </svg>
                        </button>

                        <button id = "button4" onclick="openD()">
                            <svg width="60" height="40" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_47_575" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="6" width="106" height="97">
                                <path d="M63.875 55.3437V24.875C63.875 17.5625 68.75 10.25 78.5 10.25C88.25 10.25 93.125 17.5625 93.125 24.875V83.375" stroke="white" stroke-width="8.33333"/>
                                <path d="M80.3281 83.375H105.922L107.75 98H78.5L80.3281 83.375Z" fill="white" stroke="white" stroke-width="8.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.875 98H63.5971C63.7507 98 63.875 97.8781 63.875 97.7221V57.1841C63.875 39.3416 49.4109 24.875 31.5659 24.875C27.852 24.875 24.2902 26.3504 21.664 28.9765C19.0379 31.6027 17.5625 35.1645 17.5625 38.8784V71.1875" stroke="white" stroke-width="8.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24.875 98C32.9522 98 39.5 91.4522 39.5 83.375C39.5 75.2978 32.9522 68.75 24.875 68.75C16.7978 68.75 10.25 75.2978 10.25 83.375C10.25 91.4522 16.7978 98 24.875 98Z" fill="white" stroke="white" stroke-width="8.33333"/>
                                <path d="M34.625 24.875V71.1875" stroke="white" stroke-width="8.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </mask>
                                <g mask="url(#mask0_47_575)">
                                <path d="M0.5 0.5H117.5V117.5H0.5V0.5Z" fill="#B7E5FF"/>
                                </g>
                            </svg>
                        </button>

                        <button id="button5" onclick="openE()">
                            <svg width="60" height="40" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_47_598" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="5" y="15" width="106" height="112">
                                <path d="M53.0417 122.39C74.3967 122.39 91.7083 106.346 91.7083 86.5535C91.7083 66.7614 74.3967 50.7168 53.0417 50.7168C31.6867 50.7168 14.375 66.7614 14.375 86.5535C14.375 106.346 31.6867 122.39 53.0417 122.39Z" fill="white" stroke="white" stroke-width="8.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M62.7109 71.1953C65.9324 71.6228 72.3776 73.7551 74.7943 83.9941" stroke="black" stroke-width="8.33333" stroke-linecap="round"/>
                                <path d="M19.2096 40.4781C24.5484 40.4781 28.8763 35.8939 28.8763 30.239C28.8763 24.5842 24.5484 20 19.2096 20C13.8709 20 9.54297 24.5842 9.54297 30.239C9.54297 35.8939 13.8709 40.4781 19.2096 40.4781Z" fill="white" stroke="white" stroke-width="8.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M98.9609 50.7179C102.965 50.7179 106.211 47.2798 106.211 43.0387C106.211 38.7975 102.965 35.3594 98.9609 35.3594C94.9569 35.3594 91.7109 38.7975 91.7109 43.0387C91.7109 47.2798 94.9569 50.7179 98.9609 50.7179Z" fill="white" stroke="white" stroke-width="8.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                </mask>
                                <g mask="url(#mask0_47_598)">
                                <path d="M-0.125 9.75977H115.875V132.628H-0.125V9.75977Z" fill="#B7E5FF"/>
                                </g>
                            </svg>
                        </button>

                        <button id ="button6" onclick="openF()"> 
                            <svg width="60" height="40" viewBox="0 0 120 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M108.308 28.9429L97.3946 30.2286L90.9883 26.53L97.3946 22.8314L108.308 24.1172C108.368 24.1243 108.428 24.1278 108.487 24.1278C109.244 24.1278 109.899 23.5609 109.989 22.7902C110.087 21.9595 109.493 21.2066 108.662 21.1088L101.782 20.2982L106.068 17.8237C106.793 17.4053 107.041 16.479 106.623 15.7545C106.205 15.0301 105.278 14.7818 104.554 15.2001L100.268 17.6747L103.006 11.311C103.336 10.5426 102.981 9.65171 102.213 9.32106C101.445 8.9905 100.554 9.34529 100.223 10.1137L95.8798 20.208L89.6043 23.8312V16.4338L96.1744 7.62538C96.6746 6.95481 96.5364 6.00581 95.866 5.5057C95.1954 5.00559 94.2464 5.14365 93.7463 5.81423L89.6043 11.3672V6.92745C89.6043 6.09091 88.9261 5.4128 88.0897 5.4128C87.2532 5.4128 86.575 6.09091 86.575 6.92745V11.3673L82.4329 5.81423C81.9327 5.14365 80.9837 5.00568 80.3133 5.5057C79.6427 6.0059 79.5046 6.9549 80.0047 7.62538L86.575 16.4338V23.9819L80.0381 20.2078L75.6949 10.1137C75.3642 9.34538 74.4733 8.9905 73.7049 9.32106C72.9365 9.65171 72.5816 10.5427 72.9122 11.311L75.6504 17.6747L71.8054 15.4547C71.0809 15.0366 70.1546 15.2847 69.7362 16.0092C69.318 16.7337 69.5661 17.66 70.2907 18.0783L74.1357 20.2982L67.2555 21.1088C66.4248 21.2066 65.8307 21.9595 65.9285 22.7902C66.0193 23.5609 66.6735 24.1279 67.4309 24.1278C67.49 24.1278 67.5498 24.1243 67.61 24.1172L78.5235 22.8314L84.9297 26.5299L78.5235 30.2286L67.61 28.9429C66.779 28.8452 66.0265 29.4391 65.9286 30.2699C65.8308 31.1007 66.4249 31.8535 67.2556 31.9514L74.1357 32.7619L70.2908 34.9818C69.5663 35.4 69.3181 36.3263 69.7363 37.0508C70.0169 37.5368 70.526 37.8084 71.0495 37.8084C71.3064 37.8084 71.5669 37.7428 71.8054 37.6051L75.6504 35.3852L72.9122 41.7489C72.5816 42.5174 72.9366 43.4083 73.7049 43.7389C73.8937 43.8205 74.0972 43.8626 74.3029 43.8627C74.8897 43.8627 75.4483 43.5196 75.695 42.9463L80.0382 32.8521L86.5751 29.078V36.4753L80.0048 45.2838C79.5047 45.9543 79.6428 46.9033 80.3134 47.4035C80.5744 47.5989 80.8918 47.7044 81.2178 47.7041C81.6797 47.7041 82.1357 47.4936 82.4331 47.0949L86.5752 41.5419V46.4911C86.5752 47.3275 87.2533 48.0057 88.0898 48.0057C88.9264 48.0057 89.6045 47.3275 89.6045 46.4911V41.5419L93.7465 47.0949C94.2466 47.7656 95.1957 47.9036 95.8661 47.4034C96.5367 46.9033 96.6749 45.9543 96.1746 45.2837L89.6045 36.4753V29.2288L95.88 32.8519L100.223 42.9462C100.47 43.5194 101.028 43.8625 101.615 43.8625C101.821 43.8624 102.024 43.8203 102.213 43.7387C102.982 43.4081 103.336 42.5172 103.006 41.7488L100.268 35.385L104.554 37.8597C104.784 37.9928 105.044 38.0629 105.31 38.0629C105.833 38.0629 106.342 37.7912 106.623 37.3053C107.041 36.5809 106.793 35.6546 106.069 35.2363L101.783 32.7618L108.663 31.9512C109.493 31.8533 110.087 31.1004 109.99 30.2697C109.892 29.4393 109.139 28.8451 108.308 28.9429Z" fill="#B7E5FF"/>
                                <path d="M98.6682 81.7231C98.6682 81.7231 87.3365 94.1049 87.3365 101.694C87.3365 104.72 88.5304 107.623 90.6555 109.763C92.7806 111.903 95.6629 113.105 98.6682 113.105C101.674 113.105 104.556 111.903 106.681 109.763C108.806 107.623 110 104.72 110 101.694C110 94.1049 98.6682 81.7231 98.6682 81.7231ZM20.5358 73.1643L47.6753 45.8331L74.8149 73.1643M84.8435 67.1161L34.1905 16.1055L26.2016 24.1508L39.6864 37.7308L10.5072 67.1161C7.16428 70.3114 7.16428 75.8461 10.5072 79.2125L41.6695 110.595C43.3126 112.25 45.5223 113.105 47.6753 113.105C49.8284 113.105 52.0381 112.25 53.6812 110.595L84.8435 79.2125C88.1864 75.8461 88.1864 70.3114 84.8435 67.1161Z" fill="#B7E5FF"/>
                            </svg>
                        </button>

                        <button id ="button7" onclick="openG()">
                            <svg width="60" height="40" viewBox="0 0 110 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M121.656 25.2051C124.729 25.2051 127.615 25.7747 130.314 26.9141C133.014 28.0534 135.365 29.6257 137.367 31.6309C139.368 33.6361 140.974 35.9603 142.185 38.6035C143.395 41.2467 144 44.0723 144 47.0801V77.7051H135.062V47.0801C135.062 45.2572 134.713 43.5482 134.015 41.9531C133.317 40.3581 132.363 38.9681 131.152 37.7832C129.942 36.5983 128.522 35.6641 126.893 34.9805C125.264 34.2969 123.518 33.9551 121.656 33.9551H23.3438C21.4818 33.9551 19.7362 34.2969 18.1069 34.9805C16.4777 35.6641 15.0579 36.5983 13.8477 37.7832C12.6374 38.9681 11.6831 40.3581 10.9849 41.9531C10.2866 43.5482 9.9375 45.2572 9.9375 47.0801V68.9551H108.25V77.7051H1V47.0801C1 44.0723 1.58187 41.2467 2.74561 38.6035C3.90934 35.9603 5.49202 33.6589 7.49365 31.6992C9.49528 29.7396 11.8693 28.1673 14.6157 26.9824C17.3621 25.7975 20.2715 25.2051 23.3438 25.2051H121.656ZM137.506 86.6602L143.791 92.8125L121.656 114.482L99.522 92.8125L105.806 86.6602L117.188 97.7344V60.2051H126.125V97.7344L137.506 86.6602ZM126.125 51.4551H117.188V42.7051H126.125V51.4551ZM99.3125 42.7051H108.25V51.4551H99.3125V42.7051Z" fill="#B7E5FF"/>
                            </svg>
                        </button>

                        <button id="button8" onclick="openH()">
                            <svg width="60" height="40" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M61.3691 41.8706C62.4383 42.354 63.627 42.6213 64.8754 42.6213H76.2504V25.5588H81.9379V19.8713H72.437C71.3214 16.7184 69.3039 13.9629 66.6352 11.9472C63.9664 9.9315 60.7641 8.74455 57.4263 8.53389C54.0885 8.32323 50.7624 9.09814 47.8614 10.7623C44.9604 12.4265 42.6125 14.9065 41.1094 17.8941C39.6063 20.8818 39.0144 24.2452 39.4072 27.5665C39.8 30.8878 41.1602 34.0204 43.3188 36.575C45.4773 39.1296 48.3391 40.9934 51.5482 41.935C54.7574 42.8765 58.1725 42.8541 61.3691 41.8706ZM56.3442 14.1838C52.1354 14.1838 48.4585 16.4702 46.4906 19.8713H66.1978C65.1996 18.1414 63.7634 16.7048 62.0336 15.7064C60.3038 14.708 58.3415 14.1828 56.3442 14.1838ZM64.8754 36.9338C64.1212 36.9338 63.3979 36.6342 62.8646 36.1009C62.3313 35.5676 62.0317 34.8443 62.0317 34.0901V25.5588H70.5629V36.9338H64.8754Z" fill="#B7E5FF"/>
                                <path d="M19.375 48.3086C16.3582 48.3086 13.4649 49.507 11.3317 51.6403C9.19843 53.7735 8 56.6668 8 59.6836V76.7461C8 79.7629 9.19843 82.6562 11.3317 84.7894C13.4649 86.9227 16.3582 88.1211 19.375 88.1211H19.5286C20.2594 94.8039 23.5667 100.292 28.5034 104.188C34.0687 108.576 41.5904 110.871 49.6894 110.871C62.6341 110.871 74.6006 105.659 78.616 93.7887C79.6768 93.8775 80.7413 93.6669 81.6884 93.181C82.6355 92.695 83.4274 91.9531 83.9739 91.0395C84.5204 90.126 84.7997 89.0775 84.78 88.0131C84.7604 86.9488 84.4426 85.9113 83.8627 85.0186L94.6348 79.1548L91.9162 74.1611L78.107 81.6772L63.8768 76.3394H63.8712C63.3298 76.1352 62.8637 75.7707 62.5349 75.2946C62.2062 74.8185 62.0305 74.2534 62.0312 73.6748V65.3711C62.0312 63.8627 61.432 62.416 60.3654 61.3494C59.2988 60.2828 57.8522 59.6836 56.3438 59.6836C54.8353 59.6836 53.3887 60.2828 52.3221 61.3494C51.2555 62.416 50.6562 63.8627 50.6562 65.3711V79.5898C50.6561 80.7479 51.0095 81.8783 51.6691 82.8301C52.3287 83.7819 53.2631 84.5097 54.3474 84.9162L73.2186 91.9914C70.2696 100.599 61.38 105.184 49.6894 105.184C42.617 105.184 36.4062 103.173 32.0297 99.7207C28.2958 96.7775 25.8189 92.7365 25.2104 87.7258C27.6185 87.0684 29.7436 85.6374 31.2585 83.6534C32.7734 81.6694 33.5939 79.2423 33.5938 76.7461V59.6836C33.5938 56.6668 32.3953 53.7735 30.2621 51.6403C28.1289 49.507 25.2356 48.3086 22.2188 48.3086H26.4844C27.2386 48.3086 27.9619 48.009 28.4952 47.4757C29.0285 46.9424 29.3281 46.2191 29.3281 45.4648C29.3281 44.7106 29.0285 43.9873 28.4952 43.454C27.9619 42.9207 27.2386 42.6211 26.4844 42.6211H15.1094C14.3552 42.6211 13.6318 42.9207 13.0985 43.454C12.5652 43.9873 12.2656 44.7106 12.2656 45.4648C12.2656 46.2191 12.5652 46.9424 13.0985 47.4757C13.6318 48.009 14.3552 48.3086 15.1094 48.3086H19.375ZM109.943 64.0345L105.12 61.0202L95.2917 76.7461H110.375V71.0586H105.552L109.943 64.0345Z" fill="#B7E5FF"/>
                                <path d="M42.125 48.3086C40.6166 48.3086 39.1699 48.9078 38.1033 49.9744C37.0367 51.041 36.4375 52.4877 36.4375 53.9961V81.0117C36.4376 83.9037 37.2395 86.739 38.7541 89.2026C40.2687 91.6662 42.4367 93.6617 45.0172 94.9673C47.5977 96.2729 50.4897 96.8374 53.3717 96.5982C56.2538 96.359 59.0131 95.3255 61.3431 93.6124L52.3511 90.2397C50.1829 89.4269 48.3144 87.9718 46.9952 86.0688C45.676 84.1657 44.969 81.9054 44.9688 79.5898V65.3711C44.9688 62.3543 46.1672 59.461 48.3004 57.3278C50.4336 55.1945 53.3269 53.9961 56.3438 53.9961C59.3606 53.9961 62.2539 55.1945 64.3871 57.3278C66.5203 59.461 67.7188 62.3543 67.7188 65.3711V56.8398C67.7188 54.5772 66.8199 52.4073 65.22 50.8073C63.6201 49.2074 61.4501 48.3086 59.1875 48.3086H42.125Z" fill="#B7E5FF"/>
                            </svg>
                        </button>
                    </div>
                    
                    <div id= "content1" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Checking Air Conditioner</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 75.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content2" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Add Freon</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 25.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content3" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Replacement Air Conditioner</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 50.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content4" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Vacuum Air Conditioner</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 50.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content5" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Cleaning Air Conditioner</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 100.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content6" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Fill Freon</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 25.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content7" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Installation Air Conditioner</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 125.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>

                    <div id="content8" class="tab-content">
                        <div class="title">
                            <div class = "left-sec">
                                <h4>Flushing Air Conditioner</h4>
                            </div>
                            <div class = "right-sec">
                                <h4>Rp. 100.000</h4>
                            </div>
                        </div>
                        
                        <div class = "description">
                        <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. 
                                Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.<br><br>

                                Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. 
                                With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.<br><br>

                                Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
