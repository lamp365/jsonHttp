<?php

namespace jsonHttp;

class Json{
	public function jsonEncode($data)
	{
		return json_encode($data);
	}

	public function jsonDecode($data)
	{
		return json_decode($data,true);
	}

}
