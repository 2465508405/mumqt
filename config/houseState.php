<?php
return [
	/**
	*	商铺
	*/

	'shop' => [
		// 物业类别
		'houseType2' => [
							'101' => '住宅底商',
							'102' => '商业街商铺',
							'103' => '临街商铺',
							'104' => '写字楼底商',
							'105' => '购物中心商铺',
							'106' => '其他',
						],
		// 商铺状态
		'stateShop' => [
							'0' => '营业中', 
							'1' => '闲置中', 
							'2' => '新铺',
					   ],
		// 目标业务
		'trade' => [
						'1' => '百货超市',
						'2' => '酒店宾馆',
						'3' => '家居建材',
						'4' => '服饰鞋包',
						'5' => '生活服务',
						'6' => '美容美发',
						'7' => '餐饮美食',
						'8' => '休闲娱乐',
						'9' => '其他',
					],
		// 配套设施
		'equipment' => [
			'1' => '水/电',
			'2' => '煤/燃气',
			'3' => '电话/网络',
			'4' => '独立车位',
			'5' => '客梯',
			'6' => '货梯',
			'7' => '空调',
		],
	],

	/**
	*	写字楼
	*/

	'office' => [
		// 物业类别  (0)
		'houseType2' => [
							'201' => '纯写字楼',
							'203' => '商业综合体楼',
							'204' => '酒店写字楼',
							'303' => '商住楼',
						],
		// 写字楼级别  (1)
		'officeLevel' => [
							'0' => '甲',
							'1' => '乙', 
							'2' => '丙', 
							'3' => '其他',
						],
		// 房屋标签
		'tag' => ['繁华地段','交通便利','金牌物业','品牌地产','视野开阔','紧邻地铁','企业独栋','网络地板','遗留装修','可注册','赠免租期','免中介费'],
	],

	/**
	*	住宅
	*/
	'Zz' =>[
		// 产权性质  
		'ownership' => [
							'0' => '无',
							'1' => '个人产权',
							'2' => '使用权',
							'3' => '经济适用房',
							'4' => '单位产权',
							'5' => '央产',
							'6' => '军产',
							'7' => '其它',
							'8' => '限价房',

						],

		// 物业类别  
		'houseType2' => [
							'301' => '普宅',
							'302' => '经济适用房',
							'303' => '商住公寓楼',
							'304' => '别墅',
							'305' => '豪宅',
						],
		// 支付方式   
		'paymentType' => [
							'1' => '押一付三',
							'2' => '押一付二',
							'3' => '押一付一',
							'4' => '押二付一',
							'5' => '押二付二',
							'6' => '押二付三',
							'7' => '押三付一',
							'8' => '押三付三',
							'9' => '半年付',
							'10' => '年付',
							'11' => '面议',
						],

		// 建筑结构  (3)
		'buildingStructure' => [
									'1' => '跃层',
									'2' => '开间',
									'3' => '错层',
									'4' => '复式',
									'5' => '平层',
									'6' => '挑高',
								],

		// 建筑类别   (4)
		'buildingType' =>  [
								'1' => '塔楼',
								'2' => '砖混',
								'3' => '钢混',
								'4' => '板楼',
								'5' => '砖楼',
								'6' => '平房',
								'7' => '塔板结合',
								'8' => '独栋',
								'9' => '双拼',
								'10' => '联排',
								'11' => '叠加',
							],
		// 租赁方式   (5)
		'rentType' => [
							'1' => '整租',
							'2' => '合租',
//							'3' => '短租',
//							'4' => '日租',
						],

		// 周边设施  (6)
		'equipment' => [
							'1' => '集中供暖',
							'2' => '自采暖',
							'3' => '煤气/天然气',
							'4' => '车位/车库',
							'5' => '电梯',
							'6' => '储藏室/地下室',
							'7' => '花园/小院',
							'8' => '阳台/露台',
							'9' => '阁楼',
						],

		// 入住时间   (8)
		'checkInTime' => [
							'1' => '随时入住',
							'2' => '三天以内',
							'3' => '一周以内',
							'4' => '半个月以内',
							'5' => '一个月以内',
							'6' => '二个月以内',
							'7' => '半年以内',
						],

		// 房屋标签
		'tag' => ['投资房','繁华地段','交通便利','金牌物业','品牌地产','环境优美','学区房','地铁房','低密度','安全性高','素质住户','品质小区'],

	],

	/** 
	*   主物业类型  1 商铺   2 写字楼   3  住宅 
	*/
	'houseType1' => [
						'1' => '1',
						'2' => '2',
						'3' => '3',
					],
	// 装修情况
	'fitment' => [
		'0' => '无',
		'1' => '毛坯',
		'2' => '简装',
		'3' => '中装修',
		'4' => '精装修',
		'5' => '豪华装修',
	],
	/** 
	*   出租房源的配套设施
	*/
	'equipment1' => [
		'1' => '拎包入住',
		'2' => '家电齐全',
		'3' => '可上网',
		'4' => '可做饭',
		'5' => '可洗澡',
		'6' => '空调房',
		'7' => '可看电视',
		'8' => '有暖气',
		'9' => '车位',
	],
	/**
	 * 朝向
	 */
	'faceTo' => [
		'1' => '东',
		'2' => '南',
		'3' => '西',
		'4' => '北',
		'5' => '南北',
		'6' => '东南',
		'7' => '西南',
		'8' => '东北',
		'9' => '西北',
		'10' => '东西'
	],

	/**
	 *	出租
	 */

	'rent' => [
		// 租金单位
		'priceUnit' => [
			'1' => '元/月',
			'2' => '元/天/平米',
			'3' => '元/月/平米',
			'4' => '元/季/平米',
			'5' => '元/年/平米',

		],
	],
];