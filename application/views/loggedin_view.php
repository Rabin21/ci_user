<?php if ($this->session->userdata('loggedin')['user_id']): ?>
	<h1>this page is after logged in</h1>
	<p>Welcome First Name: <?php echo $this->session->userdata('loggedin')['firstname']; ?><br></p>
	<a href="<?php echo base_url('home/signout'); ?>">Logout</a>
<!--  -->
	
	
<!--  -->
<?php else: ?>
	<?php redirect('home'); ?>
<?php endif; ?>



