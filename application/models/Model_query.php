<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_query extends CI_Model {

    function getDataSubnets(){
        $query = "
		SELECT DATA1.Id as id, DATA1.Area as area, DATA1.Hostname as hostname, DATA1.Router_name as router_name,
		DATA1.Site_id as site_id, DATA1.Tower_index as tower_index, abis_iub_s1.S_vid AS abis_S_vid, abis_iub_s1.C_vid AS abis_C_vid, abis_iub_s1.Ip_address AS abis_Ip_address,  
		abis_iub_s1.Ip_gateway AS abis_Ip_gateway, abis_iub_s1.Subnet AS abis_subnet, oam.S_vid as oam_s, oam.C_vid as oam_c, oam.Ip_address as oam_ip, oam.Ip_gateway as oam_gate, 
		oam.Subnet as oam_subnet
		FROM DATA1
	    INNER JOIN abis_iub_s1 ON DATA1.Id = abis_iub_s1.Id
		INNER JOIN oam ON DATA1.Id = oam.Id 
        ";
        return $result = $this->db->query($query);
	}

	function getDataSubnetsWhere($data){
		$query = "
		SELECT DATA1.Id as id, DATA1.Area as area, DATA1.Hostname as hostname, DATA1.Router_name as router_name,
		DATA1.Site_id as site_id, DATA1.Tower_index as tower_index, abis_iub_s1.S_vid AS abis_S_vid, abis_iub_s1.C_vid AS abis_C_vid, abis_iub_s1.Ip_address AS abis_Ip_address,  
		abis_iub_s1.Ip_gateway AS abis_Ip_gateway, abis_iub_s1.Subnet AS abis_subnet, oam.S_vid as oam_s, oam.C_vid as oam_c, oam.Ip_address as oam_ip, oam.Ip_gateway as oam_gate, 
		oam.Subnet as oam_subnet
		FROM DATA1
	    INNER JOIN abis_iub_s1 ON DATA1.Id = abis_iub_s1.Id
		INNER JOIN oam ON DATA1.Id = oam.Id 
		where DATA1.Id = '$data'
        ";
        return $result = $this->db->query($query);
	}
	

    function getDataSearcingSubnets($status_checkbox,$key1, $key2, $key3, $key4){
        if($status_checkbox == 1){
            $query = "SELECT * from management_ip
			WHERE 
			Tower_index = '$key1' OR 
			Tower_index = '$key2' OR 
			Tower_index = '$key3' OR 
			Tower_index = '$key4' ";
        }else if($status_checkbox == 2){
            $query = "SELECT * from management_ip
			WHERE
			Site_id = '$key1' OR 
			Site_id = '$key2' OR 
			Site_id = '$key3' OR 
			Site_id = '$key4'";
        }else if($status_checkbox == 3){
            $query = "SELECT * from management_ip
			WHERE
			Site_id = '$key1' OR 
			Site_id = '$key2' OR 
			Site_id = '$key3' OR 
			Site_id = '$key4' OR
			Tower_index = '$key1' OR 
			Tower_index = '$key2' OR 
			Tower_index = '$key3' OR 
			Tower_index = '$key4'";
        }

        return $result = $this->db->query($query);
	}
	
	function checkReserved($id, $username){
		$query = "SELECT * FROM management_ip WHERE Id = '$id' AND (Reserved_by = 'Empty' OR Reserved_by = '$username')";
		return $result = $this->db->query($query);
	}

}
?>