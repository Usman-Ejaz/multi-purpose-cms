<?php

namespace App\Models\Traits;

use App\Models\Permission;

trait HasRoleAndPermissions
{
    
    public function hasRole(... $roles) : bool
    {
        return $this->roles->whereIn('name', $roles)->count() > 0;
    }

    public function hasPermission( ... $permissions) : bool
    {
        return (bool) $this->permissions->whereIn('slug', $permissions)->count();
    }

    /**
     * The roles that belong to the HasRoleAndPermissions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permissions');
    }

    /**
     * The roles that belong to the HasRoleAndPermissions
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}