<?php
class Conferencista extends AppModel{
    var $belongsTo = array(
        'Paise' => array(
            'className' => 'Paise',
            'foreingKey' => 'paise_id'
        )
    );
}
?>