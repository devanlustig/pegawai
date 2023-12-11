<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="panel_s">
					<div class="panel-body">
						<div class="_buttons">
							<a href="<?php echo admin_url('pegawai/pegawai'); ?>" class="btn btn-info pull-left display-block"><?php echo _l('new_pegawai'); ?></a>
						</div>
						<div class="clearfix"></div>
						<hr class="hr-panel-heading" />
						<div class="clearfix"></div>
						<?php render_datatable(array(
						
						_l('the_number_sign'),
						array(
							'name'=>_l('pegawai_id'),
							'th_attrs'=>array('class'=> 'not_visible')
						),
						
						_l('pegawai_nama'),
						_l('pegawai_umur'),
						_l('pegawai_alamat'),
						_l('pegawai_foto'),	
						
							_l('options')
							),'pegawai'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php init_tail(); ?>
	<script>
		initDataTable('.table-pegawai', window.location.href, 0,0,undefined,[1,'asc']);
	</script>
</body>
</html>
