# Currency Rates API on Lumen
This is a Lumen test project for educational purposes.

Goal: REST-service for parsing and displaying currencies.

State: done

### Take a look at [live demo][demo]

### Routes 
- `/currencies` JSON of all parsed currencies.
- `/currencies/{id}` JSON of selected (by id) currency
- `/update` Run `currency:update` artisan command to clear previous data and parse new

### Artisan commands
- `php artisan currency:update` Clear previous data and parse new 

### Currency rates source
http://www.cbr.ru/scripts/XML_daily.asp


[demo]: http://217.16.18.253/lumen-rates
