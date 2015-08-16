<?php



			/**************************************************************************************************
			| 
			| http://xpresswebsolution.com
			| chris037@gmail.com
			| v.1
			| 08.15.15
			|
			|**************************************************************************************************/

			require_once 'Unirest.php';

			error_reporting( E_ALL );
			ini_set( 'display_errors', '1' );

			


			class myHappy
			{
			     private $apiurl = "https://test-shopmate.coca-cola.com.ph/v1/";
			     private $method = "POST";
			     public $user;
			     public $errormessage;
			    

			     // constructor
			     public function __construct(){}

			     // make api call
			     private function request_api($url, $params = null, $method = "POST")
			     {
			     	$headers = array('WWW-Authenticate'=>'Digest realm="Coke HappyShopmate API", qop="auth", nonce="55cd2537a5d12", opaque="0001f3dc5fa50faae139d56f4b53b013"');
	
			        Unirest\Request::auth('admin', '12345', CURLAUTH_DIGEST);
					if($method == "POST"){
						$response =  Unirest\Request::post($this->apiurl.$url, $headers, $params); 
					}else{
						$response =  Unirest\Request::get($this->apiurl.$url, $headers, $params);
					}	
					
	
					return $response->body->result;
			     }


			     
			    

			     /********************/
			     /* PUBLIC FUNCTIONS */
			     /********************/
			    public function get_fullname(){
			    	return $this->user->s_fname . " " . $this->user->s_lname;
			    }

			    public function get_avatar(){

			   //  		$headers = array('WWW-Authenticate'=>'Digest realm="Coke HappyShopmate API", qop="auth", nonce="55cd2537a5d12", opaque="0001f3dc5fa50faae139d56f4b53b013"');
	
				  //       Unirest\Request::auth('admin', '12345', CURLAUTH_DIGEST);
						// $response = Unirest\Request::get("https://test-shopmate.coca-cola.com.ph/v1/img/profile/". $this->user->s_id, $headers, $params=null);		    

						// $data = $response;

						// $data = pack('H*',$data);

						// $im = imagecreatefromstring($data);

						// echo imagejpeg($im);

			    		//return $this->request_api('img/profile/'. $this->user->s_id, null, "GET");
			     
			    }
				public function validate_user_creds($mobile, $password) {
					
					
					$params = array("mobile_no" => $mobile, "password" => $password);
					//$params = array("mobile_no" => '09165533692', "password" => 'password');					
					$result = $this->request_api('shoppers/login', $params);

					if(!isset($result->status)){
						$this->user = $result;		
						return 	true;
					}else{
						return false;
					}
				
				}

				public function get_user_points_balance(){

					
					return $this->request_api('shoppers/points/'. $this->user->s_id, null, "GET");

		
				}
			    

			     

			}
