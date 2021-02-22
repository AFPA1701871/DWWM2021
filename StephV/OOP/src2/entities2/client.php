<?php
class client{
    private $id;
    private $account;
    
    public function __construct(string $id,array $account){
        $this->_id=$id;
        $this->_account=$account;
    }

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getAccount(){
		return $this->account;
	}

	public function setAccount($account){
		$this->account = $account;
	}


    public function displayInfo($id,$account){
        echo $this->getId();
    }
}
//SEE PHP ARRAY ACCESS
/*Objects implementing ArrayAccess may return objects by references in PHP 5.3.0.

You can implement your ArrayAccess object like this:

    class Reflectable implements ArrayAccess {

        public function set($name, $value) {
            $this->{$name} = $value;
        }

        public function &get($name) {
            return $this->{$name};
        }

        public function offsetGet($offset) {
            return $this->get($offset);
        }

        public function offsetSet($offset, $value) {
            $this->set($offset, $value);
        }

        ...

    }

This base class allows you to get / set your object properties using the [] operator just like in Javascript:

    class Boo extends Reflectable {
        public $name;
    }

    $obj = new Boo();
    $obj['name'] = "boo";
    echo $obj['name']; // prints boo*/
?>