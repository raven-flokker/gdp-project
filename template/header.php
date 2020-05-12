<div class="signin-block d-flex justify-content-between align-items-center">
	<ul class="signin-block-lang d-flex">
		<?php
		if (isset($_SESSION['lang'])) {
		?>
			<li class="signin-block-lang__item">
				<a href="?en" class="d-flex align-items-center" role="button"><img src="https://d33wubrfki0l68.cloudfront.net/6d29e2a228ae8ed4e57579c15048217e7d193502/b2fdd/assets/images/flags/en-us.png" alt="English(US)" />Eng
				</a>
			</li>
			<li class="signin-block-lang__item">
				<a href="?ru" class="d-flex align-items-center" role="button"><img src="https://d33wubrfki0l68.cloudfront.net/156d180fa12de7beedc5e757340ed3a83fc5af77/8fca6/assets/images/flags/ru.png" alt="Русский(Рус)" />
					Rus
				</a>
			</li>
		<?php
		}
		?>
	</ul>
	<!-- /.signin-block-lang -->
	<div class="signin-block-reg">
		<form class="form-inline my-2 my-lg-0">
			<?php
			if (isset($_SESSION['auth'])) {
				if ($_SESSION['status'] == 'Admin') {
					echo '<a href="?admin">' . LANG_ADMINPANEL . '</a>';
				}
				echo LANG_HELLO . '  <a href="profile?id='.$_SESSION['id'].'">' . $_SESSION['login'] . ' </a>  <a href="logout.php"> ' . LANG_SINGOUT . '</a>';
			} else {
				echo '
					<a type="button" class="d-inline-block no-underline border border-gray-dark rounded-1 px-2 py-1" href="registration">' . LANG_REG . '</a>
					<a type="button" class="d-inline-block no-underline border border-gray-dark rounded-1 px-2 py-1" href="login">' . LANG_LOGIN . '</a>
					';
			}
			?>
			<!--			<a type="button" class="btn btn-link" href="registration">Registration</a>-->
			<!--			<a type="button" class="btn btn-link" href="login">Login</a>-->
		</form>
	</div>
	<!-- /.signin-block-reg -->
</div>
<!-- /.signin-block -->

<div class="header-block">
	<div class="header-content d-flex align-items-center">
		<div class="header-content-img">
			<img class="header-content-img__item" src="/assets/img/logo.png" alt="Логотип" />
		</div>
	</div>
	<!-- /.header-content -->
</div>
<!-- /.header-block -->


<div class="pt-1 pb-1d">
	<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link nav-link-item" href="information"><?= LANG_INFO ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-item" href="members"><?= LANG_MEMBERS ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-item" href="#"><?= LANG_PROGCONF ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-item" href="organ"><?= LANG_ORGCONF ?></a>
				</li>
								<li class="nav-item">
					<a class="nav-link nav-link-item" href="#"><?=LANG_UPD?></a>
				</li>
			</ul>
		</div>
	</nav>
</div>