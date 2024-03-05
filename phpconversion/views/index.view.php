<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>

<body>
    <!-- ------------------------main section------------------------- -->
    <main id="main-section" class="main-page">
        <!-- -------------------------------header-------------------------------- -->
        <header>
            <div id="navbar-container"></div>
        </header>
        <div class="video-container">
            <video autoplay muted loop>
                <source src="videos/pexels-tima-miroshnichenko-6388436 (2160p).mp4" type="video/mp4">ı
                Your browser does not support the video tag.
            </video>
            <div class="text-box">
                <h1>Control your mind <br> Conquer your body</h1>
                <div class="button-row">
                    <button class="btn btn-danger"><a href="#features">Learn
                            More</a> </button>
                    <button class="btn btn-danger"><a href="https://docs.google.com/forms/d/e/1FAIpQLSecfseJgZjQ-y3j8OuAW3Uc-oOiJMBjyyLuOYFLSfzDs71SZg/viewform" target="_blank">Tap
                            In</a> </button>
                </div>
            </div>
        </div>
    </main>
    <section id="about-section">
        <div class="about-container">
            <div class="about-col-1">
                <h1 class="sub-title">Who is
                    <span>M</span>eechie?
                </h1>
                <p class="bio">Meet Coach Meechie, also known as
                    Demetrius Pearson, your dedicated fitness guru
                    and
                    U.S. Soldier.

                    <br><br>
                    With seven years of experience in the
                    fitness realm, I'm passionate about empowering
                    individuals to embrace a healthier lifestyle. My
                    mission? To guide individuals of any gender on
                    their
                    journey to sculpt lean muscle, torch stubborn
                    fat,
                    and enhance overall functionality.
                    <br><br>

                    I take a holistic approach to fitness, blending
                    strength training, cardio, and sound nutrition
                    principles, all while fostering sustainable
                    habits.
                    <br><br>
                    My ultimate aim is to not only help you achieve
                    your
                    dream physique but also to instill a lasting
                    commitment to wellness. Join me in forging a
                    path to
                    lifelong health and vitality.
                </p>
            </div>
            <div class="about-col-2">
                <img src="images/IMG_0869.JPG" alt="meechie" width="600">
            </div>
        </div>
    </section>

    <!-- ----------------------- features ------------------------- -->
    <section id="features" class="features">
        <!-- <p>hey</p> -->

        <h1 class="mission"><span>My mission?</span></h1>
        <h5 class="mission-statement">
            To guide individuals of all genders on their journey
            to sculpt lean muscle, torch stubborn fat, and enhance overall
            functionality.</h5>
        <!-- <h2 class="features-header">Key Features</h2> -->
        <ul>
            <!-- <li>Comprehensive Workout Plan</li> -->
            <!-- The program offers an 8-week strength training plan that incorporates principles of hypertrophy and progressive overload.
                It follows a 4-day split, targeting specific muscle groups on each training day.
                The workouts aim to burn body fat while increasing lean muscle mass. -->
            <!-- <li>Balanced Approach</li> -->
            <!-- The program strikes a balance between strength training and cardiovascular exercises.
                Strength training is highlighted as the cornerstone for muscle development, while cardio sessions are strategically integrated 
                to enhance fat burning. -->
            <!-- <li>Coach's Guidance and Support</li> -->
            <!-- The coach, Meechie, provides guidance, answers questions, and offers support throughout the journey.
                Participants are encouraged to embrace the process, stay consistent, and celebrate small victories along the way. -->
            <!-- <li>Focused Nutrition Guide</li> -->
            <!-- The nutrition guide is tailored for fat loss while maintaining muscle mass.
                It introduces the "Golden Pyramid of Fat Loss" concept, emphasizing a calorie deficit for effective fat loss.
                Protein intake is highlighted as crucial for building and maintaining muscle during the fat loss process. -->
            <!-- <li>Holistic Approach to Health</li> -->
            <!-- The program emphasizes the importance of proper nutrition, warm-ups before workouts, and recommended rest between sets.
                Participants are advised on various factors contributing to success, including progressively increasing weights, staying 
                hydrated, managing liquid calorie intake, getting sufficient sleep, and incorporating creatine. -->
        </ul>
    </section>

    <section class="cta">
        <h2>Get Started Today!</h2>
        <p>Join our fitness program and start your journey towards a
            healthier lifestyle.</p>
        <a href="#purchase" class="button">Purchase Now</a>
    </section>
    <section id="youtube-section">
        <div class="youtube-video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yvvnDgha6GA?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="youtube-text">
            <h3 id="video-caption" name="video-caption">Check out the latest
                episode of my podcast here!</h3>
        </div>

    </section>
    <?php require "partials/footer.php"; ?>