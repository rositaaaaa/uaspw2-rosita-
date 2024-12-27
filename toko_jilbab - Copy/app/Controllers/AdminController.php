<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{

    public function showError($message = 'Terjadi kesalahan yang tidak diketahui.')
    {
        // Tampilkan error dengan template default
        return view('errors/error_general', ['message' => $message]);
    }


    public function editBuku()
    {
        $id = $this->request->getPost('id'); // Ambil ID dari form
        $data = $this->request->getPost(); // Ambil data dari form
        unset($data['id']); // Hilangkan ID dari array data

        $fileGambar = $this->request->getFile('Gambar'); // Ambil file gambar baru (jika ada)

        if ($fileGambar && !$fileGambar->hasMoved()) {
            // Simpan file gambar baru dan update path
            $path = $fileGambar->store('images');
            $data['Gambar'] = $path;
        }

        $bookModel = model('BookModel'); // Load model

        if ($bookModel->update($id, $data)) { // Coba update data
            return redirect()->to('admin/daftar-jilbab')->with('berhasil', 'Data berhasil diperbarui');
        } else {
            return redirect()->to('admin/daftar-jilbab')->with('error', 'Data gagal diperbarui');
        }
    }

    public function index()
    {
        //
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function daftarBuku()
    {
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();

        return view('admin/daftar-jilbab', $data);
    }

    public function createBuku()
    {
        $data = $this->request->getPost();
        $fileGambar = $this->request->getFile('Gambar');

        if (!$fileGambar->hasMoved()) {
            $path = $fileGambar->store('images');
            $data['Gambar'] = $path;
        }

        $bookModel = model('BookModel');

        if ($bookModel->insert($data, false)) {
            return redirect()->to('admin/daftar-jilbab')->with('berhasil', 'Data berhasil disimpan');
        } else {
            return redirect()->to('admin/daftar-jilbab')->with('error', 'Data gagal disimpan');
        }
    }

    public function hapusBuku()
    {
        $id = $this->request->getPost('id_hapus'); // Ambil ID dari form
        $bookModel = model('BookModel'); // Load model

        if ($bookModel->delete($id)) { // Coba hapus data berdasarkan ID
            return redirect()->to('admin/daftar-jilbab')->with('berhasil', 'Data berhasil dihapus');
        } else {
            return redirect()->to('admin/daftar-jilbab')->with('error', 'Data gagal dihapus. Pastikan ID valid.');
        }
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }
}
