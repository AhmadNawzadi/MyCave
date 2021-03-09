
     <footer>
     <?php if(isset($_SESSION['id'])): ?>
         <a href="<?php echo SITE_URL .  'php/add.php';?>"><button class="add">Add Bottle</button></a>
     </footer>

     <?php else: ?>
         <h4 class="thanks">Drinking Wine, Feeling Fine!</h4> 
     <?php endif; ?>

    <script src="<?php echo SITE_URL . 'assets/libs/jquery/jquery-3.4.1.min.js';?>"></script>
    <script src="<?php echo SITE_URL . 'assets/js/dist/scripts.min.js';?>"></script>
</body>
</html>
