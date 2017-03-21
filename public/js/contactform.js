var myContactForm = {
    elems: {
        container: document.getElementById("contactform-inner-box"),
        name: document.getElementById('sender-name'),
        email: document.getElementById('sender-email'),
        message: document.getElementById('sender-message'),
        send: document.getElementById('cf-send-btn'),
        errors: document.getElementById('cf-errors'),
        note: document.getElementById('cf-note'),
        banner: document.getElementById('gratitude-banner'),
        namethank: document.getElementById('name-to-thank'),
        form: document.getElementById('contact-form'),
        prompt: document.getElementById('show-cf-btn'),
        icon: document.getElementById('fa-send-icon')
    },

    init: function() {
        if(! window.FormData) {
            myContactForm.elems.note.innerHTML = "Sorry, your browser doesn't support this contact form. Please use the details below.";
            return;
        }
        myContactForm.elems.send.addEventListener('click', myContactForm.trySubmit, false);
        myContactForm.elems.prompt.addEventListener('click', myContactForm.toggleContactForm, false);
    },

    toggleContactForm: function() {
      var cont = myContactForm.elems.container;
        if(cont.classList.contains("expose")) {
            cont.classList.remove("expose");
        } else {
            cont.classList.add("expose");
        }
    },

    validate: function() {
        if((! myContactForm.elems.name.value) || (! myContactForm.elems.email.value) || (! myContactForm.elems.message.value)) {
            return false;
        }
        return true;
    },

    trySubmit: function() {
      if(myContactForm.validate()) {
          myContactForm.sendMessage();
      } else {
          myContactForm.elems.errors.innerHTML = "Please fill out all fields."
      }
    },

    sendMessage: function() {
        myContactForm.showSpinnerIcon();
        myContactForm.elems.note.innerHTML = "";
        myContactForm.elems.errors.innerHTML = "";
        var req = new XMLHttpRequest;
        var fData = new FormData;
        fData.append('name', myContactForm.elems.name.value);
        fData.append('email', myContactForm.elems.email.value);
        fData.append('message', myContactForm.elems.message.value);
        fData.append('_token', myContactForm.getCSRFToken());
        req.open("POST", '/contactmessage', true);
        req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        req.onreadystatechange = function(ev) {
            if(req.readyState === 4) {
                if(req.status === 200) {
                    myContactForm.fadeOutForm();
                    myContactForm.showBanner();
                    myContactForm.elems.prompt.style.opacity = "0";
                } else {
                    myContactForm.elems.note.innerHTML = "Oh shit. That wasn't smooth";
                    myContactForm.showSendIcon();
                }
            }
        }
        req.send(fData);
    },

    getCSRFToken: function() {
        var metas = document.getElementsByTagName('meta');
        var i = 0, l = metas.length;
        for(i;i<l;i++) {
            if(metas[i].getAttribute("property") == 'CSRF-token') {
                return metas[i].getAttribute("content");
            }
        }
        return "";
    },

    showBanner: function() {
        myContactForm.elems.namethank.innerHTML = myContactForm.elems.name.value;
        myContactForm.elems.banner.classList.add('show');
    },

    fadeOutForm: function() {
        myContactForm.elems.form.classList.add("fade");
    },

    showSpinnerIcon: function() {
        myContactForm.elems.icon.className = "fa fa-send fa-spin";
    },

    showSendIcon: function() {
        myContactForm.elems.icon.className = "fa fa-send";
    }

};