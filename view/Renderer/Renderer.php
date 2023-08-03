<?php

require __DIR__ . '/../vendor/autoload.php';

$renderer = new Laminas\View\Renderer\PhpRenderer();

$urlHelper = new Laminas\View\Helper\Url();
$renderer->getHelperPluginManager()->setService('url', $urlHelper);

$currentUrl = $renderer->url(null, ['force_canonical' => true]);

?>