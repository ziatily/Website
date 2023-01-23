var div=document.getElementsByTagName('div');
var button=document.getElementsByTagName('button');
var b=document.getElementsByTagName('b');
var form=document.getElementsByTagName('form')[0];
form.onsubmit=()=>{return false}
var inc=0;

div[inc].style.display="block";

if(inc==0){
   button[inc].style.display="none";
   b[inc].style.backgroundColor="royalblue";
}
   
   button[1].onclick=() =>{
      inc++;
      if(inc>0 && inc<2){
      button[inc-1].style.display="block";
      b[inc-1].style.backgroundColor="grey";
      b[inc].style.backgroundColor="royalblue";
      div[inc-1].style.display="none";
      div[inc].style.display="block";
      button[inc].innerHTML="Enregistrer"; 
   }else{
     
         form.onsubmit=()=>{return true}
   }
   }    
   button[0].onclick=() =>{
     
     if(inc>0){
      inc--;
      button[0].style.display="none";
      b[0].style.backgroundColor="royalblue";
      b[1].style.backgroundColor="#dcdcdc";
      div[1].style.display="none";
      div[0].style.display="block";
      button[1].innerHTML="Suivant"; 
   }       
}


   

   

  /* button[dec-1].onclick=()=>{
      b[dec].style.backgroundColor="#dcdcdc";
      b[dec-1].style.backgroundColor="green"
      button[dec-1].style.display="none";
      div[dec].style.display="none";
      div[dec-1].style.display="block";
      button[1].innerHTML="suivant";
      inc=1;
      } */