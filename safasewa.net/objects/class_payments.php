<?php     class cleanto_payments{	public $payment_id;	public $order_id;	public $payment_method;	public $transaction_id;	public $amount;	public $discount;	public $taxes;	public $partial_amount;	public $payment_date;	public $net_amount;	public $lastmodify;	public $frequently_discount;	public $frequently_discount_amount;	public $recurrence_status;	public $payment_status;	public $conn;	public $offset;	public $limit;	public $table_name="ct_payments";	public $tablename="ct_order_client_info";		/* Function for add Payments */	public function add_payments(){		if($this->discount == 'undefined' || $this->discount == ''){			$discount = 0;		}else{			$discount = $this->discount;		}		if($this->partial_amount == ''){			$partial_amount = 0;		}else{			$partial_amount = $this->partial_amount;		}		$query="insert into `".$this->table_name."` (`id`,`order_id`,`payment_method`,`transaction_id`,`amount`,`discount`,`taxes`,`partial_amount`,`payment_date`,`net_amount`,`lastmodify`,`frequently_discount`,`frequently_discount_amount`,`recurrence_status`,`payment_status`) values(NULL,'".$this->order_id."','".$this->payment_method."','".$this->transaction_id."','".$this->amount."','".$discount."','".$this->taxes."','".$partial_amount."','".$this->payment_date."','".$this->net_amount."','".$this->lastmodify."','".$this->frequently_discount."','".$this->frequently_discount_amount."','".$this->recurrence_status."','".$this->payment_status."')";		$result=mysqli_query($this->conn,$query);		return $result;	}	public function readall(){		$query="select * from `".$this->table_name."`";		$result=mysqli_query($this->conn,$query);		return $result;	}	/* get payment entry by given date */	public function getallpaymentsbydate($startdate,$enddate){		$query = "SELECT * FROM `".$this->table_name."` WHERE `payment_date` BETWEEN '$startdate' AND '$enddate'";		$result = mysqli_query($this->conn,$query);		return $result;	}	public function getallpayment(){		$query = "SELECT * FROM `".$this->table_name."`";		$result = mysqli_query($this->conn,$query);		return $result;	}	public function getallpayment_api(){		$query = "SELECT * FROM `".$this->table_name."` ORDER BY `order_id` DESC LIMIT ".$this->limit." OFFSET ".$this->offset;		$result = mysqli_query($this->conn,$query);		return $result;	}	/* get client name by order_id */	public function getclientname($orderid){		$query = "select `client_name` from `ct_order_client_info` where `order_id` = '".$orderid."'";		$res = mysqli_query($this->conn,$query);		$value = mysqli_fetch_row($res);		return $value[0];	}	public function getclientemail($orderid){		$query = "select `client_email` from `ct_order_client_info` where `order_id` = '".$orderid."'";		$res = mysqli_query($this->conn,$query);		$value = mysqli_fetch_row($res);		return $value[0];	}	/* Get Payment Details using order id */	public function get_payment_details(){		$query="select * from `".$this->table_name."` where `order_id`='".$this->order_id."'";		$result=mysqli_query($this->conn,$query);		$value=mysqli_fetch_row($result);		return $value;	}	/* methods by end */	public function readone_payment_details(){		$query="select * from `".$this->table_name."` where `order_id`='".$this->order_id."'";		$result=mysqli_query($this->conn,$query);		$value=mysqli_fetch_array($result);		return $value;	}	public function update_payment_status_of_staff(){		$query="update `".$this->table_name."` set `payment_status`='".$this->payment_status."' where `order_id`='".$this->order_id."'";		$result=mysqli_query($this->conn,$query);		return $result;	}	/* update Payment status using order id */	public function update_payment_status($order_id,$update_status){		$query="update `".$this->table_name."` set `payment_status`='".$update_status."' where `order_id`='".$order_id."'";		$result=mysqli_query($this->conn,$query);		return $result;	}	public function get_stripe_reccurence_orders(){		$query="select `order_id`,`transaction_id`,`payment_date` from `".$this->table_name."` where `payment_method`='Stripe-Reccurance' GROUP BY `transaction_id`";		$result=mysqli_query($this->conn,$query);		return $result;	}	public function update_payment_transaction_id(){		$query="update `".$this->table_name."` set `payment_status`='Completed',`payment_method`='".$this->payment_method."',`transaction_id`='".$this->transaction_id."',`lastmodify`='".$this->lastmodify."' where `order_id`='".$this->order_id."'";		$result=mysqli_query($this->conn,$query);		return $result;	}	public function get_last_order_from_transaction_id(){		$query="select `order_id` from `".$this->table_name."` where `transaction_id`='".$this->transaction_id."' order by `order_id` DESC limit 1";		$result=mysqli_query($this->conn,$query);		$value=mysqli_fetch_assoc($result);		return $value["order_id"];	}	/* Get Payment Details using order id */	public function get_frequently_discount_id(){		$query="select `frequently_discount` from `".$this->table_name."` where `order_id`='".$this->order_id."'";		$result=mysqli_query($this->conn,$query);		$value=mysqli_fetch_assoc($result);		return $value["frequently_discount"];	}}?>