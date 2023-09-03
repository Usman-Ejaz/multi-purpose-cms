<?php

namespace App\Services\Party;

use App\Models\Party;
use App\Services\ResourceService;

class PartyService implements ResourceService
{
    public function getAll() 
    {
        return Party::filter()->select('name', 'phone_number', 'email', 'slug')->paginate(10);
    }

    public function first($id)
    {
        return Party::firstOrFail($id);
    }

    public function add(array $params)
    {
        return Party::create($params);
    }

    public function update($id, array $params)
    {
        return Party::where('id', $id)->update($params);
    }

    public function delete($id)
    {
        
    }
}