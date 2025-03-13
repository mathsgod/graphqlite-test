<?php

use Controller\RootController;
use GraphQL\Error\DebugFlag;
use League\Container\Container;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;
use TheCodingMachine\GraphQLite\SchemaFactory;

require_once __DIR__ . '/vendor/autoload.php';

//psr16
$cache = new Psr16Cache(new FilesystemAdapter());

//container
$container = new Container();
$container->add(RootController::class);


$factory = new SchemaFactory($cache, $container);
$factory->addNamespace('Controller');

$factory->devMode();

$schema = $factory->createSchema();

$result = GraphQL\GraphQL::executeQuery($schema, '{ test }');

print_r($result->toArray(DebugFlag::INCLUDE_DEBUG_MESSAGE | DebugFlag::INCLUDE_TRACE));
