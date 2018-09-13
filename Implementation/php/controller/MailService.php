<?php 

class MaiService{	
  	
	private $from;
	private $to;
	private $subject;
	private $message;
	private $header;

	public function __construct0(){}

    public function __construct1($from,$to,$subject,$message,$header){
       
       $this->from = $from;
       $this->to = $to;
       $this->subject = $subject;
       $this->message = $message;
       $this->header = $header;
    }

    public function setFrom($from){
    	$this->from = $from;
    }
    public function getFrom(){
    	return $this->from;
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
    public function setHeader($header){
    	$this->header = $header;
    }
    public function getHeader(){
    	return $this->message;
    }
    public function sendMail(){
    	try{
    		mail($this->to,$this->subject,$this->message,$this->header);
    	}catch(Exception $e){
    		echo 'Exepcion capturada: '.$e->getMessage().'\n';
    	}
    	
    }
}

 ?>