// Menu links
/*
let getAbout = document.getElementById("getAbout");
let getResume = document.getElementById("getResume");
let getContact = document.getElementById("getContact");

// Sections
let about = document.getElementById("about");
let resume = document.getElementById("resume");
let contact = document.getElementById("contact");

function removeClass() {
    // Links
    getAbout.classList.remove('selected');
    getResume.classList.remove('selected');
    getContact.classList.remove('selected');
    // Sections
    about.classList.remove('view');
    resume.classList.remove('view');
    contact.classList.remove('view');
}

getAbout.addEventListener('click', function (e) {
    if (window.innerWidth > 1040) {
        e.preventDefault();
        removeClass();
        about.classList.add('view');
        getAbout.classList.add('selected');
    }

});
getResume.addEventListener('click', function (e) {
    if (window.innerWidth > 1040) {
        e.preventDefault();
        removeClass();
        resume.classList.add('view');
        getResume.classList.add('selected');
    }
})
getContact.addEventListener('click', function (e) {
    if (window.innerWidth > 1040) {
        e.preventDefault();
        removeClass();
        contact.classList.add('view');
        getContact.classList.add('selected');
    }
})
*/
//Con Api
(async function() {
  
    const apiURL = "https://untitled-pua5875jrojt.runkit.sh/";
    
    // Menu links
    let getAbout = document.getElementById("getAbout");
    let getResume = document.getElementById("getResume");
    let getContact = document.getElementById("getContact");
  
    // Sections
    let about = document.getElementById("about");
    let resume = document.getElementById("resume");
    let contact = document.getElementById("contact");
  
    function removeClass() {
        // Links
        getAbout.classList.remove('selected');
        getResume.classList.remove('selected');
        getContact.classList.remove('selected');
        // Sections
        about.classList.remove('view');
        resume.classList.remove('view');
        contact.classList.remove('view');
    }
  
    getAbout.addEventListener('click', function (e) {
        if (window.innerWidth > 1040) {
            e.preventDefault();
            removeClass();
            about.classList.add('view');
            getAbout.classList.add('selected');
        }
  
    });
    getResume.addEventListener('click', function (e) {
        if (window.innerWidth > 1040) {
            e.preventDefault();
            removeClass();
            resume.classList.add('view');
            getResume.classList.add('selected');
        }
    })
    getContact.addEventListener('click', function (e) {
        if (window.innerWidth > 1040) {
            e.preventDefault();
            removeClass();
            contact.classList.add('view');
            getContact.classList.add('selected');
        }
    })
  
  
    async function getData() {
      const response = await fetch(apiURL);
      const json = await response.json();
      return json;
    }
    const myData = await getData();
  
    /* Select all the elements*/
    const link1 = document.getElementById("link1");
    const link2 = document.getElementById("link2");
    const link3 = document.getElementById("link3");
    
    link1.innerHTML = myData.menu.link1;
    link2.innerHTML = myData.menu.link2;
    link3.innerHTML = myData.menu.link3;
        
  
    const profileImage = document.getElementById("profileImage");
    profileImage.src = myData.home.profileImage;
    
    const nombre = document.getElementById("nombre");
    nombre.innerHTML = myData.home.name;
    
    const job = document.getElementById("job");
    job.innerHTML = myData.home.job;
    
    const socialTwitter = document.getElementById("socialTwitter");
    socialTwitter.href = myData.home.social.twitter;
    
    const socialGithub = document.getElementById("socialGithub");
    socialGithub.href = myData.home.social.github;
    
  
    const socialStackOverflow = document.getElementById("socialStackOverflow");
    socialStackOverflow.href = myData.home.social.stackoverflow;
    
    const aboutTitle = document.getElementById("aboutTitle");
    aboutTitle.innerHTML = myData.about.title;
    
    const aboutText = document.querySelector("#aboutText p");
    aboutText.innerHTML = myData.about.text;
    
    const servicesTitle = document.querySelectorAll(".line-down div~h4"); 
    
    for(let i=0; i < servicesTitle.length; i++) {
      servicesTitle[i].innerHTML = myData.about.services[i].title; 
    }
    
    const servicesText = document.querySelectorAll(".line-down h4~p");
    
    for(let i=0; i < servicesText.length; i++) {
      servicesText[i].innerHTML = myData.about.services[i].text; 
    }
    
  })()
  