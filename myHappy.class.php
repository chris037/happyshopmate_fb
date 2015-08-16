<?php



			/**************************************************************************************************
			| 
			| http://xpresswebsolution.com
			| chris037@gmail.com
			| v.1
			| 08.15.15
			|
			|**************************************************************************************************/


			/*

			Bayang magiliw, perlas ng silanganan.
			Alab ng puso, sa dibdib mo'y buhay.
			Lupang hinirang, duyan ka ng magiting
			Sa manlulupig, di ka pasisiil.

			Sa dagat at bundok, sa simoy at
			sa langit mong bughaw,
			may dilag ang tula at awit
			sa paglayang minamahal.

			Ang kislap ng watawat mo'y
			tagumpay na nagniningning.
			Ang bituin at araw niya
			kailan pa may di magdidilim.

			Lupa ng araw, ng lualhati't pagsinta,
			buhay ay langit sa piling mo.
			Aming ligaya na pag may mang-aapi,
			ang mamatay ng dahil sa iyo

			*/


			require_once 'Unirest.php';

			error_reporting( E_ALL );
			ini_set( 'display_errors', '1' );

			


			class myHappy
			{
			     

			     private $apiurl = "https://test-shopmate.coca-cola.com.ph/v1/";
			     private $apiurl2 = "https://test-shopmate.coca-cola.com.ph/v2/";
			     private $method = "POST";
			     private $headers = array('WWW-Authenticate'=>'Digest realm="Coke HappyShopmate API", qop="auth", nonce="55cd2537a5d12", opaque="0001f3dc5fa50faae139d56f4b53b013"');
			    
			     public $user;
			     public $promo;
			     public $store;
			     public $engage;
			     public $errormessage;
			    

			     // constructor
			     public function __construct(){}

			     // make api call
			     private function request_api($url, $params = null, $method = "POST", $api2 = null)
			     {
			     	
			     	$api = ( $api2 != null ) ? $this->apiurl2 : $this->apiurl ;
			       

			        Unirest\Request::auth(API_USER, API_PASS, CURLAUTH_DIGEST);

					if($method == "POST"){
						$response =  Unirest\Request::post($api . $url, $this->headers, $params); 
					}else{
						$response =  Unirest\Request::get($api . $url, $this->headers, $params);
					}	
					
	
					return $response->body;
			     }

			    


			    private function get_image($url){

			    		Unirest\Request::auth(API_USER, API_PASS, CURLAUTH_DIGEST);
			    		$response =  Unirest\Request::get($url, $this->headers, null);
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $response->body ).'"/>';		   		
			    }



			     /********************/
			     /* PUBLIC FUNCTIONS */
			     /********************/

			    //GLOBAL MODULES

			   

			    public function get_banners(){ //v2
			    		
			    		// Unirest\Request::auth(API_USER, API_PASS, CURLAUTH_DIGEST);
			    		// $response =  Unirest\Request::get($this->apiurl2 .'campaign_slider', $this->headers, null);

			    		// $res = $response->body->result;
			    		$res = $this->request_api('campaign_slider', null, "GET", "2");
						$result = $res->result;
			    		
			    		foreach ($result as $key => $value) {
			    			$imgurl = API_URL . $result[$key]->slider_img;
			    			echo "<li>";
			    			echo "<img src='". $imgurl . "'/>";
			    			echo "</li>";
			    			
			    		}
			    		
			    		
			    }

			    //USERS
			    
			    public function get_fullname(){
			    	return $this->user->s_fname . " " . $this->user->s_lname;
			    }

			    public function get_avatar(){
			    	$this->get_image($this->user->s_image);
			    }

			  
				public function validate_user_creds($mobile, $password) {
					
					
					$params = array("mobile_no" => $mobile, "password" => $password);
					//$params = array("mobile_no" => '09165533692', "password" => 'password');					
					$res = $this->request_api('shoppers/login', $params);
					$result = $res->result;

					if(!isset($result->status)){
						$this->user = $result;		
						return 	true;
					}else{
						return false;
					}
				
				}

				public function get_user_points_balance(){
					
					$res = $this->request_api('shoppers/points/'. $this->user->s_id, null, "GET");
					return $res->result;

		
				}

				//PROMOS

				public function get_all_promos(){

					$res = $this->request_api('promos/', null, "GET");
					$this->promo = $res->result[0];
					
				}

				public function get_promo_image($param = 'full'){

					$img = '';
					switch($param){
						case 'full':
							$img = $this->promo->c_image_full_promo;
							break;
						case 'medium':
							$img = $this->promo->c_image_redeem;
							break;
						case 'thumb':
							$img = $this->promo->c_image_tile;
							break;

					}
					$this->get_image(API_URL . $img);

				}

				//STORES

				public function get_all_stores_with_promos(){

					$res = $this->request_api('promos/stores/'. $this->user->s_id, null, "GET");
					$this->stores = $res->result;

				}

				public function get_store_image($str){
					$this->get_image(API_URL . $str);
				}

				//ENGAGE V2

				public function engage(){ //v2

			
					$res = $this->request_api('engage', null, "GET", "2");
			    	$this->engage = $res->result;
			    	
					    // echo "<pre>";
         //    print_r($this->engage);
         //    echo "</pre>";  


				}

			    

			     

			}
