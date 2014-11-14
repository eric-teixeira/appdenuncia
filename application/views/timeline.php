<?php include_once('header.php'); ?>

    <section class="container-fluid col-md-12 noMgnoPd container-ajustes">
        <?php include_once('menu.php'); ?>
        
        <div class="col-md-11">
            <div class="col-md-12">
                <?php  
                $i = 0;
                foreach($denounces as $item): ?>
            
                    <?php if($i == 4): ?>
                        <div class="row">
                    <?php endif; ?>
                        <div class="col-md-3 bl-2">
                            <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $item->image; ?>">
                        </div>
                    <?php if($i == 4): ?>
                        </div>
                    <?php $i = 0; endif; ?>
                <?php endforeach; ?>
            </div>
            
<!--                <div class="row">
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                    <div class="col-md-3 bl-2">
                        <img src="<?php echo base_url(); ?>assets/images/foto.jpg">
                    </div>
                </div>
            </div>
        </div>-->
    </section>

<?php include_once('footer.php'); ?>
