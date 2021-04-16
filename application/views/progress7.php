<?php include('header.php');?>
  <style>
  .btn{
	  border-radius:50px;
	  background-color: #EFEFEF;
	  width:150px;
  }

  

  .progress {
  margin:20px auto;
  padding:0;
  width:90%;
  height:10px;
  overflow:hidden;
  background:#e5e5e5;
  border-radius:6px;
}

.bar {
	position:relative;
  float:left;
  min-width:1%;
  height:100%;
  background:linear-gradient(to right, #4A33E1 0%,  #8C27EA  100%);
}

.percent {
	position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  margin:0;
  font-family:tahoma,arial,helvetica;
  font-size:12px;
  color:white;
}
  </style>


		<!-- Content
		============================================= -->
<section id="content">
		<div class="container-fluid px-0">
			<div class="row mx-md-0 my-md-4 m-0">
				<div class="col-lg-2 col-12">
				<img src="<?= base_url();?>assets/images/digg_black.png">
				</div>
			
				<div class="col-lg-10 col-12 mt-md-3 mt-4">
					<p class="m-0">Progress</p>
						<div class="progress mx-0 mt-0">
							<div class="bar" style="width:35%">
						</div>
				</div>
				</div>
			</div>
		</div>


		<div class="container-fluid mx-md-5 mx-0 mt-5">
			<div class="row mb-3 px-2">
				<div class="col">
				<h4>How soon do you want to come to Dubai?</h4>
				</div>
			</div>
			<div class="row mb-3 px-2">
				<div class="col-lg-2 col-auto px-1 py-2">
				<button class="btn w-100 py-3"><img class="pl-1" src="<?= base_url();?>assets/images/icons/cal.png">
				Right now</button>
				</div>
				<div class="col-lg-2 col-auto px-1 py-2">
				<button class="btn w-100 py-3"><img class="pl-1" src="<?= base_url();?>assets/images/icons/cal.png">
				0 to 3 months</button>
				</div>
				<div class="col-lg-2 col-auto px-1 py-2">
				<button class="btn w-100 py-3"><img class="pl-1" src="<?= base_url();?>assets/images/icons/cal.png">3 to 6 months</button>
				</div>
				<div class="col-lg-2 col-auto px-1 py-2">
				<button class="btn w-100 py-3"><img class="pl-1" src="<?= base_url();?>assets/images/icons/cal.png"> 6 to 12 months</button>
				</div>
				<div class="col-lg-2 col-auto px-1 py-2">
				<button class="btn w-100 py-3"><img class="pl-1" src="<?= base_url();?>assets/images/icons/cal.png">After 1 year</button>
				</div>
				<div class="col-lg-2 col-auto px-1 py-2">
				<button class="btn w-100 py-3"><img class="pl-1" src="<?= base_url();?>assets/images/icons/cal.png">I'm not sure</button>
				</div>
			</div>
		</div>

		<div class="mx-md-5 mx-0 mt-4">
			<div class="row mb-3 mx-2">
				<div class="col-lg-2 col-auto px-1 py-2 d-md-none d-block">
				<a href="<?= base_url('Home/Progress')?>" class="bg-transparent btn text-dark py-2 w-auto font22 font-sora font-weight-light px-0 "><u>Back</u></a></div>
				<div class="col-auto px-1 py-2 d-none d-md-block">
				<a href="<?= base_url('Home/Progress')?>" class="btn btn-outline-secondary bg-transparent text-dark py-2 w-auto font22 font-sora font-weight-light px-5">Back</a></div>
				<div class="col-lg-2 col-auto px-1 py-2">
				<a href="<?= base_url('Home/Progress')?>"> <button type="submit" name="checkout-form-submit" class="btn text-white py-2 px-5 w-auto font22 font-sora font-weight-light btn-grad">Next </button></a>
				</div>
			</div>
		</div>
</section><!-- #content end -->


  <?php include('footer.php');?>
