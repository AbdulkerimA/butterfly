<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['name'])|| empty($_POST['price'])){
        echo "<script>alert('pleas fill all of the informations')</script>";
    }
    else {
        upload_image();

        // connect the controller and upload all the data
    }
}
?>

<section id="sec5">
            <article>
                <header>
                    Add products
                </header>
            </article>
        </section>
        <!-- upload section 6-->
        <section  id="sec6">
            <article>
              <div id="container">
                    <!-- image of the product to be uploaded -->
                    <img src="" alt="product pic" id="image_preview">
                    
                    <form action="./addProduct.index.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="file" id="upload-file"  onchange="preview()" hidden />
                        
                        <label class="btn-up" for="upload-file">Upload</label>
                        
                        <div id="amount">
                            <div id="minus" onclick>-</div>
                            <span id="pnumber"  contenteditable="true">0</span>
                            <div id="plus">+</div>
                        </div>
                        
                        <input type="text" name="name" id="name" placeholder="product name">
                        <input type="text" name="price" id="price" placeholder="price $0">
                        
                        <textarea name="dic" id="dic" cols="30" rows="10">product description</textarea>
                          <!-- ADD THE  product to the db -->
                        <button type="submit"> add product</button>
                    </form>

                </div>
            </article>
        </section>
        <script src="../asset/js/addpro.admin.app.js"></script>