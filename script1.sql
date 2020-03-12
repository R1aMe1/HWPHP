create table if not exists uploaded_text
(
    id          serial not null
        constraint uploaded_text_pk
            primary key,
    content     text,
    words_count integer
        constraint uploaded_text_words_count_check
            check (words_count > 0),
    data        timestamp
);

alter table uploaded_text
    owner to postgres;


