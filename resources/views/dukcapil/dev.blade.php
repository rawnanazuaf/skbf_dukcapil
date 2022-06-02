@extends('layout.master')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Debitur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form id="quickForm" action="/production/post" method="POST"> -->
              <form id="quickForm">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="first-name">Nomor Induk KTP</label>
                    <input type="text" name="NIK" class="form-control" id="NIK" placeholder="Masukkan 16 Angka NIK Dengan Benar" minlength="16" maxlength="16" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Nomor KK</label>
                    <input type="text" name="NO_KK" class="form-control" id="NO_KK" placeholder="Masukkan No. KK Dengan Benar" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Nama Lengkap</label>
                    <input type="text" name="NAMA_LGKP" class="form-control" id="NAMA_LGKP" placeholder="Masukkan Nama Lengkap Dengan Benar" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Jenis Kelamin</label>
                    <select class="form-control select2" style="width: 100%;" placeholder="Pilih Jenis Kelamin Dengan Benar" name="JENIS_KLMIN" id="JENIS_KLMIN" required>
                        <option value="0" disabled="true" selected="true">Pilih Jenis Kelamin Dengan Benar</option>
                        @foreach($JENIS_KLMIN as $jk)
                          <option value="{{ $jk->JENIS_KLMIN }}"> {{ $jk->JENIS_KLMIN }} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Tempat Lahir</label>
                    <input type="text" name="TMPT_LHR" class="form-control" id="TMPT_LHR" placeholder="Masukkan Tempat Lahir Dengan Benar" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" name="TGL_LHR" id="TGL_LHR" placeholder="Masukkan Tanggal Lahir Menggunakan Format DD/MM/YYYY" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Status Hubungan Keluarga</label>
                    <select class="form-control select2" style="width: 100%;" placeholder="Pilih Status Hubungan Keluarga Dengan Benar" name="STAT_HBKEL" id="STAT_HBKEL" required>
                        <option value="0" disabled="true" selected="true">Pilih Status Hubungan Keluarga</option>
                        @foreach($STAT_HBKEL as $shb)
                          <option value="{{ $shb->ID_STAT_HBKEL }}"> {{ $shb->STAT_HBKEL }} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Status Kawin</label>
                    <select class="form-control select2" style="width: 100%;" placeholder="Pilih Status Kawin Dengan Benar" name="STATUS_KAWIN" id="STATUS_KAWIN" required>
                        <option value="0" disabled="true" selected="true">Pilih Status Kawin</option>
                        @foreach($STATUS_KAWIN as $sk)
                          <option value="{{ $sk->STATUS_KAWIN }}"> {{ $sk->STATUS_KAWIN }} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Pendidikan</label>
                    <select class="form-control select2" style="width: 100%;" placeholder="Pilih Pendidikan Dengan Benar" name="PDDK_AKH" id="PDDK_AKH" required>
                        <option value="0" disabled="true" selected="true">Pilih Pendidikan</option>
                        @foreach($PDDK_AKH as $pk)
                          <option value="{{ $pk->PDDK_AKH }}"> {{ $pk->PDDK_AKH }} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Jenis Pekerjaan</label>
                    <select class="form-control select2" style="width: 100%;" placeholder="Pilih Jenis Pekerjaan Dengan Benar" name="JENIS_PKRJN" id="JENIS_PKRJN" required>
                        <option value="0" disabled="true" selected="true">Pilih Jenis Pekerjaan</option>
                        @foreach($JENIS_PKRJN as $jpk)
                          <option value="{{ $jpk->JENIS_PKRJN }}"> {{ $jpk->JENIS_PKRJN }} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Nama Lengkap Ibu</label>
                    <input type="text" name="NAMA_LGKP_IBU" class="form-control" id="NAMA_LGKP_IBU" placeholder="Masukkan Nama Lengkap Ibu Dengan Benar" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Alamat</label>
                    <input type="text" name="ALAMAT" class="form-control" placeholder="Masukkan Alamat Sesuai KTP" id="ALAMAT">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">No Provinsi</label>
                    <input type="text" name="NO_PROP" class="form-control" id="NO_PROP">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">No Kabupaten/Kota</label>
                    <input type="text" name="NO_KAB" class="form-control" id="NO_KAB">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">No Kecamatan</label>
                    <input type="text" name="NO_KEC" class="form-control" id="NO_KEC">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">No Kelurahan</label>
                    <input type="text" name="NO_KEL" class="form-control" id="NO_KEL">
                  </div>
                  <div class="form-group">
                    <label for="last-name">Provinsi</label>
                    <select class="form-control select2" style="width: 100%;" name="PROP_NAME" id="PROP_NAME" required>
                      <option value="0" disabled="true" selected="true">Pilih Provinsi</option>
                        @foreach($PROP_NAME as $pn)
                          <option value="{{ $pn->NAMA_PROP }}"> {{ $pn->NAMA_PROP }} </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Kabupaten/Kota</label>
                    <select class="form-control select2" style="width: 100%;" name="KAB_NAME" id="KAB_NAME" required>
                        <option value="0" disabled="true" selected="true">Pilih Kabupaten/Kota</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Kecamatan</label>
                    <select class="form-control select2" style="width: 100%;" name="KEC_NAME" id="KEC_NAME" required>
                        <option value="0" disabled="true" selected="true">Pilih Kecamatan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">Kelurahan</label>
                    <select class="form-control select2" style="width: 100%;" name="KEL_NAME" id="KEL_NAME" required>
                        <option value="0" disabled="true" selected="true">Pilih Kelurahan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="last-name">No RT</label>
                    <input type="text" name="NO_RT" class="form-control" id="NO_RT" placeholder="Masukkan No RT Dengan Benar" required>
                  </div>
                  <div class="form-group">
                    <label for="last-name">No RW</label>
                    <input type="text" name="NO_RW" class="form-control" id="NO_RW" placeholder="Masukkan No RW Dengan Benar" required>
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">TRESHOLD</label>
                    <input type="text" name="TRESHOLD" class="form-control" id="TRESHOLD" value="90">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">USER_ID</label>
                    <input type="text" name="USER_ID" class="form-control" id="USER_ID" value="10993174202102233SUNINDO">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">PASSWORD</label>
                    <input type="text" name="PASSWORD" class="form-control" id="PASSWORD" value="123">
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="last-name">IP_USER</label>
                    <input type="text" name="IP_USER" class="form-control" id="IP_USER" value="10.162.150.140/30">
                  </div>

                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" required>
                      <label class="custom-control-label" for="exampleCheck1">Saya sudah mengisi data dengan benar</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="#" class="btn btn-primary cek" id="cek">Cek Data Debitur</a>
                  <!-- <button type="submit" class="btn btn-primary">Cek Data Debitur</button> -->
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- Modal Edit-->
<div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-body bg-3">
         <div class="px-3 to-front">
            <div class="row align-items-center">
              <div class="col text-right">
                <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><span class="icon-close2"></span></span>
                </a>
              </div>
            </div>
          </div>
          <div class="p-4 to-front" id="iniModal">
            
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
    (function (global, factory) {
      typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('jquery')) :
      typeof define === 'function' && define.amd ? define(['exports', 'jquery'], factory) :
      (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.adminlte = {}, global.jQuery));
    }(this, (function (exports, $) { 'use strict';  
      
      //setTimeOut
      function load_NIK(){
        setTimeout(function(){
          var NIK = jQuery("#NIK").val();
        },1000);
      }
      function load_NO_KK(){
        setTimeout(function(){
          var NO_KK = jQuery("#NO_KK").val();
        },1000);
      }
      function load_NAMA_LGKP(){
        setTimeout(function(){
          var NAMA_LGKP = jQuery("#NAMA_LGKP").val();
        },1000);
      }
      function load_JENIS_KLMIN(){
        setTimeout(function(){
          var JENIS_KLMIN = jQuery("#JENIS_KLMIN").val();
        },1000);
      }
      function load_TMPT_LHR(){
        setTimeout(function(){
          var TMPT_LHR = jQuery("#TMPT_LHR").val();
        },1000);
      }
      function load_TGL_LHR(){
        setTimeout(function(){
          var TGL_LHR = jQuery("#TGL_LHR").val();
        },1000);
      }
      function load_STAT_HBKEL(){
        setTimeout(function(){
          var STAT_HBKEL = jQuery("#STAT_HBKEL").val();
        },1000);
      }
      function load_STATUS_KAWIN(){
        setTimeout(function(){
          var STATUS_KAWIN = jQuery("#STATUS_KAWIN").val();
        },1000);
      }
      function load_PDDK_AKH(){
        setTimeout(function(){
          var PDDK_AKH = jQuery("#PDDK_AKH").val();
        },1000);
      }
      function load_JENIS_PKRJN(){
        setTimeout(function(){
          var JENIS_PKRJN = jQuery("#JENIS_PKRJN").val();
        },1000);
      }
      function load_NAMA_LGKP_IBU(){
        setTimeout(function(){
          var NAMA_LGKP_IBU = jQuery("#NAMA_LGKP_IBU").val();
        },1000);
      }
      function load_ALAMAT(){
        setTimeout(function(){
          var ALAMAT = jQuery("#ALAMAT").val();
        },1000);
      }
      
      function update_semua(){
        setTimeout(function(){
          jQuery("#iniModal").empty();
          load_NIK();
          load_NO_KK();
          load_NAMA_LGKP();
          load_JENIS_KLMIN();
          load_TMPT_LHR();
          load_TGL_LHR();
          load_STAT_HBKEL();
          load_STATUS_KAWIN();
          load_PDDK_AKH();
          load_JENIS_PKRJN();
          load_NAMA_LGKP_IBU();
          load_ALAMAT();
        },1000);
      }


      function load_kabupatenKota(){
        setTimeout(function(){
          kabupatenKota();
        },1000);
      }
      function load_kecamatan(){
        setTimeout(function(){
          kecamatan();
        },1000);
      }
      function load_kelurahan(){
        setTimeout(function(){
          kelurahan();
        },1000);
      }
      function load_updateLokasi(){
        setTimeout(function(){
          updateLokasi();
        },1000);
      }
      function load_cekSemua(){
        setTimeout(function(){
          cekSemua();
        },1000);
      }
      function load_submit(){
        setTimeout(function(){
          submit();
        },1000);
      }

      function ubahFormatTanggal() {
        var tgl_lhr = jQuery("#TGL_LHR").val(); 
        var year    = tgl_lhr.getFullYear();
        var month   = tgl_lhr.getMonth()+1; 
        var day     = tgl_lhr.getDate();
        if(month.toString().length == 1) {
            month = '0'+month;
        }
        if(day.toString().length == 1) {
            day = '0'+day;
        }  
        var dateTime = day+'/'+month+'/'+year;   
        return dateTime;
      }

      function kabupatenKota() {
          var NAMA_PROP             = jQuery("#PROP_NAME").val();
          var ow                  = " ";
          console.log("NAMA_PROP",NAMA_PROP);
          jQuery.ajax({
            type:'get', 
            url: "{!!URL::to('cariKabupatenKota')!!}",
            data:{'NAMA_PROP':NAMA_PROP},
            success:function(data){
                
                console.log(data);
                ow+='<option value="0" selected disabled>Pilih Kabupaten/Kota</option>';
                for(var i=0;i<data.length;i++)
                {
                    ow+='<option value="'+data[i].NAMA_KAB+'">'+data[i].NAMA_KAB+'</option>';
                }

                jQuery('#KAB_NAME').find('option').remove().end();
                jQuery(ow).appendTo('#KAB_NAME');
                
            },
            error:function(){
                alert('Ada kesalahan. Silahkan hubungi administrator.');
            }   
          })
      }

      function kecamatan() {
          var NAMA_PROP             = jQuery("#PROP_NAME").val();
          var NAMA_KAB              = jQuery("#KAB_NAME").val();
          var ow                  = " ";
          jQuery.ajax({
            type:'get', 
            url: "{!!URL::to('cariKecamatan')!!}",
            data:{'NAMA_PROP':NAMA_PROP,'NAMA_KAB':NAMA_KAB},
            success:function(data){
                
                console.log(data);
                ow+='<option value="0" selected disabled>Pilih Kecamatan</option>';
                for(var i=0;i<data.length;i++)
                {
                    ow+='<option value="'+data[i].NAMA_KEC+'">'+data[i].NAMA_KEC+'</option>';
                }

                jQuery('#KEC_NAME').find('option').remove().end();
                jQuery(ow).appendTo('#KEC_NAME');
                
            },
            error:function(){
                alert('Ada kesalahan. Silahkan hubungi administrator.');
            }   
          })
      }

      function kelurahan() {
          var NAMA_PROP             = jQuery("#PROP_NAME").val();
          var NAMA_KAB              = jQuery("#KAB_NAME").val();
          var NAMA_KEC              = jQuery("#KEC_NAME").val();
          var ow                  = " ";
          console.log("NAMA_PROP",NAMA_PROP);
          console.log("NAMA_KAB",NAMA_KAB);
          console.log("NAMA_KEC",NAMA_KEC);
          jQuery.ajax({
            type:'get', 
            url: "{!!URL::to('cariKelurahan')!!}",
            data:{'NAMA_PROP':NAMA_PROP,'NAMA_KAB':NAMA_KAB,'NAMA_KEC':NAMA_KEC},
            success:function(data){
                
                console.log(data);
                ow+='<option value="0" selected disabled>Pilih Kelurahan</option>';
                for(var i=0;i<data.length;i++)
                {
                    ow+='<option value="'+data[i].NAMA_KEL+'">'+data[i].NAMA_KEL+'</option>';
                }

                jQuery('#KEL_NAME').find('option').remove().end();
                jQuery(ow).appendTo('#KEL_NAME');
                
            },
            error:function(){
                alert('Ada kesalahan. Silahkan hubungi administrator.');
            }   
          })
      }
      
      function updateLokasi() {
          var NAMA_PROP             = jQuery("#PROP_NAME").val();
          var NAMA_KAB              = jQuery("#KAB_NAME").val();
          var NAMA_KEC              = jQuery("#KEC_NAME").val();
          var NAMA_KEL              = jQuery("#KEL_NAME").val();
          
          jQuery.ajax({
            type:'get', 
            url: "{!!URL::to('updateLokasi')!!}",
            data:{'NAMA_PROP':NAMA_PROP,'NAMA_KAB':NAMA_KAB,'NAMA_KEC':NAMA_KEC,'NAMA_KEL':NAMA_KEL},
            success:function(data){
                console.log("Data Update Lokasi",data);

                var NO_PROP_baru  = data[0].NO_PROP;
                var NO_KAB_baru   = data[0].NO_KAB;
                var NO_KEC_baru   = data[0].NO_KEC;
                var NO_KEL_baru   = data[0].NO_KEL;

                var NAMA_PROP_baru  = data[0].NAMA_PROP;
                var NAMA_KAB_baru   = data[0].NAMA_KAB;
                var NAMA_KEC_baru   = data[0].NAMA_KEC;
                var NAMA_KEL_baru   = data[0].NAMA_KEL;

                $("#NO_PROP").val(NO_PROP_baru);
                $("#NO_KAB").val(NO_KAB_baru);
                $("#NO_KEC").val(NO_KEC_baru);
                $("#NO_KEL").val(NO_KEL_baru);
                
                console.log("NO_PROP_baru",NO_PROP_baru);
                console.log("NO_KAB_baru",NO_KAB_baru);
                console.log("NO_KEC_baru",NO_KEC_baru);
                console.log("NO_KEL_baru",NO_KEL_baru);
                console.log("NAMA_PROP_baru",NAMA_PROP_baru);
                console.log("NAMA_KAB_baru",NAMA_KAB_baru);
                console.log("NAMA_KEC_baru",NAMA_KEC_baru);
                console.log("NAMA_KEL_baru",NAMA_KEL_baru);
            },
            error:function(){
                alert('Ada kesalahan. Silahkan hubungi administrator.');
            }   
          })
      }

      function cekSemua(){
        var  NIK              = jQuery("#NIK").val();
        var  NO_KK            = jQuery("#NO_KK").val();
        var  NAMA_LGKP        = jQuery("#NAMA_LGKP").val();
        var  JENIS_KLMIN      = jQuery("#JENIS_KLMIN").val();  
        var  TMPT_LHR         = jQuery("#TMPT_LHR").val();  
        var  TGL_LHR          = jQuery("#TGL_LHR").val();
        var  STAT_HBKEL       = jQuery("#STAT_HBKEL").val();
        var  STATUS_KAWIN     = jQuery("#STATUS_KAWIN").val();
        var  PDDK_AKH         = jQuery("#PDDK_AKH").val();
        var  JENIS_PKRJN      = jQuery("#JENIS_PKRJN").val();
        var  NAMA_LGKP_IBU    = jQuery("#NAMA_LGKP_IBU").val();
        var  ALAMAT           = jQuery("#ALAMAT").val();
        var  NO_PROP          = jQuery("#NO_PROP").val();
        var  NO_KAB           = jQuery("#NO_KAB").val();
        var  NO_KEC           = jQuery("#NO_KEC").val();
        var  NO_KEL           = jQuery("#NO_KEL").val();
        var  PROP_NAME        = jQuery("#PROP_NAME").val();
        var  KAB_NAME         = jQuery("#KAB_NAME").val();   
        var  KEC_NAME         = jQuery("#KEC_NAME").val();
        var  KEL_NAME         = jQuery("#KEL_NAME").val();
        var  NO_RW            = jQuery("#NO_RW").val();
        var  NO_RT            = jQuery("#NO_RT").val();
        var  TRESHOLD         = jQuery("#TRESHOLD").val();
        var  USER_ID          = jQuery("#USER_ID").val();
        var  PASSWORD         = jQuery("#PASSWORD").val();
        var  IP_USER          = jQuery("#IP_USER").val();

        console.log("NIK",NIK);
        console.log("NO_KK",NO_KK);
        console.log("NAMA_LGKP",NAMA_LGKP);
        console.log("JENIS_KLMIN",JENIS_KLMIN);
        console.log("TMPT_LHR",TMPT_LHR);
        console.log("TGL_LHR",TGL_LHR);
        console.log("STAT_HBKEL",STAT_HBKEL);
        console.log("STATUS_KAWIN",STATUS_KAWIN);
        console.log("PDDK_AKH",PDDK_AKH);
        console.log("JENIS_PKRJN",JENIS_PKRJN);
        console.log("NAMA_LGKP_IBU",NAMA_LGKP_IBU);
        console.log("ALAMAT",ALAMAT);
        console.log("NO_PROP",NO_PROP);
        console.log("NO_KAB",NO_KAB);
        console.log("NO_KEC",NO_KEC);
        console.log("NO_KEL",NO_KEL);
        console.log("PROP_NAME",PROP_NAME);
        console.log("KAB_NAME",KAB_NAME);
        console.log("KEC_NAME",KEC_NAME);
        console.log("KEL_NAME",KEL_NAME);
        console.log("NO_RW",NO_RW);
        console.log("NO_RT",NO_RT);
        console.log("TRESHOLD",TRESHOLD);
        console.log("USER_ID",USER_ID);
        console.log("PASSWORD",PASSWORD);
        console.log("IP_USER",IP_USER);
      }

      function submit(){
          var  NIK              = jQuery("#NIK").val();
          var  NO_KK            = jQuery("#NO_KK").val();
          var  NAMA_LGKP        = jQuery("#NAMA_LGKP").val();
          var  JENIS_KLMIN      = jQuery("#JENIS_KLMIN").val();  
          var  TMPT_LHR         = jQuery("#TMPT_LHR").val();  
          var  TGL_LHR          = jQuery("#TGL_LHR").val();
          var  STAT_HBKEL       = jQuery("#STAT_HBKEL").val();
          var  STATUS_KAWIN     = jQuery("#STATUS_KAWIN").val();
          var  PDDK_AKH         = jQuery("#PDDK_AKH").val();
          var  JENIS_PKRJN      = jQuery("#JENIS_PKRJN").val();
          var  NAMA_LGKP_IBU    = jQuery("#NAMA_LGKP_IBU").val();
          var  ALAMAT           = jQuery("#ALAMAT").val();
          var  NO_PROP          = jQuery("#NO_PROP").val();
          var  NO_KAB           = jQuery("#NO_KAB").val();
          var  NO_KEC           = jQuery("#NO_KEC").val();
          var  NO_KEL           = jQuery("#NO_KEL").val();
          var  PROP_NAME        = jQuery("#PROP_NAME").val();
          var  KAB_NAME         = jQuery("#KAB_NAME").val();   
          var  KEC_NAME         = jQuery("#KEC_NAME").val();
          var  KEL_NAME         = jQuery("#KEL_NAME").val();
          var  NO_RW            = jQuery("#NO_RW").val();
          var  NO_RT            = jQuery("#NO_RT").val();
          var  TRESHOLD         = jQuery("#TRESHOLD").val();
          var  USER_ID          = jQuery("#USER_ID").val();
          var  PASSWORD         = jQuery("#PASSWORD").val();
          var  IP_USER          = jQuery("#IP_USER").val();
          
          jQuery.ajax({
            type:'POST', 
            url: "{!!URL::to('dev/post')!!}",
            data:{_token: '{{csrf_token()}}',
                  'NIK':NIK,
                  'NO_KK':NO_KK,
                  'NAMA_LGKP':NAMA_LGKP,
                  'JENIS_KLMIN':JENIS_KLMIN,
                  'TMPT_LHR':TMPT_LHR,
                  'TGL_LHR':TGL_LHR,
                  'STAT_HBKEL':STAT_HBKEL,
                  'STATUS_KAWIN':STATUS_KAWIN,
                  'PDDK_AKH':PDDK_AKH,
                  'JENIS_PKRJN':JENIS_PKRJN,
                  'NAMA_LGKP_IBU':NAMA_LGKP_IBU,
                  'ALAMAT':ALAMAT,
                  'NO_PROP':NO_PROP,
                  'NO_KAB':NO_KAB,
                  'NO_KEC':NO_KEC,
                  'NO_KEL':NO_KEL,
                  'PROP_NAME':PROP_NAME,
                  'KAB_NAME':KAB_NAME,
                  'KEC_NAME':KEC_NAME,
                  'KEL_NAME':JENIS_KLMIN,
                  'NO_RW':NO_RW,
                  'NO_RT':NO_RT,
                  'TRESHOLD':TRESHOLD,
                  'USER_ID':USER_ID,
                  'PASSWORD':PASSWORD,
                  'IP_USER':IP_USER},
            success:function(data){
                console.log(data);
                let content = data.content;
                console.log(content);
                jQuery.each(content, function(i,data){
                  if (data.RESPON == undefined) {
                    jQuery("#iniModal").append('<div class="text-center"><div class="logo"><img src="AdminLTE/dist/img/skbf/KB Logo - Square.png" alt="Image" width="100" height="100" style="display: block;margin-left: auto;margin-right: auto;"></div><h3>Hasil Pengecekan Data Debitur</h3><form action="" method="POST" id="editForm">{{csrf_field()}}<div class="form-group"><label for="last-name">Nama Lengkap</label><input type="text" name="md_NAMA_LGKP" class="form-control" id="md_NAMA_LGKP" value="'+ data.NAMA_LGKP +'"></div><div class="form-group"><label for="last-name">Jenis Kelamin</label><input type="text" name="md_JENIS_KLMIN" class="form-control" id="md_JENIS_KLMIN" value="'+ data.JENIS_KLMIN +'"></div><div class="form-group"><label for="last-name">Tempat Lahir</label><input type="text" name="md_TMPT_LHR" class="form-control" id="md_TMPT_LHR" value="'+ data.TMPT_LHR +'"></div><div class="form-group"><label>Tanggal Lahir</label><input type="text" class="form-control" name="md_TGL_LHR" id="md_TGL_LHR" value="'+ data.TGL_LHR +'"></div><div class="form-group"><label for="last-name">Status Kawin</label><input type="text" class="form-control" name="md_STATUS_KAWIN" id="md_STATUS_KAWIN" value="'+ data.STATUS_KAWIN +'"></div><div class="form-group"><label for="last-name">Jenis Pekerjaan</label><input type="text" class="form-control" name="md_JENIS_PKRJN" id="md_JENIS_PKRJN" value="'+ data.JENIS_PKRJN +'"></div><div class="form-group"><label for="last-name">Alamat</label><input type="text" name="md_ALAMAT" class="form-control" id="md_ALAMAT" value="'+ data.ALAMAT +'"></div><div class="form-group"><label for="last-name">Provinsi</label><input type="text" name="md_PROP_NAME" class="form-control" id="md_PROP_NAME" value="'+ data.PROP_NAME +'"></div><div class="form-group"><label for="last-name">Kabupaten/Kota</label><input type="text" name="md_KAB_NAME" class="form-control" id="md_KAB_NAME" value="'+ data.KAB_NAME +'"></div><div class="form-group"><label for="last-name">Kecamatan</label><input type="text" name="md_KEC_NAME" class="form-control" id="md_KEC_NAME" value="'+ data.KEC_NAME +'"></div><div class="form-group"><label for="last-name">Kelurahan</label><input type="text" name="md_KEL_NAME" class="form-control" id="md_KEL_NAME" value="'+ data.KEL_NAME +'"></div></form></div>');
                  }else if(data.RESPON != undefined){
                    jQuery("#iniModal").append('<div class="text-center"><div class="logo"><img src="AdminLTE/dist/img/skbf/KB Logo - Square.png" alt="Image" width="100" height="100" style="display: block;margin-left: auto;margin-right: auto;"></div><h3>Hasil Pengecekan Data Debitur</h3><form action="" method="POST" id="editForm">{{csrf_field()}}<div class="form-group"><label for="last-name">Pesan Respons</label><textarea name="md_RESPON" class="form-control" id="md_RESPON">'+ data.RESPON +'</textarea></div><div class="form-group"><label for="last-name">Kode Respons</label><input type="text" name="md_RESPONSE_CODE" class="form-control" id="md_RESPONSE_CODE" value="'+ data.RESPONSE_CODE +'"></div></form></div>');
                  }
                });

                jQuery('#resultModal').modal('show');
            },
            error:function(){
                alert('Ada kesalahan. Silahkan hubungi administrator.');
            }   
          })
      }
      
      document.getElementById("NIK").addEventListener("change", load_NIK);
      document.getElementById("NO_KK").addEventListener("change", load_NO_KK);
      document.getElementById("NAMA_LGKP").addEventListener("change", load_NAMA_LGKP);
      document.getElementById("JENIS_KLMIN").addEventListener("change", load_JENIS_KLMIN);
      document.getElementById("TMPT_LHR").addEventListener("change", load_TMPT_LHR);
      document.getElementById("TGL_LHR").addEventListener("change", load_TGL_LHR);
      document.getElementById("STAT_HBKEL").addEventListener("change", load_STAT_HBKEL);
      document.getElementById("STATUS_KAWIN").addEventListener("change", load_STATUS_KAWIN);
      document.getElementById("PDDK_AKH").addEventListener("change", load_PDDK_AKH);
      document.getElementById("JENIS_PKRJN").addEventListener("change", load_JENIS_PKRJN);
      document.getElementById("NAMA_LGKP_IBU").addEventListener("change", load_NAMA_LGKP_IBU);
      document.getElementById("ALAMAT").addEventListener("change", load_ALAMAT);

      document.getElementById("PROP_NAME").addEventListener("change", load_kabupatenKota);
      document.getElementById("KAB_NAME").addEventListener("change", load_kecamatan);
      document.getElementById("KEC_NAME").addEventListener("change", load_kelurahan);
      document.getElementById("NO_RT").addEventListener("change", load_updateLokasi);
      document.getElementById("exampleCheck1").addEventListener("change", load_cekSemua);
      document.getElementById("cek").addEventListener("click", update_semua);
      document.getElementById("cek").addEventListener("click", load_submit);
      
    })));
</script>
@stop