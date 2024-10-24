FROM hacklab/mapasculturais:7.5.5

RUN apt-get update && apt-get install -y tzdata

ENV TZ=America/Cuiaba
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www


COPY dev/conf-dev/home-register.php /var/www/src/modules/Home/components/home-register/template.php
COPY dev/conf-dev/texts.php /var/www/config/common.d/texts.php
