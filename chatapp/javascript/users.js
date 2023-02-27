const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
	searchBar.classList.toggle("active");
	searchBar.focus();
	searchBtn.classList.toggle("active");
	searchBar.value= "";
}

/*search bar kaj korbo*/

searchBar.onkeyup = ()=>{
	let searchTerm = searchBar.value;
	/*search dewar por override solve korar jonno*/
	if(searchTerm != ""){
		searchBar.classList.add("active");
	}else{
		searchBar.calssList.remove("active");
	}
	/*here starts Ajax*/
	let xhr = new XMLHttpRequest(); /*creating XML object*/
	/*here use GET method because we need to receive data not to send*/
	xhr.open("POST", "php/search.php", true); /*xhr.open takes many paramaters here i use only pass method, url and async*/
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;/*xhe.response gives us response of that passed URL*/
				usersList.innerHTML = data;
			}
		}

	}
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	/*sending user search term to php file with ajax*/
	xhr.send("searchTerm=" + searchTerm);


}

/*users dynamic korbo*/

setInterval(()=>{
	/*here starts Ajax*/
	let xhr = new XMLHttpRequest(); /*creating XML object*/
	/*here use GET method because we need to receive data not to send*/
	xhr.open("GET", "php/users.php", true); /*xhr.open takes many paramaters here i use only pass method, url and async*/
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;/*xhe.response gives us response of that passed URL*/
				if(!searchBar.classList.contains('active')){ /* if active not contains in search bar then add this data*/
					usersList.innerHTML = data;
				}

				/*added 3 and 22 line then show output users are shown and now these are dynamic data but user can see his own 
				account in users list right. so now i'll remove the current logged in user account from users list
				because that user can't chat his own account*/
			}
		}

	}
	xhr.send();

}, 500); /*this function will run frequently after 500ms*/