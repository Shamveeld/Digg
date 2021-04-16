<?php include('header.php');?>
<style>


.form-control
{
	background-color: #EFEFEF;
	height: calc(2.25rem + 10px);
	font-family: 'Sora', sans-serif;
	font-size: 18px;
	font-weight:300
}



/*          

	.group        { 
  position:relative; 
  margin-bottom:25px; 
}

input:focus     { outline:none; padding-bottom: 0;}


.materialize>label          {
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:10px;
  top:10px;
  transition:0.4s ease all; 
  -moz-transition:0.4s ease all; 
  -webkit-transition:0.4s ease all;
}


input:focus ~ label, input:valid ~ label    {
  top:0px;
  font-size:15px;
  color:#4C33E2;
  padding-bottom: 0;
  
}

.bar  { position:relative; display:block; width:100%; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:0px; 
  position:absolute;
  background:#96c93d; 
  transition:0.4s ease all; 
  -moz-transition:0.4s ease all; 
  -webkit-transition:0.4s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}


input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

.highlight {
  position:absolute;
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

@-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}



.text-group textarea {
  display: block;
  background: none;
  padding: 0.125rem 0.125rem 0.0625rem;  
  border-width: 0;
  border-color: transparent;
  line-height: 1.9;
  width: 100%;
  -webkit-transition: all 0.28s ease;
  transition: all 0.28s ease;
  box-shadow: none;
}
.text-group textarea:focus ~ .input-label,
.text-group textarea:valid ~ .input-label,
.text-group textarea.form-file ~ .input-label,
.text-group textarea.has-value ~ .input-label {
 font-size:14px;;
  color: gray;
  top: -1rem;
  left: 0;
}
.text-group textarea:focus ~ .input-label {
  color: #96c93d;
}
.text-group textarea:focus ~ .bar::before {
  width: 100%;
  left: 0;
}
.text-group {
  position: relative;
  margin-top: 2.25rem;
  margin-bottom: 4.25rem;
} */

</style>


