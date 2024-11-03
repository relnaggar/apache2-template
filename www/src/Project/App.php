<?php declare(strict_types=1);
namespace Project;

use \Framework\Routing\ControllerAction;

class App implements \Framework\AppInterface {
  public function route(
    string $path,
    string $method
  ): ControllerAction {
    return new ControllerAction(new Controllers\Home(), 'index');
  }
}
