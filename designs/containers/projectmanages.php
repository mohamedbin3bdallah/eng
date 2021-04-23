<?php
$data = getAllDataFromTable($select,'projectmanages','inner join users on projectmanages.userid = users.id order by id ASC',$limit);
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
									<h4 style="text-align:center; margin-bottom:35px;">مدى كفاية عناصر الإستشاري مقارنة بحجم العمل</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	عدد المهندسين الكلي مقارنة بالعقد</h5>
										<h6><?php echo $data[$i]['totalengineers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	عدد المراقبين الكلي مقارنة بعقد الإستشاري</h5>
										<h6><?php echo $data[$i]['totalfollowers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	تأثير الإجازات السنوية على اكتمال العناصر</h5>
										<h6><?php echo $data[$i]['yearlyvacation']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم الأداء الفني لعناصر الإستشاري</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	تقييم الأداء الفني لعناصر الإستشاري</h5>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote3']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote4']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote5']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote6']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['technicalvote7']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	الخبرة الفنية لمدير المشروع للإستشاري</h5>
										<h6><?php echo $data[$i]['technicalexper']; ?></h6>
									</div>
								</div>
								
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">أعداد عناصر المقاول مطابقة للإحتياجات الفعلية</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	مدي كفاية المهندسين بعناصر المقاول لأداء كافة الأعمال الجارية</h5>
										<h6><?php echo $data[$i]['contractorengineers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	مدى كفاية المراقبين بعناصر المقاول لأداء كافة بنود الأعمال الجارية</h5>
										<h6><?php echo $data[$i]['contractorfollowers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	المقاول قادر على اضافة عناصر اضافية في حال احتياج العمل</h5>
										<h6><?php echo $data[$i]['neededadd']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم أداء عناصر المقاول</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	تصنيف المقاول في سوق العمل</h5>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank3']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank4']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank5']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank6']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank7']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contractorrank8']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم العلاقة بين الاستشاري والمقاول</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	عندما يقوم المقاول بأعمال بدون تقديم طلب للإستشاري</h5>
										<h6><?php echo $data[$i]['contractorapply']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	في حال تعميد المقاول بخطاب من الإستشاري</h5>
										<h6><?php echo $data[$i]['contractormessage']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	موقف المقاول مع الإستشاري</h5>
										<h6><?php echo $data[$i]['contractorsetu']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تقييم مدى توفير المقاول المكان الملائم للإستشاري بالموقع</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	الفرغات المعمارية</h5>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['archgab1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['archgab2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['archgab3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	التأثيث الداخلي للفراغات</h5>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['gabin1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['gabin2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['gabin3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	وسائل الإتصال</h5>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contact1']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contact2']; ?></h6>
										<h6 style="margin-bottom:5px;"><?php echo $data[$i]['contact3']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">أحوال مركبات المقاول</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	أعداد المركبات</h5>
										<h6><?php echo $data[$i]['carsnum']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	أنواع المركبات</h5>
										<h6><?php echo $data[$i]['carstype']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الصيانة الدورية</h5>
										<h6><?php echo $data[$i]['carsupdate']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مطالبات المقاول للبنود الجديدة</h4>
									
									<h4 style="margin:25px;">1- أنواع المطالبات للبنود الجديدة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أوامر تغيير معتمدة</h5>
										<h6><?php echo $data[$i]['orders1']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	مخططات أو تعديلات جديدة</h5>
										<h6><?php echo $data[$i]['neworders1']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">مطالبات المقاول لمدة اضافية للتنفيذ</h4>
									
									<h4 style="margin:25px;">1- أنواع المطالبات للبنود الجديدة التي تم المطالبة بموجبها</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أوامر تغيير معتمدة</h5>
										<h6><?php echo $data[$i]['orders2']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	مخططات أو تعديلات جديدة</h5>
										<h6><?php echo $data[$i]['neworders2']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">المعوقات التي تؤثر على الجدوال الزمنية بأنواعها</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	معوقات خاصة بقدرات المقاول</h5>
										<h6><?php echo $data[$i]['contractorchall1']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	تعديلات من الإستشاري أو المالك أو كلاهما</h5>
										<h6><?php echo $data[$i]['expertupdate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	مشكلات مالية خاصة بالمالك</h5>
										<h6><?php echo $data[$i]['financialproblem']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	المعوقات التنفيذية</h5>
										<h6><?php echo $data[$i]['executechall']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">المعوقات الخاصة بتسليم المواد طبقا للجدول الزمني</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	معوقات خاصة بالمقاول</h5>
										<h6><?php echo $data[$i]['contractorchall2']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	أوامر التغيير</h5>
										<h6><?php echo $data[$i]['orderupdate']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">المعوقات الخاصة بتسليم مخططات الورشة طبقا للجدول الزمني</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	معوقات خاصة بالمقاول</h5>
										<h6><?php echo $data[$i]['contractorchall3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	تعدد التعديلات من المالك أو الاستشاري أو كلاهما</h5>
										<h6><?php echo $data[$i]['multiexpertupdate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	رفض مخططات الورشة من قبل الاستشاري</h5>
										<h6><?php echo $data[$i]['rejectplans']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">استلام الأعمال على أسس نظامية</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	طلبات الإستلام للأعمال معبأة بشكل جيد</h5>
										<h6><?php echo $data[$i]['resiveorders']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	استيفاء جميع جوانب المطابقة للتخصصات المختلفة</h5>
										<h6><?php echo $data[$i]['fullcopy']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	النتيجة النهائية للإستلام الأعمال</h5>
										<h6><?php echo $data[$i]['finalresult']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">تحريات اعتبارات الأمن والسلامة</h4>
									
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-	تأمين الموقع</h5>
										<h6><?php echo $data[$i]['sitesafety']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-	تأمين مناطق العمل الداخلية للمشروع</h5>
										<h6><?php echo $data[$i]['worksafety']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">3-	الإمداد بالمخازن والمكاتب</h5>
										<h6><?php echo $data[$i]['storeadd']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">4-	امداد العمالة بوسائل الأمن والسلامة</h5>
										<h6><?php echo $data[$i]['safetyadd']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">5-	الأحوال العامة</h5>
										<h6><?php echo $data[$i]['generalmode']; ?></h6>
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