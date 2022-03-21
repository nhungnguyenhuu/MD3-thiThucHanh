<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealerRequest;
use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index()
    {
        $dealers = Dealer::all();
        return view('index', compact('dealers'));
    }

    public function create()
    {
        $statuses = Status::all();
        return view('create', compact('statuses'));
    }

    public function store(DealerRequest $request)
    {
        $dealer = $request->except('_token');
        Dealer::create($dealer);
        return redirect()->route('index');
    }
}
