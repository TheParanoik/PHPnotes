#   PHPnotes  
 https://github.com/TheParanoik

## usage:

 **Localhost**
 
   `[phpnotes path]/phpnotes.php?<atribute>=<value> `

  1) directly in localhost:
      save phpnotes.php as "index.php" in htdocs folder
      usage:
        localhost/?<atributes>
  2) basic:
      unzip downloaded files to htdocs
      usage:
        localhost/PHPnotes/PHPnotes.php?<atributes>
 
 **Bookmarks**
 
 * Create new bookmark in your browser
 * Set keyword
 * Set URL to `[phpnotes path]/phpnotes.php?<atribute>=%s&<atribute>=%s&... `
 * Set separator

   ## Options  
| Atribute | Discription | Variable Type | Required | Can be empty | Default|Optional|
|----------|-------------|---------------|-----|---|---|---|
| gui|starts or disable grafic interface|bool|not required| yes |true|false;0|
|g |starts or disable grafic interface|bool|not required| yes |
|interface|starts or disable grafic interface|bool|not required| yes |
|x | note content |string|required| no | none |
|t | note title |string|not required| no | generated title
|type |file type |string|not required| yes |txt|html; js; url (Internet Shortcut); bat; sh|

## Security
 Don't use it on online hosting.
 Otherwise someone can encode a shell script or backdoor to Your website/server
 Every time you make a note with phpnotes online
   a unicorn die

    Coded for fun
