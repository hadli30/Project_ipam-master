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

		$this->load->view('Konten/subnets', $data);
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
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="hapusData('.$dt->id.')"><i class="fas fa-times fa-xs" aria-hidden="true"></i></a>
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
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="editData('.$dt->id.')" title="Edit Subnets : '.$dt->abis_Ip_address.'"><i class="fas fa-pen fa-xs" aria-hidden="true"></i></a>
										<a class="btn btn-primary btn-sm px-1 py-0 m-0" role="button" href="#" onClick="hapusData('.$dt->id.')"><i class="fas fa-times fa-xs" aria-hidden="true"></i></a>
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

	function editSubnets($data){
		$id = $data;
		$sql = $this->Model_query->getDataSubnetsWhere($id);
		$dt = $sql->result();
		if($dt){
			
			$data = array(
				'Id'=> $dt[0]->id,
				'Area'=>$dt[0]->area,
				'Hostname'=>$dt[0]->hostname,
				'Router_name'=>$dt[0]->router_name,
				'Site_id'=>$dt[0]->site_id,
				'Tower_index'=>$dt[0]->tower_index
				
			);
				// echo $data;
			$this->load->view('Konten/edit_subnets', $data);

		}else{
			echo "gagal";
		}
	}

	function editDataSubnets(){
		$id =  $this->input->post('id');
		$area = $this->input->post('area');
		$hostname = $this->input->post('hostname');
		$router_name	= $this->input->post('router_name');
		$site_id = $this->input->post('site_id');
		$tower_index = $this->input->post('tower_index');


		$data = array(
			'Area' => $area,
			'Hostname' => $hostname,
			'Router_name' => $router_name,
			'Site_id' => $site_id,
			'Tower_index' => $tower_index
		);
		
		$update = $this->db->update('data1', $data, array('Id' => $id));

		$sql = $this->Model_global->getSelectedwhere('data1', $data);
		if($sql->num_rows()>0){
		  echo json_encode(array('status' => 'sukses'));
		}else{
		  echo json_encode(array('status' => 'gagal'));
		}
		
		
	}


	function deleteData($id){
		$key = array('Id' => $id);
		$sql1 = $this->Model_global->getSelectedwhere('data1', $key);
		$sql1 = $sql1->num_rows();
		if($sql1 > 0){
			$sql1 = $this->Model_global->delete('data1',$key);
			echo json_encode(array('status' => 'sukses'));
		}else{
			echo json_encode(array('status' => 'gagal'));
		}
	}

	
}
