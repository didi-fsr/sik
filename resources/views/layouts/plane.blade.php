<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>SIK-STSN</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/custom.css") }}" />
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/Google-Style-Login.css") }}" />
	<link rel="stylesheet/less" href="{{ asset("assets/stylesheets/timepicker.less") }}" />
	<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">

	<style>
		.dropdown-submenu {
		    position: relative;
		}

		.dropdown-submenu .dropdown-menu {
		    top: 0;
		    left: 100%;
		    margin-top: -1px;
		}
	</style>
	<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
	{{-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

	<!--Font Awesome (added because you use icons in your prepend/append)-->
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> --}}

</head>
<body id="grad">
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/scripts/jquery.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/scripts/bootstrap-timepicker.js") }}" type="text/javascript"></script>
	{{-- <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script> --}}
  {{-- <script src="http://demo.expertphp.in/js/jquery.js"></script> --}}
	{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>



	<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
	<!-- Include jQuery -->
	{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> --}}

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	{{-- @yield('navbar') --}}

	@yield('content')


	{{-- appand mahasiswa to ol --}}
	<script>
			//
			// $("#add").click(function(){
			//
			// 		// $("ol").append("<li> . "$("#search_text").val()" . </li>");
			// 		$("#mhs_list").append("<li> Test ajah </li>");
			// });
			$(document).ready(function(){

			    $("#rpm_add").click(function(){

							$("#terpilih").append( " <b>" + $("#search_text").val() + "</b> |" );
							$('<input>').attr({
							    type: 'hidden',
							    name: 'attach_mhs[]',
									value: $("#search_text").val(),
									class: 'form-control'
							}).appendTo('#add_mhs');
							$("#search_text").val("");
							// $("#add_mhs").append("<input type="hidden" name="mhs[]" value="$("#search_text").val()">");
			    });
			});
	</script>

	{{-- AutoComplete --}}
	<script>
		var path = "{{ route('searchajax') }}";
		$('input.typeahead').typeahead({
			source:  function (query, process) {
				return $.get(path, { query: query }, function (data) {
					return process(data);
				});
			}
		});

	</script>

	{{-- Time Picker --}}
	<script type="text/javascript">
		$('#timepicker,#timepicker2').timepicker({
				minuteStep: 1,
				template: 'modal',
				appendWidgetTo: 'body',
				showSeconds: true,
				showMeridian: false,
				defaultTime: false
		});
	</script>

	{{-- Date Picker --}}
	<script>
	    $(document).ready(function(){
	        var date_input=$('input[id="date"]'); //our date input has the name "date"
	        var container=$('form form-group').length>0 ? $('form form-group').parent() : "body";
	        date_input.datepicker({
	            format: 'yyyy-mm-dd',
	            container: container,
	            todayHighlight: true,
	            autoclose: true,
	        })
	    })
	</script>

	{{-- Dropdown Submenu --}}
	<script>
		$(document).ready(function(){
		$('.dropdown-submenu a.test').on("click", function(e){
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
		});
		});
	</script>

</body>
</html>
