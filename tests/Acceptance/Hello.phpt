--TEST--
Поздароваться реализацией
--FILE--
<?php

require __DIR__ . '/../../vendor/autoload.php';

$hello = new \WindxFoobar\PhpComposerPackage\Hello('WindX');
echo $hello->sayHello();

?>
--EXPECT--
Hello, my dear friend WindX