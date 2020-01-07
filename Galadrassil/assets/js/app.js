
// Intro sidebar------------------------------
var tl = gsap.timeline({
        paused: true, 
    });

    tl.to(".background__sidebar",{
        duration: .5,
        xPercent : 100,
        ease: "expo",
    
    });
    tl.to(".background__sidebar--second",{
        duration: .4,
        xPercent : 100,
        ease: "expo",
    
    },"-=.4");

// Conclusion sidebar------------------------------
var ta = gsap.timeline({
        paused: true, 
        duration:.7
    });

    ta.fromTo(".list",{
        opacity: 0
    },{
        xPercent: -10,
        ease: "expo",
        opacity: 100
    });

// --------------------------

// Intro modal---------------------------------
    var mo = gsap.timeline({
        paused: true,
        duration: .5
    });
    
    mo.to(".modal",{
        yPercent: 150,
        ease: "expo"
    })

function verificaciónPaginaMostrar(){
    if (index){
        email.type= "text";
        password.type= "password"; 
        document.getElementById('score').className="list nav_score hidden";
        document.getElementById('profile').className="list nav_profile hidden";      
        document.getElementById('close').className="list nav_close hidden";
        document.getElementById('home').className="list nav_home hidden";
    }

    if(pass){
        email.type= "text";
        document.getElementById('score').className="list nav_score hidden";
        document.getElementById('profile').className="list nav_profile hidden";
        document.getElementById('close').className="list nav_close hidden";
        document.getElementById('home').className="list nav_home hidden";

    }

    if(sign){
        user.type= "text";
        name.type= "text";
        email.type= "text";
        password.type= "password";
        password2.type= "password";
        document.getElementById('app').className="app";
        document.getElementById('score').className="list nav_score hidden";
        document.getElementById('profile').className="list nav_profile hidden";
        document.getElementById('close').className="list nav_close hidden";
        document.getElementById('home').className="list nav_home hidden";

    }

    if(home || profile || score){
        document.getElementById('home').className="list nav_home";
        document.getElementById('score').className="list nav_score";
        document.getElementById('profile').className="list nav_profile";
        document.getElementById('close').className="list nav_close";
    }

}
function verificaciónPaginaOcultar(){
    if (index){
        email.type= "hidden";
        password.type= "hidden";       
    }

    if(pass){
        email.type= "hidden";
    }

    if(sign){
        user.type= "hidden";
        name.type= "hidden";
        email.type= "hidden";
        password.type= "hidden";
        password2.type= "hidden";
        document.getElementById('app').className="app hidden";
    }

    if(home || profile || score){
        document.getElementById('signin').className="list nav_score hidden";
        document.getElementById('login').className="list nav_profile hidden";
        document.getElementById('score').className="list nav_score";
        document.getElementById('profile').className="list nav_profile";
        document.getElementById('close').className="list nav_close";
    }

}

reverse= () =>{
    // Reverse-----------------------
    tl.reverse();
    ta.reverse();


    // Cambia clases------------------------
    document.getElementById('play').className = "button";
    document.getElementById('reverse').className = "button hidden";
    document.getElementById('nav__list').className="nav__list hidden";

    // Cambia tipos---------------------------
    let user=document.getElementById('user');
    let name=document.getElementById('name');
    let email=document.getElementById('email');
    let password=document.getElementById('password');
    let password2=document.getElementById('password2');

    verificaciónPaginaMostrar();

}


reverseModal = () =>{
    // var buttonTree = document.querySelectorAll("#button__tree");

    // Play------------------
    mo.reverse(); 
    
    
    document.getElementById('b').className = "b";
}
playModal = () =>{
    mo.play(); 
    document.getElementById('b').className = "b blur";
    window.scrollTo(0, 0); 
}

play= () =>{
    // Play------------------
    tl.play();
    ta.play();

    // Cambia clases------------------------
    document.getElementById('play').className = "button hidden";
    document.getElementById('reverse').className = "button";
    document.getElementById('nav__list').className="nav__list";

    // Cambia tipos---------------------------
    let user=document.getElementById('user');
    let name=document.getElementById('name');
    let email=document.getElementById('email');
    let password=document.getElementById('password');
    let password2=document.getElementById('password2');

    verificaciónPaginaOcultar();
  
}

function initCompometsHome(){
    let buttonsTree = document.getElementsByClassName('button__tree');
    let buttonClose = document.getElementById('modal__close');
    let selectorButtonTree = document.getElementsByClassName('selector__button');

    for(var i=0; i<buttonsTree.length; i++){
        buttonsTree[i].onclick = function (){
            playModal();
        }
    }
    for(let i=0; i<selectorButtonTree.length; i++){
        selectorButtonTree[i].onclick = function (){
            // let id = selectorButtonTree[i].classList.contains(i);
            let treeImg = document.getElementsByClassName('tree');
            let modalSelector = document.getElementById('modal__selector');
            let modalCare = document.getElementById('modal__care');
           

            if(i == 0){
                modalSelector.className = "hidden";
                modalCare.className = "modal__care";
                // treeImg.innerHTML='<img class="tree__img" src="./img/t_pochote_0.png" />';
                
            }
            if(i == 1){
                // treeImg.innerHTML = '<img class="tree__img"src="../img/t_1" alt="">';
                console.log("Planto arbol 1");
                modalSelector.className = "hidden";
            }
            if(i == 2){
                // treeImg.innerHTML = '<img class="tree__img"src="../img/t_2" alt="">';
                console.log("Planto arbol 2");
                modalSelector.className = "hidden";
            }
            if(i == 3){
                // treeImg.innerHTML = '<img class="tree__img"src="../img/t_3" alt="">';
                console.log("Planto arbol 3");
                modalSelector.className = "hidden";
            }
            if(i == 4){
                // treeImg.innerHTML = '<img class="tree__img"src="../img/t_4" alt="">';
                console.log("Planto arbol 4");
                modalSelector.className = "hidden";
            }
        }
    }
    buttonClose.onclick = function(){
        reverseModal();
    }

}
function init() {
    if(home){
        initCompometsHome();
        
    }
}

init();

function redirectWindowSign(){
    window.location = "registro.php";
}
function redirectWindowHome(){
    window.location = "jardin.php";
}
function redirectWindowLogin(){
    window.location = "inicioSesion.php";
}
function redirectWindowProfile(){
    window.location = "perfil.php";
}
function redirectWindowScore(){
    window.location = "topPuntajes.php";
}
function redirectWindowClose(){
    window.location = "inicioSesion.php";
}


document.querySelector("#reverse").onclick = () =>
   reverse();

document.querySelector("#play").onclick = () =>
    play();

document.querySelector("#signin").onclick = () =>
    redirectWindowSign();

document.querySelector("#home").onclick = () =>
    redirectWindowHome();

document.querySelector("#login").onclick = () =>
    redirectWindowLogin();

document.querySelector("#score").onclick = () =>
    redirectWindowScore();

document.querySelector("#profile").onclick = () =>
    redirectWindowProfile();

document.querySelector("#close").onclick = () =>
    redirectWindowClose();