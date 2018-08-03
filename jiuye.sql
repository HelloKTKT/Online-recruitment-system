# Host: localhost  (Version: 5.5.53)
# Date: 2018-04-12 16:38:18
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `aid` varchar(30) NOT NULL DEFAULT '',
  `acode` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

#
# Structure for table "classroom"
#

DROP TABLE IF EXISTS `classroom`;
CREATE TABLE `classroom` (
  `classid` int(2) NOT NULL AUTO_INCREMENT,
  `classtitle` varchar(50) DEFAULT NULL,
  `classvideos` text,
  `classtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "classroom"
#

/*!40000 ALTER TABLE `classroom` DISABLE KEYS */;
INSERT INTO `classroom` VALUES (1,'超强面试技巧传授：让人一秒记住你的绝招','videos/超强面试技巧传授：让人一秒记住你的绝招.mp4','2018-04-03 22:31:35'),(2,'面试的小技巧，千万别传出去','videos/面试的小技巧，千万别传出去.mp4','2018-04-03 22:31:37');
/*!40000 ALTER TABLE `classroom` ENABLE KEYS */;

#
# Structure for table "com"
#

DROP TABLE IF EXISTS `com`;
CREATE TABLE `com` (
  `cid` varchar(30) NOT NULL DEFAULT '0',
  `cname` varchar(30) DEFAULT NULL,
  `ccode` varchar(30) DEFAULT NULL,
  `ctx` mediumblob,
  `cintro` text,
  `cjs` text,
  `ccity` varchar(60) DEFAULT NULL,
  `cfield` varchar(60) DEFAULT NULL,
  `csize` varchar(10) DEFAULT NULL,
  `chome` varchar(30) DEFAULT NULL,
  `cnumber` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "com"
#

/*!40000 ALTER TABLE `com` DISABLE KEYS */;
INSERT INTO `com` VALUES ('0','123','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('123111123','123123','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('qe','qe','qe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('qqq','mike','qqq',NULL,NULL,NULL,NULL,'社交',NULL,NULL,NULL),('www','百度','www',X'70686F746F2F636F6D74782F7777772E6A7067','百度一下你就知道','ok','12312','移动互联网','2000人以上','www.baidu.com','12321312312');
/*!40000 ALTER TABLE `com` ENABLE KEYS */;

#
# Structure for table "expect"
#

DROP TABLE IF EXISTS `expect`;
CREATE TABLE `expect` (
  `id` varchar(30) NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `wage` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "expect"
#

/*!40000 ALTER TABLE `expect` DISABLE KEYS */;
INSERT INTO `expect` VALUES ('12345678910','张三','上海','全职','程序测试员','25k-50k'),('cb','陈斌','广州','兼职','搬砖','50k以上');
/*!40000 ALTER TABLE `expect` ENABLE KEYS */;

#
# Structure for table "guide"
#

DROP TABLE IF EXISTS `guide`;
CREATE TABLE `guide` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gtitle` varchar(30) NOT NULL,
  `gtext` longtext,
  `gtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "guide"
#

/*!40000 ALTER TABLE `guide` DISABLE KEYS */;
INSERT INTO `guide` VALUES (1,'简历模板用错了，你被减分自己还不知道','北京信息科技大学市场营销专业的应届生彭彭来应聘我团队的产品运营实习生，他是从实习僧网站投递的简历，应用了网站的格式模板，简历内容很简单。\r\n\r\n面试时，彭彭主动对我提出，“您手里那版简历内容比较少，我更新了一版，请您看这个。”\r\n\r\n我对彭彭这一做法很满意，心说，“带着简历来，还是更新过的，不错，不错。”\r\n\r\n但是，一接过简历，我就有点傻眼了，这版简历虽然是一页纸，虽然看上去挺美观，但却问题多多：\r\n\r\n问题1：模块设置不合理，重点不突出。\r\n\r\n比如，语言能力无需单独做一个模块（师范类、播音类岗位除外），更无需排到项目经验前面。\r\n\r\n问题2：部分模块信息冗余，不便于HR一眼查看核心信息。\r\n\r\n比如，HR一眼看过去，不容易找到彭彭的毕业学校和专业，得仔细查看才能看清楚。\r\n\r\n问题3：工作经历部门缺乏详细展示\r\n\r\n工作经历部分占用的篇幅不足简历的十分之一，对所做的事项没有详细说明，没有支撑证明。\r\n\r\n而且，这份简历看起来也似曾相似，看着很面熟。对，这就是网上一个简历模板，彭彭就是根据这个简历模板来撰写的简历。\r\n\r\n从彭彭的经历，我们引出话题多说几句--求职者用模板写简历，这本身无可厚非。但使用简历模板时一定要注意2个问题：\r\n\r\n第一，不要应用过于花哨的简历模板。\r\n\r\n很多求职者都喜欢应用简历模板，希望自己的简历可以在一堆白纸黑字的普通简历中脱颖而出。但有些求职者却没有做到“适度”，他们会使用过于花哨的简历模板，这种情况不但不能博得HR的好感，还可能直接犯下2个错误：\r\n\r\nA、模板花哨，颜色Colourful，有时会让HR觉得不够庄重，华而不实\r\n\r\nB、模板复杂，会导致核心信息不够一目了然，不便于HR快速了解求职者\r\n\r\n因此，我们不建议求职者应用过于花哨的简历模板，选用模板的原则应该是：美观，便于HR查找核心关键词，形式为内容服务。\r\n\r\n第二，不要照搬模板，原封不动地填写。\r\n\r\n目前大家在市面上能找到的简历模板主要以美观的格式为主，模板本身的设置和排序并不一定完全合理。\r\n\r\n所以，求职者应用简历模板后，不要完全按照模板的模块和内容去填充，要根据自己的经历经验和简历重点，重新进行模块的布局和优化，不要完全只做填空题。\r\n\r\n回到彭彭这个案例里，他直接套用了简历模板，做了填空题，导致简历重点不突出，经历与应聘岗位不匹配。\r\n\r\n比如说，他工作经历部分流水账般地列了10项具体工作，却没有说明每项工作的收获和成绩，也没有把经历和应聘岗位结合起来。\r\n\r\n我建议彭彭的简历做如下的修改：\r\n\r\n1、更换简历模板\r\n\r\n建议选一个时下流行的左右分栏式简历模板，核心信息一目了然。比如，像图片上的这种。\r\n\r\n2、调整简历模块顺序\r\n\r\n调整为个人信息、求职意向、工作经历、项目经验、教育背景、专业技能、自我评价。\r\n\r\n3、重新包装工作经验\r\n\r\nA、按照倒叙顺序列出几项兼职工作。\r\n\r\nB、每份工作不仅要说明做了什么，还要用数字说明成绩。\r\n\r\nC、工作经历要做到重点突出，适当取舍。与应聘岗位相关的经历，可以重点包装；与应聘岗位无关的经历，可以少写或者不写。\r\n\r\n4、重新包装项目经验\r\n\r\n可以挑选工作经历中含金量比较高的一两个项目做重点突出，介绍项目内容、个人在项目中的角色、项目开展过程、项目结果等，可以应用star法则来介绍项目。\r\n\r\nSTAR法则是Situation Task Action Result的缩写，具体含义是：\r\n\r\nSituation：当时的背景情况是什么？\r\n\r\nTask：当时的目标任务是什么？\r\n\r\nAction：针对当时的情况，你采用了什么方法？\r\n\r\nResult：结果怎样，你学习到了什么。\r\n\r\n作者：我是知识的搬运工\r\n\r\n公众号：面试求职那些事（woizhishi）\r\n\r\n來源：简书\r\n\r\n著作权归作者所有。','2018-03-23 00:00:00'),(2,'求职大学生防骗指南','暑假已经过了一半，还有没找到实习的小伙伴吗？\r\n\r\n小编编在这里提醒大家，找工作的途中存在着许多鱼目混珠的消息，从而导致很多人被骗。\r\n\r\n大家求职过程中，一定要擦亮眼睛，谨防求职陷阱！\r\n\r\n我们潜意识里都认为“受过教育的大学生”是不会轻易被骗的，\r\n\r\n但你们知道吗？求职大学生中，遇到传销、诈骗公司的大有人在！\r\n\r\n\r\n\r\n案例一：\r\n\r\n2016年，因为老乡介绍的一个“两三年就可成为千万富翁”的“投资项目”，90后大学生小姜放弃了原本在重庆经营的小生意，\r\n\r\n还搭上了15万积蓄，进了一个名为“1040连锁经营”的传销组织。\r\n\r\n为掩人耳目，该传销组织并未限制传销人员的人身自由，也不要求上缴手机，小姜并未意识自己进了传销；\r\n\r\n直至2016年11月，警方查封此处窝点，小姜才幡然醒悟！\r\n\r\n案例二：\r\n\r\n2016年11月末，在北京工作的郑涛突然接到妈妈要来北京旅游的通知。\r\n\r\n令他没想到的是，郑妈妈并不是来旅游的，而是来参加一个“民间互动理财”的项目。\r\n\r\n此项目需缴纳49800的入门费，就能在无风险环境中得到百分百的回报。\r\n\r\n郑涛马上意识到这是一个新型的传销组织，当机立断往河北三河区工商局进行了举报。\r\n\r\n经核实，这家“民间互助理财”公司被确认为传销组织。\r\n\r\n\r\n通过这些大量的新闻报道及真实案例，我们惊讶地发现：被骗入传销组织的，竟大多是“受过教育的年轻人”。\r\n\r\n他们往往社会阅历浅，急于求职，对招聘方缺乏警惕，无法识破骗局，最终深陷传销组织。\r\n\r\n因此，我们大学生必须时刻提醒自己：传销组织离我们并不远，它就在我们身边。\r\n\r\n为此，小编整理了一份求职陷阱套路揭秘，希望求职大学生远离陷阱！\r\n\r\n \r\n\r\n求职防骗技巧：\r\n\r\n一、简历投递\r\n\r\n1、公司注册和信用查询\r\n\r\n公司信息摸底，全国企业信用信息系统（qyxy.baic.gov.cn），当面试公司不知名，有必要先摸个底：\r\n\r\n公司全称、办公地点、网址、座机、手机。网上搜索“公司名 骗”，“电话 骗”，“地址 骗”。\r\n\r\n2、联系方式与地址\r\n\r\n公司主要联系方式是QQ和微信，多数有问题；\r\n\r\n如果不知名小公司公司在官方招聘信息中写的电话是A、地址是B，但真正跟你联系时，用C电话、D地址可能\r\n\r\n有风险；\r\n\r\n公司在小区居民楼内的，慎重；\r\n\r\n公司不使用固定电话的，没有独立域名官方网站的，奇怪口音的HR，作为长期稳定运营的正轨公司这都是必要条件；\r\n\r\n招聘单位及工作地都是本地，联系人的手机归属地却是外地的不可轻信；\r\n\r\n3、所有中介联系交钱提供面试机会的都是骗子。\r\n\r\n4、工资福利特别好，门槛却很低的抱有怀疑态度。\r\n\r\n5、可以通过百度地图全景模式提前看一下公司地址和面试地址，有疑虑直接拒绝可以节省不少路费。\r\n\r\n6、招聘单位只有手机单一联系方式的。\r\n\r\n7、招聘信息写的热血澎湃，对学历，工作技能无要求，只要求热情之类的基本都是骗子。\r\n\r\n二、接到电话\r\n\r\n1、反查公司注册和信用信息，反查拨打过来的电话号码。\r\n\r\n2、决定是否去面试前查询，“地名 求职 骗局”。\r\n\r\n3、跨地区面试被询问是否认识当地人的，主动到车站接人的，正轨公司一般都不会主动派人来车站接，防止误入传销团伙。\r\n\r\n解决：一般都回答有同学和亲属是当地人，到目的地会先去亲人家落脚后再去面试，看看公司反映。\r\n\r\n4、咨询后约定面试地点在小区内，郊区等非公司地址，或者约定在茶楼，来车接等行为最好不要去。\r\n\r\n5、遇到不知名小公司面试，出发前告知家人或亲朋好友公司详细地址和电话，到地点后发送地址保持开机。\r\n\r\n6、通知那种xx路，××站下车不给具体地址的有人接的偏远公司慎重考虑。\r\n\r\n7、直接发短信的联系面试的直接pass。\r\n\r\n三、前往面试\r\n\r\n1、不知名的公司，面试后要求立即去指定地点体检的，体检费要求自理的公司。\r\n\r\n解决：不立即去体检，先离开，正常情况会有HR联系询问原因，没有消息的多数是骗子公司。\r\n\r\n2、以笔试为理由收取费用（现金，转账），手机，统一收集个人物品的中小公司，有一定风险会出现转走支付宝，微信钱包钱财，跑路情况。\r\n\r\n解决：社会不像大学，考试没有任何理由要求收集个人物品。马上离开。\r\n\r\n3、要求带现金的，询问银行卡号的。\r\n\r\n4、到公司地址前可以在附近转转和保安或者卖货的打听一下。\r\n\r\n5、写字楼墙上不挂牌的，公司没有LOGO的。\r\n\r\n6、面试时不问你专业问题，而一直介绍自己公司/产品有多牛逼然后让你回去再写方案的，买产品，骗文案。\r\n\r\n7、吹嘘公司个人案例一夜暴富的，超出正常逻辑范围的。\r\n\r\n8、搞培训的公司假借招聘平台推销报名他们的培训班，保证推荐工作，每月通过工资还培训费，一般和IT有关，套路是面试是否定你的技术，然后推销他们的培训。\r\n\r\n9、面试与签合同时不要压身份证、毕业证等等各种证件，只提供复印件。\r\n\r\n10、在同一地区招聘公司地址和面试地址不一致，座机电话与公司官网电话号段不一致的不建议去。\r\n\r\n四、入职培训\r\n\r\n1、不知名小公司，转正期，试用期收取定金的，服装费，押金等一律直接走人，即使说可退还也不行。\r\n\r\n2、以实习期间公司不给办公司卡为由的提供个人身份证与银行卡的做预留的。\r\n\r\n3、以要银行卡凭单作为工资卡的行为请直接拒绝。\r\n\r\n4、 中介或公司要求手持身份证+协议拍照的请撕了合同直接走人。\r\n\r\n5、协议中有违约金条款金额夸张或不明确并明确是不平等条款的。\r\n\r\n6、公司要求个人向银行贷款参加专业培训的都是骗子。\r\n\r\n7、工作内容要求自己先行投入现金的。\r\n\r\n（“防骗技巧”文章作者：不装Bde汪；来源：知乎；著作权归原作者所有）\r\n\r\n\r\n互联网时代，为大学生求职打开了一条绿色通道，但也危机四伏。\r\n\r\n在这个鱼龙混杂的社会，我们大学生要学会审视，并提高自己的判断力。\r\n\r\n“实习僧”也告知大家：求职需谨慎。\r\n\r\n最后，祝大家都能找到心仪的工作。','2018-03-27 11:35:56'),(9,'wwweweqwe','qwewqewqewq','2018-03-27 22:13:56');
/*!40000 ALTER TABLE `guide` ENABLE KEYS */;

#
# Structure for table "job"
#

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` varchar(255) DEFAULT NULL,
  `jtype` varchar(20) DEFAULT NULL,
  `jname` varchar(40) DEFAULT NULL,
  `jdepartment` varchar(40) DEFAULT NULL,
  `jnature` varchar(10) DEFAULT NULL,
  `jwage` varchar(20) DEFAULT NULL,
  `jcity` varchar(10) DEFAULT NULL,
  `jyear` varchar(255) DEFAULT NULL,
  `jeducation` varchar(10) DEFAULT NULL,
  `jadvantage` varchar(40) DEFAULT NULL,
  `jdetail` text,
  `jaddress` varchar(60) DEFAULT NULL,
  `jemail` varchar(60) DEFAULT NULL,
  `jtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cname` varchar(50) DEFAULT NULL,
  `jstate` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "job"
#

/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (1,'www','Java',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-06 17:02:54',NULL,NULL),(2,'www','程序测试员','程序测试员','程序测试员','全职','25k-50k','上海',NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-06 17:02:52',NULL,NULL),(3,'www','Java',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-06 17:02:51',NULL,NULL),(4,'www','后端开发','PHP','后端开发','全职','10-15','上海','应届毕业生','本科','1111111111111王企鹅企鹅舞','王企鹅王企鹅去委屈委屈委屈we','usa','admin@admin.com',NULL,NULL,NULL),(5,'www','后端开发','PHP','后端开发','全职','10-15','上海','应届毕业生','本科','1111111111111王企鹅企鹅舞','王企鹅王企鹅去委屈委屈委屈we','usa','admin@admin.com','0000-00-00 00:00:00',NULL,NULL),(6,'www','后端开发','PHP','后端开发','全职','10-15','上海','应届毕业生','本科','1111111111111王企鹅企鹅舞','王企鹅王企鹅去委屈委屈委屈we','usa','admin@admin.com','0000-00-00 00:00:00',NULL,NULL),(7,'www','后端开发','PHP','后端开发','全职','10-15','上海','应届毕业生','本科','1111111111111王企鹅企鹅舞','王企鹅王企鹅去委屈委屈委屈we','usa','admin@admin.com','2018-03-16 15:23:00',NULL,NULL),(8,'www','前端开发','web','前端','实习','2k-3k','上海','应届毕业生','本科','','','','','2018-04-06 17:03:49',NULL,'下线'),(9,'www','后端开发','Python','开发','全职','20k-40k','上海','1-3年','本科','五险一金','python开发','上海市','','2018-03-24 14:04:04','baidu',NULL),(10,'www','运维','网络工程师','网络部','实习','10k-12k','北京','应届毕业生','本科','五险一金','网络工程师','上海','','2018-04-06 17:14:33','百度',NULL);
/*!40000 ALTER TABLE `job` ENABLE KEYS */;

#
# Structure for table "meeting"
#

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mcity` varchar(11) NOT NULL DEFAULT '0',
  `mday` varchar(30) NOT NULL,
  `mtime` varchar(30) NOT NULL,
  `mcom` varchar(30) NOT NULL DEFAULT '',
  `mschool` varchar(30) NOT NULL DEFAULT '',
  `maddress` varchar(30) NOT NULL DEFAULT '',
  `mtext` longtext,
  `mtime1` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "meeting"
#

/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
INSERT INTO `meeting` VALUES (1,'武汉','2018-03-23(周五)','14：00','唯品会','武汉大学','计算机学院B403会议室','唯品会[1]  信息科技有限公司（VIPS）成立于2008年8月，总部设在广州，旗下网站于同年12月8日上线。[2]  唯品会主营业务为互联网在线销售品牌折扣商品，涵盖名品服饰鞋包、美妆、母婴、居家等各大品类。2012年3月23日，唯品会在美国纽约证券交易所（NYSE）上市。目前唯品会已成为中国第三大电商。唯品会2017年总营收为人民币729亿元，增长28.8%。[3] \r\n唯品会在中国开创了“名牌折扣+限时抢购+正品保障”的创新电商模式，并持续深化为“精选品牌+深度折扣+限时抢购”的正品特卖模式。[4]  这一模式被形象地誉为“线上奥特莱斯”。[5]  唯品会每天早上10点和晚上8点准时上线200多个正品品牌特卖，以最低至1折的折扣实行3天限时抢购，[5]  为消费者带来高性价比的“网上逛街”的购物体验。[5] \r\n在美国权威财经杂志《财富》发布的2017中国500强榜单中，唯品会位列第115名，并位列B2C电商第三。而在《财富》杂志同期发布的 “2017年中国500强净资产收益率最高40家公司”榜单中，唯品会凭借35.53%的资产收益率位列第三名，稳居互联网行业第一。[6] \r\n截至2017年6月30日，[7]  唯品会已连续十九个季度实现盈利。[7] \r\n唯品会在美国零售行业杂志《Stores》联合德勤发布的《2017全球250强零售商排行榜》中，蝉联“全球增速最快的顶尖零售商”[8]  。在BrandZ™《2017年最具价值中国品牌100强》中，唯品会排名第40位，并获“最佳新晋中国品牌”称号。[9-10\r\n','2018-03-23 14:42:43'),(2,'上海','2018-03-28','14：00','阿里巴巴','复旦大学','大礼堂','阿里巴巴集团2018届应届生招聘\r\n一、开放群体及岗位：\r\n1. 面向群体：2018届毕业生（毕业时间：2018.1.1-2018.12.31）\r\n2. 开放岗位：技术大类、UED类、反洗钱、客户顾问岗位，欢迎错过秋招的同学投递，对于优秀的同学将有机会进入面试流程噢\r\n二、人才素质测评：\r\n1. 面向人群：客户顾问、反洗钱专员岗位同学\r\n2. 测评形式：在线测评\r\n3. 测评安排：简历投递成功后，我们会给亲的邮箱发送测评链接，请点击邮件链接进行在线测评，只有完成测评才有机会参加最终面试\r\n4. 测评要求：亲须保证个人信息真实有效，并确保答题过程完全由本人独立完成，如发现有任何作弊或欺诈行为，我们将取消亲的面试资格\r\n三、关于面试：\r\n1. 客户顾问、反洗钱专员岗位面试流程： 内推/网申（3月23日之前）→简历完善→测评→专场面试→发放录用意向书\r\n2. 客户顾问、反洗钱专员岗位专场面试时间：3月16日至3月20日，请关注亲的官网个人中心实时状态，面试开启时会有邮件通知\r\n3. 技术类、UED类岗位经过简历筛选后，错过秋招的同学还是有机会进入面试流程\r\n四、关于offer：\r\n1. 我们会第一时间向确认录用意向的同学发放《录用意向书》,分批发放offer直至校招结束\r\n2. 我们非常欢迎有志于互联网事业的年轻人加入我们，与我们共创有价值有意义的事','2018-03-27 15:59:08'),(3,'广州','2018-03-31','10：00','腾讯','中山大学','学术报告厅','腾讯2018实习生招聘高校宣讲安排\r\n清华大学\r\n公司宣讲会\r\n3月21日19:00 就业指导中心天一厅\r\n技术分享会\r\n3月20日19:00 就业指导中心天一厅\r\n \r\n北京大学\r\n公司宣讲会\r\n3月13日19:00 英杰月光厅\r\n技术分享会\r\n3月14日14:00 英杰月光厅\r\n游戏岗位分享会\r\n3月16日19:00 光华管理学院112教室\r\n \r\n北京邮电大学\r\n公司宣讲会\r\n3月15日19:00 教三433\r\n技术分享会\r\n3月16日19:00 教三433\r\n \r\n北京航空航天大学\r\n技术分享会\r\n3月14日19:00 三号楼215教室\r\n \r\n中国科学院大学\r\n技术分享会\r\n3月14日18:30 计算所4层报告厅\r\n \r\n哈尔滨工业大学\r\n公司宣讲会\r\n3月16日19:00 一校区活动中心416\r\n技术分享会\r\n3月17日19:00 一校区活动中心326\r\n \r\n上海交通大学\r\n公司宣讲会\r\n3月12日19:00 电信群楼3-200会议室\r\n技术分享会\r\n3月13日19:00 电信群楼3-200会议室\r\n游戏岗位分享会\r\n3月14日19:00 电信群楼3-200会议室\r\n \r\n复旦大学\r\n技术分享会\r\n3月12日19:00 张江校区软件楼102第二会议室\r\n \r\n中国科学技术大学\r\n技术分享会\r\n3月15日18:00 西区学生活动中心（二楼）学术报告厅\r\n \r\n浙江大学\r\n公司宣讲会\r\n3月20日19:00 玉泉校区曹光彪东楼502会议室\r\n技术分享会\r\n3月23日19:00 玉泉校区曹光彪东楼502会议室\r\n游戏岗位分享会\r\n3月21日19:00 玉泉校区曹光彪东楼502会议室\r\n \r\n南京大学\r\n公司宣讲会\r\n3月19日19:00 鼓楼校区知行楼二楼报告厅\r\n技术分享会\r\n3月21日19:00 鼓楼校区知行楼二楼报告厅\r\n \r\n东南大学\r\n公司宣讲会\r\n3月20日19:00 九龙湖校区教一211\r\n技术分享会\r\n3月19日19:00 九龙湖校区教一211\r\n \r\n西安交通大学\r\n公司宣讲会\r\n3月19日19:00 中二-3225\r\n技术分享会\r\n时间地点待定\r\n \r\n西安电子科技大学\r\n公司宣讲会\r\n3月20日19:00 阶教605\r\n技术分享会\r\n3月21日19:00 阶教608\r\n \r\n四川大学\r\n公司宣讲会\r\n3月16日18:30 望江校区就业指导中心222\r\n技术分享会\r\n时间地点待定\r\n \r\n电子科技大学\r\n公司宣讲会\r\n3月14日19:30 清水河校区立人楼B120\r\n技术分享会\r\n时间地点待定\r\n游戏岗位分享会\r\n3月15日19:30清水河校区立人楼B120\r\n \r\n中山大学\r\n技术分享会\r\n3月23日19:00 大学城校区计算机学院A101讲学厅\r\n游戏岗位分享会\r\n3月16日19:00 大学城校区计算机学院A101讲学厅\r\n \r\n武汉大学\r\n公司宣讲会\r\n3月13日18:30 第三报告厅\r\n技术分享会\r\n3月14日18:30 计算机学院B403\r\n \r\n华中科技大学\r\n公司宣讲会\r\n3月14日18:30 研究生活动中心\r\n技术分享会\r\n3月15日18:30 沁苑13栋701室\r\n游戏岗位分享会\r\n3月16日18:30 研究生活动中心','2018-03-27 16:13:55');
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;

#
# Structure for table "orders"
#

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `jid` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `ostate` varchar(10) NOT NULL,
  `otime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "orders"
#

/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,6,'12345678910','www','未查阅',NULL),(2,3,'12345678910','','未查阅',NULL),(3,7,'12345678910','www','未查阅','2018-03-19 15:31:00'),(4,2,'12345678910','','未查阅','2018-03-20 11:28:13'),(5,9,'12345678910','www','未查阅','2018-04-06 16:51:52');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

#
# Structure for table "student"
#

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL DEFAULT '0',
  `sex` varchar(4) DEFAULT NULL,
  `record` varchar(10) DEFAULT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `tel` varchar(24) DEFAULT NULL,
  `portrait` mediumblob,
  `jobexperience` text,
  `project` text,
  `school` varchar(50) DEFAULT NULL,
  `sctime1` int(10) DEFAULT NULL,
  `sctime2` int(10) DEFAULT NULL,
  `pro` varchar(30) DEFAULT NULL,
  `jl` mediumblob,
  `zwjs` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "student"
#

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('000','000','000',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('11','','11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('11111111111','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('123123','','1122',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('1231231','123','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('123123111','123','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('12312311111','312312','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('12312312312','','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('12321321321','','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('12345678910','张三','666666','男','本科','应届毕业生','123456@qq.com','我目前正在职，正考虑换个新环境','12345678910',X'70686F746F2F31323334353637383931302E6A7067','2010至今 腾讯  后台开发\r\n2008-2010 华为 手机研发','英雄联盟 后台开发维护\r\n华为手机研发\r\n','清华大学 ',2002,2006,'软件工程 ',X'6A69616E6C692F31323334353637383931302E646F6378','乐观开朗  认真积极'),('12345678912','123123','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('21312312311','','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('23232323232','123','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('33333333333','','123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('cb','陈斌','cb','男','博士','应届毕业生','caonima9900@qq.com','我是应届毕业生','12345678910',X'70686F746F2F63622E6A7067',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('ff','ff','ff',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('qqq','qqq','qqq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('ss','ss','ss',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('ttt','ttt','qq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
