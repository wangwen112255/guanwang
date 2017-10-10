<?php
namespace Wxs\Controller;
use Think\Controller;
use EasyWeChat\Message\Text;
use EasyWeChat\Message\Image;
use EasyWeChat\Message\Voice;
use EasyWeChat\Message\Article;
use EasyWeChat\Message\News;
use EasyWeChat\Foundation\Application;
class IndexController extends BaseController {
    public function index(){
       $options =C('wx');
       $app = new Application($options);
       $server=$app->server;
       // $messages = $server->getMessage();
      
       $server->setMessageHandler(function($message){
       	switch ($message->MsgType) {
       		case 'text':
				// return $message->Content."\n发信息人".$message->FromUserName;
				return new Text(['content'=>'这是一个文本消息']);
       			break;
       		case 'image':
				// return "这是一张图片".new Image(['BaseController.class.php'])
				return new Image(['media_id'=>$message->MediaId]);
	   			break;       			
       			
       		case 'voice':
       			// return "您的的是声音信息".$message->MediaId."信息内容是".$message->ThumMediaId;
       			return new Voice(['media_id'=>$message->MediaId]);
       			break;
       		case 'video':
       			break;
       		case 'location':
       			return [
       			new News(['description'=>'dsfsad1','url'=>'http://www.baidu.com','image'=>'http://img.bimg.126.net/photo/ZWdvRTBDrymgJueo73kgpw==/449797012800471966.jpg','title'=>'dfasdfdasds']),
       			new News(['description'=>'dsfsad2','url'=>'http://www.baidu.com','image'=>'http://img.bimg.126.net/photo/ZWdvRTBDrymgJueo73kgpw==/449797012800471966.jpg','title'=>'dfasdfdasds']),
       			new News(['description'=>'dsfsad3','url'=>'http://www.baidu.com','image'=>'http://img.bimg.126.net/photo/ZWdvRTBDrymgJueo73kgpw==/449797012800471966.jpg','title'=>'dfasdfdasds']),
       			new News(['description'=>'dsfsad4','url'=>'http://www.baidu.com','image'=>'http://img.bimg.126.net/photo/ZWdvRTBDrymgJueo73kgpw==/449797012800471966.jpg','title'=>'dfasdfdasds'])


       			];
       			break;
       		case 'link':
       			break;
       		case 'shortvideo':
       			break;
       		case 'event':
       			switch ($message->Event) {
       				case 'subscribe':
       					return "欢迎您关注我";
       					break;

       				case 'unsubscribe':
       					return '欢迎您下次光临';
       					break;
       				case 'LOCATION':
       					return '坐标是'.$message->Latitude;
       					break;
       				case 'CLICK':
       					return '惦记的是'.$message->EventKey;
       					break;
       				case 'VIEW':
       					return '惦记的是'.$message->EventKey;
       					break;
       				default:
       					break;
       			}
       			break;
       		default:
       			return "信息有误";
       			break;
       	}
       });
       $response =$server->serve();
       // 将响应输出
       $response->send(); 
    }
}