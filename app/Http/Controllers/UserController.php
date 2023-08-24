<?php

namespace App\Http\Controllers;

use App\Action\CreateUser;
use App\Action\CreateUserProfile;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * create user account.
     *
     * @return Array
     */
    public function createUserAccount(UserRequest $request): Array
    {
        DB::beginTransaction();

        try {
            $create_user_action = (new CreateUser([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]))->execute();

            $create_user_profile_action = (new CreateUserProfile([
                'bank' => $request->bank,
                'bank_account_number' => $request->bank_account_number,
            ]))->execute();

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }

        return [
            'user' => $create_user_action,
            'user_profile' => $create_user_profile_action,
        ];
    }
}
