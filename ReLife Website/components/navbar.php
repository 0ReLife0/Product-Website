<body>
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.php"><img src="./assets/img/ReLifeLogo.png" alt="ReLife" style="width: 80px; margin: 4px 24px;"></a>
                    <i class="fa-solid fa-bars navbutton"></i>
                </div>
                <ul class="nav navbar-nav">
                    <li class="<?php echo $activePage == 'home' ? 'active' : ''; ?>"><a href="./index.php">Home</a></li>
                    <li class="<?php echo $activePage == 'product' ? 'active' : ''; ?>"><a href="./product.php">Product</a></li>
                    <li class="<?php echo $activePage == 'overons' ? 'active' : ''; ?>"><a href="./overons.php">Over Ons</a></li>
                    <li class="<?php echo $activePage == 'contact' ? 'active' : ''; ?>"><a href="./contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>