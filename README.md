# Laravel-Quotes-API
An API that fetches famous people quotes, written in Laravel and wrapped in a Docker container

<b>How to set up:</b>
- Download the project and initialize the Docker container with docker-compose up
- Open your browser and acces http://localhost:8090
- To fetch some quotes use this example endpoint http://localhost:8090/api/shout/steve-jobs?limit=10 , where steve-jobs can be replaced by other famous people , and the limit should be between 1 and 10. 
- Example of endpoint localhost:8090/api/shout/{<b>famous-person-name</b>}?limit={between <b>1-10</b>}

<p><b>List of famous persons with available quotes:</b></p>
Kevin Kruse,Napoleon Hill,Albert Einstein,Robert Frost,Florence Nightingale,Wayne Gretzky,Michael Jordan,Amelia Earhart,Babe Ruth,John Lennon,Mark Twain,Socrates,Vince Lombardi,Pablo Picasso,Maya Angelou,Christopher Columbus,Henry Ford,Frank Sinatra,Vincent Van Gogh,Aristotle,Plato  + many more

---
<p><b>Project Strucutre: (Main Files)</b></p>
Root Folder
<ul>
  <li>laravel</li>
  <li>mysql (docker mysql volue)</li>
  <li>nginx (docker nginx volume)</li>
  <li>docker-compose.yaml (main docker file that initializes all the docker containers)</li>
  <li>Dockerfile (docker-compose.yaml dependency, used for installing php extensions)</li>
</ul>
