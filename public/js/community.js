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

function getUsers(){
    fetch(USERS)
    .then(OnResponse)
    .then(UsersOnJson)
}

function UsersOnJson(json){
    const user=document.querySelector("#user").textContent.trim();
    const lista=document.querySelector("#lista_users");
    lista.innerHTML='';
    
            
    for(let i=0; i<json.length;i++){
        if(json[i].username!=user){
            const container=document.createElement("div");
            container.className="container";
            const img=document.createElement("img");
            if(json[i].img!=null){
            img.src="/hw2/storage/app/"+json[i].img;
            img.className="img_usr";
            }else{
                const radius_img=document.createElement("div");
                radius_img.className="radius_img";
                container.appendChild(radius_img);
            } 
            const h3=document.createElement("h3");
            h3.className="usr";
            h3.innerHTML=json[i].username;
            container.appendChild(img);
            container.appendChild(h3);
            lista.appendChild(container);
        }
    }
    
}

function getUser(event){
        event.preventDefault();
        const data_form = new FormData(document.querySelector("#header form"));
        fetch(CLASS_URL+encodeURIComponent(data_form.get('user')))
        .then(OnResponse)
        .then(UserOnJson);
}

function OnResponse(response){
    return response.json();
}

function UserOnJson(json){
    let input=document.querySelector(".searchbar_usr");
    if(json.error){
        const lista=document.querySelector("#lista_album");
        lista.innerHTML='';
        input.style.border="2px solid red";
        input.style.color="red";
        let h2_error=document.querySelector(".msg_error");
        h2_error.classList.add("msg_error_on");
    }
    else{
        input.style.border="";
        input.style.color="black";
        let h2_error=document.querySelector(".msg_error");
        h2_error.classList.remove("msg_error_on");
        const container=document.querySelector("#container_album");
        const lista=document.querySelector("#lista_album");
        lista.innerHTML='';
            if(json==0){
                document.querySelector(".no_result").classList.add("no_result_on");
                return;
            }else{
            document.querySelector(".no_result").classList.remove("no_result_on");
            for(let i=0;i<json.length;i++){
                const block=document.createElement("div");
                block.className="block_album";
                const block_img=document.createElement("div");
                block_img.className="block_img";
                const img=document.createElement("img");
                img.src=json[i].img;
                const block_num=document.createElement("div");
                block_num.className="block_num";
                const num=document.createElement("p");
                num.className="number";
                num.innerHTML=i+1;
                const name=document.createElement("p");
                name.className="track_name";
                name.innerHTML=json[i].nome;
                const artist=document.createElement("p");
                artist.className="artist_name";
                artist.innerHTML=json[i].artista;
                block_num.appendChild(num);
                block.appendChild(block_num);
                block_img.appendChild(img);
                block.appendChild(block_img);
                block.appendChild(name);
                block.appendChild(artist);
                lista.appendChild(block);
                container.appendChild(lista);
                } 
            }
    }
} 
  
getUsers();
const form=document.querySelector("#header form");
form.addEventListener("submit", getUser);
const login_navOn=document.querySelector('.login_nav');
login_navOn.addEventListener("mouseover", window_loginOn);
const login_navOff=document.querySelector('.login_nav');
login_navOff.addEventListener("mouseout", window_loginOff);

