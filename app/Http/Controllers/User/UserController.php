<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
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
        if (!empty($update)) {
            return redirect()->back()->with('success', __('Permissões Atualizadas'));
        }
        return redirect()->back()->with('error', __('Erro inesperado ao atualizar permissões'));
    }

    protected function create(Request $request)
    {
        return view('pages.users.create');
    }

    protected function store(CreateUserRequest $request)
    {
        $create = $this->userRepository->store($request->validated());
        if (!empty($create)) {
            return redirect()->route('users.index')->with('success', __('Usuario Criado'));
        }
        return redirect()->route('users.index')->with('error', __('Erro inesperado ao criar Usuario'));
    }

    protected function show(Request $request, $id)
    {
        $user = $this->userRepository->getById($id);
        return view('pages.users.show', compact('user'));
    }

    protected function edit(EditUserRequest $request, $id)
    {
        $updated = $this->userRepository->edit($request->validated(), $id);
        if (!empty($updated)) {
            return redirect()->route('users.index')->with('success', __('Usuario Atualizado'));
        }
        return redirect()->route('users.index')->with('error', __('Erro inesperado ao atualizar Usuario'));
    }
}
