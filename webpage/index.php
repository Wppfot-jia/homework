<?php
header("content-type:text/html;charset=utf-8");

$conn = @mysql_connect('localhost','root','');

mysql_select_db('zhihu');

mysql_query("set names utf8");

$sql = "select * from text order by id desc";

$res = mysql_query($sql);

$rows = array();

while($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}

?>























<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>首页 - 知乎</title>
        <link href="../css/index.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
        </script>
    </head>
    <body>
        
                    <!--这里是提问的板块,放到这里-->
        
        <div class="nav_question_contain" id="alert_tiwen">
            <div class="tiwen-top">
                <span>提问</span>
                <img src="../img/delate-tiwen.png" onclick="delate_tiwen()">
            </div>
            <ul class="tiwen-body-first">
                <li>知乎是一个真诚、友善、认真、互助的社区</li>
                <li>我们希望每一个疑惑都有解答，好的问题更容易得到好答案<a href="#" style="text-decoration:none;color:rgb(34,85,153);"> 如何提一个好问题？</a></li>
            </ul>
            <ul class="tiwen-body-secend">
                <li>提问应遵循真实、客观、简洁、明确、规范的原则</li>
                <li>1、提问应尽可能简洁明了，避免「请问」「有谁知道」「谢谢！」等与问题本身无关的附加语。</li>
                <li>2、应避免使用「为神马」「童鞋」「肿么办」等网络用语。</li>
                <li>3、基于个人判断或传言的问题，在提问时应在补充说明里详细说明原由</li>
                <li>4、避免太宽泛问题，如调查性的问题容易变成每个人都可以发表观点，但对其他人没有价值</li>
            </ul>
            <ul class="tiwen-body-third">
                <li>知乎禁止这些提问</li>
                <li>1、和已有问题完全重复的问题，为避免重复，提问前可以先进行搜索</li>
                <li>2、招聘 / 求职、交易 / 合作、寻人 / 征友、召集 / 赠送、求码类内容</li>
                <li>3、投票类问题。例如：你支持方舟子还是韩寒？</li>
                <li>4、作业或其他希望代为完成个人任务类的内容，以及针对个人具体病情的求医问药类问题完整的提问建议可查看<a href="#" style="text-decoration:none;color:rgb(34,85,153);">&nbsp;知乎的提问规范有哪些？</a></li>
            </ul>
            <ul class="tiwen-body-forth">
                <li>提问前请先搜索</li>
            </ul>
            <ul class="tiwen-body-fifth">
                <li><input type="text" placeholder="请输入你的问题"></li>
            </ul>
        </div>

                <!--这里是提问的板块,放到这里-->




        <div class="nav" id="nav">
            <div class="nav_contain">
                <div class="search">
                    <a href="index.html"><img class="s1" src="../img/search-zhihu.png"></a>
                    <form method="get" action="index.html">
                        <input id="search-input" type="text" placeholder="&nbsp;搜索你感兴趣的内容..." value="">
                        <input id="search-search" type="image" src="../img/search-2.png">
                    </form>
                </div>
                
                <ul>
                    <a href="#"  onmouseout="omoutLi1()" onmouseover="omoverLi1()"><li id="li1" onclick="ocLi1()">消息</li></a>
                    <a href="#" onmouseout="omoutLi2()" onmouseover="omoverLi2()"><li id="li2" onclick="ocLi2()">发现</li></a>
                    <a href="#" onmouseout="omoutLi3()" onmouseover="omoverLi3()"><li id="li3" onclick="ocLi3()">话题</li></a>
                    <a href="#" onmouseout="omoutLi4()" onmouseover="omoverLi4()"><li id="li4" onclick="ocLi4()">首页</li></a>
                </ul>
                    
                <div class="nav_personal" id="nav_personal" onmouseover="omoverNavp()" onmouseout="omoutNavp()">
                    <img src="../img/2.png">
                    <span>王佳</span>
                    <ul id="ul">
                        <a href="./history.html"><li id="Li1$" onmouseout="omoutLi1$()" onmouseover="omoverLi1$()">我的主页</li></a>
                        <a href="#"><li id="Li2$" onmouseout="omoutLi2$()" onmouseover="omoverLi2$()">私信</li></a>
                        <a href="#"><li id="Li3$" onmouseout="omoutLi3$()" onmouseover="omoverLi3$()">设置</li></a>
                        <a href="../denglu.html" target="_top"><li id="Li4$" onmouseout="omoutLi4$()" onmouseover="omoverLi4$()">退出</li></a>
                    </ul>
                </div>
                
                <div class="nav_question" onclick="tiwen()">提问</div>
            </div>
        </div>
        <div class="contain" id="contain">
            <div class="left">
                <div class="left_first">
                    <div class="first_top">
                        <img src="../img/2.png">
                        <div class="first_left">
                            <ul>
                                <li>提问</li>
                                <li>回答</li>
                                <a href="question.html" target="_blank"><li>写文章</li></a>
                            </ul>
                            <span>草稿</span>
                        </div>
                    </div>
                    <div class="first_bottom">
                        <span class="botton_first"><b>最新动态</b></span>
                        <span class="botton_secend">设置</span>
                    </div>
                </div>
                <ul>
                    
                    <div class="delated" id="delated">
                        <span>此内容将不会在动态中再次显示 • 撤销</span>
                        <img onclick="ocDelated()" src="../img/delate.png">
                    </div>
                    
                    <div class="open" id="open_$">
                        <div class="open-left">
                            <img src="../img/cate.png">
                            <div class="good" id="good_te" onclick="ocGood_te()" onmouseover="omoverGood_te()" onmouseout="omoutGood_te()">322</div>
                            <div class="good" id="bad" onclick="ocBad_te()" onmouseover="omoverBad_te()" onmouseout="omoutBad_te()">-1</div>
                            <div class="shouqi" onclick="ocShouqi()">收起</div>
                        </div>
                        <div class="open-right">
                            <div class="open-first">
                                <span>热门内容,来自: </span><span>美食</span>
                                <img id="de1" onclick="ocDe1()" src="../img/delate.png">
                            </div>
                            <div class="open-secend">
                                <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">煮泡面时，如何正确地打鸡蛋？</span></a>
                            </div>
                            <div class="open-third">
                                <span class="open-third-left">下厨房, </span>
                                <span class="open-third-right">唯有美食与爱不可辜负</span>
                            </div>
                            <div class="open-forth">
                                <span id="new_te">322</span><span>人赞</span>
                            </div>
                            <div class="open-fifth">
                                <p>吃泡面的时候，你喜欢吃十二分熟的鸡蛋，还是溏心蛋，又或是碎蛋汤？你有纠结过该什么时候打鸡蛋进去，鸡蛋熟得刚刚好又不会碎吗？看完这篇，学会N种方法花式打鸡蛋！ 面饼有一面有“坑”，你们发现了吗？泡面的面饼不是有一面是凹进去的么…</p>
                            </div>
                            <div class="open-sixth">
                                <div class="six-1">-- 花生猪脚皮冻 --</div>
                                <div class="six-2">by 啊呜511</div>
                                <img class="eat-1" src="../img/eat-1.png">
                                <div class="six-2">-- 用料 --</div>
                                <div class="six-3">猪脚 2个<br>猪皮  1张<br>花椒、八角、桂皮    适量<br>水   适量<br>姜   1块<br>老抽  5克<br>生抽  20克<br>冰糖  3-5小块<br>料酒  25克<br>盐   适量<br>蚝油  1茶匙<br>【辅料】<br>花生（可选黄豆或者莲藕）    250克</div>
                                <div class="six-2">-- 做法 --</div>
                                <div class="open-fifth">
                                    <p>❶ 猪脚买来先检查一下猪毛是否处理干净，用镊子拔掉残留的毛。斩块浸泡30分钟倒掉血水，冷水上锅煮开后捞出，反复冲洗，洗净血沫。加入姜一块，倒入没过猪脚的水，放入压力锅内胆，摁猪蹄键煮至熟烂。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-2.png">
                                <div class="open-fifth">
                                    <p>❷ 捞出肉块。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-3.png">
                                <div class="open-fifth">
                                    <p>❸ 戴手套将骨头挑出，放置一旁备用。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-4.png">
                                <div class="open-fifth">
                                    <p>❹ 肉皮整张冷水下锅煮沸汆烫。捞出冲洗，用刀将猪皮内侧和外侧的油腻刮干净。刮一遍冲洗一下，如此反复几次。肉皮上如果有残留的毛用镊子拔掉。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-5.png">
                                <div class="open-fifth">
                                    <p>❺ 处理干净后切细条，热水洗干净。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-6.png">
                                <div class="open-fifth">
                                    <p>❻ 花生洗干净，将猪皮、猪脚肉、花生一起放入锅中，倒入煮猪脚的汤。上锅开大火熬煮。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-7.png">
                                <div class="open-fifth">
                                    <p>❼ 花椒、八角和桂皮装入料盒放入锅中。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-8.png">
                                <div class="open-fifth">
                                    <p>❽ 加入冰糖、姜片、老抽、生抽，加入料酒、蚝油。大火煮至沸腾后盖上锅盖转小火炖煮80-90分钟，开盖加入盐，转大火。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-9.png">
                                <div class="open-fifth">
                                    <p>❾ 提起勺子取少许汤汁尝一下味道做最后调整即可关火。捞出料包和姜片，将肉汤倒入适合的容器中即可。</p>
                                </div>
                                <img class="eat-1" src="../img/eat-10.png">
                                <div class="open-fifth">
                                    <p>❿ 自然冷却后即可成型，吃不完的放入冰箱保存，食用时脱模切件配上料汁即可上桌</p>
                                </div>
                                <img class="eat-1" src="../img/eat-11.png">
                                <div class="six-2">-- 小贴士 --</div>
                                <div class="open-fifth">
                                    <p>❶ 调味请随个人喜好调整。老抽的分量依喜好的颜色增减，慢慢加，太黑了可是会影响食欲滴。</p>
                                </div>
                                <div class="open-fifth">
                                    <p>❷ 可以搭配喜欢的料汁食用，老家的时候喜欢配蒜泥，或者香醋、生抽、辣椒油调起来，简单好味。</p>
                                </div>
                                <div class="open-fifth">
                                    <p>点击阅读原文，查看更多猪肉烧法~</p>
                                </div>
                            </div>
                            <div class="open-seventh">
                                <span>+关注专栏&nbsp;&nbsp;&nbsp;533 条评论&nbsp;&nbsp;&nbsp;分享 • 举报 • 去往文章页</span>
                                <img onclick="close$()" src="../img/shou.png">
                            </div>
                        </div>
                    </div>

                    

                    <?php foreach($rows as $k=>$v):?>
                    <li class="massage" id="mass">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/zhiha.png">
                                <div class="good" id="good1" onclick="ocGood1()" onmouseover="omoverGood1()"
                                onmouseout="omoutGood1()">8648</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span><?php echo $v['topic']?></span>
                                    <img id="de1-m" onclick="ocDe1_m()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);"><?php echo $v['title']?></span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">新内容, </span>
                                    <span class="main-third-right">展开完美</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img2/<?php echo $v['image']?>"> 
                                    </div>
                                    <div class="main-forth-word">
                                        <?php echo $v['text']?>
                                        <div class="show" id="show" onmouseover="onmouseoverShow()" onmouseout="onmouseoutShow()" ><span onclick="open$()">显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>1037条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>
                    







                    <li class="massage" id="mass">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/cate.png">
                                <div class="good" id="good1" onclick="ocGood1()" onmouseover="omoverGood1()"
                                onmouseout="omoutGood1()">322</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span>美食</span>
                                    <img id="de1-m" onclick="ocDe1_m()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">煮泡面时，如何正确地打鸡蛋？</span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">下厨房, </span>
                                    <span class="main-third-right">唯有美食与爱不可辜负</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img/noodle.png"> 
                                    </div>
                                    <div class="main-forth-word">
                                        吃泡面的时候，你喜欢吃十二分熟的鸡蛋，还是溏心蛋，又或是碎蛋汤？你有纠结过该什么时候打鸡蛋进去，鸡蛋熟得刚刚好又不会碎吗？看完这篇，学会N种方法花式打鸡蛋！ 面饼有一面有“坑”，你们发现了吗？泡面的面饼不是有一面是凹进去的么…
                                        <div class="show" id="show" onmouseover="onmouseoverShow()" onmouseout="onmouseoutShow()" ><span onclick="open$()">显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>1037条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="massage">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/cartoon.png">
                                <div class="good" id="good2" onmouseover="omoverGood2()"
                                onmouseout="omoutGood2()" onclick="ocGood2()">1034</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span>动漫</span>
                                    <img id="de2" onclick="ocDe2()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">如何评价新海诚？</span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">lens, </span>
                                    <span class="main-third-right">&quot;即使是一道最微弱的光,我们也要把它洒...&quot;</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img/xinhaicheng.png"> 
                                    </div>
                                    <div class="main-forth-word">
                                        《你的名字》在上映仅28天，票房即超过百亿日元。这是日本百亿级动画电影中，唯一一部非吉卜力工作室制作的影片。截至11月28日，该片已经超过宫崎骏的《幽灵公主》，成为动画影史上票房第三的作品。 导演——新海诚也一下子被推到了聚光灯之… 
                                        <div class="show"><span>显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>460条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="massage">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/tour.png">
                                <div class="good" id="good3" onmouseover="omoverGood3()"
                                onmouseout="omoutGood3()" onclick="ocGood3()">924</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span>旅行</span>
                                    <img id="de3" onclick="ocDe3()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">骗术大全之意大利 | 100美元的幸运绳？这真是一个悲伤的故事</span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">穷游锦囊, </span>
                                    <span class="main-third-right">有用,有趣,能救命</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img/police.png"> 
                                    </div>
                                    <div class="main-forth-word">
                                        和平年代也有激荡的风云！ 请时刻铭记：在冰冷的钢枪和火热的胸膛背后，我们才会有“指点江山、激扬文字、粪土当年万户侯”的豪气和底气！ 《当那一天来临》是2017年晚会上我最喜欢的歌曲，因此查询了一下相关背景。这是一首十多年前老歌，原唱是…
                                        <div class="show"><span>显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>344条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="massage">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/picture.png">
                                <div class="good" id="good4" onmouseover="omoverGood4()"
                                onmouseout="omoutGood4()" onclick="ocGood4()">3851</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span>摄影</span>
                                    <img id="de4" onclick="ocDe4()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">2016年,你拍过的最棒的图片是那一张？</span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">ENJOY精选美食电商, </span>
                                    <span class="main-third-right">ENJOY精选美食电商</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img/photo.png"> 
                                    </div>
                                    <div class="main-forth-word">
                                        我们很难给出一个评价就是我们拍出来的这些照片哪个是最好的，都那么棒，或许大家可以选出一张来： 囿于科技限制，还无法将美食的色、香、味、形、境全然地摆在你的面前。可是，他们独具慧眼，懂得用镜头与食物对话，捕捉美味的灵魂。他们的…
                                        <div class="show"><span>显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>65条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="massage">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/car.png">
                                <div class="good" id="good5" onmouseover="omoverGood5()"
                                onmouseout="omoutGood5()" onclick="ocGood5()">1719</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span>汽车</span>
                                    <img id="de5" onclick="ocDe5()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">开车不用慌，老司机带带你 | 新书上架📚？</span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">知乎电子书, </span>
                                    <span class="main-third-right">你很忙,但知识不慌张。</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img/cars.png"> 
                                    </div>
                                    <div class="main-forth-word">
                                        私家车的普及和增多，使得越来越多人加入考驾照大军。不管有没有车开，但证都得先揣在兜里。我有一个朋友，拿到了驾照但从来不开车，问他为什么，答曰「我开的车我自己都不敢坐」。还有个朋友，拿证后第一次开车跟人发生刮蹭。之后再也不开车… 
                                        <div class="show"><span>显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>3280条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="massage">
                        <div class="main">
                            <div class="main-left">
                                <img src="../img/zhengzhi.png">
                                <div class="good" id="good6" onmouseover="omoverGood6()"
                                onmouseout="omoutGood6()" onclick="ocGood6()">624</div>
                            </div>
                            <div class="main-right">
                                <div class="main-first">
                                    <span>热门内容,来自: </span><span>政治</span>
                                    <img id="de6" onclick="ocDe6()" src="../img/delate.png">
                                </div>
                                <div class="main-secend">
                                    <a href="https://zhuanlan.zhihu.com/p/23733336" target="_blank"><span style="color:rgb(34,85,153);">如何评价 2016 年 11 月 8 日美国总统大选结果？</span></a>
                                </div>
                                <div class="main-third">
                                    <span class="main-third-left">iWeekly周末画报, </span>
                                    <span class="main-third-right">全球视角</span>
                                </div>
                                <div class="main-forth">
                                    <div class="main-forth-img">
                                        <img src="../img/human.png"> 
                                    </div>
                                    <div class="main-forth-word">
                                        支持维塔斯维权，对芒果台的营销方式感到恶心。 这么大的电视台，却在未经原歌手同意要求迪玛希换歌，但在被起诉后，微博的热搜却是维塔斯起诉迪玛希侵权，企图用这转移大家注意力且再度营销节目，整个做法简直称得上是恶劣。首先，稍微关…
                                        <div class="show"><span>显示全部</span></div>
                                    </div>
                                </div>
                                <div class="main-fifth">
                                    <span>100条评论</span><span class="dot1">·</span><span>去往文章页</span>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            
            <div class="right">
                <div class="right_first">
                    <ul>
                        <li>我的收藏</li>
                        <li>我关注的问题</li>
                        <li>邀请我回答的问题</li>
                    </ul>
                </div>
                
                <div class="right_first">
                    <ul>
                        <li>公共编辑动态</li>
                        <li>社区服务中心</li>
                        <li>&copy;版权服务中心</li>
                    </ul>
                </div>
                    
                <div class="right_secend">
                    <ul>
                        <li>知乎专栏</li>
                        <li>专栏发现</li>
                    </ul>
                </div>
                <div class="right_third">
                    <ul>
                        <li><b>知乎Live</b></li>
                        <li>我在英国学设计: 设计思维分享</li>
                        <li>审计之外: 会计师的多元化修养</li>
                        <li>大前端和Node.js那些事</li>
                    </ul>
                    <a href="#"><span>查看全部>></span></a>
                </div>
                <div class="right_third">
                    <ul>
                        <li><b>知乎圆桌</b></li>
                        <li>人工智能自动驾驶&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还有一天结束</li>
                        <li>睡个好觉吧&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还有一天结束</li>
                        <li>拍一部电影</li>
                    </ul>
                    <a href="#"><span>查看全部>></span></a>
                </div>
                <div class="right_third">
                    <ul>
                        <li><b>知乎书店</b></li>
                        <li>2016: 知乎日报最受欢迎...</li>
                        <li>人工智能是如何设计的</li>
                        <li>汽车是怎么造出来的</li>
                    </ul>
                    <a href="#"><span>查看全部>></span></a>
                </div>
                <div class="right_forth">
                    <span>下载App</span>
                    <img src="../img/3.png">
                </div>
                <div class="right_fifth">
                <a target="_blank" href="#">刘看山</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">知乎指南</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">建议反馈</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">移动应用</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">加入知乎</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">知乎协议</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">举报投诉</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">联系我们</a>
                <span class="dot">·</span>
                <a target="_blank" href="#">&copy;2017 知乎</a>
                </div>
            </div>
        </div>
    <script type="text/javascript">
        function $(id){
            return document.getElementById(id);
        }
        function onmouseoverShow(){
            var show = $("show");
            show.style.backgroundColor = "rgb(239,246,250)";
        }
        function onmouseoutShow(){
            var show = $("show");
            show.style.backgroundColor = "rgb(256,256,256)";
        }
        function omoverLi1(){
            var li1 = $("li1");
            li1.style.color = "rgb(256,256,256)";
        }
        function omoutLi1(){
            var li1 = $("li1");
            li1.style.color = "rgb(220,220,220)";
        }
        function omoverLi2(){
            var li1 = $("li2");
            li1.style.color = "rgb(256,256,256)";
        }
        function omoutLi2(){
            var li1 = $("li2");
            li1.style.color = "rgb(220,220,220)";
        }
        function omoverLi3(){
            var li1 = $("li3");
            li1.style.color = "rgb(256,256,256)";
        }
        function omoutLi3(){
            var li1 = $("li3");
            li1.style.color = "rgb(220,220,220)";
        }
        function omoverLi4(){
            var li1 = $("li4");
            li1.style.color = "rgb(256,256,256)";
        }
        function omoutLi4(){
            var li1 = $("li4");
            li1.style.color = "rgb(220,220,220)";
        }
        

        function ocLi1(){
            var li1 = $("li1");
            var li2 = $("li2");
            var li3 = $("li3");
            var li4 = $("li4");
            li1.style.backgroundColor = "rgb(8,95,180)";
            li2.style.backgroundColor = "rgb(8,109,211)";
            li3.style.backgroundColor = "rgb(8,109,211)";
            li4.style.backgroundColor = "rgb(8,109,211)";
        }
        function ocLi2(){
            var li1 = $("li1");
            var li2 = $("li2");
            var li3 = $("li3");
            var li4 = $("li4");
            li1.style.backgroundColor = "rgb(8,109,211)";
            li2.style.backgroundColor = "rgb(8,95,180)";
            li3.style.backgroundColor = "rgb(8,109,211)";
            li4.style.backgroundColor = "rgb(8,109,211)";
        }
        function ocLi3(){
            var li1 = $("li1");
            var li2 = $("li2");
            var li3 = $("li3");
            var li4 = $("li4");
            li1.style.backgroundColor = "rgb(8,109,211)";
            li2.style.backgroundColor = "rgb(8,109,211)";
            li3.style.backgroundColor = "rgb(8,95,180)";
            li4.style.backgroundColor = "rgb(8,109,211)";
        }
        function ocLi4(){
            var li1 = $("li1");
            var li2 = $("li2");
            var li3 = $("li3");
            var li4 = $("li4");
            li1.style.backgroundColor = "rgb(8,109,211)";
            li2.style.backgroundColor = "rgb(8,109,211)";
            li3.style.backgroundColor = "rgb(8,109,211)";
            li4.style.backgroundColor = "rgb(8,95,180)";
        }
        function omoverNavp(){
            var nav_personal = $("nav_personal");
            var ul = $("ul");
            nav_personal.style.backgroundColor = "rgb(9,95,179)";
            ul.style.display = "block";
        }
        function omoutNavp(){
            var nav_personal = $("nav_personal");
            var ul = $("ul");
            nav_personal.style.backgroundColor = "rgb(8,109,211)";
            ul.style.display = "none";
        }
        function omoverLi1$(){
            var li1 = $("Li1$");
            li1.style.backgroundColor = "rgb(2,103,204)";
        }
        function omoutLi1$(){
            var li1 = $("Li1$");
            li1.style.backgroundColor = "rgb(9,95,179)";
        }
        function omoverLi2$(){
            var li1 = $("Li2$");
            li1.style.backgroundColor = "rgb(2,103,204)";
        }
        function omoutLi2$(){
            var li1 = $("Li2$");
            li1.style.backgroundColor = "rgb(9,95,179)";
        }
        function omoverLi3$(){
            var li1 = $("Li3$");
            li1.style.backgroundColor = "rgb(2,103,204)";
        }
        function omoutLi3$(){
            var li1 = $("Li3$");
            li1.style.backgroundColor = "rgb(9,95,179)";
        }
        function omoverLi4$(){
            var li1 = $("Li4$");
            li1.style.backgroundColor = "rgb(2,103,204)";
        }
        function omoutLi4$(){
            var li1 = $("Li4$");
            li1.style.backgroundColor = "rgb(9,95,179)";
        }
        function ocDe1(){
            var de1 = $("de1");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDe1_m(){
            var de1 = $("de1-m");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDe2(){
            var de1 = $("de2");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDe3(){
            var de1 = $("de3");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDe4(){
            var de1 = $("de4");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDe5(){
            var de1 = $("de5");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDe6(){
            var de1 = $("de6");
            var delated = $("delated")
            var delate = de1.parentNode.parentNode.parentNode.parentNode;
            var parent = delate.parentNode;
            parent.removeChild(delate);
            delated.style.display = "block";
        }
        function ocDelated(){
            var delated = $("delated");
            delated.style.display = "none";
        }
        
        function open$(){
            
            var open = $("open_$");
            var mass = $("mass");
            open.style.display = "block";
            mass.style.display = "none";
        }
        function close$(){
            var open = $("open_$");
            var mass = $("mass");
            open.style.display = "none";
            mass.style.display = "block";
        }
        function omoverGood1(){
            var good = $("good1");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood1(){
            var good = $("good1");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function omoverGood2(){
            var good = $("good2");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood2(){
            var good = $("good2");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function omoverGood3(){
            var good = $("good3");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood3(){
            var good = $("good3");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function omoverGood4(){
            var good = $("good4");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood4(){
            var good = $("good4");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function omoverGood5(){
            var good = $("good5");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood5(){
            var good = $("good5");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function omoverGood6(){
            var good = $("good6");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood6(){
            var good = $("good6");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function omoverGood_te(){
            var good = $("good_te");
            good.style.backgroundColor = "rgb(105,142,191)";
            good.style.color = "rgb(255,255,255)";
        }
        function omoutGood_te(){
            var good = $("good_te");
            good.style.backgroundColor = "rgb(239,246,250)";
            good.style.color = "rgb(105,142,191)";
        }
        function ocGood_te(){
            var good = $("good_te");
            var new_te = $("new_te");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
            new_te.innerHTML = good.innerHTML;
        }
        function omoverBad_te(){
            var bad = $("bad");
            bad.style.backgroundColor = "rgb(105,142,191)";
            bad.style.color = "rgb(255,255,255)";
        }
        function omoutBad_te(){
            var bad = $("bad");
            bad.style.backgroundColor = "rgb(239,246,250)";
            bad.style.color = "rgb(105,142,191)";
        }
        function ocBad_te(){
            var good2 = $("good_te");
            var good = $("bad_te");
            var new_te = $("new_te");
            var kk = new_te.innerHTML;
            kk = --new_te.innerHTML;
            new_te.innerHTML = kk;
            good2.innerHTML = kk;
        }
        

        function ocGood1(){
            var good = $("good1");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
        }
        function ocGood2(){
            var good = $("good2");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
        }
        function ocGood3(){
            var good = $("good3");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
        }
        function ocGood4(){
            var good = $("good4");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
        }
        function ocGood5(){
            var good = $("good5");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
        }
        function ocGood6(){
            var good = $("good6");
            var kk = good.innerHTML;
            good.innerHTML = ++kk;
        }
        function ocShouqi(){
            var open_$ = $("open_$");
            var mass = $("mass");
            open_$.style.display = "none";
            mass.style.display = "block";
        }
        function tiwen(){
            var tiwen = $("alert_tiwen");
            var nav = $("nav");
            var contain = $("contain");
            tiwen.style.display = "block";
            nav.style.filter = "opacity(0.3)";
            contain.style.filter = "opacity(0.3)";
        }
        function delate_tiwen(){
            var nav = $("nav");
            var contain = $("contain");
            var tiwen = $("alert_tiwen");
            tiwen.style.display = "none";
            nav.style.filter = "opacity(1)";
            contain.style.filter = "opacity(1)";
        }
    </script>
    </body>
</html>