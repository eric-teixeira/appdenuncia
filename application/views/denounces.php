<?php include_once('header.php'); ?>

<div class="container-fluid container-timeline">

    <?php //include_once('menu.php'); ?>
    
    <div class="container-fluid">
        <section class="container-register row" >
            
            <form method="post" role="form">
                <div class="form-group">
                    <label>Selecione uma Categoria</label>
                    <?php 
                        if(isset($category))
                        {
                            if($category->num_rows() > 0)
                            {
                                echo '<select class="form-control">';
                                foreach($category->result() as $item):
                                    echo '<option name= '. $item->name .'>'. $item->name .'</option>';
                                endforeach;
                                echo '</select>';
                            }
                        }
                    ?>
                </div>

                <div class="form-group">
                    <label>Selecione um estado</label>
                    <?php 
                        if(isset($states))
                        {
                            if($states->num_rows() > 0)
                            {
                                echo '<select class="form-control">';
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
                                echo '<select class="form-control">';
                                foreach($city->result() as $item):
                                    echo '<option name= '. $item->name .'>'. $item->name .'</option>';
                                endforeach;
                                echo '</select>';
                            }
                        }
                    ?>
                </div>
                <input type="submit" value="Cadastrar Denúncia">
            </form>
        </section>
    </div>
    
</div>

<?php include_once('footer.php'); ?>