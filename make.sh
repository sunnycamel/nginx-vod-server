#!/bin/bash

if [ "x$1" = "x" ]
then 
    echo "must provie a path to install everything"
    exit 1
fi
PWD=`pwd`

PREFIX=`readlink -f $1`
NGINX_PREFIX=$PREFIX/nginx
SCRIPT_DIR=$PWD/script

NGINX=$PWD/nginx-1.8.0

MODULESDIR=$NGINX/modules
rm -rf $MODULESDIR/nginx-vod-module
git clone https://github.com/kaltura/nginx-vod-module.git $MODULESDIR/nginx-vod-module && \
cd $MODULESDIR/nginx-vod-module && git checkout 1.5.2 -b release-1.5.2 && \
cd $NGINX && ./configure  \
    --prefix=$NGINX_PREFIX \
    --conf-path=$NGINX_PREFIX/conf/nginx.conf \
    --http-log-path=$NGINX_PREFIX/log/access.log \
    --error-log-path=$NGINX_PREFIX/log/error.log \
    --lock-path=$NGINX_PREFIX/nginx.lock \
    --pid-path=$NGINX_PREFIX/nginx.pid \
    --http-client-body-temp-path=$NGINX_PREFIX/body \
    --http-fastcgi-temp-path=$NGINX_PREFIX/fastcgi \
    --http-proxy-temp-path=$NGINX_PREFIX/proxy \
    --http-scgi-temp-path=$NGINX_PREFIX/scgi \
    --http-uwsgi-temp-path=$NGINX_PREFIX/uwsgi \
    --with-debug \
    --with-file-aio \
    --with-pcre-jit \
    --with-ipv6 \
    --with-http_ssl_module \
    --with-http_stub_status_module \
    --with-http_realip_module \
    --with-http_addition_module \
    --with-http_dav_module \
    --with-http_geoip_module \
    --with-http_gzip_static_module \
    --with-http_image_filter_module \
    --with-http_spdy_module \
    --with-http_sub_module \
    --with-http_xslt_module \
    --with-mail \
    --with-mail_ssl_module \
    --add-module=$MODULESDIR/nginx-auth-pam \
    --add-module=$MODULESDIR/nginx-dav-ext-module \
    --add-module=$MODULESDIR/nginx-echo \
    --add-module=$MODULESDIR/nginx-upstream-fair \
    --add-module=$MODULESDIR/ngx_http_substitutions_filter_module \
    --add-module=$MODULESDIR/nginx-vod-module \
&& make && make install && \

cp $SCRIPT_DIR/start.sh $PREFIX && \
cp $SCRIPT_DIR/stop.sh $PREFIX && \

cp -r $SCRIPT_DIR/html $PREFIX

