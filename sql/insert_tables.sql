USE cardapio;

INSERT INTO combos(nome, descricao, tipo, preco)
VALUES ("Combo Tradicional", "1 Hambúrguer Tradicional, Batata Frita ou Onion Rings e Refrigerante Lata", 'H', 29.99), 
("Combo Duplo", "2 Cheeseburgers, Batata Frita ou Onion Rings e Refrigerante Lata", 'H', 39.99),
("Combo Monster", "1 Monster Burger, Batata Frita ou Onion Rings e Refrigerante Lata", 'H', 49.99), 
("Combo Família", "2 Pizzas Grandes de sua escolha e 1 Refrigerantes de 2L", 'P', 89.99), 
("Combo Vegetariano", "1 Pizza Vegetariana, 1 Porção de Guacamole e 1 Suco de Laranja Natural", 'P', 34.99);

INSERT INTO pizzas(nome, descricao, preco_peq, preco_med, preco_gra, preco_giga)
VALUES ("Margherita", "Molho de tomate, mussarela, manjericão e azeite", 29.99, 39.99, 49.99, 59.99), 
("Pepperoni", "Molho de tomate, mussarela e fatias de pepperoni", 32.99, 42.99, 52.99, 62.99), 
("Quatro Queijos", "Mussarela, gorgonzola, parmesão e catupiry", 34.99, 44.99, 54.99, 64.99), 
("Frango com Catupiry", "Frango desfiado, catupiry e cebola", 33.99, 43.99, 53.99, 63.99), 
("Portuguesa", "Mussarela, presunto, ovo, cebola e azeitonas pretas", 35.99, 45.99, 55.99, 65.99), 
("Vegetariana", "Mussarela, abobrinha grelhada, berinjela e pimentões coloridos", 30.99, 40.99, 50.99, 60.99);

INSERT INTO hamburgers(nome, descricao, preco) 
VALUES ("Hambúrger Tradicional", "Blend bovino de 120g, alface, tomate, cebola, picles, ketchup e mostarda", 20.99), 
("Cheeseburger", "Blend bovino de 120g, queijo prato, alface, tomate, cebola e maionese temperada", 21.99), 
("Cheeseburger Duplo", "Dois blends bovino de 120g, duas fatias de queijo prato, alface, tomate, cebola e maionese temperada", 24.99), 
("Bacon Cheeseburger", "Blend bovino de 120g, queijo prato, bacon torrado, alface, tomate, cebola e maionese temperada", 22.99), 
("Cheddar Melt", "Blend bovino de 120g, cheddar derretido, ketchup e cebola caramelizada", 22.99), 
("Monster Burger", "Dois blends bovino de 150g, duas fatias de queijo prato, alface, cebola,fatia de pão brioche", 31.99);

INSERT INTO acompanhamentos(nome, descricao, preco)
VALUES ("Batata Frita", "Porção de batata frita crocante", 12.99), 
("Onion Rings", "Anéis de cebola empanados e fritos", 14.99), 
("Salada Caesar", "Alface, croutons, queijo parmesão e molho Caesar", 15.99), 
("Pão de Alho", "Pão francês com manteiga de alho e ervas", 9.99), 
("Guacamole", "Abacate temperado com limão, cebola e coentro", 11.99), 
("Molho de Queijo", "Molho cremoso de queijo para acompanhar petiscos", 8.99);

INSERT INTO bebidas(nome, volume, medida_vol, preco)
VALUES ("Coca-Cola Lata", 350, "ml", 8.00),
("Coca-Cola Zero Lata", 350, "ml", 8.00), 
("Coca-Cola", 2, "L", 16.00),
("Coca-Cola Zero", 2, "L", 16.00)
("Guaraná Antártica Lata", 350, "ml", 8.00),
("Guaraná Antártica", 2, "L", 16.00), 
("Água Tônica Lata", 350, "ml", 8.00),
("Água com Gás", 500, "ml", 5.00),
("Água Mineral", 500, "ml", 4.50), 
("Suco de Laranja Natural", 500, "ml", 9.99), 
("Cerveja Artesanal", 600, "ml", 13.00);
