<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto; // Asegúrate de importar el modelo correspondiente

class FormularioController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Crea una nueva instancia del modelo Contacto y guarda los datos en la base de datos
        $contacto = new Contacto();
        $contacto->nombre = $request->input('name');
        $contacto->correo = $request->input('email');
        $contacto->telefono = $request->input('phone');
        $contacto->mensaje = $request->input('message');
        $contacto->save();

        // Redirecciona a una página de éxito o muestra un mensaje de éxito
        return redirect()->route('formulario.exito');
        return view('welcomeUsers', compact('alertHistory'));
    }
}
