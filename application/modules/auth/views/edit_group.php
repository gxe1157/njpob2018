<div class='row'>
<div class="col-md-4 col-md-offset-4"> 

  <div id="infoMessage"><?php echo $message;?></div>

	<h1><?php echo lang('edit_group_heading');?></h1>
	<p><?php echo lang('edit_group_subheading');?></p>

	<div id="infoMessage"><?php echo $message;?></div>

	<?php echo form_open(current_url());?>

	      <p>
	            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
	            <?php echo form_input($group_name);?>
	      </p>

	      <p>
	            <?php echo lang('edit_group_desc_label', 'description');?> <br />
	            <?php echo form_input($group_description);?>
	      </p>

	  <p><a class="btn btn-default" href="<?= base_url('auth/index') ?>" role="button">Cancel</a>
    	<?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-success"');?>
      </p>

	<?php echo form_close();?>

</div>
</div>
