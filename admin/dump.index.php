<?php 
include "../inc/includes.admin.inc.php";

$viewobj = new View();
$products = $viewobj->displayProductForAdmin();


?>
        <section id="sec7">
            <article id="artic7">
                <header>
                    manage aveliable products 
                </header>
            </article>
            <!-- products -->
            <div id="container2">
                <!-- list of all product -->
                <table id="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">product</th>
                            <th scope="col">price</th>
                            <th scope="col">amount</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
                        <?php
                        for ($i=0; $i<count($products);$i++){

                        ?>
                        <tr class="row">
                            <td><img src="<?php echo $products[$i]['imgUrl'] ?>" alt="dov"></td>
                            <td class="pName"><?php echo $products[$i]['pName'] ?></td>
                            <td><input type="text" class="price" value="<?php echo $products[$i]['price']?>"></td>
                            <td><?php echo $products[$i]['pAmount'] ?></td>
                            <td><button id="update<?php echo $i?>">update</button></td>
                            <td><i id="Delete<?php echo $i?>" class="fa fa-trash-o" aria-hidden="true"></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </section>
        <script language = "javascript" src="../asset/js/products.admin.app.js"></script>