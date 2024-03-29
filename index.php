<?php 
    $pageTitle = 'ReLife App';
    $activePage = 'home'; // Set the active page
    include './components/header.php'; 
?>

<?php include './components/navbar.php'; ?>

<div class="video-section">
    <video autoplay muted loop id="background-video">
        <source src="./assets/video/relife-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="polka-overlay"></div>
    <div class="content">
        <h1>Your Text Here</h1>
        <p>More readable text against the polka dot background.</p>
    </div>
</div>



<?php include './components/footer.php'; ?>