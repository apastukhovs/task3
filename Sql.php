<?
class Sql {
   protected $my_sql;
   protected $table;
   protected $fields;
   protected $condition;
   protected $limit;
   protected $errors;
   protected $values;
   private $link;

   function __construct() {
    $this->my_sql->query('SET NAMES utf8');
    $this->table = '';;
    $this->fields = [];
    $this->errors = [];
    $this->limit = '1';
    $this->condition = '';
    $this->link = $link;
    $this->values= '';
   }

public function setField($fields) {
    $fields = trim($fields);
    if ($fields != '*' && $fields)
    {
      array_push($this->fields, $fields);
      return true;
    }
    return false;
  }

public function getField() {
    return $this->fields;
   }

public function setTable($table) {
    $table = trim($table);
    if ($table != '*' && $table)
    {
      array_push($this->table, $table);
      return true;
    }
    return false;
  }
 
public function getTable(){
    return $this->table;
}

public function setData($values) {
    if ($values!="") {
        array_push($this->values, $values);
        return true;
    }
    else {
        return(false);
    }
}

public function getData() {
    return $this->values;
}

public function setCondition($condition) {
    $condition = trim($condition);
    if ($condition != '*' && $condition)
        {
            array_push($this->condition, $condition);
            return true;
        }
     return false;
   }


public function getCondition() {
     return $this->$condition;
   }

public function setLimit($limit) 
   {
     $limit = trim($limit);
     if ($limit != '*' && $limit)
     {
       array_push($this->limit, $limit);
       return true;
     }
     return false;
   }   


public function getLimit() 
  {
    if ($this->limit) 
    {
      return $this->limit;
    }
    return false;
  }


protected function select() {
      
    $this->query = "SELECT ".implode(', ',$this->getField())." 
    FROM ".$this->getTable()." 
    WHERE ".$this->getCondition()." 
    LIMIT ".$this->getLimit()"
    ";    
    $result = $this->my_sql->query($query);
    if ($this->my_sql->error) {
      return(false);
    }
    $arr = array();
     while ($row = $result->fetch_assoc())
        $arr[] = $row;
    return $arr; 
}
   
   
protected function insert($table, $object) {
   $fields = array();
   $values = array();
   
   foreach ($object as $column => $value)
      {
        $fields = $this->mysqli->real_escape_string($fields);
        $fields[] = "`$field`";
        if ($value === NULL)
        {
          $values[] = "''";
        }
        else
        {
          $value = $this->mysql->real_escape_string($value);	
          $values[] = "'$value'";
        }
      }
	  
      $fields_s = implode(', ', $fields);
      $values_s = implode(', ', $values); 	
      $sql = 
        "INSERT INTO `%s` (%s) 
         VALUES (%s)";
      $query = sprintf($sql,
      $this->mysql->real_escape_string($table),
                        $columns_s,
                        $values_s);
	$result = $this->mysqli->query($query);
      if ($this->mysqli->error) {
		return (false);
	  }
      return $this->mysqli->insert_id;
    } 
}
