<?php

namespace App\Repositories\User;

use App\Models\User\User;

class UserRepository {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}
}
