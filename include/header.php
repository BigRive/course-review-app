<?php include "config/db.php"; ?>
<!DOCTYPE html>
<html lang = "zh_cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.css" rel="stylesheet">
		<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.js"></script>
		<title>课程评价</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">                     <!-- 顶部导航栏 -->
			<div class="container">
				<a class="navbar-brand" href="#">课程评价中心</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="�л�����">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link" href="/课程评价APP/index.php">首页</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/课程评价APP/reviews.php">评价</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/课程评价APP/about.php">关于我们</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main>                                                                               <!-- 主体部分 -->
			<div class="container d-flex flex-column align-items-center">