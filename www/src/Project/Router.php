<?php declare(strict_types=1);
namespace Project;

class Router implements \Framework\RouterInterface {
  public function route(
    string $path,
    string $method
  ): \Framework\ControllerAction {
    return new \Framework\ControllerAction(new Controllers\Home(), 'index');
  }
}
