      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Kasus Baru</h3>
              <!-- <div class="box-tools pull-right">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
              </div> -->
            </div>
            <form role="form" method="POST" action="<?=base_url('admin/register/kasus/create')?>">
              <div class="box-body">
                  <?php if ($this->session->flashdata('message')): ?>
                      <div class="col-lg-12 col-md-12">
                          <div class="alert alert-info alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <?=$this->session->flashdata('message')?>
                          </div>
                      </div>
                  <?php endif; ?>
              <!-- Content -->
                <!-- /.box-header -->

                  <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
              <h4>Data Kasus</h4>
                <!-- Asal Surat -->
                <div class="form-group">
                  <label>Asal Surat</label>
                  <input type="text" class="form-control" placeholder="(Laporan Kasus Baru per surat) ..." id="asal_surat" name="asal_surat">
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- No. Surat -->
                <div class="form-group">
                  <label>No. Surat</label>
                  <input type="text" class="form-control" placeholder="Surat Pelapor ..." id="no_surat" name="no_surat">
                </div>
                <!-- Tanggal Surat-->
                <div class="form-group">
                  <label>Tanggal Surat</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" id="datepicker" id="tanggal_surat" name="tanggal_surat">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- Diterima Tanggal-->
                <div class="form-group">
                  <label>Diterima Tanggal</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" id="datepicker" id="tanggal_diterima" name="tanggal_diterima">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- Pembuat Catatan -->
                <div class="form-group">
                  <label>Pembuat Catatan</label>
                  <input type="text" class="form-control" placeholder="Pejabat berwenang ..." id="pembuat_catatan" name="pembuat_catatan"> 
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Judul Kasus -->
                <div class="form-group">
                  <label>Judul Kasus: </label>
                  <input type="text" class="form-control" placeholder="ANIM PARIATUR CLICHE REPREHENDERIT" id="judul_kasus" name="judul_kasus">
                </div>
                <div class="form-group">
                <label>Kasus Posisi / Telaahan Masalah</label><br>
                
                  <textarea class="form-control" id="editor" name="editor" rows="10" id="kasus_posisi" name="kasus_posisi">
                    (BERISI URAIAN KASUS POSISI SECARA SINGKAT)
                  </textarea>
                
                </div>
              </div>
            </div>
            <div class="rows"> 
              <div class="col-lg-6 col-md-6 col-sm-12">
                <h4>Data Pelapor</h4>
                <!-- Nama Lengkap -->
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="nama_lengkap" name="nama_lengkap">
                </div>
                <!-- Alamat -->
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." id="alamat" name="alamat"></textarea>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- Kota -->
                    <div class="form-group">
                      <label>Kota</label>
                      <input type="text" class="form-control" placeholder="Enter ..." id="kota" name="kota">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Profinsi</label>
                      <input type="text" class="form-control" placeholder="Enter ..." id="profinsi" name="profinsi">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label>Kode Pos</label>
                      <input type="text" class="form-control" placeholder="Enter ..." id="kodepos" name="kodepos">
                    </div>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" id="tlp" name="tlp">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" id="hp" name="hp">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                    </div>                  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- text input -->
                <h4>Data Subyek [Terlapor]</h4>
                <div class="form-group">
                  <label>Nama Terlapor</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="nama_terlapor" name="nama_terlapor">
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label> Lembaga</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="lembaga" name="lembaga">
                </div>
              </div>
            </div>
            <!-- 
            <div class="box-body">
              <div class="rows"> 
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <h4>Data Obyek</h4>
                  Obyek Pidana
                  <div class="form-group">
                    <label>Obyek Pidana</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
              </div>
            </div>
             -->
              <!-- End CONTENT -->
            
              </div>
              <div class="box-footer">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-danger"> BATAL</a>
                <div class="box-tools pull-right">
                  <button type="reset" href="#" class="btn btn-warning"> CLEAR</button>
                  <button type="submit" href="#" class="btn btn-success"> KIRIM</button>
                </div>
              </div>
            </form>

          </div>

          </section>