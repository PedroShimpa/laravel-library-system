<?php

namespace App\Repositories\User;

use App\Models\User\User;

class UserRepository
{

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function getAll($request)
	{
		return $this->user->getAll();
	}

	public function getById($id)
	{
		return $this->user->getById($id);
	}

	public function updatePermissions(array $permissions, $id)
	{
		$user = $this->getById($id);
		return $user->syncPermissions($permissions);
	}
}
