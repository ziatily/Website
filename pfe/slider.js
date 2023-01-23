var s1=document.getElementById("s1");
var s2=document.getElementById("s2");
var s3=document.getElementById("s3");


var img=document.getElementById("image");
var i=0;
var album=["im11.jpg","im12.jpg"];
function préc(){
  if(i<=0) i=album.length;
  i--;
  return img.setAttribute('src','photo/'+album[i]);
}
function suiv(){
 if(i>=1) i=-1;
 i++;
  return img.setAttribute('src','photo/'+album[i]);
}


//
var imge=document.getElementById("mage");
var j=0;
var album1=["im51.jpg","im52.jpg","im53.jpg"];
function réc(){
  if(j<=0) j=album1.length;
  j--;
  return imge.setAttribute('src','photo/'+album1[j]);
}
function uiv(){
 if(j>=2) j=-1;
 j++;
 return imge.setAttribute('src','photo/'+album1[j]);
}
//
var imgf=document.getElementById("mge");
var k=0;
var album2=["im61.jpg","im62.jpg","im63.jpg"];
function rc(){
  if(k<=0) k=album2.length;
  k--;
  return imgf.setAttribute('src','photo/'+album2[k]);
}
function uv(){
 if(k>=2) k=-1;
 k++;
 return imgf.setAttribute('src','photo/'+album2[k]);
}










