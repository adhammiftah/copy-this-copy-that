<?php

namespace App\Http\Controllers;

use App\Models\Clipboard;
use haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ClipboardsController extends Controller
{
    public function index()
    {
        // dd(Clipboard::all());
        return view('clipboards.index');
    }

    public function store(Request $request)
    {
        if (is_null($request->get('custom_id')) == 1) {
            $id = IdGenerator::generate([
                'table' => 'clipboards',
                'length' => 6,
                'prefix' => 'C',
            ]);
        } else {
            $id = $request->get('custom_id');
        }

        $clipboard = new Clipboard();
        $clipboard->id = $id;
        $clipboard->content = $request->get('copies');
        $clipboard->save();

        return redirect('/');
        // return $request->all();
    }

    public function successful(Clipboard $clipboard)
    {
        return view('clipboards.successful', [
            'clipboard'=>$clipboard
        ]);
    }

    public function viewAll()
    {
        dd(Clipboard::all());
    }
}
