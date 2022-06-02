@extends('layout.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="AdminLTE/dist/img/skbf/avatar-icon.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                <p class="text-muted text-center">PT. Sunindo KB Finance</p>

                <div class="card-body">
                    <hr>
                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                    <p class="text-muted">
                    {{ auth()->user()->email }}
                    </p>

                    
                </div>
                <input type="text" id="counter">
                <a href="#" class="btn btn-primary btn-block" id="btn-ubahPass"><b>UBAH KATA SANDI</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9" id="ubahPassword">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">UBAH KATA SANDI</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" action="/profile/{{auth()->user()->id}}/edit" method="POST">
                      @method("PUT")
                      @csrf
                      <div class="form-group row" id="devID" >
                        <label for="inputName" class="col-sm-2 col-form-label">id</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{ old('id', auth()->user()->id) }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name', auth()->user()->name) }}" autocomplete="name">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email', auth()->user()->email) }}" autocomplete="email">
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Kata Sandi baru" required autocomplete="new-password">
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Ulang Kata Sandi Baru</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Ulang Kata Sandi baru" required autocomplete="new-password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" required>  Saya setuju untuk merubah kata sandi</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Ubah</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <script>
        jQuery('#ubahPassword').hide();
        jQuery('#counter').hide();
        jQuery('#devID').hide();

        jQuery('#btn-ubahPass').on('click', function(){
            jQuery('#counter').val(function(i, val) { return +val+1 });
            let cekCounter = jQuery('#counter').val();
            if (cekCounter % 2 != 0) {
                jQuery('#ubahPassword').show();         
            }else if(cekCounter % 2 == 0){
                jQuery('#ubahPassword').hide();
            }
        })
        
    </script>

@stop