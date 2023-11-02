<?php
echo '
        <div class = "menu-div" id ="menuDiv">
            <div class = "menu-rect" id = "menuRect">
                <svg viewBox="0 0 100 80" width="40" height="40">
                    <rect width="100" height="10" fill="#FECD3E"></rect>
                    <rect y="30" width="100" height="10" fill="#FECD3E"></rect>
                    <rect y="60" width="100" height="10" fill="#FECD3E"></rect>
                </svg>
            </div>
        </div>
        <div class="phone-menu" id="phoneMenu">
            <div class="phone-icons" id="phoneIcons" >
                <figure>
                    <a href="../Pages/contact.php">
                    <img class="icon" src="../src/footer_images/contact.png" alt="icon">
                    <figcaption class = "menu-blue">Contact us</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="../Pages/about_page.php">
                    <img class="icon" src="../src/footer_images/info_blue.png" alt="icon">
                    <figcaption class = "menu-blue">About us</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="../Pages/Catalogue.php">
                        <img class="icon" src="../src/footer_images/socks_pink.png" alt="icon">
                        <figcaption class = "fig-catalogue menu-blue" >Catalogue</figcaption>
                    </a>
                </figure>
                <figure class = "cart">
                    <a href="../Pages/cart.php">
                        <img class="icon" src="../src/footer_images/cart.png" alt="icon">
                        <figcaption class="fig-cart menu-blue">Cart</figcaption>
                    </a>
                </figure>
            </div>
        </div>' ;

    echo "
        <style>
            .menu-div {
                z-index:1001;
                display:none;
                justify-content:flex-end;
                align-items:center;
                background-color:#1E407A;
            }
            #phoneMenu{
                transition:1s;
                display:flex;
                width:0;
            }
            .menu-div {
                position:relative;
                width:100%;
                height:50px;
                overflow:hidden;
            }
            .menu-rect {
                margin:0 10px;
                z-index:1000;
            }
            .phone-menu {
                position:absolute;
                top:0;
                left:0;
                z-index:999;
                width:100dvw;
                height:100dvh;
                overflow:hidden;
                display:none;
                justify-content: center;
                align-items: center;
                background-color:white;
            }
            .menu-blue {
                color:#1E407A;
            }
        </style>
    ";
?>