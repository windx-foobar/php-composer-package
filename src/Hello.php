<?php

declare(strict_types=1);

namespace WindxFoobar\PhpComposerPackage;

/**
 * Class Hello
 *
 * @property-read string $test
 *
 * @package WindxFoobar\PhpComposerPackage
 */
class Hello {
   private string $test;

   public function __construct() {
      echo 'hello world';
   }

   public function __get(string $name): string {
      return $this->$name;
   }

   public function main(): string {
      return $this->test;
   }
}
