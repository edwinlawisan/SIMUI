document.addEventListener('DOMContentLoaded', function() {
	var elems = document.querySelectorAll('select');
	var options = document.querySelectorAll('option');
	var instances = M.FormSelect.init(elems, options);
	var input_date = document.querySelectorAll('#date');
});
$(document).ready(function(){
	console.log('Ntab');
	$( "#poll_category" )
	.change(function () {
		console.log("keubah cuy");
		if ($("#poll_category option:selected").val() == 'berita') {
			$("#url_berita_container").show();
		}else{
			console.log($("select option:selected").text());
			$("#url_berita_container").hide();
		}
	})
	.change();
});