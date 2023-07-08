<?php 
 
class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	public function index()
	{
		$data['barang'] = $this->m_data->tampil_data()->result();
        $this->load->view('dashboard.php', $data);
	}

    function tambah(){
		$this->load->view('v_input');
	}

    function tambah_aksi(){
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_barang = $this->input->post('jumlah_barang');
        $satuan_barang = $this->input->post('satuan_barang');
        $harga_beli = $this->input->post('harga_beli');
        $status_barang = $this->input->post('status_barang');
 
		$data = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'jumlah_barang' => $jumlah_barang,
            'satuan_barang' => $satuan_barang,
            'harga_beli' => $harga_beli,
            'status_barang' => $status_barang,
			);
		$this->m_data->input_data($data,'barang');
		redirect('crud/index');
        return $jumlah_barang;
	}

    function hapus($id_barang){
		$where = array('id_barang' => $id_barang);
		$this->m_data->hapus_data($where,'barang');
		redirect('crud/index');
	}

    function edit($id_barang){
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->m_data->edit_data($where,'barang')->result();
        $this->load->view('v_edit',$data);
    }

    function update(){
        $id_barang = $this->input->post('id_barang');
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $satuan_barang = $this->input->post('satuan_barang');
        $harga_beli = $this->input->post('harga_beli');
        $status_barang = $this->input->post('status_barang');
     
        $data = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'jumlah_barang' => $jumlah_barang,
            'satuan_barang' => $satuan_barang,
            'harga_beli' => $harga_beli,
            'status_barang' => $status_barang
        );
     
        $where = array(
            'id_barang' => $id_barang
        );
     
        $this->m_data->update_data($where,$data,'barang');
        redirect('crud/index');
    }

    function pakai($id_barang){
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->m_data->edit_data($where,'barang')->result();
        $this->load->view('v_pakai',$data);
    }
    
    function pakai_barang(){
        $id_barang = $this->input->post('id_barang');
        $jumlah_barang  =$this->input->post('jumlah_barang');
        $jumlah_pakai = $this->input->post('jumlah_pakai');
        $sisa = $jumlah_barang - $jumlah_pakai;
         
        $data = array(
            'jumlah_barang' => $sisa
        );
         
        $where = array(
           'id_barang' => $id_barang
        );
        
        $this->m_data->update_data($where,$data,'barang');
        redirect('crud/index');
    }

    function nambah($id_barang){
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->m_data->edit_data($where,'barang')->result();
        $this->load->view('v_nambah',$data);
    }
    
    function nambah_barang(){
        $id_barang = $this->input->post('id_barang');
        $jumlah_barang  =$this->input->post('jumlah_barang');
        $jumlah_tambah = $this->input->post('jumlah_tambah');
        $jumlah = $jumlah_barang + $jumlah_tambah;
         
        $data = array(
            'jumlah_barang' => $jumlah
        );
         
        $where = array(
           'id_barang' => $id_barang
        );
        
        $this->m_data->update_data($where,$data,'barang');
        redirect('crud/index');
    }

    
}