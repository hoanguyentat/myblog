$(document).ready(function(){
	$('button#xuongdong').click(function(){
		var x = $('#editcontent').val();
		x = x + "</br>";
		$('#editcontent').val(x);
	});

	$('button#dam').click(function(){
		var x = $('#editcontent').val();
		x = x + "<b> </b>";
		$('#editcontent').val(x);
	});

	$('button#nghieng').click(function(){
		var x = $('#editcontent').val();
		x = x + "<i> </i>";
		$('#editcontent').val(x);
	});

	$('button#link').click(function(){
		var x = $('#editcontent').val();
		x = x + "<img src='' class='img-responsive' alt=''> ";
		$('#editcontent').val(x);
	});

	$('button#blockquote').click(function(){
		var x = $('#editcontent').val();
		x = x + "<blockquote> </blockquote>";
		$('#editcontent').val(x);
	});
});