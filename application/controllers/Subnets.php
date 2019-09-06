<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subnets extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public  function __construct(){
		parent::__construct();		
			$this->load->library('session');
			// $sess_username = $this->session->userdata('email');
				
		}
		

	 
	public function index()
	{	
        $data = array(
               
        );

		$this->load->view('Konten/subnets', $data);
    }
    
    function getData(){
		$table = '';
		$sql2 = $this->db->query("SELECT Id, Reserved_period FROM management_ip 
		WHERE UNIX_TIMESTAMP() > UNIX_TIMESTAMP(Reserved_period)");

		if($sql2->num_rows() > 0){
			foreach($sql2->result() as $dt){
				$data = array('Reserved_by' => 'Empty',
							   'Tgl_reserved' =>'',
							   'Reserved_period' => ''
				);
				$key = array('Id' => $dt->Id);
				$this->db->update('management_ip', $data, $key);
			}
		}
		 $sql = $this->db->query("select * from management_ip limit 50");

		//$sql = $this->Model_global->get_data_table('management_ip');

		if($sql->num_rows() > 0){
			$no=1;
			foreach($sql->result() as $dt){
				$table .='
							<tr>
								<th>
									<div class="btn-group">
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="updateData('.$dt->Id.')" title="Edit Subnets : '.$dt->Ip_address_abis_iub_s1.'"><i class="fas fa-pen fa-xs" aria-hidden="true"></i></a>
										<button class="btn btn-primary btn-sm px-1 py-0 m-0" type="button" onClick="hapusData('.$dt->Id.')" ><i class="fas fa-times fa-xs" aria-hidden="true"></i></button>
									</div>
								</th>
								<td style="font-size: 9px;">'.$no++.'</td>
								<td style="font-size: 9px;">'.$dt->Area.'</td>
								<td style="font-size: 9px;">'.$dt->Hostname.'</td>
								<td style="font-size: 9px;">'.$dt->Router_name.'</td>
								<td style="font-size: 9px;">'.$dt->Site_id.'</td>
								<td style="font-size: 9px;">'.$dt->Tower_index.'</td>
								<td style="font-size: 9px;">'.$dt->S_vid_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->C_vid_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_address_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_gateway_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->Subnet_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->S_vid_oam.'</td>
								<td style="font-size: 9px;">'.$dt->C_vid_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_address_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_gateway_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Subnet_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Reserved_by.'</td>
							</tr>		
				';
			}
			echo json_encode(array('status'=>'sukses', 'Data'=>$table));
		}else{
			$table .='<tr>
								
								<td style="font-size: 9px;">Tidak ada Data !!!</td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								<td style="font-size: 9px;"></td>
								
			</tr>';
			echo json_encode(array('status'=>'Gagal', 'Data'=>$table));
		}
	}
	
	function searchData(){
		$table = '';
		$query = '';
        $status_checkbox = $this->input->post('status_checkbox');
		$key1 = $this->input->post('key1');
		$key2 = $this->input->post('key2');
		$key3 = $this->input->post('key3');
		$key4 = $this->input->post('key4');


		$sql = $this->Model_query->getDataSearcingSubnets($status_checkbox, $key1, $key2, $key3, $key4);

		if($sql->num_rows() > 0){
			$no= 1;
			foreach($sql->result() as $dt){
				$table .='<tr>
								<th>
									<div class="btn-group">
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="updateData('.$dt->Id.')" title="Edit Subnets : '.$dt->Ip_address_abis_iub_s1.'"><i class="fas fa-pen fa-xs" aria-hidden="true"></i></a>
										<button class="btn btn-primary btn-sm px-1 py-0 m-0" type="button" onClick="hapusData('.$dt->Id.')" ><i class="fas fa-times fa-xs" aria-hidden="true"></i></button>
									</div>
								</th>
								<td style="font-size: 9px;">'.$no++.'</td>
								<td style="font-size: 9px;">'.$dt->Area.'</td>
								<td style="font-size: 9px;">'.$dt->Hostname.'</td>
								<td style="font-size: 9px;">'.$dt->Router_name.'</td>
								<td style="font-size: 9px;">'.$dt->Site_id.'</td>
								<td style="font-size: 9px;">'.$dt->Tower_index.'</td>
								<td style="font-size: 9px;">'.$dt->S_vid_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->C_vid_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_address_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_gateway_abis_iub_s1.'</td>
								<td style="font-size: 9px;">'.$dt->Subnet_oam.'</td>
								<td style="font-size: 9px;">'.$dt->S_vid_oam.'</td>
								<td style="font-size: 9px;">'.$dt->C_vid_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_address_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Ip_gateway_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Subnet_oam.'</td>
								<td style="font-size: 9px;">'.$dt->Reserved_by.'</td>
							</tr>		
						  </tr>';
			}
			echo json_encode(array('status'=>'success','Data'=>$table));
		}else{
			$table .='<tr>
						<td style="font-size: 9px;">Tidak ada Data !!!</td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						<td style="font-size: 9px;"></td>
						
						

			</tr>';
			echo json_encode(array('status'=>'Gagal','Data'=>$table));
		}

	}

	function editData($data){
		$key = array('Id' => $data);
		$sess_username = $this->session->userdata('email');
		//$where = array('Id' => $data, 'Reserved_by' => $sess_username,);
		$check_user = $this->Model_query->checkReserved($data, $sess_username);

		// $check_Reserved_period = $this->Model_query->

		if($check_user->num_rows() > 0){
			$sql = $this->Model_global->getSelectedwhere('management_ip', $key);
				if($sql->num_rows()>0){	
					foreach($sql->result() as $dt){
						$data = array(
						'status'=>'sukses',
						'id' => $dt->Id,
						'area' => $dt->Area,
						'ring' => $dt->Ring,
						'hostname' => $dt->Hostname,
						'router_name' => $dt->Router_name,
						'site_id' => $dt->Site_id,
						'tower_index' => $dt->Tower_index,
						'site_name' => $dt->Site_name,
						'phase' => $dt->Phase,
						'bsc'	=> $dt->Bsc_rnc_lte,
						'hut'	=> $dt->Hut,
						'microwave_link_1' => $dt->Microwave_link_1,
						'cap_abis' => $dt->Cap_abis_iub_s1,
						's_vid_abis' => $dt->S_vid_abis_iub_s1,
						'c_vid_abis' => $dt->C_vid_abis_iub_s1,
						'ip_address_abis' => $dt->Ip_address_abis_iub_s1,
						'ip_gateway_abis' => $dt->Ip_gateway_abis_iub_s1,
						'subnet_abis' => $dt->Subnet_abis_iub_s1,
						'cap_oam' => $dt->Cap_oam,
						's_vid_oam' => $dt->S_vid_oam,
						'c_vid_oam' => $dt->C_vid_oam,
						'ip_address_oam' => $dt->Ip_address_oam,
						'ip_gateway_oam' => $dt->Ip_gateway_oam,
						'subnet_oam' => $dt->Subnet_oam,
						);
					}
					// echo json_encode(array('status'=>'sukses'));
					echo json_encode($data);
				}else{
					echo json_encode(array('sukses'=>'gagal', 'pesan'=>'Data tidak ada'));
				}
		}else{
			echo json_encode(array('sukses'=>'gagal', 'pesan'=>'Ip address has already reserved !!!'));
		}
		
	}

	function editDataSubnets(){
		$sess_username = $this->session->userdata('email');

		$id =  $this->input->post('id');
		$Area = $this->input->post('inputArea');
		$Hostname = $this->input->post('inputHostname');
		$Router_name	= $this->input->post('inputRoutername');
		$Ring	= $this->input->post('inputRing');
		$Site_id	= $this->input->post('inputSiteID');
		$Tower_index = $this->input->post('inputTowerIndex');
		$Site_name = $this->input->post('inputSiteName');
		$Phase = $this->input->post('inputPhase');
		$Bsc_rnc_lte	= $this->input->post('inputBSC');
		$Hut = $this->input->post('inputHUT');
		$Microwave_link_1 = $this->input->post('inputMicrowave');

		$Cap_abis_iub_s1 = $this->input->post('inputCAPabis');
		$S_vid_abis_iub_s1	= $this->input->post('inputSVIDabis');
		$C_vid_abis_iub_s1 = $this->input->post('inputCVIDabis');
		$Ip_address_abis_iub_s1 = $this->input->post('inputIPAddressabis');
		$Ip_gateway_abis_iub_s1 = $this->input->post('inputIPGatewayabis');
		$Subnet_abis_iub_s1	= $this->input->post('inputSubnetabis');

		$Cap_oam = $this->input->post('inputCAPoam');
		$S_vid_oam = $this->input->post('inputSVIDoam');
		$C_vid_oam = $this->input->post('inputCVIDoam');
		$Ip_address_oam	= $this->input->post('inputIPAddressoam');
		$Ip_gateway_oam = $this->input->post('inputIPGatewayoam');
		$Subnets_oam = $this->input->post('inputSubnetoam');

		$key = array('Id' => $id);
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
				'Area' => $Area,
				'Ring' => $Ring,
				'Hostname' => $Hostname,
				'Router_name' => $Router_name,
				'Site_id' => $Site_id,
				'Tower_index' => $Tower_index,
				'Site_name' => $Site_name,
				'Phase' => $Phase,
				'Bsc_rnc_lte'	=> $Bsc_rnc_lte,
				'Hut'	=> $Hut,
				'Microwave_link_1' => $Microwave_link_1,
				'Cap_abis_iub_s1' => $Cap_abis_iub_s1,
				'S_vid_abis_iub_s1' => $S_vid_abis_iub_s1,
				'C_vid_abis_iub_s1' => $C_vid_abis_iub_s1,
				'Ip_address_abis_iub_s1' => $Ip_address_abis_iub_s1,
				'Ip_gateway_abis_iub_s1' => $Ip_gateway_abis_iub_s1,
				'Subnet_abis_iub_s1' => $Subnet_abis_iub_s1,
				'Cap_oam' => $Cap_oam,
				'S_vid_oam' => $S_vid_oam,
				'C_vid_oam' => $C_vid_oam,
				'Ip_address_oam' => $Ip_address_oam,
				'Ip_gateway_oam' => $Ip_gateway_oam,
				'Subnet_oam' => $Subnets_oam,
				// 'Reserved_by' => $sess_username
				// 'Tgl_reserved' => date("Y-m-d H:i:s")
		);
		$check_reserved_by = $this->db->query("select * from management_ip where Id = '$id' and Reserved_by = 'Empty' ");
		//$check_reserved_by = $this->Model_global->getSelectedwhere('management_ip', $key);
		if($check_reserved_by->num_rows() > 0){
			$data = array(
				'Reserved_by' => $sess_username,
				'Tgl_reserved' => date("Y-m-d H:i:s")
			);
			$update = $this->db->update('management_ip', $data, $key);
			$update2 = $this->db->query("UPDATE management_ip
			SET  Reserved_period = DATE_ADD(Tgl_reserved, INTERVAL 2 MINUTE)
			WHERE Id = '$id'");
		}else{
			$update = $this->db->update('management_ip', $data, $key);
		}		
		
		
		$sql = $this->Model_global->getSelectedwhere('management_ip', $key);

		if($sql->num_rows()>0){
		   echo json_encode(array('status' => 'sukses'));
		}else{
		  echo json_encode(array('status' => 'gagal'));
		}
		
		
	}


	function deleteData($id){
		$key = array('Id' => $id);
		$sql1 = $this->Model_global->getSelectedwhere('management_ip', $key);
		$sql1 = $sql1->num_rows();
		if($sql1 > 0){
			$sql1 = $this->Model_global->delete('management_ip',$key);
			echo json_encode(array('status' => 'sukses'));
		}else{
			echo json_encode(array('status' => 'gagal'));
		}
	}

	
}
