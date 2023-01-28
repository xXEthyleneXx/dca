// Creates variable called url that stores absolute path to adminUsers php file
let url = "/api/get/adminUsers/";

const first = document.getElementById("admin_user_first_name");
const last = document.getElementById("admin_user_last_name");
const mid = document.getElementById("admin_user_middle_init");
const role = document.getElementById("admin_user_roll");
const image = document.getElementById("admin_user_image");

// Asynchronous function request_user
async function request_user() {
	// Creates new variable set to api that is promised (await) to be returned from the url
    let fetch_return = await fetch(url);
    let json = await fetch_return.json();

    return json["data"];
}

function setuser(user){
    first.innerHTML = "Null First Name";
	last.innerHTML = "Null Last Name";
	mid.innerHTML = "Null Middle Init";
	image.innerHTML = "Null Image";
	role.innerHTML = "Null Roll";
}