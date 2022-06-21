-- Transform
INSERT INTO djual(NoNota,qty,Harga_jadi,IdBarang,kdjns)
-- Extract data
SELECT data_dummy.nota,data_dummy.qty,data_dummy.harga,
mbarang.idBarang,mbarang.kodeJenis
FROM data_dummy
JOIN mbarang ON mbarang.namBarang=data_dummy.nama
WHERE substr(nota,1,4)='NT20';
