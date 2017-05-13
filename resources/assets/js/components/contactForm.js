export default {
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

    init() {
        if(! window.FormData) {
            this.elems.note.innerHTML = "Sorry, your browser doesn't support this contact form. Please use the details below.";
            return;
        }
        this.elems.send.addEventListener('click', () => this.trySubmit(), false);
        this.elems.prompt.addEventListener('click', () => this.toggleContactForm(), false);
    },

    toggleContactForm() {
        const cont = this.elems.container;
        if(cont.classList.contains("expose")) {
            cont.classList.remove("expose");
        } else {
            cont.classList.add("expose");
        }
    },

    validate() {
        if((! this.elems.name.value) || (! this.elems.email.value) || (! this.elems.message.value)) {
            return false;
        }
        return true;
    },

    trySubmit() {
        if(this.validate()) {
            this.sendMessage();
        } else {
            this.elems.errors.innerHTML = "Please fill out all fields."
        }
    },

    sendMessage() {
        this.showSpinnerIcon();
        this.elems.note.innerHTML = "";
        this.elems.errors.innerHTML = "";
        var req = new XMLHttpRequest;
        var fData = new FormData;
        fData.append('name', this.elems.name.value);
        fData.append('email', this.elems.email.value);
        fData.append('message', this.elems.message.value);
        fData.append('_token', this.getCSRFToken());
        req.open("POST", '/contactmessage', true);
        req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        req.onreadystatechange = (ev) => {
            if(req.readyState === 4) {
                if(req.status === 200) {
                    this.fadeOutForm();
                    this.showBanner();
                    this.elems.prompt.style.opacity = "0";
                } else {
                    this.elems.note.innerHTML = "Oh dear, an error occurred. Please try again later";
                    this.showSendIcon();
                }
            }
        }
        req.send(fData);
    },

    getCSRFToken() {
        const meta = document.querySelector('meta[property="CSRF-token"]');
        return meta.getAttribute('content');
    },

    showBanner() {
        this.elems.namethank.innerHTML = this.elems.name.value;
        this.elems.banner.classList.add('show');
    },

    fadeOutForm() {
        this.elems.form.classList.add("fade");
    },

    showSpinnerIcon() {
        this.elems.icon.className = "fa fa-send fa-spin";
    },

    showSendIcon() {
        this.elems.icon.className = "fa fa-send";
    }

};