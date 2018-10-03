<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     *
     * @api             {get} /api/users/logout Logout
     * @apiName         UserLogout
     * @apiDescription  Logout user.
     * @apiGroup        Users
     *
     * @apiExample  {js} Pseudocode example:
     * $http([
     *     method => "POST"
     *     url => "http://{base_url}/api/users/logout",
     *     headers => [
     *         Authorization => Bearer {TOKEN}
     *     ]
     * ]);
     *
     * @apiUse Authorization
     *
     * @apiSuccess {string} message Successful logout message
     */
    /**
     * Logs user out
     * @return bool|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function logout(){

        // If logged in
        if (Auth::check()) {

            // Delete token and return message
            Auth::user()->AauthAccessToken()->delete();
            return response([
                'message' => 'Wylogowano się pomyślnie'
            ]);
        }

        // Something got messy
        return false;
    }


    /**
     * @api {get} api/users/:user_id My profile
     *
     * @apiName         ShowMeMyself
     * @apiDescription  Get current user details
     * @apiGroup        Users
     * @apiUse          Response
     * @apiUse          Authorization
     *
     * @apiSuccess {object}     data.user           Data about user
     */
    /**
     * Gets data for authenticated user
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function showCurrentUser(){
        $user = Auth::user();

        return response([
            'message' => 'Pomyślnie pobrano aktualnie zalogowanego użytkownika',
            'data' => [
                'user' => $user
            ]
        ]);
    }
}
