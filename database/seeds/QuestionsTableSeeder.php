<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $str = <<<'NOWDOC'
1、1931年毛泽东“七百里驱十五日”描写的：第二次反围剿2、星座划分和命名是由人决定  ….   正确3、共享发展理念的内涵之一是全面共享的  …….全覆盖面而言4、王安石的《明妃曲》其二写到汉恩自浅胡恩深   明妃是….王昭君5、元好问“问世间，情为何物…….写的是   大雁6、刘禹锡 “千淘万漉虽辛苦，   吹尽狂沙始到金7、最早采用人工呼吸的医学家…..张仲景8、在我国境内有住所，或无住所个税累计满 ….183天9、“衍祖宗一脉真传，克忠克孝，教子孙….天下清官的是：俞茂坚10、2018年10月8号，诺贝尔经济学奖，…以表彰“可持续经济增长领域11、中央国家机关，省机关及授权的机关单位可以确定绝密机密秘密（以上全部）国家秘密12、法律行政法规规定公开事项、应当 依法公开13、“纸上得来终觉浅，绝知此事要躬行”14、“山郡逢春下乍晴，陂塘分出几泉请，郭边万户皆临水……清代诗人王士贞写的”济南15、“ 宁德  位于福建东北翼沿海，是中国大黄鱼之乡16、人类有5方面的功能目前神经科学研究对“感觉功能、控制运动的功能、记忆功能、情感和情绪（选择C）17、记载的秦始皇七年的彗星，各国学者认为是世界上最早哈雷彗星记载《史记》18、钱钟书，代表作《围城》是中国现代文学史上的19、黄桥战役，发生在1940年10月 是苏中地区的新四军  20、秦自商鞅变法以来，推行军功爵位制，当时的军功爵位共有 20级别21、对我国近代历史描述，改革内政和建设国家的新方向  文献可能是“资政新篇”22、关于归纳，不正确的是：  简单枚举法是一种完全归纳法23、中国目前也在积极推动能源互联网规划，预计到2020年和2030年24、中国地质年龄最年轻的火山岛是：北海的涠洲岛25、不属于科学史上科学论战《月圆说和月缺说》26、中国人民银行 都不可以  向任何单位和个人提供担保27、“青山依旧在，几度夕阳红”的作者是  杨慎28、微山湖是著名的现代革命斗争纪念地，….刘知侠长篇小说《铁道游击队》29、“德不孤，必有邻”出自《论语》30、苟利国家生死以，岂因祸福避趋之：“林则徐“31、党的十八届三中全会将市场资源   将基础性作用改为：决定性作用32、理论和实践都证明  市场 是配置资源最有效的形式33、“纳米”是 长度计量单位之一34、我国的中央银行是  中国人民银行35、关于科学的概念，不正确的是  科学是一种很快带来经济效益的生产力(选择D)36、全球温度上升会产生以下哪些不利影响 全部都是（D）37、绝密级国家秘密载体应当符合国家保密标准的设施，…未经  原定密机关..（D）38、纳税人赡养一位以及被赡养的赡养支出，纳税为独生子女的按照每月  2000  标准扣除39、下列我国古代一些历史文化名人，其中属于两汉时期的是 3华佗 7张衡 8  董仲舒40、标志着中国新民主主义革命开端的历史事件： 五四运动41、宋慈（1186-1249） 南宋人被誉为：法医学 鼻祖42、发源于长白山的松花江滋养了松北大地..表述错误的是  ：松花江是中国最小的支流（C）43、变量和因变量各是：自变量是一天中的时间，因变量是温度44、“乘风好去，长空万里..辛弃疾《太常引.建康中秋夜》、《太常引》为：词牌45、2016年7月1号，在庆祝中国共产党成立95周年习书记将 发展 是党执政兴国的第一46、1949年3月11日，中国人民解放军第三野战军副司令兼副政委 栗裕47、企业所得税税法规定，企业分为居民企业和非居民企业48、长江是世界的第三大河49、被尊为中华民族的人文初祖是：黄帝50、起草 全程参与1982年宪法修改，参加1988年1993 1999年2003年四次宪法改《宪法学》51、元末明初唐珙《题龙阳县青草湖》曾因诗境近似唐人被选入全唐诗西风吹老洞庭波,一夜湘君白发多.醉后不知天在水,满船清梦压星河.3214选择c52、很多人喜欢在客厅摆放绿色植物，专家建议室内不要摆放过多的绿色植物主要原因是：植物夜晚释放二氧化碳53、春蚕到死丝方尽，蜡炬成灰泪始干   作者： 唐 李商隐54、风雨送春归，飞雪迎春到 已是悬崖百丈冰，犹有花枝俏55、明清时期的科举考中，….被一级考试的是  乡试56、唐代壁画中常见胡服，….由赵武灵王引入中原57、关于功率和机械效率，正确的是：做功越快的机械，功率一定越大58、国家秘密的保密期限已满的，自行解密59、“杨柳青青江水平，闻郎江上唱歌声…是唐刘禹锡在夔（kuí）州60、全面依法治国，是中国特色社会主义本质要求和重要保障61、我国的古代六艺所指的是“礼、乐、射、御、书、数62、俗语“一问三不知“出自于《左转》 其中三不知：事情的开始、发展、结果63、根据《中华人民共和国法官法》的规定法官的任职条件中最低年龄要求：年满23周岁64、位于江苏苏州吴江区  同里 江南六大名镇之一，“东方小威尼斯….65、张之洞 晚清中兴四大名臣之一，先后创办自强学堂，推行学校制66、通常采用同行评议的办法是（以上全是）遴选科研项目，科学论文、科研讲评，选择D67、碳-14断代法可以用来，判定完全相同地域环境的两件物品中哪个更古老68、如果小华在小丽北偏东40°的位置上，那么小丽在小华的  南偏西40°69、新年前夕，国家主席习近平通过中央广播，发表“岁月不居，时节如流《论盛孝章书》70、“中国”一词最早文字记载鉴于 何尊 青铜器71、苏州历史悠久，风景秀丽：姑苏城外寒山寺，夜半钟声到客船72、表达了“吟安一个字，捻断数茎须 内涵一致的是“两句三年得，一吟双泪流”73、作者，作品，朝代一致 ：贾谊 《过秦论》 汉74、我国历史上 孔子私学规模最大，影响最深远75、1937年7月7日，抗日战争全面爆发，11月20日，国民政府迁都 重庆 市76、山洪灾害降雨强度预警信号的颜色等级，由低到高， 黄色——橙色——红色77、税收是政府为了满足社会公共需求，政治权利取得财政收入的一种形式强制性，无偿性78、最早的地理学著作 《山海经》记录了我国古代地理、历史、民族、神话、生物等内容79、首届世界互联网大会以“互联互通，共享共治”为主题，回应了网络空间面临的问题80、纳税人在主要工作城市没有自有住房而发生的住房租金支出，主要工作城市为直辖市、省会城市或者计划单列市，按照每月1500元的标准扣除81、中国古代兵器 戟 除了是实战作用，又被列于门前，体现主人身份82、科学家要遵守科学知识和科学建制的基本规范的原因是：（全部都是）为确保实验不带偏见，以标准化的方式进行，让其他科学家可以复制这些实验，为不带偏见地检验，支持或反驳科学结论83、我国古代用“金”石“丝”“竹”指代不同材质、类别的乐器，涉及竹的是：深秋帘幕千家雨，落日楼台一笛风84、位于广西壮族兴安县境内的灵渠，公元前214年凿成通航，是古代劳动人民创造的一项伟大工程，2018年8月13日，灵渠被入选：世界灌溉工程遗产名录85、2019年3月22日是第二十七届“世界水日”3月22—28是第三十二届“中国水周”联合国确定2019年“世界水日”的宣传主题为“Leaving no behind”（不让任何一个人掉队）。我国2019年”世界水日和中国水周活动的宣传主题为 坚持节水优先，强化水资源管理86、要不断提高党的创造力、凝聚力、战斗力、建设学习型，服务型 创新型的马克思主义执政党，使我们党始终走在时代前列87、哲学社会科学 是人们认识世界、改造世界的重要工具，是推动历史发展和88、“布谷飞飞劝早耕，春锄扑扑趁春晴 描绘出一幅热闹的 春耕  图89、关于科学和技术的说法不正确的是“科学活动以发明为中心，技术活动以发现为核心90、“粉身碎骨全不怕，要留清白在人间写的是 石灰91、五峰如指翠相连，撑起延缓半壁天出自明代丘浚 《题五指山》 五指山相关的《西游记》92、5000年的中华文明孕育着丰富的生态智慧“子钓而不纲，弋不射宿”提出者 孔子93、《题破山寺后禅院》唐代诗人常建在游玩破山寺即兴写的，破山寺就是今天常熟兴福寺94、林祥谦，福建闽侯尚干人，中国工人阶级的杰出代表和中国工人运动的先驱者，1923年2月4日，林祥谦领导了震撼中外  京汉铁路工人大罢工95、魏晋时期的， 裴秀 因主持编绘《禹贡地域图》和提出“制图六体”被称为地理学家96、“故人西辞黄鹤楼，烟花三月下扬州，是唐诗人  李白97、中国文学第一部诗歌总集是《诗经》98、中国共产党成立后，积极发动工农群众开展革命斗争，中国共产党第一次独立领导并取得完全胜利的工人斗争是  安源路矿工人罢工99、中国工人运动史上持续时间最长的一次罢工是  省港大罢工100、军事名言“将在外，君命有所不受”出自 《孙子兵法》101、著名诗句“桂林山水甲天下”的作者是王正功是 南宋 诗人102、灞桥纸是 西汉 时期的一种纸103、三明市位于福建省中西北部，中国绿都，也是国务院批准建立的全国集体林区改革试验，“宁化古杉木王群104、党执政后的最大的危险是 脱离群众105、《中共中央国务院关于实施乡村振兴战略的意见》指出，完善农民闲置宅基地和闲置农房政策，探索宅基地所有权，资格权、使用权，三权分置106、朱德同志《赠诸友》诗写到“志士恨无穷，孤身走西东 投笔从戎去，刷新旧国风107、蔡襄 是北宋著名的书法家，文学家，亦是北宋名臣，《茶录》《荔枝谱》108、与诗句“水吞三楚白，山接九疑青”的景致不同的一联诗是 造化钟神秀，阴阳割昏晓109、秦统一后，统一标准文字是  小篆110、1945年抗日战争胜利后为避免内战，争取和平，中国共产党与国民政府进行为期43天的和平谈判 ，史称  重庆谈判111、邓稼先 是中国核武器研制工作的开拓者和奠基者，被誉为“两弹元勋112、“落其实者思其 树  ，饮其流者怀其源113、习近平指出的“党是总揽全局、协调各方的 ，经济工作是中心工作114、党支部 每月 相对固定 1天  开展主题党日，组织党员集中学习，过组织生活，进行民主议事和志愿服务等115、手足口病最主要的易感人群是 婴幼儿116、流感病毒变异非常快的根本原因是 遗传物质是RNA117、“我家洗砚池边树，朵朵花开淡墨痕，不要人夸颜色好，只留清气满乾坤 写的是 梅花118、党章规定，党员如果没有正当理由，连续 六个月不参加党的组织生活，或不交党费，或不做党所分配的工作，被默认自行脱党119、毛泽东同志 “ 为有牺牲多壮志、敢教日月换新天”120、“东方风来满眼春，花城柳暗愁杀人”121、根据《中华人民共和国产品质量法》规定，限期使用的产品，应当在显著位置清晰地标明生产日期和安全使用期或 失效日期122、习近平总书记在讲话中使用过的名叫，治国有常，而利民为本“出自  《淮南子》123、1921年7月23日至8月初，中国共产党第一次全国代表大会先后在上海、嘉兴 召开124、我国的京剧脸谱色彩丰富，红色一般标示忠勇侠义，白色一般标示阴险奸诈，黑色标示，忠耿正直125、发生地震时，最先感到的地震波叫“纵波“126、我国的宪法日是12月4日127、“不似天涯，卷起杨花似雪花“出自，苏轼的《减字木兰花.立春》 作者苏轼 是宋代128、以县级以上行政区域名称冠名的地方志书、地方综合年鉴、分别由本级人民政府负责  地方志 工作的机构按照规划组织编纂129、地球大气中的二氧化碳含量不算增加的主要后果是，产生温室效应130、2014年9月5日，习近平总书记在庆祝全国人民代表大会成立 60 周年大会上讲话，实践充分证明，人民代表大会制度是符合中国国情和实际、体现社会主义国家性质、保证人民当家作主131、“相知无远近，万里尚为邻“是唐 张九龄  的诗作，题材是 送别诗132、第五套人民币20元背面印的是桂林漓江山水风光中的著名景点 黄布倒影133、中国特色社会主义有很多特点和特征 但最本质的特征是 坚持中国共产党的领导134、中国第一个目标飞行器和空间实验室是 天宫一号135、我国全面推行营业税改征增值税是 2016年 136、北宋初期是我国书院教育的高潮期，出现了著名的，岳麓书院 白鹿洞书院、嵩阳书院137、中国是负责任的发展中大国，是全球气候治理的积极参与者，已经向世界承诺将于 2030年左右将二氧化碳排放达到峰值，并争取早日实现。138、我国金融服务的“三农“的主力军是 农村信用合作社 类金融机构139、把生态文明建设纳入中国特色社会主义事业五位一体总体布局的会议是 党的十八大140、重庆“古巴渝十二景“中，南滨路独占了 四 景141、成语，“一衣带水“中的水 是指 长江142、手机、电脑的芯片主要是由 硅 物质组成的143、股票市场上常常被提到的 “IPO”的意思是  首次公开发行，即公司第一次募股票144、在五大新发展理念中，最能体现，坚持以人民为中心的发展思想是 共享理念145、“漫云女子不英雄，万里乘风独向东诗思一帆海空阔，梦魂三岛月玲珑，…女革命家秋瑾， 家国恨中应不包括 ”护国运动’146、转变政府职能，是深化行政体制改革的核心实质上是解决的是政府应该做什么，不应该做什么，重点是政府、市场、社会的关系147、依据党的十九大报告，生态环境质量实现根本好转，美丽中国目标基本实现的时间节点是 2035年148、“语不惊人死不休”属于 律诗 题材149、纳税人的子女接受全日制学历教育的相关支出、按照每个子女每月1000元的标准扣除150、某托盘天平读数误差在2克以内，则分析样品应至少称 200 克才能保证称样相对误差小于1%151、中国海军诞生基地在  江苏 泰州152、“不谋一域者，不足以谋全局，一屋不扫，何以扫天下”体现的哲理是 部分反映整体153、“桃花仙人种桃树，又摘桃花换酒钱”桃花仙人是  唐寅154、唐代笔画《客使图.》中三位唐代官员是来自 鸿胪寺155、唐代阙楼作为礼制性建筑，其最高等级为 三出阙156、大夏国的首都是 重庆157、下列不属于“十三经’的是 史记158、某物质只含有一种元素，则该物质：可能是混合物，不可能是化合物159、治贫先治愚，扶贫先扶智，教育是阻断贫困代际传递的治本之策160、重庆得名至今已有800余年，下令改恭州为重庆的是 宋光宗赵惇161、相对传统打印方式，3D打印的优点是 满足少量化，个性化生产需求162、岁岁重阳，今又重阳，战地黄花分外香163、我国的个人的工资，薪金所得税缴纳个人所得税采用的是  超额累进税率164、正式党员不足3人的单位，应当按照地域相邻，行业相近，规模适当，便于管理的原则，成立 联合党支部165、不畏浮云遮望眼 出自于 王安石166、唐代尚马之风流行，壁画中的骏马多带有各种装饰，既好看有实际功能，其中位于马鞍下部的是 障泥167、秦始皇帝陵的出土文物中被誉为“青铜之冠的是 青铜车马168、在《孙子兵法》中，伐谋为上兵169、我国古代的“乐府双璧“是指 《孔雀东南飞》 《木兰诗》170、长江三峡是由瞿塘峡、巫峡、西陵峡组成171、毛泽东同志的名句“万类霸天竞自由“可以用来比喻 ”良好的创业环境172、农业生产者销售的自产农产品 免征增值税173、1941年3月，八路军三五九旅在旅长 王震的带领下，在南泥湾开展大生产运动174、海内存知己天涯若比邻是王勃所作175、2019年推动城镇化发展，抓好已经在城镇就业的农业转移人口的落户工作督促落实 2020年 1亿人落户目标176、全面抗战爆发后，八路军打的第一个大胜仗是 平型关大捷177、“恸哭六军俱缟素，冲冠一怒为红颜’的红颜是 陈圆圆178、2013年11月3日，习近平在湖南湘西州花恒县十八洞，首次提出“实事求是，因地制宜，分类指导，精准扶贫，的重要指示179、党的十五大首次提出把按劳分配的按生产要素分配结合起来180、武汉军运会比赛项目共设 25个正式比赛和2个表演项目181、2019年1月10日，一年一度的“中国社会科学考古学论坛。2018年中国考古新发现在北京举行，四川省 渠县城坝遗址入选2018年考古新发现6项入选项目182、苏州园林是 江南 园林的代表183、我国科学家屠呦呦提取了中药成分 青蒿素  用于抗疟疾，因而获得了2015年诺贝尔184、阖闾大城始建于 周敬王六年   ，遗址位于江苏省常州市雪堰镇里村与无锡市胡埭镇185、20世纪40年代末，美国科学家  伽莫夫 等提出了大爆炸宇宙模型186、设立党支部委员会，党支部委员会由3至5人组成，不超过7人必要可设一名 副书记187、5月19日，是中国的旅游日188、研究表明，1980-2018年中国沿海海平面上升速率为3.3 毫米/年189、人们平常打点滴（吊针）用的生理盐水（氯化钠注射液）浓度是 0.9%190、冰心，代表作是《寄小读者》的通讯散文，成为中国 儿童 文学的奠基之作191、我国淡水资源在全球水资源占比 6%192、银行个人住房抵押贷款额度计算公式是：住房评估值*抵借比193南湖清水夜无烟，耐可乘流直上天，且就洞庭赊月色，将船买酒白云边”南湖：洞庭湖194、除病毒外，组成生物体的基本单位是：细胞195、不拘一格降人才 是 龚自珍 的诗句196、“风急天高猿啸哀，渚清沙白鸟飞回，    是 杜甫的《登高》197、在1964年全国人大三届一次会上，周恩来  提出实现四个现代化198、明末清初学者黄宗羲认为西方的几何学来源于 《周髀算经》199、人们为何成妇女为巾帼，是因为女人带的头饰叫巾帼200、“历览前贤国与家，成由勤俭败由奢，“勤俭能是国家昌盛，  是  李商隐  的诗句201、世界联合学院，始创于1962年，是当今世界独具一格的全球性运动教育，第一所联合学院位于 “常熟202、厦门市和台南市的市树都是 凤凰木203、不属于我国的五大古都是 咸阳204、中国共产党民主革命时期第一个土地法是 五四指示205、我国最早一部解释词义的专著是，也是世界上第一部成体系的词典   《尔雅》206、世界上现存最早的航海图是  《郑和航海图》207、习近平总书记在一次讲话中引用了明代官员陈诚的诗句“绿野草铺茵，空山雪积银，四时常觉冷，六月不知春”写的是 中亚  景色208、北魏时期著名农学家贾思勰所著的 《齐民要术》 是古代农学体系形成的标志209、“三国家门而不入 说的是 禹210、关于地理上“阴阳“  正确的是山的南为阳，水的北面为阴。211、我国的货币政策目标是：保持货币币值的稳定，并以此促进经济增长212、热量传递主要有三种基本方法 ，即导热、热对流和 热辐射223、绥芬河从我国流入：俄罗斯224、宪法修改，由全国人民代表大会委员或者五分之一以上的全国人民代表提议，并由全国人民代表大会以全体代表的  三分之二 以上的多数通过225、董其昌  是明代著名书画家，松江华亭人，“华亭画派“杰出代表，226、王安石名句“不畏浮云遮望眼，自缘身在最高层“227、机关基层党组织应当按照换届。机关党的基层委员会、总支部委员会，支部委员会书记，副书记通过选举产生 报  上级党组织 批准228、2018年国家网络安全宣传周活动主题  “  网络安全为人民，网络安全靠人民“229、气体可压缩存储在钢瓶中是因为  分子之间有间隔'
NOWDOC;

        $arr = preg_split('/\d+、/', $str);

        $data = [];
        foreach ($arr as $key => $value) {
            if (empty($value)) {
                continue;
            }
            $temp   = preg_split('/[.\s]+/', $value, 2);
            $data[] = [
                'ask'    => isset($temp[0]) ? htmlentities($temp[0], ENT_QUOTES) : '',
//                'ask'    => 'ask' . $key,
                'answer' => isset($temp[1]) ? htmlentities($temp[1], ENT_QUOTES) : '',
//                'answer' => 'answer' . $key,
                'type'   => 'challenges',
            ];
        }

        \App\Models\Question::insert($data);
