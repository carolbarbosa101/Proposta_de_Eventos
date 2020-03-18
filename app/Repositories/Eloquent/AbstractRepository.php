<?php 
    namespace App\Repositories\Eloquent;

    abstract class AbstractRepository{
        
        protected $model;

        function __construct(){
            $this->model = $this->resolveModel();
        }

        public function all(){
            $modelo - app(Secretaria::class);
            return $modelo->all();
        }
        
        protected function resolveModel(){
            return app($this->model);
        }

        public function create(array $data):Bool{
            return (bool) $this->model->create($data);
        }
    }
?>