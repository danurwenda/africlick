<?php

defined('BASEPATH') OR
        exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users_model
 *
 * @author Administrator
 */
class Users_model extends CI_Model {

    public $table = 'users';
    public $primary_key = 'user_id';

    public function __construct() {
        parent::__construct();
    }

    public function get_login_info($u) {
        $this->db->where('name', $u)->limit(1);
        $q = $this->db->get($this->table);
        return ($q->num_rows() > 0) ? $q->row() : false;
    }

    public function get_user($id) {
        $this->db->where($this->primary_key, $id)->limit(1);
        $q = $this->db->get($this->table);
        return ($q->num_rows() > 0) ? $q->row() : false;
    }

    public function auth($plain_u, $plain_p) {
        $sql = "SELECT hash FROM users WHERE name = ? limit 1";
        $query = $this->db->query($sql, array($plain_u));
        if ($query->num_rows() > 0) {
            $hashdb = $query->row()->hash;
            $hashinput = crypt($plain_p, $hashdb);
            return hash_equals($hashdb, $hashinput);
        }
        return false;
    }

    public function add_user($username, $password) {
        // A higher "cost" is more secure but consumes more processing power
        $cost = 10;

        // Create a random salt
        $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

        // Prefix information about the hash so PHP knows how to verify it later.
        // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
        $salt = sprintf("$2a$%02d$", $cost) . $salt;

        // Value:
        // $2a$10$eImiTXuWVxfM37uY4JANjQ==
        // Hash the password with the salt
        $hash = crypt($password, $salt);
        
        //insert into db
        $this->db->insert($this->table,[
            'name'=>$username,
            'hash'=>$hash
        ]);
    }

}
