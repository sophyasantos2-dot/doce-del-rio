CREATE TABLE `usuarios` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) UNIQUE NOT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp DEFAULT (now())
);

CREATE TABLE `produtos` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `preco` decimal(10,2) NOT NULL,
  `estoque` integer NOT NULL
);

CREATE TABLE `pedidos` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `usuario_id` integer NOT NULL,
  `status` varchar(255),
  `total` decimal(10,2),
  `criado_em` timestamp
);

CREATE TABLE `itens_pedido` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `pedido_id` integer,
  `produto_id` integer,
  `quantidade` integer NOT NULL,
  `preco_unitario` decimal(10,2)
);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

ALTER TABLE `itens_pedido` ADD FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`);

ALTER TABLE `itens_pedido` ADD FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);
