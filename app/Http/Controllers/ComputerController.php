<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use DB;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = DB::table('computers')->paginate();

        return view('lizenzen_user', [
            'computers' => $computers
        ]);
    }
    
    public function speichern(Request $request)
    {
        $meinComputer = new Computer;
        $meinComputer->computer_id = $request->computerID;
        $meinComputer->bueronummer = $request->bueronummer;
        $meinComputer->save();

        return redirect()->route('lizenz');
    }

    public function löschen(Request $request)
    {
        DB::table('computers')->where('id',$request->computerID)->delete();
        return redirect()->route('lizenz');
    }

}
