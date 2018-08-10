<?php

include_once 'web.php';

function show( $array = array() ) {

    echo '<pre>';
    print_r( $array );
    echo '</pre>';

}

$test = new \WebApplication1\WebService1();

$result = $test->getdatafromextra_adv_t( 'cino1' );

show( $result );