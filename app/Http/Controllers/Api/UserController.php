<?php

namespace App\Http\Controllers\Api;

use App\Actions\Admin\{AdminCreatesUser, AdminUpdatesUser};
use App\Http\Controllers\Controller;
use App\Http\Requests\User\{StoreRequest, UpdateRequest};
use App\Http\Resources\{UserCollection, UserResource};
use App\Models\User;
use Illuminate\Http\{Request, Response};

class UserController extends Controller
{
    public function index(Request $request): UserCollection
    {
        $users = User::query()->get();

        return new UserCollection($users);
    }

    public function store(StoreRequest $request, AdminCreatesUser $creates): UserResource
    {
        $user = $creates->execute($request->validated());

        return new UserResource($user);
    }

    public function show(Request $request, User $user): UserResource
    {
        return new UserResource($user);
    }

    public function update(UpdateRequest $request, User $user, AdminUpdatesUser $updates): UserResource
    {
        $user = $updates->execute($user, $request->validated());

        return new UserResource($user);
    }

    public function destroy(Request $request, User $user): Response
    {
        $user->delete();

        return response()->noContent();
    }
}
