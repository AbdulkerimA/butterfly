<?php
?>

        <!-- section 8 users section -->
        <section id="sec8">
            <article id="artic8">
                <header>
                    list of subscribed users
                </header>
            </article>
            <div id="container3">
                <table id="table">
                    <!-- The heading for table -->
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Number of items he/she buys</th>
                        </tr>
                    </thead>

                    <!-- data of the table-->
                   <tbody>
                   <?php 
                        for ($i=1; $i<=30;$i++){
                    ?>
                    <tr>
                            <td><?php echo $i ?></td>
                            <td>Abdulkerim</td>
                            <td>abdulkerimademrcdf@gmail.com</td>
                            <td>+251904004053</td>
                            <td>10</td>
                    </tr>
                    <?php
                      }
                    ?>
                   </tbody>
                </table>
            </div>
        </section> 
        <script src="../asset/js/userslist.admin.app.js"></script>