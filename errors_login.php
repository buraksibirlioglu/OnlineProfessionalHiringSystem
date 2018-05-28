<?php if(count($errors_login) > 0): ?>

	<div class="error">
		<?php foreach ($errors_login as $error): ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
<?php unset($errors_login);
$errors_login = array(); 
?>