use Northwind
CREATE TRIGGER TRIGGER_BD2022_2 ON [Order Details] for INSERT
AS
	IF (SELECT Quantity from  INSERTED) >= 5
	BEGIN
	 PRINT 'Compra não realizada que superou o limete de produtos por cliente ,limite 5 produtos por cliente,favor reduzir a quantidade para 5'
	 PRINT 'Operação cancelada'
	 ROLLBACK TRANSACTION
	END

select * from [Order Details]
drop TRIGGER TRIGGER_BD2022_2

INSERT "Order Details" VALUES(11085,23,6,14,0)
