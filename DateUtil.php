<?php
namespace ranmadxs;

class DateUtil{

	public function now($format = 'Y-m-d H:i:s'){
		$dateTime = new DateTime('now', new DateTimeZone("AMERICA/Santiago"));
		return $dateTime->format($format);
	}

}

?>
