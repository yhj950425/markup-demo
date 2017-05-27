		var i = 0;
 		var $imgwidth=$(".lunboImg img").eq(0).width();
		$(function(){
			function change() {
				i++;
				if(i == 4) {
					i = 0;
				}
				var $index = $(".circle a").eq(i).index();
				$(".lunboImg").animate({
					"left": -$imgwidth * $index
				}, "slow");
					$(".circle  a").removeClass("sel");
				$(".circle  a").eq(i).addClass("sel");
			
			}
			var st=setInterval(change(),3000)
			$(".circle a").mouseover(function() {
				clearInterval(st);
				console.log($(this).index());
				$(".lunboImg").animate({
					"left": -$(this).index() * $(".lunboImg>img").width()
				}, "slow");
					$(".circle  a").removeClass("sel");
				$(".circle  a").eq($(this).index()).addClass("sel");
			})
			$(".circle a").mouseout(function() {
				st = setInterval(change, 3000);
			})
			//点
			$(".circle a").mouseover(function() {
				clearInterval(st);
			})
		})
		
		
		
//评论轮播
var comments = document.getElementsByClassName("commentStage")[0];
var lis = comments.getElementsByTagName("li")[0];
var lunTop = comments.offsetTop;
var lunIndex = 0;
var lunHeight = lis.offsetHeight;
var lunSpeed = 1;
var timers = null;
var timerss = null;
function liLun() {
	clearTimeout(timerss);
	timers = setInterval(function() {
		lunTop = comments.offsetTop;
		comments.style.top = lunTop - lunSpeed + "px";
		lunIndex++;
		if (lunIndex >= lunHeight) {
			lunIndex = 0;
			clearInterval(timers);
			timerss = setTimeout(function() {
				liLun();
				clearTimeout(timerss);
			},2000)
		}
		if (lunTop <= -914) {
			comments.style.top = 0;
		}	
	},3)
}
liLun();

var lock = false;
		var timersss = null;
		var timerssss = null;
		var speed = 1;
		var stage = document.getElementById("stage");
		var offset = stage.offsetLeft;
		var maxWidth = stage.offsetWidth;
		stage.innerHTML += stage.innerHTML;
		function move() {
			if(offset < -maxWidth/2) {
				offset = 0;
			}
			offset -= speed;
			stage.style.left = offset + 'px';
		}
		var timersss = setInterval(function() {
			move();
		}, 20)
		
		$("#footerMiddleBox").on("mouseover", function() {
			clearInterval(timersss);
		})
		
		$("#footerMiddleBox").on("mouseleave", function() {
			timersss = setInterval(function() {
				move();
			}, 20)
		})