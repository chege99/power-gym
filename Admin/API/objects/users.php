
<?php
/**
 * 
 */
class Users
{
	private $conn;
	private $table_name="tbl_users";

	//tbl_user
	public $user_id	;
	public $password;	
	public $rest_token;	
	public $person_id;	
	public $added_by_uid;

	function __construct($db)
	{
		$this->conn=$db;		
	}

	function create(){
		//$pers_id=createPerson();

		// query to insert record
		    $query = "INSERT INTO
		                " . $this->table_name . "
		              SET
			              password=:password,
			              person_id=:person_id,
			              added_by_uid=:added_by_uid";
		    // prepare query
		    $stmt = $this->conn->prepare($query);
		    // sanitize
		    $this->password=htmlspecialchars(strip_tags($this->password));
		    $this->person_id=htmlspecialchars(strip_tags($this->person_id));
		    $this->added_by_uid=htmlspecialchars(strip_tags($this->added_by_uid));
		 
		    // bind values
		    $stmt->bindParam(":password", $this->password);
		    $stmt->bindParam(":person_id", $this->person_id);
		    $stmt->bindParam(":added_by_uid", $this->added_by_uid);
		 
		    // execute query
		    if($stmt->execute()){
		        return true;
		    }

		    return false;
	}
	function read(){
		//user_id,password,rest_token,person_id,added_by_uid		//person_id,firstname,lastname,email,phone,address,date_added

			$query="SELECT 
			     		usr.user_id,usr.password,usr.rest_token,usr.person_id,usr.added_by_uid,
			     		psn.person_id,psn.firstname,psn.lastname,psn.email,psn.phone,psn.address,psn.date_added
			     	FROM
			     		".$this->table_name." usr
			     	LEFT JOIN
			     		tbl_people psn
			     	ON
			     		usr.person_id = psn.person_id
			     	ORDER BY
			     		psn.date_added
			     	DESC
			     		";
			//prepare query statement
			$stmnt=$this->conn->prepare($query);
			//execute query
			$stmnt->execute();

			return $stmnt;
	}
	function readOne(){	
		 // query to read single record
		    $query = "SELECT 
			     		usr.user_id,usr.password,usr.rest_token,usr.person_id,usr.added_by_uid,
			     		psn.person_id,psn.firstname,psn.lastname,psn.email,psn.phone,psn.address,psn.date_added
			     	FROM
			     		".$this->table_name." usr
			     	LEFT JOIN
			     		tbl_people psn
			     	ON
			     		usr.person_id = psn.person_id

		            WHERE
		                usr.user_id  = ?
		            LIMIT
		                0,1";
		 
		    // prepare query statement
		    $stmt = $this->conn->prepare( $query );
		 
		    $stmt->bindParam(1, $this->user_id);
		 
		    // execute query
		    $stmt->execute();
		 
		    // get retrieved row
		    $row = $stmt->fetch(PDO::FETCH_ASSOC);
		 
		    // set values to object properties
		
		    //tbl_user
			 $this->user_id=$row['user_id'];
			 $this->password=$row['password'];

			//tbl_people
			 $this->firstname=$row['firstname'];	
			 $this->lastname=$row['lastname'];	
			 $this->email=$row['email'];
			 $this->phone=$row['phone'];
			 $this->address=$row['address'];
			 $this->date_added=$row['date_added'];
	}



		function update(){
		 
		    // update query
		    $query = "UPDATE
		                " . $this->table_name . "
		            SET
		            	rest_token = :rest_token,
		                password = :password		               
		            WHERE
		                user_id = :user_id";
		 
		    // prepare query statement
		    $stmt = $this->conn->prepare($query);
		 
		    // sanitize

		    $this->user_id=htmlspecialchars(strip_tags($this->user_id));
		    $this->password=htmlspecialchars(strip_tags($this->password));
		    $this->rest_token=htmlspecialchars(strip_tags($this->rest_token));
		 
		    // bind new values
		   
		    $stmt->bindParam(':user_id', $this->user_id);
		    $stmt->bindParam(':password', $this->password);
		    $stmt->bindParam(':rest_token', $this->rest_token);
		 
		    // execute the query
		    if($stmt->execute()){
		        return true;
		    }
		 
		    return false;
		}//end update()

		function delete(){
		 
		    // delete query
		    $query = "DELETE FROM " . $this->table_name . " WHERE user_id = ?";
		 
		    // prepare query
		    $stmt = $this->conn->prepare($query);
		 
		    // sanitize
		    $this->user_id=htmlspecialchars(strip_tags($this->user_id));
		 
		    // bind id of record to delete
		    $stmt->bindParam(1, $this->user_id);
		 
		    // execute query
		    if($stmt->execute()){
		        return true;
		    }
		 
		    return false;
		     
		}//End delete()

	function search(){	}
	function count(){	}

}
