<?

class Lock {

 protected $isLocked;

 public function Lock(){

   return $this->isLocked = true;

 }

 //Getter

 public function isLocked() {

   return $this->isLocked;

 }

}
