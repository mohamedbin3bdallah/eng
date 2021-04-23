$(document).ready(function(){
	$(".del").click(function() {
		var id = $(this).attr('id');
		$("#del-"+id).modal('show');
		
	});
});

function noaction(id)
{
	$("#del-"+id).modal('hide');
}

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
				window.location.href = "admin.php?c=activatedprojects";
			}
			else
			{
				$("#cantdelete").modal('show');
				setTimeout(function() { $("#cantdelete").modal('hide'); }, 3000);
			}
		}
	});
}