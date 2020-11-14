<!DOCTYPE html>
<html>
<head>
	  <meta name="referrer" content="strict-origin" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet">
	 
	<title>login</title>

	
</head>
<style>
	body{
		 background-image: url(<?php echo base_url('aset/bg5.jpg');?>);
		 background-size:cover;
		 background-repeat: no-repeat;
		 max-width: 100%;
		 height: 100vh;
		 display:block;

	}
    

 
	
	form{
		margin:100px 100px 75px 100px;
		color:white;
		font-size:20px;
		font-family: 'times new roman';
		display: block;
	}
	
	h1{
		color:white;
		font-family: 'times new roman', cursive;
		font-size: 48px;
		margin: 0 auto
	}

	.opa{
		opacity: 0.9;
		border-style: 2px solid black;
		border-radius: 15px;
		background-color: #0d6b33;

	}
	
	
    img{
		width: 7%
	}
	input{
		border: 1px solid white;
    	border-radius: 15px;
    	padding-left: 10px;


    }

    .button {
    	border: 1px solid white;
    	border-radius: 15px;
    }
    ::-webkit-input-placeholder{
    	color: black(50%);
    	padding-left: 10px;
    }
    ::-ms-input-placeholder{
    	color: black(50%);
    	padding-left: 10px;
    	
    }
    ::placeholder{
    	color: black(50%);
    	padding-left: 10px;
    	
    }
    

	
</style>
<body>
    

	<nav class="navbar navbar-expand-sm   open-edit fixed-top" >
  <!-- Brand/logo -->
  <a class="navbar-brand text-danger " style="font-family: 'Caveat', cursive;" href="<?php echo site_url('main/index');?>" ><img src="<?php echo base_url('aset/dreamis ver1.png');?>"> DREAMIS KOREAN STORE</a>
  <ul>
  	
  </ul>
 
</nav>
<br>
<br>
<br>



    <h1 Align="center" class="h1" >LOGIN</h1>
	
	
   <CENTER><div class="blur"  style="width: 30rem;height:auto; ; ">     
	<?php echo form_open_multipart('main/aksi_login'); ?>

	<label>username</label>
		 <input type="text" name="username"  placeholder="masukan nama"><br>
				
			<br>
	<label>password</label>
		 <input type="password" name="password"  placeholder="masukan password"><br>
				
			<br>

			 <button  type="submit" value="tambah" class="btn btn-danger button" style="width: 150px;margin-bottom: 10px">login</button > 
		</form>
		<h6 align="center" style="margin-bottom: 50px">dont have any account?	<a href="<?php echo site_url('main/register')?>" style="text-decoration: none; color: white">Create account</a></h6>
	</div>
		</CENTER>
<br>

</body>
</html