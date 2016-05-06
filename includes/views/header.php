<div class="headerBar">
	<span class="headerLeft">
		<a href="/"><img src="/img/logo.png" id="headerLogo"/></a>
		<ul class="headerUL">
			<li class="headerLI"><a href="/" class="headerA" id="getFish">仓库</a></li>
			<li class="headerLI"><a href="/" class="headerA" id="fireFish">扭蛋</a></li>
<?php if($_SERVER['HTTP_HOST']=="localhost"||$_SERVER['HTTP_HOST']=="127.0.0.1") echo"			<li class=\"headerLI\"><a href=\"/pma\" class=\"headerA\" id=\"pma\">管理世界数据</a></li>"; ?>
		</ul>
	</span>
	<span class="headerRight">
		<a href="/auth/logout.php" class="headerA">登出</a>
	</span>
</div>