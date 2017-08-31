<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsuranceController extends Controller
{
    public function index(){
        return view('insurance.index', ['ins' => \App\ins_company::all()]);
    }

    public function ins_detail($id){
        return view('insurance.ins_detail', ['ins' => \App\ins_company::find($id), 'par'=>\App\parish::all()]);
    }

    public function ins_edit($id){
        return view('insurance.edit_ins', ['ins'=> \App\ins_company::find($id)]);
    }

    public function add_branch(Request $req){
        //dd($req);
        $insBranch = new \App\ins_branch_company;
        $insBranch->ins_co_id = $req->co_id;
        $insBranch->name = $req->p_name;
        $insBranch->address = $req->address;
        $insBranch->tel_1 = $req->tel_1;
        $insBranch->tel_2 = $req->tel_2;
        //Save Branch Record
        $insBranch->save();
        /*return response()->json($req);*/
        return redirect()->route('ins_detail',['id'=>$req->co_id]);
    }

    public function branch_update_form($id, $co_id){
        $insBr = \App\ins_branch_company::find($id);
        return view('insurance.edit_branch', ['dtl'=>$insBr, 'ins_co'=>$co_id]);
    }

     public function branch_update(Request $req){
        //dd($req);
        $brDtl = \App\ins_branch_company::find($req->co_br_id);
        $brDtl->name = $req->p_name;
        $brDtl->address = $req->address;
        $brDtl->tel_1 = $req->tel_1;
        $brDtl->tel_2 = $req->tel_2;
        //Update record
        $brDtl->update();
        //Return to list view
        return redirect()->route('ins_detail',['id'=>$req->co_id]);
    }

    public function ins_update(Request $req){
        $ins = \App\ins_company::find($req->idNo);
        $ins->name = $req->ins_comp;
        $ins->update();
        return redirect()->route('ins_index');
    }

    public function branch_delete($id){
        $insId = \App\ins_branch_company::find($id)->ins_co_id;
        //echo $insId;
        $insBr = \App\ins_branch_company::destroy($id);
        return redirect()->route('ins_detail',['id'=>$insId]);
    }

    public function add_insurer(Request $req){
        $ins = \App\ins_company::firstOrCreate(['name' => $req->co_name]);
    }
}
