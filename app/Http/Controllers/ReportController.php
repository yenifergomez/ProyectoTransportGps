<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Notifications\NuevoReporteNotification;
use Illuminate\Support\Facades\Notification;

class ReportController extends Controller
{
    //

    public function notific(){
        return view('admin.reportar');
    }

    public function crearReporte(Request $request)
    {
        // Validar datos del formulario de reporte
        $request->validate([
            'nombre' => 'required|string',
            'reporte' => 'required|string',
        ]);
    
        try {
            // Intentar crear un nuevo reporte
            $reporte = Report::create([
                'nombre' => $request->nombre,
                'reporte' => $request->reporte,
            ]);
                return back()->with('success', '¡Gracias por Reportar, se tomara en cuenta tu dato!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Hubo un problema al enviar el reporte. Por favor, inténtalo de nuevo.']);
        }
    }
    

    
}
