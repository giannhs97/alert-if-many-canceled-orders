<?php
function admin_order_display_billing_email( $order ){

    $billing_email  = $order->get_billing_email();
	$orderArg = array(
    	'customer' => $billing_email,
    	'limit' => -1,
    );
	
	$orders = wc_get_orders($orderArg);
	$canceledOrders = 0;
	$failedOrders = 0;
	
	if(isset($orders)){
		$totalOrders = count($orders);
		if($totalOrders == 1){
			echo '<p class="form-field form-field-wide">This is the first time this customer places an order to our shop</p>';
		}else{
				foreach ($orders as  $orderData) {
					if($orderData->data['status'] == 'cancelled' || $orderData->data['status'] == 'refunded'){
						$canceledOrders +=1;
					}
					
					if($orderData->data['status'] == 'failed'){
						$failedOrders +=1;
					}
				}
				$totalOrders = $totalOrders - $failedOrders - 1;
				$canceledPercentage = ($canceledOrders / $totalOrders) * 100;
			
				if(round($canceledPercentage, 2) <= 35 ){
					$color = 'green';
				}elseif(round($canceledPercentage, 2) > 35 && round($canceledPercentage, 2) <= 70){
					$color = 'orange';
				}else{
					$color = 'red';
				}
			
				echo '<p class="form-field form-field-wide">Average canceled/refunded orders for this customer: <span style = "color: '. $color . '"><strong>' . round($canceledPercentage, 2) . '%</strong></span></p>';
		}
	}
    //echo '<br clear="all"><p><strong>'.__('Customer Email', 'konte-child').':</strong> ' . $billing_email . '</p>';
}
add_action( 'woocommerce_admin_order_data_after_order_details', 'admin_order_display_billing_email', 60, 1 );