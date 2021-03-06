<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

$this->extend('_global.html');

?>
<?php $this->block('style'); ?>
	<link rel="stylesheet" href="<?php echo $data->uri['media.path']; ?>css/acme/page.css" />
	<style>
		.reset-form {
			margin: 80px 0;
		}
	</style>
<?php $this->endblock(); ?>

<?php $this->block('page_title'); ?>Reset Password<?php $this->endblock(); ?>

<?php $this->block('content'); ?>
	<div class="container">
		<div class="row reset-form">
			<div class="col-md-6 col-md-offset-3">
				<form action="<?php echo $data->router->html('reset', array('task' => 'reset')); ?>" class="form-horizontal" method="post">
					<fieldset>
						<legend>Reset Password</legend>
						<?php echo \Windwalker\Core\Frontend\Bootstrap::renderFields($data->form->getFields(), 'col-md-4', 'col-md-8'); ?>

						<div class="buttons col-md-offset-3">
							<p>
								<button class="btn btn-primary" type="submit">Confirm</button>
							</p>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
<?php $this->endblock(); ?>