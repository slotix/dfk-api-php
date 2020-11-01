FROM php:7.4-cli
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git
RUN git clone git://github.com/rmccue/Requests.git
COPY . /usr/src/dfk-api
RUN mv Requests /usr/src/dfk-api
WORKDIR /usr/src/dfk-api
CMD [ "php", "./dfk-api.php" ]
