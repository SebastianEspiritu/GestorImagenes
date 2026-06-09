<?php
namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getActualizar()
    {
        return view('usuario.actualizar');
    }

    public function postActualizar(UpdateProfileRequest $request)
    {
        $currentUser = Auth::user();
        $newName = $request->name;
        $currentUser->name = $newName;

        if ($request->filled('password')) {
            $currentUser->password = Hash::make($request->password);
        }

        $currentUser->save();

        return redirect()->route('dashboard')->with('success', 'Su perfil ha sido actualizado correctamente.');
    }
}