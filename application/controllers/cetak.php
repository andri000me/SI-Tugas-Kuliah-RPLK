<?php
Class Cetak extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SISTEM INFORMASI MATA KULIAH',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'TINGKAT III REKAYASA PERANGKAT LUNAK KRIPTO',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'ID',1,0);
        $pdf->Cell(40,6,'MATA KULIAH',1,0);
        $pdf->Cell(30,6,'JUDUL',1,0);
        //$pdf->Cell(85,6,'DESKRIPSI',1,0);
        $pdf->Cell(25,6,'DEADLINE',1,1);
        $pdf->SetFont('Arial','',10);
        $tugas = $this->db->get('tugas')->result();
        foreach ($tugas as $row){
            $pdf->Cell(10,6,$row->id,1,0);
            $pdf->Cell(40,6,$row->matakul,1,0);
            $pdf->Cell(30,6,$row->judul,1,0);
            //$pdf->Cell(85,6,$row->deskripsi,1,0); 
            $pdf->Cell(25,6,$row->deadline,1,1); 
        }
        $pdf->Output();
    }
}