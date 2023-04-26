<?php if ($site_set['header'] != 'false'): ?>
	<!-- header_menu -->
	<div class="header">
		<div class="bl_c">
			<div class="header_c">
				<div class="header_cl">
					<a class="logo" href="#home">
						<p>CopyWriter</p>
					</a>
					<div class="menu">
						<div class="menu_c">
							<a class="menu_ci" href="#about">Өзім жайлы</a>
							<a class="menu_ci" href="#service">Қызметтер</a>
							<a class="menu_ci" href="#case">Кейстер</a>
							<a class="menu_ci" href="#contact">Байланысу</a>
							<a class="menu_ci" href="#">Русский</a>
						</div>
						<div class="menu_bars menu_bars_clc"><i class="fal fa-bars"></i></div>
					</div>
				</div>
				<a class="header_cr" href="tel:<?=$site['phone']?>">
					<i class="fas fa-phone-alt"></i>
					<span><?=$site['phone_view']?></span>
				</a>
			</div>
		</div>	
	</div>
<?php endif ?>