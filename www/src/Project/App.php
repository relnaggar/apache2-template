<?php declare(strict_types=1);
namespace Project;

use \Framework\AbstractApp;
use \Framework\Routing\ControllerAction;

class App extends AbstractApp {
  public function route(
    string $path,
    string $method
  ): ControllerAction {
    return new ControllerAction(new Controllers\Home(), 'index');
  }
}
