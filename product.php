<?php 
    $pageTitle = 'Het Product';
    $activePage = 'product'; // Set the active page
    include './components/header.php'; 
?>
<?php include './components/navbar.php'; ?>

<div class="col-sm-12 col-md-12 col-lg-12 product-content content">
    <div class="container">
        <div class="row mb-2">
            <div class="col-lg-12">
                <h1 class="display-4 text-center fadeInTop">Vind Je Perfecte <span style="color:#056839">Match!</span></h1>
                <h4 class="text-center fadeInTop">Geef je elektronica een <span style="color:#056839">tweede leven!</span></h4>
            </div>
        </div>
    </div>

    <!-- Main product view -->
    <div class="img-wrapper">
        <div class="row mb-4">
            <div class="col-lg-12">
                <img class="product-img-main fadeInTop" src="/assets/img/Mockups/ReLife_Mockup_4.png" alt="An iPhone 15 with the app open" >
            </div>
        </div>

    </div>

    <div class="container landing-page-section-content-container g-5">

        <!-- Row 1: Image on the left, text on the right -->
        <div class="row align-items-center landing-page-section-content g-5">
            <div class="col-md-6">
                <img src="/assets/img/Mockups/ReLife_Mockup_1.png" class="img-fluid mockup-images fadeInTop" alt="Description of Image 2" >
            </div>
            <div class="col-md-6 fadeInBottom">
                <h2 class="landing-page-secondary-titles">Ontdek ReLife</h2>
                <p class="landing-page-paragraphs"> Ontdek ReLife, de innovatieve app die het shoppen van tweedehands items herdefinieert. Swipe eenvoudig door elektronica, meubels, en meer met onze Tinder-achtige functie en ontdek moeiteloos wat je zoekt.</p>
            </div>
        </div> 

        <!-- Row 2: Image on the right, text on the left -->
        <div class="row align-items-center landing-page-section-content">
            <div class="col-md-6 order-md-2">
                <img src="/assets/img/Mockups/ReLife_Mockup_2.png" class="img-fluid mockup-images fadeInTop" alt="Description of Image 1" >
            </div>
            <div class="col-md-6 order-md-1 fadeInBottom">
                <h2 class="landing-page-secondary-titles">Intuïtief</h2>
                <p class="landing-page-paragraphs">ReLife's intuïtieve interface laat je snel door aanbiedingen navigeren, favorieten opslaan, en in contact komen met verkopers.</p>
            </div>
        </div>

        <!-- Row 3: Image on the left, text on the right -->
        <div class="row align-items-center landing-page-section-content g-5">
            <div class="col-md-6">
                <img src="/assets/img/Mockups/ReLife_Mockup_3.png" class="img-fluid mockup-images fadeInTop" alt="Description of Image 2" >
            </div>
            <div class="col-md-6 fadeInBottom">
                <h2 class="landing-page-secondary-titles">Uitgebreid</h2>
                <p class="landing-page-paragraphs"> Ontdek een rijke verscheidenheid van producten, van vintage tot modern, allemaal samengebracht met het doel om duurzaam winkelen te bevorderen.</p>
            </div>
        </div> 


        <!-- Row 4: Image on the right, text on the left -->
        <div class="row align-items-center landing-page-section-content">
            <div class="col-md-6 order-md-2">
                <img src="/assets/img/Mockups/ReLife_Mockup_5.png" class="img-fluid mockup-images fadeInTop" alt="Description of Image 1" >
            </div>
            <div class="col-md-6 order-md-1 fadeInBottom">
                <h2 class="landing-page-secondary-titles">Geavanceerd</h2>
                <p class="landing-page-paragraphs">Ons algoritme past zich aan jouw voorkeuren aan, waardoor elke swipe je dichter bij je ideale vondst brengt, voor een naadloze en doelgerichte zoekervaring.</p>
            </div>
        </div>


        <!-- CTA Button -->
        <div class="container content">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <a class="cta-btn-container" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" >
                        <button class="cta-btn cta-btn-product btn-success">DOWNLOAD APP</button>
                    </a>
                    <img class="stores-img" src="./assets/img/stores.png" alt="">
                </div>
            </div>
        </div>
    </div>

    
</div>

<?php include './components/footer.php'; ?>