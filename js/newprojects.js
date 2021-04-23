$(document).ready(function(){
	$(".checkactive").change(function() {
    if(this.checked) { 
		var id = $(this).attr('id');
		$.ajax({
			type:'POST',
			//data:dataString,
			data: {	
			'id': id,
			},
			url:'ajaxs/checkactive.php',
			success: function (response) {
				if(response == 1) { document.location.href = 'admin.php?c=newprojects'; }
				else $(".checkactive").removeAttr('checked');
			}
		});
	}
	});
});

$(document).ready(function(){
	$(".del").click(function() {
		var id = $(this).attr('id');
		$("#del-"+id).modal('show');
		
	});
});

function mydelete(id,currenttable)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		'currenttable': currenttable,
		},
		url:'ajaxs/deleteind.php',
		success: function (response) {
			if(response == 1)
			{
				$("#tr-"+id).hide();
				$("#success").modal('show');
				setTimeout(function() { $("#success").modal('hide'); }, 3000);
			}
			else
			{
				$("#cantdelete").modal('show');
				setTimeout(function() { $("#cantdelete").modal('hide'); }, 3000);
			}
		}
	});
}