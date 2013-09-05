<?php
class Paise extends AppModel{
    public $displayField = 'nombre';
    
    public $hasMany = array(
		'Conferencista' => array(
			'className' => 'Conferencista',
			'foreignKey' => 'paise_id'			
		)
    );
}
?>
