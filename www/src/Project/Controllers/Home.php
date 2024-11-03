<?php declare(strict_types=1);
namespace Project\Controllers;

use \Framework\Controllers\AbstractController;
use \Framework\Views\Page;

class Home extends AbstractController {
  public function index(): Page {
    return $this->getPage(
      __FUNCTION__,
      [
        'title' => 'Home',
        'metaDescription' => 'This is the home page.'
      ]
    );
  }
}
