# standardcontainer
Standardcontainer som används i .easec:s kurser i Docker, Kubernetes, OpenShift

Använd: docker build -t php-webb .

https://hub.docker.com/r/easec/php-webb    docker pull easec/php-webb

docker run -d -p 80:80 --name <namn_på_container> easec/php-webb
