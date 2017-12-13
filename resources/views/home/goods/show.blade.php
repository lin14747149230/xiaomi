<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<link rel="stylesheet" type="text/css" href="/css/show.css">
	<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div class="all">
	<!--导航标题开始-->
	<div class="nav-title">
		<div class="tit">
			<a href=''>首页</a>
			<span class="sep">/</span>
			<a href="">配件</a>
			<span class="sep">/</span>
			<a href="">手机支架</a>
			<span class="sep">/</span>
			<a href="">米家全景相机自拍杆</a>
		</div>
	</div>
	<!--导航标题结束-->
	<!--主体左面开始-->
	<div class="cons">
		<div class="row">
			<div class="cons-left">
				<div class="goods-small-pic">
					<ul id="goodsPicList">
			        	<li class="current">
			        		<img src="/images/pms_1506324190.01216564!60x60.jpg" alt="" />
			        	</li>
			            <li>
			            	<img src="/images/pms_1506324191.98549793!60x60.jpg" alt="" />
			           	</li>
			        </ul>
				</div>
				<div class="goods-big-pic" style="display:block">
			        <img class="img1" src="/images/pms_1506324190.01216564!482x482.jpg" alt="" />
			    </div>
    			<div class="goods-big-pic">
    				<img class="img2" src="/images/pms_1506324191.98549793!482x482.jpg" alt="" />
    			</div>
			</div>
			<div class="cons-right">
				<dl class="goods-info-box">
					<dt class="goods-info-head">
						<dl id="J_goodsInfoBlock">
							<dt id="goodsName" class="goods-name">米家全景相机自拍杆</dt>
							<dd class="goods-subtitle">
								<p> 一键拍照 / 支架270°旋转 / 一体设计 / 总长70cm</p>
							</dd>
							<dd class="goods-subtitle goods" style="display: block;">
								<span class="pro-price J_proPrice"> 2799元 
									<del>2999元</del>
								</span>
							</dd>
							<dd class="goods-subtitle goods" style="display: none;">
								<span class="pro-price J_proPrice"> 1999元 
									<del>2199元</del>
								</span>
							</dd>
						</dl>
					</dt>
					<!--主体开始-->
				<div class="J_main">
					<!--分仓地址开始-->
					<div class="address-wrap">
						
					</div>
					<!--产品版本开始-->
					<div class="list-wrap">
						<div class="pro">
							<div class="pro-title">选择版本</div>
							<ul class="ul-list">
								<li class="li-list active">
									<a>
										<span class="name">双镜头</span>
										<span class="price">2799元</span>
									</a>
								</li>
								<li class="li-list">
									<a>
										<span class="name">标准变焦</span>
										<span class="price">1999元 </span>
									</a>
								</li>
							</ul>	
						</div>
						<div class="pro">
							<div class="pro-title">选择颜色</div>
							<ul class="ul-list">
								<li class="li-list active">
									<a>
										<img class="done" src="/images/84195449-cea8-421b-8790-056e6276b931.jpg" alt="">黑色
									</a>
								</li>
							</ul>	
						</div>
					</div>
					<!--产品版本结束-->
					<!--已选择的产品开始-->
					<div class="pro-list" style="display: block;">
						<ul>
							<li>
								小蚁微单相机M1双镜头套机 黑色  
								<del>2999元</del>
								<span>2799元</span>
							</li>
							<li class="totlePrice">总计  ：2799元</li>
						</ul>
					</div>
					<div class="pro-list" style="display: none;">
						<ul>
							<li>
								小蚁微单相机M1标准变焦套机 暴风黑   
								<del>1999元</del>
								<span>2199元</span>
							</li>
							<li class="totlePrice">总计  ：1999元</li>
						</ul>
					</div>

					<!--已选择的产品结束-->
					<!--购买按钮开始-->
					<ul class="btn-wrap clearfix">  
					    <li> 
					    	<a href="" class="btn btn-primary  btn-biglarge" data-type="common" data-isbigtap="false" data-name="加入购物车">加入购物车</a> 
					   	</li>  
					</ul>
					<!--购买按钮结束-->
				</div>
				</dl>
			</div>
		</div>
	</div>
	<!--主体右面结束-->
</div>	
</body>
</html>
<script>
//侧边选项卡
	$(function(){
		$("li").click(function(){
			$(this).addClass("current").siblings("li").removeClass("current");
			$(this).addClass("active").siblings("li").removeClass("active");
			var this_li = $(this).position()
			$("p").animate({
				left:this_li.left,
				},60);
			var i = $(this).index()
			$(".goods-big-pic").eq(i).css('display','block').siblings(".goods-big-pic").css('display','none');
			$(".goods").eq(i).css('display','block').siblings(".goods").css('display','none');

			
		});

		
	});

$(function(){
	//滑到li上实现如下功能：
	$("li").click(function(){
		//当前导航背景颜色、字体颜色处于选中状态，同时其他导航处于未选中颜色
		$(this).addClass("moren").siblings("li").removeClass("moren");
		
		//获取当前导航的位置，
		var this_li = $(this).position()
		//获取当前导航的索引
		var i = $(this).index()
		//根据指定的索引匹配对应的div盒子
		$(".pro-list").eq(i).css('display','block').siblings(".pro-list").css('display','none')
		
	});
	
});       

</script>