<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FurnitureController extends BaseController
{

  private $furniture;
  public function __construct()
  {
    $this->furniture = new \App\Models\FurnitureModel();
  }

  public function FurnitureDetails($id)
  {
    $furniture = $this->furniture->find($id);
    if ($furniture) {
      $data = [
        'furniture' => $furniture
      ];
      return view('FurnitureDetails', $data);
    } else {
      return redirect()->to('/home');
    }
  }
  //Return datas
  public function home()
  {
    $data = [
      'items' => $this->furniture->findAll()
    ];
    return view('index', $data);
  }
}