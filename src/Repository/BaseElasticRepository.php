<?php

namespace Zus1\Elasticsearch\Repository;

use Zus1\Elasticsearch\Query\Builder;
use Illuminate\Support\Facades\App;

class BaseElasticRepository
{
    protected const INDEX = '';

    protected function getBuilder(): Builder
    {
        /** @var Builder $builder */
        $builder = App::make(Builder::class);

        return $builder->forIndex(static::INDEX);
    }
}
