<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inspection
 *
 * @author User
 */
class Inspection extends MY_Model {

    const DB_TABLE = 'dg_inspection';
    const DB_TABLE_PK = 'id';

    public $id;
    public $vehicle_id;
    public $engine_type;
    public $chassis_number;
    public $engine_number;
    public $silencer_leak;
    public $oil_leak;
    public $air_leak;
    public $fuel_tank_cap;
    public $plug_top;
    public $engine_idle_RPM;
    public $abnormal_vibration;
    public $water_leakages;
//    public $created_datetime;
    public $created_user;
    public $inspec_result;
    public $booking_id = 0;
    public $center_id;

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function getPostData() {
        $this->vehicle_id = $this->input->post('vehicle_id');
        $this->engine_type = $this->input->post('engine_type');
        $this->chassis_number = $this->input->post('chassis_number');
        $this->engine_number = $this->input->post('engine_number');
        $this->silencer_leak = $this->input->post('silencer_leak');
        $this->oil_leak = $this->input->post('oil_leak');
        $this->air_leak = $this->input->post('air_leak');
        $this->fuel_tank_cap = $this->input->post('fuel_tank_cap');
        $this->plug_top = $this->input->post('plug_top');
        $this->engine_idle_RPM = $this->input->post('engine_idle_RPM');
        $this->abnormal_vibration = $this->input->post('abnormal_vibration');
        $this->water_leakages = $this->input->post('water_leakages');
        $this->inspec_result = $this->input->post('inspec_result');
        $this->booking_id = $this->input->post('booking_id');
    }

    public function getInspectionDetail($inspection_id) {
        $this->db->select('dg_inspection.*,dg_vehicle.reg_no,dg_vehicle.type_code');
        $this->db->from('dg_inspection');
        $this->db->join('dg_vehicle', 'dg_vehicle.id = dg_inspection.vehicle_id');
        $where = " dg_inspection.id = '" . $inspection_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function getCenterInspectionList($center_id) {
        $this->db->select('dg_inspection.*');
        $this->db->from('dg_inspection');
        $where = " center_id = '" . $center_id . "'";
        $this->db->where($where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    public function update_inspec($data, $id) {
        $this->db->where('dg_inspection.id', $id);
        return $this->db->update('dg_inspection', $data);
    }

}
