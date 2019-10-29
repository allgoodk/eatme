FROM mono:latest

RUN apt-get update && apt-get install -y wget unzip

WORKDIR /app/pickles
RUN wget https://github.com/picklesdoc/pickles/releases/download/v2.18.2/Pickles-exe-2.18.2.zip
RUN unzip Pickles-exe-2.18.2.zip
RUN rm Pickles-exe-2.18.2.zip

WORKDIR /app

CMD ["mono", "pickles/Pickles.exe", "-f", "features", "-o", "output", "--df", "DHTML", "--system-under-test", "Pay"]