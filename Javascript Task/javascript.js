fetch("https://api.github.com/users")
.then((res) =>res.json())
.then((data) =>{
    
   document.getElementById("userprofile1")
   .setAttribute("src" ,data[0].avatar_url);
   document.getElementById("username1").innerText = data[0].login;
   document.getElementById("visitprofiles1").setAttribute("href" ,data[0].html_url)
  

   document.getElementById("userprofile2")
   .setAttribute("src" ,data[1].avatar_url) 
   document.getElementById("username2").innerText = data[1].login
   document.getElementById("visitprofiles2").setAttribute("href" ,data[1].html_url)
  

   document.getElementById("userprofile3")
   .setAttribute("src" ,data[2].avatar_url) 
   document.getElementById("username3").innerText = data[2].login
   document.getElementById("visitprofiles3").setAttribute("href" ,data[2].html_url)
  
   document.getElementById("userprofile4")
   .setAttribute("src" ,data[3].avatar_url) 
   document.getElementById("username4").innerText = data[3].login
   document.getElementById("visitprofiles4").setAttribute("href" ,data[3].html_url)
  
   document.getElementById("userprofile5")
   .setAttribute("src" ,data[4].avatar_url) 
   document.getElementById("username5").innerText = data[4].login
   document.getElementById("visitprofiles5").setAttribute("href" ,data[4].html_url)
  
   document.getElementById("userprofile6")
   .setAttribute("src" ,data[5].avatar_url) 
   document.getElementById("username6").innerText = data[5].login
   document.getElementById("visitprofiles6").setAttribute("href" ,data[5].html_url)
  
   document.getElementById("userprofile7")
   .setAttribute("src" ,data[6].avatar_url) 
   document.getElementById("username7").innerText = data[6].login
   document.getElementById("visitprofiles7").setAttribute("href" ,data[6].html_url)
  
   document.getElementById("userprofile8")
   .setAttribute("src" ,data[7].avatar_url) 
   document.getElementById("username8").innerText = data[7].login
   document.getElementById("visitprofiles8").setAttribute("href" ,data[7].html_url)
  
   document.getElementById("userprofile9")
   .setAttribute("src" ,data[8].avatar_url) 
   document.getElementById("username9").innerText = data[8].login
   document.getElementById("visitprofiles9").setAttribute("href" ,data[8].html_url)
  
   document.getElementById("userprofile10")
   .setAttribute("src" ,data[9].avatar_url) 
   document.getElementById("username10").innerText = data[9].login
   document.getElementById("visitprofiles10").setAttribute("href" ,data[9].html_url)
  
   document.getElementById("userprofile11")
   .setAttribute("src" ,data[10].avatar_url) 
   document.getElementById("username11").innerText = data[10].login
   document.getElementById("visitprofiles11").setAttribute("href" ,data[10].html_url)
  
   document.getElementById("userprofile12")
   .setAttribute("src" ,data[11].avatar_url) 
   document.getElementById("username12").innerText = data[11].login
   document.getElementById("visitprofiles12").setAttribute("href" ,data[11].html_url)
  


})
.catch((e) =>{
console.log("somthing wrong" + e);
});
    

