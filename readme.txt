Not So Evil Portals

Not So Evil Portals is a collection of portals, designed for use wth the Pineapple's Evil Portals module.

This is meant to be used for comedy purposes, and is built around kleo's evilportals (https://github.com/kleo/evilportals.git)

This project requires you to install Evil Portal captive portal module created by frozenjava. To install on the Pineapple, go to Modules -> Manage Modules -> Get Modules from Hak5 Community Repositories -> Evil Portal 3.2.

Tested working on the WiFi Pineapple MK VII only.
Usage

Clone the repository

git clone https://github.com/phosphor-1/Not-So-Evil-Portals.git

Change directory to evilportals/portals/

cd evilportals/portals/

Copy the portals you wish to use on the Tetra at /root/portals/ or on the Nano at /sd/portals/

scp -r portal-login root@172.16.42.1:/root/portals/

Alternatively you can use Filezilla to copy the portals

Host: sftp://172.16.42.1 Username: root Password: lamepassword Port: 22

Finally on the WiFi Pineapple web interface, start the Evil Portal module and then activate the portal you wish to use.

