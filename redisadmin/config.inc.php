<?php
include 'config.sample.inc.php';

$config['servers'] = array();

$config['servers'][] = array(
  'name'   => "mini-news-redis",
  'host'   => "mini-news-redis",
  'port'   => "6379",
  'filter' => '*',
  'auth'   => 'rd3Redis',
);