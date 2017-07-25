# jsonHttp
测试案例composer组件的开发上传案例

#一个composer组建上传的案例  下载后使用方式如下

include 'vendor/autoload.php';

$data = array('a','b','bnb');

$json = new \jsonHttp\Json();

echo $json->jsonEncode($data);
#composer地址  
https://packagist.org/packages/lamp365/json-http
