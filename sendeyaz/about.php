<?php
 include'header.php';

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

  ?>



    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep"><?php echo $hakkimizdacek ['hakkimizda_baslik'] ?></h1>
                <p >
                <?php echo $hakkimizdacek ['hakkimizda_icerik'] ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                <img src="images/thumbs/about/about-1000.jpg" 
                     srcset="images/thumbs/about/about-2000.jpg 2000w, 
                             images/thumbs/about/about-1000.jpg 1000w, 
                             images/thumbs/about/about-500.jpg 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                
                <hr>

                

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->


    

   <?php include'footer-end.php' ?>