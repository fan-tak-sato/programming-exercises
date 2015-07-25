MySQL invoice number and price
==================================

Given a table invoice_items with the following structure:

  create table invoice_items (
         inv_num integer not null,
         item varchar(10) not null,
         price integer not null
  );

write an SQL query that returns a list of invoices (inv_num) with the total price of each. The list should be ordered by inv_num (in descending order).

For example, given:

  inv_num | item | price
  --------+------+------
  3       | a    | 10
  3       | b    | 15
  1       | c    | 7
your query should return:

  inv_num | sum
  --------+----
  3       | 25
  1       | 7
