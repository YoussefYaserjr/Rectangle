    <?php 

class Rectangle{
    private float $lenght;
    private float $widght;
    public function __construct( float $lenght= 1, float $widght=1 ){
    $this->lenght=$lenght;
    $this->widght=$widght;
    }

    public function getArea():float{
        return $this->lenght*$this->widght;
    }

    public function getPerimeter():float{
        return 2*($this->lenght+$this->widght);
    }
    
    public function getleght(){
        return $this->lenght;
    }
    public function setleght($lenght){
    $this->lenght=$lenght;
    }
    
    public function getwidght(){
        return $this->widght;
    }
    public function setwidght($widght){
    $this->widght=$widght;
    }
public function info()
{
  echo'Rectangle [ lenght= '.$this->getleght().' widghth= '.$this->getleght().' ]'.'<br>';
}
}
$ob=new Rectangle(2.4,3.3);
$ob->info();
echo 'area= '.$ob->getArea();
echo'<br>';
echo 'Perimeter= '.$ob->getPerimeter();
echo'<br>';
echo'<br>';
$ob->setleght(1.3);
$ob->setwidght(2.5);
$ob->info();
echo'<br>';
echo 'area= '.$ob->getArea();
echo'<br>';
echo 'Perimeter= '.$ob->getPerimeter();
echo'<br>';

?>
