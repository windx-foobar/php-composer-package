<?php

declare(strict_types=1);

namespace WindxFoobar\PhpComposerPackage\Test\Unit;


use PHPUnit\Framework\TestCase;
use WindxFoobar\PhpComposerPackage\Hello;

/**
 * Class HelloTest
 * @package WindxFoobar\PhpComposerPackage\Test\Unit
 */
class HelloTest extends TestCase {

   public function testHello(): void {
      $hello = new Hello('WindX');
      $this->assertSame('Hello, my dear friend WindX', $hello->sayHello());
   }
}
