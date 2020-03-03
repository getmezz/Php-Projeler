

<?php include 'header.php' ?>

<?php include 'iletisim-slider.php' ?>
  


<script type="text/javascript">

    function deneme()
    {
        alert('Mesajınız Gönderilmemiştir. !');
    }
</script>



    <div class="site-section" data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          

          <div class="row">
            <div class="col-lg-8 mb-5">
                
              <form action="#">
               

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                      
                    <label class="text-black" for="fname">Adınız</label>
                    <input type="text" id="fname" class="form-control" placeholder="Adınız">
                  </div>
                    
                  <div class="col-md-6">
                    <label class="text-black" for="lname">SoyAdınız</label>
                    <input type="text" id="lname" class="form-control" placeholder="SoyAdınız">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">E-mail Adresiniz</label> 
                    <input type="email" id="email" class="form-control" placeholder="E-mail Adresiniz">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Konu</label> 
                    <input type="subject" id="subject" class="form-control" placeholder="Konu">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Mesajınız</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Dilediğinizi Sorabilirsiniz..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Mesaj Gönder" onclick="deneme();" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Adresim</p>
                <p class="mb-4">Nişancı Mahallesi, Övgü Sokak İstanbul/Türkiye</p>

                <p class="mb-0 font-weight-bold">Telefon Numaram</p>
                <p class="mb-4"><a href="#">0 (212) 822 5813</a></p>

                <p class="mb-0 font-weight-bold">E-mail Adresim</p>
                <p class="mb-0"><a href="#">getmezfotografcilik@gmail.com</a></p>

              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>


  

 <?php include 'footer.php' ?>
    