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
    <div class="box-header">
      <h3 class="box-title fc-toolbar">DAFTAR PERKARA PENYELIDIKAN [RP-2]</h3>
    </div>
    <div class="box-body table-responsive">
      <!-- Content -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-striped">
          <tbody>
            <tr>
              <th width="5%">ID</th>
              <th width="40%">Kasus Posisi</th>
              <th width="20%">Terlapor/Tersangka</th>
              <th width="20%">Obyek/Pidana</th>
              <th width="15%" class="text-right">Keterangan</th>
            </tr>
            <tr>
              <td colspan="5">
                <?php include_once '_kasusrp2a.php' ?>;
              </td>
            </tr>
            <tr>
              <td colspan="5">
                <?php include_once '_kasusrp2b.php' ?>;
              </td>
            </tr>
            <tr>
              <td colspan="5">
                <?php include_once '_kasusrp2c.php' ?>;
              </td>
            </tr>
            <tr>
              <td colspan="5">
                <?php include_once '_kasusrp2d.php' ?>;
              </td>
            </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>

      <!-- End Content -->
    </div>
  </div>
</section>