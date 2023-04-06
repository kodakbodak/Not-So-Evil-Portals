## Not so Evil Portals

[Not so Evil Portals](https://github.com/phosphor-1/Not-So-Evil-Portals) is a collection of portals, designed for use wth the the [Hak5](https://hak5.org/) [WiFi Pineapple](https://wifipineapple.com/).

This project requires you to install the Evil Portal captive portal module created by newbi3. To install on the Pineapple, go to Modules & Packages -> Modules -> Get Available Modules -> Evil Portal

**Tested working on the WiFi Pineapple MK VII only.**

---

#### Usage

Clone the repository

	git clone https://github.com/phosphor-1/Not-So-Evil-Portals.git

Change directory to Not-So-Evil-Portals

	cd Not-So-Evil-Portals

Copy the portals you wish to use on the MKII at `/root/portals/`

    scp -r portal-login root@172.16.42.1:/root/portals/

Alternatively you can use [Filezilla](https://filezilla-project.org/) to copy the portals

	Host: sftp://172.16.42.1 Username: root Password: lamepassword Port: 22

Finally on the WiFi Pineapple web interface, start the Evil Portal module and then activate the portal you wish to use.

After gathering credentials, captured data will be shown as a notification on the WiFi Pineapple web interface. Logs are found at Modules > Evil Portal > Logs > View.

---


