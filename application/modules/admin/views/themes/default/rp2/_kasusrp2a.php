
<!-- Single button -->
<div class="btn-group pull-right">
  <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tindakan <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href='<?= base_url('admin/register/rp2/edit/'.$list['id']) ?>' class="text-right">Edit &nbsp;&nbsp;<i class="glyphicon glyphicon-pencil"></i></a></li>
    <li><a href="#" class="text-right">Sprint Lidik &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
    <li><a href='<?= base_url() ?>admin/register/rp2/geledah' class="text-right">Sprint Geledah &nbsp;&nbsp;<i class="glyphicon glyphicon-plus text-red"></i></a></li>
    <li role="separator" class="divider"></li>
    <LI><a href='<?= base_url() ?>admin/register/rp2/naik_dik_mum' class="text-right text-red"><strong>Dik-Mum &nbsp;&nbsp;<i class="glyphicon glyphicon-share-alt text-red"></i></strong></a> </li>
  </ul>
</div><!-- end button group -->
<div class="panel-heading" role="tab" id="headingOne"> 
	<p class="panel-title"> <a href="#collapse1" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse1" class="collapsed"> <i class="glyphicon glyphicon-resize-vertical text-green"></i>&nbsp;Consectetur adipisicing elit </a> </p>
</div>


<div class="panel-collapse collapse" role="tabpanel" id="collapse1" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
	<div class="panel-body">
	<div class="col-lg-4 col-md-4 col-sm-12 text-justify">
		<label>Kasus Posisi:</label>
		inputLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
						<div class="media-left"> <a href="#"> <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="<?= base_url() ?>assets/admin/img/nancy.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a> </div> <div class="media-body"> <strong class="media-heading">Tersangka #4</strong> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
						</div> 
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
