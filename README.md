# Laravel-Quotes-API
An API that fetches famous people quotes, written in Laravel and wrapped in a Docker container

How to set up:
- Download the project and initialize the Docker container with docker-compose up
- Open your browser and acces http://localhost:8090
- To fetch some quotes use this example endpoint http://localhost:8090/api/shout/steve-jobs?limit=10 , where steve-jobs can be replaced by other famous people , and the limit should be between 1 and 10, http://localhost:8090/api/shout/{famous-person-name}?limit={between 1-10}

List of famous persons with available quotes:
Kevin Kruse,Napoleon Hill,Albert Einstein,Robert Frost,Florence Nightingale,Wayne Gretzky,Michael Jordan,Amelia Earhart,Babe Ruth,John Lennon,Mark Twain,Socrates,Vince Lombardi,Pablo Picasso,Maya Angelou,Christopher Columbus,Henry Ford,Frank Sinatra,Vincent Van Gogh,Aristotle,Plato  + many more