<style>
      .box {
        display: inline-block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 20px;
      }
      /* Hide the default style of the checkbox */
      input[type=checkbox] {
        visibility: hidden;
      }
      /* Create a custom checkbox */
      .mark {
        position: absolute;
        top: 0;
        left: 0;
        height: 23px;
        width: 21px;
        background-color: #EFEFEF;
		border-radius: 2px;
      }
      /* Specify the background color for the checkbox while hovering */
      .box:hover input + .mark {
        background-color: #EFEFEF;
      }
      /* Specify the background color for the checkbox when the checkbox is active */
      .box input:active + .mark {
        background-color: #ffcc00;
      }
      /* Specify the background color for the checkbox when it is checked */
      .box input:checked + .mark {
        background: linear-gradient(to right, #4A33E1 0%,  #8C27EA  100%);
      }
      /* Checkmark to be shown in checkbox */
      /* It will not be shown when not checked */
      .mark:after {
        content: "";
        position: absolute;
        display: none;
      }
      /* Display checkmark when checked */
      .box input:checked + .mark:after {
        display: block;
      }
      /* Styling the checkmark using webkit */
      /* Rotated the rectangle by 45 degree and showing only two border to make it look like a tick mark */
      .box .mark:after {
        left: 8px;
        bottom: 5px;
        width: 6px;
        height: 12px;
        border: solid #eee;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
      }

	  .form-check{
		  padding-left: 0px;
	  }

	  .top_right_img{
		background-image: url('<?= base_url()?>assets/images/mob_yellow.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: top; 
	  }
    </style>

<!-- Content
		============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container-fluid clearfix ">

			<div class="form-widget">

				<div class="form-result"></div>

				<form class="row" id="checkout-form" action="include/form.php" method="post"
					enctype="multipart/form-data">
					<div class="form-process">
						<div class="css3-spinner">
							<div class="css3-spinner-scaler"></div>
						</div>
					</div>
					<div class="col-lg-6 vh-100 pt-5 d-none d-md-block"
						style="background-image:url('<?= base_url();?>assets/images/home_bg.png');background-size: cover;">
						<div class="row no-gutters px-4">
							<h3 class="logo">digg</h3>
							<div class="w-100">
								<img src="<?= base_url('assets/images/home_student.png')?>" alt="" style="width:50%">
							</div>
							<h6 class="font20 text-white font-sora font-weight-light mt-5 pr-5">"Coming to Dubai with
								One Step Dubai has been the best decision of my life. I am now living in Dubai with a
								good job and I will be getting married next year!"</h6>
							<h6 class="font22 font-sora text-white mt-5">Mohammed, One Step Dubai student
								<br><br>
								<span class="mt-2">Pakistan</span></h6>
						</div>
					</div>
					<div class="col-lg-6 mt-md-5 mt-0  pt-5  d-flex position-relative">
						<img src="<?= base_url('assets/images/mob_yellow.png')?>" alt="" style="position: absolute;bottom: 77%;left: 20%;">
					
						<div class="align-items-center d-flex">
							<div class="mx-auto">
								<div class="row checkout-form-shipping">
									<div class="col-12">
										<h3 class="font-sora text-center mb-4" style="font-size:46px">Apply Now to work in Dubai</h3>
									</div>

									<div class="col-md-6 col-12 form-group">
									<input type="text" name="checkout-form-shipping-name"
											id="checkout-form-shipping-name" class="form-control required" value=""
											placeholder="John Doe">

         
									<!-- <div class="group form-group materialize">      
										<input type="text" class="form-control" id="name" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="font-sora font-weight-light">Name</label>
									</div> -->
 
									
									</div>
									<div class="col-md-6 col-12 form-group">

										<input type="text" name="checkout-form-shipping-company"
											id="checkout-form-shipping-company" class="form-control" value=""
											placeholder="Last Name">
									</div>

									<div class="col-md-6 col-12 form-group">
										<div class="form-group mb-0">
											<div class="input-group text-left">

												<input id="template-contactform-date" name="template-contactform-date"
													type="text"
													class="form-control datetimepicker-input datetimepicker1"
													data-target=".datetimepicker1" data-toggle="datetimepicker"
													placeholder="Date of Birth" />
												<div class="input-group-prepend" data-target=".datetimepicker1"
													data-toggle="datetimepicker">
													<div class="input-group-text"><i class="icon-calendar3"></i></div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-12 bottommargin-sm">
										<label class="mb-0 font-sora font-weight-light">Gender:</label>
										<div class="form-check">
											<!-- <input class="form-check-input" type="checkbox"
												id="template-contactform-mobile" name="template-contactform-checkbox[]"
												value="Mobile">
											<label class="form-check-label font-sora font-weight-light"
												for="template-contactform-mobile">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input class="form-check-input" type="checkbox"
												id="template-contactform-mail" name="template-contactform-checkbox[]"
												value="Email">
											<label class="form-check-label font-sora font-weight-light"
												for="template-contactform-mail">Female</label>
												 -->
												
										<label class="box font-sora font-weight-light font18">Male
											<input type="checkbox" checked="checked">
											<span class="mark"></span>
											</label>
											<label class="box font-sora font-weight-light font18">Female
											<input type="checkbox" checked="checked">
											<span class="mark"></span>
											</label>
										</div>
										<!-- <div class="form-check">
														
													</div> -->

									</div>


									<div class="form-group col-md-6 col-12">
										<!-- <label for="inputState">State</label> -->
										<select id="inputState" class="form-control">
											<option selected>Nationality</option>
											<option>...</option>
										</select>
									</div>

									<div class="form-group col-md-6 col-12">
										<!-- <label for="inputState">State</label> -->
										<select id="inputState" class="form-control">
											<option selected>Country of residence</option>
											<option>...</option>
										</select>
									</div>


									<div class="col-md-6 col-12 form-group">
										<label>How we can contact you?</label>
										<input type="text" name="checkout-form-shipping-city"
											id="checkout-form-shipping-city" class="form-control required" value=""
											placeholder="Contact number">
									</div>

									<div class="col-md-6 col-12 form-group">
										<label>&nbsp;</label>
										<input type="text" name="checkout-form-shipping-phone"
											id="checkout-form-shipping-phone" class="form-control required" value=""
											placeholder="Email address">
									</div>
								</div>

								<div class="form-group col-12 text-right p-0">
									<a href="<?= base_url('Home/Progress')?>"> <button type="submit"
											name="checkout-form-submit" class="btn text-white py-2 px-5 w-auto font22 font-sora font-weight-light btn-grad">Apply
											now</button></a>
								</div>
							</div>
						</div>
						<img src="<?= base_url('assets/images/mob_red.png')?>" alt="" style="position: absolute;top: 85%;right: -30%;">
					</div>

				</form>

			</div>

		</div>
	</div>
</section><!-- #content end -->

<!-- <script>
	$(".mat-input").focus(function(){
  $(this).parent().addClass("is-active is-completed");
});

$(".mat-input").focusout(function(){
  if($(this).val() === "")
    $(this).parent().removeClass("is-completed");
  $(this).parent().removeClass("is-active");
})
</script> -->
<?php include('footer.php');?>