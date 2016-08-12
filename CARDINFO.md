# CARDINFO - SashimiProject

<h3>卡牌模板（参照json对象结构）</h3>
<ul>
	<li>cardno - 卡牌序号，一般以不同的系列作为分组。格式为S01/SSM-001，第一个S表示Series，01表示系列序号，SSM为系列名称（Sashimi）的缩写，001表示卡牌在系列中的序号。</li>
	<li>type - 卡牌类型，用数值存储。1表示角色卡（CH），2表示事件卡（EV），3表示精彩时刻（CX）。</li>
	<li>name - 名称</li>
	<li>level - 卡牌等级，用于决定这张卡牌的使用阶段，分为4个等级0、1、2、3。</li>
	<li>cost - 卡牌费用，用于决定这张卡牌的消耗。</li>
	<li>rarity - 卡牌稀有度，用于决定这张卡牌在扭蛋中的抽取几率和分解返还的数值。从常见到稀有依次为N(Normal)、R(Rare)、SR(Super Rare)、SSR(Super Super Rare)、UR(Ultra Rare)、XR(Extremely Rare)、SP(Special)。另外还有M(Material)、RM(Rare Material)、FM(Full Material)、SPM(Special Material)。</li>
	<li>number - 卡牌数值，暂定为卡牌的能力数值，表示使用卡牌时事件提升的解决度。</li>
	<li>illustrator - 画师</li>
	<li>tag - 卡牌标签，用于一些卡牌效果的识别分类。</li>
	<li>text - 技能文本，一般用于描写设定和效果。</li>
	<li>description - 卡牌描述，一般贴一句经典台词。</li>
	<li>color - 卡牌颜色，表示卡牌的属性（对应事件的属性）。黄 - 不安；蓝 - 平静；绿 - 和谐；红 - 危机。</li>
	<li>source - 卡牌设计的来源</li>
</ul>