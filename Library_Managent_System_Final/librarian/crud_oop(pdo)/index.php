<?php include "inc/header.php"; ?>
<?php
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });
?>


<section class="mainleft">

    <?php
    $user = new Student();

    if (isset($_POST['create'])) {
        $b_name = $_POST['b_name'];
        $a_name = $_POST['a_name'];
        $price = $_POST['price'];
        $qnty = $_POST['qnty'];

        $user->setName($b_name);
        $user->setDep($a_name);
        $user->setAge($price);
        $user->setQnty($qnty);

        if ($user->insert()) { 
            echo "Data inserted successfully";
        }
    }

    if (isset($_POST['Update'])) {
        $id   = $_POST['id'];
        $b_name = $_POST['b_name'];
        $a_name  = $_POST['a_name'];
        $price  = $_POST['price'];
        $qnty = $_POST['qnty'];

        $user->setName($b_name);
        $user->setDep($a_name);
        $user->setAge($price);
        $user->setQnty($qnty);

        if ($user->Update($id)) { 
            echo "Data updated successfully";
        }
    }
?>

<?php 
    if (isset($_GET['action']) && $_GET['action']=='delete'){
        $id = (int)$_GET['id'];
        
        if ($user->delete($id)) {
            
            echo "data deleted successfully";
        }
    }
?>

<?php 
    if (isset($_GET['action']) && $_GET['action']=='Update') {
        
        $id = (int)$_GET['id'];
        $result = $user->readById($id);
    
?>

<form action="" method="post">
 <table>

    <input type="hidden" name="id" value="<?php echo $result['id']; ?>" />

    <tr>
        <td>Book Name: </td>
        <td><input type="text" name="b_name" value="<?php echo $result['b_name']; ?>" required="1"/></td>    
    </tr>

    <tr>
       <td>Author Name: </td>
        <td><input type="text" name="a_name" value="<?php echo $result['a_name']; ?>" required="1"/></td>
    </tr>

    <tr>
      <td>Price of Book: </td>
        <td><input type="text" name="price" value="<?php echo $result['price']; ?>" required="1"/></td>
    </tr>
    <tr>
      <td>Quantity: </td>
        <td><input type="text" name="qnty" value="<?php echo $result['qnty']; ?>" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="Update" value="Submit"/>
        
        </td>
    </tr>
  </table>
</form>

<?php } else{ ?>

<form action="" method="post">
 <table>
    <tr>
        <td>Book Name: </td>
        <td><input type="text" name="b_name" placeholder="Book Name.." required="1"/></td>    
    </tr>

    <tr>
       <td>Author Name: </td>
        <td><input type="text" name="a_name"  placeholder="Author Name.." required="1"/></td>
    </tr>

    <tr>
      <td>Price of Book: </td>
        <td><input type="text" name="price"  placeholder="Price of Booke.." required="1"/></td>
    </tr>

    <tr>
      <td>Quantity: </td>
        <td><input type="text" name="qnty" placeholder="Quantity.."  required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="create" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
<?php } ?>
</section>







<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>

<?php
    $i = 0;
    foreach ($user->readAll() as $key => $value) {
           $i++;          
?>
      <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['b_name']; ?></td>
        <td><?php echo $value['a_name']; ?></td>
        <td><?php echo $value['price']; ?></td>
        <td><?php echo $value['qnty']; ?></td>
        <td>
            <?php echo "<a href='index.php?action=Update&id=".$value['id']."'>Update</a>" ;?> || <?php echo "<a href='index.php?action=delete&id=".$value['id']."' onClick='return confirm(\" Are you sure to delete Data ...\")'>Delete</a>" ;?>
        </td>
    </tr>

   
<?php } ?>

  </table>
</section>










<?php include "inc/footer.php"; ?>