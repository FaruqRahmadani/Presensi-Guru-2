<?php

namespace App\Repositories;

abstract class Repository implements RepositoryInterface
{
  protected $model;

  /**
  * Method to get all model
  *
  * @return void
  */
  public function all()
  {
    return $this->model::get();
  }

  /**
  * Method to get spesific data from a model
  *
  * @param string $key
  * @param string $value
  * @return void
  */
  public function where($key, $value){
    return $this->model::where($key, $value)->get();
  }

  /**
  * Method to get a model
  *
  * @param int $id
  * @return void
  */
  public function get($id)
  {
    return $this->model::findOrFail($id);
  }

  /**
  * Method to store a model
  *
  * @param array $data
  * @return void
  */
  public function store(array $data)
  {
    return $this->model::create($data);
  }

  /**
  * Method to update a model
  *
  * @param array $data
  * @param int $id
  * @return void
  */
  public function update(array $data, $id)
  {
    $model = $this->get($id);
    $model->update($data);

    return $this->get($id);
  }

  /**
  * Method to delete a model
  *
  * @param int $id
  * @return void
  */
  public function delete($id)
  {
    $model = $this->get($id);
    $model->delete();
  }
}
