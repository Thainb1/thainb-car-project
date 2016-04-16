<?php
ob_start();
include("staff_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Add News",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-newspaper-o" style="padding-right:10px;"></i>Add a News Story</h1>
            <p>Please fill out the following details in order to make an addition to the news database</p>
        </header>

        <hr>

            <!-- Sign up Form -->
                <div class="panel panel-primary margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-car" style="padding-right:10px;"></i>Create a new News Article</h3>
                    </div>
                    <div class="panel-body">

                    <?php echo form_open('site/add_news');?> 

                            <div class="form-group">
                                <label for = "art_tit">News Article Title:</label>
                                <input type="text" class="form-control" id="art_tit" name="art_tit" value="<?php echo set_value('art_tit'); ?>" placeholder="E.g. - Fiat have a new safety test" />
                                <!--<p><?php echo form_error('art_tit'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "stamp">Date and Time of Publishing</label>
                                <input type="text" class="form-control" id="stamp" name="stamp" value="<?php echo (new \ DateTime())->format('d-m-y H:i:s'); ?>" placeholder="E.g. - Fiat have a new safety test" readonly/>
                                <!--<p><?php echo form_error('stamp'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "art_body">Body text of Article:</label>
                                <input type="textarea" class="form-control" id="art_body" name="art_body" value="<?php echo set_value('art_body'); ?>" placeholder="E.g. - Full text of the article" />
                                <!--<p><?php echo form_error('art_body'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "author">Author of the Article:</label>
                                <input type="number" class="form-control" id="author" name="author" value="<?php echo set_value('author'); ?>" placeholder="E.g. - 1, 2, 3"  />
                                <!--<p><?php echo form_error('author'); ?></p>-->
                            </div>

                            <button type="submit" class="btn btn-primary">Add News Story</button>
                            
                            
                            
                        </form>

                        <!-- <?php echo form_close();?> -->
                    
                    </div>
                        
                </div>
                <!-- End Sign Up Form -->
<hr>
<?php include 'footer.php' ?>
</div>