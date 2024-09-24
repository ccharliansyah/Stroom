<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_aturan extends CI_Model
{

	var $column_order = array('', 'nama', 'nama_kriteria', 'start', 'end', 'status_aktif'); //set column field database for datatable orderable
	var $column_search = array('A.nama', 'A.nama_kriteria', 'B.start', 'B.end', 'B.status_aktif'); //set column field database for datatable searchable 
	var $order = array('id_jenis' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{

		$this->db->select("B.nama, A.id_jenis, A.id_kriteria, A.nama as nama_kriteria, A.start, A.end, A.status_aktif");
		$this->db->from('kriteria A');
		$this->db->join('jenis B', 'A.id_jenis=B.id_jenis', 'left');
		$this->db->where('B.status_aktif = 1');

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
		$this->db->select("A.nama, A.id_jenis, B.id_kriteria, B.nama as nama_kriteria, B.start, B.end, B.status_aktif");
		$this->db->from('jenis A');
		$this->db->join('kriteria B', 'A.id_jenis=B.id_jenis', 'left');
		$this->db->where('A.status_aktif', '=', 1);
		return $this->db->count_all_results();
	}

	public function getListRules()
	{
		$data = $this->db->query("
						select * from (
						select group_concat(z.id_kriteria separator ',') as dataList, z.id_jenis, z.nama_jenis as nama
						from (
							select A.*, B.nama as nama_jenis from kriteria A 
								left join jenis B 
									on A.id_jenis = B.id_jenis 
								where B.status_aktif = 1 and A.status_aktif = 1 order by a.id_jenis
						) z group by z.id_jenis
						) h
					");
		return $data->result_array();
	}
}
