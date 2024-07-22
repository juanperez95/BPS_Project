<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterUsersController extends Controller
{
    /**
     * Muestra una lista de usuarios filtrada por un texto de búsqueda.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtener el texto de búsqueda y limpiar espacios en blanco
        $texto = trim($request->get('texto'));

        // Realizar consulta a la base de datos para obtener usuarios filtrados
        $user = DB::table('users')
            ->select('typeDoc', 'document', 'name', 'last_name', 'phone', 'email', 'id_rol')
            ->where('last_name', 'LIKE', '%' . $texto . '%')
            ->orWhere('name', 'LIKE', '%' . $texto . '%')
            ->orWhere('typeDoc', 'LIKE', '%' . $texto)
            ->orWhere('document', 'LIKE', '%' . $texto . '%')
            ->orderBy('document', 'asc')
            ->paginate(10);

        // Retornar la vista 'User.index' con los usuarios y el texto de búsqueda
        return view('User.index', compact('user', 'texto'));
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retornar la vista 'Admin.RegisterUsers' para crear un nuevo usuario
        return view('Admin.RegisterUsers');
    }

    /**
     * Almacena un nuevo usuario en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate([
          //  'Usuario' => 'required|string|max:255',
            //'Email' => 'required|string|email|max:255|unique:users,email',
            //'Contraseña' => 'required|string|min:8|confirmed',
            //'Email confirmacion' => 'required|string|email|max:255|same:Email',
        //]);

        // Crear un nuevo objeto User y asignar los valores del formulario
        $user = new User();
        $user->name = $request->input('Usuario');
        $user->email = $request->input('Email');
        $user->email_verified_at = $request->input('Email confirmacion');
        $user->password = Hash::make($request->input('Contraseña'));

        // Guardar el nuevo usuario en la base de datos
        $user->save();

        // Redirigir a la vista de inicio de sesión
        return view('auth.login');
    }

    public function edit($document)
    {
        $user = User::findOrFail($document);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $document)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'last_name' => 'required|string|min:5|max:50',
            'email' => 'required|email|min:10|max:75',
            'phone' => 'required|numeric|min:10|max:10',
            'password' => 'required|min:7|max:100',
            'password_confirm' => 'required|same:password',
        ], [
            'name.string' => 'No introduzca números',
            'name.required' => 'Obligatorio',
            'name.min' => 'Escriba mínimo 2 caracteres',
            'name.max' => 'Supera el límite de caracteres',
            'last_name.string' => 'No introduzca números',
            'last_name.required' => 'Obligatorio',
            'last_name.min' => 'Escriba mínimo 2 caracteres',
            'last_name.max' => 'Supera el límite de caracteres',
            'email.email' => 'No es válido como correo',
            'email.required' => 'Obligatorio',
            'email.min' => 'Escriba mínimo 2 caracteres',
            'email.max' => 'Supera el límite de caracteres',
            'phone.numeric' => 'No introduzca letras',
            'phone.required' => 'Obligatorio',
            'phone.min' => 'Escriba mínimo 2 caracteres',
            'phone.max' => 'Supera el límite de caracteres',
            'password.required' => 'Obligatorio',
            'password.min' => 'Escriba mínimo 2 caracteres',
            'password.max' => 'Supera el límite de caracteres',
        ]);

        $user = User::findOrFail($document);
        $user->typeDoc = $request->input('typeDoc');
        $user->document = $request->input('document');
        $user->id_rol = $request->input('type_user');
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy($document)
    {
        $user = User::findOrFail($document);
        $user->delete();
        return redirect()->route('user.index');
    }
}