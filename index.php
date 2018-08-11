<?php

include_once 'web.php';
include_once 'web-pg.php';

//phpinfo();

function show( $array = array() ) {

    echo '<pre>';
    print_r( $array );
    echo '</pre>';

}

$test = new \WebApplication1\WebService1();

$result = $test->getdatafromextra_adv_t( 'cino1' );

show( $result );

//
//CREATE TABLE extra_adv_t (did integer, cino varchar(40) );
//
//INSERT INTO weather (did, cino) VALUES (123, 'cino1');
//INSERT INTO weather (did, cino) VALUES (444, 'cino1');
//INSERT INTO weather (did, cino) VALUES (444, 'cino');
//INSERT INTO weather (did, cino) VALUES (444, 'cino5');