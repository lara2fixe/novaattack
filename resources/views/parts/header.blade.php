		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="{{ route('site.main.index') }}" ><span class="b1"><img class="tml" src="assets/images/lime_logo_006.png" alt="lime-time logo" /></span><span class="b2">t</span><span class="b2">i</span><span class="b2">m</span><span class="b2">e</span></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>

								<li class="first active scroll_btn"><a href="{{ route('site.main.index') }}#home" >Главная</a></li>
								<li class="scroll_btn"><a href="{{ route('site.main.index') }}#about" >Обо мне</a></li>
								<li class="scroll_btn"><a href="{{ route('site.main.index') }}#projects" >проекты</a></li>
								<li class="scroll_btn"><a href="{{ route('site.main.index') }}#team" >Команда</a></li>
								<li class="scroll_btn"><a href="{{ route('site.main.index') }}#news" >Новости</a></li>
								<li class="scroll_btn last"><a href="{{ route('site.main.index') }}#contacts" >Контакты</a></li>
								<li class="sub-menu">
									<a href="javascript:void(0);" >Еще...</a>
									<ul>
										<li><a href="{{ route('site.main.blog') }}" >Блог</a></li>
										<li><a href="{{ route('site.main.post') }}" >Пост</a></li>
										<li><a href="{{ route('site.main.folio') }}" >Портфолио</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->					