

let getContact = document.getElementById("getContact");
let contact = document.getElementById("contact");

function removeClass() {
    getAbout.classList.remove('selected');
    getResume.classList.remove('selected');
    getContact.classList.remove('selected');
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

//Con Api
(async function() {
  
  let getContact = document.getElementById("getContact");

  let contact = document.getElementById("contact");
  function removeClass() {
      // Links
      getContact.classList.remove('selected');
      // Sections
      contact.classList.remove('view');
  }
  getContact.addEventListener('click', function (e) {
      if (window.innerWidth > 1040) {
          e.preventDefault();
          removeClass();
          contact.classList.add('view');
          getContact.classList.add('selected');
      }
  })
})()
