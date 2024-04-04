<?php 
    $pageTitle = 'Error';
    $activePage = 'error'; // Set the active page
    include './components/header.php'; 
?>

<?php include './components/navbar.php'; ?>




    <div class="col-sm-12 col-md-12 col-lg-12 content">

        <div class="container g-5 col-lg-12 align-items-center">
            <!-- Row 1: Image on the right, text on the left -->
            <div class="row align-items-center error-page-text-img ">
                <div class="col-md-4 order-md-2">
                    <img src="/assets/img/warning.png" class="img-fluid error-image wow fadeInTop" alt="Warning triangle">
                </div>
                <div class="col-md-8 order-md-1 error-page-text">
                    <h2 class="landing-page-secondary-titles">Er is een fout opgetreden</h2>
                    <?php
                        // Check if the 'code' query parameter is set
                        if (isset($_GET['code'])) {
                            // Display the error code
                            echo "<p class='landing-page-paragraphs error-page-code'>Foutcode: " . htmlspecialchars($_GET['code']) . "</p>";
                        }
                    ?>
                    <p class="landing-page-paragraphs" >Het spijt ons voor het ongemak. Probeer aub het volgende:</p>
                    <ul>
                        <li><a href="/">Ga naar home</a></li>
                        <li><a href="javascript:history.back()">Ga terug</a></li>
                        <li><a href="/contact.php">Neem contact met ons</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        



<?php include './components/footer.php'; ?>