let url = "/api/get/users/";
async function request_user() {
    let fetch_return = await fetch(url);
    let json = await fetch_return.json();
    return json["data"];
}

async function setuser(users){
	users.forEach(element => {
		print(element);
	});
}