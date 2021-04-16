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
			<div class="row m-md-0 my-md-4  m-0">
				<div class="col-lg-2 col-12">
				<img src="<?= base_url();?>assets/images/digg_black.png">
				</div>
			
				<div class="col-lg-10 col-12 mt-md-3 mt-4">
				<p class="m-0">Progress</p>
				<div class="progress mx-0 mt-0">
				<div class="bar" style="width:35%">
					<!-- <p class="percent">35%</p> -->
				</div>
			</div>
				</div>
			</div>
		</div>

		

		<div class="mx-md-5 mx-0">
			<div class="row mb-3 px-2 mt-md-5 mt-4">
				<div class="col">
				<h4>Do you have any financial savings?</h4>
				</div>
			</div>
			<div class="row my-2 mx-2">
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/No savings.png"> No savings</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/0 to 1000 aed.png"> 0 to 1000 aed</i></button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/aed.png"> 1000 to 5000 aed</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/aed1.png"> 5000 to 10,000 aed</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/aed2.png"> 10,000 to 20,000 aed</button>
                </div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/aed2.png"> 20,000 to 50,000 aed</button>
                </div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/aed2.png"> +50,000 aed</button>
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
