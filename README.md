# Solution by Liam Spedding

## Project Install and Setup

To get this project up and running, run `composer install`

_This will install all the project dependencies such as **Dotenv**_

Then run `composer update` 

_This will generate the autoload files_

Then create a `.env` file and add the API keys and secrets for **both** of the APIs, using the `.env.example` as a template.

## My Thought Process

Once I had spent a few minutes rereading the README file, I had a vague plan in my head on how to proceed. However, this plan changed / evolved as I started to build the project.

First I created the index.php file in the root as the single point of entry.

Then I added composer autoloading to make adding any additional api classes easier in the future.

I then started developing the loops. I did this one step at a time, var_dump-ing the responses as I went along until I had built out the loop.

I knew in my head that I wanted the Friends/Followers to be displayed in a grid. So I added some basic styling using TailwindCSS. I chose Tailwind as it is very easy to build a good-looking UI in no time at all.

Then I added Dotenv to the project to prevent having hard coded API keys and secrets in the source code.

Once I had the basic functionality in place I then started to refactor my code. This involved dividing the index.php file into multiple files, making the index.php file smaller and easier to read.

## Additions

 - If given more time I would add a .htaccess file to the root directory to restrict access to the more sensitive parts pf the project, improving security.
 - I would also like to make the foreach loops more reusable. Possibly by creating a function and passing all the relevant data through. 
 - In and ideal world I would also have installed TailwindCSS using NPM. As I could have added some customisation to the *tailwind.config.js* file, removing the need for any extra CSS.
