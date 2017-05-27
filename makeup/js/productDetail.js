var maxImg = document.querySelectorAll(".content_left img")[1];
var divs = document.querySelectorAll(".zoom_img>div");
var div = document.querySelector('.zoom_img');
var minWrap = divs[0];
var maxWrap = divs[1];
var slider = divs[2];
var space = 10;

//设置minWrap和maxImg宽高
minWrap.style.width=div.clientWidth+'px';
minWrap.style.height=div.clientHeight+'px';
maxWrap.style.width=div.clientWidth+'px';
maxWrap.style.height=div.clientHeight+'px';
//求出slider的宽高
slider.style.width=minWrap.clientWidth*minWrap.clientWidth/maxImg.width+'px';
slider.style.height=minWrap.clientHeight*minWrap.clientHeight/maxImg.height+'px';

div.onmousemove = function(e) {
	//IE兼容
	var ev = e || event;
	slider.style.display = "block";
	maxWrap.style.display = "block";
	maxWrap.style.left = minWrap.offsetWidth + space + 'px';
	//让鼠标显示在中间位置
	var x = ev.clientX - slider.offsetWidth / 2 - getLT(div).x;
	var y = ev.clientY - slider.offsetHeight / 2 - getLT(div).y;

	//获取任意元素的Left/Top值  
	function getLT(obj) {
		var o = {};
		var left = 0;
		var top = 0;
		while(obj != window.document.body && obj != null) {
			left += obj.offsetLeft + obj.clientLeft;
			top += obj.offsetTop + obj.clientTop;
			obj = obj.offsetParent
		}
		o.x = left;
		o.y = top;
		return o;
	}
	//slider可活动最大宽高
	var maxWidth = minWrap.clientWidth - slider.offsetWidth;
	var maxHeight = minWrap.clientHeight - slider.offsetHeight;

	//禁止slider出边界线
	(x < 0) && (x = 0);
	(y < 0) && (y = 0);
	(y > maxHeight) && (y = maxHeight);
	(x > maxWidth) && (x = maxWidth);

	//给slider赋上鼠标的x,y坐标值
	slider.style.left = x + "px";
	slider.style.top = y + "px";

	//控制大图移动
	//小图偏移、小图总宽高==大图偏移、大图总宽高
	var scaleX = slider.offsetLeft / minWrap.clientWidth;
	var scaleY = slider.offsetTop / minWrap.clientHeight;
	
	//利用元素定位偏移来实现
	maxImg.style.left = -scaleX * maxImg.offsetWidth + "px";
	maxImg.style.top = -scaleY * maxImg.offsetHeight + "px";
}

div.onmouseleave = function() {
	slider.style.display = "none";
	maxWrap.style.display = "none";
}