<?php

namespace App\Controllers;

use App\Models\msusermeesageModel;

class Home extends BaseController
{

    protected $usermessageModel;

    public function __construct()
    {
        $this->usermessageModel = new msusermeesageModel();
    }

    public function index()
    {
        return view('pages/main');
    }

    public function savemessage()
    {
        date_default_timezone_set('Asia/Jakarta');
        $varnama = $this->request->getVar('name');
        $varemail = $this->request->getVar('email');
        $varphone = $this->request->getVar('phone');
        $varmessage = $this->request->getVar('message');

        $this->usermessageModel->save([
            'nama' => $varnama,
            'email' => $varemail,
            'phone' => $varphone,
            'pesan' => $varmessage
        ]);

        session()->setFlashdata('pesan', 'berhasil');

        return redirect()->to('/');
    }
}
