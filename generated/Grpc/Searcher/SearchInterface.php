<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: proto/searcher.proto

namespace Grpc\Searcher;

use Spiral\RoadRunner\GRPC;

interface SearchInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "search.Search";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param SearchRequest $in
    * @return SearchResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function hello(GRPC\ContextInterface $ctx, SearchRequest $in): SearchResponse;
}
