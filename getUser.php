<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetUser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="user">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="5" style="text-align: center;">Registred User</th>
                        </tr>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">mail</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">password</th>

                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                          include "connection.php";
                          $limit=3;
                          if(isset($_GET['page'])){
                            $page=$_GET['page'];
                          }else{
                            $page=1;
                          }
                          
                          $offset=($page-1)*$limit;
                          $sql="SELECT * FROM user order by id desc limit {$offset},{$limit}";
                          $res=mysqli_query($con,$sql);
                          if(mysqli_num_rows($res)){
                          while($row=mysqli_fetch_assoc($res)){
                        ?>
                      <tr>
                        <th scope="row"><?php echo $row['id']?></th>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['mail']?></td>
                        <td><?php echo $row['mobile']?></td>
                        <td><?php echo $row['pass']?></td>


                      </tr>
                      <?php } }?>
                      
                    </tbody>
                  </table>
                  <nav class="pagin" aria-label="Page navigation example">
                  <?php 
                          $sql1="SELECT * FROM user";
                          $res1=mysqli_query($con,$sql1);
                          if($total_row=mysqli_num_rows($res1)){
                            $limit=3;
                            $total_page=ceil($total_row/$limit);

                            echo ' <ul class="pagination">';
                            if($page>1){
                              echo '<li class="page-item">
                              <a class="page-link" href="getUser.php?page='.($page-1).'" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>';
                            }
                            for($i=1;$i<=$total_page;$i++){
                              echo ' <li class="page-item"><a class="page-link" href="getUser.php?page='.$i.'">'.$i.'</a></li>';
                            }
                            if($total_page>$page){
                              echo '<li class="page-item">
                              <a class="page-link" href="getUser.php?page='.($page+1).'" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>';
                            }
                          }
                        ?>
                   
                      <!-- <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li> -->
                    </ul>
                  </nav>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>