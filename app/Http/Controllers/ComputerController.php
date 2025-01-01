<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'PCID' => 'required|string|max:255|unique:computer,PCID', // PCID muss eindeutig sein
            'Büronummer' => 'required|string|max:255',
        ]);

        Computer::create($validatedData);

        return response()->json(['status' => 200, 'message' => 'Computer successfully added']);
    }

    public function getall()
    {
        // Nur relevante Felder aus der Datenbank abrufen
        $computers = Computer::select('PCID', 'Büronummer')->get();

        return response()->json([
            'status' => 200,
            'computers' => $computers
        ]);
    }

    public function edit($PCID)
    {
        $computer = Computer::where('PCID', $PCID)->first();
        if ($computer) {
            return response()->json([
                'status' => 200,
                'computer' => $computer
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Computer not found'
            ]);
        }
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'PCID' => 'required|string|max:255', // PCID bleibt unverändert
            'Büronummer' => 'required|string|max:255',
        ]);

        $computer = Computer::where('PCID', $request->PCID)->first(); // Suche nach PCID
        if ($computer) {
            $computer->update($validatedData); // Aktualisiere die Daten
            return response()->json([
                'status' => 200,
                'message' => 'Computer updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Computer not found'
            ]);
        }
    }

    public function delete(Request $request)
    {
        $computer = Computer::where('PCID', $request->PCID)->first(); // Suche nach PCID
        if ($computer && $computer->delete()) {
            return response()->json(['status' => 200, 'message' => 'Computer deleted successfully.']);
        } else {
            return response()->json(['status' => 400, 'message' => 'Failed to delete the computer.']);
        }
    }

}