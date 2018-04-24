<?php
use Phalcon\Mvc\Model;
class Activities  extends Model{

	public function getSource(){
    return "event"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }
}