<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller {

	public function index()
	{
		$users = User::orderBy('id', 'desc')->paginate(10);
	}

	public function store(Request $request)
	{
		$user = new User();
		$user->save();
	}

	public function show($id)
	{
		$user = User::findOrFail($id);
	}

	public function update(Request $request, $id)
	{
		$user = User::findOrFail($id);
		$user->save();
	}

	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
	}

    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return [
            	'success' => true,
            ];
        }

        return [
        	'success' => false,
        	'error' => 'Usuario y/o contraseñas incorrectas.'
        ];
    }

	public function logout()
	{
		Auth::logout();
		return redirect('/');
	}
}
