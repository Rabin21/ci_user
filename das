[33mcommit 4ece2f2e1dfe2d14096abc56b4f52af4bc1bfd53[m
Author: Rabin Shrestha <timeportal21@gmail.com>
Date:   Fri Dec 22 16:24:26 2017 +0545

    modified some file

[1mdiff --git a/application/controllers/home.php b/application/controllers/home.php[m
[1mindex 300aa3f..985af64 100644[m
[1m--- a/application/controllers/home.php[m
[1m+++ b/application/controllers/home.php[m
[36m@@ -22,8 +22,7 @@[m [mclass Home extends CI_Controller{[m
 		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]' );[m
 [m
 		if ($this->form_validation->run() ===FALSE) {[m
[31m-			$this->session->set_flashdata('regfailed', 'valid input is required');[m
[31m-			redirect('home/');[m
[32m+[m			[32m$this->load->view('register_user_view');[m
 		}else{[m
 			$data = array([m
 				'firstname' => $this->input->post('fname'),[m
[36m@@ -67,6 +66,6 @@[m [mclass Home extends CI_Controller{[m
 		redirect('home/');[m
 	}[m
 	public function details_users()	{[m
[31m-		[m
[32m+[m
 	}[m
 }[m
\ No newline at end of file[m
[1mdiff --git a/application/views/home_view.php b/application/views/home_view.php[m
[1mindex c8c6050..c729cd6 100644[m
[1m--- a/application/views/home_view.php[m
[1m+++ b/application/views/home_view.php[m
[36m@@ -14,7 +14,7 @@[m
 </head>[m
 <body>[m
   [m
[31m-</body>[m
[32m+[m
 </html>[m
 <nav class="navbar navbar-default">[m
   <div class="container-fluid">[m
[36m@@ -39,7 +39,7 @@[m
 <class class="container">[m
 	<div class="row">[m
 		<div class="container">[m
[31m-    	<div class="col-md-3">[m
[32m+[m[41m    [m	[32m<div class="col-md-4">[m
         <?php echo validation_errors(); ?>[m
         <?php echo $this->session->flashdata('login'); ?>[m
         <?php echo $this->session->flashdata('regsuccess'); ?>[m
[36m@@ -57,3 +57,5 @@[m
 		</div>[m
 	</div>[m
 </class>[m
[32m+[m[32m</body>[m
[32m+[m[32m</html>[m
\ No newline at end of file[m
[1mdiff --git a/application/views/register_user_view.php b/application/views/register_user_view.php[m
[1mindex 1682693..0510c9f 100644[m
[1m--- a/application/views/register_user_view.php[m
[1m+++ b/application/views/register_user_view.php[m
[36m@@ -34,9 +34,8 @@[m
   </div>[m
 </nav>[m
     <div class="container">[m
[31m-    <div class="col-md-3">[m
[32m+[m[32m    <div class="col-md-4">[m
         <?php echo validation_errors(); ?>[m
[31m-        <?php echo $this->session->flashdata('regfailed') ?>[m
         <form class="form-signup" action="<?php echo base_url('home/signup'); ?>" method="POST">[m
             <h2 class="form-signup-heading">Sign Up</h2>                    [m
             <input type="text" name="fname" class="form-control" placeholder="Enter First Name"  autofocus><br>[m
