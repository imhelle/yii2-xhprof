--TEST--
XHProf: Transaction name detecion in layering mode
--FILE--
<?php

function get_query_template($name) {
}

// Test 1: Detection with layers
xhprof_layers_enable(
    array('strlen' => 'db'),
    'get_query_template'
);

get_query_template("home");

echo "Wordpress 1: " . xhprof_transaction_name() . "\n";
$data = xhprof_disable();

// Test 2: Repetition to catch global state errors
xhprof_layers_enable(
    array('strlen' => 'db'),
    'get_query_template'
);
get_query_template("page");

echo "Wordpress 2: " . xhprof_transaction_name() . "\n";
$data = xhprof_disable();

// Test 3: Without any layers defined
xhprof_layers_enable(array(), 'get_query_template');
get_query_template("post");

echo "Wordpress 3: " . xhprof_transaction_name() . "\n";
$data = xhprof_disable();

--EXPECTF--
Wordpress 1: home
Wordpress 2: page
Wordpress 3: post
