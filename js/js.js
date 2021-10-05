function taiAnh() {
	$.ajax("https://streamtape.com/e/mqo4YYYYdOSbrK3/")
	.done(function(rs){
		$('#msg').html(rs);
	});
}


