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
	public function index()
	{	
        $data = array(
               
        );

		$this->load->view('Konten/subnets_md3', $data);
    }
    
    function getData(){
		$table = '';
		$sql = $this->db->query("select * from data1");

		$sql = $this->Model_query->getDataSubnets();

		if($sql->num_rows() > 0){
			$no=1;
			foreach($sql->result() as $dt){
				$table .='
							<tr>
								<th>
									<div class="btn-group">
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="editData('.$dt->id.')" title="Edit Subnets : '.$dt->abis_Ip_address.'"><i class="fas fa-pen fa-xs" aria-hidden="true"></i></a>
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onclick="delete()"><i class="fas fa-times fa-xs" aria-hidden="true"></i></a>
									</div>
								</th>
								<td style="font-size: 9px;">'.$no++.'</td>
								<td style="font-size: 9px;">'.$dt->area.'</td>
								<td style="font-size: 9px;">'.$dt->hostname.'</td>
								<td style="font-size: 9px;">'.$dt->router_name.'</td>
								<td style="font-size: 9px;">'.$dt->site_id.'</td>
								<td style="font-size: 9px;">'.$dt->tower_index.'</td>
								<td style="font-size: 9px;">'.$dt->abis_S_vid.'</td>
								<td style="font-size: 9px;">'.$dt->abis_C_vid.'</td>
								<td style="font-size: 9px;">'.$dt->abis_Ip_address.'</td>
								<td style="font-size: 9px;">'.$dt->abis_Ip_gateway.'</td>
								<td style="font-size: 9px;">'.$dt->abis_subnet.'</td>
								<td style="font-size: 9px;">'.$dt->oam_s.'</td>
								<td style="font-size: 9px;">'.$dt->oam_c.'</td>
								<td style="font-size: 9px;">'.$dt->oam_ip.'</td>
								<td style="font-size: 9px;">'.$dt->oam_gate.'</td>
								<td style="font-size: 9px;">'.$dt->oam_subnet.'</td>
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
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="editData('.$dt->Id.')" title="Edit Subnets : '.$dt->abis_Ip_address.'"><i class="fas fa-pen fa-xs" aria-hidden="true"></i></a>
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onclick="delete('.$dt->Id.')"><i class="fas fa-times fa-xs" aria-hidden="true"></i></a>
									</div>
								</th>
								<td style="font-size: 9px;">'.$no++.'</td>
								<td style="font-size: 9px;">'.$dt->area.'</td>
								<td style="font-size: 9px;">'.$dt->hostname.'</td>
								<td style="font-size: 9px;">'.$dt->router_name.'</td>
								<td style="font-size: 9px;">'.$dt->site_id.'</td>
								<td style="font-size: 9px;">'.$dt->tower_index.'</td>
								<td style="font-size: 9px;">'.$dt->abis_S_vid.'</td>
								<td style="font-size: 9px;">'.$dt->abis_C_vid.'</td>
								<td style="font-size: 9px;">'.$dt->abis_Ip_address.'</td>
								<td style="font-size: 9px;">'.$dt->abis_Ip_gateway.'</td>
								<td style="font-size: 9px;">'.$dt->abis_subnet.'</td>
								<td style="font-size: 9px;">'.$dt->oam_s.'</td>
								<td style="font-size: 9px;">'.$dt->oam_c.'</td>
								<td style="font-size: 9px;">'.$dt->oam_ip.'</td>
								<td style="font-size: 9px;">'.$dt->oam_gate.'</td>
								<td style="font-size: 9px;">'.$dt->oam_subnet.'</td>
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

			</tr>';
			echo json_encode(array('status'=>'Gagal','Data'=>$table));
		}

	}

	function editData($data){
		$id = $data;
		$sql = $this->Model_query->getDataSubnetsWhere($id);
		$dt = $sql->result();
		if($dt){
			print_r($dt);

		}else{
			echo "gagal";
		}
	
	}

	function editData2($id){
	$data = array('id' => $id);
		$this->load->view('Konten/edit_subnets', $data);
	}
}
