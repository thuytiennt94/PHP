<?php

namespace App\Repositories;

abstract class BaseRepositories implements RepositoriesInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    abstract public function getModel();

    public function all()
    {
        // TODO: Implement all() method.
        return $this->model->all();
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
        $object = $this->model->find($id);

        return $object->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $object = $this->model->find($id);

        return $object->delete();
    }
}
