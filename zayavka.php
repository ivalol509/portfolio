<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color: rgba(18, 15, 28, 1); background-size: 100vw auto; background-repeat: no-repeat;">
	<div class="container">
		<?php
			include 'header.php';
		?>
		<div class="row panel">
			<div class="col-8 mx-auto pt-5">
				<div class="row">
					<div class="col-12">
						<a href="index.php" class="text fs-20" style="color: rgba(255, 255, 255, 0.6);">Главная /
						</a><a href="" class="text-light text fs-20">Форма заявки</a>
					</div>
					<div class="col-12 mt-3">
						<h1 class="text-light" style="font-family: inter-b; font-size: 50px; line-height: 74px;">
							Отправить заявку</h1>
					</div>
					<div class="col-8">
						<p class="text fs-20" style="color: rgba(255, 255, 255, 0.6);">Отправьте нам запрос, указав
							краткую информацию (тип сайта, примерный бюджет, контактные данные). Мы проанализируем
							заявку и свяжемся с вами, как только подберем оптимальные решения для вашей ситуации.</p>
					</div>
				</div>
			</div>
			<div class="col-8 mx-auto">
				<div class="row">
					<div class="col-12">
						<p class="text fs-20 text-light">Контакты</p>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-6">
								<p class="text text-light text-m">Ваше имя</p>
								<input type="" name="" class="input w-100 text-light inp" style="height: 4.5vh;">
							</div>
							<div class="col-6">
								<p class="text text-light text-m">Номер телефона</p>
								<input type="" name="" class="input w-100 text-light inp" style="height: 4.5vh;">
							</div>
						</div>
					</div>
					<div class="col-12 mt-4">
						<div class="row">
							<div class="col-6">
								<p class="text text-light text-m">Название компании</p>
								<input type="" name="" class="input w-100 text-light inp" style="height: 4.5vh;">
							</div>
							<div class="col-6">
								<p class="text text-light text-m">Сфера бизнеса</p>
								<input type="" name="" class="input w-100 text-light inp" style="height: 4.5vh;">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mt-4">
						<p class="text fs-20 text-light">Задача</p>
					</div>
					<div class="col-12">
						<p class="text text-light text-m">Выберите услугу</p>
						<button class="text-center btn text-m text knopki mt-1">Разработка сайта</button>
						<button class="text-center btn text-m text knopki mt-1">Разработка лендинга</button>
						<button class="text-center btn text-m text knopki mt-1">Разработка интернет-магазина</button>
						<button class="text-center btn text-m text knopki mt-1">Айдентика и UX-дизайн</button>
						<button class="text-center btn text-m text knopki mt-1">Разработка корпоративного сайта</button>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-12 pt-2 mt-3">
								<p class="text text-light text-m">Прикрепить файл</p>
								<div class="input-group mb-3">
									<label class="input-group-text loh" for="inputGroupFile01">Выберите файл</label>
									<input type="file" class="form-control" multiple hidden id="inputGroupFile01">
									<label class="chert my-auto ms-3 text-white">Файл не выбран</label>
								</div>
							</div>
							<div class="col-12">
								<p class="text text-light text-m">Описание</p>
								<textarea class="input w-100 text-light inp ps-3" style="height: 15vh; font-size: 13px;"
									placeholder="Текст"></textarea>
							</div>
							<div class="col-12 d-flex" style="height: 5vh; align-items: center;">
							<input class="ds" id="checkbox" type="checkbox" value="">
							<a class="text text-light text-m ms-3">Соглашение на
									обработку персональных данных</a>
							</div>
						</div>
					</div>
					<div class="col-5">
						<button class="btn bg-light text-m text mt-2" id="lol" style="border-radius: 5px;display:none;">Отправить
							заявку</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Связь с нами -->
			<div class="row panel">
				<div class="col h-100">
					<div class="row h-100">
						<div class="col-8 my-auto mx-auto" style="height: 60vh">
							<div class="row">
								<div class="col-4">
									<h1 class="text-light"
										style="font-family: inter-b; font-size: 32px; line-height: 74px;">
										Связь с нами</h1>
									<p class="text-light text mt-3 fs-20 text-title" style="font-family: inter;">Адрес:
									</p>
									<p class="text-light text text-m mt-13 text-text">Якутск, просп. Ленина, 1, офис 512
									</p>
									<p class="text-light text mt-3 fs-20 text-title" style="font-family: inter;">
										Контакты:
									</p>
									<p class="text-light text text-m mt-13 text-text">+7 (984) 104-11-05</p>
									<p class="text-light text text-m mt-13 text-text">foxx_remix@mail.ru</p>
								</div>
								<div class="col">
									<div class="row ">
										<script type="text/javascript" charset="utf-8" async
											src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af637c358575144dfc0989adcc44726a1b87e1c1076866dc86c2c028c5a9e764f&amp;width=550&amp;height=400&amp;lang=ru_RU&amp;scroll=true">
										</script>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$("#inputGroupFile01").change(function () {
			filename = this.files;
			console.log(filename.length);
			$(".chert").text("Выбрано файлов: " + filename.length);
		});

		$('#checkbox').click(function(){
			if ($(this).is(':checked')){
				$('#lol').show(100);
			} else {
				$('#lol').hide(100);
			}
		});   
	</script>
</body>

</html>