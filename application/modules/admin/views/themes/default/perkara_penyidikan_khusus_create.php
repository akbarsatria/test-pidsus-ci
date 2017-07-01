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
              <h3 class="box-title">PERKARA PENYIDIKAN KHUSUS</h3>
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
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Status</label>
            <div class="input-group">
              <div class="input-group-btn"> 
                <button type="button" class="btn btn-default" aria-label="stop" title="DIHENTIKAN"><span class="glyphicon glyphicon-minus-sign"></span> </button>
                <button type="button" class="btn btn-default" aria-label="transfer" title="DIALIHKAN"><span class="glyphicon glyphicon-transfer"></span></button> </div> 
                <input class="form-control" aria-label="Text input with multiple buttons" placeholder="Keterangan Status...">
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">       
              <!-- No. Surat -->
            <div class="form-group">
              <label> No. Surat</label>
              <input type="text" class="form-control" placeholder="PRINT-">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group">
              <label>Pasal Disangkakan</label>
              <select class="form-control" style="width: 250px;">
                <option selected="selected">Pasal...</option>
                <option>Pasal 1</option>
                <option>Pasal 2</option>
                <option>Pasal 3</option>
                <option>Pasal 4</option>
                <option>Pasal 5</option>
                <option>Pasal 6</option>
              </select>
            </div>
          </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
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
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Judul Kasus : Brunch 3 wolf moon tempor, sunt aliqua put a bird on it</h3>
          </div>
          <div class="panel-body">
            <strong>Kasus Posisis: </strong> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">
            <strong>PEMULIHAN ASET</strong>
          </a>
          <a href="#" class="list-group-item">Nilai Anggaran <div class="pull-right">
            Rp. xxx.xxx.xxx.xxx 
          </div></a>
          <a href="#" class="list-group-item">Kerugian Negara<div class="pull-right">
            Rp. xxx.xxx.xxx.xxx 
          </div></a>
          <a href="#" class="list-group-item">Pemulihan Aset<div class="pull-right">
            Rp. xxx.xxx.xxx.xxx 
          </div></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-68 col-sm-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2 bg-gray">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header">
            <div class="widget-user-image">
              <img class="img-circle" src="<?= base_url() ?>assets/admin/img/steven.jpg" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">Steven Carmichael</h3>
            <h5 class="widget-user-desc">DITAHAN</h5>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li><a href="#">Surat Penetapan Tersangka <strong class="pull-right">B-xxx/xx/mm/yyyy</strong></a></li>
              <li><a href="#">Institusi / Lembaga <span class="pull-right">Pem.Prov Lampung</span></a></li>
              <li><a href="#">Jabatan Resmi <span class="pull-right ">Gubernur</span></a></li>
              <li><a href="#">Jabatan Lain <span class="pull-right">Panitia Lelang</span></a></li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->

      </div>
      <div class="box-body">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h4>DATA Pengacara</h4>
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
              <div class="box-footer">
                <a href="<?= base_url() ?>admin/register/rp3sus" class="btn btn-danger"> BATAL</a>
                <div class="box-tools pull-right">
                  <button type="reset" href="#" class="btn btn-warning"> CLEAR</button>
                  <button type="submit" href="#" class="btn btn-success"> KIRIM</button>
                </div>
              </div>
            </form>

          </div>

          </section>