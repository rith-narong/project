<?php
// Get the current page from the URL parameter (default to 'index')
$p = isset($_GET['p']) ? $_GET['p'] : 'index';
?>

<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-2">
                <div id="fh5co-logo"><a href="index.php"><img src="images/logo1.png" alt="" width=40px></a></div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1">
                <ul>
                    <li class="has-dropdown <?=($p == 'product' ? 'active' : '')?>">
                        <a href="index.php?p=product">Shop</a>
                    </li>
                    <li class="<?=($p == 'about' ? 'active' : '')?>">
                        <a href="index.php?p=about">About</a>
                    </li>
                    <li class="has-dropdown <?=($p == 'services' ? 'active' : '')?>">
                        <a href="index.php?p=services">Services</a>
                    </li>
                    <li class="<?=($p == 'contact' ? 'active' : '')?>">
                        <a href="index.php?p=contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                <ul>
                    <li class="search">
                        <div class="input-group">
                            <input type="text" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                            </span>
                        </div>
                    </li>
                    <li class="shopping-cart">
                        <a href="#" class="cart">
                            <span><small>0</small><i class="icon-shopping-cart"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
