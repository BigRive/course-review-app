<?php include "include/header.php"; ?>
<?php                                                                                       //用于初始化表单数据和错误消息的变量
	$name = $email = $courseName = $content = "";
	$nameError = $emailError = $courseNameError = $contentError = "";
	if(isset($_POST["submit"])){                                                            //处理“提交”按钮点击事件
        if(empty($_POST["name"])){                                                          //如果姓名字段为空,则输出提示信息
			$nameError = "姓名为必填项！";
        }
		else{
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);   //把用户输入的姓名值安全存储到$name变量中，防止XSS攻击
        }
		if (empty($_POST["email"])) {                                                       //如果邮箱字段为空,则输出提示信息
			$emailError = "邮箱为必填项！";
		} 
		else {
			$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS); //把用户输入的邮箱值安全存储到$email变量中，防止XSS攻击
		}
		if (empty($_POST["course"])) {                                                      //如果课程名称字段为空,则输出提示信息
			$courseNameError = "课程名称为必填项！";
		} 
		else {
			$courseName = filter_input(INPUT_POST, "course", FILTER_SANITIZE_FULL_SPECIAL_CHARS);//把用户输入的课程名称值安全存储到$course变量中，防止XSS攻击
		}
		if (empty($_POST["body"])) {                                                        //如果评价内容字段为空,则输出提示信息
		    $contentError = "评价内容为必填项！";
		} 
		else {
			$content = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);//把用户输入的评价内容值安全存储到$body变量中，防止XSS攻击
		}
    }
?>
				<img src="./images/logo.png" class="w-25 mb-3" alt=""/>
				<h2>课程评价</h2>
				<p class="lead text-center">为你所上的课程留下评价</p>
				<form class="mt-4 w-75" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">                                           <!-- 用表单记录留言信息 -->
					<div class="mb-3">
						<label for="name" class="form-label">姓名：</label>
						<input type="text" class="form-control <?php echo $nameError ? "is-invalid" : null; ?>" id="name" name="name" placeholder="请输入姓名"/>
						<div class="invalid-feedback">
							<?php echo $nameError; ?>
						</div>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">邮箱：</label>
						<input type="email" class="form-control <?php echo $emailError ? "is-invalid" : null; ?>" id="email" name="email" placeholder="请输入邮箱"/>
						<div class="invalid-feedback">
							<?php echo $emailError; ?>
						</div>
					</div>
					<div class="mb-3">
						<label for="course" class="form-label">课程名称：</label>
						<input type="text" class="form-control <?php echo $courseNameError ? "is-invalid" : null; ?>" id="course" name="course" placeholder="请输入课程名称"/>
						<div class="invalid-feedback">
							<?php echo $courseNameError; ?>
						</div>
					</div>
					<div class="mb-3">
						<label for="body" class="form-label">评价内容：</label>
						<textarea class="form-control <?php echo $contentError ? "is-invalid" : null; ?>" id="body" name="body" rows="4" placeholder="请输入评价内容"></textarea>
						<div class="invalid-feedback">
							<?php echo $contentError; ?>
						</div>
					</div>
					<div class="mb-3">
						<input type="submit" name="submit" value="提交评价" class="btn btn-dark w-100"/>
					</div>
				</form>
<?php                                                                                       //将数据提交到数据库表中
	if (empty($nameError) && empty($emailError) && empty($contentError) && empty($courseNameError)) {    //如果所有错误提示变量都为空，则验证通过
		$sql = "insert into review (name, email, course_name, content) values('$name', '$email', '$courseName', '$content')";
		if(mysqli_query($conn, $sql )) {                                                    //成功
			header("Location: reviews.php");                                                //重定向到reviews.php页面
        }
		else{                                                                               //失败
			echo "提交失败" . mysqli_error($conn);                                           //打印报错信息
        }
	}
?>
<?php include "include/footer.php"; ?>