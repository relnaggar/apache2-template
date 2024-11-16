<?php

declare(strict_types=1);

namespace Project;

use Relnaggar\Veloz\{
  AbstractApp,
  Routing\ControllerAction,
};

class App extends AbstractApp
{
  public function route(
    string $path,
    string $method,
  ): ControllerAction {
    return new ControllerAction(Controllers\Home::class, 'index');
  }
}
