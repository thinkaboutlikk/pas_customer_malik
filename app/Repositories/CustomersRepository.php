<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CustomersRepositoryInterface;
use App\Models\Customers;

class CustomersRepository implements CustomersRepositoryInterface
{

    public function allCustomers()
    {
        return Customers::latest()->paginate(10);
    }

    public function storeCustomers($data)
    {
        return Customers::create($data);
    }

    public function findCustomers($id)
    {
        return Customers::find($id);
    }

    public function updateCustomers($data, $id)
    {
        $Customers = Customers::where('id', $id)->first();
        $Customers->kode = $data['kode'];
        $Customers->nama = $data['nama'];
        $Customers->telepon = $data['telepon'];
        $Customers->alamat = $data['alamat'];
        $Customers->save();
    }

    public function destroyCustomers($id)
    {
        $Customers = Customers::find($id);
        $Customers->delete();
    }
}