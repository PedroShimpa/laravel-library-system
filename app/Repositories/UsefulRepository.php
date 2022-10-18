<?php

namespace App\Repositories;
use Spatie\Permission\Models\Permission;


class UsefulRepository
{

	public function getAllPermissions()
	{
		return Permission::all()->toArray();
	}
}
