# What is this?
This is a personal project for me to learn about frontend and backend web development with PHP and MySQL. This site is something I can use for when I get an idea, hence why it's called ideas. I personally host this via docker and protect the site with Authentik, due to no auth being build in (yet). 

# How to use
The site so far is pure PHP, so what you'd need is getting yourself a webserver running with PHP support (I use NGINX in Docker). You also need a database, I host the database seperately from my webservers, but together with PHPMyAdmin and connect them using Docker networks. You can find the layout [here](https://ideas.brendongames.com/assets/ideas.sql) until I properly structure repository.


# Plans
My plan so far is to just get something working and being able to add and edit ideas. Also custom sorting and searching are some things I'd like to add. If I feel like it, I may be able to add multi-user support, but that's a lot for a side project.

In case you're here, thank you for reading :3
