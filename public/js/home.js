function window_loginOn(){
    const div=document.querySelector(".div_userOff");
    const a=document.querySelector("#user").textContent.trim();
    if(a!="Accedi"){
        div.classList.add("div_userOn");
    }
}

function window_loginOff(){
    const div=document.querySelector(".div_userOff");
    div.classList.remove("div_userOn");
    
}

function search_content(event){
    event.preventDefault();
    const data_form = new FormData(document.querySelector(".header_search form"));
    fetch(SEARCH_URL+encodeURIComponent(data_form.get('search')))
    .then(OnResponse)
    .then(json_album);
}


function OnResponse(response){
    return response.json();
}


function noresult(){
    console.log("No result");
    document.querySelector(".searchbar").style.color="#cc0000";
    document.querySelector(".no_result_off").classList.add("no_result_on");
}
function json_album(json){
    LikeOn_or_Off();
    if(json.error){
        noresult();
        const album= document.querySelector('#album');
        album.innerHTML = '';
        return;
    }else(document.querySelector(".no_result_off").classList.remove("no_result_on"));
    const album= document.querySelector('#album');
    album.innerHTML = '';
    for(let i=0;i<20;i++){
        const div=document.createElement('div');
        div.dataset.album=json.topalbums.album[i].name;
        div.dataset.artist=json.topalbums.album[i].artist.name;
        div.dataset.img=json.topalbums.album[i].image[3]["#text"];
        div.dataset.playcount=json.topalbums.album[i].playcount;
        div.className="childDiv_album";
        const img=document.createElement("img");
        const p=document.createElement('p');
        p.innerHTML=json.topalbums.album[i].name;
        p.className="album_name";
        const div_name=document.createElement("div");
        img.src=json.topalbums.album[i].image[3]["#text"];
        const div_likeimg=document.createElement("div");
        div_likeimg.className="block_like_img";
        const like_img=document.createElement("img");
        like_img.src="img/likeoff.png";
        like_img.className="like_off";
        div_likeimg.appendChild(like_img);
        div_name.appendChild(p);
        div.appendChild(div_name);
        div.appendChild(img);
        div.appendChild(div_likeimg);
        album.appendChild(div);
    }
    if(album.querySelector('div')!==null){
        const block_album=document.querySelectorAll("#album div");
        for(block of block_album){
            block.addEventListener("mouseover", like_off_On); 
            block.addEventListener("mouseout", like_off_Off);
            
        }
        const div_like=document.querySelectorAll("#album div .block_like_img");
        for(img of div_like){
            img.addEventListener("click",likeOn);
        }
    }
}

function text_center(){
    searchbar.style="text-align:center";
}

function text_left(){
    searchbar.style="text-align:left";
}

function like_off_On(event){
    const div=event.currentTarget;
    const likeOff=div.querySelectorAll(".like_off");
    for(img of likeOff)
        img.classList.add("like_off_On");
    
}

function like_off_Off(event){
    const div=event.currentTarget;
    const likeOff=div.querySelectorAll(".like_off");
    for(img of likeOff)
        img.classList.remove("like_off_On");
}

function likeOn(event){
    const div=event.currentTarget;
    event.stopPropagation();
    const likeOn=div.querySelectorAll(".like_off");
    for(img of likeOn)
        if((img.src).includes("img/likeoff.png")){
            img.src="img/likeon.png";
            like_album(div);
        }else likeOff(div);
}

function likeOff(div){
    const likeOff=div.querySelectorAll(".like_off");
    for(img of likeOff)
        img.src="img/likeoff.png";
        removeLike(div);
}

function like_album(div){
    const div_album=div.parentNode;
    const formData=new FormData();
    formData.append('album', div_album.dataset.album);
    formData.append('artist', div_album.dataset.artist);
    formData.append('image', div_album.dataset.img);
    formData.append('playcount', div_album.dataset.playcount);
    formData.append('_token', CSRF_TOKEN);
    fetch(SAVE_URL, {method: 'post', body: formData})
    .then(OnResponse)
    .then(OnJson);
}

function removeLike(div){
    const div_album=div.parentNode;
    const formData=new FormData();
    formData.append('album', div_album.dataset.album);
    formData.append('_token', CSRF_TOKEN);
    fetch(REMOVE_URL, {method: 'post', body: formData})
    .then(OnResponse)
    .then(remove_like_albumJson);
}

function OnJson(json){
    console.log(json);
}

function remove_like_albumJson(json){
    console.log(json);
}
    

const login_navOn=document.querySelector('.login_nav');
login_navOn.addEventListener("mouseover", window_loginOn);
const login_navOff=document.querySelector('.login_nav');
login_navOff.addEventListener("mouseout", window_loginOff);

function LikeOn_or_Off(){
    
    fetch(LIKE_URL)
    .then(OnResponse)
    .then(OnJsonLike);
    
}

function OnJsonLike(json){
    console.log(json);
    const div=document.querySelectorAll(".childDiv_album");
    for(let i=0; i<div.length;i++){
        for(let j=0;j<json.length;j++){
            if(div[i].dataset.album===(json[j].nome)){
                div[i].querySelector(".block_like_img img").src="img/likeon.png";
            }
        }
    }
}
const search_form=document.querySelector(".header_search form");
search_form.addEventListener("submit", search_content);
const searchbar=document.querySelector(".searchbar");
searchbar.addEventListener("blur", text_center);
searchbar.addEventListener("focus", text_left);