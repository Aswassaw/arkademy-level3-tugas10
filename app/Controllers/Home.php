<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $produk = $this->ProdukModel->orderBy('id', 'DESC')->findAll();

        return view('home', [
            "produk" => $produk,
        ]);
    }

    public function add()
    {
        return view('add');
    }

    public function insert()
    {
        $produk_baru = [
            'nama_produk' => $this->request->getPost("nama_produk"),
            'keterangan' => $this->request->getPost("keterangan"),
            'harga' => $this->request->getPost("harga"),
            'jumlah' => $this->request->getPost("jumlah"),
        ];
        $this->ProdukModel->save($produk_baru);

        return redirect()->to(base_url('/'))->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = $this->ProdukModel->find($id);

        return view('edit', [
            "produk" => $produk,
        ]);
    }

    public function update($id)
    {
        $produk_pembaruan = [
            'id' => $id,
            'nama_produk' => $this->request->getPost("nama_produk"),
            'keterangan' => $this->request->getPost("keterangan"),
            'harga' => $this->request->getPost("harga"),
            'jumlah' => $this->request->getPost("jumlah"),
        ];
        $this->ProdukModel->save($produk_pembaruan);

        return redirect()->to(base_url('/'))->with('success', 'Produk berhasil diubah.');
    }

    public function delete($id)
    {
        $this->ProdukModel->delete($id);

        return redirect()->to(base_url('/'))->with('success', 'Produk berhasil dihapus.');
    }
}