//        foreach ($data as $key => $value) {
//            \App\Models\Question::create($value);
//        }

        $str2 = <<<'EOD'
1931年毛泽东“七百里驱十五日”描写的：{{第}}{{二}}{{次}}{{反}}{{围}}{{剿}}？
2、	星座划分和命名是由人决定  ….   {{正}}{{确}}
3、	共享发展理念的内涵之一是全面共享的  …….{{全}}{{覆}}{{盖}}{{面}}而言
4、	王安石的《明妃曲》其二写到汉恩自浅胡恩深   明妃是….{{王}}{{昭}}{{君}}
5、	元好问“问世间，情为何物…….写的是   {{大}}{{雁}}
6、	刘禹锡 “千淘万漉虽辛苦，  {{ }}{{吹}}{{尽}}{{狂}}{{沙}}{{始}}{{到}}{{金}}
7、	最早采用人工呼吸的医学家…..{{张}}{{仲}}{{景}}
8、	在我国境内有住所，或无住所个税累计满 ….{{1}}{{8}}{{3}}{{天}}
9、	“衍祖宗一脉真传，克忠克孝，教子孙….天下清官的是：{{俞}}{{茂}}{{坚}}
10、	2018年10月8号，诺贝尔经济学奖，…以表彰“{{可}}{{持}}{{续}}{{经}}{{济}}{{增}}{{长}}{{领}}{{域}}
11、	中央国家机关，省机关及授权的机关单位可以确定{{绝}}{{密}}{{机}}{{密}}{{秘}}{{密}}{{（}}{{以}}{{上}}{{全}}{{部}}{{）}}{{国}}{{家}}{{秘}}{{密}}
12、	法律行政法规规定公开事项、应当 {{ }}{{依}}{{法}}{{公}}{{开}}
13、	“纸上得来终觉浅，{{少}}{{壮}}{{工}}{{夫}}{{老}}{{始}}{{成}}{{”}}
14、	“山郡逢春下乍晴，陂塘分出几泉请，郭边万户皆临水……清代诗人王士贞写的”{{济}}{{南}}
15、	{{“}}{{ }}{{宁}}{{德}}{{ }}{{ }}位于福建东北翼沿海，是中国大黄鱼之乡
16、	人类有5方面的功能目前神经科学研究对{{“}}{{感}}{{觉}}{{功}}{{能}}{{、}}{{控}}{{制}}{{运}}{{动}}{{的}}{{功}}{{能}}{{、}}{{记}}{{忆}}{{功}}{{能}}{{、}}{{情}}{{感}}{{和}}{{情}}{{绪}}{{（}}{{选}}{{择}}{{C}}{{）}}
17、	记载的秦始皇七年的彗星，各国学者认为是世界上最早哈雷彗星记载{{《}}{{史}}{{记}}{{》}}
18、	钱钟书，代表作{{《}}{{围}}{{城}}{{》}}是中国现代文学史上的 19、黄桥战役，发生在{{1}}{{9}}{{4}}{{0}}{{年}}{{1}}{{0}}{{月}}{{ }} 是苏中地区的新四军  
20、	秦自商鞅变法以来，推行军功爵位制，当时的军功爵位共有 {{1}}{{2}} 级别
21、	对我国近代历史描述，改革内政和建设国家的新方向  文献可能是“{{资}}{{政}}{{新}}{{篇}}”
22、	关于归纳，不正确的是：  {{简}}{{单}}{{枚}}{{举}}{{法}}{{是}}{{一}}{{种}}{{完}}{{全}}{{归}}{{纳}}{{法}}
23、	中国目前也在积极推动能源互联网规划，预计到{{2}}{{0}}{{2}}{{0}}{{年}}{{和}}{{2}}{{0}}{{3}}{{0}}{{年}}
24、	中国地质年龄最年轻的火山岛是{{：}}{{北}}{{海}}{{的}}{{涠}}{{洲}}{{岛}}
25、	不属于科学史上科学论战{{《}}{{月}}{{圆}}{{说}}{{和}}{{月}}{{缺}}{{说}}{{》}}
26、	中国人民银行 {{ }}{{都}}{{不}}{{可}}{{以}}{{ }}{{ }}向任何单位和个人提供担保
27、	“青山依旧在，几度夕阳红”的作者是  {{杨}}{{慎}}
28、	微山湖是著名的现代革命斗争纪念地，….刘知侠长篇小说{{《}}{{铁}}{{道}}{{游}}{{击}}{{队}}{{》}}
29、	“德不孤，必有邻”出自{{《}}{{论}}{{语}}{{》}}
30、	苟利国家生死以，岂因祸福避趋之{{：}}{{“}}{{林}}{{则}}{{徐}}{{“}}
31、	党的十八届三中全会将市场资源   将基础性作用改为{{：}}{{决}}{{定}}{{性}}{{作}}{{用}}
32、	理论和实践都证明  {{市}}{{场}} 是配置资源最有效的形式
33、	“纳米”是 {{ }}{{长}}{{度}}{{计}}{{量}}{{单}}{{位}}{{之}}{{一}}
34、	我国的中央银行是{{ }}{{ }}{{中}}{{国}}{{人}}{{民}}{{银}}{{行}}
35、	关于科学的概念，不正确的是{{ }}{{ }}{{科}}{{学}}{{是}}{{一}}{{种}}{{很}}{{快}}{{带}}{{来}}{{经}}{{济}}{{效}}{{益}}{{的}}{{生}}{{产}}{{力}}{{(}}{{选}}{{择}}
{{D}}{{)}}
36、	全球温度上升会产生以下哪些不利影响 {{全}}{{部}}{{都}}{{是}}{{（}}{{D}}{{）}}
37、	绝密级国家秘密载体应当符合国家保密标准的设施，…未经{{ }}{{ }}{{原}}{{定}}{{密}}{{机}}{{关}}{{.}}{{.}}
{{（}}{{D}}{{）}}
38、	纳税人赡养一位以及被赡养的赡养支出，纳税为独生子女的按照每月  {{2}}{{0}}{{0}}{{0}}{{ }}标准扣除
39、	下列我国古代一些历史文化名人，其中属于两汉时期的是 {{ }}{{3}}{{华}}{{佗}}{{ }}{{7}}{{张}}{{衡}}{{ }}{{8}}{{ }}{{董}}{{仲}}{{舒}}
40、	标志着中国新民主主义革命开端的历史事件：{{ }}{{五}}{{四}}{{运}}{{动}}
41、	宋慈（1186-1249） 南宋人被誉为：{{法}}{{医}}{{学}} 鼻祖
42、	发源于长白山的松花江滋养了松北大地..表述错误的是  ：{{松}}{{花}}{{江}}{{是}}{{中}}{{国}}{{最}}{{小}}{{的}}{{支}}{{流}}{{（}}{{C}}{{）}}
43、	变量和因变量各是{{：}}{{自}}{{变}}{{量}}{{是}}{{一}}{{天}}{{中}}{{的}}{{时}}{{间}}{{，}}{{因}}{{变}}{{量}}{{是}}{{温}}{{度}}
44、	“乘风好去，长空万里..辛弃疾《太常引.建康中秋夜》、《太常引》为{{：}}{{词}}{{牌}}
45、	2016年7月1号，在庆祝中国共产党成立95周年习书记将 {{发}}{{展}} 是党执政兴国的第一
46、	1949年3月11日，中国人民解放军第三野战军副司令兼副政委{{ }}{{栗}}{{裕}}
47、	企业所得税税法规定，企业分为居民企业和{{非}}{{居}}{{民}}{{企}}{{业}}
48、	长江是世界的{{第}}{{三}}大河
49、	被尊为中华民族的人文初祖是：{{黄}}{{帝}}
50、	起草 全程参与1982年宪法修改，参加1988年19993 1999年2003年四次宪法改{{《}}{{宪}}{{法}}{{学}}{{》}}
51、	元末明初唐珙《题龙阳县青草湖》曾因诗境近似唐人被选入全唐诗{{西}}{{风}}{{吹}}{{老}}{{洞}}{{庭}}{{波}}{{,}}{{一}}{{夜}}{{湘}}{{君}}{{白}}{{发}}{{多}}{{.}}{{醉}}{{后}}{{不}}{{知}}{{天}}{{在}}{{水}}{{,}}{{满}}{{船}}{{清}}{{梦}}{{压}}{{星}}{{河}}{{.}}{{3}}{{2}}{{1}}{{4}}{{选}}{{择}}{{c}}
52、	很多人喜欢在客厅摆放绿色植物，专家建议室内不要摆放过多的绿色植物主要原因是{{：}}
53、	春蚕到死丝方尽，蜡炬成灰泪始干   作者： {{唐}} {{李}}{{商}}{{隐}}
54、	风雨送春归，飞雪迎春到 {{ }}{{已}}{{是}}{{悬}}{{崖}}{{百}}{{丈}}{{冰}}，犹有花枝俏
55、	明清时期的科举考中，….被一级考试的是  {{乡}}{{试}}
56、	唐代壁画中常见胡服，….由{{赵}}{{武}}{{灵}}{{王}}引入中原
57、	关于功率和机械效率，正确的是：{{做}}{{功}}{{越}}{{快}}{{的}}{{机}}{{械}}{{，}}{{功}}{{率}}{{一}}{{定}}{{越}}{{大}}{{ }}58、国家秘密的保密期限已满的，{{自}}{{行}}{{解}}{{密}}
59、	“杨柳青青江水平，闻郎江上唱歌声…是唐刘禹锡在{{夔}}{{（}}{{k}}{{u}}{{í}}{{）}}{{州}}
60、	{{全}}{{面}}{{依}}{{法}}{{治}}{{国}}，是中国特色社会主义本质要求和重要保障
61、	我国的古代六艺所指的是“{{礼}}{{、}}{{乐}}{{、}}{{射}}{{、}}{{御}}{{、}}{{书}}{{、}}{{数}}
62、	俗语“一问三不知“出自于《左转》 其中三不知：{{事}}{{情}}{{的}}{{开}}{{始}}{{、}}{{发}}{{展}}{{、}}{{结}}{{果}}
63、	根据《中华人民共和国法官法》的规定法官的任职条件中最低年龄要求{{：}}{{年}}{{满}}{{2}}{{3}}{{ }}{{周}}{{岁}}
64、	位于江苏苏州吴江区  {{同}}{{里}}{{ }}江南六大名镇之一，“东方小威尼斯….
65、	{{张}}{{之}}{{洞}}{{ }}晚清中兴四大名臣之一，先后创办自强学堂，推行学校制
66、	通常采用同行评议的办法是{{（}}{{以}}{{上}}{{全}}{{是}}{{）}}{{遴}}{{选}}{{科}}{{研}}{{项}}{{目}}{{，}}{{科}}{{学}}{{论}}{{文}}{{、}}{{科}}{{研}}{{讲}}{{评}}，{{选}}{{择}}{{D}}
67、	碳-14断代法可以用来，{{判}}{{定}}{{完}}{{全}}{{相}}{{同}}{{地}}{{域}}{{环}}{{境}}{{的}}{{两}}{{件}}{{物}}{{品}}{{中}}{{哪}}{{个}}{{更}}{{古}}{{老}}
68、	如果小华在小丽北偏东40°的位置上，那么小丽在小华的  {{南}}{{偏}}{{西}}{{4}}{{0}}{{°}}
69、	新年前夕，国家主席通过中央广播，发表“岁月不居，时节如流{{《}}{{论}}{{盛}}{{孝}}{{章}}{{书}}{{》}}
70、	“中国”一词最早文字记载鉴于 {{何}}{{尊}}{{ }}青铜器
71、	苏州历史悠久，风景秀丽：{{姑}}{{苏}}{{城}}{{外}}{{寒}}{{山}}{{寺}}{{，}}{{夜}}{{半}}{{钟}}{{声}}{{到}}{{客}}{{船}}
72、	表达了“吟安一个字，捻断数茎须 内涵一致的是{{“}}{{两}}{{句}}{{三}}{{年}}{{得}}{{，}}{{一}}{{吟}}{{双}}{{泪}}{{流}}{{”}}
73、	作者，作品，朝代一致 ：{{贾}}{{谊}}{{ }}{{《}}{{过}}{{秦}}{{论}}{{》}}{{ }}{{汉}}
74、	我国历史上{{ }}{{孔}}{{子}}私学规模最大，影响最深远
75、	1937年7月7日，抗日战争全面爆发，11月20日，国民政府迁都 {{重}}{{庆}} 市
76、	山洪灾害降雨强度预警信号的颜色等级，由低到高， {{ }}{{黄}}{{色}}{{—}}{{—}}{{橙}}{{色}}{{—}}{{—}}{{红}}{{色}}
77、	税收是政府为了满足社会公共需求，政治权利取得财政收入的一种形式{{强}}{{制}}{{性}}{{，}}{{无}}{{偿}}{{性}}
78、	最早的地理学著作 {{ }}{{《}}{{山}}{{海}}{{经}}{{》}}记录了我国古代地理、历史、民族、神话、生物等内
容
79、	首届世界互联网大会以{{“}}{{互}}{{联}}{{互}}{{通}}{{，}}{{共}}{{享}}{{共}}{{治}}{{”}}为主题，回应了网络空间面临的问题
80、	纳税人在主要工作城市没有自有住房而发生的住房租金支出，主要工作城市为直辖市、省会城市或者计划单列市，按照每月{{1}}{{5}}{{0}}{{0}}元的标准扣除
81、	中国古代兵器 {{戟}} 除了是实战作用，又被列于门前，体现主人身份
82、	科学家要遵守科学知识和科学建制的基本规范的原因是：{{（}}{{全}}{{部}}{{都}}{{是}}{{）}}{{为}}{{确}}{{保}}{{实}}{{验}}{{不}}{{带}}{{偏}}{{见}}{{，}}{{以}}{{标}}{{准}}{{化}}{{的}}{{方}}{{式}}{{进}}{{行}}{{，}}{{让}}{{其}}{{他}}{{科}}{{学}}{{家}}{{可}}{{以}}{{复}}{{制}}{{这}}{{些}}{{实}}{{验}}{{，}}{{为}}{{不}}{{带}}{{偏}}{{见}}{{地}}{{检}}{{验}}{{，}}{{支}}{{持}}{{或}}{{反}}{{驳}}{{科}}{{学}}{{结}}{{论}}
83、	我国古代用“金”石“丝”“竹”指代不同材质、类别的乐器，涉及竹的是：{{深}}{{秋}}{{帘}}{{幕}}{{千}}{{家}}{{雨}}{{，}}{{落}}{{日}}{{楼}}{{台}}{{一}}{{笛}}{{风}}
84、	位于广西壮族兴安县境内的灵渠，公元前214年凿成通航，是古代劳动人民创造的一项伟大工程，2018年8月13日，灵渠被入选：{{世}}{{界}}{{灌}}{{溉}}{{工}}{{程}}{{遗}}{{产}}{{名}}{{录}}
85、	2019年3月22日是第二十七届“世界水日”3月22—28是第三十二届“中国水周”联合国确定 2019 年“世界水日”的宣传主题为“Leaving no behind” （不让任何一个人掉队）。我国 2019年”世界水日和中国水周活动的宣传主题为{{坚}}{{持}}{{节}}{{水}}{{优}}{{先}}{{，}}{{强}}{{化}}{{水}}{{资}}{{源}}{{管}}{{理}}
86、	要不断提高党的创造力、凝聚力、战斗力、建设学习型，{{服}}{{务}}{{型}}{{ }}创新性马克思主义执政党，使我们党始终走在时代前列
87、	{{哲}}{{学}}{{社}}{{会}}{{科}}{{学}} 是人们认识世界、改造世界的重要工具，是推动历史发展和
88、	“布谷飞飞劝早耕，春锄扑扑陈春 描绘出一幅热闹的 {{ }}{{春}}{{耕}}{{ }} 图
89、	关于科学和技术的说法不正确的是“{{科}}{{学}}{{活}}{{动}}{{以}}{{发}}{{明}}{{为}}{{中}}{{心}}{{，}}{{技}}{{术}}{{活}}{{动}}{{以}}{{发}}{{现}}{{为}}{{核}}{{心}}
90、	“粉身碎骨全不怕，要留清白在人间写的是 {{ }}{{石}}{{灰}}
91、	五峰如指翠相连，撑起延缓半壁天出自明代丘浚 《题五指山》 五指山相关的{{《}}{{西}}{{游}}{{记}}{{》}}{{ }}92、5000年的中华文明孕育着丰富的生态智慧“子钓而不纲，弋不射宿”提出者{{孔}}{{子}}
93、	《题破山寺后禅院》唐代诗人常建在游玩破山寺即兴写的，破山寺就是今天{{常}}{{熟}}{{兴}}{{福}}{{寺}}
94、	林祥谦，福建闽侯尚干人，中国工人阶级的杰出代表和中国工人运动的先驱者，
1923年2月4日，林祥谦领导了震撼中外  {{京}}{{汉}}{{铁}}{{路}}{{工}}{{人}}{{大}}{{罢}}{{工}}
95、	魏晋时期的， {{裴}}{{秀}}{{ }}因主持编绘《禹贡地域图》和提出“制图六体”被称为地理学家
96、	“故人西辞黄鹤楼，烟花三月下扬州，是唐诗人  {{李}}{{白}}
97、	中国文学第一部诗歌总集是{{《}}{{诗}}{{经}}{{》}}
98、	中国共产党成立后，积极发动工农群众开展革命斗争，中国共产党第一次独立领导并取得完全胜利的工人斗争是  {{安}}{{源}}{{路}}{{矿}}{{工}}{{人}}{{罢}}{{工}}
99、	中国工人运动史上持续时间最长的一次罢工是  {{省}}{{港}}{{大}}{{罢}}{{工}}
100、	军事名言“将在外，君命有所不受”出自 {{《}}{{孙}}{{子}}{{兵}}{{法}}{{》}}
101、	著名诗句“桂林山水甲天下”的作者是王正功是 {{南}}{{宋}}{{ }}诗人
102、	灞桥纸是 {{西}}{{汉}} 时期的一种纸
103、	{{三}}{{明}}{{市}}位于福建省中西北部，中国绿都，也是国务院批准建立的全国集体林区改革试验，“宁化古杉木王群
104、	党执政后的最大的危险是 {{ }}{{脱}}{{离}}{{群}}{{众}}
105、	《中共中央国务院关于实施乡村振兴战略的意见》指出，完善农民闲置宅基地和闲置农房政策，探索宅基地所有权，资格权、{{使}}{{用}}{{权}}，三权分置
106、	朱德同志《赠诸友》诗写到“志士恨无穷，孤身走西东 投笔{{从}}{{戎}}去，刷新旧国风
107、	{{蔡}}{{襄}}{{ }}是北宋著名的书法家，文学家，亦是北宋名臣，《茶录》《荔枝谱》
108、	与诗句“水吞三楚白，山接九疑青”的景致不同的一联诗是 {{造}}{{化}}{{钟}}{{神}}{{秀}}{{，}}{{阴}}{{阳}}{{割}}{{昏}}{{晓}}
109、	秦统一后，统一标准文字是  {{小}}{{篆}}
110、	1945年抗日战争胜利后为避免内战，争取和平，中国共产党与国民政府进行为期43天的和平谈判 ，史称  {{重}}{{庆}}{{谈}}{{判}}
111、	{{邓}}{{稼}}{{先}} 是中国核武器研制工作的开拓者和奠基者，被誉为“两弹元勋
112、	“落其实者思其 {{树}}{{ }}{{ }}，饮其流者怀其源
113、	指出的“党是总揽全局、协调各方的 ，{{经}}{{济}}{{工}}{{作}}是中心工作
114、	党支部 {{每}}{{月}} 相对固定 {{1}}{{天}}  开展主题党日，组织党员集中学习，过组织生活，进行民主议事和志愿服务等
115、	手足口病最主要的易感人群是 {{ }}{{婴}}{{幼}}{{儿}}
116、	流感病毒变异非常快的根本原因是 {{遗}}{{传}}{{物}}{{质}}{{是}}{{R}}{{N}}{{A}}
117、	“我家洗砚池边树，朵朵花开淡墨痕，不要人夸颜色好，只留清气满乾坤 写的是 {{梅}}{{花}}
118、	党章规定，党员如果没有正当理由，连续 {{六}}个月不参加党的组织生活，或不交党费，或不做党所分配的工作，被默认自行脱党
119、	毛泽东同志 “ {{为}}{{有}}{{牺}}{{牲}}{{多}}{{壮}}{{志}}、敢教日月换新天”
120、	“{{东}}{{方}}风来满眼春，花城柳暗愁杀人”
121、	根据《中华人民共和国产品质量法》规定，限期使用的产品，应当在显著位置清晰地标明生产日期和安全使用期或 {{失}}{{效}}{{日}}{{期}}
122、	总书记在讲话中使用过的名叫，治国有常，而利民为本“出自  {{《}}{{淮}}{{南}}{{子}}{{》}}
123、	1921年7月23日至8月初，中国共产党第一次全国代表大会先后在{{上}}{{海}}{{、}}{{嘉}}{{兴}}召开
124、	我国的京剧脸谱色彩丰富，红色一般标示忠勇侠义，白色一般标示阴险奸诈，黑色标示，{{忠}}{{耿}}{{正}}{{直}}
125、	发生地震时，最先感到的地震波叫“{{纵}}{{波}}“
126、	我国的宪法日是{{1}}{{2}}{{月}}{{4}}{{日}}
127、	“不似天涯，卷起杨花似雪花“出自，苏轼的《减字木兰花.立春》 作者苏轼是{{宋}}代
128、	以县级以上行政区域名称冠名的地方志书、地方综合年鉴、分别由本级人民政府负责  {{地}}{{方}}{{志}} 工作的机构按照规划组织编纂
129、	地球大气中的二氧化碳含量不算增加的主要后果是，{{产}}{{生}}{{温}}{{室}}{{效}}{{应}}
130、	2014年9月5日，总书记在庆祝全国人民代表大会成立{{ }}{{6}}{{0}}{{ }}周年大会上讲话，实践充分证明，人民代表大会制度是符合中国国情和实际、体现社会主义国家性质、保证人民当家作主
131、	“相知无远近，万里尚为邻“是唐 张九龄  的诗作，题材是{{ }}{{送}}{{别}}{{诗}}
132、	第五套人民币20元背面印的是桂林漓江山水风光中的著名景点 {{黄}}{{布}}{{倒}}{{影}}
133、	中国特色社会主义有很多特点和特征 但最本质的特征是 {{坚}}{{持}}{{中}}{{国}}{{共}}{{产}}{{党}}{{的}}{{领}}{{导}}
134、	中国第一个目标飞行器和空间实验室是 {{天}}{{宫}}{{一}}{{号}}
135、	我国全面推行营业税改征增值税是 {{2}}{{0}}{{1}}{{6}}{{年}}{{ }}
136、	北宋初期是我国书院教育的高潮期，出现了著名的，{{岳}}{{麓}}书院 白鹿洞书院、嵩阳书院
137、	中国是负责任的发展中大国，是全球气候治理的积极参与者，已经向世界承诺将于 {{2}}{{0}}{{3}}{{0}}{{年}}左右将二氧化碳排放达到峰值，并争取早日实现。
138、	我国金融服务的“三农“的主力军是{{ }}{{农}}{{村}}{{信}}{{用}}{{合}}{{作}}{{社}} 类金融机构
139、	把生态文明建设纳入中国特色社会主义事业五位一体总体布局的会议是{{ }}{{党}}{{的}}{{十}}{{八}}{{大}}
140、	重庆“古巴渝十二景“中，南滨路独占了 {{四}} 景
141、	成语，“一衣带水“中的水 是指{{ }}{{长}}{{江}}
142、	手机、电脑的芯片主要是由 {{硅}}{{ }}物质组成的
143、	股票市场上常常被提到的 “IPO”的意思是  {{首}}{{次}}{{公}}{{开}}{{发}}{{行}}{{，}}{{即}}{{公}}{{司}}{{第}}{{一}}{{次}}{{募}}{{股}}{{票}}
144、	在五大新发展理念中，最能体现，坚持以人民为中心的发展思想是 {{共}}{{享}}{{理}}{{念}}
145、	“漫云女子不英雄，万里乘风独向东诗思一帆海空阔，梦魂三岛月玲珑，…女革命家秋瑾， 家国恨中应不包括 ”{{护}}{{国}}{{运}}{{动}}{{’}}
146、	{{转}}{{变}}{{政}}{{府}}{{职}}{{能}}，是深化行政体制改革的核心实质上是解决的是政府应该做什么，不应该做什么，重点是政府、市场、社会的关系
147、	依据党的十九大报告，生态环境质量实现根本好转，美丽中国目标基本实现的时间节点是 {{2}}{{0}}{{3}}{{5}}{{年}}
148、	“语不惊人死不休”属于 {{律}}{{诗}} 题材
149、	纳税人的子女接受全日制学历教育的相关支出、按照每个子女每月{{1}}{{0}}{{0}}{{0}}元的标准扣除
150、	某托盘天平读数误差在2克以内，则分析样品应至少称 {{2}}{{0}}{{0}}{{ }}克才能保证称样相对误差小于1%
151、	中国海军诞生基地在  {{江}}{{苏}}{{ }}{{泰}}{{州}}
152、	“不谋一域者，不足以谋全局，一屋不扫，何以扫天下”体现的哲理是 {{部}}{{分}}{{反}}{{映}}{{整}}{{体}}
153、	“桃花仙人种桃树，又摘桃花换酒钱”桃花仙人是  {{唐}}{{寅}}
154、	唐代笔画《客使图.》中三位唐代官员是来自 {{鸿}}{{胪}}{{寺}}
155、	唐代阙楼作为礼制性建筑，其最高等级为 {{三}}{{出}}{{阙}}
156、	大夏国的首都是 {{重}}{{庆}}
157、	下列不属于“十三经’的是 {{史}}{{记}}
158、	某物质只含有一种元素，则该物质：{{可}}{{能}}{{是}}{{混}}{{合}}{{物}}
159、	治贫先治愚，扶贫先扶智，{{教}}{{育}}是阻断贫困代际传递的治本之策
160、	重庆得名至今已有800余年，下令改恭州为重庆的是 宋{{光}}{{宗}}{{赵}}{{惇}}{{ }}161、相对传统打印方式，3D打印的优点是 {{ }}{{满}}{{足}}{{少}}{{量}}{{化}}{{，}}{{个}}{{性}}{{化}}{{生}}{{产}}{{需}}{{求}}
162、	岁岁重阳，今又重阳，战地{{黄}}{{花}}分外香
163、	我国的个人的工资，薪金所得税缴纳个人所得税采用的是  {{超}}{{额}}{{累}}{{进}}{{税}}{{率}}
164、	正式党员不足3人的单位，应当按照地域相邻，行业相近，规模适当，便于管理的原则，成立 {{联}}{{合}}{{党}}{{支}}{{部}}
165、	不畏浮云遮望眼 出自于 {{王}}{{安}}{{石}}
166、	唐代尚马之风流行，壁画中的骏马多带有各种装饰，既好看有实际功能，其中位于马鞍下部的是 {{障}}{{泥}}
167、	秦始皇帝陵的出土文物中被誉为“青铜之冠的是{{ }}{{青}}{{铜}}{{车}}{{马}}
168、	在《孙子兵法》中，{{伐}}{{谋}}为上兵
169、	我国古代的“乐府双璧“是指 {{《}}{{孔}}{{雀}}{{东}}{{南}}{{飞}}{{》}}{{ }}{{《}}{{木}}{{兰}}{{诗}}{{》}}
170、	长江三峡是由瞿塘峡、{{巫}}{{峡}}、西陵峡组成
171、	毛泽东同志的名句“万类霸天竞自由“可以用来比喻 ”{{良}}{{好}}{{的}}{{创}}{{业}}{{环}}{{境}}
172、	{{农}}{{业}}{{生}}{{产}}{{者}}{{销}}{{售}}{{的}}{{自}}{{产}}{{农}}{{产}}{{品}}{{ }}免征增值税
173、	1941年3月，八路军三五九旅在旅长 {{王}}{{震}}的带领下，在南泥湾开展大生产运动
174、	{{海}}{{内}}{{存}}{{知}}{{己}}{{天}}{{涯}}{{若}}{{比}}{{邻}}是王勃所作
175、	2019年推动城镇化发展，抓好已经在城镇就业的农业转移人口的落户工作督促落实 {{2}}{{0}}{{2}}{{0}}年 {{1}}{{亿}}人落户目标
176、	全面抗战爆发后，八路军打的第一个大胜仗是 {{平}}{{型}}{{关}}{{大}}{{捷}}
177、	“恸哭六军俱缟素，冲冠一怒为红颜’的红颜是{{ }}{{陈}}{{圆}}{{圆}}
178、	201311月3日，在湖南湘西州花恒县十八洞，首次提出“实事求是，因地制宜，分类指导，{{精}}{{准}}{{扶}}{{贫}}，的重要指示
179、	党的{{十}}{{五}}{{大}}首次提出把按劳分配的按生产要素分配结合起来 180、武汉军运会比赛项目共设 {{2}}{{5}}{{个}}{{正}}{{式}}{{比}}{{赛}}{{和}}{{2}}{{个}}{{表}}{{演}}{{项}}{{目}}
181、	2019年1月10日，一年一度的“中国社会科学考古学论坛。2018年中国考古新发现在北京举行，四川省 {{渠}}{{县}}{{城}}{{坝}}{{遗}}{{址}}入选2018年考古新发现6项入选项目
182、	苏州园林是 {{江}}{{南}} 园林的代表
183、	我国科学家屠呦呦提取了中药成分{{ }}{{青}}{{蒿}}{{素}}  用于抗疟疾，因而获得了2015年诺贝尔
184、	阖闾大城始建于 {{周}}{{敬}}{{王}}{{六}}{{年}}   ，遗址位于江苏省常州市雪堰镇里村与无锡市胡埭镇
185、	20世纪40年代末，美国科学家  {{伽}}{{莫}}{{夫}}{{ }}等提出了大爆炸宇宙模型
186、	设立党支部委员会，党支部委员会由3至5人组成，不超过7人必要可设一名{{副}}{{书}}{{记}}
187、	{{5}}{{月}}{{1}}{{9}}{{日}}{{，}}是中国的旅游日
188、	研究表明，1980-2018年中国沿海海平面上升速率为{{3}}{{.}}{{3}}{{ }}{{毫}}{{米}}{{/}}{{年}}
189、	人们平常打点滴（吊针）用的生理盐水（氯化钠注射液）浓度是{{ }}{{0}}{{.}}{{9}}{{%}}
190、	冰心，代表作是《寄小读者》的通讯散文，成为中国{{ }}{{儿}}{{童}} 文学的奠基之作
191、	我国淡水资源在全球水资源占比 {{6}}{{%}}
192、	银行个人住房抵押贷款额度计算公式是：{{住}}{{房}}{{评}}{{估}}{{值}}{{*}}{{抵}}{{借}}{{比}}
193、   南湖清水夜无烟，耐可乘流直上天，且就洞庭赊月色，将船买酒白云边”南湖：{{洞}}{{庭}}{{湖}}
194、	除病毒外，组成生物体的基本单位是：{{细}}{{胞}}
195、	不拘一格降人才 是 {{龚}}{{自}}{{珍}} 的诗句
196、	“风急天高猿啸哀，渚清沙白鸟飞回，    是 杜甫的{{《}}{{登}}{{高}}{{》}}
197、	在1964年全国人大三届一次会上，{{周}}{{恩}}{{来}}{{ }} 提出实现四个现代化
198、	明末清初学者黄宗羲认为西方的几何学来源于 {{ }}{{《}}{{周}}{{髀}}{{算}}{{经}}{{》}}{{ }}199、人们为何成妇女为巾帼，是{{因}}{{为}}{{女}}{{人}}{{带}}{{的}}{{头}}{{饰}}{{叫}}{{巾}}{{帼}}
200、	“历览前贤国与家，成由勤俭败由奢，“勤俭能是国家昌盛，  是  {{李}}{{商}}{{隐}}的诗句
201、	世界联合学院，始创于1962年，是当今世界独具一格的全球性运动教育，第一所联合学院位于 {{“}}{{常}}{{熟}}
202、	厦门市和台南市的市树都是{{ }}{{凤}}{{凰}}{{木}}
203、	不属于我国的五大古都是 {{咸}}{{阳}}
204、	中国共产党民主革命时期第一个土地法是 {{五}}{{四}}{{指}}{{示}}
205、	我国最早一部解释词义的专著是，也是世界上第一部成体系的词典  {{ }}{{《}}{{尔}}{{雅}}{{》}}
206、	世界上现存最早的航海图是  {{《}}{{郑}}{{和}}{{航}}{{海}}{{图}}{{》}}
207、	总书记在一次讲话中引用了明代官员陈诚的诗句“绿野草铺茵，空山雪积银，四时常觉冷，六月不知春”写的是 {{ }}{{中}}{{亚}}  景色
208、	北魏时期著名农学家贾思勰所著的 {{《}}{{齐}}{{民}}{{要}}{{术}}{{》}} 是古代农学体系形成的标志
209、	“三国家门而不入 说的是{{ }}{{禹}}
210、	关于地理上“阴阳“  正确的是{{山}}{{的}}{{南}}{{为}}{{阳}}{{，}}{{水}}{{的}}{{北}}{{面}}{{为}}{{阴}}{{。}}
211、	我国的货币政策目标是：{{保}}{{持}}{{货}}{{币}}{{币}}{{值}}{{的}}{{稳}}{{定}}{{，}}{{并}}{{以}}{{此}}{{促}}{{进}}{{经}}{{济}}{{增}}{{长}}
212、	热量传递主要有三种基本方法 ，即导热、热对流和{{ }}{{热}}{{辐}}{{射}}
223、	绥芬河从我国流入：{{俄}}{{罗}}{{斯}}
224、	宪法修改，由全国人民代表大会委员或者五分之一以上的全国人民代表提议，并由全国人民代表大会以全体代表的  {{三}}{{分}}{{之}}{{二}} 以上的多数通过
225、	{{董}}{{其}}{{昌}}  是明代著名书画家，松江华亭人，“华亭画派“杰出代表，
226、	王安石名句“不畏浮云遮望眼，{{自}}{{缘}}{{身}}{{在}}{{最}}{{高}}{{层}}“
227、	机关基层党组织应当按照换届。机关党的基层委员会、总支部委员会，支部委员会书记，副书记通过选举产生 报  {{上}}{{级}}{{党}}{{组}}{{织}}{{ }}批准 228、2018年国家网络安全宣传周活动主题  “  {{网}}{{络}}{{安}}{{全}}{{为}}{{人}}{{民}}{{，}}{{网}}{{络}}{{安}}{{全}}{{靠}}{{人}}{{民}}“
229、	气体可压缩存储在钢瓶中是因为  {{分}}{{子}}{{之}}{{间}}{{有}}{{间}}{{隔}}
230、	“不拘一格降人才”是诗人（{{龚}}{{自}}{{珍}}）的诗句。
231、	“人生若只如初见”的下一句是（{{何}}{{事}}{{秋}}{{风}}{{悲}}{{画}}{{扇}}）。
232、	1937年（{{卢}}{{沟}}{{桥}}）事迹爆发，全面抗战由此开始。
233、	臭氧层能使地球上的生物免遭（{{紫}}{{外}}{{线}}）的伤害。
234、	毛泽东同志的词中“到中流击水，浪遏飞舟”是在哪一条江河（{{湘}}{{江}}）？
235、	如果小华在小丽北偏东40度的位置上，那么小丽在小华的（{{南}}{{偏}}{{西}}{{4}}{{0}}{{度}}）的位置。
236、	1949年3月11日，中国人民解放军第三野战军副司令兼副政委（{{粟}}{{裕}}）、政治部主任唐亮进驻江苏泰州，准备渡江作战事宜。
237、	人类最早认识自然规律使用的研究方法是（{{观}}{{察}}{{法}}）。
238、	林祥谦，福建闽侯尚干人，中国工人阶级的杰出代表和中国工人运动的先驱者。1923年2月4日，林祥谦领导了震撼中外的（{{京}}{{汉}}{{铁}}{{路}}{{工}}{{人}}{{大}}{{罢}}{{工}}）。
239、	提出全面深化改革总目标的会议是（{{党}}{{的}}{{十}}{{八}}{{届}}{{三}}{{中}}{{全}}{{会}}）。
240、	在十八届中央政治局第九次集体学习时的讲话中，总书记指出（{{人}}{{才}}{{资}}{{源}}）是第一资源，也是创新活动中最活跃、最为积极的因素。
241、	冰心，原名谢婉莹，福建长乐人，诗人，……成为中国（{{儿}}{{童}}）文学的奠基之作。
242、	党执政后的最大危险是（{{脱}}{{离}}{{群}}{{众}}）。
243、	大家知道，一张纸有两个面—正面和反面。但是，如果有人说能给你看一种只有一面的纸，你觉得这是真的吗？答（{{是}}{{真}}{{的}}）。
244、	（{{张}}{{之}}{{洞}}），晚清中兴四大名臣之一，任湖广总督期间……宣布废止。
245、	“山近月远觉月小，便道此山大于月。若有人眼大如天，当见山高月更阔”。这是明代思想家王守仁的《蔽月山房》，与此中哲理最接近的是（{{不}}{{识}}{{庐}}{{山}}{{真}}{{面}}{{目}}{{，}}{{只}}{{缘}}{{身}}{{在}}{{此}}{{山}}{{中}}）。
246、	集成电路自1959年被发明以来，……如我国华为公司设计的手机芯片“麒麟980”就采用了（{{7}}）纳米的最新工艺。
247、	“不畏浮云遮望眼”出自哪位诗人（{{王}}{{安}}{{石}}）？
248、	离别是中国古典诗词中最常用的主题，以下诗句（{{返}}{{景}}{{入}}{{深}}{{林}}{{，}}{{复}}{{照}}{{青}}{{苔}}{{上}}）并无离别之意。
249、	长江三峡是瞿塘峡、西陵峡和（{{巫}}{{峡}}）的总称。
250、	国家保密行政管理部门主管全国的保密工作。（{{县}}）级以上地方各级保密行政管理部门主管本行政区域的保密工作。
251、	“五峰如指翠相连，撑起炎荒半壁天”出自明代丘浚的《题五指山》，以下小说（{{西}}{{游}}{{记}}）中有与“五指山”相关的情节。
252、	我国的货币政策目标是（{{保}}{{持}}{{货}}{{币}}{{币}}{{值}}{{的}}{{稳}}{{定}}{{，}}{{并}}{{以}}{{此}}{{促}}{{进}}{{经}}{{济}}{{增}}{{长}}）。
253、	中国是负责任的发展中大国，是全球气候治理的积极参与者，已经向世界承诺将于（{{2}}{{0}}{{3}}{{0}}年）左右……。
254、	决定成立国家安全委员会的是（{{党}}{{的}}{{十}}{{八}}{{届}}{{三}}{{中}}{{全}}{{会}}）。
255、   2019年要巩固“{{三}}{{去}}{{一}}{{降}}{{一}}{{补}}”成果，……。
256、	“故人西辞黄鹤楼，烟花三月下扬州”中的烟花是指什么（{{春}}{{景}}）？
257、	我国金融服务“三农”的主力军是下列哪一类金融机构（{{农}}{{村}}{{信}}{{用}}{{合}}{{作}}{{社}}）？
258、	刘禹锡的诗句“芳林新叶催陈叶，流水前波让后波”歌颂的是以下哪种精神：
（{{自}}{{我}}{{革}}{{新}}{{的}}{{担}}{{当}}{{精}}{{神}}）。
259、	一个研究全天候气温变化的实验中，自变量和因变量各是（{{自}}{{变}}{{量}}{{是}}{{一}}{{天}}{{中}}{{的}}{{时}}{{间}}{{，}}{{因}}{{变}}{{量}}{{是}}{{温}}{{度}}）。
260、	理论和实践都证明，（{{市}}{{场}}）配置资源是最有效率的形式。
261、	关于车辆辐射，下列说法正确的是（{{电}}{{磁}}{{辐}}{{射}}{{是}}{{最}}{{常}}{{见}}{{的}}{{辐}}{{射}}{{，}}{{手}}{{机}}{{、}}{{电}}{{脑}}{{、}}{{电}}{{视}}{{都}}{{会}}{{产}}{{生}}）。
262、	“牧童骑黄牛，歌声振林樾。意欲捕呜蝉，忽然闭口立”是性灵派名家（{{袁}}{{牧}}）的诗。
263、	在统揽伟大斗争、伟大工程、伟大事业、伟大梦想中，起决定性作用的是新时代
（{{党}}{{的}}{{建}}{{设}}{{新}}{{的}}{{伟}}{{大}}{{工}}{{程}}）。
264、	改革先锋许崇德，……，堪称新中国（{{宪}}{{法}}{{学}}）奠基人之一。
265、	下列选项不属于科学史上著名的科学论战的是（{{月}}{{圆}}{{说}}{{与}}{{月}}{{缺}}{{说}}）。
266、	“路漫漫其修远兮，吾将上下求索”出自（{{离}}{{骚}}），作者是（{{屈}}{{原}}）。
267、	唐代有一种诗体叫“长吉体”，“长吉体”诗善于运用神话传说和怪诞、华美的语汇，创造出异想天开、从未有过的意象。在遣词与设色方面，多用"泣"、"腥"、"冷"、"血"、"死"之类的字眼以及"冷艳怪丽"的风格，使诗歌带有伤感冷艳的风格，体现诗人的内心情感。那么。开创“长吉体”诗歌的是【{{B}}{{ }}{{李}}{{贺}}】。。
268、	我国科学家屠呦呦提取了中药成份（{{青}}{{蒿}}{{素}}）用于抗疟疾，因而获得了2015 年诺贝尔生理学或医学奖。
269、	下列不属于“十三经”的是（{{史}}{{记}}）。
270、	“我们不要过分陶醉于我们人类对自然界有胜利。对于每一次这样的胜利，自然界都对我们进行报复”。这个论断的提出者是（{{恩}}{{格}}{{斯}}）。
271、   2016年7月1日，在庆祝中国共产党成立95周年大会上的讲话中，总书记指出，（{{发}}{{展}}）是党执政兴国的第一要务，是解决中国所有问题的关键。
272、	我国采取的“北京时间”实际上是（{{东}}{{八}}{{区}}）的时间。
273、	“宜将乘勇追穷寇，不可沽名学霸王”是指（{{项}}{{羽}}）。
274、	下列情况通常采用同行评议办法的是（{{以}}{{上}}{{全}}{{是}}）。
275、	“大江歌罢掉头东”的作者是（{{周}}{{恩}}{{来}}）。
276、	在五大新发展理念中，最能体现坚持以人为中心的发展思想的是（{{共}}{{享}}{{理}}{{念}}）。 277、“乘风好去，长空万里，直下看山河”出自辛弃疾的《太常引……》，请问
“太常引”是这首词的（{{词}}{{牌}}）。
278、	世界节能和利用新能源、可再生能源第一大国是（{{中}}{{国}}）。
279、	经济体制改革是全面深化改革的重点，其核心问题是（{{处}}{{理}}{{好}}{{政}}{{府}}{{和}}{{市}}{{场}}{{关}}{{系}}）。
280、	大夏国的首都是（{{重}}{{庆}}）。
281、   1963年出土于陕西省宝鸡市宝鸡县贾村镇的（{{何}}{{尊}}），造型……。
282、	词句“青山依旧在，几度夕阳红”的作者是（{{杨}}{{慎}}）。
283、	面粉生产车间严禁吸烟的主要原因是（{{防}}{{止}}{{爆}}{{炸}}）。
284、	“万类霜天竞自由”是毛泽东同志的名句，其体裁是（{{词}}）。
285、	关于科学和技术，下列说法不正确的是（{{科}}{{学}}{{活}}{{动}}{{以}}{{发}}{{明}}{{为}}{{核}}{{心}}{{，}}{{技}}{{术}}{{活}}{{动}}{{以}}{{发}}{{现}}{{为}}{{核}}{{心}}）。
286、	（{{热}}{{干}}{{面}}）是中国四大名面之一，也是武汉人过早的首选小吃。
287、	计算机病毒主要通过（{{磁}}{{盘}}{{与}}{{网}}{{络}}）途径传播。
288、	正式党员不足3人的单位，应当按照地域相邻、行业相近、规模适当、便于管理的原则，成立（{{联}}{{合}}{{党}}{{支}}{{部}}）。
289、	“落其实者思其（{{树}}），饮其流者怀其源”，请补足诗句。
290、	关于物质的“分子”。下列说法最正确的是（{{物}}{{质}}{{中}}{{能}}{{够}}{{独}}{{立}}{{存}}{{在}}{{并}}{{保}}{{持}}{{该}}{{物}}{{质}}{{一}}{{切}}{{化}}{{学}}{{性}}{{质}}{{的}}{{最}}{{小}}{{微}}{{粒}}）。
291、   2018年10月24日通车的港珠澳大桥……；海底隧道长（{{5}}{{.}}{{6}}）公里，是世界……。
292、	王安石《明妃曲》中写到“汉恩自浅胡恩深，人生乐在相知心”，这首诗中的
“明妃”指的是（{{王}}{{昭}}{{君}}）。
293、	“咬定青山不放松，立根原在破岩中。千磨万击还坚劲，任尔东西南北风”写的植物是（{{竹}}{{子}}）。 294、我们党历来强调德才兼备，……，最重要的是（{{政}}{{治}}{{品}}{{德}}）要过得硬。……。
295、	《雨打芭蕉》是我国哪个地方的音乐代表（{{广}}{{东}}）。
296、	《沂蒙山小调》延生于（{{临}}{{沂}}{{市}}{{费}}{{县}}），……。
297、	“面壁十年图破壁”一语出自（{{周}}{{恩}}{{来}}）的诗作。
298、	“山郡逢春复乍晴，陂塘分出几泉清？郭边万户皆临水，雪后千峰半入城”。
清代诗人王士祯这首诗写的是（{{济}}{{南}}）。
299、	碳-14断代法可以用来（{{判}}{{定}}{{完}}{{全}}{{相}}{{同}}{{地}}{{域}}{{环}}{{境}}{{下}}{{的}}{{两}}{{件}}{{物}}{{品}}{{中}}{{哪}}{{个}}{{更}}{{古}}{{老}}）。
300、	自然现象（{{春}}{{、}}{{夏}}{{、}}{{秋}}{{、}}{{冬}}{{四}}{{季}}）的交替是由地球公转产生的。
301、	中国共产党第五次全国代表大会的召开地点是（{{武}}{{汉}}）。
302、	“儿童散学归来早，忙趁东风放纸鸢”描写的是什么时候的情景（{{初}}{{春}}）？
303、	我国的货币政策目标是（{{保}}{{持}}{{货}}{{币}}{{币}}{{值}}{{稳}}{{定}}{{，}}{{并}}{{以}}{{此}}{{促}}{{进}}{{经}}{{济}}{{增}}{{长}}）。
304、	在福建宁德工作期间，总书记曾指出……，其中（{{新}}{{闻}}{{媒}}{{介}}）的监督是最经常、公开、广泛的一种监督方式。
305、	科学家要遵守科学知识和科学建制的基本规范的原因是（{{以}}{{上}}{{全}}{{是}}）。
306、	地球大气中的二氧化碳含量不断增加的主要后果是（{{产}}{{生}}{{温}}{{室}}{{效}}{{应}}）。
307、   1941年3月，八路军三五九旅长（{{王}}{{震}}）的率领下在南泥湾开展磊生产运动。
308、	世界联合学院，始创于1962年，……，中国大陆第一所世界联合学院位于
（{{常}}{{熟}}）。
309、	下面哪一联诗所表达的内涵与“吟安一个字，捻断数茎须”表达的内涵是一致的：（{{两}}{{句}}{{三}}{{年}}{{得}}{{，}}{{一}}{{吟}}{{双}}{{泪}}{{流}}）。
310、	一个圆形花坛的直径是10米，围绕花坛修一条宽2米的小路，这条小路的面积是（{{2}}{{4}}{{∏}}）。
311、	下列不是伪科学的说法是（{{通}}{{过}}{{深}}{{度}}{{学}}{{习}}{{，}}{{人}}{{工}}{{智}}{{能}}{{可}}{{以}}{{模}}{{仿}}{{人}}{{的}}{{思}}{{维}}）。
312、	朱德同志《赠诸友》诗写到“志士恨无穷，孤身走西东。投笔（从戎）去，… …”。
313、	有一位唐代诗人在对贺知章诵读《乌栖曲》时，……”这位被称之为“谪仙人”的诗人是（{{李}}{{白}}）。
314、	把生态文明建设纳入中国特色社会主义事业总体布局的是（{{党}}{{的}}{{十}}{{八}}{{大}}）。
315、	“语不惊人死不休”属于（{{律}}{{诗}}）。
316、	（{{转}}{{变}}{{政}}{{府}}{{职}}{{能}}）是深化行政体制改革的核心，……。
317、	关于归纳，下列说法不正确的是（{{简}}{{单}}{{枚}}{{举}}{{法}}{{是}}{{一}}{{种}}{{完}}{{全}}{{归}}{{纳}}{{法}}）。
318、	星座的划分和命名完全是由人决定的。……，应该摒弃。这种说法是（{{正}}{{确}}）的。
319、	打好污染防治攻坚战，要坚守阵地、巩固成果，聚集做好打赢（{{蓝}}{{天}}{{保}}{{卫}}{{战}}）等工作，……。
320、   2019年要推动城镇化发展，抓好已经在城镇就业的农业转移人口的落户工作，督促落实（{{2}}{{0}}{{2}}{{0}}）年（{{1}}{{亿}}）人落户目标，提高大城市精细化管理水平。
321、	刘禹锡诗“千淘万漉虽辛苦”的下一句是（{{吹}}{{尽}}{{狂}}{{沙}}{{始}}{{到}}{{金}}）。
322、	发生地震时，最先感到的地震波叫（{{纵}}{{波}}）。
323、	首届世界互联网大会以“{{互}}{{联}}{{互}}{{通}}{{、}}{{共}}{{享}}{{共}}{{治}}”为主题，……。
324、	下列哪个血压值属于高血压（{{1}}{{4}}{{5}}{{/}}{{9}}{{0}}{{m}}{{m}}{{H}}{{g}}）。
325、	元末明初诗人唐珙的诗……，下面四句诗正确的排列顺序是（{{③}}{{②}}{{①}}{{④}}）…
…。
326、	苏州历史悠久，风景秀美。下列诗句与苏州有关的是（{{姑}}{{苏}}{{城}}{{外}}{{寒}}{{山}}{{寺}}{{，}}{{夜}}{{半}}{{钟}}{{声}}{{到}}{{客}}{{船}}）。
327、	人类的大脑有五大方面的功能：感觉的功能、……。目前的神经科学研究对（{{感}}{{觉}}{{的}}{{功}}{{能}}{{、}}{{控}}{{制}}{{运}}{{动}}{{的}}{{功}}{{能}}{{、}}{{记}}{{忆}}{{的}}{{功}}{{能}}{{、}}{{情}}{{感}}{{和}}{{情}}{{绪}}）四种功能已有相当深入的了解。
328、	“不甘落后似天涯，卷起杨花似雪花”出自苏轼的……。作者苏轼是（{{宋}}）朝代的诗人。
329、	关于科学的概念，下列选项不正确的是（{{科}}{{学}}{{是}}{{一}}{{种}}{{很}}{{快}}{{带}}{{来}}{{经}}{{济}}{{效}}{{益}}{{的}}{{生}}{{产}}{{力}}）。
330、	长江是世界第（{{三}}）大河……。
331、	十月革命一声炮响，给中国送来了马克思列宁主义。陈独秀、（{{李}}{{大}}{{钊}}）等…
…。
332、	夏明翰的《就义诗》中写道“砍头不要紧，只要主义真”，表达的精神是（{{视}}{{死}}{{如}}{{归}}{{的}}{{坚}}{{贞}}）。
333、	王勃在诗中写到“海内存知已，天涯若比邻”，这首诗的题材是什么（{{送}}{{别}}{{诗}}）？
334、	下列三部著作成书的先后顺序是：（{{《}}{{诗}}{{经}}{{》}}{{-}}{{《}}{{春}}{{秋}}{{》}}{{-}}{{《}}{{论}}{{语}}{{》}}）。
335、	中国人民银行是否可以向任何单位和个人提供担保？（{{都}}{{不}}{{可}}{{提}}{{供}}）。
336、	机关、单位应当将涉及绝密或者较多机密级、秘密级国家秘密的机构确定为
（{{保}}{{密}}{{要}}{{害}}{{部}}{{门}}）。
337、	相对传统打印方式，3D打印的优点是（{{满}}{{足}}{{少}}{{量}}{{化}}{{、}}{{个}}{{性}}{{化}}{{生}}{{产}}{{需}}{{求}}）。
338、	标志着我国进入改革开放新时期的重要会议是（{{党}}{{的}}{{十}}{{一}}{{届}}{{三}}{{中}}{{全}}{{会}}）。
339、	“故人西辞黄鹤楼，烟花三月下扬州……”是唐代诗人（{{李}}{{白}}）的诗作。
340、	孟子认为人有“四端”，下列只有哪一项是正确的？（{{辞}}{{让}}{{之}}{{心}}{{，}}{{礼}}{{之}}{{端}}）。
341、	“风雨巴山遗恨远，至今人念大将军”说的人物是（{{邹}}{{容}}）。
342、	（{{蔡}}{{襄}}）是北宋著名的书法家、文学家……。
343、	唐代诗人白居易的《东坡种花二首》：“持钱买花树，城东坡上栽……。”中的
“东坡”位于今重庆（{{忠}}{{县}}）。
344、	《题明王打球图诗》中说：“宫殿千门白昼开，三郎沉醉打球回……，”所指的皇帝是（{{唐}}{{玄}}{{宗}}{{李}}{{隆}}{{基}}）。
345、	风雨送春归，飞雪迎春到。（{{已}}{{是}}{{悬}}{{崖}}{{百}}{{丈}}{{冰}}），犹有花枝俏。 346、关于功率和机械效率，下列说法正确的是（{{做}}{{功}}{{越}}{{快}}{{的}}{{机}}{{械}}{{，}}{{功}}{{率}}{{一}}{{定}}{{越}}{{大}}）。
347、	下列不属于八大菜系的是（{{赣}}{{菜}}{{系}}）。
348、	中国共产党建立初期，主要精力放在（{{发}}{{动}}{{工}}{{人}}{{运}}{{动}}）。
349、	陆游的名句“纸上得来终觉浅，绝知此事要躬行”可以用来比喻下面哪个情境：（{{知}}{{行}}{{政}}{{合}}{{一}}{{，}}{{将}}{{知}}{{识}}{{化}}{{为}}{{实}}{{践}}）。
350、	党的力量来自（{{组}}{{织}}）。……。
351、	“相知无远近，万里尚为邻”是唐朝张九龄的诗作，这首诗的题材是（{{送}}{{别}}{{诗}}）。
352、	“桂林山水”属于（{{喀}}{{斯}}{{特}}{{地}}{{貌}}）
353、	地处闽、浙、赣三省交界处，俗称“闽北”，（{{南}}{{平}}）
354、	京杭大运河始建于（{{春}}{{秋}}）
355、	关于我国自主研发的新成果，下列错误的是（{{有}}{{缆}}）
356、	最早采用人工呼吸方法救人的医学家是（{{张}}{{仲}}{{景}}）
357、	1938年出土于湖南长沙宁乡的商代晚期青铜礼器（{{四}}{{羊}}{{方}}{{尊}}）
358、	我家洗砚池边树，朵朵花开淡墨痕。不要人夸颜色好，只留清气满乾坤。说的是（{{梅}}{{花}}）
359、	中华人民共和国的一切权利属于（{{人}}{{民}}）
360、	唐代壁画中常见的胡服，胡服最早由（{{赵}}{{武}}{{灵}}{{王}}）引入中原
361、	我国著名神话传说《白蛇传》中“水漫金山”的故事发生在({{江}}{{苏}}{{镇}}{{江}})
362、	（{{煤}}{{炭}}{{、}}{{稀}}{{土}}{{和}}{{石}}{{油}}{{天}}{{然}}{{气}}）是内蒙古的优势矿产资源
363、	下列关于松花江表述错误的是（{{c}}）
364、	（{{泉}}{{州}}）位于福建东南，唐朝时为世界四大口岸之一，宋元时期为“东方第一大港”，被联合国唯一认定为“海上丝绸之路”起点城市 365、根据《中华人民共和国国家安全法》规定，（{{全}}{{国}}{{人}}{{民}}{{代}}{{表}}{{大}}{{会}}{{常}}{{务}}{{委}}{{员}}{{会}}）依照宪法规定，决定战争状态的宣布，决定全国总动员或者局部动员
366、	干细胞是指（{{具}}{{有}}{{自}}{{我}}{{更}}{{新}}{{能}}{{力}}{{，}}{{并}}{{且}}{{能}}{{够}}{{特}}{{化}}{{形}}{{成}}{{组}}{{成}}{{该}}{{类}}{{型}}{{组}}{{织}}{{的}}{{细}}{{胞}}）
367、	灞桥纸是（{{西}}{{汉}}）时期的一种纸
368、	漫云女子不英雄，万里乘风独向东。诗思一帆海空阔，梦魂三岛月玲珑。铜驼已陷悲回首，汗马终惭未有功。如许伤心家国恨，那堪客里度春风。这是女革命者秋瑾的《日人石井君索和即用原韵》，家国恨中应不包括（{{护}}{{国}}{{运}}{{动}}）
369、	（{{人}}{{民}}{{当}}{{家}}{{作}}{{主}}）是社会主义民主政治的本质特征
370、	“三人行，必有我师”最早是谁提出来的（{{孔}}{{子}}）
371、	下列各项描写的人物中，与其他三项不处于同一时代的是（ {{选}}{{D}}）
372、	共享发展的理念的内涵之一是全民共享，这是就共享的（{{覆}}{{盖}}{{面}}）而言的
373、	燃烧是一种发热发光的【{{A}}{{ }}{{化}}{{学}}{{反}}{{应}}】
374、	苏州的古建筑除了粉墙黛瓦、飞檐翘角，还保存相对完好的纯居住民国建筑群
（{{同}}{{德}}{{里}}）
375、	有“中国的欧几里德”“中国数学史上的牛顿”之称的是【{{A}}{{ }}{{刘}}{{徽}}】
376、	我国消耗臭氧层物质的淘汰量占发展中国家总量的【{{5}}{{0}}{{%}}】以上，成为对全球臭氧层保护贡献最大的国家
377、	唐朝文宗皇帝御封的大唐“三绝”指的是李白的诗歌、裴旻剑舞和【{{A}}{{ }}{{张}}{{旭}}{{的}}{{草}}{{书}}】
378、	以下不属于“天下之名巧”——马钧发明的是【{{D}}{{ }}{{锯}}{{子}}】
379、	祖冲之是中国南北朝时期的数学家和天文学家。他在数学方面的突破主要贡献
是圆周率的精确度计算到小数点后第7位，也就是在3.1415926和3.1415927之间。
这一成就比欧洲早了【{{C}}{{ }}{{1}}{{0}}{{0}}{{0}}】多年。
380、	魏晋时期任太医令得医学家王叔和整理传播了张仲景的《伤寒杂病论》，并著述了【{{A}}{{ }}{{脉}}{{经}}】
381、	下面哪一诗句与“纸上得来终觉浅”同出自于一首诗？（{{A}}{{ }}{{少}}{{壮}}{{工}}{{夫}}{{老}}{{始}}{{成}}）
382、	我国最早求出圆周率第七位有效数字的人是【{{D}}{{ }}{{祖}}{{冲}}{{之}}】
383、	当光从一种介质穿到另一种介质中时，它会【{{D}}{{ }}{{以}}{{上}}{{全}}{{是}}】
384、	下面选项不是霾主要来源的有【{{C}}{{ }}{{海}}{{水}}{{蒸}}{{发}}】
385、	秦自商演变法以来，推行军功爵制，当时的军功爵位共有多少级？【{{D}}{{ }}{{2}}{{0}}】
386、	词句“青山依旧在，几度夕阳红” 的作者是（{{C}}{{ }}{{杨}}{{慎}}）。
387、	目前所发掘唐代贵族墓葬中规模最大、等级最高、结构最复杂的一座墓葬是【{{C}}{{ }}{{懿}}{{德}}{{太}}{{子}}{{墓}}】
388、	党的力量来自【{{组}}{{织}}】。党的全面领导、党的全部工作要靠党的坚强组织体系去实现。
389、	关于物质的“分子”，下列说法最正确的是【{{A}}{{ }}{{物}}{{质}}{{中}}{{能}}{{够}}{{独}}{{立}}{{存}}{{在}}{{并}}{{保}}{{持}}{{该}}{{物}}{{质}}{{一}}{{切}}{{化}}{{学}}{{性}}{{质}}{{的}}{{最}}{{小}}{{微}}{{粒}}】
390、	董必武同志的诗句“烟雨迷蒙访旧踪”访的是浙江嘉兴【{{D}}{{ }}{{南}}{{湖}}】
391、	唐朝时，荆南地区每年都要解送举人赴京应考，可接连四五十年没有考中一人。于是人们便将荆南一带成为“天荒”，并把荆南解送的考生成为“天荒解”。这种状况一直持续到唐宣宗大中四年（850年），这一年，荆南解送的应试生中，有个叫刘蜕的人终于考中了进士，破了“天荒解”，于是人们将此事称为“【{{破}}{{天}}{{荒}}】”
392、	王勃在诗中写到“海内存知己，天涯若比邻”，至少我诗的题材是什么？（C 送别诗）
393、	著名的《观鸟捕蝉图》来自以下哪座唐代墓葬？【{{A}}{{ }}{{章}}{{怀}}{{太}}{{子}}{{墓}}】
394、	纳税人在中国境内接受学历继续教育的支出，在学历（学位）教育期间按照每月【{{A}}{{ }}{{4}}{{0}}{{0}}】元定额扣除 395、采用引漳灌邺的方法是的邺城民富兵强，成为战国时期卫国的东北重镇的人是（{{西}}{{门}}{{豹}}）
396、	《孟子·尽心》中提出“君子有三乐”，以下哪个不属于“三乐”？【{{B}}{{ }}{{聚}}{{钱}}{{财}}{{而}}{{有}}{{之}}】
397、	元好问的名句“问世间，情为何物，直教生死相许”的原词写的是【{{D}}{{ }}{{大}}{{雁}}】
398、	国家秘密的密级、保密期限和知悉范围的变更，下列有决定权的部门是【{{A}}{{ }}{{原}}{{定}}{{密}}{{机}}{{关}}{{、}}{{单}}{{位}}】和【{{B}}{{ }}{{原}}{{定}}{{密}}{{机}}{{关}}{{、}}{{单}}{{位}}{{的}}{{上}}{{级}}{{机}}{{关}}】
399、	国家秘密及其密级的具体范围，由【{{C}}{{ }}{{国}}{{家}}{{保}}{{密}}{{行}}{{政}}{{管}}{{理}}{{部}}{{门}}】分别会同外交、公安、国家安全和其他中央有关机关规定
400、	中国共产党建立初期，主要精力放在【{{B}}{{ }}{{发}}{{动}}{{工}}{{人}}{{运}}{{动}}】。
401、	“每逢佳节倍思亲”中的“佳节”指的是传统节日中的【{{C}}{{ }}{{重}}{{阳}}{{节}}】
402、	电影《地道战》中日本鬼子企图破坏地道，对高家庄进行了炮轰，高传宝采用了“放鬼子进庄”的战术，让鬼子的炮火“使不上劲”，当所有民兵都钻进地道后，高传宝对着传声筒喊：“各小组注意，你们各自为战，【{{打}}{{一}}{{枪}}{{换}}{{一}}{{个}}{{地}}{{方}}】，不准放空枪，开火”。充分展现了抗日军民的战斗智慧。
403、	在1964年全国人大三届一次会议上【{{B}}{{ }}{{周}}{{恩}}{{来}}】同志代表党和政府提出实现 “四个现代化”奋斗目标。四个现代化具体指工业现代化、农业现代化、国防现代化、科学技术现代化。
404、	毛泽东的词句“世上无难事”，下一句是【{{D}}{{ }}{{只}}{{要}}{{肯}}{{登}}{{攀}}】
405、	正在通电使用的灯泡反复出现暗亮的现象，可能是电路存在（{{接}}{{触}}{{不}}{{良}}）故障
406、	中国目前也积极推动能源互联网规划。预计到2020年和【{{A}}{{ }}{{2}}{{0}}{{2}}{{5}}{{年}}】，中国清洁能源装机容量分别可以达到11410亿和17亿千瓦左右。
407、	总书记在讲话中使用过名句“治国有常，而利民为本”，请问此句出自《【{{D}}{{ }}{{淮}}{{南}}{{子}}】》
408、	【{{D}}{{ }}{{干}}{{细}}{{胞}}】是一种能够再生为人体内各种类型细胞的细胞，有“万能细胞” 之称
409、	干细胞是指（{{B}}）
410、	《二十四史》不包括下列【{{D}}{{ }}{{《}}{{清}}{{史}}{{》}}】
411、	不属于二十四史的是：【{{A}}{{左}}{{传}}】
412、	四川省【{{A}}{{ }}{{理}}{{县}}{{桃}}{{坪}}{{羌}}{{寨}}{{保}}{{护}}{{与}}{{复}}{{原}}】获联合国教科文组织2016年度文化遗产保护“杰出出项目奖”
413、	“风急天高猿啸哀，渚清沙白鸟飞回。无边落木萧萧下不尽，长江滚滚来。” 是唐代诗人杜甫所作【{{C}}{{ }}{{《}}{{登}}{{高}}{{》}}】中的前四句。
414、	2018年【{{1}}{{1}}】月【{{9}}】日，中共中央总书记、国家主席、中央军委书记在人民大会堂向国家综合性消防救援队伍授旗并致训词
415、	湄公河是东南亚重要的国际河流，其上游是我国境内的【{{B}}{{ }}{{澜}}{{沧}}{{江}}】
416、	党支部党员大会是党支部的议事决策机构，由全体党员参加，一般【{{B}}{{ }}{{每}}{{季}}{{度}}】召开1次
417、	古代社会人们尊称对方的女儿是（{{令}}{{嫒}}）
418、	中国现存最早的一幅山水画是【{{B}}{{ }}{{《}}{{游}}{{春}}{{图}}{{》}}】
419、	绝密级国家秘密载体应当在符合国家保密标准的设施、设备中保存，并指定专人管理；未经【{{D}}{{ }}{{原}}{{定}}{{密}}{{机}}{{关}}{{、}}{{单}}{{位}}{{或}}{{者}}{{其}}{{上}}{{级}}{{机}}{{关}}】批准，不得复制和摘抄。
420、	作风问题本质上是（{{党}}{{性}}{{问}}{{题}}）
421、	许多国家的著名城市都是沿河而建的，下列哪一组国家、城市、河流的组合是正确的【{{A}}{{ }}{{法}}{{国}}{{-}}{{巴}}{{黎}}{{-}}{{塞}}{{纳}}{{河}}】
422、	中国共产党成立后，积极发动工农群众开展革命斗争，中国共产党第一次独立领导并取得完全胜利的工人斗争是（{{A}}{{ }}{{安}}{{源}}{{路}}{{矿}}{{工}}{{人}}{{罢}}{{工}}）
423、	2019年要加大“三区三州”等深度贫困地区和特殊贫困群众脱贫攻坚力度，减少和防止脱贫人口放平。“三区三州”指的是【{{A}}{{ }}{{西}}{{藏}}】、【{{B}}{{ }}{{四}}{{省}}{{藏}}{{区}}】、【{{C}}{{ }}{{新}}{{疆}}{{南}}{{疆}}{{四}}{{地}}{{州}}】三区，【{{D}}{{ }}{{四}}{{川}}{{凉}}{{山}}{{州}}】、【{{E}}{{ }}{{云}}{{南}}{{怒}}{{江}}{{州}}】、【{{F}}{{ }}{{甘}}{{肃}}{{临}}{{夏}}{{州}}】三州。 424、新疆是中国领土不可分割的一部分。在汉代开始，新疆地区正式成为中国版图的一部分。1884年清政府在新疆地区建省。新疆【{{B}}{{ }}{{1}}{{9}}{{4}}{{9}}{{年}}】和平解放，【{{1}}{{9}}{{5}}{{5}}】10 月1日成立新疆维吾尔自治区
425、	下列是我国古代的一些历史文化名人，其中属于两汉时期的是【{{C}}】
426、	“人生自古谁无死，留取丹心照汗青”的作者是【{{A}}{{ }}{{文}}{{天}}{{祥}}】
427、	1937年7月7日，抗日战争全面爆发。11月20日，国民政府正式迁都（{{重}}{{庆}}）市
428、	可以设置政法委员会的党组织不包括是【{{D}}{{ }}{{乡}}{{镇}}{{（}}{{街}}{{道}}{{）}}{{党}}{{委}}】
429、	禁止在【{{C}}{{ }}{{中}}{{小}}{{学}}{{校}}{{园}}】附近开办营业性歌舞厅，互联网上网服务营业场所等不适宜未成年人生活的场所
430、	纳税人赡养一位及以上被赡养人的赡养支出，纳税人为独生子女的，按照每月【{{D}}{{ }}{{2}}{{0}}{{0}}{{0}}】元的标准定额扣除。
431、	【{{A}}{{ }}{{各}}{{港}}{{口}}{{海}}{{事}}{{管}}{{理}}{{机}}{{构}}】是国际航行船舶联合登临检查的召集单位，负有联合登临检查的组织协调
432、	“尽道隋亡为此河，至今千里赖通波”中的“此河”是指【{{B}}{{ }}{{大}}{{运}}{{河}}】
433、	企业违反【{{B}}{{ }}{{集}}{{体}}{{合}}{{同}}】，侵犯职工劳动权益的，工会可以依法要求【企业】承担责任。
434、	机关、单位对所产生的国家秘密事项，应当按照【{{A}}{{ }}{{国}}{{家}}{{秘}}{{密}}{{及}}{{其}}{{密}}{{级}}{{的}}{{具}}{{体}}{{范}}{{围}}{{的}}{{规}}{{定}}】确定密级，同时确定保密期限和知悉范围。
435、	唐朝著名医学家孙思邈所著的【{{C}}{{ }}{{《}}{{备}}{{急}}{{千}}{{金}}{{要}}{{方}}{{》}}】中明确指出：“君亲有疾不能疗之者，非忠孝也”，把医学当作儒者尽孝道德必修之学。
436、	地方志书每（{{2}}{{0}}）年左右编修一次
437、	最早提出“中国共产党”这一名称是【{{C}}{{ }}{{蔡}}{{和}}{{森}}】
438、	提出“天下兴亡，匹夫有责”的思想家是【{{C}}{{顾}}{{炎}}{{武}}】
439、	“知屋漏者在宇下，知政失者在草野”出自【{{A}}{{ }}{{汉}}{{代}}】政论家王充《论衡》 440、国家秘密的知悉范围，应当根据【{{B}}{{ }}{{工}}{{作}}{{需}}{{要}}】限定在最小范围
441、	根据《中华人民共和国反恐怖主义法》规定，任何单位和个人都有协助，配合有关部门开展反恐主义工作的义务，发现恐怖活动嫌疑或者恐怖活动嫌疑人员的，应当及时向【{{公}}{{安}}{{机}}{{关}}】和有关部门报告。
442、	京沪高铁全长【{{C}}{{ }}{{1}}{{3}}{{1}}{{8}}】公里
443、	政府支持与促进科学技术事业发展的方式有【{{D}}{{ }}{{以}}{{上}}{{全}}{{是}}】
444、	雷锋同志的故乡是【{{B}}{{ }}{{湖}}{{南}}{{省}}{{长}}{{沙}}{{市}}】
445、	2019年2月18日，中共中央、国务院印发的《粤港澳大湾区发展规划纲要》明确，要推进“【{{C}}{{ }}{{广}}{{州}}{{-}}{{深}}{{圳}}{{-}}{{香}}{{港}}{{-}}{{澳}}{{门}}】”科技创新走廊建设，探索有利于人才、资本、信息、技术等创新要素跨境流动和区域融通的政策举措，共建粤港澳大湾区大数据中心和国际化创新平台。
446、	中国十大名茶中采用茶果间作种植方式的是【{{C}}{{ }}{{碧}}{{螺}}{{春}}】
447、	饮酒后或者醉酒驾驶机动车发生重大交通事故构成犯罪的，依法追究刑事责任，吊销机动车驾驶证，【{{D}}{{ }}{{终}}{{生}}】内不得申请机动车驾驶证
448、	世界上最早种植水稻的国家是【{{中}}{{国}}】
449、	【{{C}}{{ }}{{群}}{{众}}{{路}}{{线}}】是永葆党的青春活力和战斗力的重要传家宝，必须做到教育和实践两手抓，使马克思主义群众观点深深植根于思想中、真正落实到行动上。
450、	川剧主要由昆腔、【{{B}}{{ }}{{高}}{{腔}}】、胡琴、弹戏、灯调五种声腔组成
451、	“一日不见如隔三秋”中的“三秋”是指【{{C}}{{ }}{{三}}{{个}}{{季}}{{度}}】
452、	马球在唐代被称为【{{波}}{{罗}}{{球}}】
453、	杜牧的诗作“二十四桥明月夜，玉人何处教吹箫”，其中 24桥至扬州著名景点【{{B}}{{ }}{{瘦}}{{西}}{{湖}}】中的一个地标景观。
454、	中国最大的岛屿是【{{台}}{{湾}}】
455、	2008年6月7日，常州【{{B}}{{ }}{{梳}}{{篦}}】经国务院批准列入第二批国家级非物质文化遗产名录。 456、2019年《政府工作报告》指出，过去一年，国内生产总值增长6.6%，总量突破
【{{C}}{{ }}{{9}}{{0}}{{万}}】亿元。
457、	明朝末年，地方志不仅在中国大地上牢牢扎根，还传播到了日本。陈元赟为毛利辉元用汉字编写了一卷【{{C}}{{ }}{{《}}{{长}}{{门}}{{国}}{{志}}{{》}}】，在中日关系史上留下了一段佳话
458、	2019年《政府工作任务》中指出，改革完善高职院校考试招生办法，鼓励更多应届高中毕业生和退役军人、下岗职工、农民工等报考，今年大规模扩招【{{A}}{{ }}{{1}}{{0}}{{0}}】万人。
459、	习近平总书记指出，【{{A}}{{ }}{{政}}{{治}}{{纪}}{{律}}{{和}}{{政}}{{治}}{{规}}{{矩}}】是党最根本、最重要的纪律，遵守政治纪律和政治规矩是遵守党的全部纪律的基础。
460、	下面这首诗是1991年1月9日习近平同志创作，题目是《【{{军}}{{民}}{{情}}】·七律》： “挽住云河洗天青，闽山闽水物华新。小梅正吐黄金蕊，老榕先掬碧玉心。君驭南风冬亦暖，我临东海情同深。难得举城作一庆，爱我人民爱我军。”
461、	毛泽东《七律·和柳亚子先生》中“牢骚太盛防肠断”的下一句诗是【{{D}}{{ }}{{风}}{{物}}{{长}}{{宜}}{{放}}{{眼}}{{量}}】
462、	党支部党员大会是党支部的议事决策机构，由全体党员参加，一般【{{B}}{{ }}{{每}}{{季}}{{度}}】召开1次
463、	林徽因，代表作《你是人间四月天》、《莲灯》、《九十九度中》等。其中，（{{《}}{{你}}{{是}}{{人}}{{间}}{{四}}{{月}}{{天}}{{》}}）最为大众熟知，广为传诵。
464、	泥石流是商区沟谷中，由暴雨、冰雪融化等发的含有大量泥沙石块的特殊洪流。
在野外如果突遇泥石流来袭，正确的做法是【{{A}}{{ }}{{向}}{{与}}{{泥}}{{石}}{{流}}{{方}}{{向}}{{垂}}{{直}}{{的}}{{两}}{{边}}{{山}}{{坡}}{{上}}{{爬}}】
EOD;

        $pattern = "/\d+、/";
        $arr     = preg_split($pattern, $str2);
        $data    = [];
        foreach ($arr as $key => $value) {
            $temp   = explode('{{', $value, 2);
            $data[] = [
                'ask'    => str_replace('{{', '', str_replace('}}', '', $value)),
                'answer' => mb_substr(str_replace(' ', '', isset($temp[1]) ? htmlentities(str_replace('}}', '', str_replace('{{', '', $temp[1]))) : ''), 0, 80),
                'type'   => 'challenges',
            ];
        }

        \App\Models\Question::insert($data);
    }


}
