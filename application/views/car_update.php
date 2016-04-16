<?php
ob_start();
include("staff_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Car Update",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-car" style="padding-right:10px;"></i>Car Record Update</h1>
            <p>Please make amendments to the car record and save. This will update the stock database.</p>
        </header>

        <hr>

            <!-- Update Info Form -->
                <div class="panel panel-primary margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-car" style="padding-right:10px;"></i>Update Car record</h3>
                    </div>
                    <div class="panel-body">

                    <?php echo form_open('site/update'); foreach ($record as $data) { ?>
                    <input type="hidden" name="id" title="id" value="<?php echo $data->car_id; ?>"></input> 

                            <div class="form-group">
                                <label for = "make">Car Make:</label>
                                <input type="text" class="form-control" id="make" name="make" value="<?php echo $data->car_make; ?>" placeholder="E.g. - Honda, Mitsubishi, Subaru" />
                                <!--<p><?php echo form_error('make'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "model">Car Model:</label>
                                <input type="text" class="form-control" id="model" name="model" value="<?php echo $data->car_model; ?>" placeholder="E.g. - NSX, Evolution, Impreza"  /> 
                                <!--<p><?php echo form_error('model'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "miles">Car Miles:</label>
                                <input type="text" class="form-control" id="miles" name="miles" value="<?php echo $data->car_miles; ?>" placeholder="E.g. - 9500, 10562, 125000" />
                                <!--<p><?php echo form_error('miles'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "year">Year of manufacture:</label>
                                <input type="number" class="form-control" id="year" name="year" value="<?php echo $data->car_year; ?>" placeholder="E.g. - 1995, 2001, 2016"  />
                                <!--<p><?php echo form_error('year'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "price">Ticket price of vehicle:</label>
                                <input type="number" class="form-control" id="price" name="price" value="<?php echo $data->car_price; ?>" placeholder="E.g. - 5995, 10995, 25995" />
                                <!--<p><?php echo form_error('price'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "trans">Transmission Type:</label>
                                <input type="text" class="form-control" id="trans" name="trans" value="<?php echo $data->car_transmission; ?>" placeholder="E.g. - MAN or AUT" />
                                <!--<p><?php echo form_error('trans'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "special">Special Offer Code:</label>
                                <input type="text" class="form-control" id="special" name="special" value="<?php echo $data->special_id; ?>" placeholder="E.g. - Special10, Special20, NUL" />
                                <!--<p><?php echo form_error('special'); ?></p>-->
                            </div>

                            <button type="submit" class="btn btn-primary">Update Car Information</button>
                            
                             <?php } echo form_close();?>
                          
                        </form>

                       
                    
                    </div>
                        
                </div>
                <!-- End Sign Up Form -->
<hr>
<?php include 'footer.php' ?>
</div>