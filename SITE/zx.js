var prev=document.getElementById("prev");
var next=document.getElementById("next");
var hero=document.getElementById("hero");
var life=document.getElementsByClassName("life");
var backgroundimg=new Array(
    "images/bg1.png",
    "images/bg2.png",
    "images/bg3.png",
    "images/bg4.png",
    "images/bg5.png",
    );
    var i=0;
     next.onclick=function(){
        i++;
            if(i>4) {i=0;
               hero.style.backgroundImage='url("'+backgroundimg[i]+'")';
               life[i].classList.add("active");
               life[4].classList.remove("active");
            }else 
            hero.style.backgroundImage='url("'+backgroundimg[i]+'")';
               life[i].classList.add("active");
               life[i-1].classList.remove("active");
        }
     prev.onclick=function(){
        i--;
            if(i<0){i=4;
                hero.style.backgroundImage='url("'+backgroundimg[i]+'")';
                life[0].classList.remove("active");
                life[i].classList.add("active");
            }else{
                hero.style.backgroundImage='url("'+backgroundimg[i]+'")';
                life[i+1].classList.remove("active");
                life[i].classList.add("active");
            } 
        }

    

