<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>GeekJee个人站</title>
	<style>
		.main{text-align: center}
		.main h2{color: #14a5c9}
		.botCenter{width:100%; height:35px; line-height:35px; background:#ccc;
			position:fixed; bottom:0px; left:0px; font-size:14px; color:#000;
			text-align:center;}
		body{background-color: #cfe8db}
	</style>
<!--	百度统计代码-->
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?1a11ae47cc86547d6af606317e70666c";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>
</head>
<body><br>
<div class="main">
	<h2>感谢您的光临，该网址暂无前台页面开发……</h2>
<!--	<br><h3>Jee &nbsp;--><?php //echo date('Y-m-d H:i:s',time());?><!--</h3>-->
	<br><h3>Jee &nbsp;<span id="showtimes"></span></h3>
	<script language="javascript">show_cur_times();</script>
	<script type="text/javascript" language="javascript">
		function show_cur_times(){
//获取当前日期
			var date_time = new Date();
			//定义星期
			var week;
			//switch判断
			switch (date_time.getDay()){
				case 1: week="Mon"; break;
				case 2: week="Tues"; break;
				case 3: week="Wed"; break;
				case 4: week="Thur"; break;
				case 5: week="Fri"; break;
				case 6: week="Sat"; break;
				default:week="Sun"; break;
			}

			//年
			var year = date_time.getFullYear();
			//判断小于10，前面补0
			if(year<10){
				year="0"+year;
			}

			//月
			var month = date_time.getMonth()+1;
			//判断小于10，前面补0
			if(month<10){
				month="0"+month;
			}

			//日
			var day = date_time.getDate();
			//判断小于10，前面补0
			if(day<10){
				day="0"+day;
			}

			//时
			var hours =date_time.getHours();
			//判断小于10，前面补0
			if(hours<10){
				hours="0"+hours;
			}

			//分
			var minutes =date_time.getMinutes();
			//判断小于10，前面补0
			if(minutes<10){
				minutes="0"+minutes;
			}

			//秒
			var seconds=date_time.getSeconds();
			//判断小于10，前面补0
			if(seconds<10){
				seconds="0"+seconds;
			}

			//拼接年月日时分秒
			var date_str = year+"-"+month+"-"+day+" "+hours+":"+minutes+":"+seconds+" "+week;

			//显示在id为showtimes的容器里
			document.getElementById("showtimes").innerHTML= date_str;
		}

		//设置1秒调用一次show_cur_times函数
		setInterval("show_cur_times()",100);
	</script>
</div>
<p class="botCenter">沪ICP备 16048109号</p>
</body>
</html>
