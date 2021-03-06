<?php 

	$arr = array(
		'function_urls' => array(
			'list' => array('http://192.168.8.58:831/'),
			'item' => array('http://192.168.8.58:832/'),
			'search' => array('http://192.168.8.58:833/'),
			'user' => array('http://192.168.8.58:840/'),
			'parser' => array(
				'http://parser.m.ttkvod.com/', 
				'http://parser.m.ttkvod.com:808/', 
				'http://parser.m.ttkvod.com:809/',
				'http://parser.m.ttkvod.com:810/'
			),
			'tv' => array('http://tv.m.ttkvod.com/')
		),
		'ios_cfg' => array(
			'v1.0' => array(
				'is_audit_mode' => 1//审核模式 1 ：是 0 ：否
			),
		),
		//1-电影 2-电视剧 3-动漫 4-综艺
		'movie_cate' => array(
			array(
				'type' => 1,
				'name' => '电影',
				'pic' => 'http://list.m.ttkvod.com/cate_pic/1.png',
				'top_tags' => '喜剧 恐怖 科幻',
				'tags' => array('全部','爱情','动画','动作','纪录片','惊悚','警匪','剧情','科幻','恐怖','伦理','奇幻','青春','微电影','文艺','武侠','喜剧','悬疑','音乐','灾难','战争'),
				'years' => array('全部','2016','2015','2014','2013','2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','其他'),
				'areas' => array('全部','内地','香港','台湾','韩国','日本','泰国','其他')
			),
			array(
				'type' => 2,
				'name' => '电视剧',
				'pic' => 'http://list.m.ttkvod.com/cate_pic/2.png',
				'top_tags' => '内地 香港 韩国 日本',
				'tags' => array('全部','青春','家庭','军旅','言情','古装','武侠','偶像','谍战','宫廷','喜剧','悬疑','历史','年代','都市','伦理','警匪','科幻','动作','农村','神话','战争','情景'),
				'years' => array('全部','2016','2015','2014','2013','2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','其他'),
				'areas' => array('全部','内地','香港','台湾','韩国','日本','泰国','其他')
			),
			array(
				'type' => 3,
				'name' => '动漫',
				'pic' => 'http://list.m.ttkvod.com/cate_pic/3.png',
				'top_tags' => '童话 益智 亲子',
				'tags' => array('全部','动作','亲子','热血','冒险','同人','原创','古代','未来','竞技','体育','搞笑','言情','校园','都市','魔幻','科幻','励志','剧情','悬疑','宠物','LOLI','益智','童话','真人','神话'),
				'years' => array('全部','2016','2015','2014','2013','2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','其他'),
				'areas' => array('全部','内地','台湾','韩国','日本','其他')
			),
			array(
				'type' => 4,
				'name' => '综艺',
				'pic' => 'http://list.m.ttkvod.com/cate_pic/4.png',
				'top_tags' => '真人秀 搞笑 旅游',
				'tags' => array('全部','真人秀','访谈','选秀','搞笑','脱口秀','美食','音乐','曲艺','体育','旅游','时尚','其他'),
				'years' => array('全部','2016','2015','2014','2013','2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','其他'),
				'areas' => array('全部','内地','香港','台湾','韩国','日本','泰国','欧美','其他')
				
			),
			array(
				'type' => 0,
				'name' => '直播',
				'pic' => 'http://list.m.ttkvod.com/cate_pic/5.png',
				'top_tags' => '湖南卫视[高清] 安徽卫视',
				'tags' => array(),
				'years' => array(),
				'areas' => array()
				
			)
		),
		/*
		'search_index' => array(
			'search_tag' => array(
				array('全部','爱情','动画','动作','纪录片','惊悚','警匪','剧情','科幻','恐怖','伦理','奇幻','青春','微电影','文艺','武侠','喜剧','悬疑','音乐','灾难','战争'),
				array('全部','青春','家庭','军旅','言情','古装','武侠','偶像','谍战','宫廷','喜剧','悬疑','历史','年代','都市','伦理','警匪','科幻','动作','农村','神话','战争','情景'),
				array('全部','动作','亲子','热血','冒险','同人','原创','古代','未来','竞技','体育','搞笑','言情','校园','都市','魔幻','科幻','励志','剧情','悬疑','宠物','LOLI','益智','童话','真人','神话'),
				array('全部','情感','真人秀','访谈','选秀','搞笑','脱口秀','交友','美食','音乐','曲艺','体育','求职','军事','旅游','财经','教育','生活','养生','时尚','其他')
			),
			'years' => array('全部','2012','2011','2010','2009','2008','2007','2006','2005','2004','2003','2002','2001','2000','其他'),
			'areas' => array('全部','内地','香港','台湾','韩国','日本','泰国','欧美','其他')
		),
		
		'movie_cate_pic' => array(
			array(
				'type' => 1,
				'pic' => 'http://list.m.ttkvod.com/cate_pic/1.png',
				'name' => '电影',
				'tag' => '喜剧 恐怖 科幻'
			),
			array(
				'type' => 2,
				'pic' => 'http://list.m.ttkvod.com/cate_pic/2.png',
				'name' => '电视剧',
				'tag' => '内地 香港 韩国 日本'
			),
			array(
				'type' => 3,
				'pic' => 'http://list.m.ttkvod.com/cate_pic/3.png',
				'name' => '动漫',
				'tag' => '新番 萝莉 搞笑 热血'
			),
			array(
				'type' => 4,
				'pic' => 'http://list.m.ttkvod.com/cate_pic/4.png',
				'name' => '综艺',
				'tag' => '真人 交友 选秀 访谈'
			),
			
			array(
				'type' => 0,
				'pic' => 'http://list.m.ttkvod.com/cate_pic/5.png',
				'name' => '直播',
				'tag' => ''//'CCTV 卫视 体育'
			)
		)*/
	);	

	file_put_contents('cfg.txt', json_encode($arr));	

?>

