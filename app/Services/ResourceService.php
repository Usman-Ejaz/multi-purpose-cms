<?php

namespace App\Services;

interface ResourceService
{
    public function getAll();
    public function first($id);
    public function add(array $params);
    public function update($id, array $params);
    public function delete($id);
}