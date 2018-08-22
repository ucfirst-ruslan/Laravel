function up() {
	let dataSend = 'up';
	let answer = send(dataSend);
	
	let likeData = document.getElementById('likes');
	likeData.innerHTML = answer;
}

function down() {
	let dataSend = 'down';
	let answer = send(dataSend);
	
	let likeData = document.getElementById('likes');
	likeData.innerHTML = answer;
}

function send(dataSend) {
	let reqUrl = 'http://'

	fetch(reqUrl,
		{
		    method: "POST",
		    body: dataSend
		})
		.then(function(response) { 
		
			return response.json();
			
		}).then(function(data) {
			
			return data;
		});
}