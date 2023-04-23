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
                                <input type="search" placeholder="Search tips and tricks" id="tips-search-bar" name="tips">
                            </form>
                        </div>

                        <div class="tips-and-tricks-cards" id="tips-suggestion">
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
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->