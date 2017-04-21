# ESPAY MAGENTO 2 PLUGIN
Powered by [ESPAY.ID](https://nodejs.org/)

### Environtment
Tested with,
Magento 2.5.x
PHP 5.6.x

### Installation

Step 1:
```sh
Copy all of this to your ROOT folder
```

Step 2:
```sh
Import Sql file provided in /app/code/Espay/Pg/Sql/ with gui or commands,
- mysql -u root -p <database-name> < install_sales_order_status.sql
- mysql -u root -p <database-name> < install_sales_order_status_state.sql
```

Step 3:
```sh
Run bin/magento setup:upgrade
Run bin/magento setup:di:compile
```
Done.


