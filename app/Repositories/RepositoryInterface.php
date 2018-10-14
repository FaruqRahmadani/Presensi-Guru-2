<?php

namespace App\Repositories;

interface RepositoryInterface
{
  /**
  * Method to get all model
  *
  * @return void
  */
  public function all();

  /**
  * Method to get spesific data from a model
  *
  * @return void
  */
  public function where($key, $value);

  /**
  * Method to get a model
  *
  * @param int $id
  * @return void
  */
  public function get($id);

  /**
  * Method to store a model
  *
  * @param array $data
  * @return void
  */
  public function store(array $data);

  /**
  * Method to update a model
  *
  * @param array $data
  * @param int $id
  * @return void
  */
  public function update(array $data, $id);

  /**
  * Method to delete a model
  *
  * @param int $id
  * @return void
  */
  public function delete($id);
}
