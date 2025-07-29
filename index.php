<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <a href="http://www.freepik.com">Designed by renata.s / Freepik</a>
</head>
<body>
    <div class="container">
        <header>
            <h1 class="titulo_principal">🍕 Emirantes Pizzaria & Hamburgueria 🍔</h1>
        </header>
        <main>
            <?php
                include 'connection.php';

                
                $query_combos = "SELECT * FROM combos";
                try {
                    $result = mysqli_query($connection, $query_combos);
                    
                    echo "<div class='container-cardapio'>";
                    echo "<h2 class='titulo_secundario'>🍔🍟🥤  Combos  🥤 🍟🍔</h2>";
                    foreach ($result as $combo) {
                        echo "<h3 class='cardapio item'>" . htmlspecialchars($combo['nome']) . "</h3>";
                        echo "<p class='cardapio item'>" . htmlspecialchars($combo['descricao']) . "</p>";
                        echo "<p class='cardapio item'>R$ " . number_format($combo['preco'], 2, ',', '.') . "</p>";
                    }
                    echo "</div>";
                } catch (mysqli_sql_exception $e) {
                    echo "<p>Oops! Algo deu errado</p>";
                    exit('Error: ' . $e->getMessage());
                }
                
                $query_pizzas = "SELECT * FROM pizzas";
                try {
                    $result = mysqli_query($connection, $query_pizzas);
                    echo "<div class='container-cardapio'>";
                    echo "<h2 class='titulo_secundario'>🍕 Pizzas 🍕</h2>";
                    foreach ($result as $pizza) {
                        echo "<h3 class='cardapio_nome'>" . htmlspecialchars($pizza['nome']) . "</h3>";
                        echo "<p class='cardapio-item'>" . htmlspecialchars($pizza['descricao']) . "</p>";
                        echo "<p class='cardapio-item'>Pequena (25cm): R$ " . number_format($pizza['preco_peq'], 2, ',', '.') . "</p>";
                        echo "<p class='cardapio-item'>Média (30cm): R$ " . number_format($pizza['preco_med'], 2, ',', '.') . "</p>";
                        echo "<p class='cardapio-item'>Grande (35cm): R$ " . number_format($pizza['preco_gra'], 2, ',', '.') . "</p>";
                        echo "<p class='cardapio-item'>Gigante (40cm): R$ " . number_format($pizza['preco_giga'], 2, ',', '.') . "</p>";         
                    }
                    echo "</div>";
                } catch (mysqli_sql_exception $e) {
                    echo "<p>Oops! Algo deu errado</p>";
                    exit('Error: ' . $e->getMessage());
                }
                
                
                $querry_burgers = "SELECT * FROM hamburgers";
                try {
                    $result = mysqli_query($connection, $querry_burgers);
                    echo "<div class='container-cardapio'>";
                    echo "<h2 class='titulo_secundario'>🍔 Burgers 🍔</h2>";
                    foreach ($result as $burger) {
                        echo "<h3 class='combo_nome'>" . htmlspecialchars($burger['nome']) . "</h3>";
                        echo "<p class='combo_descricao'>" . htmlspecialchars($burger['descricao']) . "</p>";
                        echo "<p class='combo_preco'>R$ " . number_format($burger['preco'], 2, ',', '.') . "</p>";
                    }
                    echo "</div>";
                } catch (mysqli_sql_exception $e) {
                    echo "<p>Oops! Algo deu errado</p>";
                    exit('Error: ' . $e->getMessage());
                }
                
                
                $querry_acompanhamentos = "SELECT * FROM acompanhamentos";
                try {
                    $result = mysqli_query($connection, $querry_acompanhamentos);
                    echo "<div class='container-cardapio'>";
                    echo "<h2 class='titulo_secundario'>🍟 Acompanhamentos 🍟</h2>";
                    foreach ($result as $acompanhamento) {
                        echo "<h3 class='combo_nome'>" . htmlspecialchars($acompanhamento['nome']) . "</h3>";
                        echo "<p class='combo_descricao'>" . htmlspecialchars($acompanhamento['descricao']) . "</p>";
                        echo "<p class='combo_preco'>R$ " . number_format($acompanhamento['preco'], 2, ',', '.') . "</p>";
                    }
                    echo "</div>";
                } catch (mysqli_sql_exception $e) {
                    echo "<p>Oops! Algo deu errado</p>";
                    exit('Error: ' . $e->getMessage());
                }
                
                $querry_bebidas = "SELECT * FROM bebidas";
                try {
                    $result = mysqli_query($connection, $querry_bebidas);
                    echo "<div class='container-cardapio'>";
                    echo "<h2 class='titulo_secundario'>🥤 Bebidas 🥤</h2>";
                    foreach ($result as $bebida) {                     
                        echo "<h3 class='combo_nome'>" . htmlspecialchars($bebida['nome']) . "</h3>";
                        echo "<p class='combo_preco'>R$ " . number_format($bebida['preco'], 2, ',', '.') . "</p>";                       
                    }
                    echo "</div>";
                } catch (mysqli_sql_exception $e) {
                    echo "<p>Oops! Algo deu errado</p>";
                    exit('Error: ' . $e->getMessage());
                }
                
            ?>

        </main>
    </div>
</body>
</html>
