<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaimController extends Controller
{
    //
    public function index(){
    	//Shows Claim dashboard
    	return view('claims.index');
    }

    public function createClaim(){
    	return view('claims.add_claim', ['claim_id' => $this->getClaimNumber(), 'client' => \App\client::orderBy('lname')->get(), 'insCo' => \App\ins_company::all()]);
    }

    public function listClaim(){
        return view('claims.claimList', ['list' => \App\claim::all()]);
    }

    public function claimTest(){
        $ins = \App\ins_company::find(1);
        //echo $ins->branch;
        foreach ($ins->branch as $value) {
            echo $value.'<br>';
        }
    }

    public function saveClaim(Request $req){
        //Create Claim object
        try {
            $claim = new  \App\claim;
            $claim->claim_id = $req->claim_no;
            $claim->client_id = $req->c_id;
            $claim->negPtyId = $req->neg_pty_id;
            $claim->claim_type = $req->claim_type;
            $claim->acc_date = $req->acc_date;
            $claim->acc_time = $req->acc_time;
            $claim->acc_area = $req->acc_area;
            $claim->c_status = $req->status;
            $claim->acc_detail = $req->acc_detail;
            $claim->parish_id =$req->acc_parish;
            $claim->station_id = $req->station_id;
            $claim->inv_officer = $req->inv_off;
            //Insurance Details -- Client --
            $claim->cInsCoId = $req->insurance_br;
            $claim->cPolType = $req->insurance_pol_type;
            $claim->cPolNum = $req->policy_no;
            $claim->cPolStartDate = $req->pol_s_date;
            $claim->cPolEndDate = $req->pol_e_date;
            //Insurance Details -- Negligent Party  --
            $claim->nInsCoId = $req->negparty_insurance_br;
            $claim->nPolType = $req->negparty_insurance_pol_type;
            $claim->nPolNum = $req->negparty_policy_no;
            $claim->nPolStartDate = $req->negparty_s_date;
            $claim->nPolEndDate = $req->negparty_e_date;
            $claim->save();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
    public function updateClaim(Request $req){
        $claim = \App\claim::where('claim_id', $req->claim_no)->first();
        if($claim!=null){//dd($claim);
            $claim->claim_id = $req->claim_no;
            $claim->client_id = $req->c_id;
            $claim->negPtyId = $req->neg_pty_id;
            $claim->claim_type = $req->claim_type;
            $claim->acc_date = $req->acc_date;
            $claim->acc_time = $req->acc_time;
            $claim->acc_area = $req->acc_area;
            $claim->c_status = $req->status;
            $claim->acc_detail = $req->acc_detail;
            $claim->parish_id =$req->acc_parish;
            $claim->station_id = $req->station_id;
            $claim->inv_officer = $req->inv_off;
            //Insurance Details -- Client --
            $claim->cInsCoId = $req->insurance_br;
            $claim->cPolType = $req->insurance_pol_type;
            $claim->cPolNum = $req->policy_no;
            $claim->cPolStartDate = $req->pol_s_date;
            $claim->cPolEndDate = $req->pol_e_date;
            //Insurance Details -- Negligent Party  --
            $claim->nInsCoId = $req->negparty_insurance_br;
            $claim->nPolType = $req->negparty_insurance_pol_type;
            $claim->nPolNum = $req->negparty_policy_no;
            $claim->nPolStartDate = $req->negparty_s_date;
            $claim->nPolEndDate = $req->negparty_e_date;
            $claim->update(); 
            //Return to edit claim section
            $claim = ""; //Re-caching the claim variable
            $claim = \App\claim::where('claim_id', $req->claim_no)->first();
             return view('claims.edit_claim',['claim' => $claim, 'files' => $this->getClaimFiles($req->claim_no)]);
        }
        
    }


    public function getInsuranceBranch(Request $req){
        $temp = \App\ins_company::find($req->id)->branch;
        return response()->json($temp);
    }

//===============================Private Functions ====================================
     private function getClaimNumber(){
     	//get current year 
     	$year = date('Y');
         do{
             $rand = $this->generateRandomString(5);
          }while(!empty(\App\claim::where('claim_id',$rand)->first()));
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

    public function uploadFiles(Request $r){
        //dd($r);
        $path = 'files/';
        $claim_folder = $path.$r->claim_id;
        
        if($_FILES['f']['name'] > 0){
            if(!file_exists($claim_folder)){
                mkdir($claim_folder);
            }    
            //$tmp_name = $_FILES['f']['tmp_name'][0];
            foreach ($_FILES['f']['error'] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $temp_name = $_FILES['f']['tmp_name'][$key];

                    $name = basename($_FILES['f']['name'][$key]);
                    move_uploaded_file($temp_name, $claim_folder.'/'.$name);
                    //
                }else{
                    echo "File Not Saved";
                }
            }
        }
    }

    public function edit_claim_form(){
        return view('claims.find_claim');
    }

    public function find_claim(Request $r){
        if($r->claim_no){
            $claim = \App\claim::where('claim_id', '=', $r->claim_no)->first();
            if(isset($claim)){
                return view('claims.edit_claim',['claim' => $claim, 'files' => $this->getClaimFiles($r->claim_no)]);
            }else{
                echo "No claim Found";
            }
        }elseif ($r->name != "" || $r->trn != "") {
            //Fins claim based on name
            if ($r->name != "") {
                $ins_name = explode(" ", $r->name);
                $ds = $this->getCleintName($ins_name);
                if(isset($ds)){ //Finding client information based on name provided
                    if(count($ds) == 1){
                        $claim = \App\claim::where('client_id', '=', $ds->id)->get();
                        $claim = $claim->reject(function($claim){
                            return $claim->c_status < 3;
                        });
                    if(isset($claim)){//If claim result was found
                        return view('claims.search_list',['claims' => $claim]);
                    }
                    }else{
                        //Error page
                       return view('claims.search_client', ['users'=>$ds]);
                    }
                }else{
                    echo "No records found";
                }
            }elseif ($r->trn != "") {//Checking if the criteria entered is the Client TRN
                $ds = $this->getCleintName($r->trn);
                if(isset($ds)){
                    $claim = \App\claim::where('client_id', '=', $ds->id)->where('c_status', '<', 3)->get();
                    if(isset($claim)){//Checking if claim result were found
                        return view('claims.search_list',['claims' => $claim]);
                    }
                }else{
                     echo "Search for claims by using client TRN not successful";
                }
            }
        }elseif ($r->s_date != "" && $r->e_date != "") {
            $claim = \App\claim::whereBetween('acc_date', [$r->s_date, $r->e_date])->get();
            if(isset($claim)){
                return view('claims.search_list',['claims' => $claim]);
            }else{
                echo "No claim active claim Record(s) found matching the dates you provided";
            }
        }
    }

    public function file_form($id){
        
        return view('claims.upload_file', ['claim_id' => $id]);
    }

    public function find_claim_id($claim_id){
         return view('claims.edit_claim',['claim' => \App\claim::where('claim_id', $claim_id)->first(), 
            'files' => $this->getClaimFiles($claim_id)]);
    }

    public function find_claim_user($user_id){
        //List alll the claims based on client 
        $claim = \App\claim::where('client_id', '=', $user_id)->get();

        $filter= $claim->filter(function($claim){
            return $claim->c_status < 3;
        });
        if(isset($filter)){
            return view('claims.search_list',['claims' => $filter]);
        }
    }

    private function getClaimFiles($claimId){
        $fileArray = array();
        $path = 'files/'.$claimId;
        if(file_exists($path))
            $fileArray =array_slice(scandir($path), 2);
        
        return $fileArray;
    }

    private function getCleintName($value){
            if(is_array($value)){
                if(count($value) < 3){
                //Get name from list
                    $client = \App\client::where('fname', 'like', '%'.$value[0].'%')->where('lname', 'like', '%'.$value[1].'%')->get();
                        return $client;
                }elseif (count($name) == 3) {
                    $client = \App\client::where('fname', 'like', '%'.$value[0].'%')->where('mname', 'like', $value[1])->where('lname', 'like', '%'.$value[2].'%')->get();
                    return $client;
                }
            }else{
                $client =  \App\client::where('trn', '=', $value)->first();
                return $client;
            }
        }


        
    /*private function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }*/
}
