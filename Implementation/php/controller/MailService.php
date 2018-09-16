<?php 

class MailService{	
	private $to;
	private $subject;
	private $message;

	public function __construct0(){
    }

    public function __construct1($from,$to,$subject,$message){
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function setTo($to){
    	$this->to = $to;
    }
    public function getTo(){
    	return $this->to;
    }
    public function setSubject($subject){
    	$this->subject = $subject;
    }
    public function getSubject(){
    	return $this->subject;
    }
    public function setMessage($message){
    	$this->message = $message;
    }
    public function getMessage(){
    	return $this->message;
    }
    public function sendMail(){
    	try{
            $headers =  'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'From: Hueplaning <info@gmail.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    		mail($this->to,$this->subject,$this->message,$headers);
    	}catch(Exception $e){
    		echo 'Exepcion capturada: '.$e->getMessage().'\n';
    	}
    	
    }
}

 ?>