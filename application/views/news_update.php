<?php
ob_start();
include("staff_nav.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","News Update",$buffer);
echo $buffer;
?>

<!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><i class="fa fa-newspaper-o" style="padding-right:10px;"></i>News Story Record Update</h1>
            <p>Please make amendments to the news record and save. This will update the snews story bank.</p>
        </header>

        <hr>

<!-- Sign up Form -->
                <div class="panel panel-primary margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-newspaper-o" style="padding-right:10px;"></i>News Record Update</h3>
                    </div>
                    <div class="panel-body">

                    <?php echo form_open('site/update_news'); foreach ($record as $data) { ?>
                    <input type="hidden" name="id" title="id" value="<?php echo $data->news_id; ?>"></input>

                            <div class="form-group">
                                <label for = "art_tit">News Article Title:</label>
                                <input type="text" class="form-control" id="art_tit" name="art_tit" value="<?php echo $data->article_title; ?>" placeholder="E.g. - Fiat have a new safety test" />
                                <!--<p><?php echo form_error('art_tit'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "stamp">Date and Time of Publishing</label>
                                <input type="text" class="form-control" id="stamp" name="stamp" value="<?php echo (new \ DateTime())->format('d-m-y H:i:s'); ?>" placeholder="E.g. - Fiat have a new safety test" readonly/>
                                <!--<p><?php echo form_error('stamp'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "art_body">Body text of Article:</label>
                                <input type="textarea" class="form-control" id="art_body" name="art_body" value="<?php echo $data->article_body; ?>" placeholder="E.g. - Full text of the article" />
                                <!--<p><?php echo form_error('art_body'); ?></p>-->
                            </div>

                            <div class="form-group">
                                <label for = "author">Author of the Article:</label>
                                <input type="number" class="form-control" id="author" name="author" value="<?php echo $data->user_id; ?>" placeholder="E.g. - 1, 2, 3"  />
                                <!--<p><?php echo form_error('author'); ?></p>-->
                            </div>

                            <button type="submit" class="btn btn-primary">Add News Story</button>
                            
                            
                            <?php } echo form_close();?>
                        </form>


                    </div>
                        
                </div>
                <!-- End Sign Up Form -->
<hr>
<?php include 'footer.php' ?>
</div>