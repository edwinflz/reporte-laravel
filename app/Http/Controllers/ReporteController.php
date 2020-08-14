<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PDF;

class ReporteController extends Controller
{
    public function crearReportePrimero(Request $request)
    {
        $name = $request->get('buscador');
        $fecha = $request->get('fecha');
        $opcion = $request->get('opcion');

        // Users de tipo vendedor
        // Total de users tipo vendedor

        if ($opcion === 'pdf') {
            $users = User::has('perfilvendedor')->name($name)->createdAt($fecha)->get();
            view()->share('users', $users);
            $pdf = PDF::loadView('pdf_view', $users);
            return $pdf->download('pdf_file.pdf');
        }

        $users = User::has('perfilvendedor')->name($name)->createdAt($fecha)->paginate(10);
        $total_vendedores = $users->total();

        return view('index', compact('users', 'total_vendedores', 'name', 'fecha'));
    }

}
