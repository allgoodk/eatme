FROM nginx:latest
ARG username
ENV LANG=en_US.UTF-8 \
    LANGUAGE=en_US.UTF-8 \
    TERM=xterm \
    TZ=Europe/Moscow \
    NGINXUSERNAME=$username

### Curl install
RUN apt-get update && apt-get install -y curl gnupg

ARG useruid
### set User
RUN groupadd --gid $useruid $username \
  && useradd --uid $useruid --gid $username --shell /bin/bash --create-home $username


CMD ["nginx", "-g", "daemon off;"]
