<?php 

class Main {
	public $MySQLi;
	
	public function __construct($Host, $User, $Password, $Database) {
		$this->MySQLi = new mysqli($Host, $User, $Password, $Database);
		
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
	}
			
	public function makeTable() {
		$Result = $this->MySQLi->query("SELECT * FROM series");		
		echo '<table width="200" border="0">';
		for ($i = 1; $i <= $Result->num_rows; $i++) {
			while ($Row = $Result->fetch_row()) {
				echo '	<tr>
							<td>'.$Row[0].'</td>
							<td>'.$Row[1].'</td>
						</tr>';
			}
		}		
		echo '</table>';
	}
	
	/* close connection */
		
	public function __destruct() {
		$this->MySQLi->close();	
	}
}
?>