/* function send(rate, id) {
	let reqUrl = 'http://192.168.0.15/~user10/megaapp/forum/like/'+id;

	fetch(reqUrl,
        {
            method: 'post',
            credentials: "same-origin",
            body: JSON.stringify({
                id: id,
				rate: rate
            })
        })
		.then(function(response) {

			return response.text();

		}).then(function(data) {
        //console.log(data);

        changeHtml(data, id);

		});
} */

function send(rate, id){
	axios.post('http://192.168.0.15/~user10/megaapp/forum/like/'+id, {
			id: id,
			rate: rate
		})
		.then(function (response) {
			console.log(response);
			changeHtml(response.data, id);
		})
		.catch(function (error) {
			console.log(error);
	});
}

function up(id) {
    send('up', id);
}

function down(id) {
	send('down', id);
}

function changeHtml(data, id) {

    let idPost = 'likes' + id;
    let likeData = document.getElementById(idPost);
    likeData.innerHTML = data;
}