
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

    ta.fromTo(".nav__home",{
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

   

reverse= () =>{
    // Reverse-----------------------
    tl.reverse();
    ta.reverse();


    // Cambia clases------------------------
    document.getElementById('play').className = "button";
    document.getElementById('reverse').className = "button hidden";
    document.getElementById('nav__list').className="nav__list hidden";
    document.getElementById('b').className="background";

    // Cambia tipos---------------------------
    let user=document.getElementById('user');
    let name=document.getElementById('name');
    let email=document.getElementById('email');
    let password=document.getElementById('password');
    let password2=document.getElementById('password2');

    if(!user==null){
        user.type= "text";
    }

    if(!name==null){
        name.type= "text";
    }
    
    if(!email==null){
        email.type= "text";
    }
    
    if(!password==null){
        password.type= "password";
    }
    
    if(!password2==null){
        password2.type= "password";
    }
    

}

play= () =>{
    // Play------------------
    tl.play();
    ta.play();

    // Cambia clases------------------------
    document.getElementById('play').className = "button hidden";
    document.getElementById('reverse').className = "button";
    document.getElementById('nav__list').className="nav__list";
    document.getElementById('b').className="background hidden";


    // Cambia tipos---------------------------
    let user=document.getElementById('user');
    let name=document.getElementById('name');
    let email=document.getElementById('email');
    let password=document.getElementById('password');
    let password2=document.getElementById('password2');

    if(!user==null){
        user.type= "hidden";
    }

    if(!name==null){
        name.type= "hidden";
    }
    
    // if(!email==null){
        email.type= "hidden";
    // }
    
    // if(!password==null){
        password.type= "hidden";
    // }
    
    if(!password2==null){
        password2.type= "hidden";
    }
    
}

document.querySelector("#reverse").onclick = () =>
   reverse();

document.querySelector("#play").onclick = () =>
    play();



