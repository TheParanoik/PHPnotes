#   Coded by Marcel Pewny   
 https://github.com/MPewny 

usage:

 On XAMPP:
 
   `[phpnotes path]/phpnotes.php?<atribute>=<value> `
   
| Atribute | Discription | Variable Type | Required | Can be empty | Default|Optional|
|----------|-------------|---------------|-----|---|---|---|
| gui|starts or disable grafic interface|bool|not required|can be empty|true|false;0|
|g |starts or disable grafic interface|bool|not required|can be empty|
|interface|starts or disable grafic interface|bool|not required|can be empty|
|x | note content |string|required|can't be empty| none |
|t | note title |string|not required|can't be empty| generated title
|type |file type |string|not required|can be empty|txt|html; js; url (Internet Shortcut); bat; sh|

          
          
          
          
  1) directly in localhost:
      save phpnotes.php as "index.php" in htdocs folder
      usage:
        localhost/?<atributes>
  2) basic:
      unzip downloaded files to htdocs
      usage:
        localhost/PHPnotes/PHPnotes.php?<atributes>
Security:
 Don't use it on online hosting.
 Otherwise someone can encode a shell script or backdoor to Your website/server
 Every time you make a note with phpnotes online
   a unicorn die

    Coded for fun
