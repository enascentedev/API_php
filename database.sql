CREATE TABLE clientes (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome TEXT NOT NULL COLLATE latin1_swedish_ci,
    email TEXT NOT NULL COLLATE latin1_swedish_ci,
    cidade TEXT NOT NULL COLLATE latin1_swedish_ci,
    estado TEXT NOT NULL COLLATE latin1_swedish_ci,
    telefone TEXT NOT NULL COLLATE latin1_swedish_ci,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
