      <section class="content-header">
 <div class="box-tools pull-right">
  <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-1</a>
  <a href="<?= base_url() ?>admin/register/rp2" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-2</a>
  <a href="<?= base_url() ?>admin/register/rp3mum" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3MUM</a>
  <a href="<?= base_url() ?>admin/register/rp3sus" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3SUS</a>
  <a href="<?= base_url() ?>#" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-cubes"></i>RB-1</a>
  <a href="<?= base_url() ?>#" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-users"></i>RT-1</a>
</div>
<h1><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75">
  Direktorat Penyidikan
  <small>Tindak Pidana Khusus</small>
</h1>
</section>
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">REGISTER BENDA SITAAN [RB-1]</h3>
              <!-- <div class="box-tools pull-right">
                <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-warning">Back to list kasus</a>
              </div> -->
            </div>
            <form role="form" method="POST" action="<?=base_url('admin/register/subyek/create')?>">
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
    <div class="box-body">
        <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
              <!-- select -->
                <div class="form-group">
                <label>Surat Perintah</label>
                  <select class="form-control">
                    <option>PEMERIKSAAN SURAT</option>
                    <option>PENGGELEDAHAN</option>
                    <option>PENYITAAN</option>
                    <option>PEMERIKSAAN SETEMPAT</option>
                    <option>MENDATANGKAN AHLI</option>
                    <option selected="selected">Pilih jenis surat....</option>
                  </select>
                </div>
                 <!-- No. Surat -->
        <div class="form-group">
          <label> No. Surat</label>
          <input type="text" class="form-control" placeholder="PRINT-">
        </div>
        <!-- Tanggal Surat -->
        <div class="form-group">
          <label>Tanggal Surat</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="date" class="form-control pull-right" id="datepicker">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
                      <div class="form-group">
                <label>Memerintahkan Kepada</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Pilih Pengacara...">
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
                <div class="col-lg-8 col-md-8 col-sm-12">
                 <!-- Melakukan Tindakan -->
        <div class="form-group">
          <label> Melakukan Tindakan</label>
          <input type="text" class="form-control" placeholder="...">
        </div>

                 <!-- Membuat Berita Acara -->
        <div class="form-group">
          <label> Membuat Berita Acara</label>
        <form>
          <kasusposisi id="editor1" name="editor" rows="3" cols="120">
            Benda Sitaan :
          </kasusposisi> 
          </div>
<div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">Rp.</span>
      <input type="int" class="form-control" aria-label="pemulihan aset">
      <span class="input-group-addon">Nilai Pemulihan Aset</span>
    </div>
</div>
        </div>
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
            </form>

          </div>

          </section>