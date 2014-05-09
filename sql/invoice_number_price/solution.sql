SELECT inv_num, SUM (price) AS sum FROM invoice_items 
GROUP BY inv_num ORDER BY sum DESC