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

function editOn(event){
    const img_default=document.querySelector("#img_user");
    img_default.classList.add("ImgOff");
    const div_edit=document.querySelector(".fotoOff");
    div_edit.classList.add("fotoOn");
    document.querySelector("#upload_file").addEventListener("change", submit);
    block_img.addEventListener("mouseover",overlayOn);
    block_img.addEventListener("mouseout", overlayOff);
    
    
}

function overlayOff(){
    document.querySelector(".overlayOff").classList.remove("overlayOn");
}

function overlayOn(){
    document.querySelector(".overlayOff").classList.add("overlayOn");
}

function submit(){
    block_img.removeEventListener("mouseover", editOn);
    document.querySelector(".submitOff").classList.add("submitOn");
}

function OnResponse(response){
    return response.json();
}

function OnJson(json){
        console.log(json);
        const user=document.querySelector("#user").textContent.trim();
        for(let i=0;i<json.length;i++){
            if(json[i].img!==null && json[i].username===user){
            const img=json[i].img;
            document.querySelector(".img_profile").style.backgroundImage="url(/hw2/storage/app/"+img+")";
            document.querySelector("#img_user").classList.add("img_remove");
            document.querySelector(".removeOff").classList.add("removeOn");
            }
            else if(json[i].img==null && json[i].username===user){
                document.querySelector("#img_user").classList.remove("img_remove");
                document.querySelector(".removeOff").classList.remove("removeOn");
            }
        }
}


function editOff(){
    const img_default=document.querySelector("#img_user");
    img_default.classList.remove("ImgOff");
    const div_edit=document.querySelector(".fotoOff");
    div_edit.classList.remove("fotoOn");
}

function dati_db(){
    fetch(CHECK_URL)
    .then(OnResponse)
    .then(OnJson)
}

function like_album(){
    fetch(ALBUM_URL)
    .then(OnResponse)
    .then(OnJsonLike)
}

function OnJsonLike(json){
    const user=document.querySelector("#user").textContent.trim();
    console.log(json);
    let lista=document.querySelector(".album");
    lista.innerHTML='';
    
        for(let i=0; i<json.length;i++){
            let div=document.createElement("div");
            div.className="div_album";
            div.dataset.artista=json[i].artista;
            div.style.backgroundImage="url("+json[i].img+")";
            let block=document.createElement("div");
            block.className="container";
            let artista=document.createElement("h3");
            artista.className="artista";
            artista.innerHTML=div.dataset.artista;
            block.appendChild(artista);
            
            div.appendChild(block);
            lista.appendChild(div);
            
            
        }
        let div=document.querySelectorAll(".div_album");
        for(let i=0;i<div.length;i++){
        for(let j=0;j<i;j++){
            if(div[i].dataset.artista==div[j].dataset.artista)
                if(i===j)return;
                else div[j].remove();
            }
        }
    
}

function confirm_deleteOn(event){
    event.preventDefault();
    document.querySelector(".confirm_delete").classList.add("confirm_deleteOn");
    document.querySelector(".overlay_confirm_delete").classList.add("overlay_confirm_deleteOn");
    const cancel=document.querySelector("#no");
    cancel.addEventListener("click", confirm_deleteOff);
}

function confirm_deleteOff(){
    document.querySelector(".confirm_delete").classList.remove("confirm_deleteOn")
    document.querySelector(".overlay_confirm_delete").classList.remove("overlay_confirm_deleteOn");
    document.querySelector(".overlay").classList.remove("overlayOn");
}

dati_db();
like_album();
const login_navOn=document.querySelector('.login_nav');
login_navOn.addEventListener("mouseover", window_loginOn);
const login_navOff=document.querySelector('.login_nav');
login_navOff.addEventListener("mouseout", window_loginOff);
const block_img=document.querySelector(".img_profile");
block_img.addEventListener("mouseover",editOn);
block_img.addEventListener("mouseout",editOff);
const confirm_delete=document.querySelector("#delete a");
confirm_delete.addEventListener("click", confirm_deleteOn)