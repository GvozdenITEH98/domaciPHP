<?php


if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

class Database {
  private $hostname = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname;
  private $dblink;
  private $result;
  private $records;
  private $affected;

  function __construct($par_dbname) {
    $this->dbname = $par_dbname;
    $this->Connect();
  }

  function Connect() {
    $this->dblink = new mysqli($this->hostname, $this->username, $this->password, "db");
    if ($this->dblink->connect_errno) {
      printf("Konekcija neuspešna: %s\n", $this->dblink->connect_error);
      exit();
    }
    $this->dblink->set_charset("utf8");
  }

  function ExecuteQuery($query) {
    $this->result = $this->dblink->query($query);
    if ($this->result) {
      if (isset($this->result->num_rows)) {
        $this->records = $this->result->num_rows;
      }
      if (isset($this->result->affected_rows)) {
        $this->affected = $this->result->affected_rows;
      }
      return true;
    } else {
      return false;
    }
  }

  function getResult() {
    return $this->result;
  }

  function select($table = "", $rows = "*", $join_table = "", $join_key1 = "", $join_key2 = "", $where = null, $order = null) {
    $q = 'SELECT ' . $rows . ' FROM ' . $table;
    if ($join_table != null) {
      $q .= ' JOIN ' . $join_table . ' ON ' . $table . '.' . $join_key1 . '=' . $join_table . '.' . $join_key2;
    }
    if ($where != null) {
      $q .= ' WHERE ' . $where;
    }
    if ($order != null) {
      $q .= ' ORDER BY ' . $order;
    }

    $this->ExecuteQuery($q) or die(mysqli_error($this->dblink));
  }
  function insert($table = "novosti", $rows = "naslov, tekst, datumvreme, kategorija_id", $values) {
    $query_values = implode('\',\'', $values);
    $q = 'INSERT INTO ' . $table . " ";
    if ($rows != null) {
      $q .= '(' . $rows . ')';
    }
    $q .= " VALUES ('$query_values')";

    if ($this->ExecuteQuery($q) or die(mysqli_error($this->dblink))) {
      return true;
    } else {
      return false;
    }
  }
  function update($table, $id, $keys, $values) {
    $query_values = "";
    $set_query = array();
    for ($i = 0; $i < sizeof($keys); $i++) {
      $set_query[] = "$keys[$i] = '$values[$i]'";
    }
    $query_values = implode(", ", $set_query);
    $q = "UPDATE $table SET $query_values WHERE id=$id";
    if ($this->ExecuteQuery($q) && $this->affected > 0) {
      return true;
    } else {
      return false;
    }
  }

  function delete($table, $id, $id_value) {
    $q = "DELETE FROM $table WHERE $table.$id=$id_value";
    if ($this->ExecuteQuery($q)) {
      return true;
    } else {
      return false;
    }
  }

}
