FROM nginx:1.17.8-alpine

COPY . /app/
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]