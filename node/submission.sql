
-- Query 1:
-- Retrieve the total quantity of each product sold across all orders, along with the percentage of
-- total quantity that each product contributes.
SELECT
  	product_name,
  	SUM(quantity) AS total_quantity,
  	(SUM(quantity) / (SELECT SUM(quantity) FROM order_items) * 100) AS percentage_contribution
FROM
  	order_items
GROUP BY
  	product_name;	


-- Query 2:
-- Rank customers based on their total order amounts in descending order.
SELECT
  	customer_id,
  	SUM(total_amount) AS total_amount
FROM
  	orders
GROUP BY
  	customer_id
ORDER BY
  	total_amount DESC;
  
  
  
-- Query 3:
-- For each order, retrieve the order date, total order amount, and the running total order amount.
SELECT
  	order_id,
  	order_date,
  	total_amount,
  	SUM(total_amount) OVER (ORDER BY order_date) AS running_total
FROM
  	orders