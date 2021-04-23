<?php

function language($lang)
{
	$arr[' '] = " ";
	$arr[':'] = " : ";
	$arr['/'] = " / ";
	$arr['-'] = " - ";
	$arr['*'] = " * ";
	
	$arr['edit'] = "تعديل";
	$arr['delete'] = "حذف";
	$arr['en'] = "انجليزي";
	$arr['ar'] = "عربي";
	$arr['first'] = "الأول";
	$arr['next'] = "التالي";
	$arr['previous'] = "السابق";
	$arr['last'] = "الأخير";
	$arr['total'] = "الاجمالي";
	$arr['select'] = "اختر";
	$arr['comment'] = "تعليق";
	$arr['share'] = "مشاركة";
	$arr['save'] = "حفظ";
	$arr['deletemodal'] = "هل انت متاكد من رغبتك في حذف هذا البيان ؟";
	$arr['agree'] = "موافق";
	$arr['no'] = "لا";
	$arr['cantdelete'] = "لا يمكنك حذف هذا البيان لانه يحتوي على ";
	$arr['success'] = "تمت بنجاح";
	$arr['nodata'] = "لا توجد بيانات";
	$arr['more'] = "المزيد";
	$arr['details'] = "التفاصيل";
	$arr['job'] = "الوظيفة";
	
	//	Messages
	$arr['m1'] = "تمت العملية بنجاح";
	$arr['m2'] = "يوجد خطا ما";
	$arr['m3'] = "اكتب البيان بشكل صحيح";
	$arr['m4'] = "المدخل غير متاح";
	$arr['m5'] = "كل الخانات مطلوبة";
	$arr['m6'] = "كلمتا السر يجب ان يتساويا";
	$arr['m7'] = "كلمة السر يجب ان تحوي حرف صغير وحرف كبير وعدد ويجب ان تكون اكثر من او يساوي 8 حروف";
	$arr['m8'] = "خانة من يجب ان تكون اصغر من او تساوي خانة الى";
	$arr['m9'] = "اسم المستخدم غير متاح";
	$arr['m10'] = "تم تحويل الرصيد اليك بنجاح";
	$arr['m11'] = "تم ارسال الرسالة";
	$arr['m12'] = "املا الخانات بشكل صحيح";
	$arr['m13'] = "الايميل غير متاح";
	$arr['m14'] = "البريد الاكتروني او كلمة المرور غير صحيحتان";
	$arr['m15'] = "الحساب لم يفعل بعد";
	$arr['m16'] = "ِالحساب مفعل سابقا";
	$arr['m17'] = "ِالحساب ليس موجود";
	$arr['m18'] = "لو سمحت ادخل الى بريدك الالكتروني وفعل الحساب";
	$arr['m19'] = "تم تفعيل حسابك";
	$arr['m20'] = "اسم المستخدم او كلمة المرور خطا";
	$arr['m21'] = "يجب ان يكون عدد حروف اسم المستخدم اكثر من 5 احرف و اقل من 255 حرف من حروف اللغة الانجليزية";
	
	// Register
	$arr['register'] = "التسجيل";
	$arr['address'] = "العنوان";
	$arr['phone'] = "الهاتف";
	$arr['dealer'] = "تاجر";
	
	// Login
	$arr['currentuser'] = "مستخدم حالي";
	$arr['username'] = "اسم المستخدم";
	$arr['email'] = "البريد الالكتروني";
	$arr['password'] = "كلمة المرور";
	$arr['login'] = "الدخول";
	
	// Menu
	$arr['menu'] = "القائمة";
	$arr['slides'] = "صور الرئيسية";
	$arr['system'] = "النظام";
	$arr['pages'] = "الصفحات";
	$arr['projects'] = "المشروعات";
	$arr['newprojects'] = "المشروعات الجديدة";
	$arr['activatedprojects'] = "المشروعات المفعلة";
	$arr['qualitylevels'] = "مستويات الجودة";
	$arr['projectfiles'] = "ملفات المشروع";
	$arr['projectmanages'] = "ادارة المشروع";
	$arr['sitepages'] = "صفحات الموقع";
	$arr['about'] = "عنا";
	$arr['websitemap'] = "خريطة الموقع";
	$arr['categories'] = "التصنيفات";
	$arr['works'] = "الاعمال";
	$arr['employees'] = "الموظفين";
	$arr['users'] = "المستخدمين";
	$arr['contact'] = "التواصل";
	$arr['account'] = "الحساب";
	$arr['logout'] = "الخروج";
	
	// System
	$arr['website'] = "اسم الموقع";
	$arr['logo'] = "لوجو الموقع";
	$arr['paypal'] = "باي بال";
	$arr['bank'] = "بنك";
	
	// Pages
	$arr['page'] = "الصفحة";
	$arr['keywords'] = "الكلمات الدالة";
	
	// Projects
	$arr['project'] = "المشروع";
	$arr['myprojects'] = "مشروعاتي";
	$arr['addproject'] = "اضافة مشروع";
	$arr['editproject'] = "تعديل مشروع";
	$arr['projectinfo'] = "بيانات المشروع";
	$arr['ownerinfo'] = "بيانات المالك";
	$arr['projectname'] = "اسم المشروع";
	$arr['value'] = "القيمة";
	$arr['location'] = "الموقع";
	$arr['receiptdate'] = "تاريخ استلام الموقع";
	$arr['deliverydate'] = "تاريخ التسليم الابتدائي";
	$arr['contractor'] = "المقاول";
	$arr['consultant'] = "الاستشاري";
	$arr['reports'] = "تقارير";
	$arr['report'] = "التقرير";
	
	// About
	$arr['descar'] = "الوصف بالعربي";
	$arr['descen'] = "الوصف بالانجليزي";
	$arr['whoweare'] = "من نحن";
	$arr['videotitle'] = "عنوان الفيديو";
	$arr['videotext'] = "تعليق الفيديو";
	
	// News
	$arr['preview'] = "المشاهدة";
	$arr['description'] = "الوصف";
	$arr['title'] = "العنوان";
	$arr['active'] = "التفعيل";
	$arr['time'] = "الوقت";
	
	// Sitepages
	$arr['category'] = "القسم";
	
	// Details
	$arr['medaly'] = "ميدالية";
	$arr['chart'] = "رسم بياني";
	$arr['circle'] = "دائرة";
	$arr['clock'] = "ساعة";
	$arr['lamp'] = "لمبة";
	$arr['code'] = "كود";
	
	// Features
	$arr['person'] = "شخص";
	$arr['map'] = "خريطة";
	$arr['headphone'] = "سماعة";
	$arr['clickbutton'] = "ضغط على زر";
	$arr['24hourservice'] = "خدمة 24ر ساعة";
	$arr['settings'] = "اعدادات";
	
	// Testimonials
	$arr['picture'] = "الصورة";
	$arr['name'] = "الاسم";
	$arr['job'] = "الوظيفة";
	
	// Contact
	$arr['address'] = "العنوان";
	$arr['phone'] = "الهاتف";
	$arr['mobile'] = "الموبايل";
	$arr['facebook'] = "فيسبوك";
	$arr['twitter'] = "تويتر";
	$arr['googleplus'] = "جوجل بلاس";
	$arr['instagram'] = "انستجرام";
	$arr['youtube'] = "يوتيوب";
	$arr['linkedin'] = "لينكد إن";
	
	echo $arr[$lang];
}

?>