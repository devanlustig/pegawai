<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
<div class="content">
   <div class="row">
      <div class="col-md-7">
         <div class="panel_s">
            <div class="panel-body">
               <h4 class="no-margin">
                  <?php echo $title; ?>
                                

               </h4>
               <hr class="hr-panel-heading" />
               <?php echo render_input('nama_lengkap','Nama Lengkap','','text'); ?>
                <?php echo render_input('ttlp','Tempat','','text'); ?>
                  <?php echo render_date_input('tanggal',_l('Tanggal Lahir')); ?>
                 <?php echo render_textarea('alamat','Alamat','',array('rows'=>5)); ?>
                  <?php echo render_input('tlp','No. Telp / HP','','number'); ?>
                   <div class="form-group">
                    <label for="jenis_kelamin"><?php echo _l('Jenis Kelamin'); ?></label><br />
                    <div class="radio radio-primary radio-inline">
                        <input type="radio" name="kelamin" value="1" required>
                        <label for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="radio radio-primary radio-inline">
                        <input type="radio" name="kelamin" value="2" required>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                 <div class="form-group select-placeholder">
                  <label for="agama" class="control-label">Agama</label>
                  <select class="selectpicker display-block" data-width="100%" name="agama" id="agama">
                
                    <option value="islam">Islam</option>
                     <option value="kristen">Kristen</option>
                      <option value="budha">Budha</option>
                       <option value="hinde">Hindu</option>
                    
                  </select>
                </div>

                <div class="form-group">
                    <label for="hobi" class="control-label">Hobi</label>
                  <div class="checkbox checkbox-primary">

                    <input type="checkbox" id="hobi" class="ays-ignore" name="bacabuku" checked>
                    <label for="buku"><?php echo _l('Baca Buku'); ?></label>

                     <input type="checkbox" id="hobi" class="ays-ignore" name="olahraga" checked>
                    <label for="olahraga"><?php echo _l('Olah Raga'); ?></label>

                    <input type="checkbox" id="hobi" class="ays-ignore" name="maingame" checked>
                    <label for="maingame"><?php echo _l('Main Game'); ?></label>


                    <input type="checkbox" id="hobi" class="ays-ignore" name="hiking">
                    <label for="hiking"><?php echo _l('Hiking'); ?></label>
                
                </div>
              </div>


               

               
                
               
               
               <hr />
                  <button type="submit" class="btn btn-info pull-right"><?php echo _l('Tampilkan'); ?></button>
                  <?php echo form_close(); ?>
            </div>
         </div>
      </div>

   </div>
</div>
<?php init_tail(); ?>
<script>

      $(document).ready(function(){

        $('.container').css({'background':'#81ecec', 'color':'#2d3436', 'padding':'5px', 'margin-top':'10px'});
        $('h3').css({'color':'red', 'text-align':'center'});

        $("button").click(function(){

          var nama = $('#nama_lengkap').val();
          var tempat = $('#ttlp').val();
          var date = $('#tanggal').val();
          var alamat = $('#alamat').val();
          var tlpn = $('#tlp').val();
          var kelamin = $('#kelamin').val();
          var agama = $('#agama').val();
          var hobi = $('#hobi').val();


          alert('Nama Lengkap : ' +nama + '\n\n Tempat, Tanggal Lahir : ' + tempat + ' - ' + date + '\n\n Alamat ' + alamat + '\n\n No. Telp/HP :' + tlpn + '\n\n Jenis Kelamin : ' + kelamin + '\n\n Agama :' + agama + '\n\n Hobi : ' + hobi );
        })
      })
</script>
</body>
</html>
