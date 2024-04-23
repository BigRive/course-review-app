<?php include "include/header.php"; ?>
<?php
	$sql = "select * from review";                                    //从数据库获取真实数据
	$result = mysqli_query($conn, $sql);
	$reviews = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<?php if(empty($reviews)): ?>                                         <!-- 添加空数组检查逻辑 -->
	<p class="lead mt3">目前没有课程评价！</p>
<?php endif; ?>
<h2>课程评价</h2>
<?php foreach($reviews as $review): ?>                                <!-- 动态显示内容 -->
	<div class="card my-3" style="width: 18rem;">
		<div class="card-title text-center mt-2">
			<?php echo $review["course_name"]; ?>
		</div>
		<div class="card-body text-center">
			"<?php echo $review["content"]; ?>"
			<div class="text-secondary mt-2">
				来自 <?php echo $review["name"]; ?>
			</div>
			<div class="text-secondary mt-2">
				<?php echo $review["date"]; ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<?php include "include/footer.php"; ?>