# CARDINFO - SashimiProject

<h3>卡牌模板（参照数据表结构）</h3>
<ul>
	<li>cardno - 卡牌序号，一般以不同的系列作为分组。格式为S01/SSM-001，第一个S表示Series，01表示系列序号，SSM为系列名称（Sashimi）的缩写，001表示卡牌在系列中的序号。</li>
	<li>type - 卡牌类型，用数值存储。1表示角色卡（CH），2表示事件卡（EV），3表示精彩时刻（CX）。</li>
	<li>name - 名称</li>
	<li>title - 称号</li>
	<li>level - 卡牌等级，用于决定这张卡牌的使用阶段，分为4个等级0、1、2、3。</li>
	<li>cost - 卡牌费用，用于决定这张卡牌的消耗。</li>
	<li>rarity - 卡牌稀有度，用于决定这张卡牌在扭蛋中的抽取几率。从常见到稀有依次为N(Normal)、R(Rare)、SR(Super Rare)、SSR(Super Super Rare)、UR(Ultra Rare)、XR(Extremely Rare)、SP(Special)。</li>
	<li>number1 - 第一个数值，暂定为卡牌的能力数值，表示使用卡牌时事件提升的解决度。</li>
	<li>number2 - 第二个数值，暂定为卡牌的累计数值，当总计的累计数值达到一定值可以触发一些额外效果。</li>
	<li>illustrator - 画师</li>
	<li>tag - 卡牌标签，用于一些卡牌效果的识别分类。</li>
	<li>text - 卡牌描述，一般用于描写设定和效果。</li>
	<li>color - 卡牌颜色，表示卡牌的属性。</li>
	<li>source - 卡牌设计的来源</li>
</ul>