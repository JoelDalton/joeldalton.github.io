<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);

require_once 'app/header.php';
?>
<!--    <div class="container">-->
<!--        <div class="alert alert-danger">-->
           
            <?php
//             foreach($articles as $article) {
//    что-то связанное с БД                         echo '<span><a href="/article.php?id='.$article[category_id].'">'.$article[category_title].'</a>'.' '.'</span>';
//                         }
            ?>
<!--        </div>-->
<!--    </div>-->
       
        <div class="container">
            <div class="row">
                <div class="col-md-8 main-info-block pull-left">
                    <h1 class="main-info-block-text">HELLO</h1>
                    <p class="main-info-block-text">This is my blog. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus sed, temporibus debitis iusto, iste, quisquam quidem mollitia doloribus suscipit assumenda eum dolorem nemo saepe. Alias rem explicabo, facilis adipisci? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias necessitatibus, in, dolorum nostrum cum praesentium delectus, veritatis similique voluptatem sit reprehenderit asperiores mollitia quidem. Ratione ab assumenda quod delectus quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab impedit hic iusto doloremque saepe numquam, cum, magni eligendi porro iste in asperiores! Ipsam impedit numquam placeat. Totam, rem voluptatum alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis alias sunt, officiis debitis quis sint fuga ullam qui quisquam dolore non recusandae voluptates libero nam porro, blanditiis. Doloremque reiciendis, rem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus sed, temporibus debitis iusto, iste, quisquam quidem mollitia doloribus suscipit assumenda eum dolorem nemo saepe. Alias rem explicabo, facilis adipisci? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias necessitatibus, in, dolorum nostrum cum praesentium delectus, veritatis similique voluptatem sit reprehenderit asperiores mollitia quidem. Ratione ab assumenda quod delectus quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab impedit hic iusto doloremque saepe numquam, cum, magni eligendi porro iste in asperiores!</p>
                </div>
                <div class="col-md-3 main-info-block pull-right">
                    <?php
                        require 'app/sidebar.php';
                    ?>
                </div>
            </div>
        </div>
<?php
require_once 'app/footer.php';
?>