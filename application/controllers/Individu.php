<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Organisasi
 *
 * @author Slurp
 */
class Individu extends Member_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('individu_model');
    }

    function detail($id) {
        $data['title'] = 'africlick | Individu';
        $data['iid'] = $id;
        $data['css_assets'] = [
            ['module' => 'africlick', 'asset' => 'select2.min.css']
        ];
        $data['js_assets'] = [
            ['module' => 'africlick', 'asset' => 'select2.min.js']
        ];
        $data['profile'] = $this->db->get_where('users', ['user_id' => $id])->row();
        $this->template->display('individu/add_view', $data);
    }

    function index() {
        $data['title'] = 'africlick | Individu';

        //get matches from current user
        $data['matches'] = $this->db->join('users', 'users.user_id=matches.user_2')
                        ->order_by('match_lvl', 'asc')
                        ->get_where('matches', ['user_1' => $this->session->user_id])->result();

        $this->template->display('individu/table_view', $data);
    }

}
