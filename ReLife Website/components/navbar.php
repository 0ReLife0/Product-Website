<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./assets/img/logo/ReLifeLogo.png" alt="ReLife" style="width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item <?php echo $activePage == 'home' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'product' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./product.php">Product</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'overons' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./overons.php">Over Ons</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'visie' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./vision.php">Visie</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'contact' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item m-auto ms-5 me-4">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                            <button class="btn btn-success">DOWNLOAD APP</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>