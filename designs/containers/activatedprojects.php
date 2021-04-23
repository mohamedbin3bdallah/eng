<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<form class="form-horizontal" action="admin.php?c=<?php echo $_GET['c']; ?>" method="GET" enctype="multipart/form-data" autocomplete="off">
				<input type="hidden" name="c" value="<?php echo $_GET['c']; ?>">
				<div class="form-group">
					<label for="projectid" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label">مشروع رقم</label>
					<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
						<input type="text" class="form-control" name="projectid" id="projectid" maxlength="50" placeholder="مشروع رقم" autocomplete="off" />
					</div>
				</div>
				<div class="form-group">
					<label for="from" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label">من</label>
					<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
						<input type="date" class="form-control" name="from" id="from" />
					</div>
				</div>
				<div class="form-group">
					<label for="to" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label">الى</label>
					<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
						<input type="date" class="form-control" name="to" id="to" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
						<input type="submit" class="btn btn-info" name="search" id="search" value="بحث" />
					</div>
				</div>
			</form>
		</div>
	</div>

<?php
$data = getAllDataFromTable($select,'qualitylevel',$where,$limit);
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
					<th></th>
				</tr>
				<?php	for($i=0;$i<sizeof($data);$i++)	{	?>
					<?php $reports = getAllDataFromTable('*','reports','where projectid = '.$data[$i]['id'],'order by time DESC'); ?>
					<tr id="tr-<?php echo $data[$i]['id'];?>">
						<td style="text-align: center;"><?php echo $data[$i]['name']; ?></td>
						<td style="text-align: center;"><?php echo $data[$i]['username']; ?></td>
						<!--<td style="text-align: center;"><a href="admin.php?c=<?php echo $_GET['c']; ?>&id=<?php echo $data[$i]['id']; ?>" style="color: green;"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>-->
						<td>
							<center><a href="#" data-toggle="modal" data-target="#details-<?php echo $data[$i]['id']; ?>"><?php language('more'); ?></a></center>
							<div id="details-<?php echo $data[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
										<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">البيانات الاساسية للمشروع</h4>
									
									<h4 style="margin-bottom:25px;"><?php language('projectinfo'); ?></h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('projectname'); ?></h5>
										<h6><?php echo $data[$i]['name']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('value'); ?></h5>
										<h6><?php echo $data[$i]['value']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('location'); ?></h5>
										<h6><?php echo $data[$i]['location']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">وصف المشروع</h5>
										<h6><?php echo $data[$i]['description']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('receiptdate'); ?></h5>
										<h6><?php echo $data[$i]['receiptdate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('deliverydate'); ?></h5>
										<h6><?php echo $data[$i]['deliverydate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('contractor'); ?></h5>
										<h6><?php echo $data[$i]['contractor']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">عناصر المقاول</h5>
										<h6><?php echo $data[$i]['contractorelements']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('consultant'); ?></h5>
										<h6><?php echo $data[$i]['consultant']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">عناصر الاستشاري</h5>
										<h6><?php echo $data[$i]['consultantelements']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">ممثل المالك</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('name'); ?></h5>
										<h6><?php echo $data[$i]['ownername']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;"><?php language('location'); ?></h5>
										<h6><?php echo $data[$i]['ownerlocation']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">التواصل مع المالك</h5>
										<h6><?php echo $data[$i]['ownercontact']; ?></h6>
									</div>
								</div>
								
										<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذه من الإستشاري في حال النقص في عناصر المقاول او عدم الكفاءة من خلال المراسلات</h4>
									
									<h4 style="margin-bottom:25px;">1-	أحوال عناصر المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	النقص في المهندسين والمراقبين</h5>
										<h6><?php echo $data[$i]['engineers']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-1-	النقص في العمالة المدربة</h5>
										<h6><?php echo $data[$i]['employees']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">2-	أثر النقص في العناصر على التقدم بالمشروع</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	النقص في العناصر على التقدم بالمشروع</h5>
										<h6><?php echo $data[$i]['elements']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإجراءات التي تمت بواسطة الإستشاري</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	المقاول</h5>
										<h6><?php echo $data[$i]['contractor1']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-3-	المالك</h5>
										<h6><?php echo $data[$i]['owner1']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">4-	فحص مؤهلات عناصر المقاول</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-4-	اعتماد مدير المشروع</h5>
										<h6><?php echo $data[$i]['manageragree']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-4-	اعتماد المالك</h5>
										<h6><?php echo $data[$i]['owneragree']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">5-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-5-	الإستنتاج</h5>
										<h6><?php echo $data[$i]['conclusion1']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال النقص في معدات المقاول</h4>
									
									<h4 style="margin-bottom:25px;">1-	أحوال معدات المقاول بالتفصيل</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	الأحوال العامة لنقص المعدات</h5>
										<h6><?php echo $data[$i]['equipments']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-1-	تفاصيل المعدات الناقصة</h5>
										<h6><?php echo $data[$i]['equipmentstext']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">2-	تأثير النقص في معدات المقاول على التقدم بالعمل</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	قام الإستشاري بذكر كافة الجوانب السلبية التي تعرض لها التقدم بالمشروع بسبب النقص في المعدات وذلك في المراسلات</h5>
										<h6><?php echo $data[$i]['equipmentssend']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإجراءات المتخذة من الإستشاري</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	المقاول</h5>
										<h6><?php echo $data[$i]['contractor2']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-3-	المالك</h5>
										<h6><?php echo $data[$i]['owner2']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">4-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-4-	الإستنتاج</h5>
										<h6><?php echo $data[$i]['conclusion2']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال عدم وجود جداول زمنية بمختلف أنواعها</h4>
									
									<h4 style="margin-bottom:25px;">1-	الجداول الزمنية للإنشاء</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	الجدول الزمني الأساسي</h5>
										<h6><?php echo $data[$i]['timebasiccreate']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-1-	الجدول الزمني المحدث</h5>
										<h6><?php echo $data[$i]['timeupdatecreate']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">2-	الجداول الزمنية للتقديمات</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	الجدول الزمني الأساسي</h5>
										<h6><?php echo $data[$i]['timebasicapply']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	الجدول الزمني المحدث</h5>
										<h6><?php echo $data[$i]['timeupdateapply']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	تأثير غياب الجداول الزمنية على المشروع</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	تم مراجعة جميع البنود المتأخرة في التنفيذ وغير مطابقة للجداول الزمنية من قبل مدير المشروع وتم ذكر ذلك في المراسلات</h5>
										<h6><?php echo $data[$i]['timesend']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">4-	الإجراءات المتخذة من الإستشاي تجاه عدم وجود جداول زمنية</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-4-	المقاول</h5>
										<h6><?php echo $data[$i]['contractor3']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-4-	المالك</h5>
										<h6><?php echo $data[$i]['owner3']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">5-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-5-	الإستنتاج</h5>
										<h6><?php echo $data[$i]['conclusion3']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال وجود معوقات للتنفيذ</h4>
									
									<h4 style="margin-bottom:25px;">1-	أنواع معوقات التنفيذ للمشروع خلال آخر ثلاث شهور</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أنواع معوقات</h5>
										<h6><?php echo $data[$i]['challengesex']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	المقاول</h5>
										<h6><?php echo $data[$i]['contractor4']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	المالك</h5>
										<h6><?php echo $data[$i]['owner4']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	الإستنتاج</h5>
										<h6><?php echo $data[$i]['conclusion4']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الإجراءات المتخذة من الإستشاري في حال وجود معوقات إدارية</h4>
									
									<h4 style="margin-bottom:25px;">1-	أنواع المعوقات الإدارية للمشروع خلال آخر ثلاث شهور</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	أنواع معوقات</h5>
										<h6><?php echo $data[$i]['challengesma']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	المقاول</h5>
										<h6><?php echo $data[$i]['contractor5']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	المالك</h5>
										<h6><?php echo $data[$i]['owner5']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	الإستنتاج</h5>
										<h6><?php echo $data[$i]['conclusion5']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">الأجراءات المتخذة من الإستشاري في حال النقص في اجراءات الأمن والسلامة</h4>
									
									<h4 style="margin-bottom:25px;">1-	تفاصيل النقص في اجراءات الأمن والسلامة</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-1-	تفاصيل النقص</h5>
										<h6><?php echo $data[$i]['safety']; ?></h6>
									</div>

									<h4 style="margin-bottom:25px;">2-	الإجراءات المتخذة من الإستشاري (قام الإستشاري بمراسلة الجهات التالية خلال الثلاث شهور الماضية)</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-2-	المقاول</h5>
										<h6><?php echo $data[$i]['contractor6']; ?></h6>
									</div>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">2-2-	المالك</h5>
										<h6><?php echo $data[$i]['owner6']; ?></h6>
									</div>
									
									<h4 style="margin-bottom:25px;">3-	الإستنتاج</h4>
									<div style="margin-bottom:25px;">
										<h5 style="margin-bottom:15px;">1-3-	الإستنتاج</h5>
										<h6><?php echo $data[$i]['conclusion6']; ?></h6>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">عمل التقارير الدورية بأنواعها</h4>
									
									<div style="margin-bottom:25px;">
										<h5><?php echo $data[$i]['reports1']; ?></h5>
										<h5><?php echo $data[$i]['reports2']; ?></h5>
										<h5><?php echo $data[$i]['reports3']; ?></h5>
										<h5><?php echo $data[$i]['reports4']; ?></h5>
										<h5><?php echo $data[$i]['reports5']; ?></h5>
										<h5><?php echo $data[$i]['reports6']; ?></h5>
										<h5><?php echo $data[$i]['reports7']; ?></h5>
										<h5><?php echo $data[$i]['reports8']; ?></h5>
										<h5><?php echo $data[$i]['reports9']; ?></h5>
										<h5><?php echo $data[$i]['reports10']; ?></h5>
										<h5><?php echo $data[$i]['reports11']; ?></h5>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">ملف الإجتماعات</h4>
									
									<h4 style="margin-bottom:25px;">1-	دواعي محاضر الإجتماعات</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $data[$i]['meetreson1']; ?></h5>
										<h5><?php echo $data[$i]['meetreson2']; ?></h5>
										<h5><?php echo $data[$i]['meetreson3']; ?></h5>
										<h5><?php echo $data[$i]['meetreson4']; ?></h5>
									</div>
									<h4 style="margin-bottom:25px;">2-	مستندات محاضر الإجتماعات</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $data[$i]['meetdoc1']; ?></h5>
										<h5><?php echo $data[$i]['meetdoc2']; ?></h5>
										<h5><?php echo $data[$i]['meetdoc3']; ?></h5>
										<h5><?php echo $data[$i]['meetdoc4']; ?></h5>
									</div>
								</div>
								<div style="margin-bottom:45px;">
									<h4 style="text-align:center; margin-bottom:35px;">ملف الطلبات</h4>
									
									<h4 style="margin-bottom:25px;">1-	أحوال سير الإنشاء في ضوء طلبات المقاول للتنفيذ</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $data[$i]['createmode1']; ?></h5>
										<h5><?php echo $data[$i]['createmode2']; ?></h5>
										<h5><?php echo $data[$i]['createmode3']; ?></h5>
									</div>
									<h4 style="margin-bottom:25px;">2-	انواع المرفقات للطلبات</h4>
									<div style="margin-bottom:25px;">
										<h5><?php echo $data[$i]['attachtype1']; ?></h5>
										<h5><?php echo $data[$i]['attachtype2']; ?></h5>
										<h5><?php echo $data[$i]['attachtype3']; ?></h5>
										<h5><?php echo $data[$i]['attachtype4']; ?></h5>
									</div>
								</div>
								
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
						<td>
							<center><a href="#" data-toggle="modal" data-target="#reports-<?php echo $data[$i]['id']; ?>"><?php language('reports'); ?></a></center>
							<div id="reports-<?php echo $data[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<h4 style="text-align:center; margin-bottom:35px;"><?php echo $data[$i]['name']; ?></h4>

											<div class="row" style="margin-top: 50px;">
												<div class="col-sm-12">
													<form class="form-horizontal" action="admin.php?c=<?php echo $_GET['c']; ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
														<?php	echo '<input type="hidden" name="projectid" value="'.$data[$i]['id'].'">';	?>
														<div class="form-group">
															<label for="report" class="col-sm-2 <?php if($lang == 'ar') echo 'col-sm-push-10'; ?> control-label"><?php language('report'); ?></label>
															<div class="col-sm-10 <?php if($lang == 'ar') echo 'col-sm-pull-2'; ?>">
																<textarea class="form-control" name="report" id="report" rows="5" placeholder="<?php language("report"); ?>" required></textarea>
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-10">
																<input type="submit" class="btn btn-info" name="submit" id="submit" value="<?php language("save"); ?>" />
															</div>
														</div>
													</form>
												</div>
											</div>
											
											<div class="row" style="margin-top: 50px;">
												<?php if(!empty($reports)) { ?>
												<div class="col-sm-12 table-responsive">
													<table class="table table-bordered table-striped" style="text-align: center;">
														<tr class="info">
															<th style="text-align:center">المسلسل</th>
															<th style="text-align:center"><?php language('report'); ?></th>
															<th style="text-align:center" width="25%"><?php language('time'); ?></th>
															<th></th>
														</tr>
														<?php	for($j=0;$j<sizeof($reports);$j++)	{	?>
															<tr>
																<td><?php echo $j+1; ?></td>
																<td><?php echo $reports[$j]['report']; ?></td>
																<td width="25%"><?php echo date('Y-m-d h:i:s A', $reports[$j]['time']); ?></td>
																<td>
																	<i id="<?php echo $reports[$j]['id'].'-'.$reports[$j]['projectid'];?>" style="color:red;" class="del glyphicon glyphicon-remove-circle"></i>
																	<div id="del-<?php echo $reports[$j]['id'].'-'.$reports[$j]['projectid'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																		<div class="modal-dialog modal-sm">
																			<div class="modal-content">
																				<div class="modal-header">
																					<?php language('deletemodal'); ?>
																					<br>
																				</div>
																				<div class="modal-body">
																					<center>
																						<button class="btn btn-danger" onclick="mydelete('<?php echo $reports[$j]['id'];?>','reports')" data-dismiss="modal"><?php language('agree'); ?></button>
																						<button class="btn btn-success" onclick="noaction('<?php echo $reports[$j]['id'].'-'.$reports[$j]['projectid'];?>')" data-dismiss="modal"><?php language('no'); ?></button>
																						<!--<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php //language('no'); ?></button>-->
																					</center>
																				</div>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														<?php } ?>
													</table>
												</div>
												<?php } ?>
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
					<?php if($totalPages > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>
					<?php if($page > 3) { ?><li>
						<a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li><?php } ?>
					<?php if($page > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
					<?php if($page < $totalPages) { ?><li><a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
					<?php if($page < $totalPages-1) { ?><li>
						<a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li><?php } ?>
					<?php if($totalPages > 1) { ?><li><a href="?c=<?php echo $_GET['c']; ?><?php echo $url; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
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