<?php

namespace Drupal\chess9ja_custom\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends RouteSubscriberBase {
  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    foreach ($collection->all() as $route_name => $route) {
      if (substr($route_name, 0, 7) === 'vchess.') {
        $path = $route->getPath();
        $path = str_replace('/vchess', '', $path);
        $route->setPath($path);
      }
    }
  }
}