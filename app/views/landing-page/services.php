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
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Check</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                </div>

                <!-- Tab content -->
                <div id="Check" class="tabcontent">
                    <h3>Checking Air Conditioner</h3>
                    <p>Ensure the efficiency and longevity of your air conditioner with our "checking air conditioner" service. Our team of experts will perform a comprehensive inspection of your AC unit to identify any potential problems and ensure it is functioning optimally.</p>
                    <p>Our inspection includes checking refrigerant levels, inspecting the condenser and evaporator coils, and testing the electrical components for proper operation. With our service, you can expect a detailed report of any issues and recommendations for repairs, if necessary.</p>
                    <p>Don't let a malfunctioning air conditioner impact your comfort, choose our "checking air conditioner" service for peace of mind and a healthy AC system.</p>
                </div>

                <!-- Looping Services -->
                <!-- <?php foreach ($data['services'] as $service) : ?>
                    <div class="checkbox">
                        <input type="checkbox" id="vehicle1" name="service_id[]" value="<?= $service['id'] ?>">
                        <label for="vehicle1"><?= $service['name'] . ' - Rp.' . $service['price'] ?></label><br>
                    </div>
                <?php endforeach; ?> -->

                <div id="Paris" class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p>
                </div>

                <div id="Tokyo" class="tabcontent">
                <h3>Tokyo</h3>
                <p>Tokyo is the capital of Japan.</p>
                </div>
            </div>
        </section>
    </main>
