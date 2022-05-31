<?php

namespace App\Http\Controllers;

use App\Models\Clipboard;
use haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ClipboardsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('clipboards.create');
    }

    public function store(Request $request)
    {
        if (is_null($request->get('id')) == true) {
            $id = IdGenerator::generate([
                'table' => 'clipboards',
                'length' => 6,
                'prefix' => 'C',
            ]);
        } else {
            request()->validate([
                'id' => ['required', 'min:6', 'max:6', 'unique:clipboards'],
            ]);

            $id = $request->get('id');
        }

        $clipboard = new Clipboard();
        $clipboard->id = $id;
        $clipboard->content = $request->get('copies');
        $clipboard->save();

        $host = request()->getHttpHost();
        return view('clipboards.successful', [
            'clipboard'=>$clipboard,
            'host'=>$host,
        ]);
    }

    public function show(Clipboard $clipboard)
    {
        $host = request()->getHttpHost();
        return view('clipboards.show', [
            'clipboard'=>$clipboard,
            'host'=>$host,
        ]);
    }
}
