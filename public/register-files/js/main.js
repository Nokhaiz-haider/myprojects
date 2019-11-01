(function($) {

	jQuery.validator.addMethod("lettersonly", function(value, element) {
		return this.optional(element) || /^[a-z][a-z\s]*$/i.test(value);
	}, "letters only");

    var form = $("#signup-form");
    form.validate({
		onfocusout: false,
		onkeyup: true,
		onclick: true,
		focusInvalid: true,
        errorPlacement: function errorPlacement(error, element) {
			error.insertAfter(element);
        },
        rules: {
			cand_fname: {
			  required: true,
			  lettersonly: true
			},
			cand_lname: {
			  required: true,
			  lettersonly: true
			},
			cand_father: {
			  required: true,
			  lettersonly: true
			},
			cand_mother: {
			  required: true,
			  lettersonly: true
			},
			father_occupation: {
			  required: true,
			  lettersonly: true
			},
			mother_occupation: {
			  required: true,
			  lettersonly: true
			},
			cand_dob: {
			  required: true
			},
			cand_age: {
			  required: true,
			  digits: true
			},			
			cand_gender: {
			  required: true
			},
			cand_marital: {
				required: true
			},
			cnicexpdate: {
			  required: true
			},
			cand_religion: {
			  required: true
			},
			cand_section: {
			  required: true
			},
			cand_caste: {
			  required: true
			},
			cand_nationality: {
			  required: true
			},
			cand_domicile: {
			  required: true
			},
			cand_email: {
			  required: true,
			  email:true
			},
			cand_phoneNo: {
			  required: true,
			  digits: true
			},
			cand_mobileNo: {
			  required: true,
			  digits: true
			  
			},
			cand_city: {
			  required: true
			},
			cand_province: {
			  required: true
			},
			cand_address: {
			  required: true
			}		
        },
		messages: {
			cand_fname: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			cand_lname: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			cand_father: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			cand_mother: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			cand_mother: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			father_occupation: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			mother_occupation: {
                required: "Required",
				lettersonly: "Alphabet Only"
			},
			cand_dob: {
			  required: "Select date of birth"
			},
			cand_age: {
			  required: "Required",
			  digits: "Only digits are required"
			},	
			cand_gender: {
				required: "Select Option"
			},
			cand_marital: {
				required: "Select Option"
			},
			cnicexpdate: {
			  required: "Required"
			},
			cand_religion: {
			  required: "Required"
			},
			cand_section: {
			  required: "Required"
			},
			cand_caste: {
			  required: "Required"
			},
			cand_nationality: {
			  required: "Required"
			},
			cand_domicile: {
			  required: "Required"
			},
			cand_email: {
			  required: "Required",
			  email: "Enter valid email"
			},
			cand_phoneNo: {
			  required: "Required",
			  digits: "Only digits are required"
			},
			cand_mobileNo: {
			  required: "Required",
			  digits: "Only digits are required"
			},
			cand_city: {
			  required: "Required"
			},
			cand_province: {
			  required: "Required"
			},
			cand_address: {
			  required: "Required"
			}			
		},
        onfocusout: function(element) {
            $(element).valid();
        },
	});
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        stepsOrientation: "vertical",
        titleTemplate: '<div class="title"><span class="step-number">#index#</span><span class="step-text">#title#</span></div>',
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Finish',
            current: ''
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex === 0) {
                form.parent().parent().parent().append('<div class="footer footer-' + currentIndex + '"></div>');
            }
            if (currentIndex === 1) {
                form.parent().parent().parent().find('.footer').removeClass('footer-0').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 2) {
                form.parent().parent().parent().find('.footer').removeClass('footer-1').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 3) {
                form.parent().parent().parent().find('.footer').removeClass('footer-2').addClass('footer-' + currentIndex + '');
            }
            // if(currentIndex === 4) {
            //     form.parent().parent().parent().append('<div class="footer" style="height:752px;"></div>');
            // }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
			form.submit();

        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            return true;
        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    $.dobPicker({
        daySelector: '#birth_date',
        monthSelector: '#birth_month',
        yearSelector: '#birth_year',
        dayDefault: '',
        monthDefault: '',
        yearDefault: '',
        minimumAge: 0,
        maximumAge: 120
    });
    var marginSlider = document.getElementById('slider-margin');
    if (marginSlider != undefined) {
        noUiSlider.create(marginSlider, {
              start: [1100],
              step: 100,
              connect: [true, false],
              tooltips: [true],
              range: {
                  'min': 100,
                  'max': 2000
              },
              pips: {
                    mode: 'values',
                    values: [100, 2000],
                    density: 4
                    },
                format: wNumb({
                    decimals: 0,
                    thousand: '',
                    prefix: '$ ',
                })
        });
        var marginMin = document.getElementById('value-lower'),
	    marginMax = document.getElementById('value-upper');

        marginSlider.noUiSlider.on('update', function ( values, handle ) {
            if ( handle ) {
                marginMax.innerHTML = values[handle];
            } else {
                marginMin.innerHTML = values[handle];
            }
        });
    }
})(jQuery);