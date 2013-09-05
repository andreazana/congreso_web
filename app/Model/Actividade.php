<?php
class Actividade extends AppModel{
    var $belongsTo = array(
        'Ubicacione' => array(
            'className' => 'Ubicacione',
            'foreingKey' => 'ubicacione_id'
        ),
        'TipoActividade' => array(
            'className' => 'TipoActividade',
            'foreingKey' => 'tipo_actividade_id'
        ),
        'Conferencista' => array(
            'className' => 'Conferencista',
            'foreingKey' => 'conferencista_id'
        )
    );    
    
}
?>
