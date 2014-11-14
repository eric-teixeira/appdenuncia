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
                            <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $item->image;?>" class="img-timeline">
                            <p class="description-item"><em><?php echo $item->description ; ?></em></p>
                            <div>
                                <span class="mini-cone"></span>
                                <span class="qtde-apoios"><strong><?php echo $item->qtdeCones; ?></strong></span>
                            </div>
                            <span id="idDenounce" hidden><?php echo $item->id_denounce; ?></span>
                        </div>
                    <?php if($i == 4): ?>
                        </div>
                    <?php $i = 0; endif; ?>
                <?php endforeach; ?>
            </div>
    </section>

<?php include_once('footer.php'); ?>
