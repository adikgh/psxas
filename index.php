<?php include "config/core.php";

	// site setting
	$menu_name = 'home';
	$site_set = [];

?>
<?php include "block/header.php"; ?>

	<div class="bl1" id="home">
		<div class="bl1a">
			<div class="lazy_img" data-src="/assets/img/bag/photo_2021-09-17_19-24-23.jpg"></div>
		</div>
		<div class="bl_c">
			<div class="bl1_c">
				<div class="bl1_t">
					<h1 class="bl1_t1">
						<p>Акерке</p>
						<p>Шакебаева</p>
					</h1>
					<h6 class="bl1_t2">Сатылым әкелетін мәтін жазып, <br>клиент санын 2-есе арттырамын.</h6>
				</div>
				<div class="bl1_c_btn">
					<div class="btn disb_zab">Тегін кеңес алу</div>
				</div>
			</div>
			<div class="bl1_cb">
				<div class="bl1_cbi">
					<span>Телефон, Whatsapp:</span>
					<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
				</div>
				<div class="bl1_cbi">
					<span>Әлеуметтук желі:</span>
					<div>
						<a href="https://instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-telegram-plane"></i></a>
						<a href="#"><i class="fab fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="bl2" id="about">
		<div class="bl_c">
			<div class="head_c">
				<h3>Өзім жайлы</h3>
			</div>
			<div class="bl2_c">
				<div class="bl2_cl">
					<div class="bl2_cl2">
						<div class="lazy_img" data-src="/assets/img/bag/photo_2021-09-17_19-24-26.jpg"></div>
					</div>
				</div>
				<div class="bl2_cr">
					<div class="bl2_cri">
						<div class="bl2_crin">Мен кіммін</div>
						<p>Сертификатталған копирайтер маманы. СНГ бойынша сертификатталған Ұлпан Түзелбек ханымның шәкірті</p>
					</div>
					<div class="bl2_cri">
						<div class="bl2_crin">Ұстанымым</div>
						<p>Санға емес, сапаға жұмыс жасау. Әр бір істелген жұмыстан нәтижие көрсету</p>
					</div>
					<div class="bl2_cri2">
						<div class="bl2_cri2i">
							<div>95+</div>
							<span>жарнама мәтіні</span>
						</div>
						<div class="bl2_cri2i">
							<div>95%</div>
							<span>табысын арттырғандар</span>
						</div>
						<div class="bl2_cri2i">
							<div>4</div>
							<span>үлкен жоба</span>
						</div>
					</div>
					<div class="bl2_crb">
						<p>Менімен жұмыс жасағыңыз келе ме? Онда <br>төмендегі батырманы басыңыз</p>
						<a class="btn btn_whatsapp" href="https://wa.me/<?=$site['whatsapp']?>">Жылдам байланысу</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="bl3" id="service">
		<div class="bl_c">
			<div class="head_c">
				<h3>Қызмет түрлері</h3>
			</div>
			<div class="bl3_c">
				<div class="bl3_cri">
					<div class="bl3_crin">Сайтқа сатылымдық мәтін жазу</div>
					<div class="bl3_crip">Сайтқа өтімді мәтін жазу арқылы сіз конверсиянызды көтеріп, сайтыныңызға кірген клиентті 80% ұстап қала аласыз</div>
					<div class="bl3_cris">
						<div class="bl3_crisc">
							<div>3-7 күн</div>
							<div><span>20000 тг</span> бастап</div>
						</div>
						<div class="btn btn_cl">Таңдау</div>
					</div>
				</div>
				<div class="bl3_cri">
					<div class="bl3_crin">Тапсырыспен копирайтинг жазу</div>
					<div class="bl3_crip">Сіз тауарыңызға, қызметіңізге, өндірген өніміңізді сату үшін міндеттті түрде копирайтинг керек!</div>
					<div class="bl3_cris">
						<div class="bl3_crisc">
							<div>3-5 күн</div>
							<div><span>15000 тг</span> бастап (1000+ символ)</div>
						</div>
						<div class="btn btn_cl">Таңдау</div>
					</div>
				</div>
				<div class="bl3_cri">
					<div class="bl3_crin">Жарнамалық текст жазу</div>
					<div class="bl3_crip">Жарнама тақырыбы бір көргеннен 3 секундта  клиентті ұстап қалу қажет. Бұл - ОФФЕР деп аталады. Оффер арқылы сіз тауарыңызды қымбат бағада және жарнамаңызды көрген адамдардың 50% сатылым жасай аласыз.</div>
					<div class="bl3_cris">
						<div class="bl3_crisc">
							<div>1-3 күн</div>
							<div><span>10000 тг</span> бастап</div>
						</div>
						<div class="btn btn_cl">Таңдау</div>
					</div>
				</div>
				<div class="bl3_cri">
					<div class="bl3_crin">Инстаграм желісінде контент план құру</div>
					<div class="bl3_crip">Контент - план сіздің мақсатты аудитория арнап белгілі бір мерзімге жасалған болашақ посттардың кестесі. Ол 3 бағытта жасалады. Контент - план жасату арқылы сіздің уақытыңыз үнемделеді. Бүгін не жазамын, қандай фото саламын деген сұрақтар болмайды!</div>
					<div class="bl3_cris">
						<div class="bl3_crisc">
							<div>3-6 күн</div>
							<div><span>15000 тг</span> бастап</div>
						</div>
						<div class="btn btn_cl">Таңдау</div>
					</div>
				</div>
				<div class="bl3_cri">
					<div class="bl3_crin">Сату немесе құндылық көрсететін пост жазу</div>
					<div class="bl3_crip">Пост жазылған уакытта ол сіздің тұтынушыңыз оқитындай жазылуы қажет. Біз сізге өніміңізді сатып және құндылығын көрсететін посттар жазып береміз. Бұл арқылы сіз оқырманыңызды өзіңіздің тұрақты клиенттіңізге айналдырасыз.</div>
					<div class="bl3_cris">
						<div class="bl3_crisc">
							<div>1-3 күн</div>
							<div><span>5000 тг</span> бастап</div>
						</div>
						<div class="btn btn_cl">Таңдау</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="bl4" id="case">
		<div class="bl_c">
			<div class="head_c">
				<h3>Кейстер</h3>
			</div>
			<div class="bl4_c">
				<div class="bl4_ci">
					<div class="bl4_cil">
						<img class="lazy_img" data-src="/assets/img/case/baur1.jpg" alt="" />
					</div>
					<div class="bl4_cir">
						<div class="bl4_cirn">Архитектуралық компания - Baur Architecture</div>
						<div class="bl4_cip">
							<p>Жасалған жұмыс: Командамен бизнес упоковка жасалынды. Менің тарапымнан мини сайт мәтіні 3 блокка бөлініп 2 тілде  жасалынды. Таргет жарнамасына өтімді тексттер жазылып жіберілді.</p>
							<p>Нәтижие: Инстаграм желісінде 8000 мың оқырман санынан 3 айда 31,2 мыңға көтерілді. Қазіргі таңда 42,1 мың оқырман саны, клиент саны 5 есеге өскен!</p>
						</div>
						<a href="https://instagram.com/baur_architecture" class="btn btn_cl">Қарау</a>
					</div>
				</div>
				<div class="bl4_ci">
					<div class="bl4_cil">
						<img class="lazy_img" data-src="/assets/img/case/emsu1.jpg" alt="" />
					</div>
					<div class="bl4_cir">
						<div class="bl4_cirn">Санаторияларды брондау орталығы - EMSU Saryagash</div>
						<div class="bl4_cip">
							<p>Жасалған жұмыс: Командамен бизнес упоковка жасалынды. Менің тарапымнан 11 баннерге жарнама тексті жасалып, таргетке жіберілді. 3 контекстік жарнама тексті жазылды. Сайт мәтіні 11 блокка бөлініп, әр қайсысына шипажайдың құндылығы мен сатылым әкелетін мәтін 2 тілде (қазақша, орысша) жазылды.</p>
							<p>Нәтижие: 1 айда 20 мың оқырман санынан 36 мыңға көтерілді. Шипажайларға келетін клиент саны бірден 3 есеге артты!</p>
						</div>
						<a href="https://instagram.com/emsu_saryagash" class="btn btn_cl">Қарау</a>
					</div>
				</div>
				<div class="bl4_ci">
					<div class="bl4_cil">
						<img class="lazy_img" data-src="/assets/img/case/epack1.jpg" alt="" />
					</div>
					<div class="bl4_cir">
						<div class="bl4_cirn">Пакет өндірісі - EPACK</div>
						<div class="bl4_cip">
							<p>Жасалған жұмыс: Командамен бизнес упоковка жасалынды. Сайт мәтіні 10 блокка бөлініп,  2 тілде жазылды. Таргет жарнама текстері әр аудиторияға бөлініп екі тілде 10  түрлі жасалынды және контекстік жарнама мәтіні жазылды.</p>
							<p>Нәтижие: Жарнама жіберілген күннен бастап пакет жасатуға тұтынушы саны 3 есеге өсті. Қазіргі таңда Шымкент қаласы бойынша 90% бренд түрлері пакеттерін тек EPACK компаниясы арқылы жасатады!</p>
						</div>
						<a href="https://instagram.com/epack.kz" class="btn btn_cl">Қарау</a>
					</div>
				</div>
				<div class="bl4_ci">
					<div class="bl4_cil">
						<img class="lazy_img" data-src="/assets/img/case/gprog1.jpg" alt="" />
					</div>
					<div class="bl4_cir">
						<div class="bl4_cirn">B2B қызметтер - G prog</div>
						<div class="bl4_cip">
							<p>Жасалған жұмыс: Сайт мәтіні 10 блокка бөлініп жасалынды. Таргет және контекстік жарнама әр аудиторияға бөлініп проблема шешу, құндылық көрсету арқылы 10 түрлі 2 тілде жазылды. Жарнама видеоларына сатылымдық сценарийлер жазылды.</p>
							<p>Нәтижие: Чек саны өсті, қазірге таңда G prog компаниясымен жұмыс істегісі келетіндер саны 2 есеге өскен!</p>
						</div>
						<a href="https://instagram.com/g.prog" class="btn btn_cl">Қарау</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="bl5">
		<div class="bl_c">
			<div class="bl5_c">
				<div class="bl5_cl">
					<div class="head_c">
						<h3>Жұмыс этаптары</h3>
					</div>
				</div>
				<div class="bl5_cr">
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>1</span>
							<div>Келісім шарт</div>
						</div>
						<p>Қажет болған жағдайда екі жаққа келісім шарт жасалады</p>
					</div>
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>2</span>
							<div>Кездесу</div>
						</div>
						<p>Онлайн немесе оффлайн кездесу ұйымдастырылады</p>
					</div>
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>3</span>
							<div>Бриф форма</div>
						</div>
						<p>Қажетті ақпаратты алу үшін бриф форма толтырасыз. Бұл тексттін сапалы шығуына әсер етеді</p>
					</div>
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>4</span>
							<div>Төлем</div>
						</div>
						<p>Алдын ала 50-100% төлем жасалған соң жұмыс басталады</p>
					</div>
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>5</span>
							<div>Аудитория анализ</div>
						</div>
						<p>Тапсырыс орындалмас бұрын сол нишаға маркетинг және нарықтық анализ жасалады</p>
					</div>
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>6</span>
							<div>Уақыт</div>
						</div>
						<p>Жұмыс уақыты белгіленіп, мерзімінінде тапсырылады</p>
					</div>
					<div class="bl5_cri">
						<div class="bl5_crin">
							<span>7</span>
							<div>Түзету</div>
						</div>
						<p>Клиенттің өтініші бойынша қажет болса түзетулерге 1 күн уақыт беріледі</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="bl6" id="contact">
		<div class="bl_c">
			<div class="bl6_c">
				<div class="bl6_cl">
					<div class="head_c">
						<h3>Менімен байланысу</h3>
					</div>
					<div class="bl6_clm">
						<div class="bl1_cbi">
							<span>Телефон, Whatsapp:</span>
							<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
						</div>
						<div class="bl1_cbi">
							<span>Әлеуметтук желі:</span>
							<div>
								<a href="https://instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-telegram-plane"></i></a>
								<a href="#"><i class="fab fa-behance"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="bl6_cr">
					<div class="form">
						<div class="form_im">
							<input type="text" class="form_im_txt name" placeholder="Есіміңіз ..">
							<i class="far fa-user form_icon"></i>
						</div>
						<div class="form_im">
							<input type="tel" class="form_im_txt phone fr_phone" placeholder="+7 (___) ___-__-__">
							<i class="far fa-phone-alt form_icon"></i>
						</div>
						<div class="form_im form_im_bn">
							<div class="btn orderSend">
								<span>Жіберу</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include "block/footer.php"; ?>