<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\freelanceContract;
use PDF;

class freelanceContractController extends Controller

{
    //
    public function create(){
        return view('form_freelanceContract');
    }
    public function store(Request $request){
        $validateDate = $request->validate([
            'em_name' => 'required|max:255',
            'ep_name' => 'required|max:255',
            'from' => 'required',
            'to' => 'required',
            'wage' => 'required',
            'pb_periode' => 'required',
            'place' => 'required',
            'em_id' => 'required|max:8',
            'job_duty' => 'required',
            'sig_date_em' => 'required',
            'sig_date_ep' => 'required',
            'fixed_period' => '',
            'fixed_period_of' => '',
            'break_partie' => ''
        ]);
        freelanceContract::create($validateDate);
        return redirect('/freelanceContract')->with('success', 'created');
    }
    public function index()
{
        $contracts = freelanceContract::all();
        return view('liste_freelanceContract', compact('contracts'));
}
public function downloadPDF($id) {
    $contract = freelanceContract::find($id);
    $pdf = PDF::loadView('freelancepdf', compact('contract'));
    return $pdf->download('contract_freelance_'.$id.'.pdf');
}
}
