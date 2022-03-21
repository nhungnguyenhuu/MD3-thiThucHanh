<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealerRequest;
use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->search)){
            $dealers = $this->search($request->search);
        }else{

            $dealers = Dealer::all();
        }
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
        return redirect()->route('dealer.index');
    }

    public function delete($id)
    {
       Dealer::destroy($id);
       return redirect()->route('dealer.index');
    }

    public function edit($id)
    {
        $statuses =Status::all();
        $dealer = Dealer::findOrFail($id);
        return view('edit', compact('statuses', 'dealer' ));
    }

    public function update( DealerRequest $request)
    {
        $dealer = $request->except('_token');
        Dealer::create($dealer);
        return redirect()->route('dealer.index');
    }

    public function search($search)
    {

        return Dealer::where('name', 'like', "%$search%")->get();


    }
}
