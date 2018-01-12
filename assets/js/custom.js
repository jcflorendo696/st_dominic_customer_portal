$(document).ready(function(){


	//	Hide Google AJAX Loader
	$(".loading-icon").hide();
	$(".loader1").hide();

	//Lightbox
	$("#stdom_newsletter").colorbox(
		{
			trasition: 'fade',
			open:'true',
			reposition: 'true',
			scalePhotos: 'true'
		});


	//	Create Account Modal - AJAX Functionality
	$(this).on('submit','form[name="regForm"]',function(e){
		e.preventDefault(); //prevent reloading the page during submit event
		//	Get	WebApp Base URL = /* http://localhost/ynah_ci/ */
		var base_url 	= $('#ynah_base_url').val(); 


		var regusername	  	=	$("#txtRegUsername").val();
		var regpassword 	=	$("#txtRegPassword").val();
		var regemail 		=	$("#txtRegEmail").val();
		var regfirstname	=	$("#txtRegFirstname").val();
		var reglastname  	=	$("#txtRegLastname").val();

		//$('.loader1').fadeIn('slow').delay(3600).fadeOut('slow');
		var form = $('form[name="regForm"]')[0]; // You need to use standard javascript object here
		var formData = new FormData(form);


		//	Get Google reCAPTCHA token
		var gverify = form['g-recaptcha-response'].value;

		if(gverify == "" || regusername == ""){
			alert("All fields are required");
		}else{

			//alert(regusername);
			/* If user is verified by Google */
			$.ajax({
				type: 'POST',
				url: base_url + "home/create_account", 
				data: formData,
				contentType: false,
				processData: false,
				success:function(newUser){

					$("body").html(newUser);
					$('#j_registration_form').modal('hide')
					grecaptcha.reset();
					
				}
			});


		}

		



	
	});



	//	Homepage Slider
	$('.stdom-homeslider').flexslider({
		animation: 'slide'
	});

	//	Announcement Area Animations
	var mylists = ['announce-1','announce-2','announce-3','announce-4'];


	$(this).on('click','.list-group-item',function(){
		event.preventDefault();

		mylists.forEach(function(value){

			if( $( '.'+ value).hasClass('active')){

				$('.' + value).removeClass('active');
				
			}

		});
	});


	//	Fadeout Login Error
	$(".stdom-login-error").delay(3000).fadeOut("slow");




	//	Approve Account
	$(this).on('click','.btn-approved',function(){


		var jc = $(this).attr('id');
		alert('approve' + jc);
	});
	//	Reject Account 
	$(this).on('click','.btn-reject',function(){


		var jc = $(this).attr('id');
		alert('del' + jc);

	});


	//	View Student Information
	$(this).on('click','.view-student',function(){

		var	stud_name	=	$(this).closest("tr").attr('data-studname');
		var	course		=	$(this).closest("tr").attr('data-course');
		var studid 		= 	$(this).attr('data-studid');

		var address		=	$(this).closest("tr").attr('data-address');
		var gender		=	$(this).closest("tr").attr('data-gender');
		var cp_no		=	$(this).closest("tr").attr('data-cpno');
		var birthdate	=	$(this).closest("tr").attr('data-birthdate');
		var tel_no		=	$(this).closest("tr").attr('data-telno');


		var yearlevel	=	$(this).closest("tr").attr('data-year');
		var nationality	=	$(this).closest("tr").attr('data-nationality');
		var email       =	$(this).closest("tr").attr('data-email');
		var major		=	$(this).closest("tr").attr('data-major');


		$('#v_student_id').html(studid);
		$('#v_student_name').html(stud_name);
		$('#v_course').html(course);
		$('#v_address').val(address);
		$('#v_birthdate').val(birthdate);
		$('#v_year').html(yearlevel);
		$('#v_nationality').val(nationality);
		$('#v_email').val(email);
		$('#v_major').val(major);


	});

	//	View Concern Details onClick of button
	$(this).on('click','.view-concern', function(){


		//	Get the details from the parent element <tr> row
		var c_name 				= $(this).closest("tr").attr('data-cName');
		var c_email				= $(this).closest("tr").attr('data-cEmail');
		var c_contact			= $(this).closest("tr").attr('data-cContact');
		var c_concern			= $(this).closest("tr").attr('data-cConcern');
		var c_datesubmitted		= $(this).closest("tr").attr('data-cDateSubmitted');
		var c_subject			= $(this).closest("tr").attr('data-cSubject');
		var c_id 				= $(this).closest("tr").attr('data-cID');
		var c_status 			= $(this).closest("tr").attr('data-cStatus');

		//	Populate the Fields with Details
		$("#concern_Sender").html(c_name);
		$("#concern_Email").html(c_email);
		$("#concern_ContactNum").html(c_contact);
		$("#concern_Message").html(c_concern);
		$("#concern_DateSubmitted").html(c_datesubmitted);
		$("#concern_Subject").html(c_subject);
		$("#concernID").val(c_id);
		$("#concernStatusLabel").val(c_status);


		//Dynamic Dropdown According to Status
		if(c_status == "Unresolved")
		{
			$("#concernStatus").val("Unresolved");
		}else if( c_status == "Completed"){
			$("#concernStatus").val("Completed");
		}else{
			$("#concernStatus").val("Pending");
		}



	});





	// Password Flag
	var hidepass = true;


	$("#showPass").change(function(){

		if( $("#showPass").is(":checked") == true )
		{
			$("#txtRegPassword").attr('type','text');
		}else
		{
			$("#txtRegPassword").attr('type','password');
		}

	});


	/* Enter Key Function */
	$.fn.enterKey = function (fnc) {
	    return this.each(function () {
	        $(this).keypress(function (ev) {
	            var keycode = (ev.keyCode ? ev.keyCode : ev.which);
	            if (keycode == '13') {
	                fnc.call(this, ev);
	            }
	        })
	    })
	}









	//	Change Account Type
	$(".accnt-loading, #account_details_alert").hide();


	//	Flag
	active = false;


	//	Get the base URL of Application
	var base_url = $("#baseURL").val();


	//	Click Event 
	$(this).on('click','#btnEditAccountDetails', function(){

		

		if( active == false){
			
			//	Remove disabled status of Account Details Dropdown Box
			$("#btnEditAccountDetails").attr('value', 'Save Changes');
			$("#account_details_dropdown").attr('disabled', false);
			active = true;
		
		}else if( active == true){

			//	Put "disabled" status of Account Dropdown Box
			$("#btnEditAccountDetails").attr('value', 'Edit Account Details');
			$("#account_details_dropdown").attr('disabled', 'true');
			
			//	Show Loading icon for a bit
			$(".accnt-loading").fadeIn().delay(1500).fadeOut();
			$("#account_details_alert").delay(2500).fadeIn().delay(3000).fadeOut();

			//	Get value of dropdown box
			var newaccounttype = $("#account_details_dropdown").val();

			//	Send New Account Type to Controller / Model
			$.ajax({
				type: 'POST',
				url: base_url + 'dashboard/update_account_details',
				data: {accountType:newaccounttype},
				success:function(response){
					$('#response-ajax').html(response);
				}
			});
			

			//	Disable the dropdown menu
			active = false; 
		}	
		
	});















	/*
	*	Reply Form
	*/
	//$("#replyForm").hide();

	$(this).on('click','#btnReplyToConcern', function(){

		event.preventDefault();

		var replyToConcern = $("#txtFieldReplyToConcern").val();
		var concernEmail   = $("#concern_Email").html();
		var subject 		= $("#concern_Subject").val();

		$.ajax({

			type: 'POST',
			url:   base_url + 'Dashboard/reply_to_concern',
			data: {reply:replyToConcern, email:concernEmail, subject:subject},
			success:function(response){
				$('#reply-test-div').html(response);
			}


		});

	});


	//	Hide loading and notification
	$("#create_admin_alert, .create-admin-loading").hide();

	$(this).on('click','#btnCreateAdminAccount', function(){
		
		event.preventDefault();
		
		var admin_username 		=	$("#new_admin_username").val();
		var admin_password		=	$("#new_admin_password").val();
		var admin_firstname		=	$("#new_admin_firstname").val();
		var admin_lastname		=	$("#new_admin_lastname").val();
		var admin_email			=	$("#new_admin_email").val();
		
		//alert(admin_username + admin_password + admin_firstname + admin_lastname + admin_email);
		

		
		$.ajax({
			type: 'POST',
			url:  base_url + 'dashboard/create_administrator',
			data: {username:admin_username,password:admin_password,firstname:admin_firstname,lastname:admin_lastname,email:admin_email},
			success:function(response){
				//$("#createAdminNotif").html(response);
				$(".create-admin-loading").fadeIn("fast").delay(2000).fadeOut();
				$("#create_admin_alert").delay(2000).fadeIn("slow").delay(3000).fadeOut();
				$("#new_admin_username").val("");
				$("#new_admin_password").val("");
				$("#new_admin_firstname").val("");
				$("#new_admin_lastname").val("");
				$("#new_admin_email").val("");
			}
		});
		
	});

	
	//	AJAX - Update Concern Status - via Dropdown Select
	$("#concern_status_notif, #concern_status_loading").hide();
	$("#concernStatus").change(function(){

		var id  	=	$('#concernID').val();
		var status 	= 	$("#concernStatus").val();
		var subject = 	$('#concern_Subject').html();



		$.ajax({
			type: 'POST',
			url: base_url + 'dashboard/update_concern_status',
			data: {status:status, subj:subject, id:id},
			success:function(response){
				$("#concern_status_loading").fadeIn("fast").delay(1000).fadeOut('fast');
				$("#concern_status_notif").delay(1300).fadeIn("slow").delay(2000).fadeOut();
				$('#status' + id).html(status);

				if(status == "Unresolved")
				{
					$('#status' + id).removeClass('label-warning').removeClass('label-success');
					$('#status' + id).addClass('label-danger');
					$("#btn" + id).closest('tr').attr('data-cstatus','Unresolved');

				}else if( status == "Completed")
				{
					$('#status' + id).removeClass('label-warning').removeClass('label-danger');
					$('#status' + id).addClass('label-success');
					$("#btn" + id).closest("tr").attr("data-cstatus","Completed");
				}else
				{
					$('#status' + id).removeClass('label-success').removeClass('label-danger');
					$('#status' + id).addClass('label-warning');
					$("#btn" + id).closest('tr').attr('data-cstatus','Pending');
				}

			}
		});

	});



	/* Concern Status Label Design*/
	$(".concernStatusLabel").each(function()
	{	
		//Get Status 
		var status = $(this).html();
		
		//Know if Pending or Compelted
		if( status == "Pending")
		{
			//Give Background Color
			$(this).addClass('label-warning');
		}

		if( status == "Completed")
		{
			//Give Background Color
			$(this).addClass('label-success');
		}

		if( status == "Unresolved")
		{
			//Give Background Color
			$(this).addClass('label-danger');
		}

	});


	/**
	*	Google Charts 
	*/






	//	Google Charts
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	google.charts.setOnLoadCallback(drawChart3);
	google.charts.setOnLoadCallback(drawChart4);
	google.charts.setOnLoadCallback(drawChart5);

      function drawChart() {

      	
        var data = google.visualization.arrayToDataTable([
          ['Grading', 'Number of Votes'],
          ['Extremely Well',  parseInt($("#q1_0").val())],
          ['Very Well', parseInt($("#q1_1").val()) ],
          ['Somewhat Well', parseInt($("#q1_2").val()) ],
          ['Not So Well', parseInt($("#q1_3").val()) ],
          ['Poor', parseInt($("#q1_4").val())]
        ]);
		


        var options = {
          bars: 'horizontal', // Required for Material Bar Charts.
          width: 1200,
          height: 300,
          colors: ['#b41e28']

        };

		var q1_chart = new google.charts.Bar(document.getElementById('question_1_barchart'));

		q1_chart.draw(data, google.charts.Bar.convertOptions(options));
      }// End Function







		function drawChart2() {

			//	Google Chart Data
	        var data2 = google.visualization.arrayToDataTable([
		          ['Grading', 'Number of Votes'],
		          [ 'Extremely Well-maintained', parseInt($("#q2_0").val()) ],
		          ['Very Well Maintained', parseInt($("#q2_1").val()) ],
		          ['Somewhat Well Maintained', parseInt($("#q2_2").val()) ],
		          ['Not So Well Maintained', parseInt($("#q2_3").val()) ],
		          ['Not Well Maintained', parseInt($("#q2_4").val())]
	        ]);


	        //	Google Chart Settings
	        var options2 = {
	          bars: 'horizontal', // Required for Material Bar Charts.
	          width: 1200,
	          height: 300,
	          colors: ['#b41e28']

	        };

			var q2_chart = new google.charts.Bar(document.getElementById('question_2_barchart'));

			q2_chart.draw(data2, google.charts.Bar.convertOptions(options2));

		}



		function drawChart3() {

			//	Google Chart Data
	        var data3 = google.visualization.arrayToDataTable([
		          ['Grading', 'Number of Votes'],
		          ['Extremely Likely', parseInt($("#q3_0").val()) ],
		          ['Very Likely', parseInt($("#q3_1").val()) ],
		          ['Somewhat Likely', parseInt($("#q3_2").val()) ],
		          ['Not So Likely', parseInt($("#q3_3").val()) ],
		          ['Not At All', parseInt($("#q3_4").val())]
	        ]);


	        //	Google Chart Settings
	        var options3 = {
	          bars: 'horizontal', // Required for Material Bar Charts.
	          width: 1200,
	          height: 300,
	          colors: ['#b41e28']

	        };

			var q3_chart = new google.charts.Bar(document.getElementById('question_3_barchart'));

			q3_chart.draw(data3, google.charts.Bar.convertOptions(options3));

		}

		function drawChart4() {

			//	Google Chart Data
	        var data4 = google.visualization.arrayToDataTable([
		          ['Grading', 'Number of Votes'],
		          ['Extremely Satisfied', parseInt($("#q4_0").val()) ],
		          ['Very Satisfied', parseInt($("#q4_1").val()) ],
		          ['Somewhat Satisfied', parseInt($("#q4_2").val()) ],
		          ['Not Satisfied', parseInt($("#q4_3").val()) ]
	        ]);


	        //	Google Chart Settings
	        var options4 = {
	          bars: 'horizontal', // Required for Material Bar Charts.
	          width: 1200,
	          height: 300,
	          colors: ['#b41e28']

	        };

			var q4_chart = new google.charts.Bar(document.getElementById('question_4_barchart'));

			q4_chart.draw(data4, google.charts.Bar.convertOptions(options4));

		}

		function drawChart5() {

			//	Google Chart Data
	        var data5 = google.visualization.arrayToDataTable([
		          ['Grading', 'Number of Votes'],
		          ['Extremely Likely', parseInt($("#q5_0").val()) ],
		          ['Very Likely', parseInt($("#q5_1").val()) ],
		          ['Somewhat Likely', parseInt($("#q5_2").val()) ],
		          ['Not Applicable', parseInt($("#q5_3").val())]
	        ]);


	        //	Google Chart Settings
	        var options5 = {
	          bars: 'horizontal', // Required for Material Bar Charts.
	          width: 1200,
	          height: 300,
	          colors: ['#b41e28']

	        };

			var q5_chart = new google.charts.Bar(document.getElementById('question_5_barchart'));

			q5_chart.draw(data5, google.charts.Bar.convertOptions(options5));

		}



		$("#btnSearchConcerns").click(function(){
			event.preventDefault();

			alert("activate search concerns");
		});
});



