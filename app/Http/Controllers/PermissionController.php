<?php

namespace Vector\Http\Controllers;

use Illuminate\Http\Request;
use Bican\Roles\Models\Permission;
use App\User;
use Bican\Roles\Models\Role;


class PermissionController extends Controller
{
    //
    $createUsersPermission = Permission::create([
	'name' => 'Create users',
	'slug' => 'create.users',
	'description' => '', // optional
]);
$deleteUsersPermission = Permission::create([
	'name' => 'Delete users',
	'slug' => 'delete.users',
]);

 public function assign_permission_rol($idrol){

    	$rol = Role::find($idrol);
    	if ($idrol==1){
    		$rol->attachPermission($createUsersPermission);
    		$rol->attachPermission($deleteUsersPermission);
    	}
    	else if($idrol==2)
    		$rol->attachPermission($createUsersPermission);
    }
public function assign_permission_user($user){

    	$rol = Role::find($iduser);
    	$rol->attachPermission($createUsersPermission);
    }


}
