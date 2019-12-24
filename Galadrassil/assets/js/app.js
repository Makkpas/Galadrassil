
// Intro------------------------------
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

// Conclusion------------------------------
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

    ta.fromTo(".nav__signin",{
        opacity: 0
    },{
        xPercent: -8,
        ease: "expo",
        opacity: 100

    });

    ta.fromTo(".nav__login",{
        opacity: 0
    },{
        xPercent: -5,
        ease: "expo",
        opacity: 100

    });

// --------------------------

function verificaciónPaginaMostrar(){
    if (index){
        email.type= "text";
        password.type= "password"; 
        document.getElementById('score').className="list nav_score hidden";
        document.getElementById('profile').className="list nav_profile hidden";      
    }

    if(pass){
        email.type= "text";
        document.getElementById('score').className="list nav_score hidden";
        document.getElementById('profile').className="list nav_profile hidden";
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
    }

    if(home){
        document.getElementById('score').className="list nav_score";
        document.getElementById('profile').className="list nav_profile";
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

    if(home){
        document.getElementById('score').className="list nav_score";
        document.getElementById('profile').className="list nav_profile";
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

document.querySelector("#reverse").onclick = () =>
   reverse();

document.querySelector("#play").onclick = () =>
    play();



