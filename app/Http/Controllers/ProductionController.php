<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Marriage;
use App\Models\Education;
use App\Models\Profession;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Family_Relationship;
use App\Models\History;
use Illuminate\Support\Facades\Http;


class ProductionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $JENIS_KLMIN    = Gender::all();
        $STAT_HBKEL     = Family_Relationship::all();
        $STATUS_KAWIN   = Marriage::all();
        $PDDK_AKH       = Education::all();
        $JENIS_PKRJN    = Profession::all();
        $PROP_NAME      = DB::table('location')
                          ->select(DB::raw('DISTINCT NO_PROP,NAMA_PROP'))->get();
        
        return view('dukcapil.production', ['JENIS_KLMIN' => $JENIS_KLMIN, 
                                     'STAT_HBKEL' => $STAT_HBKEL, 
                                     'STATUS_KAWIN' => $STATUS_KAWIN, 
                                     'PDDK_AKH' => $PDDK_AKH, 
                                     'JENIS_PKRJN' => $JENIS_PKRJN,
                                     'PROP_NAME' => $PROP_NAME]);
    }

    public function cariKabupatenKota(Request $request){
        $NAMA_KAB   = DB::table('location')
                      ->select(DB::raw('DISTINCT NO_KAB,NAMA_KAB'))
                      ->where('NAMA_PROP',$request->NAMA_PROP)->take(100000)->get();
        return response()->json($NAMA_KAB);
    }
    
    public function cariKecamatan(Request $request){
        $NAMA_KEC   = DB::table('location')
                      ->select(DB::raw('DISTINCT NO_KEC,NAMA_KEC'))
                      ->where('NAMA_PROP',$request->NAMA_PROP)
                      ->where('NAMA_KAB',$request->NAMA_KAB)->take(100000)->get();
        return response()->json($NAMA_KEC);
    }
    
    public function cariKelurahan(Request $request){
        $NAMA_KEL   = DB::table('location')
                      ->select(DB::raw('DISTINCT NO_KEL,NAMA_KEL'))
                      ->where('NAMA_PROP',$request->NAMA_PROP)
                      ->where('NAMA_KAB',$request->NAMA_KAB)
                      ->where('NAMA_KEC',$request->NAMA_KEC)->take(100000)->get();
        return response()->json($NAMA_KEL);
    }

    public function updateLokasi(Request $request){
        $updateLok  = DB::table('location')
                      ->select(DB::raw('DISTINCT *')) 
                      ->where('NAMA_PROP',$request->NAMA_PROP)
                      ->where('NAMA_KAB',$request->NAMA_KAB)
                      ->where('NAMA_KEC',$request->NAMA_KEC)
                      ->where('NAMA_KEL',$request->NAMA_KEL)
                      ->get();
        return response()->json($updateLok);
    }

    public function postHistory(Request $request){
        $history = new History;
        $history->NIK                       = $request['NIK'];
        $history->NO_KK                     = $request['NO_KK'];
        $history->NAMA_LGKP                 = $request['NAMA_LGKP'];
        $history->JENIS_KLMIN               = $request['JENIS_KLMIN'];
        $history->TMPT_LHR                  = $request['TMPT_LHR'];
        $history->TGL_LHR                   = $request['TGL_LHR'];
        $history->STAT_HBKEL                = $request['STAT_HBKEL'];
        $history->STATUS_KAWIN              = $request['STATUS_KAWIN'];
        $history->PDDK_AKH                  = $request['PDDK_AKH'];
        $history->JENIS_PKRJN               = $request['JENIS_PKRJN'];
        $history->NAMA_LGKP_IBU             = $request['NAMA_LGKP_IBU'];
        $history->ALAMAT                    = $request['ALAMAT'];
        $history->NO_PROP                   = $request['NO_PROP'];
        $history->NO_KAB                    = $request['NO_KAB'];
        $history->NO_KEC                    = $request['NO_KEC'];
        $history->NO_KEL                    = $request['NO_KEL'];
        $history->PROP_NAME                 = $request['PROP_NAME'];
        $history->KAB_NAME                  = $request['KAB_NAME'];
        $history->KEC_NAME                  = $request['KEC_NAME'];
        $history->KEL_NAME                  = $request['KEL_NAME'];
        $history->NO_RW                     = $request['NO_RW'];
        $history->NO_RT                     = $request['NO_RT'];
        $history->TRESHOLD                  = $request['TRESHOLD'];
        $history->USER_ID                   = $request['USER_ID'];
        $history->PASSWORD                  = $request['PASSWORD'];
        $history->IP_USER                   = $request['IP_USER'];
        $history->result_NIK                = $request['result_NIK'];
        $history->result_JENIS_PKRJN        = $request['result_JENIS_PKRJN'];
        $history->result_NAMA_LGKP_IBU      = $request['result_NAMA_LGKP_IBU'];
        $history->result_NAMA_LGKP          = $request['result_NAMA_LGKP'];
        $history->result_Alamat             = $request['result_Alamat'];
        $history->result_JENIS_KLMIN        = $request['result_JENIS_KLMIN'];
        $history->result_PROP_NAME          = $request['result_PROP_NAME'];
        $history->result_TMPT_LHR           = $request['result_TMPT_LHR'];
        $history->result_KAB_NAME           = $request['result_KAB_NAME'];
        $history->result_TGL_LHR            = $request['result_TGL_LHR'];
        $history->result_KEC_NAME           = $request['result_KEC_NAME'];
        $history->result_NO_PROP            = $request['result_NO_PROP'];
        $history->result_NO_KEC             = $request['result_NO_KEC'];
        $history->result_NO_KEL             = $request['result_NO_KEL'];
        $history->result_KEL_NAME           = $request['result_KEL_NAME'];
        $history->result_STATUS_KAWIN       = $request['result_STATUS_KAWIN'];
        $history->result_NO_RT              = $request['result_NO_RT'];
        $history->result_NO_RW              = $request['result_NO_RW'];
        $history->username                  = auth()->user()->name;
        $history->save();
    }

    public function postPro(Request $request){
        $apiURL = "http://172.16.160.128:8000/dukcapil/get_json/sunindo_kookmin/nik_verifby_elemen";
        $postInput = [
            'NIK' => $request->NIK,
            'NO_KK' => $request->NO_KK,
            'NAMA_LGKP' => $request->NAMA_LGKP,
            'JENIS_KLMIN' => $request->JENIS_KLMIN,
            'TMPT_LHR' => $request->TMPT_LHR,
            'TGL_LHR' => $request->TGL_LHR,
            'STAT_HBKEL' => $request->STAT_HBKEL,
            'STATUS_KAWIN' => $request->STATUS_KAWIN,
            'PDDK_AKH' => $request->PDDK_AKH,
            'JENIS_PKRJN' => $request->JENIS_PKRJN,
            'NAMA_LGKP_IBU' => $request->NAMA_LGKP_IBU,
            'ALAMAT' => $request->ALAMAT,
            'NO_PROP' => $request->NO_PROP,
            'NO_KAB' => $request->NO_KAB,
            'NO_KEC' => $request->NO_KEC,
            'NO_KEL' => $request->NO_KEL,
            'PROP_NAME' => $request->PROP_NAME,
            'KAB_NAME' => $request->KAB_NAME,
            'KEC_NAME' => $request->KEC_NAME,
            'KEL_NAME' => $request->KEL_NAME,
            'NO_RW' => $request->NO_RW,
            'NO_RT' => $request->NO_RT,
            'TRESHOLD' => $request->TRESHOLD,
            'USER_ID' => $request->USER_ID,
            'PASSWORD' => $request->PASSWORD,
            'IP_USER' => $request->IP_USER,
        ];
  
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];

        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
        
        $statusCode = $response->status();
        if ($statusCode == 200) {
            return json_decode($response,true);
        }else{
            return 'error';
        }
    }
}
