<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script defer src="script.js"></script>
    <title>Ketler Strong</title>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light py-3 sticky-top shadow-sm">

            <a class="navbar-brand animated-element fade-in-left" href="#">
                <img src="images/Ketler_Strong_Wordmark_With_Signature.png" alt="Ketler Strong logo">
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end pe-2" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right custom-mobile-link" href="#login.php">About <span class="sr-only"></span></a>
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right custom-mobile-link" href="contact.php">Contact <span class="sr-only"></span></a>
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right custom-mobile-link" href="#">Follow</a>
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right custom-mobile-link" href="https://nobad.store/">Ketler X NoBad</a>
                </div>
            </div>
        </nav>

        <!-- Mobile/Tablet Hero Section (Carousel) -->
        <section class="section hero-section">
            <div class="d-lg-none">
                <div id="heroCarousel"
                    class="carousel slide"
                    data-bs-ride="carousel"
                    data-bs-interval="4500"
                    data-bs-pause="hover"
                    data-bs-touch="true">

                    <div class="carousel-inner">
                    <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="ratio ratio-hero overflow-hidden">
                                <img src="images/Reese_Quote_Image.png"
                                    alt="Reese"
                                    class="d-block w-100 equal-img of-cover op-center">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="ratio ratio-hero overflow-hidden">
                                <img src="images/Reese_Photo_1_cropped.JPG"
                                    alt="Reese"
                                    class="d-block w-100 equal-img of-cover op-right">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0"
                                class="active" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                    </div>
                </div>
            </div>


            <!-- Destop Hero Section -->
            <div class="row flex-md-nowrap g-0 align-items-center d-none d-lg-flex">
                <!-- Left hero image -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_Photo_2_Cropped.JPG"
                            alt="reese_pic"
                            class="animated-element fade-in-up img-fluid equal-img of-cover op-center">
                    </div>
                </div>

                <!-- Right hero image -->
                <div class="col-12 col-md-6">
                    <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_Photo_1_cropped.JPG"
                            alt="Reese"
                            class="equal-img of-cover op-right animated-element fade-in-up">
                    </div>
                </div>
            </div>
        </section>

        <!-- STORY SECTION -->
        <section class="section">
            <div class="row g-3 g-md-4 align-items-center">
                <!-- Text -->
                <div class="col-12 col-md-12 col-lg-4 animated-element fade-in-up">
                    <h1 class="story-heading p-0 ps-lg-4 text-center">Reese's Story</h1>
                    <p class="lead text-dark text-center ps-3 pe-3 ps-md-4 pe-md-4">Reese Ketler's story is one of resillience, determination, and an unwavering commitment to pushing past
                        limits. His life was forever changed during a routine hockey game on Devember 19th, 2019, when he collided head-first into the boards shattering four vertabrae
                        and sustaining a spinal cord injury that left him paralyzed from the chest down, with limited hand function. Refusing to let the injury define him, Reese leaned
                        on his determination, his supportive family including his physiotherapist mother April Gobert, and a tight-knit hockey community that railed around him. Over the
                        months and years that followed, he made remarkable progress, regaining movement in his arms and hands, learning to drive again with adaptive controls, and playing
                        wheelchair rugby for team Canada. Reese documents his day-to-day life through social media where he currently has 200,000+ followers inspiring others daily. Reese's
                        journey is a powerful example of reilience, showing that with hard work and the right support, anything is possible.</p>
                </div>

                <!-- Story Image 1 (Shows on desktop + tablet) -->
                <div class="col-lg-4 d-none d-lg-block animated-element fade-in-right pe-md-5">
                    <div class="ratio ratio-hero overflow-hidden">
                    <img src="images/Reese_Leevi_Pic_Zoomed.JPG" alt="" class="paragraph-img of-cover op-center rounded">
                    </div>
                </div>

                <!-- Story Image 2 (Shows on Desktop only) -->
                <div class="col-lg-4 d-none d-lg-block animated-element fade-in-right pe-md-5">
                    <div class="ratio ratio-hero overflow-hidden">
                    <img src="images/Reese_Leevi_Pic_2_new.JPG" alt="" class="paragraph-img of-cover op-top rounded">
                    </div>
                </div>
            </div>
        </section>



        <!-- CONTACT SECTION -->
        <section class="section">
            <div class="row g-3 g-md-4 text-center align-items-center">
                <!-- Images: 2-up on phones, 25% each on md, 33% each on lg -->
                <div class="col-12 col-md-6 col-lg-4 ps-md-5 animated-element fade-in-left">
                    <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_300_Main.JPG" alt="Reese_300_Main_Picture" class="paragraph-img animated-element fade-in-left rounded">
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block animated-element fade-in-left">
                    <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_Rooftop_Pic.jpeg" alt="Reese_Rooftop_Picture" class="paragraph-img animated-element fade-in-up rounded">
                    </div>
                </div>

                <!-- Text: full width on phones, 50% on md, 33% on lg -->
                <div class="col-12 col-md-6 col-lg-4 text-center animated-element fade-in-right">
                    <a href="" class="contact-follow-shop p-0">Contact Reese</a>
                    <p class="lead text-center ps-md-4 pe-md-4">
                    Reese is always open to exciting partnership opportunities that align with his values and vision.
                    Whether you’re a brand, organization, or creator, he’s eager to explore collaborations that inspire,
                    motivate, and make an impact. Reach out today to start the conversation.
                    </p>
                    <a href="contact.php" class="contact-button" role="button">Contact</a>
                </div>
            </div>
        </section>

        <!-- FOLLOW SECTION -->
        <section class="section">
            <div class="px-3 px-md-4 px-lg-5">
                <div class="row g-3 g-md-3 gy-md-3 text-center align-items-center">
                    <div class="col-12 col-lg-4 text-center text-lg-start">
                        <h1 class="story-heading p-0 animated-element fade-in-left text-center">Follow Reese's Journey</h1>
                        <p class="lead ps-3 pe-3 ps-md-4 pe-md-4 text-center animated-element fade-in-left">
                            Reese shares his journey, training, and daily life with over 200,000 followers across social media. From motivational insights to behind-the-scenes moments,
                            his content inspires and connects with people worldwide. Follow along on Instagram, TikTok, and YouTube to stay up to date and be part of the community.
                        </p>

                        <!-- Social Media Icons -->
                        <div class="social-icons text-center">
                            <a class="social-icon animated-element fade-in-left" href="https://tiktok.com/@reeseketler" target="_blank">
                                <i class="bi bi-tiktok"></i>
                            </a>
                            <a class="social-icon animated-element fade-in-left" href="https://www.youtube.com/@Reese_Ketler" target="_blank">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a class="social-icon animated-element fade-in-left" href="https://instagram.com/reeseketler" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Follow Image 1 -->
                    <div class="col-6 col-md-6 col-lg-4">
                        <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_and_Mitch_Outside_Pic.png"
                            alt="Reese and Mitch"
                            class="paragraph-img of-cover op-center animated-element fade-in-up rounded">
                        </div>
                    </div>

                    <!-- Follow Image 2 -->
                    <div class="col-6 col-md-6 col-lg-4 follow-img-2">
                        <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_and_George_Pic.jpeg"
                            alt="Reese outside"
                            class="paragraph-img of-cover op-center animated-element fade-in-right rounded">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!-- COLLABORATION SECTION -->
        <section class="section">
            <div class="row g-3 g-md-4 text-center align-items-center">

                <!-- Image 1 (desktop only) -->
                <div class="col-lg-4 d-none d-lg-block animated-element fade-in-left">
                    <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_Hockey_Guys.JPG"
                            alt="Hockey group 1"
                            class="contact-img of-cover op-center rounded">
                    </div>
                </div>

                <!-- Image that shows on tablet (and mobile) -->
                <div class="col-12 col-md-6 col-lg-4 ps-md-5 animated-element fade-in-left">
                    <div class="ratio ratio-hero overflow-hidden">
                        <img src="images/Reese_Hockey_Guys_2.JPG"
                            alt="Hockey group 2"
                            class="contact-img of-cover op-top rounded">
                    </div>
                </div>

                <!-- Text -->
                <div class="col-12 col-md-6 col-lg-4 text-center animated-element fade-in-right">
                    <h1 class="story-heading p-0">NoBad Collaboration</h1>
                    <p class="lead ps-3 pe-3 ps-md-4 pe-md-4 text-center">
                        Inspired by Reese's drive and resilience throughout his journey, NoBad Apparel has
                        released a <strong>limited edition</strong> clothing collection in
                        collaboration with Reese called “Comeback” on December 6th, 2025. This collection symbolizes the idea
                        that every setback can become a comeback and that hard times shape you,
                        show your true potential, and truly refine you. 10% of the profits of the collection
                        are donated to the Straz Strong foundation,
                        a foundation dedicated to helping those with disabilities return to the sport they love.
                    </p>
                    <a href="https://nobad.store/collections/ketler-x-nobad" class="contact-button" role="button">Shop</a>
                </div>

            </div>
        </section>


        <div class="container">
            <h4 class="form-heading">Contact us</h4>
            <p class="form-instructions">Please fill out the form with your information and we will get back to you as soon as we can at the email address you provide.</p>
            <p class="form-disclaimer">team@ketlerstrong.com will carefully review each inquiry, please ensure your category selection is accurate to the reasoning of your request.</p>
            <form method="POST" action="sendmail.php" class="mt-5">
                <!-- First Name & Last Name Row -->
                <div class="row g-3 mb-5">
                    <div class="col">
                        <label for="fname" class="form-label mb-0">First Name</label>
                        <input type="text" class="form-control form-input-custom" placeholder="" aria-label="First name" name="fname" id="fname">
                    </div>

                    <div class="col">
                        <label for="lname" class="form-label mb-0">Last Name</label>
                        <input type="text" class="form-control form-input-custom" placeholder="" aria-label="Last name" name="lname" id="lname">
                    </div>
                </div>

                <!-- Email Address Row -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="email" class="form-label mb-0">Email Address</label>
                        <input type="email" class="form-control form-input-custom" id="email" placeholder="" name="email">
                    </div>
                </div>

                <!-- Reasoning Selection -->
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reason" id="reason_partnership" value="Partnership" required>
                            <label class="form-check-label" for="reason_partnership">
                                Collaboration
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reason" id="reason_speaking" value="Speaking">
                            <label class="form-check-label" for="reason_speaking">
                                Public Speaking
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reason" id="reason_media" value="Media">
                            <label class="form-check-label" for="reason_media">
                                Media
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="reason" id="reason_other" value="Other">
                            <label class="form-check-label" for="reason_other">
                                Other
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Subject -->
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <label for="subject" class="form-label mb-0">Subject</label>
                        <input
                            type="text"
                            class="form-control form-input-custom"
                            id="subject"
                            name="subject"
                            aria-label="Subject"
                        >
                    </div>
                </div>

                <!-- Message -->
                <div class="row mb-5">
                    <div class="col">
                        <label for="message" class="form-label">Message</label>
                        <textarea
                            class="form-control form-input-message"
                            id="message"
                            name="message"
                            rows="5"
                            aria-label="Message"
                        ></textarea>
                    </div>
                </div>

                <!-- Submit -->
                <div class="row mb-5">
                    <div class="col text-end">
                        <button type="submit" class="contact-button">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>