      <section class="content-header">
          <h1><a href='index.php' ><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75"></a>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Register</li>
            <li class="active">Register Perkara Penyelidikan</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">REGISTER PERKARA PENYELIDIKAN [RP-2]</h3>
              <!-- <div class="box-tools pull-right">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
              </div> -->
            </div>
            <form role="form" method="POST" action="<?=base_url('admin/register/subyek/create')?>">
              <?php foreach ($detail_kasus_obyek as $key => $list): ?>
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
                      <!-- Judul Surat -->
                      <div class="form-group">
                        <label>Judul Kasus:</label>
                        <input type="text" class="form-control" value="<?=$list['judul_kasus']?>" placeholder="ANIM PARIATUR CLICHE REPREHENDERIT">
                      </div>
                    </div>      

                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <!-- Tanggal Surat -->
                      <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <!-- No. Surat -->
                      <div class="form-group">
                        <label> No. Surat</label>
                        <input type="text" class="form-control" placeholder="PRINT-">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                      <label>Kasus Posisi</label><br>
                      <form>
                        <textarea class="form-control" id="editor" name="editor" rows="10">
                        <?=$list['kasus_posisi']?>
                        </textarea>
                      </form>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Disposisi / Petunjuk -->
                      <div class="form-group">
                          <label>Disposisi / Petunjuk</label>
                          <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="rows"> 
                    <div class="col-lg-6 col-md-6 col-sm-12">
                              <!-- Print Lid -->
                      <h4>Data Terlapor</h4>
                              <!-- Institusi / Lembaga -->
                      <div class="form-group">
                        <label>Institusi / Lembaga</label>
                          <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                              <!-- Nama Lengkap -->
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                          <textarea class="form-control" rows="1" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                          <!-- text input -->
                      <h4>Data Obyek</h4>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>Obyek Pidana</label>
                            <input type="text" class="form-control" placeholder=" " value="<?=$list['obyek_pidana']?>">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- Nilai Anggaran / Kontrak -->
                          <div class="form-group">
                            <label>Nilai Anggaran</label>
                            <div class="input-group">
                              <span class="input-group-addon">Rp</span>
                              <input type="INT" class="form-control" value="<?=$list['nilai_kontrak']?>" aria-label="dalam Miliar">
                              <span class="input-group-addon">miliar</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>Data Pengacara</h4>
                      <div class="form-group">
                        <label>Pengacara Koordinator</label>
                        <select class="form-control" >
                          <option selected="selected">Riki Indera</option>
                          <option>Akbar Permana</option>
                          <option>Ade Pudjasari</option>
                          <option>Tonny Soerojo</option>
                          <option>Anastasia</option>
                          <option>John Laksmana</option>
                          <option>Shannine Davita</option>
                        </select>
                      </div>

                    <!-- /.col -->

                      <div class="form-group">
                        <label>Pengacara Anggota</label>
                        <select class="form-control select2" multiple="multiple" data-placeholder="Pilih anggota...">
                          <option>Akbar Permana</option>
                          <option>Ade Pudjasari</option>
                          <option>Tonny Soerojo</option>
                          <option>Anastasia</option>
                          <option>John Laksmana</option>
                          <option>Akbar Permana</option>
                          <option>Ade Pudjasari</option>
                          <option>Tonny Soerojo</option>
                          <option>Anastasia</option>
                          <option>John Laksmana</option>
                          <option>Shannine Davita</option>
                          <option>Shannine Davita</option>
                        </select>
                      </div>
                    </div>
                  </div>
              <!-- End CONTENT -->
              </div>
              <div class="box-footer">
                <a href="<?= base_url() ?>admin/register/rp2" class="btn btn-danger"> BATAL</a>
                <div class="box-tools pull-right">
                  <button type="reset" href="#" class="btn btn-warning"> CLEAR</button>
                  <button type="submit" href="#" class="btn btn-success"> KIRIM</button>
                </div>
              </div>
              <?php endforeach; ?>

            </form>

          </div>

          </section>