        <!-- Section Start -->
        <section id="detail-tips">
            <div class="container">
                <div class="page-title order-title-with-button">
                    <h1 class="title-page">Tips & Tricks</h1>
                </div>

                <div class="main-content">
                    <div class="content">
                        <div class="breadcrumbs">
                            <div class="breadcrumb">
                                <a href="<?= BASEURL; ?>/dashboard/tips">Tips & Tricks</a>
                                <i class="material-icons-round">arrow_right</i>
                            </div>
                            <div class="breadcrumb">
                                <p class="title">"<?= $data['tips']['title'] ?>"</p>
                            </div>
                        </div>

                        <div class="tips-and-tricks-whole-content">
                            <div class="tips-and-tricks-header">
                                <h2 class="tips-and-tricks-title">"<?= $data['tips']['title'] ?>"</h2>
                                <time datetime="2020-01-01"><?= $data['tips']['date'] ?></time>
                            </div>
                            <div class="tips-and-tricks-body">
                                <img src="<?= BASEURL; ?>/svg/tips-and-tricks-cleaning.svg" alt="">
                                <div class="tips-and-tricks-paragraph">
                                    <p>
                                        <?= $data['tips']['description'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="button-to-back">
                                <a href="<?= BASEURL; ?>/dashboard/tips" class="button button-primary">Back to Tips & Tricks</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section End-->
        </main>

        <!-- Main End -->