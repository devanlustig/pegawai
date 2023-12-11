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
               <?php if(isset($pegawai)){ ?>
               <a href="<?php echo admin_url('pegawai/pegawai'); ?>" class="btn btn-success pull-right mbot20 display-block"><?php echo _l('new_pegawai'); ?></a>
               <div class="clearfix"></div>
               <?php } ?>
               <?php echo form_open($this->uri->uri_string()); ?>
             
               
               <?php $attrs = (isset($pegawai) ? array() : array('autofocus'=>true)); ?>

              <?php $valuecode = (isset($pegawai) ? $pegawai->pegawai_nama : ''); ?>
              <?php echo render_input('pegawai_nama','Nama Pegawai',$valuecode,'text',$attrs); ?>
               <?php $umur = (isset($pegawai) ? $pegawai->pegawai_umur : ''); ?>
              <?php echo render_input('pegawai_umur','Umur',$umur,'number',$attrs); ?>
              <?php $alamat = (isset($pegawai) ? $pegawai->pegawai_alamat : ''); ?>
              <?php echo render_textarea('pegawai_alamat','Alamat',$alamat,array('rows'=>5)); ?>

                <div class="form-group">
                <label for="foto" class="control-label"><?php echo _l('Foto'); ?></label>
                <div class="input-group">
                  <input type="file" extension="<?php echo str_replace(['.', ' '], '', get_option('ticket_attachments_file_extensions')); ?>" filesize="<?php echo file_upload_max_size(); ?>" class="form-control" name="foto" accept="<?php echo get_ticket_form_accepted_mimes(); ?>">
                </div>
              </div>
               
                
               
               
               <hr />
                  <button type="submit" class="btn btn-info pull-right"><?php echo _l('submit'); ?></button>
                  <?php echo form_close(); ?>
            </div>
         </div>
      </div>

   </div>
</div>
<?php init_tail(); ?>
<script>
   $(function(){
     appValidateForm($('form'),{
      pegawai_nama:'required',
   });
   });
</script>
</body>
</html>
