<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakeputusan_model extends Model
{
    protected $table = 'data_konversi';
    protected $db;
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkeputusan()
    {
        $dataquery1=$this->db->query("select MAX(1) as maxminK1, MAX(2) as maxminK2, MAX(3) as maxminK3, MAX(4) as maxminK4 from data_konversi");
        $rdataquery1=$dataquery1->getResult();

        $dataquery2=$this->db->query("select * from data_konversi");
        $rdataquery2=$dataquery2->getResult();

        //proses ambil bobot 
        $dataquery3=$this->db->query("select nilai from data_bobot where id_krtieria='1'");
        $rdataquery3=$dataquery3->getResult();
        $dataquery4=$this->db->query("select nilai from data_bobot where id_kriteria='2'");
        $rdataquery4=$dataquery4->getResult();
        $dataquery5=$this->db->query("select nilai from data_bobot where id_kriteria='3'");
        $rdataquery5=$dataquery5->getResult();
        $dataquery6=$this->db->query("select nilai from data_bobot where id_kriteria='4'");
        $rdataquery6=$dataquery6->getResult();
        
        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2,'B1' => $rdataquery3,'B2' => $rdataquery4,'B3' => $rdataquery5,'B4' => $rdataquery6) ;
    }

    
}