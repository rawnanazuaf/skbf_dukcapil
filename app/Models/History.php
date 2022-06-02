<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $fillable = ['NIK',
                        'NO_KK',
                        'NAMA_LGKP',
                        'JENIS_KLMIN',
                        'TMPT_LHR',
                        'TGL_LHR',
                        'STAT_HBKEL',
                        'STATUS_KAWIN',
                        'PDDK_AKH',
                        'JENIS_PKRJN',
                        'NAMA_LGKP_IBU',
                        'ALAMAT',
                        'NO_PROP',
                        'NO_KAB',
                        'NO_KEC',
                        'NO_KEL',
                        'PROP_NAME',
                        'KAB_NAME',
                        'KEC_NAME',
                        'KEL_NAME',
                        'NO_RW',
                        'NO_RT',
                        'TRESHOLD',
                        'USER_ID',
                        'PASSWORD',
                        'IP_USER',
                        'result_NIK',
                        'result_JENIS_PKRJN',
                        'result_NAMA_LGKP_IBU',
                        'result_NAMA_LGKP',
                        'result_Alamat',
                        'result_JENIS_KLMIN',
                        'result_PROP_NAME',
                        'result_TMPT_LHR',
                        'result_KAB_NAME',
                        'result_TGL_LHR',
                        'result_KEC_NAME',
                        'result_NO_PROP',
                        'result_NO_KEC',
                        'result_NO_KEL',
                        'result_KEL_NAME',
                        'result_STATUS_KAWIN',
                        'result_NO_RT',
                        'result_PDDK_AKH',
                        'result_NO_RW',
                        'username'];
}
