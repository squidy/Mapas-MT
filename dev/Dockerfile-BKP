FROM hacklab/mapasculturais:7.5.1

RUN apt-get update && apt-get install -y tzdata

ENV TZ=America/Cuiaba
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www

COPY docker/common/config.d /var/www/config/common.d
COPY docker/common/lgpd-terms /var/www/config/lgpd-terms
COPY docker/production/config.d /var/www/config/config.d
COPY docker/production/MTLogin/authentik/authentikStrategy.php /var/www/vendor/opauth/authentik/authentikStrategy.php
COPY docker/production/MTLogin/OpauthAuthentik.php /var/www/src/core/AuthProviders/OpauthAuthentik.php
COPY docker/common/template.php /var/www/src/modules/Entities/components/entity-status/template.php
COPY docker/common/email-templates/_footer.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/common/email-templates/_header.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/common/email-templates/send_registration.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/common/email-templates/start_registration.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/production/conf/agent-types.php /var/www/src/conf/agent-types.php

COPY dev/conf-dev/home-register.php /var/www/src/modules/Home/components/home-register/template.php
COPY dev/conf-dev/texts.php /var/www/config/common.d/texts.php
