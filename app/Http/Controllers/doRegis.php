<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class doRegis extends Controller {
    public function register( Request $req) {

        $newUser = new UserModel();
    }
}