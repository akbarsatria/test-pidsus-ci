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
              <div class="pull-right">
                <a href="<?= base_url() ?>admin/register/kasus/create" class="btn btn-success btn-xs"> TAMBAH KASUS &nbsp; <i class="fa fa-plus"></i></a>
              </div>
              <h3 class="box-title fc-toolbar">DAFTAR KASUS BARU [RP-1]    
              </h3>
            </div>
    <div class="box-body table-responsive">
      <!-- Content -->
          <table class="table table-hover">
              <tr>
                <th width="5%">ID</th>
                <th width="40%">Kasus</th>
                <th width="20%">Terlapor / Instansi</th>
                <th width="20%">Obyek Pidana</th>
                <th width="15%">Tindakan</th>
              </tr>

              <?php if (count($detail_kasus_subyek)): ?>
                <?php foreach ($detail_kasus_subyek as $key => $list): ?>
                    <tr>
                        <td><?=$list['id']?></td>
                        <td><?=$list['judul_kasus']?></td>
                        <td><?=$list['nama_terlapor']?></td>
                        <td><?=$list['lembaga']?></td>
                        
                        <!-- <td><?=$list['jabatan_resmi']?></td>
                        <td><?=$list['lembaga']?></td> -->
                        <!-- <td><?=$list['kasus_posisi']?></td> -->
    
                        <td>
                            <div class="btn-group-xs" role="group" aria-label="...">
                              <a href='<?= base_url('admin/register/kasus/edit/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='<?= base_url('admin/register/kasus/delete/'.$list['id']) ?>' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='<?= base_url() ?>admin/register/kasus/naik_lidik' class="btn btn-success btn-sm"><i class="glyphicon glyphicon-share-alt"></i>&nbsp;LIDIK</a>
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
                          <!-- <td>No data</td>
                          <td>No data</td> -->
                          <!-- <td>No data</td> -->
                          
                          <td>
                            <div class="btn-group-vertical" role="group" aria-label="...">
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                              <a href='#' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-minus-sign"></i></a>
                              <a href='#' class="btn btn-success btn-sm">LIDIK</a>
                            </div>
                        </td>
                      </tr>
            <?php endif; ?>

          </table>
      <!-- End Content -->
    </div>
  </div>
</section>