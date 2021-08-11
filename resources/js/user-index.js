$(function() {
	let sotre_user = $('#store_user')
	let form = $('#create_user_table')

	sotre_user.click(function() {		
	    axios.post(
	    	form.prop('action'), 
	    	form.serialize()
	    )
	    .then(function (response) {
	    	if (response.data.code === '0000') {
	    		$('#create_user').modal('hide')
	    	}
	    })
	    .catch(function (error) {
	    	console.log('456')
	    	if (error.response) {
		        console.log(error.response);
		      	console.log(error.response.status);
		      	console.log(error.response.headers);
	      	}
	    });
	});
})
