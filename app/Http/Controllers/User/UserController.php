<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\UsefulRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;
    protected $usefulRepository;

    public function __construct(UserRepository $userRepository, UsefulRepository $usefulRepository)
    {
        $this->middleware('auth');
        $this->middleware(['permission:users']);
        $this->userRepository = $userRepository;
        $this->usefulRepository = $usefulRepository;
    }

    protected function index(Request $request)
    {
        $users = $this->userRepository->getAll($request);
        return view('pages.users.index', compact('users'));
    }

    protected function permissions(Request $request, $id)
    {
        $user = $this->userRepository->getById($id);
        $permissions = $this->usefulRepository->getAllPermissions();
        return view('pages.users.permissions', compact('permissions', 'user'));
    }


    protected function updatePermissions(Request $request, $id)
    {
        $update = $this->userRepository->updatePermissions($request->only('permission'), $id);
        if(!empty($update)) 
        {
            return redirect()->back()->with('success', __('Permissões Atualizadas'));
        }
        return redirect()->back()->with('error', __('Erro inesperado ao atualizar permissões'));

    }
}
