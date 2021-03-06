<?php 
class Node{
	public $prev, $next, $number;
	
	public function __construct($number){
		$this->number = $number;
	}
	
	public function printNextNumber() {
		echo $this->next->number;
	}
	
	
	public function get() {
		return $this;
	}
	
}


class doublelink {
	public $head, $tail, $totalnodes = 0;
	
	public function addingNode($node) {
		if ($this->head == false) {
			$this->head = $node;
			$this->tail = $node;
		} else {
			$this->tail->next = $node;
			$node->prev = $this->tail;
			$this->tail = $node;
		}
		$this->totalnodes++;
	}
	
	public function displayHeadTail() {
		echo "Head = " . $this->head->number . "<br>Tail = " . $this->tail->number . "<br>";
	}
	
	public function displayAllNodes(){
		$temp = new Node;
		$temp = $this->head;
		for ($i = 0; $this->totalnodes > $i; $i++) {
			if ($i == 0 ) {
				echo "Nodes #" . $i. " = "  . $this->head->number . "<br>";
			} else {
				echo "Nodes #" . $i ." = "  . $temp->number . "<br>";
			}
			$temp = $temp->next;
		}
	}
	
	public function insertNode($nodeNumber, $node) {
		if ($this->totalnodes == 0) {
			echo "Can't insert! 0 node inside doublelink<br>";
		}
		if ($this->totalnodes < $nodeNumber) {
			echo "Can't insert into Node #" . $nodeNumber . "! Total node = " . $this->totalnodes . "<br>";
		}
		
		if ($nodeNumber >= 0 && $nodeNumber <= $this->totalnodes) {
			$tempHead = new Node;
			$tempTail = new Node;
			$temp = new Node;
			$temp1 = new Node;
			$temp2 = new Node;
			
			if ($this->totalnodes == $nodeNumber) {
				$this->tail->next = $node;
				$node->prev = $this->tail;
				$this->tail = $node;
				$this->totalnodes++;
				
			} else if ($nodeNumber == 0) {
				$this->head->prev = $node;
				$node->next = $this->head;
				$this->head = $node;
				$this->totalnodes++;
				
			} else {
				
				$tempHead = $this->head;
				
				for ($i = 1; $i < $nodeNumber; $i++) {
					$tempHead = $tempHead->next;
				}
				$tempTail = $tempHead->next;
				$node->next = $tempTail;
				$node->prev = $tempHead;
				$tempHead->next = $node;
				$tempTail->prev = $node;
				$this->totalnodes++;
		
			}	
		}
	}
	
}
$doublelink1 = new doublelink;

$node0 = new Node(0);
$node1 = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);
$node5 = new Node(5);
$node6 = new Node(6);
$node7 = new Node(7);

$doublelink1->addingNode($node1);
$doublelink1->addingNode($node2);
$doublelink1->addingNode($node4);
$doublelink1->addingNode($node6);

$doublelink1->insertNode(0, $node0);
$doublelink1->insertNode(3, $node3);
$doublelink1->insertNode(5, $node5);
$doublelink1->insertNode(7, $node7);

$doublelink1->displayAllNodes();

?>
