<?php
namespace app\api\controller;

class SmalltalkAudio extends \think\Controller
{
	function index()
	{
		//讲单语音表
		$list = db("smalltalk_audio")->field('id,audio_name,audio,duration')
		->select();
		return json($list);
	}
	
}


?>