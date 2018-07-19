<?php 
	if ( is_user_logged_in() ) {
	      global $current_user;
	      get_currentuserinfo();
	      $user = wp_get_current_user();
	
	      echo '<div class="user" id="user-logged">
	      			<a href="http://barneys/member-account/" title="Minha Conta"> 
	      			<span>Olá,' . $current_user->user_login . '</span>'.
	      			'<div class="user__img">'. 
	      				'<img src=' .  esc_url( get_avatar_url( $user->ID ) ) .' />'.
					'</div>'.
					'<ul class="user__menu wow fadeInRight">
						<li><a href="http://barneys/member-login/">Painel</a></li>
						<li><a href="http://barneys/member-account/">Minha Conta</a></li>
						<li><a href="http://barneys/wp-login.php?action=logout&amp;_wpnonce=e19042a83a">Sair</a></li>
					</ul>
					
	      		</a>
	      		</div>';
				
	      
	  } else {
	      echo '<div class="user">
	      			<ul class="user__menu wow fadeInRight">
						<li><a href="http://barneys/member-register/">Registrar</a></li>
						<li><a href="http://barneys/member-login/">Login</a></li>
						<li><a href="http://barneys/wp-login.php?action=logout&amp;_wpnonce=e19042a83a">Sair</a></li>
					</ul>
	      			
	      			<div class="user__img">'. 
	      				get_avatar( get_the_author_meta(), '96' ) .
				 	'</div></a>'.
				'</div>';
	  }
	
?>