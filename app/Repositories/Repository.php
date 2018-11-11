<?php

namespace App\Repositories;

use Illuminate\Contracts\Encryption\DecryptException;

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
    return $this->model::where($key, $value);
  }

  /**
  * Method to get a model
  *
  * @param int $id
  * @return void
  */
  public function get($id)
  {
    try {
      $id = decrypt($id);
    } catch (DecryptException $e) {
      //
    }
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
  public function update($id, array $data)
  {
    try {
      $id = decrypt($id);
    } catch (DecryptException $e) {
      //
    }
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
    try {
      $id = decrypt($id);
    } catch (DecryptException $e) {
      //
    }
    $model = $this->get($id);
    $model->delete();
  }
}
