<h1>Productos Destacados</h1>

<?php while($product=$productos->fetch_object()): ?>

    <div class="product">
        
        <a href="<?=base_url?>producto/ver&id=$product->id">
            <?php if($product->imagen!=null): ?>
                <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="imagen camiseta">
            <?php else: ?>
                <img src="assets/img/camiseta.png" alt="camiseta">
            <?php endif; ?>
            <h2>Camiseta Azul Ancha</h2>
        </a>
        
        <p>30 euros</p>
        <a href="#" class="button">Comprar</a>
    </div>
<?php endwhile; ?>

    


