<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lizenz;

class LizenzController extends Controller
{
    // Speichern einer neuen Lizenz
    public function store(Request $request)
    {
        $request->validate([
            'LizenzID' => 'required|string',
            'Lizenzbeginn' => 'required|date',
            'Lizenzende' => 'required|date',
            'Software' => 'required|string',
            'Lizenzstatus' => 'required|string',
            'PCID' => 'required|string', 
        ]);

        Lizenz::create($request->all());

        return response()->json([
            'message' => 'Lizenz erfolgreich hinzugefügt!',
        ]);
    }


    // Abrufen aller Lizenzen
    public function getAll()
    {
        $licenses = Lizenz::all();
        return response()->json([
            'status' => 200,
            'licenses' => $licenses,
        ]);
    }

    // Abrufen einer spezifischen Lizenz
    public function edit($LizenzID)
    {
        $lizenz = Lizenz::where('LizenzID', $LizenzID)->first();
        if ($lizenz) {
            return response()->json([
                'status' => 200,
                'lizenz' => $lizenz,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Lizenz not found',
            ]);
        }
    }

    // Aktualisieren einer Lizenz
    public function update(Request $request, $id)
        {
            $request->validate([
                'Lizenzbeginn' => 'required|date',
                'Lizenzende' => 'required|date',
                'Software' => 'required|string',
                'Lizenzstatus' => 'required|string',
                'PCID' => 'required|string',
            ]);

            $license = Lizenz::find($id);

            if (!$license) {
                return response()->json([
                    'message' => 'Lizenz nicht gefunden.',
                ], 404);
            }

            $license->Lizenzbeginn = $request->Lizenzbeginn;
            $license->Lizenzende = $request->Lizenzende;
            $license->Software = $request->Software;
            $license->Lizenzstatus = $request->Lizenzstatus;
            $license->PCID = $request->PCID;
            $license->save();

            return response()->json([
                'message' => 'Lizenz erfolgreich aktualisiert.',
            ]);
        }



    // Löschen einer Lizenz
    public function delete($LizenzID)
    {
        $lizenz = Lizenz::where('LizenzID', $LizenzID)->first();
        if ($lizenz && $lizenz->delete()) {
            return response()->json(['status' => 200, 'message' => 'Lizenz deleted successfully.']);
        } else {
            return response()->json(['status' => 400, 'message' => 'Failed to delete this license.']);
        }
    }

    public function getByPC($PCID)
    {
        // Annahme: Die Tabelle "lizenz" hat eine Spalte "PCID"
        $licenses = Lizenz::where('PCID', $PCID)->get();

        if ($licenses->isEmpty()) {
            return response()->json([
                'status' => 404,
                'message' => 'No licenses found for this PC',
            ]);
        }

        return response()->json([
            'status' => 200,
            'licenses' => $licenses,
        ]);
    }

    public function viewByPC($PCID)
        {
            $licenses = Lizenz::where('PCID', $PCID)->get();

            return view('licenses.viewByPC', [
                'licenses' => $licenses,
                'PCID' => $PCID
            ]);
        }

}
