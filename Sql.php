<?
class Sql {
   protected $query;
   protected $table;
   protected $fields;
   protected $condition;
   protected $limit;
   protected $errors;
   protected $values;
   private $link;

   function __construct() {
    $this->query = '';
    $this->table = '';;
    $this->fields = [];
    $this->errors = [];
    $this->limit = '1';
    $this->condition = '';
    $this->link = $link;
    $this->values= '';
   }

public function setFields($fields) {
    $fields = trim($fields);
    if ($fields != '*' && $fields)
    {
      array_push($this->fields, $fields);
      return true;
    }
    return false;
  }

public function getFields() {
    return $this->fields;
   }

public function setTable($table) {
    $table = trim($table);
    if ($table != '*' && $table)
    {
      array_push($this->tableSql, $table);
      return true;
    }
    return false;
  }
 
public function getTables(){
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


/*protected function select() {
    
    $this->query = "SELECT ".$this->getField()." 
    FROM ".$this->getTable()." 
    WHERE ".$this->getCondition()." 
    LIMIT ".$this->getLimit()"
    ";    
    $res = mysql_query($query);
    return($res);*/
}


class 

