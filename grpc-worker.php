<?php

use Grpc\Searcher\SearchInterface;
use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\Worker;

require __DIR__ . '/vendor/autoload.php';

$server = new Server(new \Spiral\RoadRunner\GRPC\Invoker(), [
    'debug' => false, // optional (default: false)
]);

$server->registerService(SearchInterface::class, new App\Searcher());

$server->serve(Worker::create());
