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
   }



   public function setFields() {
    if ($fields!="" && $fields!="*" ){
        array_push($this->fields, $fields);
    }
    else return(false);
   }

   public function getFields() {
       return $this->fields;
   }

   public function setTable() {
    if ($table!="" && $table!="*" ){
        array_push($this->table, $table);
    }
    else return(false);
    }
   }

   public function getTables(){
       return $this->table;
   }

   protected function select() {
    
    $this->query = "SELECT $fields FROM $table WHERE $condition";
    return($query);
   }
   protected function insert(){
       
    $this->values = array_map('mysql_real_escape_string', array_values($inserts));
    $this->keys = array_keys($inserts);   
    $this->query = ;
    return($query);
}
    protected function update(){
        $this->query = "SELECT $fields FROM $tables WHERE $condition";
        return($query);
    }
    protected function delete(){
        $this->query = "SELECT $fields FROM $tables WHERE $condition";
        return($query);
    }
}
