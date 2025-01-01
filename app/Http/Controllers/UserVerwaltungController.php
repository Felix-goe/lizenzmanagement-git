<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserVerwaltungController extends Controller
{
    // Alle Sekretariate abrufen
    public function getAll()
    {
        $users = User::select('id as id', 'sekretariat_id as SekretariatID', 'name as Name', 'gebaeude as Gebaeude', 'email as Email')->get();
        return response()->json([
            'status' => 200,
            'sekretariate' => $users,
        ]);
    }


    // Neues Sekretariat speichern
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'unique:users, id',
            'Name' => 'required',
            'Gebaeude' => 'required',
            'Email' => 'required|email',
        ]);

        $user = new User();
        $user->id = $request->id;
        $user->sekretariat_id = $request->SekretariatID;
        $user->name = $request->Name;
        $user->gebaeude = $request->Gebaeude;
        $user->email = $request->Email;
        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'Sekretariat erfolgreich hinzugefügt.',
        ]);
    }

    // Sekretariat aktualisieren
    public function update(Request $request)
    {
        $request->validate([
            'SekretariatID' => 'exists:users,sekretariat_id',
            'Name' => 'required',
            'Gebaeude' => 'required',
            'Email' => 'required|email',
        ]);

        $user = User::where('id', $request->id)->first();
        $user->name = $request->Name;
        $user->gebaeude = $request->Gebaeude;
        $user->email = $request->Email;
        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'Sekretariat erfolgreich aktualisiert.',
        ]);
    }

    // Sekretariat löschen
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id', // Stellt sicher, dass die ID vorhanden ist
        ]);

        $user = User::find($request->id); // Findet den Benutzer anhand der ID

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'Sekretariat nicht gefunden.',
            ]);
        }

        $user->delete(); // Löscht den Benutzer

        return response()->json([
            'status' => 200,
            'message' => 'Sekretariat erfolgreich gelöscht.',
        ]);
    }

}

