<?php
include "../inc/includes.admin.inc.php";

$viewobj = new View();
$userData = $viewobj->displayAllUsers();
 

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
                            <th scope="col">comments</th>
                        </tr>
                    </thead>

                    <!-- data of the table-->
                   <tbody>
                   <?php 
                        for ($i=0; $i<count($userData);$i++){
                    ?>
                    <tr>
                            <td><?php echo $userData[$i]['id'] ?></td>
                            <td><?php echo $userData[$i]['name'] ?></td>
                            <td><?php echo $userData[$i]['email'] ?></td>
                            <td><?php echo $userData[$i]['tel'] ?></td>
                            <td><?php echo $userData[$i]['comment'] ?></td>
                    </tr>
                    <?php
                      }
                    ?>
                   </tbody>
                </table>
            </div>
        </section> 
        <script src="../asset/js/userslist.admin.app.js"></script>