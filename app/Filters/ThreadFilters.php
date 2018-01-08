<?php

namespace App\Filters;

use App\User;

class ThreadFilters extends Filters
{
    protected $filters = ['by'];

    public function by($username)
    {
        $user = User::where('name', $username)->firstOrFail();

        $this->builder->where('user_id', $user->id);
    }
}