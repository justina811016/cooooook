$(function() {
	let sotre_user = $('#store_user')
	let form = $('#create_user_table')

	sotre_user.click(function() {
	    $.ajax({ //2
	        url: form.prop('action'),
	        method: form.prop('method'),
	        dataType: 'json',  //3
	        data: form.serialize() //4
	    }).done( function (response) {
	    	console.log(response)
	    });
	});
})
