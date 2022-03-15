<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\CritterAPI;

class FollowersController extends Controller
{
    private $apiKey = "j4nHNuaPo2nq6AdW";

    public function getFollowers(){

    $followerAPI = new CritterAPI($this->apiKey);

    $followerdata = $followerAPI->getFollowers();

    return view('followers', ['followerdata' => $followerdata->followers]);
    }
}
