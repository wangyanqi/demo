<?php
//$a = json_decode(file_get_contents("php://input"),true);
//$a = $GLOBALS['HTTP_RAW_POST_DATA'];
//print_r($a);die;
//return $a;
//echo number_format($a);die;
interface A{
    function a($a);
}

class B implements A{
  public function a($a)
  {
      $aa= $a;
      return $aa;

  }

}

//class Mysql {
//    private static $self = null;
//    public static function create(){
//        if (self::$self === null) {
//            self::$self = new self();
//        }
//        return self::$self;
//    }
//    private function __construct(){
//    }
//    private function __clone(){
//    }
//}
//
//$a = Mysql::create();
//$b = Mysql::create();
///*判断两个类是否为同一个类*/
//echo $a===$b ? 1 : 0;die;
//
//$a = 2;
//$b = 3;
//if ($a = (3 > 1) || $b = 3 > 1 ) {
//   $a ++;
//   $b ++;
//   echo $a."\n";
//   echo $b."\n";
//}
//
//die;
//echo $a = 0 > 1;die;
//
//
//function mid_search($data,$search){
//   $count = count($data);
//   $height = $count - 1;
//   $low = 0;
//
//   while ($low <= $height) {
//     $mid = floor(($height+$low)/2);
//      if ($data[$mid] == $search) {
//          return $mid;
//      }elseif ($data[$mid] > $search) {
//          $height = $mid - 1;
//      }else {
//         $low = $mid + 1;
//      }
//   }
//}
//function mao($data){
//   $count = count($data);
//   if ($count <=1) {
//     return $count;
//   }
//   for ($i=0; $i < $count; $i++) {
//      for ($j=$i+1; $j < $count ; $j++) {
//          if ($data[$j] > $data[$i] ) {
//             $d = $data[$j];
//             $data[$j] = $data[$i];
//             $data[$i] = $d;
//          }
//      }
//     // code...
//   }
//   return $data;
//}
//$data = [1,5,10,3,8];
//$a = mao($data);
//print_r($a);die;
//apc_store('name','aa');
//
//print_r(apc_fetch('name'));die;
//phpinfo();die;
//
//$a = "https://www.cnblogs.com/dazzler/p/3817677.html?a=1";
//
//print_r(pathinfo($a));
