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
				<h4>What are your interests?</h4>
				</div>
			</div>
			<div class="row my-2 mx-2">
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Outdoors.png"> Outdoors</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Fitness.png"> Fitness</i></button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Health.png"> Health</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Travel.png"> Travel</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Theme parks.png"> Theme parks</button>
                </div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Cooking.png"> Cooking</button>
                </div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Business.png"> Sports</button>
                </div>
                
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Sports.png"> Adventure</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Music.png">Music </button>
                </div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Fashion.png">Fashion </button>
                </div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Technology.png">  Technology </button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Architecture.png"> Architecture</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Writing.png">  Writing</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Gaming.png">  Gaming</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Dining.png">Dining</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/History.png">  History </button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Theatre.png">  Theatre</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/tech.png">  Networking</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/art.png">  Art</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Legal.png">  Politics</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/fishing.png">  Fishing</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Meeting.png">  Meet people </button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Podcasts.png">  Podcasts</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Gambling.png">  Gambling </button>
				</div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/like.png">  Self improvement</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Foreign_languages.png">  Foreign languages </button>
				</div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Movies.png">  Movies</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Fashion.png">  Celebrities </button>
				</div>
                <div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Dating.png">  Dating</button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/Socialmedia.png">  Social media  </button>
				</div>
				<div class="col-auto mb-3 px-1 py-2">
				<button class="btn w-100 px-4"><img class="pl-1" src="<?= base_url();?>assets/images/icons/camera.png">Photography </button>
				</div>
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
