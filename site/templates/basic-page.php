<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page->title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
	</head>
	<body>
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?= $page->id == 1254 ? 'Оставьте отзыв о нас' : $page->title; ?></h1>
						<?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
					</div>
					<div class="col-12">
						<?php if ($page->id == 1254): ?>
							<a target="_blank" class="mb-4 d-block" href="https://www.facebook.com/aero.team.moldova/reviews/?ref=page_internal">
								<div class="h3">
									Facebook
								</div>
							</a>
							<a target="_blank" class="mb-4 d-block" href="https://www.google.ru/search?q=aeroteam+md&newwindow=1&sxsrf=ALiCzsbeNNjs_pDfEahzb-xwqDpSehz6dw%3A1655231061333&source=hp&ei=VdKoYu3jEc-Pxc8PmKYj&iflsig=AJiK0e8AAAAAYqjgZfBSqpoDwT1s-hDtbnz13wsioTkQ&ved=0ahUKEwit4rebyK34AhXPR_EDHRjTCAAQ4dUDCAc&uact=5&oq=aeroteam+md&gs_lcp=Cgdnd3Mtd2l6EAMyCwguEIAEEMcBEK8BOgQIIxAnOhEILhCABBCxAxCDARDHARDRAzoRCC4QgAQQsQMQgwEQxwEQrwE6CwguEIAEEMcBENEDOhEILhCABBCxAxCDARDHARCjAjoLCAAQgAQQsQMQgwE6CAgAEIAEELEDOggIABCxAxCDAToFCAAQgAQ6DgguEIAEEMcBEK8BENQCOgUILhCABDoECAAQCjoECAAQHjoGCAAQHhAKOgYIABAeEBY6CAgAEB4QFhAKUABYiBFgjRJoAHAAeACAAa0BiAHpCpIBBDAuMTGYAQCgAQE&sclient=gws-wiz#lrd=0x40c96f4b01c28c15:0xa4088c67e7743f21,1">
								<div class="h3">
									Google
								</div>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
