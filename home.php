<?php include 'header.php'; ?>

        <?php 
    if(isset($_GET['edit_pro'])){
    
    include("edit_product.php"); 
    
    }
    if(isset($_GET['view_products'])){
    
    include("view_products.php"); 
    
    }
    ?>
        






        <div class="row">
          <footer id="admin-footer" class="cle">
            <div class="pull-left">
              <b>Copyright </b>&copy; 2020
            </div>
            <div class="pull-right">
              <b>Admin System</b>
            </div>
          </footer>
        </div>

        
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>