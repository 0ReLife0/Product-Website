<?php 
    $pageTitle = 'Contact Ons';
    $activePage = 'contact'; // Set the active page
    include './components/header.php'; 
?>
<?php include './components/navbar.php'; ?>

    <div class="container content">
        <div class="row mb-2">
            <div class="col-lg-12">
                <h1 class="display-4 text-center contact-page-main-title" data-aos="fade-up">Neem Contact Met <span style="color:#056839">Ons</span></h1>
                <h4 class="text-center contact-page-main-subtitle" data-aos="fade-up">Laten we <span style="color:#056839">kennis maken</span></h4>
            </div>
        </div>
    </div>
    <div id="contact-container" class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto form-container" id="form-container" data-aos="zoom-in-down">
                <form id="contact-form">
                    <h2 class="text-center">Contact Formulier</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Naam</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label">Bericht</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Verstuur</button>
                
                </form>
            </div>
            <div class="col-md-6">
                <!-- Optionally, you can add an image or additional content here -->
            </div>
        </div>
    </div>

    <!-- Map Container -->
    <div id="map-container" class="container-fluid" data-aos="zoom-in-up">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.643549426865!2d4.895167715800986!3d52.3702159797846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c6f6f11db9%3A0x3a8f4aef0a06e527!2sDam%20Square%2C%20Amsterdam!5e0!3m2!1sen!2snl!4v1614674789064!5m2!1sen!2snl"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

<?php include './components/footer.php'; ?>