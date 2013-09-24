<?php echo $this->load->view('admin/header',array('selected'=>'users'));?>

<div id="content">
	<?php echo form_open(current_url())?>
	<?php echo form_hidden('id',$user->id);?>

	<h2>Edit User</h2>

	<p>Edit the selected user by updating the information required below</p>

	<div class="hspacer2"></div>

	<div class="box-940">
		<div class="box-940-header">
			<div class="box-940-header-arrow">
				<img src="/img/admin/box-header-arrow.png"/>
			</div>
			<div class="box-940-header-title">
				<p>Fill in the form below...</p>
			</div>
			<div class="box-940-header-state"></div>
		</div>
		<div class="box-940-content">

			<?php if (validation_errors()): ?>
				<div class="errors">
					<p><strong>The following errors have occurred...</strong></p>
					<?php echo validation_errors(); ?>
				</div>
			<?php endif;?>
			
			<div class="row">
				<div class="label">
					<label for="">Enter New User Name:</label>
				</div>
			</div>
			<div class="row">
				<div class="field">
					<?php echo form_input('username',$user->username);?>
				</div>
			</div>
			
			<div class="hspacer2"></div>
			
			<div class="row">
				<div class="label">
					<label for="">Select User Status:</label>
				</div>
			</div>
			
			<div class="row">
				<div class="field">
					<?php echo form_dropdown('status', array('1'=>'Active','0'=>'Inactive'),$user->status);?>
				</div>
			</div>	
							
		</div>
		
	</div>

	<div class="hspacer2"></div>
	
	<div class="box-940">
	
		<div class="box-940-content">

			<div class="row">
				<input type="submit" value="Edit User"/>&nbsp;<input type="button" onclick="location.href='/index.php/admin/users';" value="Cancel"/>
			</div>		

		</div>

	</div>

	<?php echo form_close()?>
	
</div>

<?php echo $this->load->view('admin/footer');?>