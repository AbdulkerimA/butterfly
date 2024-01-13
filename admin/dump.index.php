<?php 
?>
        <section id="sec7">
            <article id="artic7">
                <header>
                    Delet products 
                </header>
            </article>
            <!-- products -->
            <div id="container2">
                <!-- list of all product -->
                <?php 
                    for ($i=1; $i<=20;$i++){
                ?>
                <div id="product">
                    <span id="del">X</span>
                    <img src="../asset/pic/chocolate-oblivion-cake-.jpg" alt="product">
                    <!-- product name -->
                    <p id="product_name">Dove</p>
                </div>
                <?php
                    }
                ?>
            </div>
        </section>
        <script language = "javascript" src="../asset/js/products.admin.app.js"></script>