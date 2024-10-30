<?php declare(strict_types=1);
namespace Project\Controllers;

class Home extends \Framework\AbstractController {
  public function index(): \Framework\Page {
    return $this->get_page(
      __FUNCTION__,
      [
        'title' => 'Home',
        'metaDescription' => 'This is the home page.'
      ]
    );
  }
}
