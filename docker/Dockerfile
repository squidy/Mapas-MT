FROM hacklab/mapasculturais:7.3.2

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www

COPY docker/common/config.d /var/www/config/common.d
COPY docker/common/lgpd-terms /var/www/config/lgpd-terms
COPY docker/production/config.d /var/www/config/config.d
COPY docker/common/mailer.php /var/www/config/mailer.php
COPY docker/common/email-templates/_footer.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/common/email-templates/_header.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/common/email-templates/send_registration.html /var/www/src/modules/MailNotification/templates/pt_BR/
COPY docker/common/email-templates/start_registration.html /var/www/src/modules/MailNotification/templates/pt_BR/
