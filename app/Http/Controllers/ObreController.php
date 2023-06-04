<?php

namespace App\Http\Controllers;

use App\Models\Obre;
use App\Models\Account;
use App\Models\Office;
use Illuminate\Http\Request;

class ObreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obres = Obre::simplePaginate(30);
        // $obres = Obre::groupBy('obre_num', 'created_at')
        //     ->select('obre_num', 'created_at', Obre::raw('COUNT(*) as count'))
        //     ->get();

        return view('obre.index', compact('obres'));
    }

    public function fetch(Request $request)
    {
        if($request->get('code'))
        {
            $query = $request->get('code');
            $data = Account::where('acct_code', 'LIKE', "{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:10%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">' .$row->acct_code.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }

        if($request->get('office'))
        {
            $query = $request->get('office');
            $data = Office::where('office_code', 'LIKE', "{$query}%")->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative; width:10%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">' .$row->office_code.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $results = Obre::where('obre_payee', 'LIKE', "%{$searchTerm}%")
        ->orWhere('acct_code', 'LIKE', "{$searchTerm}%")
        ->orWhere('office_code', 'LIKE', "{$searchTerm}")
        ->orWhere('obre_num', 'LIKE', "{$searchTerm}%")
        ->orWhere('obre_amount', 'LIKE', "{$searchTerm}")
        ->get();
        return view('obre.search', compact('results'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obre.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        Obre::create($request->all());
        return redirect('/obre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obre = Obre::findOrFail($id);
        return view('obre.show', compact('obre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $obre = Obre::findOrFail($id);
        return view('obre.edit', compact('obre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $obre = Obre::findOrFail($id)->update($request->all());
        // $obre->update($request->all());
        return redirect('obre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obre = Obre::whereId($id)->delete();
        return redirect('obre');
    }

}
