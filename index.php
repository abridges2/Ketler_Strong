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
        <link rel="stylesheet" href="style.css">
        <script defer src="script.js"></script>
    <title>Ketler Strong</title>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light py-3 sticky-top shadow-sm">
            <a class="navbar-brand animated-element fade-in-left" href="#">Ketler Strong</a>
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
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="#login.php">Log In <span class="sr-only"></span></a>
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="contact.php">Contact <span class="sr-only"></span></a>
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="#">Follow</a>
                    <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="https://nobad.store/">Shop</a>
                </div>
            </div>
        </nav>

        <div class="row g-0 align-items-center mb-9">
            <!-- Left hero image -->
            <div class="col-12 col-md-6">
                <div class="ratio ratio-4x3 ratio-hero overflow-hidden">
                    <img src="images/Reese_Photo_2_Cropped.JPG"
                        alt="reese_pic"
                        class="animated-element fade-in-up img-fluid equal-img of-cover op-center">
                </div>
            </div>

            <!-- Right hero image -->
            <div class="col-12 col-md-6">
                <div class="ratio ratio-4x3 ratio-hero overflow-hidden">
                    <img src="images/Reese_Photo_1_cropped.JPG"
                        alt="Reese"
                        class="equal-img of-cover op-right animated-element fade-in-up">
                </div>
            </div>
        </div>

        <!-- STORY SECTION -->
        <div class="row g-3 g-md-4 my-5 align-items-center mb-9">
            <div class="col-12 col-lg-4 text-center text-lg-start animated-element fade-in-left">
                <h1 class="story-heading p-0 ps-lg-4 text-center">Reese's Story</h1>
                <p class="lead text-dark text-center ps-3 pe-3 ps-md-4 pe-md-4">Reese Ketler's story is one of resillience, determination, and an unwavering commitment to pushing past
                     limits. His life was forever changed during a routine hockey game on Devember 19th, 2019, when he collided head-first into the boards shattering four vertabrae
                     and sustaining a spinal cord injury that left him paralyzed from the chest down, with limited hand function. Refusing to let the injury define him, Reese leaned
                     on his determination, his supportive family including his physiotherapist mother April Gobert, and a tight-knit hockey community that railed around him. Over the
                     months and years that followed, he made remarkable progress, regaining movement in his arms and hands, learning to drive again with adaptive controls, and playing
                     wheelchair rugby for team Canada. Reese documents his day-to-day life through social media where he currently has 200,000+ followers inspiring others daily. Reese's
                     journey is a powerful example of reilience, showing that with hard work and the right support, anything is possible.</p>
            </div>

            <div class="col-6 col-md-6 col-lg-4 animated-element fade-in-right">
                <div class="ratio ratio-4x3 overflow-hidden">
                <img src="images/Reese_Leevi_Pic.JPG" alt="" class="paragraph-img of-cover op-center rounded">
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-4 animated-element fade-in-right pe-md-5">
                <div class="ratio ratio-4x3 overflow-hidden">
                <img src="images/Reese_Leevi_Pic_2_new.JPG" alt="" class="paragraph-img of-cover op-top rounded">
                </div>
            </div>
        </div>


        <!-- CONTACT SECTION -->
        <div class="row g-3 g-md-4 text-center mb-9 align-items-center">
            <!-- Images: 2-up on phones, 25% each on md, 33% each on lg -->
            <div class="col-6 col-md-3 col-lg-4 ps-md-5 animated-element fade-in-left">
                <div class="ratio ratio-4x3 overflow-hidden">
                <img src="images/Reese_300_Main.JPG" alt="Reese_300_Main_Picture" class="paragraph-img animated-element fade-in-left rounded">
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-4 animated-element fade-in-left">
                <div class="ratio ratio-4x3 overflow-hidden">
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

        <!-- FOLLOW SECTION -->
        <div class="row g-3 g-md-4 text-center mb-9 align-items-center">
            <div class="col-12 col-lg-4 text-center text-lg-start">
                <h1 class="story-heading p-0 animated-element fade-in-left text-center">Follow Reese</h1>
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
                <div class="ratio ratio-4x3 overflow-hidden">
                <img src="images/Reese_and_Mitch_Outside_Pic.png"
                    alt="Reese and Mitch"
                    class="paragraph-img of-cover op-center animated-element fade-in-up rounded">
                </div>
            </div>

            <!-- Follow Image 2 -->
            <div class="col-6 col-md-6 col-lg-4 pe-md-5">
                <div class="ratio ratio-4x3 overflow-hidden">
                <img src="images/Reese_Outside_Pic.png"
                    alt="Reese outside"
                    class="paragraph-img of-cover op-top animated-element fade-in-right rounded">
                </div>
            </div>
        </div>
    </div>

   <!-- COLLABORATION SECTION -->
    <div class="row g-3 g-md-4 mb-9 text-center align-items-center">
        <!-- Images: 2-up on phones, 25% each on md, 33% each on lg -->
        <div class="col-6 col-md-3 col-lg-4 ps-md-5 animated-element fade-in-left">
            <div class="ratio ratio-4x3 overflow-hidden">
            <img src="images/Reese_Hockey_Guys.JPG" alt="Hockey group 1"
                class="contact-img of-cover op-center rounded">
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-4 animated-element fade-in-left">
            <div class="ratio ratio-4x3 overflow-hidden">
            <img src="images/Reese_Hockey_Guys_2.JPG" alt="Hockey group 2"
                class="contact-img of-cover op-center rounded">
            </div>
        </div>

        <!-- Text: full width on phones, 50% on md, 33% on lg -->
        <div class="col-12 col-md-6 col-lg-4">
            <h1 class="story-heading p-0 animated-element fade-in-right">NoBad Collaboration</h1>
            <p class="lead text-center ps-3 pe-3 ps-md-4 pe-md-4 animated-element fade-in-right">
            Reese has teamed up with NoBad Apparel for an exciting collaboration that blends iconic chocolatey goodness with streetwear style.
            The collection features bold, playful designs inspired by Reese’s signature colors and branding, bringing a fun, nostalgic twist to everyday fashion.
            With limited-edition hoodies, tees, and accessories, the partnership celebrates creativity and individuality,
            appealing to fans of both Reese’s and contemporary streetwear culture. This collaboration highlights how brands can cross industries to
            create unique, collectible pieces that resonate with diverse audiences.
            </p>
        </div>
    </div>



    <footer class="mt-5 pt-4 pb-5 footer-color">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 col-md-4">
                    <h6 class="mb-3">Reese Ketler</h6>
                        <nav aria-label="About">
                            <ul class="list-unstyled mb-2">
                                <li><a href="#story" class="link-secondary text-decoration-none">About / Story</a></li>
                                <li><a href="#contact" class="link-secondary text-decoration-none">Contact / Partnerships</a></li>
                                <li><a href="#media" class="link-secondary text-decoration-none">Media Kit / Press</a></li>
                            </ul>
                        </nav>
                    <small class="text-muted">© <span id="year"></span> Reese Ketler</small>
                </div>

                <div class="col-12 col-md-4">
                    <h6 class="mb-3">Explore</h6>
                    <nav aria-label="Explore">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#follow" class="link-secondary text-decoration-none">Follow</a></li>
                            <li><a href="#shop" class="link-secondary text-decoration-none">Shop</a></li>
                            <li><a href="#updates" class="link-secondary text-decoration-none">Updates</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-md-4">
                    <h6 class="mb-3">Legal</h6>
                    <nav aria-label="Legal">
                        <ul class="list-unstyled mb-2">
                            <li><a href="#privacy" class="link-secondary text-decoration-none">Privacy</a></li>
                            <li><a href="#terms" class="link-secondary text-decoration-none">Terms</a></li>
                            <li><a href="#accessibility" class="link-secondary text-decoration-none">Accessibility</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block mt-2 text-decoration-none">Back to top ↑</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
