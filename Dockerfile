FROM mileschou/phalcon:7.2-cli
        
ADD ./src /app/src
ADD ./tests /app/tests

WORKDIR /app/src/Framework/public