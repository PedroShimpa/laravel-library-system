<?php

namespace App\Repositories\User;

use App\Models\User\User;
use Illuminate\Support\Facades\Hash;

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

	public function store(array $data)
	{
		$code = now()->timestamp;
		$data['password'] = Hash::make($code);
		return $this->user->store($data);
	}

	public function edit(array $data, int $id)
	{
		return $this->user->edit($data, $id);
	}
}
