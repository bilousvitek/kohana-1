
<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_City extends ORM { 
protected $_table_name = 'citys';
    protected $_has_many = array(
        'apartments'         => array(
             'model'         => 'apartment',
             'foreign_key'   => 'city_id',
        )
    );
};
