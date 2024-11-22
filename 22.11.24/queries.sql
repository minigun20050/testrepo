ALTER TABLE users_products ADD FOREIGN KEY (id_user) REFERENCES users(id); 
ALTER TABLE users_products ADD FOREIGN KEY (id_product) REFERENCES products(id);

SELECT * FROM products WHERE prod_name LIKE 'cheese%';

SELECT DISTINCT users.id, first_name, last_name, country FROM products JOIN users_products ON id_product = products.id JOIN users ON id_user = users.id WHERE prod_name LIKE 'cheese%' ORDER BY users.id;