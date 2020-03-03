 <?php 
 include 'header.php';

include '../netting/baglan.php';

$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


  ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                  </div>
                  <div class="x_content">
                    
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hakkımızda Sayfası Düzenleme
                       <small>
                  <?php 
                  if (@$_GET['durum']=='ok') {?>
                 
                <b style="color:green">Güncelleme Başarılı... </b>


               <?php } elseif (@$_GET['durum']=='no')  { ?>
                   <b style="color:red">Güncelleme Yapılamadı... </b>
              
                          <?php   } ?> </small> </h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda Başlık<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hakkimizda_baslik" value="<?php echo  $hakkimizdacek ['hakkimizda_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> İçerik<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="hakkimizda_icerik" id="ckicerik" class="ckeditor" > <?php echo $hakkimizdacek ['hakkimizda_icerik']; ?></textarea>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name"> Resim<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="first-name" required="required" name="hakkimizda_resim" value="<?php echo  $hakkimizdacek ['hakkimizda_resim']; ?>" class="form-control col-md-7 col-xs-12">

                         
                        </div>
                      </div>



                      
                       <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                          <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Güncelle</button>
                         
                        </div>



                  </form>
                  </div>
                </div>
              </div>






                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include'footer.php' ?>

        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script>
 CKEDITOR.replace('ckicerik');
</script>

 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script>
 CKEDITOR.replace('ckmisyon');
</script>