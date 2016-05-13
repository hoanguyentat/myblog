$(document).ready(function(){

	function ob(x){
		return document.getElementById(x);
	}

	function addPro( a, b){
		var x = $('#content').val();
		var start = ob('content').selectionStart;
		var end = ob('content').selectionEnd;
		console.log(start);
		console.log(end);
		var select = x.slice(start,end);
		var before = x.slice(0, start) + a;
		var after = b + x.slice(end,x.length);
		$('#content').val(before + select + after);
	}

	$('button#xuongdong').click(function(){
		addPro('','</br>');
	});

	$('button#dam').click(function(){
		addPro('<b>','</b>');
	});

	$('button#nghieng').click(function(){
		addPro('<i>','</i>');
	});

	$('button#link').click(function(){
		addPro("","<img src='add-link-here' class='img-responsive' alt=''> ");
	});

	$('button#blockquote').click(function(){
		addPro('<blockquote>','</blockquote>')
	});

	$('div#dropdown-form').click(function(){
		$('div#dropdown-content').slideToggle('slow');
	});

	$('#heading2').click(function(){
		addPro('<h2>','</h2>');
	});

	$('#heading3').click(function(){
		addPro('<h3>','</h3>');
	});

	$('#heading4').click(function(){
		addPro('<h4>','</h4>');
	});

	$('#heading5').click(function(){
		addPro('<h5>','</h5>');
	});

	$('#heading6').click(function(){
		addPro('<h6>','</h6>');
	});
});