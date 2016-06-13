<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Cache;

class UserController extends Controller {

  public function index() {
    $users = NULL;
    if (Cache::store('memcached')->get('users')) {
      $msg = 'Currently showing data from <b>cache</b><br/>';
      $users = Cache::store('memcached')->get('users');
    } else {
      $msg = 'Currently showing data from <b>database</b><br/>';
      $users = User::all();
      Cache::store('memcached')->put('users', $users, 0.17);
    }
    return view('users.users', compact('users', 'msg'));
  }

}
