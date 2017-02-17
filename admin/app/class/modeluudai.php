<?php

class modeluudai
{
    public $db;

    public function __construct()
    {

        $this->db = new mysqli(HOST, USER_DB, PASS_DB, DB_NAME);
        $this->db->set_charset("utf8");

    } //construct

    public function closeDatabase()
    {
        if ($this->db) {
            mysqli_close($this->db);
        }
    }

    public function create($tieu_de_vi, $noi_dung_vi, $tieu_de_en, $noi_dung_en, $hinh)
    {
        $sql_deals = "INSERT INTO deals(image) VALUES('$hinh')";
        $kq_deals = $this->db->query($sql_deals);
        if ($kq_deals) {
            $id_deals = mysqli_insert_id($this->db);
            $sql_deals_vi = "INSERT INTO deals_language(id_deals,title,content,language) VALUES ('$id_deals', '$tieu_de_vi', '$noi_dung_vi','vi')";
            $sql_deals_en = "INSERT INTO deals_language(id_deals,title,content,language) VALUES ('$id_deals', '$tieu_de_en', '$noi_dung_en','en')";
            $kq_deals_vi = $this->db->query($sql_deals_vi);
            $kq_deals_en = $this->db->query($sql_deals_en);
        }
        if ($kq_deals && $kq_deals_vi && $kq_deals_en)
            return true;
        return false;
    }

    public function update($id_deals, $tieu_de_vi, $noi_dung_vi, $tieu_de_en, $noi_dung_en, $hinh)
    {
        $sql_hinh = "UPDATE deals SET ";
        if ($hinh != null) {
            $sql_hinh .= "image='" . $hinh . "'";
        }
        $sql_hinh .= " where id = {$id_deals}";

        $sql_deals_vi = "UPDATE deals_language SET title ='" . $tieu_de_vi . "', content ='" . $noi_dung_vi . "' WHERE id_deals =" . $id_deals . " AND language = 'vi'";
        $sql_deals_en = "UPDATE deals_language SET title ='" . $tieu_de_en . "', content ='" . $noi_dung_en . "' WHERE id_deals =" . $id_deals . " AND language = 'en'";
        $kq_hinh = $this->db->query($sql_hinh);
        $kq_deals_vi = $this->db->query($sql_deals_vi);
        $kq_deals_en = $this->db->query($sql_deals_en);
        if ($kq_hinh && $kq_deals_vi && $kq_deals_en)
            return true;
        return false;
    }

    public function getAll()
    {
        $sql = "select deals.id, deals.image, deals_language.title, deals_language.content from deals,deals_language WHERE deals.id = deals_language.id_deals AND deals_language.language = 'vi'" ;
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die("Error in query getListResort");
        }
        $list = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $list[] = $row;
        }
        //remove out of memory
        mysqli_free_result($result);
        return $list;
    }

    public function get($id, $lang)
    {
        $sql = "SELECT deals.id, deals.image, deals_language.title, deals_language.content FROM deals, deals_language WHERE deals.id = deals_language.id_deals AND deals_language.language = '" . $lang . "' AND deals.id  =" . $id;
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM deals where id  = {$id}";
        $sql_ngonngu = "DELETE FROM deals_language WHERE id_deals = {$id}";
        $kq_deals = $this->db->query($sql);
        $kq_deals_ngonngu = $this->db->query($sql_ngonngu);
        if ($kq_deals && $kq_deals_ngonngu)
            return true;
        return false;
    }
}