create table if not exists word
(
    id      serial not null
        constraint word_pk
            primary key,
    text_id integer
        constraint word_uploaded_text_id_fk
            references uploaded_text
            on update cascade on delete cascade,
    word    varchar(30),
    count   integer
);

alter table word
    owner to postgres;


