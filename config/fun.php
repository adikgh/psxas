<?php 

class fun {
	
	function __construct() {}

	// category
	public static function category($id) {
	  $sql = db::query("select * from category where id = '$id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql;
	}
	public static function category_cours($id) {
		$sql = db::query("select * from cours where id = '$id'");
		$sql = mysqli_fetch_array($sql);
		return $sql['category_id'];
	}

	// cours
	public static function cours($id) {
	  $sql = db::query("select * from cours where id = '$id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql;
	}
	public static function cours_pack($id) {
		$sql = db::query("select * from cours_pack where id = '$id'");
		$sql = mysqli_fetch_array($sql);
		return $sql['cours_id'];
	}

	// cours info
	public static function cours_info($id) {
	  $sql = db::query("select * from cours_info where cours_id = '$id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql;
	}

	// pack
	public static function pack($id) {
	  $sql = db::query("select * from cours_pack where id = '$id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql;
	}
	public static function pack_sum($id) {
	  $sql = db::query("select * from cours_pack where cours_id = '$id'");
	  $sql = mysqli_num_rows($sql);
	  return $sql;
	}
	public static function pack_block($id) {
	  $sql = db::query("select * from cours_block where id = '$id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql['pack_id'];
	}
	public static function pack_price_min($id) {
		$sql = db::query("select min(price) from cours_pack where cours_id = '$id'");
		$sql = mysqli_fetch_array($sql);
		return $sql;
	}
	public static function pack_info($id) {
		$sql = db::query("select * from cours_pack_info where pack_id = '$id'");
		$sql = mysqli_fetch_array($sql);
		return $sql;
	}

	// lesson
	public static function lesson($id) {
		$sql = db::query("select * from cours_lesson where id = '$id'");
		$sql = mysqli_fetch_array($sql);
		return $sql;
	}
	

	// 
	public static function sub($id, $u_id) {
	  	$sql = db::query("select * from cours_sub where cours_id = '$id' and user_id = '$u_id'");
	  	if (mysqli_num_rows($sql)) return 1; else return 0;
	}
	// 
	public static function sub_i($id, $u_id) {
	  	$sql = db::query("select * from cours_sub where cours_id = '$id' and user_id = '$u_id'");
	  	if (mysqli_num_rows($sql)) $sql = mysqli_fetch_array($sql); else $sql = 0;
		return $sql;
	}

	// 
	public static function bookmark($id, $u_id) {
	  $sql = db::query("select * from bookmark where cours_id = '$id' and user_id = '$u_id'");
	  if (mysqli_num_rows($sql)) return 1; else return 0;
	}

	// 
	public static function cours_pack_item_info($id) {
	  $user_id = core::$user_data['id'];
	  $sql = db::query("select * from cours_sub_info where pack_item_id = '$id' and user_id = '$user_id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql;
	}

	// 
	public static function status($id) {
	  $sql = db::query("select * from status where id = '$id'");
	  $sql = mysqli_fetch_array($sql);
	  return $sql;
	}



	// user
	public static function user($id) {
		$sql = db::query("select * from user where id = '$id'");
		$sql = mysqli_fetch_array($sql);
	  	return $sql;
	}

	// autor
	public static function autor($id) {
		$sql = db::query("select * from user where id = '$id'");
		$sql = mysqli_fetch_array($sql);
	  	return $sql;
	}
	
}