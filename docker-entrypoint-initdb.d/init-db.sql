create table pokemon (
    `id` integer unsigned not null primary key,
    `name` varchar(255) not null,
    `type1` varchar(255) not null,
    `type2` varchar(255),
    `height` decimal(5, 2) not null,
    `weight` decimal(9, 2) not null,
    `photo` varchar(255) not null
);