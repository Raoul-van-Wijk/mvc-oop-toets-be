<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RichestPeople;

class RichestPeopleController extends Controller
{
    public function index()
    {
        $richestPeople = RichestPeople::orderBy('Networth', 'desc')->get();
        return view('richestpeople.index', ['richestPeople' => $richestPeople]);
    }

    public function delete($id)
    {
        $person = RichestPeople::where('id' ,'=', $id)->delete();
        return redirect('/richestpeople')->with('message', 'record is succesvol verwijderdgit');
    }
}
