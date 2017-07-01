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
      <h3 class="box-title fc-toolbar">PERKARA PENYIDIKAN KHUSUS [RP-3SUS]</h3>
      <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
    </div>
    <div class="box-body table-responsive no-padding">
      <table class="table table-striped">
        <tbody>
              <tr>
                <th width="5%">ID</th>
                <th width="40%">Kasus Posisi</th>
                <th width="20%">Terlapor/Tersangka</th>
                <th width="20%">Obyek/Pidana</th>
                <th width="15%">Keterangan</th>
              </tr>
          <td colspan="5">
            <?php include_once '_kasusrp3muma.php' ?>;
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <?php include_once '_kasusrp3mumb.php' ?>;
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <?php include_once '_kasusrp3mumc.php' ?>;
          </td>
        </tr>
        <tr>
          <td colspan="5">
            <?php include_once '_kasusrp3mumd.php' ?>;
          </td>
        </tr>
      </tbody></table>
    </div>


<!--               <?php if (count($tabel_kasus)): ?>
                <?php foreach ($tabel_kasus as $key => $list): ?>
                    <tr>
                        <td><?=$list['id']?></td>
                        <td><?=$list['judul_kasus']?></td>
                        <td><?=$list['nama_lengkap']?></td>
                        <td><?=$list['kasus_posisi']?></td>    
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='<?= base_url('admin/register/kasus/edit/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='<?= base_url('admin/register/kasus/delete/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='<?= base_url() ?>admin/register/rp2' class="btn btn-success btn-sm">LIDIK</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                    <tr>
                          <td>#</td>
                          <td>No data</td>
                          <td>No data</td>
                          <td>No data</td>
                          <td>
                            <div class="btn-group" role="group" aria-label="...">
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='#' class="btn btn-success btn-sm">LIDIK</a>
                            </div>
                        </td>
                      </tr>
            <?php endif; ?> -->

          </table>
      <!-- End Content -->
    </div>
  </div>
</section>