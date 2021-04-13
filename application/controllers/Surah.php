<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surah extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
        echo get_surah();
        exit();
    }
    
    public function find($numb){
        // echo get_surah_verse($numb);
        // exit();
        $response = json_decode(get_surah_verse($numb));
        $ayat = $response->data->verse;
        $array_ayat = (array)$ayat;

        $translate = $response->data->translations->id->verse;
        $array_translate = (array)$translate;

        $tafsir = $response->data->interpretation->id->verse;
        $array_tafsir = (array)$tafsir;

        $nama = $response->data->name;
        $arti_judul = $response->data->translations->id->name;
        $data = [
            'ayat' => $array_ayat,
            'translate' => $array_translate,
            'tafsir' => $array_tafsir,
            'nama' => $nama,
            'arti_judul' => $arti_judul
        ];
        $this->load->view('surat', $data, FALSE);
    }

    public function viewer($numb=null)
	{
        $data = [];
        if($numb === null){
            $data['url'] = site_url("surah");
            $data['json'] = get_surah();
            $data['json_collapsed'] = "false";
        } else {
            $data['url'] = site_url("surah/find/".$numb);
            $data['json'] = get_surah_verse($numb);
            $data['json_collapsed'] = "true";
        }
		
		$this->load->view('viewer', $data);
	}
}
