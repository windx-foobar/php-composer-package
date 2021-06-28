<?php

declare(strict_types=1);

namespace WindxFoobar\PhpComposerPackage;

/**
 * Class Hello
 *
 * @package WindxFoobar\PhpComposerPackage
 */
class Hello {

   public function __construct(public string $name) {
   }

   public function sayHello(): string {
      return "Hello, my dear friend {$this->name}";
   }
}
