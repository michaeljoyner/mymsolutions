
    var formManager = {
      elems: {
        'logo': document.querySelector('#logocheckbox'),
        'branding': document.querySelector('#brandingcheckbox'),
        'web': document.querySelector('#webcheckbox'),
        'logoform': document.querySelector('#logo'),
        'brandingform': document.querySelector('#branding'),
        'webform': document.querySelector('#web'),
        'general': document.querySelector('#general'),
        'submit': document.querySelector('#submit-field')
      },

      init: function() {
        $(".form-toggle").on('change', function(ev) {
          formManager.update($(this));
        });
        formManager.update();
        if(formManager.elems.logo.checked) {
            $(formManager.elems.logoform).show("slow");
        }
        if(formManager.elems.branding.checked) {
            $(formManager.elems.brandingform).show("slow");
        }
        if(formManager.elems.web.checked) {
            $(formManager.elems.webform).show("slow");
        }
      },

      someChecked: function() {
        var elems = formManager.elems;
        return (elems.logo.checked) || (elems.branding.checked) || (elems.web.checked);
      },

      toggleSection: function(checkbox, form) {
        if(checkbox.checked) {
          $(form).show('slow');
          return;
        }
        $(form).hide('slow');
      },


      update: function(el) {
        if(!formManager.someChecked()) {
          $(formManager.elems.general).hide('slow');
          $(formManager.elems.submit).hide('slow');
        } else {
          $(formManager.elems.general).show('slow');
          $(formManager.elems.submit).show('slow');
        }

        if(! el) return;

        if(el[0].id === 'logocheckbox') {
          formManager.toggleSection(formManager.elems.logo, formManager.elems.logoform);
        }
        if(el[0].id === 'brandingcheckbox') {
          formManager.toggleSection(formManager.elems.branding, formManager.elems.brandingform);
        }

        if(el[0].id === 'webcheckbox') {
          formManager.toggleSection(formManager.elems.web, formManager.elems.webform);
        }
      }
    };

    var uploadManager = {
      form: document.querySelector('#briefform'),

      logos: {
        fileInput: document.querySelector('#logo_files'),
        progressBox: document.querySelector('#logo-upload-progress-box')
      },

      brands: {
        fileInput: document.querySelector('#brand_files'),
        progressBox: document.querySelector('#brand-file-upload-progress-box')
      },

      fileUploadManagers: {
        logo: null,
        brand: null
      },

      setFUMS: function() {
        uploadManager.fileUploadManagers.logo = new FileUploadManager(uploadManager.logos.fileInput, '/logouploads', uploadManager.logos.progressBox, 'progressTemplate', 'autologouploads', true);
        uploadManager.fileUploadManagers.brand = new FileUploadManager(uploadManager.brands.fileInput, '/brandinguploads', uploadManager.brands.progressBox, 'progressTemplate', 'autobranduploads', false);
      },

      preSubmitHook: function() {
        if(uploadManager.fileUploadManagers.logo.supported) {
          uploadManager.form.onsubmit = function() {
            uploadManager.logos.fileInput.disabled = true;
            uploadManager.brands.fileInput.disabled = true;
            return true;
          }
        }
      },

      init: function() {
        uploadManager.setFUMS();
        uploadManager.preSubmitHook();
      }
    };