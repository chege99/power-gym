
<?php
class People
{
	private $conn;
	private $table_name="tbl_people";

	//tbl_people
	public $person_id;	
	public $firstname;	
	public $lastname;	
	public $email;
	public $phone;
	public $address;
	public $date_added;
 
	function __construct($db)
	{
		$this->conn=$db;		
	}

	function create(){
		// query to insert record
		    $query = "INSERT INTO
		                ". $this->table_name."
		              SET
		              		firstname=:firstname,
		              		lastname=:lastname,
		              		email=:email,
		              		phone=:phone,
		              		address=:address,
		              		date_added=:date_added
		              		";
		    // prepare query
		    $stmt = $this->conn->prepare($query);
		    // sanitize
		    $this->firstname=htmlspecialchars(strip_tags($this->firstname));
		    $this->lastname=htmlspecialchars(strip_tags($this->lastname));
		    $this->email=htmlspecialchars(strip_tags($this->email));
		    $this->phone=htmlspecialchars(strip_tags($this->phone));
		    $this->address=htmlspecialchars(strip_tags($this->address));
		   	$this->date_added=htmlspecialchars(strip_tags($this->date_added));
		    // bind values
		    $stmt->bindParam(":firstname", $this->firstname);
		    $stmt->bindParam(":lastname", $this->lastname);
		    $stmt->bindParam(":email", $this->email);
			$stmt->bindParam(":phone", $this->phone);
		    $stmt->bindParam(":address", $this->address);	
		    $stmt->bindParam(":date_added", $this->date_added);	 
		    // execute query
		    if($stmt->execute()){
		        return true;
		    }
		 
		    return false;
	}

	// update the product
		function update(){
		 
		    // update query
		    $query = "UPDATE
		                " . $this->table_name . "
						SET
						    	firstname=:firstname,
						  		lastname=:lastname,
						  		email=:email,
						  		phone=:phone,
						  		address=:address
						WHERE
						    person_id = :person_id";
		 
		    // prepare query statement
		    $stmt = $this->conn->prepare($query);
		 
		    // sanitize
		    $this->firstname=htmlspecialchars(strip_tags($this->firstname));
		    $this->lastname=htmlspecialchars(strip_tags($this->lastname));
		    $this->email=htmlspecialchars(strip_tags($this->email));
		    $this->phone=htmlspecialchars(strip_tags($this->phone));		   
		    $this->address=htmlspecialchars(strip_tags($this->address));
		    $this->person_id=htmlspecialchars(strip_tags($this->person_id));
		 
		    // bind new values
		    $stmt->bindParam(':firstname', $this->firstname);
		    $stmt->bindParam(':lastname', $this->lastname);
		    $stmt->bindParam(':email', $this->email);
		    $stmt->bindParam(':phone', $this->phone);
		    $stmt->bindParam(':address', $this->address);
		    $stmt->bindParam(':person_id', $this->person_id);
		 
		    // execute the query
		    if($stmt->execute()){
		        return true;
		    }
		 
		    return false;
		}//end update()
}

?>