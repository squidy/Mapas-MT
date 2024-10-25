FROM hacklab/mapasculturais:7.5.6

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

RUN apt-get update && apt-get install -y tzdata

ENV TZ=America/Cuiaba

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www

COPY docker/config/0.main.php /var/www/config/0.main.php
COPY docker/config/authentication.php /var/www/config/authentication.php
COPY docker/config/lgpd.php /var/www/config/lgpd.php
COPY docker/config/logo.php /var/www/config/logo.php
COPY docker/config/maps.php /var/www/config/maps.php
COPY docker/config/common.d/plugins.php /var/www/config/common.d/plugins.php
COPY docker/config/common.d/texts.php /var/www/config/common.d/texts.php
COPY docker/config/lgpd-terms /var/www/config/lgpd-terms
COPY docker/src/modules/Entities/components/entity-status/template.php /var/www/src/modules/Entities/components/entity-status/template.php
