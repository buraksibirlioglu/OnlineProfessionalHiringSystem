<?php if(count($errors_register) > 0): ?>

	<div class="error">
		<?php echo count($errors_register) ?>
		<?php foreach ($errors_register as $error): ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
<?php unset($errors_register);
$errors_register = array(); 
?>