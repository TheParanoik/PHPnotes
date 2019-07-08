#   Coded by Marcel Pewny   #
#https://github.com/MPewny #
*****************************
usage:
 On XAMPP:
   [phpnotes path]/phpnotes.php?<atribute>=<value>
    Atributes:
      gui - starts or disable grafic interface (bool) (not required)(can be empty)
          You can use without variable, it will start gui
          true/on/yes - enable User Grafic Interface
          false/off/0 - disable User Grafic Interface
      g - grafic interface (see: gui)
      interface - grafic interface (see: gui)
      x - note content (string) (required) (can't be empty)
      t - note title (string) (not required) (can't be empty)
      type - file type (not required)
          default: txt
          txt - saves file as Text File
          html / htm - saves file as HTML File
          js - saves file as JavaScript
          url - saves file as Internet Shortcut File
          bat - saves file as Batch File
          sh - saves file as Bash File
          
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
