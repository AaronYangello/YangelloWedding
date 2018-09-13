var token = '221434880.d719742.309ca40db1f2466b9e6a20f686ac4969',
    hashtag='halloween', // hashtag without # symbol
    num_photos = 4;
 
$.ajax({
	url: 'https://api.instagram.com/v1/tags/' + hashtag + '/media/recent',
	dataType: 'jsonp',
	type: 'GET',
	data: {access_token: token, count: num_photos},
	success: function(data){
		console.log(data);
		for(x in data.data){
			$('ul').append('<li><img src="'+data.data[x].images.standard_resolution.url+'"></li>');  
		}
	},
	error: function(data){
		console.log(data);
	}
});

//221434880.d719742.309ca40db1f2466b9e6a20f686ac4969