<?php

/**
*
*/
class Model{

	public $_db = null;
	public $_tablename = '';
	public $_primary_key = 'id';
	private $return = array();

	public function __construct($db){
		$this->_db = $db;
	}

	public function get(){
		$query = 'select * from ' . $this->_tablename;
		$resultset = mysqli_query($this->_db, $query);
		while ($result = mysqli_fetch_object($resultset)) {
			$this->return[] = $result;
		}
		return $this->return;
	}

	public function get_by($id){
		$query = 'select * from ' . $this->_tablename . ' where ' . $this->_primary_key . '="' . $id .'"';
		$resultset = mysqli_query($this->_db, $query);
		while ($result = mysqli_fetch_object($resultset)) {
			$this->return[] = $result;
		}
		return $this->return;
	}

	public function get_in($ids){
		$query = 'select * from ' . $this->_tablename . ' where ' . $this->_primary_key . ' in (';
			$query .= implode(',', $ids);
		$query .= ')';
		$result = mysqli_query($this->_db, $query);
		return $result;
	}

	public function insert($data){
		$columns = array_keys($data);

		$query = 'insert into '.$this->_tablename;
		$query .= ' (' . implode(',', $columns) . ')';
		$query .= ' values ';
		//$query .= '("Samsung S7", "'.date('Y-m-d H:i:s').'") ';
		$query .= '(" ' . implode('","', $data) . ' ") ';

		return mysqli_query($this->_db, $query);

	}

}
