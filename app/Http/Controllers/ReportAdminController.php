<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;

class ReportAdminController extends Controller
{
    public function index()
    {
        // Obtener los reportes de alguna manera, por ejemplo, desde la base de datos
        $reportes = Report::all(); // Esto es solo un ejemplo, adapta esto según tu lógica

        return view('admin.reportad', ['reportes' => $reportes]);

    }


    public function eliminarReporte($id)
{
    try {
        $reporte = Report::findOrFail($id); // Encontrar el reporte por su ID
        $reporte->delete(); // Eliminar el reporte

        return redirect()->route('ruta_para_mostrar_reportes')->with('success', 'Reporte eliminado correctamente.');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Hubo un problema al eliminar el reporte.']);
    }
}

    
    
}


