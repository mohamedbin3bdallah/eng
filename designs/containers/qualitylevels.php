<?php
$data = getAllDataFromTable($select,'qualitylevel','inner join users on qualitylevel.userid = users.id order by id ASC',$limit);
if(!empty($data))
{
?>
	<div class="row" style="margin-top: 50px;">
		<div class="col-sm-12 table-responsive">
			<table class="table table-bordered table-striped">
				<tr class="info">
					<th style="text-align: center;"><?php language('title'); ?></th>
					<th style="text-align: center;"><?php language('username'); ?></th>
					<!--<th style="text-align: center;">اضافة تعليق</th>-->
					<th></th>
				</tr>
				<?php	for($i=0;$i<sizeof($data);$i++)	{	?>
					<tr id="tr-<?php echo $data[$i]['id'];?>">
						<td style="text-align: center;"><?php echo $data[$i]['id']; ?></td>
						<td style="text-align: center;"><?php echo $data[$i]['username']; ?></td>
						<!--<td style="text-align: center;"><a href="admin.php?c=<?php echo $_GET['c']; ?>&id=<?php echo $data[$i]['id']; ?>" style="color: green;"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>-->
						<td>
							<center><a href="#" data-toggle="modal" data-target="#details-<?php echo $data[$i]['id']; ?>"><?php language('more'); ?></a></center>
							<div id="details-<?php echo $data[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى جودة الجداول الزمنية بكافة أنوعها</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الجدول الزمني للإنشاء</h5>
										<h6><?php echo $data[$i]['timecreate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الجدول الزمني لتسليم المخططات</h5>
										<h6><?php echo $data[$i]['timeplan']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الجدول الزمني لتسليم المواد</h5>
										<h6><?php echo $data[$i]['timematerial']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى الجودة من خلال مطابقة المواصفات</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الموردين المعتمدين للمواد والعينات (القسم المعماري – الميكانيكا – الكهرباء)</h5>
										<h6><?php echo $data[$i]['suppliers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	جميع العينات مطابقة للمواصفات ومعتمدة من المالك والإستشاري</h5>
										<h6><?php echo $data[$i]['samples']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مستوى الجودة من خلال مخططات الورشة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	مقياس الرسم المناسب للمخططات</h5>
										<h6><?php echo $data[$i]['scale']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الإعتبارات الشكلية للمخططات</h5>
										<h6><?php echo $data[$i]['shape']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الإعتبارات الفنية للمخططات</h5>
										<h6><?php echo $data[$i]['technical']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تحريات الجودة من خلال مستوى عمالة المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	بنود الأعمال المعمارية</h5>
										<h6><?php echo $data[$i]['architectworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	بنود الأعمال الإنشائية</h5>
										<h6><?php echo $data[$i]['createworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	بنود الأعمتال الميكانيكية</h5>
										<h6><?php echo $data[$i]['mechanicworks']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	بنود الأعمال الكهربية</h5>
										<h6><?php echo $data[$i]['electricworks']; ?></h6>
									</div>
								</div>
							</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					
				<?php	} ?>
			</table>
		</div>
	</div>
						
	<div class="row">
		<div class="col-sm-4<?php if($lang == 'ar') echo ' col-sm-push-8'; ?>">
		</div>
		<div class="col-sm-8<?php if($lang == 'ar') echo ' col-sm-pull-4'; ?>">
			<nav>
				<ul class="pagination">
					<?php if($totalPages > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>
					<?php if($page > 3) { ?><li>
						<a href="?c=<?php echo $_GET['c']; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li><?php } ?>
					<?php if($page > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
					<?php if($page < $totalPages) { ?><li><a href="?c=<?php echo $_GET['c']; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
					<?php if($page < $totalPages-1) { ?><li>
						<a href="?c=<?php echo $_GET['c']; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
				</ul>
			</nav>
		</div>
	</div>
<?php
}
else
{
	echo '<div class="row">';
		echo '<div class="col-md-8 col-md-offset-2">';
			language('nodata');
		echo '</div>';
	echo '</div>';
}
?>



<!-----------Start Some Models---------------->

<script>
<?php 
//$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if(isset($_SESSION['message'],$_SESSION['time'],$_SERVER['REQUEST_TIME']) && ($_SERVER['REQUEST_TIME'] < ($_SESSION['time']+5))) {
?>
$(document).ready(function(){
	$("#<?php echo $_SESSION['message']; ?>").modal('show');
	setTimeout(function() { $("#<?php echo $_SESSION['message']; ?>").modal('hide'); }, 3000);
});
<?php  /*unset($_SESSION['message']);*/ } ?>
</script>

<div id="success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: green;">
			<div class="modal-body">
				<center style="color: #fff;">
					<?php language('success'); ?>
				</center>
			</div>
		</div>
	</div>
</div>

<div id="cantdelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: red;">
			<div class="modal-body">
				<center style="color: #fff;">
					<?php language('cantdelete'); language('shows'); ?>
				</center>
			</div>
		</div>
	</div>
</div>

<div id="somthingwrong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: red;">
			<div class="modal-body">
				<center style="color: #fff;">
					<?php language('m2'); ?>
				</center>
			</div>
		</div>
	</div>
</div>

<div id="inputnotcorrect" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff;">
					<?php language('m3'); ?>
				</center>
			</div>
		</div>
	</div>
</div>

<div id="invalidinput" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff;">
					<?php language('m4'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<!-----------End Some Models---------------->