<?php
require_once PUB_SERVER_ROOT . 'tools/mail/PHPMailer.php';

/**
 * @param $mailToArray	email
 * @param $content		邮件内容
 * @param $mailArray
 * 	array(
		'PORT'		=> 25,				//必填
		'HOST'		=> 'smtp.sina.com',	//必填
		'USERNAME'	=> 'email@sina.com',//必填
		'FROM'		=> 'email@sina.com',//必填
		'SUBJECT'	=> '主题',			//必填
		'FROMNAME'	=> '邮件服务',		//选填，默认同FROM
		'CHARSET'	=> 'utf-8',			//选填，默认utf-8
		'PASSWORD'	=> 'password',		//没有密码可不传
		'SMTPAUTH'	=> true/false,		//没有需求可不传，turn on SMTP authentication，
	);
 * @param $isHtml		html格式	
 * @param $debug
 * 
 * @return bool
 */

function pubSendMail($mailToArray, $content, $mailArray, $isHtml=true, $debug=false, $filepath=''){
	//函数必要参数检查
	if(empty($mailToArray) || empty($content) || empty($mailArray)){
		return false;
	}
	//邮件参数检查
	$must_key = array('PORT','HOST','USERNAME','FROM','SUBJECT');
	foreach ($must_key as $val){
		if (empty($mailArray[$val])){
			return false;
		}
	}
	
	//过滤黑名单邮箱
	if(!is_array($mailToArray)){
		$mailToArray = array($mailToArray);
	}else{
		$mailToArray = array_unique($mailToArray);
	}
	$obj = pClsFactory::Create('model::pmAdmin');
	$res = $obj->getBlackEmails();
	if (is_array($res) && count($res)){
		$mailToArray = array_diff($mailToArray, $res);
	}
	if (empty($mailToArray)){
		return false;
	}
	
	//设定参数准备发邮件
	$mailPram = $mailArray;
	$mail = new PHPMailer();
	$mail->SMTPDebug = $debug;
	$mail->IsSMTP();
	if ($mailPram['SMTPAUTH']){
		$mail->SMTPAuth = true;
	}
	$mail->Port = $mailPram['PORT'];
	$mail->Host = $mailPram['HOST'];
	$mail->Username = $mailPram['USERNAME'];
	if ($mailPram['PASSWORD']){
		$mail->Password = $mailPram['PASSWORD'];
	}
	$mail->CharSet = $mailPram['CHARSET']?$mailPram['CHARSET']:'utf-8';
	$mail->From = $mailPram['FROM'];
	$mail->FromName = $mailPram['FROMNAME']?$mailPram['FROMNAME']:$mailPram['FROM'];
	$mail->Subject = $mailPram['SUBJECT'];
	$mail->IsHTML($isHtml);
	$mail->Body = $content;
	if( !empty( $filepath ) ) {
		try{
			$mail->AddAttachment($filepath);
		}
		catch (Exception $e ){}
	}
	$mail->ClearAddresses();
	foreach($mailToArray as $appKey=>$mailTo){
		$mail->AddAddress($mailTo);
	}
	$res = $mail->Send();
	if($res){
		return true;
	}
	return array('error' => $mail->ErrorInfo);
}
?>
