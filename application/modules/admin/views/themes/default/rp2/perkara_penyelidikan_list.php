<section class="content-header">
  <h1><img class="push-left" src="<?= base_url() ?>assets/admin/dist/img/logo-kejaksaan.png" width="75">
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Register</li>
    <li class="active">Penyelidikan</li>
  </ol>
</section>
        <!-- Main content -->
<section class="content">
  <div class="box box-default">
    <div class="box-header">
      <h3 class="box-title fc-toolbar">List Perkara Penyelidikan</h3>
      <div class="box-tools pull-right">
        <a href="<?= base_url() ?>admin/register/kasus" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-1</a>
        <a href="<?= base_url() ?>admin/register/rp2" class="btn btn-app"><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-2</a>
        <a href="<?= base_url() ?>admin/register/rp3mum" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3MUM</a>
        <a href="<?= base_url() ?>admin/register/rp3sus" class="btn btn-app "><span class="badge bg-yellow">3</span><i class="fa fa-list-ul"></i>RP-3SUS</a>
        <a href="#" class="btn btn-app btn-xs"><span class="badge bg-yellow">3</span><i class="fa fa-user"></i>Tahanan</a>
      </div>
    </div>
    <div class="box-body table-responsive">
      <!-- Content -->
          <table class="table table-hover">
              <tr>
                <th width="2%">ID</th>
                <th width="40%">Kasus</th>
                <!-- <th width="20%">Terlapor/Tersangka</th>
                <th width="20%">Obyek/Pidana</th>
                <th width="15%">Action</th> -->
              </tr>
              <?php if (count($detail_kasus_obyek)): ?>
                <?php foreach ($detail_kasus_obyek as $key => $list): ?>
                  <tr>
                    <td width="1%"><?=$list['id_detail']?></td>
                    <td>
                          <!-- Single button -->
                          <div class="btn-group pull-right">
                            <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tindakan <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href='<?= base_url('admin/register/rp2/edit/'.$list['id_detail']) ?>' class="text-right">Edit &nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></li>
                              <li><a href='<?= base_url('admin/register/rp2/create_sprint_lidik/'.$list['id_detail']) ?>' class="text-right">Sprint Lidik &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
                              <li><a href='<?= base_url() ?>admin/register/rp2/geledah' class="text-right">Sprint Geledah &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
                              <li role="separator" class="divider"></li>
                              <LI><a href='<?= base_url() ?>admin/register/rp2/naik_dik_mum' class="text-right text-red"><strong>Dik-Mum &nbsp;&nbsp;<i class="glyphicon glyphicon-share-alt text-red"></i></strong></a> </li>
                            </ul>
                          </div><!-- end button group -->
                          <div class="panel-heading" role="tab" id="headingOne<?=$list['id_detail']?>"> 
                            <p class="panel-title"> <a href="#collapse<?=$list['id_detail']?>" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse1" class="collapsed"> <i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp;<?=$list['judul_kasus']?></a> </p>
                          </div>


                          <div class="panel-collapse collapse" role="tabpanel" id="collapse<?=$list['id_detail']?>" aria-labelledby="headingOne<?=$list['id_detail']?>" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                            <div class="col-lg-4 col-md-4 col-sm-12 text-justify">
                              <label>Kasus Posisi:</label>
                              <?=$list['kasus_posisi']?>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                              <table class="table table-responsive table-striped">
                                <tbody>
                                  <tr>
                                    <td>
                                    <div class="medi col-md-12a"> 
                                      <div class="btn-group-vertical btn-group-xs pull-right" role="group" aria-label="...">
                                        <a href='<?= base_url('admin/register/kasus/edit/'.$list['id']) ?>' class='btn btn-default'><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href='#' class="btn btn-default"> TSK &nbsp;<i class="glyphicon glyphicon-log-in"></i></a>
                                        <a href='#' class="btn btn-danger">  TAHAN &nbsp;<i class="glyphicon glyphicon-log-in"></i></a>
                                      </div>
                                      </div>
                                      <div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="<?= base_url() ?>assets/admin/dist/img/avatar.png" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> </div> <div class="media-body"> <strong class="media-heading">Tersangka #<?=$list['id_subyek']?></strong> Nama Terlapor : <?=$list['nama_terlapor']?> 
                                      </div> 
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>

                    </td>
                  </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <?php endif; ?>
                  

                  <!-- -->




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