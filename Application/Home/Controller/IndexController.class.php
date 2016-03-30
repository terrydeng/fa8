<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->show('helo123');
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

		$Da1ta=M('Usenonum');
		$this->dat1a = $Da1ta->where('id<6')->select();
//		print_r($this->dat1a);
		
//
		$arr=array();
		$ii=0;
//		$arr[0][0][1]=0;
		foreach( $this->dat1a as $k1ey=>$v1alue) {
			
//			print_r($v1alue);
			$j=0;
			foreach($v1alue as $ke11=>$valu11 ) {
				echo "ke11="; echo $ke11;
				echo "|valu11="; echo $valu11;
				echo "<br />";
				$arr[$ii][$j][0]=$ke11;
				$arr[$ii][$j][1]=$valu11;
				$j++;
			}//foreach($v1alue as $ke11=>$valu11
				$ii++;
		}//foreach( $this->dat1a as $k1ey=>$v1alue
		$this->dat2a=$arr;
		var_dump($this->dat2a);
		echo "<br />"."|"; echo "<br/>";
		print_r($ar);
//		
		
		$this->display();
    }
}