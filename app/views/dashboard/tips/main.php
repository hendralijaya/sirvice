        <!-- Section Start -->
        <section id="tips">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Tips & Tricks</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div class="search-bar-and-add-address">
                            <form action="" class="search-bar">
                                <i class="material-icons-round">search</i>    
                                <input type="search" placeholder="Search tips and tricks" id="address" name="address">
                            </form>
                        </div>

                        <div class="tips-and-tricks-cards">
                            <?php foreach($data['tips'] as $tip) : ?>
                            <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <div class="date-title-description">
                                        <time datetime="2021-05-01"><?= $tip['date'] ?></time>
                                        <h6 class="title">"<?= $tip['title'] ?>"</h6>
                                        <p class="description"><?= $tip['description'] ?></p>
                                    </div>
                                    
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="<?= BASEURL; ?>/dashboard/tips/<?= $tip['id'] ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <time datetime="2021-05-01">May 1, 2021</time>
                                    <h6 class="title">"The importance of keeping your air filter clean”</h6>
                                    <p class="description">Your air conditioning unit is like the    superhero of your home - it saves you from the heat and humidity, keeps you comfortable and makes...</p>
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <time datetime="2021-05-01">May 1, 2021</time>
                                    <h6 class="title">"The importance of keeping your air filter clean”</h6>
                                    <p class="description">Your air conditioning unit is like the    superhero of your home - it saves you from the heat and humidity, keeps you comfortable and makes...</p>
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <time datetime="2021-05-01">May 1, 2021</time>
                                    <h6 class="title">"The importance of keeping your air filter clean”</h6>
                                    <p class="description">Your air conditioning unit is like the    superhero of your home - it saves you from the heat and humidity, keeps you comfortable and makes...</p>
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <time datetime="2021-05-01">May 1, 2021</time>
                                    <h6 class="title">"The importance of keeping your air filter clean”</h6>
                                    <p class="description">Your air conditioning unit is like the    superhero of your home - it saves you from the heat and humidity, keeps you comfortable and makes...</p>
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tips-and-tricks-card">
                                <div class="tips-and-tricks-vector">
                                    <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                </div>
                                <div class="tips-and-tricks-content">
                                    <time datetime="2021-05-01">May 1, 2021</time>
                                    <h6 class="title">"The importance of keeping your air filter clean”</h6>
                                    <p class="description">Your air conditioning unit is like the    superhero of your home - it saves you from the heat and humidity, keeps you comfortable and makes...</p>
                                    <div class="go-to-detail-content">
                                        <a class="read-more" href="#">Read More</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->