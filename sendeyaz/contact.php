<?php include'header.php' ?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">Bize Ulaşın.</h1>
              
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                <img src="images/thumbs/contact/contact-1000.jpg" 
                     srcset="images/thumbs/contact/contact-2000.jpg 2000w, 
                             images/thumbs/contact/contact-1000.jpg 1000w, 
                             images/thumbs/contact/contact-500.jpg 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                

                

               
                </div>

                

                <form name="cForm" id="cForm" class="contact-form" method="post" action="">
                    <fieldset>

                        <div>
                            <input name="ad" id="adsoyad" class="full-width" placeholder="Adınız ve Soyadınız*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="email" id="email" class="full-width" placeholder="E-Mail Adresiniz*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="konu" id="konu" class="full-width" placeholder="Konu" value="" type="text">
                        </div>

                        <div class="message form-field">
                        <textarea name="mesaj" id="mesaj" class="full-width" placeholder="Şikayet veya geliştirmemiz gereken konular hakkında bize yazabilirsiniz*"></textarea>
                        </div>

                        <button type="submit" name="iletisimform" class="submit btn btn--primary btn--large full-width">Mesaj Gönder</button>

                    </fieldset>
                </form>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->


    <?php include'footer-end.php' ?>