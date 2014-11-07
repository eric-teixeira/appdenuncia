<?php include_once('header.php'); ?>

<h2>Cadastrar Denuncia</h2>

<?php include_once('menu.php'); ?>

<section>
    <label>Selecione uma Categoria</label>
    <?php 
        if(isset($category))
        {
            if($category->num_rows() > 0)
            {
                echo '<select>';
                foreach($category->result() as $item):
                    echo '<option name= '. $item->name .'>'. $item->name .'</option>';
                endforeach;
                echo '</select>';
            }
        }
    ?>
    
    <label>Selecione um estado</label>
    <?php 
        if(isset($states))
        {
            if($states->num_rows() > 0)
            {
                echo '<select>';
                foreach($states->result() as $item):
                    echo '<option name= '. $item->abbreviation .'>'. $item->name .'</option>';
                endforeach;
                echo '</select>';
            }
        }
    ?>
    
    <label>Selecione uma cidade</label>
    <?php 
        if(isset($city))
        {
            if($city->num_rows() > 0)
            {
                echo '<select>';
                foreach($city->result() as $item):
                    echo '<option name= '. $item->name .'>'. $item->name .'</option>';
                endforeach;
                echo '</select>';
            }
        }
    ?>
</section>


<?php include_once('footer.php'); ?>