<?php

namespace App\Repositories\interfaces;


interface TeacherDepartmentRepositoryInterface
{
    public function store(array $inputs);
    // public function getAll(array $inputs);

    // public function get($id);

    public function update(array $inputs, $id);
    public function delete($id);

}
