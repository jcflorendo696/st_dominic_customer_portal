<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once('header.php');
	require_once('nav.php');
?>
<!-- Body Tag Start -->

<div class="container">

	<!-- Header -->
	<!-- 
	<div class="row">
		<div class="col-xs-12">
			<center><h1 class='faq-heading'>Frequently Asked Questions</h1></center>
			<center><h4 class='faq-heading'>Admissions & Enrollment</h4></center>
		</div>
	</div>-->
</div>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-xs-12'>
				<img class='img-responsive' src="<?php echo site_url('/assets/img/faq-banner.png'); ?>">
			</div>
		</div>
	</div>

	<div class='container'>
	<!-- Header END -->
	<div class="row">
		<div class="col-xs-12">
			<!-- Accordions FAQ -->
			<div id="faq_accordion" role="tablist" aria-multiselectable="true">

			  <!-- First Panel -->
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> What is the process for Admissions? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<p class='info'>
					<ul>
						<li>Fill out Inquiry form from the Admissions Office and take the SDCAT at the Information Center.  </li>
						<li>Proceed to the Dean’s Office for interview/ program orientation and Interactive Tour</li>
						<li>Submit documentary requirements to the Admissions Section. </li>
						<li>Reserve for a Slot or Officially enroll on the same day</li>
						<li>Advising, Assessment and payment of reservation/tuition fee. </li>
						<li>Issuance of Registration Form, ID Application, Medical Examination.</li>
						<li>Issuance of Enrollment Kit at the Business Center and Schedule of Orientation at the DSS. </li>
					</ul>
					</p>
			    </div>
			  </div>
			  <!-- First Panel End -->

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Who can apply for admission? Should an interested applicant personally apply for admission? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      	<p class='info'>
			      	All fourth year high school students (or equivalent), high school graduates, currently college undergraduates, and college graduates may apply for admission. It is encouraged that applicants personally apply for admission. However, special cases like foreign students who are currently abroad may be represented by their parent/guardian. 
			    	</p>
			    </div>
			  </div>

			  <!-- Third Panel -->
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> What are the documents required for Admission?
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			    	<p class='info'>
			    		<span style='font-size: 18px;'>Admission Qualifications</span>
			    		
			    		<ul>
			    			<li>a graduate form a duly recognized secondary school;</li>
							<li>of good moral character as attested by the certification from the Principal/ Guidance Counselor or Class Adviser;</li>
							<li>passed the entrance examination and interview; and</li>
							<li>physically and mentally fit</li>
			    		</ul>
			    	
			    	</p>
			    </div>
			  </div>
			  <!-- Third Panel End -->


			  <!-- Schedule of Admission Test Panel -->
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Schedule of SDCA Admission Test
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>
						The SDCAT is scheduled every Mondays to Saturdays 8:00am – 5:00pm. It is administered by the Student Wellness Center. Qualifiers are notified of the admissions result after the interview with the respective Dean. Applicants may call 417-7322 loc 232 to inquire about the results of exam. Results may also be accessed through SDCA Website. The SDCAT is intended for profiling purposes. This profiling helps the Student Wellness Office in designing co-curricular programs which will help improve the academic life of  SDCA students.  Once admitted to particular programs, retention policy of each program will apply. 
			    	</p>
			    </div>
			  </div>
			  <!-- Schedule of Admission Test Panel End -->


			  <!-- How Much is Tuition Fee and Available Payment Schemes Panel -->
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> How much is the tuition fee and the available payment schemes? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>

						Php 489.14/ unit for SASCE 1st year students	<br/>
						Php 512.44/unit for SBCS, SIHTM, 1st year students <br/>
						Php 698.78/ unit for SHSP 1st year students<br/><br/>
							
						Regular load of students per semester ranges from 21-28 units. Payments may be made in cash, cheque or credit card.  Installment plans are also available. Down payment may vary depending on the total tuition fee and the remaining amount after down payment has been made shall be divided into three payments (Prelim, Midterm and Final Examination). For details, students may call the Accounting Office at 41773220local 106. 

			    	</p>
			    </div>
			  </div>
			  <!-- How Much is Tuition Fee and Available Payment Schemes End -->

			  <!-- 6.)	How much is the physical examination fee? -->
			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePhysicalExamFee" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> How much is the physical examination fee? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapsePhysicalExamFee" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>

						Medical and Physical Examination is Php 300.00. 

			    	</p>
			    </div>
			  </div>
			  <!-- 6.)	How much is the physical examination fee?  End -->


			  <!-- 7.)	What are the available scholarships programs in SDCA? -->

			  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseAvailableScholarships" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> What are the available scholarships programs in SDCA? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseAvailableScholarships" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>

 						<h3>Gregorio Andaman Scholarship. </h1>
 						<br/><br/>	This is granted to incoming freshmen who graduated as Valedictorian, Salutatorian and First Honorable Mention Awardees who   would like to take BS Psychology or Bachelor in Secondary Education or Elementary Education, and Accountancy. A letter from the School  Principal certifying the ranking obtained is required. Recipient must also maintain no grade below 86% in any subject in 1st sem and GPA of 93% for the continuation of grant on the succeeding 2nd semester. 
 						<br/><br/>
 						 a. Certified Valedictorian in high school - full or 100% discount of the tuition fee regardless of the number of graduates in high school (any course).
 						<br/><br/>
 						 b. Certified Salutatorian in high school - half or 50% discount on the tuition fees regardless of the number of graduates in high school; 75% discount for those who will take Education program.
 						<br/><br/>
 						 c. Certified First Honorable Mention Awardee in high school of at least 100 students - gets 25% discount on the tuition fees; 50% for those who will take Education program.
 						<br/><br/><br/>
 						<h3>Academic Honors </h3>
 						<br/><br/>
 						 This scholarship is granted to students with distinction in academic performance. Only academic honor awardees may apply for the scholarship grant, and this revised policy for academic honors scholarship grant is effective AY 2012-2013.
 						 <br/><br/>
 						 a. Founders Honor Award: Student topnotcher in each College.
 						 <br/>- Qualified for 100% discount in tuition fee for 1st semester. For the continuance of scholarship for 2nd semester, grade requirements must be maintained.
 						 <br/><br/>
 						 b. Presidential Honor Award: Student topnotcher in each year level
 						 <br/>- Qualified for 100% discount in tuition fee for 1st semester. For the continuance of scholarship for 2nd semester, grade requirements must be maintained.
 						 <br/><br/><br/>
 						 <h3>Faculty/Staff Educational Benefits</h3>
 						 <br/><br/>
 						 Dependents of the regular rank and file staff members and tenured faculty   members shall be entitled to educational benefits as follows:    
 						 <br/><br/>
 						 a. Legitimate spouse and maximum of two (2) children get/s 30% discount on the tuition fees.
 						 <br/><br/>
						 b. One dependent sibling/ niece/ nephew living with single employee gets 30% discount on tuition fees.
						 <br/><br/>
						 c. For probationary employees, 15% discount on tuition fee is entitled for legitimate spouse and maximum of 2 children, one dependent sibling/niece/nephew living with single probationary employees.
						 <br/><br/><br/>
						 <h3>Grants-In-Aide for Families</h3>
						 <br/><br/>
						 Families with two or more students enrolled at SDCA in the same semester are granted discounts as follows. Discount is granted to the enrolled child with the lowest tuition fee rate.
						 <br/><br/>
						 a. The 2nd sibling gets 10% discount on tuition fees
						 <br/><br/>
						 b. The 3rd sibling gets 20% discount on tuition fees
						 <br/><br/>
						 c. The 4th sibling gets 30% discount on tuition fees
						 <br/><br/>
						 d. The 5th sibling gets 40% discount on tuition fees
						 <br/><br/><br/>
						 <h3> Campus Leaders' Benefits</h1>
						 <br/><br/>
						 Duly-elected Officers of the Central College Student Council are granted scholarships in the form of special tuition fee discount. Duly-elected President gets 50% discount on tuition fee, for other officers as recommended by the Center for Student Leadership Coordinator. 
						 <br/><br/><br/>
						 <h3>Campus Journalists' Benefits</h1>
						 <br/><br/>
						 Qualified campus editors of the official school’s publication Dominican Gazette are granted scholarships in the form of special tuition fee discount. 
						 <br/><br/><br/>
						 <h3>Student-Athsletes' Scholarship</h1>
						 <br/><br/>
						 Varsity players who represent SDCA in sports competitions are given special tuition fee discount.  
						 <br/><br/><br/>
						 <h3>Externally-funded Scholarship Grants</h1>
						 <br/><br/>
						 Some companies or government units/agencies give scholarship grants to recipients, such as the SEEDS Program of Jollibee Food Corp. and AFP.
						 <br/><br/>
						 <b>a.	AFP Educational Benefit System (AFPEBS-SDCA).</b> This is an externally-funded scholarship granted by AFP to qualified dependents of military personnel. Qualified applicants are subject to the admission examinations and other admission procedures to be conducted by the SDCA (Reference: AFPEBS-SDCA Memorandum of Agreement (MOA) executed on the 19th day of March 2010; Subject: AFPEBS-SDCA Educational Benefit Program).
						 <br/><br/>
						 The program shall apply to all undergraduate courses offered by the SDCA under the School of Business and Computer Studies (SBCS, formerly SBIT), and the School of Arts, Sciences and Education (SASE).
						 <br/><br/>
						 <b>Program Benefits and Beneficiaries include that SDCA shall provide:</b>
						 <br/><br/>
						 <b>i.</b> Unlimited slots per year covering 25% discount on tuition for dependents of active military personnel.
						 <br/><br/>
						 <b>ii.</b> 1 slot per year covering 100% discount on tuition for dependents of combat casualties or for dependents of non-combat casualties for every 10 slots availed under provision “i”.
						 <br/><br/>
						 <b>iii.</b> AFPEBSO shall provide an annual stipend of Php8,000.00 to grantees who are dependents of military personnel killed-in-action.
						 <br/><br/>
						 <b>iv.</b> The remaining amount of tuition and miscellaneous fees shouldered by the grantee may be paid in full or installment basis subject to his/her installment payment scheme as determined by the SDCA.
						 <br/><br/><br/>
						 <b>b.	Other externally-funded Scholarship Grants.</b> This is applied to the external office granting scholarship. Endorsement from the external office funding the grant is needed to be given to the Student Wellness Center.
						 <br/><br/>
						 <b><i>*Requirements:</i></b>
						 <br/><br/>
						 <ul>
						 	<li>Accomplished Scholarship/Grant Application Form, available at the Student Wellness Center </li>
						 	<li>Latest 2” x 2” colored picture</li>
						 	<li>Application letter addressed to the President *for Gregorio Andaman & Academic Scholarships</li>
						 	<li>Certification of Grades issued by the Registrar *for Academic Scholarship,  Athletics/Campus Journalists/Leaders Benefits</li>
						 	<li>Photocopy of 4th year high school report card (Form 138) for freshmen/transferee students</li>
						 	<li>Recommendation from Athletics/Student Leadership Coordinator for Athletics/Campus Journalists/Leaders Benefits</li>
						 </ul>
						 <br/><br/><br/>
						 <b><i>*Policy for Scholarship/Grants:</i></b>
						 <br/><br/>
						 <ul>
						 	<li>Recipients of scholarship grants must maintain a passing grade in all subjects for the continuity of their grants.</li>
						 	<li>Only one (1) scholarship grant may be availed of.</li>
						 	<li>Deadline of submission is June 30 for 1st semester, and November 30 for 2nd semester. Scholarship must be applied every semester.</li>
						 	<li>Discounts will be deducted during the final term of the semester.</li>
						 	<li>No INC grade. Must be completed before application for scholarship is made.</li>
						 	<li>If with failing grade, benefits will be waived on the succeeding semester.</li>
						 </ul>
						 <br/><br/><br/>
						 <b> FINANCIAL ASSISTANCE PROGRAM FOR HIGHER ED</b>
						 <br/><br/>
						 SDCA provides financial assistance in the form of tuition fee discount and student loan to the needy students with at least average scholastic achievement. 
						 <br/><br/>
						 <b>       A . Student Assistantship Program</b>
						 <br/><br/>
						 Students who are willing to work while studying may avail of this program.  A residency of 1 or 2 semesters is required for those who wish to apply. Student Assistants shall be required to render maximum of eight (8) hours of service a day, for a total of 12 hours per week. Only those whose annual family income is less than Php300,000.00 will be considered. Continuation of this assistance requires industry, character and passing grades in all subjects. 
						 <br/><br/>
						 <b><i>*Requirements:</i></b>
						 <br/><br/>
						 <ul>
						 	<li>Accomplished Student Assistant Application Form</li>
						 	<li>Application Letter addressed to:<ul><li>OSL Director</li><li>St. Dominic College of Asia</li></li></ul>
						 	<li>Income Tax Return/ Proof of Income of parents/guardian (should have annual family income less than Php300,000.00)</li>
						 	<li>Photocopy of current Registration Form</li>
						 	<li>Certification of Grades issued by the Registrar’s Office</li>
						 </ul>	
						 <br/><br/>
						 <b><i>*Procedure</i></b>
						 <br/><br/>
						 1. Applicants must submit the complete requirements at the OSL.
						 <br><br/>
						 2. Applicants will be scheduled for screening and interview with the Guidance Counselor, for approval of OSL Director.
						  <br><br/>
						 3. The Student Wellness Coordinator shall endorse qualified applicants to the assigned Department Head.
						  <br><br/>
						 4. Student Assistantship Program Contracts will be furnished for all approved applicants.	
						  <br><br/>
						 <b><i>*Guidelines:</i></b>
						 <br/><br/>
						 1.	Applicants must have a GPA of 2.25 and with no failing grade and shall maintain it every semester  without failure, dropped or incomplete subjects.<br/><br/>
						 2.	Applicants should establish one year residency before acceptance.<br/><br/>
						 3.	Student assistants should have a maximum load of 24 units per semester and 6 units during summer.<br/><br/>
						 4.	Student assistants must conduct themselves and be models for other students to emulate.
						 <br/><br/><br/>
			    	</p>
			    </div>
			  </div>

			  <!-- 7.)	What are the available scholarships programs in SDCA? -->
			  	<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseReservation" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> How much is the Pre-reservation, Reservation and Down payment for Official Enrollment? 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseReservation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>

			    	Minimum reservation amount is <b>Php1,000.00,</b> reservation is non-refundable but deductable to the tuition fee. With this payment, the student has reserved a slot in the program.  Students with payment of atleast <b>Php 5,000.00 </b>qualifies for the ENGLISH 101 (scheduled on 2nd week of April, 2013). 

			    	</p>
				</div>

				</div>
				

				<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseDifference" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> What is TAFE (Technical and Further Education- NSW Australia) and BS Hospitality Management specializing in  Culinary and Kitchen Operations. 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseDifference" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>

			    	SDCA is pioneer in the Philippines in offering international hospitality program in Collaboration with 
					TAFE (Technical and Further Education- NSW Australia). It is 100% Australian-based program. TAFE program is one of the very few options for those outside Australia to obtain an Australian qualification that is recognized for skills assessment for migration and continuing studies.  Instead of taking the course in Australia (which will costs around AUS $15, 000). AT SDCA, the Joint Certificate for Commercial Cookery and Patisserie is worth Php 270, 000 (inclusive of the ingredients and two sets chef uniforms). Downpayment is Php 50, 000 and the remaining Php 200, 000 shall be paid in monthly installment of Php 15, 715.00. 
					<br/><br/>
					BS Hospitality Management specializing in Culinary and Kitchen Operations is a CHED-based program. A bachelors’ degree program which will enable graduates be employed in Hospitality Industry particularly in the Culinary Area.
			    	</p>
				</div>

				</div>

				<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseLicensure" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Academic Programs with Licensure Examination 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseLicensure" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>
			    	<ul>
			    		<li>BS Nursing</li> 
			    		<li>BS Accountancy</li>
			    		<li>Bachelor in Elementary Education</li>
			    		<li>Bachelor in Secondary Education</li>
			    		<li>BS Psychology</li>
			    		<li>BS Medical Technology</li>
			    		<li>BS Radiologic Technology</li>
			    		<li>BS Physical Therapy</li>
			    		<li>BS Pharmacy</li>
			    		<li>BS Criminology</li>
			    	</ul>
			    	</p>
			    </div>
			    </div>

			    <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingFour">
			      <h4 class="panel-title">
			        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSpecialization" aria-expanded="false" aria-controls="collapseThree">
			          <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Specialization for BS Business Administration is on Year Three 
			        </a>
			      </h4>
			    </div>
			    <div id="collapseSpecialization" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			    	<p class='info'>

			    	During the first four semesters (1st and 2nd year) students have introductory subjects which will expose them in different specializations. This would help them realize the career direction under the BS Business Administration Program. For Hospitality Management, specialization is offered as early as 1st semester of Year One. Students who are interested to enroll in BSBA/ BSHM are advised to undergo career advising with the SIHTM & SBCS Dean for career direction and opportunities.
			    	</p>			

			    </div>	
			    	<!-- Accordions FAQ End-->

		
			
	</div>
</div>




<!-- Body Tag End -->
<?php

	require_once('footer.php');
?>