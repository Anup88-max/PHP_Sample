<?php include('common/header.php'); 
require_once('../config/db.php');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Products</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php while($row = $result->fetch_assoc()) { ?>
        
        <tr>
                                            <td><?= $row['name']; ?></td>
                                            <td> <?= $row['price']; ?></td>
                                            <td><?= $row['detail']; ?></td>
                                            <td><img src="<?= $row['image'] ?>" /></td>
                                            <td> <a href="product_edit.php?id=<?= $row['id'] ?>" >EDIT</a> | <a href="product_delete.php?id=<?= $row['id'] ?>">DELETE</a> </td>

                                        </tr>
    <?php } ?>
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?php include('common/footer.php'); ?>