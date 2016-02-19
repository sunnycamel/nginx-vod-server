
default:	build

clean:
	rm -rf Makefile objs

build:
	$(MAKE) -f objs/Makefile
	$(MAKE) -f objs/Makefile manpage

install:
	$(MAKE) -f objs/Makefile install

upgrade:
	/home/sunpeng/vod/nginx/sbin/nginx -t

	kill -USR2 `cat /home/sunpeng/vod/nginx/nginx.pid`
	sleep 1
	test -f /home/sunpeng/vod/nginx/nginx.pid.oldbin

	kill -QUIT `cat /home/sunpeng/vod/nginx/nginx.pid.oldbin`
