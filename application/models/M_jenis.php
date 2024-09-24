<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jenis extends CI_Model
{

	var $column_order = array('', 'nama', 'keterangan'); //set column field database for datatable orderable
	var $column_search = array('A.nama', 'A.keterangan'); //set column field database for datatable searchable 
	var $order = array('id_jenis' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{

		$this->db->select("A.id_jenis, A.nama, A.keterangan, A.status_aktif");
		$this->db->from('jenis A');
		// if ($this->input->post('nama')) {
		// 	$this->db->like('LOWER(B.URAIAN)', strtolower($this->input->post('se_jenis')));
		// }
		// if ($this->input->post('keterangan')) {
		// 	$this->db->like('LOWER(A.NO_DOC)', strtolower($this->input->post('se_nomor')));
		// }
		// if ($this->input->post('se_keterangan')) {
		// 	$this->db->like('LOWER(A.DESC_FILE)', strtolower($this->input->post('se_keterangan')));
		// }
		// if ($this->input->post('se_tanggal')) {
		// 	$this->db->where('A.DMT_DOC', "to_date('" . $this->input->post('se_tanggal') . "','yyyy-mm-dd')", false);
		// }
		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like('LOWER(' . $item . ')', strtolower($_POST['search']['value']));
				} else {
					$this->db->or_like('LOWER(' . $item . ')', strtolower($_POST['search']['value']));
				}

				if (count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if (isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->select("A.id_jenis, A.nama, A.keterangan, A.status_aktif");
		$this->db->from('jenis A');
		return $this->db->count_all_results();
	}

	public function insertJenis($data)
	{
		$this->db->trans_start();

		$this->db->insert('jenis', $data);

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function updateJenis($id, $data)
	{
		$this->db->trans_start();

		$this->db->where('id_jenis', $id);
		$this->db->update('jenis', $data);

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function deleteJenis($id)
	{
		$this->db->trans_start();

		$this->db->where('id_jenis', $id);
		$this->db->delete('jenis');

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function findJenis($id)
	{
		$this->db->select("*");
		$this->db->from('jenis A');
		$this->db->where("id_jenis", $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function allJenis()
	{
		$this->db->select("*");
		$this->db->from('jenis');
		$this->db->where("status_aktif", 1);
		$query = $this->db->get();
		return $query->result_array();
	}
}
