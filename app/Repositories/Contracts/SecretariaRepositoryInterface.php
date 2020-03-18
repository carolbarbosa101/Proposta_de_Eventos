<?php
    namespace App\Repositories\Contracts;
    use App\Repositories\Contracts\SecretariaRepositoryInterface ;

    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Pagination\LenghtAwarePaginator;

    interface SecretariaRepositoryInterface{
        public function all();

        // public function create(array $data):Bool;
    }
?>