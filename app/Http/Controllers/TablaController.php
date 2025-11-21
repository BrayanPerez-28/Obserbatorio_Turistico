<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TablaController extends Controller
{
    /**
     * Muestra el listado de todos los contactos.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Obtiene todos los contactos de la tabla 'contacts' con las columnas id, name, email
        $rows = DB::table('contacts')->select('id','name','email')->get();
        
        // Retorna la vista 'cpanel.js-grid' pasando la variable $rows
        return view('cpanel.js-grid', compact('rows'));
    }

    /**
     * Muestra el formulario para crear un nuevo contacto.
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retorna la vista con el formulario de creación
        return view('cpanel.contacts.create');
    }

    /**
     * Almacena un nuevo contacto en la base de datos.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Valida que el nombre sea obligatorio y el email sea único en la tabla 'contacts'
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150|unique:contacts,email',
        ]);

        // Inserta el nuevo registro en la tabla 'contacts'
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirige al listado con un mensaje de éxito
        return redirect()->route('tabla')->with('success', 'Contacto creado.');
    }

    /**
     * Muestra el formulario para editar un contacto existente.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        // Busca el contacto por ID
        $contact = DB::table('contacts')->where('id', $id)->first();
        
        // Si no existe, redirige al listado con mensaje de error
        if (! $contact) {
            return redirect()->route('tabla')->with('error', 'Registro no encontrado.');
        }
        
        // Retorna la vista de edición pasando el contacto encontrado
        return view('cpanel.contacts.edit', compact('contact'));
    }

    /**
     * Actualiza un contacto existente en la base de datos.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Valida los datos; el email debe ser único excepto para el registro actual (ignora el ID actual)
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150|unique:contacts,email,'.$id,
        ]);

        // Actualiza el registro en la tabla 'contacts'
        DB::table('contacts')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now(),
        ]);

        // Redirige al listado con mensaje de éxito
        return redirect()->route('tabla')->with('success', 'Contacto actualizado.');
    }

    /**
     * Elimina un contacto de la base de datos.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Elimina el registro de la tabla 'contacts' por ID
        DB::table('contacts')->where('id', $id)->delete();
        
        // Redirige al listado con mensaje de éxito
        return redirect()->route('tabla')->with('success', 'Contacto eliminado.');
    }

}
