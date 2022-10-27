
-- created @jv lima
select * from Customers

select * from Orders

-- select * from [Order Details] where OrderID = 11109

USE Northwind
GO
GO
CREATE PROCEDURE PROsaASASsssssssaSSASsasaCEDURE_PROJETO_BD
AS
      SELECT C.CustomerID, C.CompanyName, C.PostalCode, C.City
	  FROM  Customers C
	  WHERE C.PostalCode = '444000' OR C.City = 'México D.F.'

	  ORDER BY C.CustomerID, C.CompanyName
	GO
	EXEC PROsaASASsssssssaSSASsasaCEDURE_PROJETO_BD
