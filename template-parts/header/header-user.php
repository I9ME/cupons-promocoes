<style type="text/css">
	.logar{
		display: flex;
	    flex-direction: column;
	    padding: 8px 10px 3px;
	    font-size: 15px;
	    border-radius: 10px;
	    border: 2px solid #b80306;
	}
	.logar ol{
		float: left;
	}
	.logar ol a{
		color: #ffffff;
	}

	.user{
		top: 20px;
		position: absolute;
		right: 4%;
		transition: all .5s;
	    flex-direction: column;
		width: 11%;
    	justify-content: space-between;
	}

	.img img{
		width: 50px;
		height: 50px;
		border-radius: 38px;
	}
</style>
<?php 
	if ( is_user_logged_in() ) {
	      global $current_user;
	      get_currentuserinfo();
	      $user = wp_get_current_user();
	
	      echo '
	      			<a href="http://localhost/barneys-cupons/member-account/" title="Minha Conta"> 
	      			<span>Olá,' . $current_user->user_login . '</span>'.
	      			 
	      				'<img src=' .  esc_url( get_avatar_url( $user->ID ) ) .' />'.
					
					'<ul class="user__menu wow fadeInRight">
						<li><a href="http://localhost/barneys-cupons/member-login/">Painel</a></li>
						<li><a href="http://localhost/barneys-cupons/member-account/">Minha Conta</a></li>
						<li><a href="http://localhost/barneys-cupons/wp-login.php?action=logout&amp;_wpnonce=e19042a83a">Sair</a></li>
					</ul>
					
	      			</a>
	      		';
				
	      
	  } else {
	      echo '<div class="logar">
	      			<div class="img">'. 
	      				get_avatar( get_the_author_meta(), '96' ) .
				 	
	      			'<ol class="">
						<li><a href="http://localhost/barneys-cupons/member-register/">Registrar</a></li>
						<li><a href="http://localhost/barneys-cupons/member-login/">Login</a></li>
						
					</ol>
	      			
	      			</div>
				</div>';
	  }
	
?>