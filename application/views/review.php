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

		

		<div class=" m-4">
			<div class="row">
				<div class="col">
				<h4>Complete - Review your application</h4>
				</div>
			</div>
			<div class="row">
				<div class="col">
				<div class="card">
                <div class="card-header">
                    <div class="col px-0">
                <label for="exampleInputEmail1">Basic Information &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></label><br></div>
                <div class="row my-2">
                    <div class="col-md col-12">
                    <label for="exampleInputEmail1">Name: : John doe</label><br>
                    </div>
                    <div class="col-md col-12">
                    <label for="exampleInputEmail1">Date of birth: 18 may 1995</label><br>
                    </div>
                    <div class="col-md col-12">
                    <label for="exampleInputEmail1">Gender: Male5</label><br>
                    </div>
                    <div class="col-md col-12">
                    <label for="exampleInputEmail1">Nationality: Indian</label><br>
                    </div>
                    <div class="col-md col-12">
                    <label for="exampleInputEmail1">Country of residence: UAE</label><br>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-auto">
                    <label for="exampleInputEmail1">Contact Number: +971 52 260 0281</label><br>
                    </div>
                    <div class="col-auto">
                    <label for="exampleInputEmail1">Email: harpreetsinghdhot@gmail.com5</label><br>
                    </div>
                   
                </div>
                </div>
                
                </div>
				</div>
                
            </div>

            
		</div>
        <div class=" m-4">
			
			    <div class="row">
                <div class="col">
                    <div class="card">
                    <div class="card-header">
                    <p>Questionnaire</p>
                    
                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1">Have you ever visited Dubai? &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Yes</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> Do you have any friends or family in Dubai?<i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">No</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> How long do you want to stay in stay in Dubai?<i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Upto 3 months</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> Why do you want to come to Dubai? <i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Lifestyle</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> What industries would you prefer to work in? <i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Fashion</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> What are your interests? <i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Sports</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1">Do you have any financial savings?  <i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">5000 to 10,000 aed</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> What is your level of education? <i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Batchelors</i></button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                             <label for="exampleInputEmail1"> How soon do you want to come to Dubai? <i class="fa fa-pencil" aria-hidden="true"></i></label>
                        </div>
                        <div class="col-12">
                        <button class="btn"><i class="fa fa-home">Right now</i></button>

                        </div>
                    </div>
                    
                </div>
</div>
                </div>
				
                
            </div>

            
		</div>
		<div class="mx-md-0 mx-0 mt-4">
			<div class="row mb-3 px-2 mx-2">
				<div class="col-lg-2 col-auto px-1 py-2 d-md-none d-block">
				<a href="<?= base_url('Home/Progress')?>" class="bg-transparent btn text-dark py-2 w-auto font22 font-sora font-weight-light px-0 "><u>Back</u></a></div>
				<div class="col-auto px-1 py-2 d-none d-md-block">
				<a href="<?= base_url('Home/Progress')?>" class="btn btn-outline-secondary bg-transparent text-dark py-2 w-auto font22 font-sora font-weight-light px-5 font16 font-sora">Back</a></div>
				<div class="col-lg-auto col-auto px-1 py-2">
				<a href="<?= base_url('Home/Progress')?>"> <button type="submit" name="checkout-form-submit" class="btn text-white py-2 px-md-4 px-auto w-auto font22 font-sora font-weight-light btn-grad font16 font-sora">Complete Application </button></a>
				</div>
			</div>
		</div>
</section><!-- #content end -->


  <?php include('footer.php');?>
