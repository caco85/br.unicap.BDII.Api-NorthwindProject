use Northwind
go
CREATE TRIGGER TRIGGER_BD2022_2  ON Products for INSERT
AS
	IF (SELECT UnitsInStock from INSERTED) = 0
	BEGIN
	 PRINT 'Compra não realizada que não tem estoque do produto no momento'
	 PRINT 'Operação cancelada'
	 ROLLBACK TRANSACTION
	END

select * from [Order Details]
drop TRIGGER TRIGGER_BD2022_2

INSERT "Order Details" VALUES(11085,23,6,14,0)
