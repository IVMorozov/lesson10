<?php
abstract class SaleItem
{
  public $ItemName;
  public $ItemType;
  public $Description;
  abstract public function SetPrice($price);
}
interface Description 
{ 
  public function GetDescription($Descr);
}
class Car extends SaleItem implements Description
{
  public $CarColor;
  public $CarPrice;
  
  public function SetPrice($price)
  {
    $this->CarPrice=$price;
  }
  public function GetDescription($Descr)
  {
    $this->Description=$this->ItemName.' '.$this->ItemType.' '.$this->CarColor.' - '.$this->CarPrice.' руб';
  }
}

class TV extends SaleItem implements Description
{
  public $TVColor;
  public $TVPrice;
  
  public function SetPrice($price)
  {
    $this->TVPrice=$price;
  }
  public function GetDescription($Descr)
  {
    $this->Description=$this->ItemName.' '.$this->ItemType.' '.$this->TVColor.' - '.$this->TVPrice.' руб';
  }
}

class Pen extends SaleItem implements Description
{
  public $PenPrice;
  
  public function SetPrice($price)
  {
    $this->PenPrice=$price;
  }
    public function GetDescription($Descr)
  {
    $this->Description=$this->ItemName.' '.$this->ItemType.' - '.$this->PenPrice.' руб';
  }
}

class Duck extends SaleItem implements Description
{
  public $DuckLiveArea;
  public $DuckPrice;

  public function SetPrice($price)
  {
    $this->DuckPrice=$price;
  }
    public function GetDescription($Descr)
  {
    $this->Description=$this->ItemName.' '.$this->ItemType.' '.$this->DuckLiveArea.' - '.$this->DuckPrice.' руб';
  }
}

class Product extends SaleItem implements Description
{
  public $ProductPrice;
  
  public function SetPrice($price)
  {
    $this->ProductPrice=$price;
  }
    public function GetDescription($Descr)
  {
    $this->Description=$this->ItemName.' '.$this->ItemType.' - '.$this->ProductPrice.' руб';
  }
}

$Item[0][0] = new Car();
$Item[0][0]->ItemName = 'Ford';
$Item[0][0]->ItemType = 'Focus';
$Item[0][0]->CarColor = 'Red';
$Item[0][0]->SetPrice (600000);
$Item[0][0]->GetDescription ($Descr);


$Item[0][1] = new Car();
$Item[0][1]->ItemName = 'Renault';
$Item[0][1]->ItemType = 'Logan';
$Item[0][1]->CarColor = 'Blue';
$Item[0][1]->SetPrice (500000);
$Item[0][1]->GetDescription ($Descr);

$Item[1][0] = new TV();
$Item[1][0]->ItemName = 'LG';
$Item[1][0]->ItemType = "26'";
$Item[1][0]->TVColor = 'White';
$Item[1][0]->SetPrice(20000);
$Item[1][0]->GetDescription ($Descr);

$Item[1][1] = new TV();
$Item[1][1]->ItemName = 'Sony';
$Item[1][1]->ItemType = "32'";
$Item[1][1]->TVColor = 'Black';
$Item[1][1]->SetPrice(30000);
$Item[1][1]->GetDescription ($Descr);

$Item[2][0] = new Pen();
$Item[2][0]->ItemName = 'Eric Crause';
$Item[2][0]->ItemType = 'Gel';
$Item[2][0]->SetPrice(20);
$Item[2][0]->GetDescription ($Descr);

$Item[2][1] = new Pen();
$Item[2][1]->ItemName = 'Bic';
$Item[2][1]->ItemType = 'Ball';
$Item[2][1]->SetPrice(30);
$Item[2][1]->GetDescription ($Descr);

$Item[3][0] = new Duck();
$Item[3][0]->ItemName = 'Grey Duck';
$Item[3][0]->ItemType = '30-50cm';
$Item[3][0]->SetPrice(400);
$Item[3][0]->GetDescription ($Descr);

$Item[3][1] = new Duck();
$Item[3][1]->ItemName = 'White Duck';
$Item[3][1]->ItemType = '50-70cm';
$Item[3][1]->SetPrice(600);
$Item[3][1]->GetDescription ($Descr);

$Item[4][0] = new Product();
$Item[4][0]->ItemName = 'Шариковая ручка';
$Item[4][0]->ItemType = '(Канцтовары)';
$Item[4][0]->SetPrice(50);
$Item[4][0]->GetDescription ($Descr);

$Item[4][1] = new Product();
$Item[4][1]->ItemName = 'Бачок пластиковый';
$Item[4][1]->ItemType = '(Хозтовары)';
$Item[4][1]->SetPrice(300);
$Item[4][1]->GetDescription ($Descr);


echo 'Результат<br><br>';
//echo '<pre>';
//var_dump($Item);
foreach ($Item as $index => $units)
{
  foreach ($units as $index1 => $unit)
    {
    echo $Item[$index][$index1]->Description.'<br>';
    }
}



?>