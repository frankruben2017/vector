<?php

namespace Vector\Http\Controllers;

use Illuminate\Http\Request;
use Bican\Roles\Models\Role;
use App\User;



class RolController extends Controller
{
    $adminRole = Role::create([
	'name' => 'Admin',
	'slug' => 'admin',
	'description' => '', // optional
	'level' => 1, // optional, set to 1 by default
]);

    $userRole = Role::create([
	'name' => 'User',
	'slug' => 'user',
	'description' => '', // optional
	'level' => 2, // optional, set to 1 by default
]);

    public function assign_role($iduser,$idrol){

    	$user = User::find($iduser);
    	if ($idrol==1)
    		$user->attachRole(1);
    	else if($idrol==2)
    		$user->attachRole)(2);
    	
    }

}
