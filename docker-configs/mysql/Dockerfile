# image
FROM mysql:5.7
ENV MYSQL_ROOT_PASSWORD=sample_root_pass

# Set my.cnf
COPY ./my.cnf /etc/mysql/conf.d/

# Set initdb.d
COPY init.sql /docker-entrypoint-initdb.d/init.sql

# Set Japanese
RUN apt-get update && apt-get install -y \
  locales \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*
RUN sed -i -E 's/# (ja_JP.UTF-8)/\1/' /etc/locale.gen \
  && locale-gen
ENV LANG ja_JP.UTF-8
CMD ["mysqld", "--character-set-server=utf8", "--collation-server=utf8_unicode_ci"]