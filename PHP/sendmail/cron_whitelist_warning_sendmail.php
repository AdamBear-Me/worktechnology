<?php
/**
 * 白名单预警自动发送邮件
 * @author 超
 *
 */
date_default_timezone_set('asia/shanghai');
include_once dirname(dirname(dirname(dirname(__FILE__)))) . '/stdafx.php';
include_once PUB_SERVER_ROOT . 'tools/mail/send_mail.php';
include_once PUB_SERVER_ROOT . 'config/pushConf.php';

class cron_whitelist_warning_sendmail {
	private $pmWhiteList;
	public function run(){
		$this->pmWhiteList = pClsFactory::Create("model::ugrowth::pmWhiteList");
		$pmUgrowthRecommend = pClsFactory::Create("model::ugrowth::pmUgrowthRecommend");
		$res = $this->pmWhiteList->getWhiteList_wraning();
		if(!empty($res)){
			$uids = array();
			foreach ($res as $key=>$value){
				$uids[] = $value['uid'];
			}
			$userList = $pmUgrowthRecommend->getuinfobyuids($uids);
			$email_contents = array();
			$i=0;
			foreach ($res as $key=>$value){
					
				if($value['warning_count'] <= $userList[$value['uid']]['followers_count']){
					$i++;
					$email_contents[$i]['uid'] = $value['uid'];
					$email_contents[$i]['email'] = $value['email'];
					$email_contents[$i]['warning_count'] = $value['warning_count'];
					$email_contents[$i]['adduser'] = $value['adduser'];
					$email_contents[$i]['interest_class'] = $value['interest_class'];
					$email_contents[$i]['screen_name'] = $userList[$value['uid']]['screen_name'];
					$email_contents[$i]['followers_count'] = $userList[$value['uid']]['followers_count'];
				}
			}
			if(!empty($email_contents)){
				$i=1;
				foreach ($email_contents as $key=>$value){
					$this->EmailNotice($email_contents[$i++]);
				}
				
			}
		}
	}
	
	protected function EmailNotice($email_contents){
		$mailConfig = $GLOBALS['PUSH_EMAIL_CONF'];
		$mailConfig['SUBJECT'] = '准C1冷启动预警';
		$emails = array('522521858@qq.com','luanbing@staff.weibo.com');
		$emails[] = $email_contents['email'];
		$content = 'uid：'.$email_contents['uid'].'<br/>';
		$content .= '昵称：'.$email_contents['screen_name'].'<br/>';
		$content .= '兴趣类别：'.$email_contents['interest_class'].'<br/>';
		$content .= '粉丝数：'.$email_contents['followers_count'].'<br/>';
		$content .= '预警量级：'.$email_contents['warning_count'].'<br/>';
		$content .= '操作人：'.$email_contents['adduser'].'<br/>';
		$content .='粉丝数已经达到预警量级，请及时处理！';
		$res = pubSendMail($emails, $content, $mailConfig);		
		return true;
	}
}

$Obj = new cron_whitelist_warning_sendmail();
$Obj->run();

?>