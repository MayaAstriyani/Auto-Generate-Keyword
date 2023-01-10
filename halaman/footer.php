<!-- footer -->
<!-- jQuery -->
<script src="admin_assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="admin_assets/js/bootstrap.min.js"></script>
<script>
"use strict";

const bg=['bg.png','banana.png','diagonal.png','food.png'];

$(function(){
	$("body").css({backgroundImage: "url(admin_assets/img/"+bg[0]+")"});
	let x=1;
	/*
	setInterval(()=>{
		$("body").css({backgroundImage: "url(admin_assets/img/"+bg[x]+")"});
		x++;
		if(x==bg.length) x=0;
	}, 100)
	*/
});
</script>
</body>
</html>
