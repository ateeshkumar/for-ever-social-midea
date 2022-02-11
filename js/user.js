const searchbar = document.querySelector(".user .search input"),
searchBtn = document.querySelector(".user .search button"),
userList = document.querySelector(".user .search .user-list");

searchBtn.onclick = ()=>{
    searchbar.classList.toggle("active");
    searchbar.focus();
    searchBtn.classList.toggle("active");
}
searchbar.onkeyup = ()=>{
    let searchTerm = searchbar.value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/search.php",true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                // userList.innerHTML = data;
                console.log(data);
            }
        }

    }
    xhr.setRequestHeader("contant-type", "application/x-www-form-urlencoded");
    xhr.send("search term" + searchTerm);
}
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET","php/user.php",true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                userList.innerHTML = data;
                // console.log(data);
            }
        }

    }
    xhr.send();
}, 500);