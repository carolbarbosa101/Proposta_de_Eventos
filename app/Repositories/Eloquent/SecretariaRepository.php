<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SecretariaRepositoryInterface;
use App\Secretaria;

    class SecretariaRepository extends AbstractRepository implements SecretariaRepositoryInterface{

        protected $model = Secretaria::class;

        

        
    }
?>