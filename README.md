## this is magento 2 espay plugin

INSTRUCTION:

1. COPY THIS TO YOUR ROOT
2. IMPORT SQL FILES ON /app/code/Espay/Pg/Sql/ with command,

	- mysql -u root -p <databasename> < install_sales_order_status.sql
	- mysql -u root -p <databasename> < install_sales_order_statu_state.sql

3. run bin/magento setup:upgrade
4. done.
