<?php
$arUrlRewrite=array (
  12 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/About/jobVacancies/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/About/jobVacancies/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/s2/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/services/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/s2/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/products/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/About/News/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/About/News/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/products/index.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/Listings/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/Listings/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/s2/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/news/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
