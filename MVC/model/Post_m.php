<?php 
    require_once "config/database.php";
    class Post_m extends database
    {
        protected $table = "post";
        public function __construct()
        {
            parent:: __construct();
        }
        public function getAll() {
            $query = "select * from " . $this->table;
            $rs = mysqli_query($this->conn, $query);
            $result = array();
            while ($row = mysqli_fetch_array($rs)) {
                $result[] = array(
                    'id'        => $row['id'],
                    'content'   => $row['content'],
                );
            }
            return $result;
        }
        public function getRow($id) {
            $query = "select * from " . $this->table . " where id = ". $id .";";
            $rs = mysqli_query($this->conn, $query);
            $data = array();
            while ($row = mysqli_fetch_array($rs)) {
                $data[] = array(
                    'id'        => $row['id'],
                    'content'   => $row['content'],
                );
            }
            return $data;
        }
        public function insert($content) {
            $query = "insert into " . $this->table . "(content) value ('". $content ."') ;";
            $rs = mysqli_query($this->conn, $query);
            return $rs;
        }
        public function update($content, $id) {
            $query = "update " . $this->table . " set content = '". $content ."' where id=".$id.";";
            $rs = mysqli_query($this->conn, $query);
            return $rs;
        }
        public function del($id) {
            $sql = "delete from " . $this->table . " where id='".$id."';";
            $rs = mysqli_query($this->conn, $sql);
            return $rs;
        }
        public function search($search) {
           $query = "select * from " . $this->table . " where content like '%".$search."%' ";
           // echo $query;
           // die();
            $rs = mysqli_query($this->conn, $query);
            $search = array();
            if(mysqli_num_rows($rs) > 0){
                while ($row = mysqli_fetch_array($rs)) {
                    $search[] = array(
                        'id'        => $row['id'],
                        'content'   => $row['content'],
                    );
                }
            }
            return $search;
        }
    }
?>
