<label>City</label>
          <?php if (isset($_GET['City'])) { ?>
               <input type="text" 
                      name="City" 
                      placeholder="City"
                      value="<?php echo $_GET['City']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="City" 
                      placeholder="City"><br>
          <?php }?>