
Clone the project

```
git clone <this-repository-url-https-or-ssh>
```

To launch project, simply run:

```
make up
```

To stop project, run:

```
make stop
```

To stop and remove all data project, run:

```
make down
```

To navigate into browser, see:


[http://localhost:8000](http://localhost:8000)


Admin credentials are :

```
username : administrator
```

```
password : root
```

Dump mysql database

```
cat mantis.sql | docker exec -i 175a3db4a19a /usr/bin/mysql -u root --password=root bugtracker
```

## Testing
- Email testing : [http://localhost:8000/admin/email_queue.php](http://localhost:8000/admin/email_queue.php)
