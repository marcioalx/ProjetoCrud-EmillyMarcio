-- =====================================================
-- Banco: dbteste  |  Tabela: tbteste
-- Usado pelo projeto CRUD (conexao.php, cada.php, pesq.php, crud_listar.php)
-- Execute no phpMyAdmin (aba SQL) ou no terminal do MySQL.
-- =====================================================

DROP DATABASE IF EXISTS dbteste;
CREATE DATABASE dbteste
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE dbteste;

CREATE TABLE tbteste (
    codi_t  INT          NOT NULL AUTO_INCREMENT,  -- código (chave primária)
    nome_t  VARCHAR(40)  NOT NULL,                 -- nome (maxlength=40 no formulário)
    emai_t  VARCHAR(40)  NOT NULL,                 -- e-mail (maxlength=40 no formulário)
    senh_t  VARCHAR(8)   NOT NULL,                 -- senha (maxlength=8 no formulário)
    sexo_t  CHAR(1)      NOT NULL,                 -- 'F' ou 'M'
    dtna_t  DATE         NULL,                     -- data de nascimento (input type="date")
    PRIMARY KEY (codi_t),
    CONSTRAINT chk_sexo CHECK (sexo_t IN ('F', 'M'))
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Dados de exemplo (opcional)
INSERT INTO tbteste (nome_t, emai_t, senh_t, sexo_t, dtna_t) VALUES
    ('Ana Souza',    'ana@email.com',    '1234abcd', 'F', '2001-03-15'),
    ('Bruno Lima',   'bruno@email.com',  'senha123', 'M', '1999-07-22'),
    ('Carla Mendes', 'carla@email.com',  'abc12345', 'F', '2003-11-02');
