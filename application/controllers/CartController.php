<?php

/**
 *
 */
class CartController extends Controller
{

  public $product_mod = null;

  function __construct()
  {
    parent::__construct();
    $this->product_mod = new ProductModel($this->db);
  }

  public function index()
  {
    $ids = null;

    if($this->session->session_exists('cart')){
      $cart = $this->session->get_session_data('cart');
      foreach($cart as $pro=>$sgl){
            $ids[] = $pro;
      }
    }

    $cart_total = 0;
    if($ids)
      $products = $this->product_mod->get_in($ids);
    else
      $empty_cart = true;

    $this->title = 'Cart' . " | " . $this->title;
    $content = 'views/cart/index.php';
    include(APP . 'views/layouts/_main.php');
  }

  public function add($id)
  {
    if(isset($_SESSION['cart'][$id[0]])){

        $_SESSION['cart'][$id[0]]['quantity']++;
    }else{

      $rlt = $this->product_mod->get_by($id[0]);
      while($row = mysqli_fetch_object($rlt)) {
        $_SESSION['cart'][$row->id] = array(
            "quantity" => 1,
            "price" => $row->price
        );
      }

    }

    header("location: ".URL."cart");

    echo $id[0] . ' to be added in the cart.';
    $this->session->display_session('cart');

    include(APP . 'views/layouts/_main.php');
  }

  public function update()
  {
    if(isset($_POST['submit'])){
      foreach($_POST['quantity'] as $key => $val) {
          if($val==0) {
              unset($_SESSION['cart'][$key]);
          }else{
              $_SESSION['cart'][$key]['quantity'] = $val;
          }
      }

      header("location: ".URL."cart");
    }
  }

  public function remove($id)
  {
    if($id > 0) {
      unset($_SESSION['cart'][$id]);

      header("location: ".URL."cart");
    }
  }
}
