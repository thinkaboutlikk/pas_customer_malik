<?php
namespace App\Repositories\Interfaces;

Interface CustomersRepositoryInterface{
    
    public function allCustomers();
    public function storecustomers($data);
    public function findcustomers($id);
    public function updatecustomers($data, $id); 
    public function destroycustomers($id);
}