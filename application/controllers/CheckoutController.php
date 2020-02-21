<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CheckoutController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Load form library & helper
        $this->load->library('form_validation');
        $this->load->helper('form');
        // Load cart library
        $this->load->library('cart');
        // Load product model
        $this->load->model('ProductModel');
        $this->controller = 'checkout';
        /*User Profile Model*/
        $this->load->model('ProfileModel');
        $this->load->model('MenuModel');

        /*Paytm*/
      header("Pragma: no-cache");
      header("Cache-Control: no-cache");
      header("Expires: 0");
      //Load Paytm Libraries Here
      require_once(APPPATH."libraries/lib/config_paytm.php");
      require_once(APPPATH."libraries/lib/encdec_paytm.php");
    }
   function index(){
      if ($this->cart->total_items() <= 0) {
         redirect(base_url());
      }
      $formData =  $this->input->post(); 
      // Redirect if the cart is empty
      $orderDetail = $data = array();
      // If order request is submitted
        $submit      = $this->input->post('placeOrder');
        if (isset($submit)) {
            switch ($this->input->post('payment_method')) {
               case 'paytm':
                  // Prepare customer data
                  $smaller     = rand(1000, 3000);
                  $largest     = rand(10000, 99999999);
                  $orderId     = "OD" . $smaller . $largest;
                  $orderDetail = array(
                     'customer_id_fk'     => strip_tags($this->input->post('cutomerid')),
                     'order_number'       => $orderId,
                     'grand_total'        => $this->cart->total(),
                     'created'            => date("Y-m-d H:i:s"),
                     'modified'           => date("Y-m-d H:i:s"),
                     'status'             => 'pending'
                  );
                  # Create Order Temporary
                  $orderId      =    $this->ProductModel->createOrder($orderDetail);
                  // Check customer data insert status
                  if($orderId){
                     $paytm = $this->pgRedirect($orderId);
                     // Insert order
                     $order = $this->placeOrder($orderId);
                     // If the order submission is successful
                     if ($order){
                        $this->session->set_userdata('success_msg', 'Order placed successfully.');
                          redirect($this->controller . '/orderSuccess/' . $order);
                        }else {
                          $data['error_msg'] = 'Order submission failed, please try again.';
                     }
                  }else{
                     $data['error_msg'] = 'Some problems occured, please try again.';
                  }
                  break;
               case 'card':
                  echo "card";
               break;
               default:
                  # code...
         break;
            }
         }
        // Customer data
        $data['orderDetail'] = $orderDetail;
        // Retrieve cart data from the session
        $data['cartItems']   = $this->cart->contents();
        /*
        |  Get Customer id after login and fatch all customer data 
        |  and set the value in checkout input box address etc.
        */
        $customer_id_pk      = $this->session->userdata['logged_in']['customer_id_pk'];
        $data['left_menu']   = $this->MenuModel->websiteMenu();
        $data['userDetails'] = $this->ProfileModel->getDataById($customer_id_pk);
        // Pass products data to the view
        $this->load->view($this->controller . '/index', $data);
    }


    function placeOrder($orderId)
    {
      // $insertOrder = $this->ProductModel->insertOrder($ordData);
      // if ($insertOrder) {
         // Retrieve cart data from the session
         $cartItems   = $this->cart->contents();
         // Cart items
         $ordItemData = array();
         $i           = 0;
         foreach ($cartItems as $item) {
            $ordItemData[$i]['order_id']   = $orderId;
            $ordItemData[$i]['product_id'] = $item['id'];
            $ordItemData[$i]['quantity']   = $item['qty'];
            $ordItemData[$i]['sub_total']  = $item["subtotal"];
            $i++;
         }
        
         if (!empty($ordItemData)) {
             // Insert order items
             $insertOrderItems = $this->ProductModel->insertOrderItems($ordItemData);
             if ($insertOrderItems) {
                 // Remove items from the cart
                 $this->cart->destroy();
                 // Return order ID
                 return $insertOrderItems;
             }
         }
     //}
     return false;
    }
    


   public function pgRedirect(){
   if($this->session->userdata && isset($this->session->userdata['logged_in']['customer_id_pk']) > 0){
      $data =  $this->input->post();
      #Pay with  Paytm Block

         $data    =  $this->input->post();
         $checkSum   =  "";
         $paramList  =  array();
         $ORDER_ID   =  $orderId;
         $CUST_ID    =  "Customer110";
         $INDUSTRY_TYPE_ID = "Retail";
         $CHANNEL_ID = "WEB";
         $TXN_AMOUNT =  $this->cart->total();   
         // Create an array having all required parameters for creating checksum.
         $paramList["MID"] = PAYTM_MERCHANT_MID;
         $paramList["ORDER_ID"] = $ORDER_ID;
         $paramList["CUST_ID"] = $CUST_ID;
         $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
         $paramList["CHANNEL_ID"] = $CHANNEL_ID;
         $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
         $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
         $paramList["PAYMENT_MODE_ONLY"] = "DC";
         $paramList["AUTH_MODE"] = "3D";
         $paramList["PAYMENT_TYPE_ID"] = "DC";
         $paramList["CARD_TYPE"] = "VISA";
         $paramList["CALLBACK_URL"] = base_url('PaytmController/PaytmResponse');
         /*
         $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
         $paramList["EMAIL"] = $EMAIL; //Email ID of customer
         $paramList["VERIFIED_BY"] = "EMAIL"; //
         $paramList["IS_USER_VERIFIED"] = "YES"; //
         */
         //Here checksum string will return by getChecksumFromArray() function.
         $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY); ?>
         <html>
         <head>
         <title>Merchant Check Out Page</title>
         </head>
         <body>
            <center><h1>Please do not refresh this page...</h1></center>
               <form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
               <table border="1">
                  <tbody>
                  <?php
                  foreach($paramList as $name => $value) {
                     echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                     
                  }
                  ?>
                  <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
                  </tbody>
               </table>
               <script type="text/javascript">
                  document.f1.submit();
               </script>
            </form>
         </body>
         </html>
      <?php
      # if user not login then redirect to login block
      }else{
         redirect(base_url().'login');
      }
   }


    
    /*Update Address By Ajax if user is new*/
    public function updateAddress()
    {
      $data           = $this->input->post();
      $arrayData      = array(
         'address_1' => strip_tags($data["address"]),
         'city' => strip_tags($data["city"]),
         'state' => strip_tags($data["state"]),
         'postal_code' => strip_tags($data["pinCode"])
      );
      $whereCondition = "customer_id_pk= '" . $data["cutomerid"] . "'";
      if ($this->ProductModel->updateAddress($whereCondition, $arrayData) == true) {
         echo "true";
      }
    }
    
    function orderSuccess($ordID)
    {
        // Fetch order data from the database
        $data['order'] = $this->product->getOrder($ordID);
        // Load order details view
        $this->load->view($this->controller . '/order-success', $data);
    }
}