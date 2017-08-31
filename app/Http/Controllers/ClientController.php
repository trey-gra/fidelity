<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;

class ClientController extends Controller
{
    //
    public function index(){
    	return view('clients.index');
    }
    
    public function addClient(Request $request){
    	$client = new \App\client;
    	$client->id = $this->getClientNumber();
    	$client->fname = $request->fname;
    	$client->lname = $request->lname;
    	$client->dob = $request->dob;
    	$client->trn = $request->trn;
    	$client->occ_id = $request->job_id;
    	$client->address1 = $request->address;
    	$client->tel_d = $request->tel1;
    	$client->tel_l = $request->tel2;
    	$client->parish_id = $request->parish_id;
    	$client->save();
    	//Send Message that record has been saved
    	//Redirect to previous page
    }

    public function listClients(){
    	return view('clients.clientList', ['clients' => \App\client::all()]);
    }

    public function editClients($id){
    	$client = \App\client::find($id);
        return view('clients.edit_clientForm',['occ'=>\App\occupation::all(), 'par'=> \App\parish::all(), 'client' => $client]);
    }

    public function update_client(Request $req){
        try {
            $client = \App\client::find($req->clientid);
            $client->fname = $req->fname;
            $client->lname = $req->lname;
            $client->trn = $req->trn;
            $client->DOB = $req->dob;
            $client->tel_d = $req->tel1;
            $client->tel_l = $req->tel2;
            $client->address1 = $req->address;
            $client->occ_id = $req->job_id;
            $client->parish_id = $req->parish_id;
            $client->occ_id = $req->job_id;
            //Update Client records
            $client->update();
            $client = "";
            return view('clients.clientList', ['clients' => \App\client::all()]);
        } catch (Exception $e) {
            
        }
        

    }

    public function viewAddClientForm(){
        //get The 
        $parishes = \App\parish::all();
        $occ = \App\occupation::all();
        return view('clients.clientForm',['occ'=>$occ, 'par'=> $parishes, 'cid' => $this->getClientNumber()]);
    }

    public function getUserDetail(Request $req){
        return response()->json(\App\client::find($req->uid));
    }
    //Private Functions =================================================================================================

    private function getClientNumber(){
     	//get current year 
     	$year = date('Y');
         do{
             $rand = $this->generateRandomString(4);
          }while(!empty(\App\client::where('id',$rand)->first()));
           return $year.$rand;
    }

    private function generateRandomString($length) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
     }
     
    /* private function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
     }*/
}
