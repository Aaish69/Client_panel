<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Site_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    function insert_client_data($data)
    {
        $this->db->insert("client_info", $data);
    }

    function select_all_clients()
    {
        $this->db->select("*");
        $query = $this->db->get("client_info");
        return $query;
    }
    function select_single_client($id)
    {
        return $this->db->query("SELECT * FROM `client_info` WHERE `id = $id`");
    }

    function get_search_results()
    {
        if(ISSET($_POST['keyword']))
        {
            $keyword = $_POST['keyword'];
        }
        $result = $this->db->query("SELECT * FROM `client_info` WHERE `name` LIKE '%$keyword%' ORDER BY `name`");
        // $this->db->from("client_info");
        // $this->db->where("name")
        return $result;

    }

    
}