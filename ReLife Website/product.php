<?php 
    $pageTitle = 'Het Product';
    $activePage = 'product'; // Set the active page
    include './components/header.php'; 
?>
<?php include './components/navbar.php'; ?>

<div class="col-sm-12 col-md-12 col-lg-12 product-content">
<!-- Inhoud van de productpagina -->
<div class="container content">
    <div class="row mb-2">
        <div class="col-lg-12">
            <h1 class="display-4 text-center">Vind Je Perfecte <span style="color:#056839">Match!</span></h1>
            <h5 class="text-center">Geef je elektronica een <span style="color:#056839">tweede leven!</span></h5>
        </div>
    </div>
</div>

<div class="container img-wrapper">
    <div class="row mb-4">
        <div class="col-lg-12">
            <img class="product-img-main" src="./assets/img/mockups/ReLife_Mockup_4.png" alt="A hand holding an iPhone 15 with the app">
        </div>
    </div>

</div>

<!-- Row for the first image-text pair -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <img src="./assets/img/mockups/ReLife_Mockup_1.png" alt="iPhone 15 pro with ReLife 2" class="product-img-child img-fluid">
        </div>
        <div class="col-md-6">
            <p>Ontdek ReLife, de innovatieve app die het shoppen van tweedehands items herdefinieert. Swipe eenvoudig door elektronica, meubels, en meer met onze Tinder-achtige functie en ontdek moeiteloos wat je zoekt.</p>
        </div>
    </div>
    
    <!-- Row for the second text-image pair -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-6 order-md-2">
            <img src="./assets/img/mockups/ReLife_Mockup_2.png" alt="iPhone 15 pro with ReLife 3" class="product-img-child img-fluid">
        </div>
        <div class="col-md-6 order-md-1">
            <p>ReLife's intuïtieve interface laat je snel door aanbiedingen navigeren, favorieten opslaan, en in contact komen met verkopers.</p>
        </div>
    </div>
    
    <!-- Row for the third image-text pair -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <img src="./assets/img/mockups/ReLife_Mockup_3.png" alt="iPhone 15 pro with ReLife 4" class="product-img-child img-fluid">
        </div>
        <div class="col-md-6">
            <p>Ontdek een rijke verscheidenheid van producten, van vintage tot modern, allemaal samengebracht met het doel om duurzaam winkelen te bevorderen.</p>
        </div>
    </div>

    <!-- Row for the second text-image pair -->
    <div class="row mb-3 align-items-center">
        <div class="col-md-6 order-md-2">
            <img src="./assets/img/mockups/ReLife_Mockup_5.png" alt="iPhone 15 pro with ReLife 5" class="product-img-child img-fluid">
        </div>
        <div class="col-md-6 order-md-1">
            <p>Ons algoritme past zich aan jouw voorkeuren aan, waardoor elke swipe je dichter bij je ideale vondst brengt, voor een naadloze en doelgerichte zoekervaring.</p>
        </div>
    </div>

    <div class="container content">
        <div class="row mb-2">
            <div class="col-lg-12">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                    <button class="cta-btn btn-success">DOWNLOAD APP</button>
                </a>
                <img class="stores-img img-fluid" src="./assets/img/stores.png" alt="">
            </div>
        </div>
    </div>
    
</div>

<?php include './components/footer.php'; ?>