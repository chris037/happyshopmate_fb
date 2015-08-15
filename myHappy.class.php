<?php



			/**************************************************************************************************
			| 
			| http://xpresswebsolution.com
			| chris037@gmail.com
			| v.1
			| 08.15.15
			|
			|**************************************************************************************************/


			//error_reporting( E_ALL );
			//ini_set( 'display_errors', '1' );

			


			/*
			
			Login

			loginFB();
			login(username, password, facebook);
						
			register();
			forgotpassword();

			myUser Class

			loadBanner()


			
			loadProfile()
				$user->name
				$user->avatar
				$user->point


			processCode(string)
			*uploadCode()

			processReceipt(img)
			*uploadReceipt

			



			*/

			class myHappy
			{
			     private $url;
			     private $method = "GET";
			    

			     // constructor
			     public function __construct(){}

			     // make curl call
			     private function request_curl()
			     {
			          
			     }


			     // make params for url
			     private function makeParams()
			     {
			          if ( isset( $this->request['params'] ) && is_array( $this->request['params'] ) && count( $this->request['params'] ) >= 1 ) {
			               foreach ( $this->request['params'] as $k => $v ) {
			                    $separator = strstr( $this->url, '?' ) ? '&' : '?';
			                    $this->url .= $separator . urlencode( $k ) . "=" . urlencode( $v );
			               }
			          }
			          return $this->url;
			     }

			    

			     /********************/
			     /* PUBLIC FUNCTIONS */
			     /********************/

			     // get headers
			     public function getHeaders()
			     {
			          return isset( $this->response['headers'] ) ? $this->response['headers'] : false;
			     }

			    

			     // quick request
			     public static function quick( $url = null, $method = 'get', $parser = '' )
			     {
			          if ( is_string( $url ) ) {
			               $quick = new myRest();
			               $data = $quick->request( $url, $method, $parser );
			               $quick->reset();
			               return $data;
			          }
			          return false;
			     }

			}
