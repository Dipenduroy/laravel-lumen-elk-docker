# Centralised Logging System for any application in an ElasticStack. Wired up with docker-compose

Contains a docker-compose declaration that boots up both laravel/lumen services and the Elastic Stack.

Setup laravel/lumen basic steps along with composer install

After `docker-compose up`:

* Content API(Laravel): http://localhost:8080
* Image API(Laravel): http://localhost:8081
* Blog API(Lumen): http://localhost:8082
* Kibana: http://localhost:5601

# Elastic is configured with basic auth
- User:elastic
- Password:changeme

# Configure Log indices
- Add `logstash*` in log indices list
- Go to Logs section to stream realtime logs

# Configure your application to log as per logstash format
- Laravel/Lumen uses Monolog library for log option
- Configure Monolog to use logstash formatter. That happens in `app/Providers/AppServiceProvider.php`

![Slide 1](slides/slide1.jpeg "Slide 1")
![Slide 2](slides/slide2.jpeg "Slide 2")
![Slide 3](slides/slide3.jpeg "Slide 3")
![Slide 4](slides/slide4.jpeg "Slide 4")
![Slide 5](slides/slide5.jpeg "Slide 5")
![Slide 6](slides/slide6.jpeg "Slide 6")
# laravel-lumen-elk-docker
