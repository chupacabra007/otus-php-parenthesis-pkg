FROM mileschou/phalcon:7.2-cli
        
ADD ./src /app

WORKDIR /app/Framework/public