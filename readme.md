Environment
=========================

    version: "3.9"
    services:
    postgres:
        image: postgres:13.3
        environment:
        POSTGRES_DB: "habrdb"
        POSTGRES_USER: "habrpguser"
        POSTGRES_PASSWORD: "pgpwd4habr"
        PGDATA: "/var/lib/postgresql/data/pgdata"
        volumes:
        - .:/var/lib/postgresql/data
        ports:
        - "5432:5432"
        networks:
        - app-environment
    mailhog:
        image: mailhog/mailhog
        logging:
        driver: 'none' 
        ports:
        - 1025:1025
        - 8025:8025 
        networks:
        - app-environment
    redis-server:
        image: "redis:alpine"
        command: redis-server
        ports:
        - "6379:6379"
        networks:
        - app-environment
    networks:
    app-environment:
        driver: bridge