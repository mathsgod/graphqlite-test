<?php

namespace Controller;

use TheCodingMachine\GraphQLite\Annotations\Query;

class  RootController
{
    #[Query]
    public function test(): string
    {
        return "Hello, World!";
    }
}
