<?php
$this->breadcrumbs=array(
	'Csaxcsas'=>array('index'),
	$model->id_csaxcsa=>array('view','id'=>$model->id_csaxcsa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Csaxcsa','url'=>array('index')),
	array('label'=>'Create Csaxcsa','url'=>array('create')),
	array('label'=>'View Csaxcsa','url'=>array('view','id'=>$model->id_csaxcsa)),
	array('label'=>'Manage Csaxcsa','url'=>array('admin')),
);
?>

<h1>Update Csaxcsa <?php echo $model->id_csaxcsa; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>