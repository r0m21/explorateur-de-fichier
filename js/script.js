function getxhr(){ 
    try{xhr=new XMLHttpRequest();} 
    catch(e){ 
       try {xhr=new ActiveXObject("Microsoft.XMLHTTP");} 
       catch(e1){ 
          try{xhr=new ActiveXObject("Msxml2.XMLHTTP");} 
          catch(e2){ 
             alert("AJAX non supporté!"); 
          } 
       } 
    } 
    return xhr; 
}

var liens = document.querySelectorAll('a');

for(i = 0; i < liens.length; i++)
{
    liens[i].addEventListener('click', getArbo);
}


function getArbo(e){ 

    var dossier = this.getAttribute('href');

    e.preventDefault();

    xhr = getxhr(); 
    xhr.onreadystatechange=function()
    { 
       if(this.readyState==4 && this.status == 200)
       {
            document.getElementById("container").innerHTML= this.responseText;
            liens = document.querySelectorAll('a');

            for(i = 0; i < liens.length; i++)
            {
                liens[i].addEventListener('click', getArbo);
            }     
       }   
    } 
    xhr.open("GET", "./php/traitement.php?dossier=" + dossier , true); 
    xhr.send();
 }