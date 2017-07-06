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
              <h3 class="box-title">REGISTRASI PERKARA PENYELIDIKAN</h3>
              <!-- <div class="box-tools pull-right">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
              </div> -->
            </div>
            <form role="form" method="POST" action="<?=base_url('admin/register/rp2/create')?>">
        <?php foreach ($detail_kasus_subyek as $key => $list): ?>
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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <H4>DATA KASUS</H4>
                      <!-- textarea -->
                      <input type="text" id="kasus" name="kasus" value="<?=$list['id_kasus']?>">
                      <input type="text" id="subyek" name="subyek" value="<?=$list['id_subyek']?>">

                      <div class="form-group">
                        <label>Judul Kasus</label>
                        <textarea class="form-control" id="judul_kasus" name="judul_kasus" rows="3" placeholder="Enter ..."><?=$list['judul_kasus']?></textarea>
                      </div>
                    <!-- CK Editor -->
                      <div class="form-group">
                        <label>Kasus Posisi</label>
                        <!-- <form> -->
                          <textarea class="textarea" id="kasus_posisi" name="kasus_posisi" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$list['kasus_posisi']?></textarea>
                        <!-- </form> -->
                      </div>


                      <!-- textarea -->
                      <div class="form-group">
                        <label>Lokasi Kejadian</label>
                        <textarea class="form-control" rows="1" id="lokasi_kejadian" name="lokasi_kejadian" placeholder="Enter ..."><?=$list['lokasi_kejadian']?></textarea>
                      </div>

                      <!-- small box -->
                      <!-- Date -->
                      <div class="form-group">
                        <label>Tanggal Surat</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" id="tanggal_surat" name="tanggal_surat" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <H4>DATA SUBYEK</H4>
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Terlapor</label>
                        <input type="text" value="<?=$list['nama_terlapor']?>" id="nama_terlapor" name="nama_terlapor"class="form-control" placeholder="Enter ...">
                      </div>
                      <!-- small box -->
                      <!-- text input -->
                      <div class="form-group">
                        <label> Lembaga</label>
                        <input type="text" value="<?=$list['lembaga']?>" id="lembaga" name="lembaga" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Kategori Subyek</label>
                        <select class="form-control select2"  id="kategori_subyek" name="kategori_subyek" style="width: 100%;">
                          <option selected="selected"><?=$list['kategori_subyek']?></option>
                          <option>SWASTA</option>
                          <option>PNS</option>
                          <option>Hakim</option>
                          <option>Pengacara</option>
                          <option>Jaksa</option>
                          <option>Gubernur</option>
                          <option>Walikota</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <h4>DATA OBYEK</h4>
                      <div class="form-group">
                        <label>Obyek Pidana</label>
                        <input type="Nilai" class="form-control" id="obyek_pidana" name="obyek_pidana" placeholder=" ">
                      </div>

                      <div class="form-group">
                        <label>Nilai Kontrak</label>
                        <input type="Nilai" class="form-control" id="nilai_kontrak" name="nilai_kontrak" placeholder=" ">
                      </div>

                      <h4>DATA JAKSA</h4>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Jaksa Koordinator</label>
                          <select class="form-control select2" id="jaksa_kordinator" name="jaksa_kordinator">
                            <option selected="selected">Riki Indera</option>
                            <option>Akbar Permana</option>
                            <option>Ade Pudjasari</option>
                            <option>Tonny Soerojo</option>
                            <option>Anastasia</option>
                            <option>John Laksmana</option>
                            <option>Shannine Davita</option>
                          </select>
                        </div>
                      </div>

                    <!-- /.col -->

                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                          <label>Jaksa Anggota</label>
                          <select class="form-control select2" id="jaksa_anggota" name="jaksa_anggota" multiple="multiple" data-placeholder="Pilih angg">
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


                  </div>
              <!-- End CONTENT -->
            
              </div>
              <div class="box-footer">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-danger"> BATAL</a>
                <div class="box-tools pull-right">
                  <button type="reset" href="#" class="btn btn-warning"> CLEAR</button>
                  <button type="submit" href="#" class="btn btn-success"> KIRIM</button>
                </div>
              </div>
        <?php endforeach; ?>
            </form>

          </div>

          </section>