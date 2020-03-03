    <?php include'header.php' ?>


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">Forum Ekle</h1>
              
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                <img src="images/thumbs/contact/yaz.jpg" 
                    
                     sizes="(max-width: 2000px) 30vw, 2000px" alt="">
                </p>

                

                

               
                </div>

                

                <form name="cForm" id="cForm" class="contact-form" method="post" action="">
                    <fieldset>

                        <div>
                            <input name="cName" id="cName" class="full-width" placeholder="Adınız ve Soyadınız*" value="" type="text">
                        </div>

                       

                        <div class="form-field">
                            <input name="cWebsite" id="cWebsite" class="full-width" placeholder="Konu Başlığı" value="" type="text">
                        </div>

                        <div class="message form-field">
                        <textarea name="cMessage" id="editor" class="full-width" placeholder="Ne Düşünüyorsun*"></textarea>
                        </div>

                        <button type="submit" class="submit btn btn--primary btn--large full-width">Ekle</button>

                    </fieldset>
                </form>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->


    <?php include'footer-end.php' ?>

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script>
 CKEDITOR.replace('editor');
</script>