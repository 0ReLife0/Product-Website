<?php
    $pageTitle = 'ReLife App';
    $activePage = 'home'; // Set the active page
    include './components/header.php'; 
?>

<?php include './components/navbar.php'; ?>



<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="video-section">
        <div class="video-overlay"></div>
        <video autoplay muted loop class="bg-video">
            <source src="/assets/video/relife-video.mp4" type="video/mp4">
        </video>
        
        <div class="container h-100 landing-page-main-section g-5">
            <div class="row h-100 align-items-center">
                <div class="col-md-6 fadeInBottom" >
                    <h1 class="landing-page-main-title">Geef Je Elektronica Een <span style="color:#1a2f50">Tweede Kans</span></h1>
                    <p class="landing-page-main-text">Met ReLife verkoop en koop je gemakkelijk tweedehands elektronica.</p>
                    <a class="landing-page-main-btn-container" href="/product.php">
                        <button class="landing-page-main-btn">Ontdek onze app</button>
                    </a>
                    
                </div>
                <div class="col-md-6 text-center fadeInTop" >
                    <img src="/assets/img/Mockups/ReLife_Mockup_main.png" class="phone-mockup" alt="Phone Mockup">
                </div>
            </div>
                <div class="scroll-down">
                    <a href="#features-section"><img src="/assets/img/scroll-down.gif"></a>
                </div>
        </div>
    </div>

    <div id="features-section" class="container my-5 landing-page-features-container">
        <div class="row text-center">
            <div class="col-md-4 mb-3 fadeInBottom" >
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-lightbulb landing-page-features-icon"></i></h5>
                        <p class="card-text">Innovatief</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 fadeInTop" >
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-handshake landing-page-features-icon"></i></i></h5>
                        <p class="card-text">Betrouwbaar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 fadeInBottom" >
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-tree landing-page-features-icon"></i></h5>
                        <p class="card-text">Milieubewust</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container landing-page-section-content-container g-5">
        <!-- Row 1: Image on the right, text on the left -->
        <div class="row align-items-center landing-page-section-content">
            <div class="col-md-6 order-md-2">
                <img src="/assets/img/Mockups/ReLife_Mockup_3.png" class="img-fluid mockup-images wow fadeInTop" alt="Description of Image 1">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="landing-page-secondary-titles">Gepersonaliseerde ervaring</h2>
                <p class="landing-page-paragraphs">Jouw voorkeuren zijn belangrijk. ReLife past zich aan jouw keuzes aan, en biedt gepersonaliseerde aanbevelingen die slimmer worden hoe meer je swipet.</p>
            </div>
        </div>

        <!-- Row 2: Image on the left, text on the right -->
        <div class="row align-items-center landing-page-section-content g-5">
            <div class="col-md-6">
                <img src="/assets/img/Mockups/ReLife_Mockup_5.png" class="img-fluid mockup-images wow fadeInTop" alt="Description of Image 2" >
            </div>
            <div class="col-md-6">
                <h2 class="landing-page-secondary-titles">Betrouwbare keuze</h2>
                <p class="landing-page-paragraphs"> De slimme keuze voor milieubewuste consumenten. Onze app zorgt voor een revolutie in de manier waarop je tweedehands elektronica koopt en verkoopt, zodat het vinden of geven van een tweede leven aan apparaten kinderspel wordt.</p>
            </div>
        </div>

        <!-- Row 3: Image on the right, text on the left -->
        <div class="row align-items-center landing-page-section-content g-5">
            <div class="col-md-6 order-md-2">
                <img src="/assets/img/Mockups/ReLife_Mockup_1.png" class="img-fluid mockup-images wow fadeInTop" alt="Description of Image 1" >
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="landing-page-secondary-titles">Duurzaam winkelen gemakkelijk gemaakt</h2>
                <p class="landing-page-paragraphs">Ontdek een gebruiksvriendelijke marktplaats waar duurzaamheid en technologie samenkomen. Swipe door een zorgvuldig geselecteerd aanbod van gadgets die passen bij jouw levensstijl en budget.</p>
            </div>
        </div>

        <!-- Row 4: Image on the left, text on the right -->
        <div class="row align-items-center landing-page-section-content g-5">
            <div class="col-md-6">
                <img src="/assets/img/Mockups/ReLife_Mockup_2.png" class="img-fluid mockup-images wow fadeInTop" alt="Description of Image 2" >
            </div>
            <div class="col-md-6">
                <h2 class="landing-page-secondary-titles">Veilige transacties, moeiteloze communicatie</h2>
                <p class="landing-page-paragraphs">Chat gemakkelijk en handel met vertrouwen. Ons beveiligde platform zorgt ervoor dat elke deal soepel verloopt, met bescherming voor zowel koper als verkoper als onze hoogste prioriteit.</p>
            </div>
        </div>

    
    </div>

    <h2 class="col-lg-6 text-center pb-5 mb-5 m-auto">Onze Partners</h2>

    <div class="partners-container">
        <div class="logo-container">
            <img src="/assets/img/sponsors/microsoft.webp" alt="Partner Logo 1" class="partner-logo">
            <img src="/assets/img/sponsors/google.png" alt="Partner Logo 2" class="partner-logo">
            <img src="/assets/img/sponsors/spacex.png" alt="Partner Logo 3" class="partner-logo">
            <img src="/assets/img/sponsors/netflix.svg" alt="Partner Logo 4" class="partner-logo">
            <img src="/assets/img/sponsors/nhl.png" alt="Partner Logo 5" class="partner-logo">
            <img src="/assets/img/sponsors/microsoft.webp" alt="Partner Logo 1" class="partner-logo">
            <img src="/assets/img/sponsors/google.png" alt="Partner Logo 2" class="partner-logo">
            <img src="/assets/img/sponsors/spacex.png" alt="Partner Logo 3" class="partner-logo">
            <img src="/assets/img/sponsors/netflix.svg" alt="Partner Logo 4" class="partner-logo">
            <img src="/assets/img/sponsors/nhl.png" alt="Partner Logo 5" class="partner-logo">
            <img src="/assets/img/sponsors/microsoft.webp" alt="Partner Logo 1" class="partner-logo">
            <img src="/assets/img/sponsors/google.png" alt="Partner Logo 2" class="partner-logo">
            <img src="/assets/img/sponsors/spacex.png" alt="Partner Logo 3" class="partner-logo">
            <img src="/assets/img/sponsors/netflix.svg" alt="Partner Logo 4" class="partner-logo">
            <img src="/assets/img/sponsors/nhl.png" alt="Partner Logo 5" class="partner-logo">
            <img src="/assets/img/sponsors/microsoft.webp" alt="Partner Logo 1" class="partner-logo">
            <img src="/assets/img/sponsors/google.png" alt="Partner Logo 2" class="partner-logo">
            <img src="/assets/img/sponsors/spacex.png" alt="Partner Logo 3" class="partner-logo">
            <img src="/assets/img/sponsors/netflix.svg" alt="Partner Logo 4" class="partner-logo">
            <img src="/assets/img/sponsors/nhl.png" alt="Partner Logo 5" class="partner-logo">
            <img src="/assets/img/sponsors/microsoft.webp" alt="Partner Logo 1" class="partner-logo">
            <img src="/assets/img/sponsors/google.png" alt="Partner Logo 2" class="partner-logo">
            <img src="/assets/img/sponsors/spacex.png" alt="Partner Logo 3" class="partner-logo">
            <img src="/assets/img/sponsors/netflix.svg" alt="Partner Logo 4" class="partner-logo">
            <img src="/assets/img/sponsors/nhl.png" alt="Partner Logo 5" class="partner-logo">
            <img src="/assets/img/sponsors/microsoft.webp" alt="Partner Logo 1" class="partner-logo">
            <img src="/assets/img/sponsors/google.png" alt="Partner Logo 2" class="partner-logo">
            <img src="/assets/img/sponsors/spacex.png" alt="Partner Logo 3" class="partner-logo">
            <img src="/assets/img/sponsors/netflix.svg" alt="Partner Logo 4" class="partner-logo">
            <img src="/assets/img/sponsors/nhl.png" alt="Partner Logo 5" class="partner-logo">
        </div>
    </div>



    <div class="container my-5 testimonials-container">
        <h2 class="text-center pb-5 mb-5">Wat zeggen de klanten?</h2>
        <div class="row mb-5 pb-5 testimonials-container-children">
            <div class="col-md-4 mb-4 fadeInBottom" >
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p class="testimonials-paragraph">"Ik was echt verbaasd over hoe gemakkelijk en leuk het is om door items te swipen op deze app. Het voelt als Tinder, maar dan voor tweedehands spullen! Ik heb al een paar geweldige deals gevonden en kan niet wachten om meer te ontdekken."</p>
                            <footer class="blockquote-footer">Jasper, Utrecht</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 fadeInTop" >
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p class="testimonials-paragraph">"Deze app heeft mijn kijk op tweedehands winkelen compleet veranderd. Het gemak van swipen en direct beslissen is ongekend. Bovendien voelt het geweldig om duurzaam bezig te zijn door hergebruik. Een echte aanrader!"</p>
                            <footer class="blockquote-footer">Sanne, Rotterdam</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 fadeInBottom" >
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p class="testimonials-paragraph">"Ik hou ervan hoe deze app het spannend maakt om tweedehands items te vinden. Het swipen voegt echt een spelelement toe aan het winkelen, wat het zowel leuk als productief maakt. Ik heb al een aantal unieke vondsten gedaan en kan niet wachten om meer te ontdekken."</p>
                            <footer class="blockquote-footer"> Bram, Amsterdam</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>


<?php include './components/footer.php'; ?>