<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate();
        return UserResource::collection($users);
    }

    public function store(Request $request){
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        return new UserResource($user);
    }

    public function show(string $id){
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function update(Request $request, string $id){
        $user = User::findOrFail($id);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user -> update($data);
        return new UserResource($user);     
    }

    public function destroy(string $id){
        $user = User::findOrFail($id)->delete;

        return response()->json([], 204);
    }
}
