--TEST--
XHProf: eval()
--FILE--
<?php

include_once dirname(__FILE__).'/common.php';

xhprof_enable();

eval("strlen('Hello World!');");

$data = xhprof_disable();
print_canonical($data);
--EXPECTF--
main()                                  : ct=       1; wt=*;
main()==>eval::tests/xhprof_026.php(7) : eval()'d code: ct=       1; wt=*;
main()==>xhprof_disable          : ct=       1; wt=*;
main()==>strlen                         : ct=       1; wt=*;
