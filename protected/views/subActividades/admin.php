<?php
$this->breadcrumbs=array(
	'Sub Actividades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SubActividades','url'=>array('index')),
	array('label'=>'Create SubActividades','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sub-actividades-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sub Actividades</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sub-actividades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_sub_actividades',
		'nb_sub_actividades',
		'id_registro',
		'id_actividades',
		'nb_bd_usuario',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
