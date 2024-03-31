<?php

namespace App;

use Spiral\RoadRunner\GRPC;
use Grpc\Searcher\SearchInterface;
use Grpc\Searcher\SearchResponse;
use Grpc\Searcher\SearchRequest;


final class Searcher implements  SearchInterface {
    public function hello(GRPC\ContextInterface $ctx, SearchRequest $in): SearchResponse {
        return new SearchResponse(['result' => $in->getMessage()]);
    }
}