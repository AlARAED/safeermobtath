<?php

namespace App\Repositories\interfaces;


interface ExperienceRepositoryInterface
{
    public function store(array $inputs,$id);
    // public function getAll(array $inputs);

    // public function get($id);

    public function update(array $inputs, $id);
    public function delete($id);

}
