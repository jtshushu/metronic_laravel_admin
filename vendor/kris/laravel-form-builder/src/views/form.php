<?php if ($showStart): ?>
<div class="form-body">
<?= Form::open($formOptions) ?>
<?php endif; ?>


<?php if ($showFields): ?>
    <?php foreach ($fields as $field): ?>
    	<?php if( ! in_array($field->getName(), $exclude) ) { ?>
        	<?= $field->render() ?>
		<?php } ?>
    <?php endforeach; ?>
<?php endif; ?>

<?php if ($showEnd): ?>
    <?= Form::close() ?>
    </div>
<?php endif; ?>
