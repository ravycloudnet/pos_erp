<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-15 11:21:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.' at line 4 - Invalid query: SELECT erp_products.code, erp_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, erp_products.id as id
FROM `erp_products`
LEFT JOIN ( SELECT si.product_id, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from erp_sales s JOIN erp_sale_items si on s.id = si.sale_id  WHERE  si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `erp_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from erp_purchase_items pi LEFT JOIN erp_purchases p on p.id = pi.purchase_id WHERE p.status != 'pending' AND p.status != 'ordered'  WHERE  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = `PCosts`.`product_id`
GROUP BY `erp_products`.`code`, `PSales`.`soldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`, `PCosts`.`balacneQty`, `PCosts`.`balacneValue`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2018-08-15 11:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.' at line 4 - Invalid query: SELECT erp_products.code, erp_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, erp_products.id as id
FROM `erp_products`
LEFT JOIN ( SELECT si.product_id, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from erp_sales s JOIN erp_sale_items si on s.id = si.sale_id  WHERE  si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `erp_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from erp_purchase_items pi LEFT JOIN erp_purchases p on p.id = pi.purchase_id WHERE p.status != 'pending' AND p.status != 'ordered'  WHERE  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = `PCosts`.`product_id`
GROUP BY `erp_products`.`code`, `PSales`.`soldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`, `PCosts`.`balacneQty`, `PCosts`.`balacneValue`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2018-08-15 11:23:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `erp_products`.`id' at line 3 - Invalid query: SELECT erp_products.code, erp_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, erp_products.id as id
FROM `erp_products`
LEFT JOIN ( SELECT si.product_id, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from erp_sales s JOIN erp_sale_items si on s.id = si.sale_id  WHERE  AND si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `erp_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from erp_purchase_items pi LEFT JOIN erp_purchases p on p.id = pi.purchase_id WHERE p.status != 'pending' AND p.status != 'ordered'  WHERE  AND pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = `PCosts`.`product_id`
GROUP BY `erp_products`.`code`, `PSales`.`soldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`, `PCosts`.`balacneQty`, `PCosts`.`balacneValue`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2018-08-15 11:25:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND si.warehouse_id = 1  GROUP BY si.product_id ) PSales ON `erp_products`.`id` ' at line 3 - Invalid query: SELECT erp_products.code, erp_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, erp_products.id as id
FROM `erp_products`
LEFT JOIN ( SELECT si.product_id, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from erp_sales s JOIN erp_sale_items si on s.id = si.sale_id  WHERE  AND si.warehouse_id = 1  GROUP BY si.product_id ) PSales ON `erp_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from erp_purchase_items pi LEFT JOIN erp_purchases p on p.id = pi.purchase_id WHERE p.status != 'pending' AND p.status != 'ordered'  WHERE  AND pi.warehouse_id = 1  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = `PCosts`.`product_id`
GROUP BY `erp_products`.`code`, `PSales`.`soldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`, `PCosts`.`balacneQty`, `PCosts`.`balacneValue`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2018-08-15 11:26:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.' at line 4 - Invalid query: SELECT erp_products.code, erp_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, erp_products.id as id
FROM `erp_products`
LEFT JOIN ( SELECT si.product_id, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from erp_sales s JOIN erp_sale_items si on s.id = si.sale_id  WHERE  si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `erp_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from erp_purchase_items pi LEFT JOIN erp_purchases p on p.id = pi.purchase_id WHERE p.status != 'pending' AND p.status != 'ordered'  WHERE  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = `PCosts`.`product_id`
GROUP BY `erp_products`.`code`, `PSales`.`soldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`, `PCosts`.`balacneQty`, `PCosts`.`balacneValue`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
ERROR - 2018-08-15 11:27:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = ' at line 4 - Invalid query: SELECT erp_products.code, erp_products.name, CONCAT(COALESCE( PCosts.purchasedQty, 0 ), '__', COALESCE( PCosts.totalPurchase, 0 )) as purchased, CONCAT(COALESCE( PSales.soldQty, 0 ), '__', COALESCE( PSales.totalSale, 0 )) as sold, (COALESCE( PSales.totalSale, 0 ) - COALESCE( PCosts.totalPurchase, 0 )) as Profit, CONCAT(COALESCE( PCosts.balacneQty, 0 ), '__', COALESCE( PCosts.balacneValue, 0 )) as balance, erp_products.id as id
FROM `erp_products`
LEFT JOIN ( SELECT si.product_id, SUM( si.quantity ) soldQty, SUM( si.subtotal ) totalSale from erp_sales s JOIN erp_sale_items si on s.id = si.sale_id  WHERE  si.warehouse_id = '1'  GROUP BY si.product_id ) PSales ON `erp_products`.`id` = `PSales`.`product_id`
LEFT JOIN ( SELECT product_id, SUM(CASE WHEN pi.purchase_id IS NOT NULL THEN quantity ELSE 0 END) as purchasedQty, SUM(quantity_balance) as balacneQty, SUM( unit_cost * quantity_balance ) balacneValue, SUM( (CASE WHEN pi.purchase_id IS NOT NULL THEN (pi.subtotal) ELSE 0 END) ) totalPurchase from erp_purchase_items pi LEFT JOIN erp_purchases p on p.id = pi.purchase_id WHERE p.status != 'pending' AND p.status != 'ordered'  pi.warehouse_id = '1'  GROUP BY pi.product_id ) PCosts ON `erp_products`.`id` = `PCosts`.`product_id`
GROUP BY `erp_products`.`code`, `PSales`.`soldQty`, `PSales`.`totalSale`, `PCosts`.`purchasedQty`, `PCosts`.`totalPurchase`, `PCosts`.`balacneQty`, `PCosts`.`balacneValue`
ORDER BY `sold` DESC, `purchased` DESC
 LIMIT 10
