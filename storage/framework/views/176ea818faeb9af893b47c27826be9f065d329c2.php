<?php $__env->startSection('content'); ?>
<section class="page-header row">
	<h2> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h2>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(url('')); ?>"> Dashboard </a></li>
		<li><a href="<?php echo e(url($pageModule)); ?>"> <?php echo e($pageTitle); ?> </a></li>
		<li class="active"> Form  </li>
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">

	<?php echo Form::open(array('url'=>'mpeserta?return='.$return, 'class'=>'form-horizontal validated','files' => true )); ?>

	<div class="sbox">
		<div class="sbox-title clearfix">
			<div class="sbox-tools " >
				<a href="<?php echo e(url($pageModule.'?return='.$return)); ?>" class="tips btn btn-sm "  title="<?php echo e(__('core.btn_back')); ?>" ><i class="fa  fa-times"></i></a>
			</div>
			<div class="sbox-tools pull-left" >
				<button name="apply" class="tips btn btn-sm btn-apply  "  title="<?php echo e(__('core.btn_back')); ?>" ><i class="fa  fa-check"></i> <?php echo e(__('core.sb_apply')); ?> </button>
				<button name="save" class="tips btn btn-sm btn-save"  title="<?php echo e(__('core.btn_back')); ?>" ><i class="fa  fa-paste"></i> <?php echo e(__('core.sb_save')); ?> </button>
			</div>
		</div>
		<div class="sbox-content clearfix">
	<ul class="parsley-error-list">
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
<div class="col-md-12">
						<fieldset><legend> Modul Pendaftaran Peserta</legend>
				<?php echo Form::hidden('id', $row['id']); ?>

									  <div class="form-group  " >
										<label for="Nama Anak" class=" control-label col-md-4 text-left"> Nama Anak <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='nama_anak' id='nama_anak' value='<?php echo e($row['nama_anak']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Jenis Kelamin" class=" control-label col-md-4 text-left"> Jenis Kelamin <span class="asterix"> * </span></label>
										<div class="col-md-6">


					<input type='radio' name='jenis_kelamin' value ='1' required <?php if($row['jenis_kelamin'] == '1'): ?> checked="checked" <?php endif; ?> class='minimal-red' > LAKI - LAKI

					<input type='radio' name='jenis_kelamin' value ='2' required <?php if($row['jenis_kelamin'] == '2'): ?> checked="checked" <?php endif; ?> class='minimal-red' > PEREMPUAN
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Tempat Lahir" class=" control-label col-md-4 text-left"> Tempat Lahir <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='tempat_lahir' id='tempat_lahir' value='<?php echo e($row['tempat_lahir']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Tanggal Lahir" class=" control-label col-md-4 text-left"> Tanggal Lahir <span class="asterix"> * </span></label>
										<div class="col-md-6">

				<div class="input-group m-b" style="width:150px !important;">
					<?php echo Form::text('tanggal_lahir', $row['tanggal_lahir'],array('class'=>'form-control input-sm date')); ?>

					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Usia" class=" control-label col-md-4 text-left"> Usia <span class="asterix"> * </span></label>
										<div class="col-md-6">

					<?php $usia = explode(',',$row['usia']);
					$usia_opt = array( '5' => '5 TAHUN' ,  '6' => '6 TAHUN' ,  '7' => '7 TAHUN' ,  '8' => '8 TAHUN' ,  '9' => '9 TAHUN' ,  '10' => '10 TAHUN' ,  '11' => '11 TAHUN' ,  '12' => '12 TAHUN' ,  '13' => '13 TAHUN' ,  '14' => '14 TAHUN' , ); ?>
					<select name='usia' rows='5' required  class='select2 '  >
						<?php
						foreach($usia_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['usia'] == $key ? " selected='selected' " : '' ).">$val</option>";
						}
						?></select>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Alamat" class=" control-label col-md-4 text-left"> Alamat <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <textarea name='alamat' rows='5' id='alamat' class='form-control input-sm '
				         required  ><?php echo e($row['alamat']); ?></textarea>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Kota" class=" control-label col-md-4 text-left"> Kota <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='kota' id='kota' value='<?php echo e($row['kota']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Sekolah" class=" control-label col-md-4 text-left"> Sekolah <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='sekolah' id='sekolah' value='<?php echo e($row['sekolah']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Kelas" class=" control-label col-md-4 text-left"> Kelas <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='kelas' id='kelas' value='<?php echo e($row['kelas']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='<?php echo e($row['email']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group  " >
										<label for="Kategori" class=" control-label col-md-4 text-left"> Kategori <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='kategori' id='kategori' value='<?php echo e($row['kategori']); ?>'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div> </fieldset>
			</div>

			

		</div>
	</div>
	<input type="hidden" name="action_task" value="public" />
	<?php echo Form::close(); ?>

	</div>
</div>


   <script type="text/javascript">
	$(document).ready(function() {




		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '<?php echo e(url("mpeserta/removefiles?file=")); ?>'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();
			return false;
		});

	});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>