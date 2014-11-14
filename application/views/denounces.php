<?php include_once('header.php'); ?>

<section class="container-fluid col-md-12 noMgnoPd container-ajustes">
        <?php include_once('menu.php'); ?>
    
    
    <div class="col-md-11 form-mydata">
        <?php include_once('erro_success.php'); ?>
        <h2>Cadastrar Denúncia</h2>
        <form method="post" role="form" enctype="multipart/form-data" action="denounces/register">

                <div class="form-group">
                    <label>Selecione um estado</label>
                    <?php 
                        if(isset($states))
                        {
                            if($states->num_rows() > 0)
                            {
                                echo '<select class="form-control" name="state" autofocus required>';
                                foreach($states->result() as $item):
                                    echo '<option name= '. $item->abbreviation .'>'. $item->name .'</option>';
                                endforeach;
                                echo '</select>';
                            }
                        }
                    ?>
                </div>

                <div class="form-group">
                    <label>Selecione uma cidade</label>
                    <?php 
                        if(isset($city))
                        {
                            if($city->num_rows() > 0)
                            {
                                echo '<select class="form-control" name="city" required>';
                                foreach($city->result() as $item):
                                    echo '<option name= '. $item->nome .'>'. $item->nome .'</option>';
                                endforeach;
                                echo '</select>';
                            }
                        }
                    ?>
                </div>

                <div class="form-group">
                    <label for="inputDescriptionDenounce">Descrição:</label>
                    <input type="text" name="description" id="inputDescriptionDenounce" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <input type="file" name="imgDenounce" required>
                </div>
            
                <input type="submit" value="Cadastrar Denúncia" class="btn btn-success">
            </form>
    </div>
</section>

<?php include_once('footer.php'); ?>