
<?php get_header(); ?>
<?php
	include_once('imdb_API.php');
?>
<div class="container">
  <h1>Lista de filmes</h1>
  <form action="." method="post">
        <p>Digite o nome para encontrar o filme.</p>
        <input type="text" placeholder="Digite nome..." id="nome" name='nome'>
        <input type="submit">
        <br>
		<br>
        <br>
        <label>Titulo</label>
        <input type="text" disabled="" placeholder="Titulo" name="titulo" value="<?php
        	echo $movie->Title ?? '';
        ?>">
        <br>
        <br>
        <label>Ano</label>
  		<input type="text" disabled="" placeholder="Ano" name="ano" value="<?php
        	echo $movie->Year ?? '';
        ?>">
        <br>
        <br>
    </form>
</div>



<?php get_footer(); ?>