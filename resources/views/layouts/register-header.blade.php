<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Maaz Informatics" content="maazinformatics.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('register-files/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('register-files/vendor/nouislider/nouislider.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <!-- Bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('register-files/css/style.css')}}">

    <link href="http://code.jquery.com/ui/1.8.21/themes/base/jquery-ui.css" rel="stylesheet"/>
<style>
    	.label.error:after {
		    top: 40px;
	}
</style>
</head>
<body onload="viewFamilyMember(); viewEducation(); viewExperience(); viewDiploma(); viewLanguage(); viewSkill(); ">

    @yield('register-content')
    
    <!-- JS -->
    <script src="{{asset('register-files/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('register-files/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('register-files/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('register-files/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('register-files/vendor/minimalist-picker/dobpicker.js')}}"></script>
    <script src="{{asset('register-files/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('register-files/vendor/wnumb/wNumb.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('register-files/vendor/jquery.slimscroll.js')}}"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="{{asset('register-files/js/main.js')}}"></script>

    <script type="text/javascript">

    $(function(){
        $('#customscroll').slimScroll();
        height: '800'
    });
    $(function(){    
        $('#dobpicker').datepicker({
            onClose: function(value, ui) {
            var today = new Date(), 
            age = today.getFullYear() - ui.selectedYear;
            $("#agecalulate").val(age);
        },
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "1803:1995",
        dateFormat: "yy-mm-dd",
        yearRange: "-100:+0",
        defaultDate: null
        }).on('change', function() {
        $(this).valid();  // triggers the validation test
        // '$(this)' refers to '$("#datepicker")'
        })
    });
    $(function(){    
        $('#cnicexpdate').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1803:1995",
            dateFormat: "yy-mm-dd",
            yearRange: "-10:+20",
            defaultDate: null
        }).on('change', function() {
        $(this).valid();  // triggers the validation test
        // '$(this)' refers to '$("#datepicker")'
        })
    });
    $(function(){    
        $('#startdate').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-100:+0"
        });
    });
    $(function(){    
        $('#end_date').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-100:+0"
        });
    });
    $(function(){    
        $('#date_of_comp').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-100:+0"
        });
    });
    $(function() {
        $('.date-picker-year').datepicker({
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy',
            onClose: function(dateText, inst) { 
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, 1));
            }
        });
        $(".date-picker-year").focus(function () {
            $(".ui-datepicker-month").hide();
        });
    }); 
    function remove_enddate(){
        var status = document.getElementById('currentjobstatus').value;
        if(status=='Continue'){
            document.getElementById('edate').setAttribute( "style", "display: none;" );
            document.getElementById('texp').setAttribute( "style", "display: none;" );
            document.getElementById('sdate').classList.remove("col-lg-3");
            document.getElementById('sdate').classList.add("col-lg-6");
        }else{
            document.getElementById('edate').setAttribute( "style", "display: true;" );
            document.getElementById('texp').setAttribute( "style", "display: true;" );
            document.getElementById('sdate').classList.remove("col-lg-6");
            document.getElementById('sdate').classList.add("col-lg-3");
        }
    }
	</script>
    <script src="{{asset('main_ajax.js')}}"></script>
</body>
</html>