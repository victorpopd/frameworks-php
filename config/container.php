<?php

$builder = new DI\ContainerBuilder();
$builder->useAnnotations(true);
$builder->addDefinitions(__DIR__ . '/containers/classes.php');

$container = $builder->build();
